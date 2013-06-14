<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\MediaBundle\Admin;

use Sonata\MediaBundle\Admin\BaseMediaAdmin as Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class MediaAdmin extends Admin
{
//    protected function configureFormFields(FormMapper $formMapper)
//    {              
//        $provider = $_GET["provider"];
//        if ($provider == 'sonata.media.provider.image' || $provider == 'sonata.media.provider.file') {
//            $form_label = 'File';
//            $form_type = 'file';
//        } else {
//            $form_label = 'URL';
//            $form_type = 'text';
//        }
//        $formMapper->add('name', $form_type, array('label' => $form_label, 'required' => true));
//    }
    /**
     * @param  \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('providerReference')
            //->add('enabled')
            ->add('context')
        ;

        $providers = array();
//        $datagridMapper = 
//            ->add('enabled', 'choice', array(
//                'choices' => array(
//                    0 => 'Yes',
//                    1 => 'No'
//                ),
//                'data' => 1
//            ));
        $enabled = array( 
                  '1' => 'Yes',
                  '0' => 'No'       
                );
        $datagridMapper->add('enabled', 'doctrine_orm_choice', array(
            'field_options'=> array(
                'choices' => $enabled,
                'required' => false,
                'multiple' => false,
                'expanded' => false,
            ),
            'field_type'=> 'choice',
        ));
        $providerNames = (array) $this->pool->getProviderNamesByContext($this->getPersistentParameter('context', $this->pool->getDefaultContext()));
        foreach ($providerNames as $name) {
            $providers[$name] = $name;
        }
        $providers = array( 
                  'sonata.media.provider.image' => 'Image',
                  'sonata.media.provider.file' => 'File',
                  'sonata.media.provider.youtube' => 'Youtube',
                  'sonata.media.provider.vimeo' => 'VIMEO',
                  'sonata.media.provider.dailymotion' => 'DailyMotion'
                );
        $datagridMapper->add('providerName', 'doctrine_orm_choice', array(
            'field_options'=> array(
                'choices' => $providers,
                'required' => false,
                'multiple' => false,
                'expanded' => false,
            ),
            'field_type'=> 'choice',
        ));
    }
}
