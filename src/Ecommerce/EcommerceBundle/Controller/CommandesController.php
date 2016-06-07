<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CommandesController extends Controller
{
    public function facture()
    {
        $em = $this->getDoctrine()->getManager();  
        $generator = $this->container->get('security.secure_random');
        $session = $this->getRequest()->getSession();
        $adresse = $session->get('adresse');
        $panier = $session->get('panier');
        $commande = array();
        $totalHT = 0;
        $totalTTC = 0;
               
        $facturation = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($adresse['facturation']);
        $livraison = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($adresse['livraison']);
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));

        foreach($produits as $produit)
        {
            $prixHT = ($produit->getPrix() * $panier[$produit->getId()]) ;
            $prixTTC = ($produit->getPrix() * $panier[$produit->getId()] / $produit->getTva()->getMultiplicate());
            $totalHT += $prixHT;
            $totalTTC += $prixTTC;
        
        
            
        if(!isset($commande['tva']['%'.$produit->getTva()->getVal()]))
            $commande['tva']['%'.$produit->getTva()->getVal()] = round($prixTTC - $prixHT,2);
        else
            $commande['tva']['%'.$produit->getTva()->getVal()] += round($prixTTC - $prixHT,2);

        $commande['produit'][$produit->getId()] = array(
            'reference'=> $produit->getNom(),
            'quantite' => $panier[$produit->getId()],
            'prixHT' => round($produit->getPrix()),
            'prixTTC' => round($produit->getPrix() / $produit->getTva()->getMultiplicate(),2));
        
        }

        $commande['livraison'] = array('prenom' =>$livraison->getPrenom(),
                                        'nom' => $livraison->getNom(),
                                        'telephone' => $livraison->getTelephone(),
                                        'adresse' => $livraison->getAdresse(),
                                        'cp' => $livraison->getCp(),
                                        'ville' => $livraison->getVille(),
                                        'pays' => $livraison->getPays(),
                                        'complement'=> $livraison->getComplement());

        $commande['facturation'] = array('prenom' =>$facturation->getPrenom(),
                                        'nom' => $facturation->getNom(),
                                        'telephone' => $facturation->getTelephone(),
                                        'adresse' => $facturation->getAdresse(),
                                        'cp' => $facturation->getCp(),
                                        'ville' => $livraison->getVille(),
                                        'pays' => $livraison->getPays(),
                                        'complement'=> $facturation->getComplement());

        $commande['prixHT'] = round($totalHT,2);
        $commande['prixTTC'] = round($totalTTC,2);
        $commande['token'] = bin2hex($generator->nextBytes(20));
            
            
            return $commande;
    }
           
     

    
    public function prepareCommandeAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
       
        if (!$session->has('commande'))
            $commande = new Commandes();
        else
            $commande = $em->getRepository('EcommerceBundle:Commandes')->find ($session->get('commande'));
        
        $commande->setDate(new \DateTime());
        $commande->setUtilisateur($this->container->get('security.context')->getToken()->getUser());
        $commande->setValider(0);
        $commande->setReference(0);
        $commande->setCommande($this->facture());
        
        if(!$session->has('commande'))
        {
            $em->persist($commande);
            $session->set('commande',$commande);
        }
                
        $em->flush();
        
        return new Response($commande->getId());
                
    }
    
    /*
     * Cette methode remplace l'api de banque.
     */
    public function validationCommandeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('EcommerceBundle:Commandes')->find($id);
        
        if($commande || $commande->getValider() == 1)
            throw $this->createNotFoundException ('La commande n\'existe pas');
        
        $commande->setValider(1);
        $commande->setReference(1); // Service
        $em->flush();
        
        $sesion = $this->getRequest()->getSession();
        $session->remove('adresse');
        $session->remove('panier');
        $session->remove('commande');
        
        
        $this->get('session')->getFlashBag()->add('success','Votre commande nest validé avec succés');
        return $this->redirect($this->generateUrl('produits'));
    }

}
