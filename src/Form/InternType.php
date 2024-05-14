<?php

namespace App\Form;

use App\Entity\Intern;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class InternType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'First name is required.'
                    ])                ],
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter first name']
                
            ])
            ->add('last_name', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Last name is required.'
                    ])
                ],
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter last name', 'required' => true]
            ])
            ->add('duration', IntegerType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Duration is required.'
                    ])
                ],
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter duration in months']
            ])
            ->add('subject', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Subject is required.'
                    ])
                ],
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter subject']
            ])
            ->add('salary', NumberType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Salary is required.'
                    ])
                ],
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter salary amount']
            ])
            ->add('eval', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Evaluation is required.'
                    ])
                ],
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter evaluation']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Intern::class,
        ]);
    }
}
