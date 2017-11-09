<?php

namespace Msoft\RCSystemBundle\Form;

use Msoft\RCSystemBundle\Entity\TbEntry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TbStockType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
//        $id = new TbEntry();
//        $id =  $options['id'];
        $builder               
                ->add('idProduct',null,array('required' => 'required'))
                ->add('quantity')
                ->add('idEntry')
                ->add('price_cost')
                ->add('price_sell')
                ->add('submit', 'submit', array('label' => 'Create'));
        ;
     
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Msoft\RCSystemBundle\Entity\TbStock'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'msoft_rcsystembundle_tbstock';
    }

}
