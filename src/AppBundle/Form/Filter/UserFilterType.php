<?php

namespace AppBundle\Form\Filter;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', 'text', array(
            'label' => 'Usuario',
            'required' => false,
            'label_attr' => array('class' => 'sr-only'),
            'attr' => array('class' => 'form-control col-sm-4', 'placeholder' => 'Usuario')));
        
        $builder->add('email', 'text', array(
            'label' => 'E-mail',
            'required' => false,
            'label_attr' => array('class' => 'sr-only'),
            'attr' => array('class' => 'form-control col-sm-4', 'placeholder' => 'E-mail')));
    }
    
    public function getName()
    {
        return 'appbundle_user';
    }
}
