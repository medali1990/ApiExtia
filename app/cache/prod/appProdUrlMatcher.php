<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        // Liste_Articles
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Liste_Articles');
            }

            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\ArticleController::getArticlesAction',  '_route' => 'Liste_Articles',);
        }

        // Article
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Article')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ArticleController::getArticleAction',));
        }

        // Ajout_article
        if ($pathinfo === '/creer') {
            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\ArticleController::NewArticleAction',  '_route' => 'Ajout_article',);
        }

        // Suppression_article
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Suppression_article')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ArticleController::DeleteArticleAction',));
        }

        // article_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_homepage')), array (  '_controller' => 'ArticleBundle\\Controller\\DefaultController::indexAction',));
        }

        // Articles
        if ($pathinfo === '/gets') {
            return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::getArticlesAction',  '_route' => 'Articles',);
        }

        // enreg
        if ($pathinfo === '/save') {
            return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::postArticleAction',  '_route' => 'enreg',);
        }

        // delet
        if (0 === strpos($pathinfo, '/delet') && preg_match('#^/delet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delet')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::deletArticleAction',));
        }

        // get
        if (0 === strpos($pathinfo, '/get') && preg_match('#^/get/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::getArticleAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
