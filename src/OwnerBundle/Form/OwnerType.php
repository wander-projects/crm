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
                'label' => 'Nome',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('email', 'text', array(
                'label' => 'E-mail',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('postcode', 'text', array(
                'label' => 'CEP',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('address', 'text', array(
                'label' => 'Rua',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('number', 'text', array(
                'label' => 'Número',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('complement', 'text', array(
                'label' => 'Complemento',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('city', 'text', array(
                'label' => 'Cidade',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('state', 'text', array(
                'label' => 'Estado',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('neighborhood', 'text', array(
                'label' => 'Bairro',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('cpf', 'text', array(
                'label' => 'CPF',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('phoneNumber', 'text', array(
                'label' => 'Telefone',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('cellphone', 'text', array(
                'label' => 'Celular',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('rg', 'text', array(
                'label' => 'RG',
                'attr' => array('class' => 'form-control input-sm'),
            ))
            ->add('gender', 'choice', array(
                'label' => 'Sexo',
                'choices' => array(
                'masculino' => 'Masculino',
                'feminino' => 'Feminino'
                ),
                'multiple' => false,
                'expanded' => true,
                'required' => true,
            ))
            ->add('observation', 'textarea', array(
                'label' => 'Observação',
                'attr' => array('class' => 'form-control input-sm','cols' => '150', 'rows' => '5'),
            ))
            ->add('birthDate', 'date', array(
                'label' => 'Data Nascimento',
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => array(
                    'class' => 'form-control input-sm date-picker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-MM-yyyy'
                ),
            ))
//            ->add('createdAt', 'date', array(
//                'label' => 'Criado Em',
//                'widget' => 'single_text',
//                'format' => 'dd-MM-yyyy',
//                'attr' => array(
//                    'class' => 'form-control input-sm date-picker',
//                    'data-provide' => 'datepicker',
//                    'data-date-format' => 'dd-MM-yyyy'
//                ),
//            ))
//            ->add('updatedAt', 'date', array(
//                'label' => 'Atualizado Em',
//                'widget' => 'single_text',
//                'format' => 'dd-MM-yyyy',
//                'attr' => array(
//                    'class' => 'form-control input-sm date-picker',
//                    'data-provide' => 'datepicker',
//                    'data-date-format' => 'dd-MM-yyyy'
//                ),
//            ))
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
