<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheType extends AbstractType
{
    
    public function buildForm(FormbuilderInterface $builder, array $option)
    {
        $builder->add('recherche','text', array('label' => false, 'attr' => array('class => input-medium search-query')));        
    }
    
    public function getName()
    {
        return 'ecommerce_ecommercebundle_recherche' ;
    }
    
}