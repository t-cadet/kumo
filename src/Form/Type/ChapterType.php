<?php

namespace kumo\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints as Assert;

class ChapterType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('id', IntegerType::class, array(
                    'required'  => false
                ))
                ->add('prefix', TextType::class, array(
                    'required'  => false
                ))
                ->add('title', TextType::class, array(
                    'required'    => false
                ))
                ->add('content', TextareaType::class, array(
                    'required'    => false
        ));
    }

    public function getName() {
        return 'chapter';
    }

}
