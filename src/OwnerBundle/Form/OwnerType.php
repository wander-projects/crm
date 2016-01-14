<?php

namespace OwnerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OwnerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ownerName', 'text', array(
                'label' => 'Nome Proprietário',
                'attr' => array('class' => 'form-control col-sm-4'),
            ))
            ->add('address', 'text', array(
                'label' => 'Endereço',
                'attr' => array('class' => 'form-control col-sm-4'),
            ))
            ->add('neighborhood', 'text', array(
                'label' => 'Bairro',
                'attr' => array('class' => 'form-control col-sm-4'),
            ))
            ->add('cpf', 'text', array(
                'label' => 'CPF',
                'attr' => array('class' => 'form-control col-sm-4'),
            ))
            ->add('phoneNumber', 'text', array(
                'label' => 'Telefone',
                'attr' => array('class' => 'form-control col-sm-4'),
            ))
            ->add('rg', 'text', array(
                'label' => 'RG',
                'attr' => array('class' => 'form-control col-sm-4'),
            ))
            ->add('birthDate', 'date', array(
                'label' => 'Data Nascimento',
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => array(
                    'class' => 'form-control input-inline date-picker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-MM-yyyy'
                ),
            ))
            ->add('createdAt', 'date', array(
                'label' => 'Criado Em',
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => array(
                    'class' => 'form-control input-inline date-picker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-MM-yyyy'
                ),
            ))
            ->add('updatedAt', 'date', array(
                'label' => 'Atualizado Em',
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => array(
                    'class' => 'form-control input-inline date-picker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-MM-yyyy'
                ),
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OwnerBundle\Entity\Owner'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ownerbundle_owner';
    }
}
