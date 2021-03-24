<?php

declare(strict_types=1);


namespace App\Form\Extension;


use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    /**
     * @param FormBuilderInterface|FormBuilder|FormBuilder[] $builder
     * @param string[] $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isEndOfLife', CheckboxType::class, [
                'required' => true,
                'label' => 'app.form.product.is.end.of.life'
            ]);

    }

    /**
     * @return iterable|string[]
     */
    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
