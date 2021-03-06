<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('http://www.saladfruits.fr/wp-content/uploads/2016/01/legumes-jardin-bio-84553.jpg');
        $media1->setAlt('Légumes');
        $manager->persist($media1);
        
        $media2 = new Media();
        $media2->setPath('http://weknowyourdreamz.com/images/fruit/fruit-05.jpg');
        $media2->setAlt('Fruits');
        $manager->persist($media2);
        
        $media3 = new Media();
        $media3->setPath('http://www.lefruitierdelee.com/Files/119268/Img/19/poivron_rouge.jpg');
        $media3->setAlt('Poivron Rouge');
        $manager->persist($media3); 
        
        $media4 = new Media();
        $media4->setPath('http://www.afro-cooking.com/wp-content/uploads/2015/05/piment_bienfaits_afrocooking.jpg');
        $media4->setAlt('Piment');
        $manager->persist($media4);
        
        $media5 = new Media();
        $media5->setPath('http://productions-extreme.com/wp-content/uploads/2015/09/tomate.png');
        $media5->setAlt('Tomate');
        $manager->persist($media5);
        
        $media6 = new Media();
        $media6->setPath('http://www.passcourses.com/image/cache/data/Legumes/poivron%20vert%201000-1000x1000.png');
        $media6->setAlt('Poivron vert');
        $manager->persist($media6);
        
        $media7 = new Media();
        $media7->setPath('http://media.gerbeaud.net/2009/raisins.jpg');
        $media7->setAlt('Raisin');
        $manager->persist($media7);
        
        $media8 = new Media();
        $media8->setPath('http://www.paniers-17.com/wp-content/uploads/sites/297/2015/03/orange.jpg');
        $media8->setAlt('Orange');
        $manager->persist($media8);
        
        
        $manager->flush();
        
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
    }
    
    public function getOrder() {
        
        return 1;
        
    }
}