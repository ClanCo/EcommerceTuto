<?php

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class testType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder , array $options)
    {
        //Ici nous allons faire notre formulaire en php 
        // end of html
        $builder
                ->add('email','email',array('required' => false))
                ->add('nom')
                ->add('prenom')
                ->add('age')
                ->add('sexe','choice',array('choices' => array('0' => 'homme',
                                                                '1' => 'femme',
                                                                '2' => 'lesdeux') , 'preferred_choices' => array('1','2') , 'expanded' => false))
                ->add('Contenu','textarea')
                ->add('date','datetime')
                ->add('Pays','country', array('preferred_choices' => array('')))
                ->add('utilisateurs','entity',array('class' => 'Utilisateurs\UtilisateursBundle\Entity\Utilisateurs'))
                ->add('envoyer','submit');
        
    }
    
    public function getName()
    {
        return 'ecommerce_ecommercebundle_test';
    }
}
