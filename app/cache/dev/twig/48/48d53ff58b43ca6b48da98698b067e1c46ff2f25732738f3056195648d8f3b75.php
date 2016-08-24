<?php

/* ArticleBundle:Article:getArticle.html.twig */
class __TwigTemplate_bccc7e87e8fe5eb65e507593c8f80b4ef94578269f6c94ee2996e2f9d39efff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:getArticle.html.twig", 1);
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
        $__internal_8f98884315ac6db702182591681e9a8d587c1ca38ab9368a5e1f2235b083715e = $this->env->getExtension("native_profiler");
        $__internal_8f98884315ac6db702182591681e9a8d587c1ca38ab9368a5e1f2235b083715e->enter($__internal_8f98884315ac6db702182591681e9a8d587c1ca38ab9368a5e1f2235b083715e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f98884315ac6db702182591681e9a8d587c1ca38ab9368a5e1f2235b083715e->leave($__internal_8f98884315ac6db702182591681e9a8d587c1ca38ab9368a5e1f2235b083715e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9259dab0c98cbfba0ce57a66b1626d28da4989b2df0f41da6efcacd059c0d74f = $this->env->getExtension("native_profiler");
        $__internal_9259dab0c98cbfba0ce57a66b1626d28da4989b2df0f41da6efcacd059c0d74f->enter($__internal_9259dab0c98cbfba0ce57a66b1626d28da4989b2df0f41da6efcacd059c0d74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_9259dab0c98cbfba0ce57a66b1626d28da4989b2df0f41da6efcacd059c0d74f->leave($__internal_9259dab0c98cbfba0ce57a66b1626d28da4989b2df0f41da6efcacd059c0d74f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bf5e4c99543e9fc9abf551220c689f8e12b7132330d0802cb7249a30db6e342 = $this->env->getExtension("native_profiler");
        $__internal_6bf5e4c99543e9fc9abf551220c689f8e12b7132330d0802cb7249a30db6e342->enter($__internal_6bf5e4c99543e9fc9abf551220c689f8e12b7132330d0802cb7249a30db6e342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_6bf5e4c99543e9fc9abf551220c689f8e12b7132330d0802cb7249a30db6e342->leave($__internal_6bf5e4c99543e9fc9abf551220c689f8e12b7132330d0802cb7249a30db6e342_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:getArticle.html.twig";
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
/* {% block title %}ArticleBundle:Article:getArticle{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:getArticle page</h1>*/
/* {% endblock %}*/
/* */
