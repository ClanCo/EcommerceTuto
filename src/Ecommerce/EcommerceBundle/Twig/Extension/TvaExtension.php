<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\EcommerceBundle\Twig\Extension;

class TvaExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('tva', array($this,'calculTva')));
    }
    
    public function calculTva($prixHT,$tva)
    {
        return round($prixHT/ $tva,2);
    }
    
    public function getName()
    {
        return 'tva_extension' ; 
    }
}
