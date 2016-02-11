<?php

namespace TenantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TenantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('email')
            ->add('rg')
            ->add('cpf')
            ->add('phoneRes')
            ->add('phoneCom')
            ->add('phoneCel')
            ->add('status')
            ->add('street')
            ->add('number')
            ->add('complement')
            ->add('neighborhood')
            ->add('cityId')
            ->add('stateId')
            ->add('comment')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TenantBundle\Entity\Tenant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tenantbundle_tenant';
    }
}
