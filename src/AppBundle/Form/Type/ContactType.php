<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array('label' => 'Ім\'я'))
            ->add('surname', null, array('label' => 'Прізвище'))
            ->add('phone', null, array('label' => 'Телефон'))
            ->add('topic', null, array('label' => 'Тема'))
            ->add('message', 'textarea', array('label' => 'Текст'));
    }

//    /**
//     * @param OptionsResolverInterface $resolver
//     */
//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => 'AppBundle\Entity\Contact',
//            'csrf_protection' => false,
//            'allow_extra_fields' => true
//        ));
//    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'contacts';
    }
}