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

        if (0 === strpos($pathinfo, '/job')) {
            // ens_job
            if (rtrim($pathinfo, '/') === '/job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ens_job');
                }

                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'ens_job',);
            }

            // ens_job_show
            if (preg_match('#^/job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_show')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::showAction',));
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
            if (preg_match('#^/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_edit')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::editAction',));
            }

            // ens_job_update
            if (preg_match('#^/job/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_ens_job_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_update')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::updateAction',));
            }
            not_ens_job_update:

            // ens_job_delete
            if (preg_match('#^/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ens_job_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_delete')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::deleteAction',));
            }
            not_ens_job_delete:

        }

        // ens_jobeet_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_jobeet_homepage')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

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
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/ibw/jobeet')) {
                if (0 === strpos($pathinfo, '/admin/ibw/jobeet/category')) {
                    // admin_ibw_jobeet_category_list
                    if ($pathinfo === '/admin/ibw/jobeet/category/list') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_list',  '_route' => 'admin_ibw_jobeet_category_list',);
                    }

                    // admin_ibw_jobeet_category_create
                    if ($pathinfo === '/admin/ibw/jobeet/category/create') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_create',  '_route' => 'admin_ibw_jobeet_category_create',);
                    }

                    // admin_ibw_jobeet_category_batch
                    if ($pathinfo === '/admin/ibw/jobeet/category/batch') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_batch',  '_route' => 'admin_ibw_jobeet_category_batch',);
                    }

                    // admin_ibw_jobeet_category_edit
                    if (preg_match('#^/admin/ibw/jobeet/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_category_edit')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_edit',));
                    }

                    // admin_ibw_jobeet_category_delete
                    if (preg_match('#^/admin/ibw/jobeet/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_category_delete')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_delete',));
                    }

                    // admin_ibw_jobeet_category_show
                    if (preg_match('#^/admin/ibw/jobeet/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_category_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_show',));
                    }

                    // admin_ibw_jobeet_category_export
                    if ($pathinfo === '/admin/ibw/jobeet/category/export') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_export',  '_route' => 'admin_ibw_jobeet_category_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ibw/jobeet/job')) {
                    // admin_ibw_jobeet_job_list
                    if ($pathinfo === '/admin/ibw/jobeet/job/list') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::listAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_list',  '_route' => 'admin_ibw_jobeet_job_list',);
                    }

                    // admin_ibw_jobeet_job_create
                    if ($pathinfo === '/admin/ibw/jobeet/job/create') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::createAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_create',  '_route' => 'admin_ibw_jobeet_job_create',);
                    }

                    // admin_ibw_jobeet_job_batch
                    if ($pathinfo === '/admin/ibw/jobeet/job/batch') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::batchAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_batch',  '_route' => 'admin_ibw_jobeet_job_batch',);
                    }

                    // admin_ibw_jobeet_job_edit
                    if (preg_match('#^/admin/ibw/jobeet/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_job_edit')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::editAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_edit',));
                    }

                    // admin_ibw_jobeet_job_delete
                    if (preg_match('#^/admin/ibw/jobeet/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_job_delete')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::deleteAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_delete',));
                    }

                    // admin_ibw_jobeet_job_show
                    if (preg_match('#^/admin/ibw/jobeet/job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_job_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::showAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_show',));
                    }

                    // admin_ibw_jobeet_job_export
                    if ($pathinfo === '/admin/ibw/jobeet/job/export') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::exportAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_export',  '_route' => 'admin_ibw_jobeet_job_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/job')) {
            // ibw_job_preview
            if (preg_match('#^/job/(?P<company>[^/]++)/(?P<location>[^/]++)/(?P<token>\\w+)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_preview')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::previewAction',));
            }

            // ibw_job_publish
            if (preg_match('#^/job/(?P<token>[^/]++)/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ibw_job_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_publish')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::publishAction',));
            }
            not_ibw_job_publish:

        }

        // ibw_jobeet_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_jobeet_homepage');
            }

            return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'ibw_jobeet_homepage',);
        }

        // IbwJobeetBundle_category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'IbwJobeetBundle_category')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryController::showAction',  'page' => 1,));
        }

        // ibw_job
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_job');
            }

            return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'ibw_job',);
        }

        // ibw_job_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::showAction',));
        }

        // ibw_job_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::newAction',  '_route' => 'ibw_job_new',);
        }

        // ibw_job_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ibw_job_create;
            }

            return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::createAction',  '_route' => 'ibw_job_create',);
        }
        not_ibw_job_create:

        // ibw_job_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_edit')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::editAction',));
        }

        // ibw_job_update
        if (preg_match('#^/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_ibw_job_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_update')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::updateAction',));
        }
        not_ibw_job_update:

        // ibw_job_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_ibw_job_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_delete')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::deleteAction',));
        }
        not_ibw_job_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
