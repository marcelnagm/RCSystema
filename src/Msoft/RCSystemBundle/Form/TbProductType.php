<?php

namespace Msoft\RCSystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TbProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('barcode')
            ->add('info')            
            ->add('idCategory')
            ->add('idSubcategory') 
//            ->add('idSubcategory', 'genemu_jqueryselect2_choice', array(
//               'attr' => array('id' => 'maaaaaaano'),
////            'class' => 'Msoft\RCSystemBundle\Entity\TbSubcategory',
////            'property' => 'description',
//            'configs' => array(
//                'minimumInputLength' => 2, // Wether or not multiple values are allowed (default to false)
//                'placeholder' => 'Votre ville',                
//                'width' => '250px'
//        )));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Msoft\RCSystemBundle\Entity\TbProduct'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'msoft_rcsystembundle_tbproduct';
    }
}
