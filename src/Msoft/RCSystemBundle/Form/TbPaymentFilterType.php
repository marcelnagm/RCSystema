<?php

namespace Msoft\RCSystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TbPaymentFilterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idMethod', null,array('required' => false))
            ->add('idClient',null,array('required' => false))
            ->add('date_from','text',array('required' => false,'mapped' => false))
            ->add('date_to','text',array('required' => false,'mapped' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        
        $resolver->setDefaults(array(
            'data_class' => 'Msoft\RCSystemBundle\Entity\TbPayment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'msoft_rcsystembundle_tbpaymentfilter';
    }
}
