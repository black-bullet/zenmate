<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;

class CommentType extends AbstractType
{
    /**
     * @param FormBuilder $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', null, array('label'=>'Ім\'я'))
            ->add('comment', null, array('label'=>'Коментар'))
            //->add('approved')
            //->add('blog')
        ;
    }

    public function getName()
    {
        return 'comment';
    }
}