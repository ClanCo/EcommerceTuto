<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class UtilisateursAdressesData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    
    
    public function load(ObjectManager $manager)
    {
        $adresse1 = new UtilisateursAdresses();
        $adresse1->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1->setNom('Keyinfuser');
        $adresse1->setPrenom('Coco');
        $adresse1->setTelephone('066612567');
        $adresse1->setAdresse('3 rue Brocar');
        $adresse1->setCp('13630');
        $adresse1->setPays('Nepalistant');
        $adresse1->setVille('Ougdounkoulou');
        $adresse1->setComplement('face à ta face');
        $manager->persist($adresse1);
        
        $adresse2 = new UtilisateursAdresses();
        $adresse2->setUtilisateur($this->getReference('utilisateur2'));
        $adresse2->setNom('Infuserkey');
        $adresse2->setPrenom('Momo');
        $adresse2->setTelephone('079012567');
        $adresse2->setAdresse('19 rue de la paix');
        $adresse2->setCp('13098');
        $adresse2->setPays('Oklantawa');
        $adresse2->setVille('Tarba');
        $adresse2->setComplement('Dans l\'espace');
        $manager->persist($adresse2);
        
        $manager->flush();
        
       // $this->addReference('adresse1', $adresse1);
       // $this->addReference('adresse2', $adresse2);
          
        
    }
    
    public function getOrder() {
        
        return 6;
        
    }
}