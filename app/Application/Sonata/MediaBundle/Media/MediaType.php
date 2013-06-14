<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\MediaBundle\Media;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Sonata\MediaBundle\Provider\Pool;
use Sonata\MediaBundle\Form\DataTransformer\ProviderDataTransformer;

class MediaType extends AbstractType
{
    protected $pool;

    protected $class;
    /**
     * @param Pool   $pool
     * @param string $class
     */
    public function __construct(Pool $pool, $class)
    {print_r($pool);exit;
        $this->pool  = $pool;
        $this->class = $class;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {echo "prabhu";print_r($options);exit;
        $builder->appendNormTransformer(new ProviderDataTransformer($this->pool, array(
            'provider' => $options['provider'],
            'context'  => $options['context'],
        )));

        $this->pool->getProvider($options['provider'])->buildMediaType($builder);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {echo "prabhu";print_r($resolver);exit;
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'provider'   => null,
            'context'    => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {echo "prabhu";//print_r($resolver);
    exit;
        return 'form';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {echo "prabhu";//print_r($resolver);
    exit;
        return 'sonata_media_type';
    }
}
