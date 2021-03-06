<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/admin')) {
            // app_admin_admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::admin',  '_route' => 'app_admin_admin',);
            }

            // app_admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::admin',  '_route' => 'app_admin',);
            }

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/list')) {
                // list
                if (preg_match('#^/list/(?P<master_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list')), array (  '_controller' => 'App\\Controller\\ListController::list',));
                }

                // app_list
                if ('/list' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ListController::list',  '_route' => 'app_list',);
                }

                if (0 === strpos($pathinfo, '/list-')) {
                    // app_listCreate
                    if ('/list-create' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\ListCreateController::listCreate',  '_route' => 'app_listCreate',);
                    }

                    // app_listEdit
                    if ('/list-edit' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\ListEditController::listEdit',  '_route' => 'app_listEdit',);
                    }

                    // app_listDelete
                    if ('/list-delete' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\ListDeleteController::listDelete',  '_route' => 'app_listDelete',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // login
                if ('/login' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
                }

                // app_done
                if ('/login' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\SecutiyController::login',  '_route' => 'app_done',);
                }

            }

            // logout
            if ('/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

        }

        elseif (0 === strpos($pathinfo, '/master')) {
            // list_show
            if ('/master' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\MasterListController::masterList',  '_route' => 'list_show',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'list_show'));
                }

                return $ret;
            }

            // list_delete
            if (0 === strpos($pathinfo, '/master-delete') && preg_match('#^/master\\-delete/(?P<master_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_delete')), array (  '_controller' => 'App\\Controller\\MasterListDeleteController::MasterDelete',));
            }

            // list_edit
            if (0 === strpos($pathinfo, '/master-edit') && preg_match('#^/master\\-edit/(?P<master_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_edit')), array (  '_controller' => 'App\\Controller\\MasterListEditController::MasterEdit',));
            }

            // app_masterList
            if ('/master' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MasterListController::masterList',  '_route' => 'app_masterList',);
            }

            if (0 === strpos($pathinfo, '/master-')) {
                // app_masterCreate
                if ('/master-create' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\MasterListCreateController::MasterCreate',  '_route' => 'app_masterCreate',);
                }

                // app_masterEdit
                if ('/master-edit' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\MasterListEditController::MasterEdit',  '_route' => 'app_masterEdit',);
                }

                // app_masterDelete
                if ('/master-delete' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\MasterListDeleteController::MasterDelete',  '_route' => 'app_masterDelete',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // user_registration
            if ('/register' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\RegisterController::registerAction',  '_route' => 'user_registration',);
            }

            // app_task
            if ('/register' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\RegisterController::registerAction',  '_route' => 'app_task',);
            }

        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\MainController::index',  '_route' => 'index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
