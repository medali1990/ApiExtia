<?php

/* ArticleBundle:Article:deletArticle.html.twig */
class __TwigTemplate_4fc59290d65551a1189cefd22e794543bf2f8fcab90e339638e9fb3fd16e41e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:deletArticle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0309650065bccb08bd5b8759c9f9dadbd7d4f1399c6cf1f129d250f2f7fe49a0 = $this->env->getExtension("native_profiler");
        $__internal_0309650065bccb08bd5b8759c9f9dadbd7d4f1399c6cf1f129d250f2f7fe49a0->enter($__internal_0309650065bccb08bd5b8759c9f9dadbd7d4f1399c6cf1f129d250f2f7fe49a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0309650065bccb08bd5b8759c9f9dadbd7d4f1399c6cf1f129d250f2f7fe49a0->leave($__internal_0309650065bccb08bd5b8759c9f9dadbd7d4f1399c6cf1f129d250f2f7fe49a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cba33798c54b6dbbb4786b98d7c446eacb7711e9a6645c189e3364104aa6b82d = $this->env->getExtension("native_profiler");
        $__internal_cba33798c54b6dbbb4786b98d7c446eacb7711e9a6645c189e3364104aa6b82d->enter($__internal_cba33798c54b6dbbb4786b98d7c446eacb7711e9a6645c189e3364104aa6b82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_cba33798c54b6dbbb4786b98d7c446eacb7711e9a6645c189e3364104aa6b82d->leave($__internal_cba33798c54b6dbbb4786b98d7c446eacb7711e9a6645c189e3364104aa6b82d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80bfdd926e5d4232a3cb556a4eb888703ccf578aa3a902a8fde3be039b30a2eb = $this->env->getExtension("native_profiler");
        $__internal_80bfdd926e5d4232a3cb556a4eb888703ccf578aa3a902a8fde3be039b30a2eb->enter($__internal_80bfdd926e5d4232a3cb556a4eb888703ccf578aa3a902a8fde3be039b30a2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_80bfdd926e5d4232a3cb556a4eb888703ccf578aa3a902a8fde3be039b30a2eb->leave($__internal_80bfdd926e5d4232a3cb556a4eb888703ccf578aa3a902a8fde3be039b30a2eb_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:deletArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ArticleBundle:Article:deletArticle{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:deletArticle page</h1>*/
/* {% endblock %}*/
/* */
