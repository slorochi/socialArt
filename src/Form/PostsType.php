<?php

namespace App\Form;

use App\Entity\Posts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',TextType::class,
            [
                'required'=>'true',
                'attr'=>['class'=>'']
            ])
            ->add('likes')
            ->add('type', TextType::class, ['attr'=>["class"=>"border-none text-red-400 focus:outline-none focus:border-none px-1 outline-none bg-emerald-700"],'label' => 'type de post','label_attr'=>["class"=>"border-none text-white bg-emerald-700"]]
            )
            /* ->add('user_id') */
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Posts::class,
        ]);
    }
}
