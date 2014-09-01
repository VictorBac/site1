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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/blog')) {
            // blog_accueil
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_accueil')), array (  '_controller' => 'site1\\BlogBundle\\Controller\\BlogController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // blog_voir
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_voir')), array (  '_controller' => 'site1\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // blog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'site1\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'blog_ajouter',);
                }

            }

            // blog_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_modifier')), array (  '_controller' => 'site1\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

            if (0 === strpos($pathinfo, '/blog/s')) {
                // blog_supprimer
                if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_supprimer')), array (  '_controller' => 'site1\\BlogBundle\\Controller\\BlogController::supprimerAction',));
                }

                // test
                if ($pathinfo === '/blog/sideMenu') {
                    return array (  '_controller' => 'site1\\BlogBundle\\Controller\\BlogController::sideMenuAction',  '_route' => 'test',);
                }

            }

        }

        // hello_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hello_homepage')), array (  '_controller' => 'site1\\HelloBundle\\Controller\\DefaultController::indexAction',));
        }

        // HelloBundleTest
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'site1\\HelloBundle\\Controller\\TestController::indexAction',  '_route' => 'HelloBundleTest',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
