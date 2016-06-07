<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Ecommerce\EcommerceBundle\Entity\Categories;

class ProduitsController extends Controller
{
    
    public function produitsAction(Categories $categorie = null)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        
        if($categorie != null)
            $produits = $em->getRepository('EcommerceBundle:Produits')->byCategorie($categorie);
        else
            $produits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => '1'));
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else 
            $panier = false;
                
        
        
        
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits'=> $produits,
                                                                                                'panier'=>$panier));
    }
    
    public function presentationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);
        $session = $this->getRequest()->getSession();
        
        if(!$produit) throw $this->createNotFoundException('La page n\'existe pas');
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else 
            $panier = false;
                
        
        
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig', array('produit' => $produit,
                                                                                                     'panier' => $panier));
    }
    
    public function rechercheAction() 
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }
    
    public function rechercheTraitementAction()
    {
        $form = $this->createForm(new RechercheType());
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('La page n\'existe pas!');
            
        }

        
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
    }
}