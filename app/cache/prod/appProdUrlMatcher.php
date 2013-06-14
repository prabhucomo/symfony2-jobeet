<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
