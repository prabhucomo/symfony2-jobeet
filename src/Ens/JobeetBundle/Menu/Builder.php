<?php
// src/Acme/DemoBundle/Menu/Builder.php
namespace Ens\JobeetBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Create New Job', array('route' => 'ens_job_new'));
        $menu->addChild('Home Page', array('route' => 'ens_job'));
	$menu->addChild('Comments', array('uri' => '#comments'));
	$menu->addChild('Symfony2', array('uri' => 'http://symfony-reloaded.org/'));
	$menu->addChild('Coming soon');
        // ... add more children

        return $menu;
    }
}
