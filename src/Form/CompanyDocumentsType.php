<?php

namespace App\Form;

use App\Form\DocumentCompanyType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CompanyDocumentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('kbis',DocumentCompanyType::class,['label'=>'KBIS'])
            ->add('assurancerc',DocumentCompanyType::class,['label'=>'Assurance RC'])
            ->add('datevalidite',DateType::class,['label'=>'Date de Validité'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
