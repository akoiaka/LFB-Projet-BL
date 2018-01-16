<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/accueil')) {
                // page1
                if ('/accueil' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::homeAction',  '_route' => 'page1',);
                }

                // page_accueil
                if ('/accueil' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle:Controller:Default',  '_route' => 'page_accueil',);
                }

            }

            elseif (0 === strpos($pathinfo, '/article')) {
                // articles
                if ('/articles' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listearticlesAction',  '_route' => 'articles',);
                }

                // article
                if ('/article' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::articleAction',  '_route' => 'article',);
                }

            }

            // archives
            if ('/archives' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::archivesAction',  '_route' => 'archives',);
            }

        }

        elseif (0 === strpos($pathinfo, '/client')) {
            // clients
            if ('/clients' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listeclientsAction',  '_route' => 'clients',);
            }

            // client
            if ('/client' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ficheclientAction',  '_route' => 'client',);
            }

        }

        elseif (0 === strpos($pathinfo, '/bl')) {
            // bl
            if ('/bl' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::blAction',  '_route' => 'bl',);
            }

            // blpreview
            if ('/blpreview' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::blpreviewAction',  '_route' => 'blpreview',);
            }

        }

        // factures
        if ('/factures' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::facturesAction',  '_route' => 'factures',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // bllist
            if ('/listebl' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::bllistAction',  '_route' => 'bllist',);
            }

            // factlist
            if ('/listefactures' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::factlistAction',  '_route' => 'factlist',);
            }

            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

        }

        // modifarticle
        if ('/modificationarticle' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::modifarticleAction',  '_route' => 'modifarticle',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
