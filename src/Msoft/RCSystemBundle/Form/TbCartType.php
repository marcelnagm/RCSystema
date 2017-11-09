<?php

namespace Msoft\RCSystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class TbCartType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {     
        $builder
            ->add('idProduct',null,array('required' => 'required',
    'query_builder' => function(EntityRepository $er) {
        return $er->createQueryBuilder('u')->andWhere('u.quantity > 0');
    }))            
            ->add('quantity',null,array('required' => 'required'))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Msoft\RCSystemBundle\Entity\TbCart'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'msoft_rcsystembundle_tbcart';
    }
}
