<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // EnsJobeetBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'EnsJobeetBundle_homepage');
            }

            return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'EnsJobeetBundle_homepage',);
        }

        if (0 === strpos($pathinfo, '/job')) {
            // ens_job
            if (rtrim($pathinfo, '/') === '/job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ens_job');
                }

                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'ens_job',);
            }

            // ens_job_new
            if ($pathinfo === '/job/new') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::newAction',  '_route' => 'ens_job_new',);
            }

            // ens_job_create
            if ($pathinfo === '/job/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_create;
                }

                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::createAction',  '_route' => 'ens_job_create',);
            }
            not_ens_job_create:

            // ens_job_edit
            if (preg_match('#^/job/(?P<token>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_edit')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::editAction',));
            }

            // ens_job_update
            if (preg_match('#^/job/(?P<token>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_update')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::updateAction',));
            }
            not_ens_job_update:

            // ens_job_delete
            if (preg_match('#^/job/(?P<token>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_delete')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::deleteAction',));
            }
            not_ens_job_delete:

            // ens_job_show
            if (preg_match('#^/job/(?P<company>[^/]++)/(?P<location>[^/]++)/(?P<id>\\d+)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_show')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::showAction',));
            }

            // ens_job_preview
            if (preg_match('#^/job/(?P<company>[^/]++)/(?P<location>[^/]++)/(?P<token>\\w+)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_preview')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::previewAction',));
            }

            // ens_job_publish
            if (preg_match('#^/job/(?P<token>[^/]++)/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_publish')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::publishAction',));
            }
            not_ens_job_publish:

        }

        // EnsJobeetBundle_category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'EnsJobeetBundle_category')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryController::showAction',  'page' => 1,));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if ($pathinfo === '/admin/core/get-short-object-description') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/ens/jobeet')) {
                if (0 === strpos($pathinfo, '/admin/ens/jobeet/category')) {
                    // admin_ens_jobeet_category_list
                    if ($pathinfo === '/admin/ens/jobeet/category/list') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_list',  '_route' => 'admin_ens_jobeet_category_list',);
                    }

                    // admin_ens_jobeet_category_create
                    if ($pathinfo === '/admin/ens/jobeet/category/create') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_create',  '_route' => 'admin_ens_jobeet_category_create',);
                    }

                    // admin_ens_jobeet_category_batch
                    if ($pathinfo === '/admin/ens/jobeet/category/batch') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_batch',  '_route' => 'admin_ens_jobeet_category_batch',);
                    }

                    // admin_ens_jobeet_category_edit
                    if (preg_match('#^/admin/ens/jobeet/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_category_edit')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_edit',));
                    }

                    // admin_ens_jobeet_category_delete
                    if (preg_match('#^/admin/ens/jobeet/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_category_delete')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_delete',));
                    }

                    // admin_ens_jobeet_category_show
                    if (preg_match('#^/admin/ens/jobeet/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_category_show')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_show',));
                    }

                    // admin_ens_jobeet_category_export
                    if ($pathinfo === '/admin/ens/jobeet/category/export') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_export',  '_route' => 'admin_ens_jobeet_category_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ens/jobeet/job')) {
                    // admin_ens_jobeet_job_list
                    if ($pathinfo === '/admin/ens/jobeet/job/list') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::listAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_list',  '_route' => 'admin_ens_jobeet_job_list',);
                    }

                    // admin_ens_jobeet_job_create
                    if ($pathinfo === '/admin/ens/jobeet/job/create') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::createAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_create',  '_route' => 'admin_ens_jobeet_job_create',);
                    }

                    // admin_ens_jobeet_job_batch
                    if ($pathinfo === '/admin/ens/jobeet/job/batch') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::batchAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_batch',  '_route' => 'admin_ens_jobeet_job_batch',);
                    }

                    // admin_ens_jobeet_job_edit
                    if (preg_match('#^/admin/ens/jobeet/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_job_edit')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::editAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_edit',));
                    }

                    // admin_ens_jobeet_job_delete
                    if (preg_match('#^/admin/ens/jobeet/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_job_delete')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::deleteAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_delete',));
                    }

                    // admin_ens_jobeet_job_show
                    if (preg_match('#^/admin/ens/jobeet/job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_job_show')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::showAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_show',));
                    }

                    // admin_ens_jobeet_job_export
                    if ($pathinfo === '/admin/ens/jobeet/job/export') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::exportAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_export',  '_route' => 'admin_ens_jobeet_job_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/media')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/media/media')) {
                        // admin_sonata_media_media_list
                        if ($pathinfo === '/admin/sonata/media/media/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                        }

                        // admin_sonata_media_media_create
                        if ($pathinfo === '/admin/sonata/media/media/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                        }

                        // admin_sonata_media_media_batch
                        if ($pathinfo === '/admin/sonata/media/media/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                        }

                        // admin_sonata_media_media_edit
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                        }

                        // admin_sonata_media_media_delete
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                        }

                        // admin_sonata_media_media_show
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::viewAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                        }

                        // admin_sonata_media_media_export
                        if ($pathinfo === '/admin/sonata/media/media/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                        }

                        // admin_sonata_media_media_view
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::viewAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_view',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/media/gallery')) {
                        // admin_sonata_media_gallery_list
                        if ($pathinfo === '/admin/sonata/media/gallery/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                        }

                        // admin_sonata_media_gallery_create
                        if ($pathinfo === '/admin/sonata/media/gallery/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                        }

                        // admin_sonata_media_gallery_batch
                        if ($pathinfo === '/admin/sonata/media/gallery/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                        }

                        // admin_sonata_media_gallery_edit
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                        }

                        // admin_sonata_media_gallery_delete
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                        }

                        // admin_sonata_media_gallery_show
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                        }

                        // admin_sonata_media_gallery_export
                        if ($pathinfo === '/admin/sonata/media/gallery/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/galleryhasmedia')) {
                            // admin_sonata_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                            }

                            // admin_sonata_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                            }

                            // admin_sonata_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                            }

                            // admin_sonata_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                            }

                            // admin_sonata_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                            }

                            // admin_sonata_media_galleryhasmedia_show
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                            }

                            // admin_sonata_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/page')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/page/page')) {
                        // admin_sonata_page_page_list
                        if ($pathinfo === '/admin/sonata/page/page/list') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_list',  '_route' => 'admin_sonata_page_page_list',);
                        }

                        // admin_sonata_page_page_create
                        if ($pathinfo === '/admin/sonata/page/page/create') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_create',  '_route' => 'admin_sonata_page_page_create',);
                        }

                        // admin_sonata_page_page_batch
                        if ($pathinfo === '/admin/sonata/page/page/batch') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_batch',  '_route' => 'admin_sonata_page_page_batch',);
                        }

                        // admin_sonata_page_page_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_edit',));
                        }

                        // admin_sonata_page_page_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_delete',));
                        }

                        // admin_sonata_page_page_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_show',));
                        }

                        // admin_sonata_page_page_export
                        if ($pathinfo === '/admin/sonata/page/page/export') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_export',  '_route' => 'admin_sonata_page_page_export',);
                        }

                        // admin_sonata_page_page_block_list
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/list$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_list')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_list',));
                        }

                        // admin_sonata_page_page_block_create
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/create$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_create')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_create',));
                        }

                        // admin_sonata_page_page_block_batch
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/batch$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_batch')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_batch',));
                        }

                        // admin_sonata_page_page_block_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_edit',));
                        }

                        // admin_sonata_page_page_block_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_delete',));
                        }

                        // admin_sonata_page_page_block_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_show',));
                        }

                        // admin_sonata_page_page_block_export
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/export$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_export')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_export',));
                        }

                        // admin_sonata_page_page_block_savePosition
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/save\\-position$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_savePosition')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::savePositionAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_savePosition',));
                        }

                        // admin_sonata_page_page_block_view
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_view')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_view',));
                        }

                        // admin_sonata_page_page_snapshot_list
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/list$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_list')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_list',));
                        }

                        // admin_sonata_page_page_snapshot_create
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/create$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_create')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_create',));
                        }

                        // admin_sonata_page_page_snapshot_batch
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/batch$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_batch')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_batch',));
                        }

                        // admin_sonata_page_page_snapshot_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_edit',));
                        }

                        // admin_sonata_page_page_snapshot_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_delete',));
                        }

                        // admin_sonata_page_page_snapshot_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_show',));
                        }

                        // admin_sonata_page_page_snapshot_export
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/export$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_export')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_export',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/page/block')) {
                        // admin_sonata_page_block_list
                        if ($pathinfo === '/admin/sonata/page/block/list') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_list',  '_route' => 'admin_sonata_page_block_list',);
                        }

                        // admin_sonata_page_block_create
                        if ($pathinfo === '/admin/sonata/page/block/create') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_create',  '_route' => 'admin_sonata_page_block_create',);
                        }

                        // admin_sonata_page_block_batch
                        if ($pathinfo === '/admin/sonata/page/block/batch') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_batch',  '_route' => 'admin_sonata_page_block_batch',);
                        }

                        // admin_sonata_page_block_edit
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_edit',));
                        }

                        // admin_sonata_page_block_delete
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_delete',));
                        }

                        // admin_sonata_page_block_show
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_show',));
                        }

                        // admin_sonata_page_block_export
                        if ($pathinfo === '/admin/sonata/page/block/export') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_export',  '_route' => 'admin_sonata_page_block_export',);
                        }

                        // admin_sonata_page_block_savePosition
                        if ($pathinfo === '/admin/sonata/page/block/save-position') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::savePositionAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_savePosition',  '_route' => 'admin_sonata_page_block_savePosition',);
                        }

                        // admin_sonata_page_block_view
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_view')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_view',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/page/s')) {
                        if (0 === strpos($pathinfo, '/admin/sonata/page/snapshot')) {
                            // admin_sonata_page_snapshot_list
                            if ($pathinfo === '/admin/sonata/page/snapshot/list') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_list',  '_route' => 'admin_sonata_page_snapshot_list',);
                            }

                            // admin_sonata_page_snapshot_create
                            if ($pathinfo === '/admin/sonata/page/snapshot/create') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_create',  '_route' => 'admin_sonata_page_snapshot_create',);
                            }

                            // admin_sonata_page_snapshot_batch
                            if ($pathinfo === '/admin/sonata/page/snapshot/batch') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_batch',  '_route' => 'admin_sonata_page_snapshot_batch',);
                            }

                            // admin_sonata_page_snapshot_edit
                            if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_edit',));
                            }

                            // admin_sonata_page_snapshot_delete
                            if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_delete',));
                            }

                            // admin_sonata_page_snapshot_show
                            if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_show',));
                            }

                            // admin_sonata_page_snapshot_export
                            if ($pathinfo === '/admin/sonata/page/snapshot/export') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_export',  '_route' => 'admin_sonata_page_snapshot_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/page/site')) {
                            // admin_sonata_page_site_list
                            if ($pathinfo === '/admin/sonata/page/site/list') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_list',  '_route' => 'admin_sonata_page_site_list',);
                            }

                            // admin_sonata_page_site_create
                            if ($pathinfo === '/admin/sonata/page/site/create') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_create',  '_route' => 'admin_sonata_page_site_create',);
                            }

                            // admin_sonata_page_site_batch
                            if ($pathinfo === '/admin/sonata/page/site/batch') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_batch',  '_route' => 'admin_sonata_page_site_batch',);
                            }

                            // admin_sonata_page_site_edit
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_edit',));
                            }

                            // admin_sonata_page_site_delete
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_delete',));
                            }

                            // admin_sonata_page_site_show
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_show',));
                            }

                            // admin_sonata_page_site_export
                            if ($pathinfo === '/admin/sonata/page/site/export') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_export',  '_route' => 'admin_sonata_page_site_export',);
                            }

                            // admin_sonata_page_site_snapshots
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/snapshots$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_snapshots')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::snapshotsAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_snapshots',));
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/notification/message')) {
                    // admin_sonata_notification_message_list
                    if ($pathinfo === '/admin/sonata/notification/message/list') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::listAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_list',  '_route' => 'admin_sonata_notification_message_list',);
                    }

                    // admin_sonata_notification_message_batch
                    if ($pathinfo === '/admin/sonata/notification/message/batch') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::batchAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_batch',  '_route' => 'admin_sonata_notification_message_batch',);
                    }

                    // admin_sonata_notification_message_delete
                    if (preg_match('#^/admin/sonata/notification/message/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_notification_message_delete')), array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::deleteAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_delete',));
                    }

                    // admin_sonata_notification_message_show
                    if (preg_match('#^/admin/sonata/notification/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_notification_message_show')), array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::showAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_show',));
                    }

                    // admin_sonata_notification_message_export
                    if ($pathinfo === '/admin/sonata/notification/message/export') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::exportAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_export',  '_route' => 'admin_sonata_notification_message_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/exceptions')) {
            // sonata_page_exceptions_list
            if ($pathinfo === '/exceptions/list') {
                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageController::exceptionsListAction',  '_route' => 'sonata_page_exceptions_list',);
            }

            // sonata_page_exceptions_edit
            if (0 === strpos($pathinfo, '/exceptions/edit') && preg_match('#^/exceptions/edit/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_page_exceptions_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageController::exceptionEditAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sonata/page/cache')) {
            // sonata_page_cache_esi
            if (0 === strpos($pathinfo, '/sonata/page/cache/esi') && preg_match('#^/sonata/page/cache/esi/(?P<_token>[^/]++)/(?P<manager>[^/]++)/(?P<page_id>[^/]++)/(?P<block_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_page_cache_esi')), array (  '_controller' => 'sonata.page.cache.esi:cacheAction',));
            }

            // sonata_page_cache_ssi
            if (0 === strpos($pathinfo, '/sonata/page/cache/ssi') && preg_match('#^/sonata/page/cache/ssi/(?P<_token>[^/]++)/(?P<manager>[^/]++)/(?P<page_id>[^/]++)/(?P<block_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_page_cache_ssi')), array (  '_controller' => 'sonata.page.cache.ssi:cacheAction',));
            }

            if (0 === strpos($pathinfo, '/sonata/page/cache/js-')) {
                // sonata_page_js_async_cache
                if ($pathinfo === '/sonata/page/cache/js-async') {
                    return array (  '_controller' => 'sonata.page.cache.js_async:cacheAction',  '_route' => 'sonata_page_js_async_cache',);
                }

                // sonata_page_js_sync_cache
                if ($pathinfo === '/sonata/page/cache/js-sync') {
                    return array (  '_controller' => 'sonata.page.cache.js_sync:cacheAction',  '_route' => 'sonata_page_js_sync_cache',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin/log')) {
            if (0 === strpos($pathinfo, '/admin/login')) {
                // sonata_user_admin_security_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if ($pathinfo === '/admin/login_check') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                }

            }

            // sonata_user_admin_security_logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
