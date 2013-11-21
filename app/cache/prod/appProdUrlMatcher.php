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
