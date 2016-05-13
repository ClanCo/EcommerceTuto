<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pages\PagesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pages\PagesBundle\Entity\Pages;

class LoadGroupData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $page1 = new Pages();
        $page1->setTitre('CVG');
        $page1->setContenu('<html>
         <head>
        <title>Test Page 1</title>
        </head>
        <body>
        <p>Bonjour le monde from page 1</p>
        </body>
        </html>');
        
        $manager->persist($page1);
        
        
        $page2 = new Pages();
        $page2->setTitre('mentions Légales');
        $page2->setContenu('<html>
            <head>
            <title>Test Page 2</title>
            </head>
            <body>
             <p>Bonjour le monde from page 2</p>
            </body>
            </html>');
        
        $manager->persist($page2);
        
        $manager->flush();
        
        
    }

    public function getOrder()
    {
        return 1;
    }
}