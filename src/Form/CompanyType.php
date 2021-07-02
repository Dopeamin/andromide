<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,['label'=>'Dénomination Sociale'])
            ->add('adress')
            ->add('code_postal')
            ->add('ville')
            ->add('phone')
            ->add('number_siret',IntegerType::class,['label'=>'Siret'])
            ->add('number_tva')
            ->add('juridic_form',TextType::class,['label'=>'Forme Juridique'])
            ->add('representant_legal')
            ->add('Suivant',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}
