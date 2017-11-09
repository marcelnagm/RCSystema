<?php

namespace Msoft\RCSystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Msoft\RCSystemBundle\Entity\TbMethodPayment;

class TbMethodPaymentType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('type','choice',array('choices' => TbMethodPayment::getChoices()))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Msoft\RCSystemBundle\Entity\TbMethodPayment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'msoft_rcsystembundle_tbmethodpayment';
    }
}
