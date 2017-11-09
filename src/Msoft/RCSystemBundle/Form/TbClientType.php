<?php

namespace Msoft\RCSystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TbClientType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('documentId')
            ->add('name')
            ->add('cellphone')
            ->add('address')
            ->add('email')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Msoft\RCSystemBundle\Entity\TbClient'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'msoft_rcsystembundle_tbclient';
    }
}
