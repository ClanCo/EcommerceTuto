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
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setDescription("Le poivron est un groupe cultivars");
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media3'));
        $produit1->setNom('Poivron Rouge');
        $produit1->setPrix('1.99');
        $produit1->setTva($this->getReference('tva2'));
        $manager->persist($produit1);
        
        $produit2 = new Produits();
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setDescription("Le piment a tendance à piquer");
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media4'));
        $produit2->setNom('Piment');
        $produit2->setPrix('3.99');
        $produit2->setTva($this->getReference('tva2'));
        $manager->persist($produit2);
        
        $produit3 = new Produits();
        $produit3->setCategorie($this->getReference('categorie1'));
        $produit3->setDescription("La tomate est un fruit mais est reconnu comme légume");
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media5'));
        $produit3->setNom('Tomate');
        $produit3->setPrix('0.99');
        $produit3->setTva($this->getReference('tva2'));
        $manager->persist($produit3);
        
        $produit4 = new Produits();
        $produit4->setCategorie($this->getReference('categorie1'));
        $produit4->setDescription("Le poivron vert est plus vert que le rouge");
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media6'));
        $produit4->setNom('Poivron Vert');
        $produit4->setPrix('2.99');
        $produit4->setTva($this->getReference('tva2'));
        $manager->persist($produit4);
        
        $produit5 = new Produits();
        $produit5->setCategorie($this->getReference('categorie2'));
        $produit5->setDescription("L'orange ça jutte oklm joker");
        $produit5->setDisponible('1');
        $produit5->setImage($this->getReference('media8'));
        $produit5->setNom('Orange');
        $produit5->setPrix('0.99');
        $produit5->setTva($this->getReference('tva2'));
        $manager->persist($produit5);
        
        $produit6 = new Produits();
        $produit6->setCategorie($this->getReference('categorie2'));
        $produit6->setDescription("Le raisin ca ce mange en grappe et par les romains");
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media7'));
        $produit6->setNom('Raison');
        $produit6->setPrix('5.20');
        $produit6->setTva($this->getReference('tva2'));
        $manager->persist($produit6);
        
        $manager->flush();
        
        
    }
    
    public function getOrder() {
        
        return 4;
        
    }
}