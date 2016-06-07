<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\EcommerceBundle\Twig\Extension;

class MontantTvaExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('montantTva', array($this,'montantTva')));
    }
    
    public function montantTva($prixHT,$tva)
    {
        return round((($prixHT/ $tva) -$prixHT), 2);
    }
    
    public function getName()
    {
        return 'montant_tva_extension' ; 
    }
}
