<?php

namespace site1\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{

        /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date',        'date')
            ->add('titre',       'text')
            ->add('contenu',     'textarea')
            ->add('auteur',      'text')
            ->add('publication', 'checkbox', array('required' => false))
            ->add('image',        new ImageType())
            ->add('categories', 'collection', array('type'         => new CategorieType(),
                                              'allow_add'    => true,
                                              'allow_delete' => true));
            // ->add('categories', 'entity', array(
            //       'class'    => 'BlogBundle:Categorie',
            //       'property' => 'nom',
            //       'multiple' => true,
            //       'expanded' => true)
            //     );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'site1\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'site1_blogbundle_article';
    }
}
