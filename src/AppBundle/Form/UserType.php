<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', array(
                'label' => 'Email',
                'label_attr' => array('class' => 'sr-only'),
                'attr' => array('class' => 'form-control col-sm-4', 'placeholder' => 'Email')
            ))
            ->add('username', 'text', array(
                'label' => 'Username',
                'label_attr' => array('class' => 'sr-only'),
                'attr' => array('class' => 'form-control col-sm-4', 'placeholder' => 'Username')
            ))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'first_options'  => array(
                    'label' => 'Password',
                    'label_attr' => array('class' => 'sr-only'),
                    'attr' => array('class' => 'form-control col-sm-4', 'placeholder' => 'Password')
                    ),
                'second_options' => array(
                    'label' => 'Repeat Password',
                    'label_attr' => array('class' => 'sr-only'),
                    'attr' => array('class' => 'form-control col-sm-4', 'placeholder' => 'Repeat Password')
                    ),
            ));
            
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'user';
    }
}

