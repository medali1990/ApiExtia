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
        $__internal_c4099a248404577b788568638555f8d5f15e484190dc03ed49788c861a99640d = $this->env->getExtension("native_profiler");
        $__internal_c4099a248404577b788568638555f8d5f15e484190dc03ed49788c861a99640d->enter($__internal_c4099a248404577b788568638555f8d5f15e484190dc03ed49788c861a99640d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4099a248404577b788568638555f8d5f15e484190dc03ed49788c861a99640d->leave($__internal_c4099a248404577b788568638555f8d5f15e484190dc03ed49788c861a99640d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0e20bb4d44a70a5b108ac88bc93d416ec8240cab0c67a72040e03b031788719 = $this->env->getExtension("native_profiler");
        $__internal_d0e20bb4d44a70a5b108ac88bc93d416ec8240cab0c67a72040e03b031788719->enter($__internal_d0e20bb4d44a70a5b108ac88bc93d416ec8240cab0c67a72040e03b031788719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_d0e20bb4d44a70a5b108ac88bc93d416ec8240cab0c67a72040e03b031788719->leave($__internal_d0e20bb4d44a70a5b108ac88bc93d416ec8240cab0c67a72040e03b031788719_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f11a0136106acf2c5755102773e9ea33d5be400eb6401a88d50f79e234cb6d0 = $this->env->getExtension("native_profiler");
        $__internal_5f11a0136106acf2c5755102773e9ea33d5be400eb6401a88d50f79e234cb6d0->enter($__internal_5f11a0136106acf2c5755102773e9ea33d5be400eb6401a88d50f79e234cb6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_5f11a0136106acf2c5755102773e9ea33d5be400eb6401a88d50f79e234cb6d0->leave($__internal_5f11a0136106acf2c5755102773e9ea33d5be400eb6401a88d50f79e234cb6d0_prof);

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
