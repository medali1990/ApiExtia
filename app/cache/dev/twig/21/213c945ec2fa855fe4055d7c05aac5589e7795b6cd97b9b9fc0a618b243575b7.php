<?php

/* ArticleBundle:Article:getArticles.html.twig */
class __TwigTemplate_783a87695d52dcd64c201b0cc4a9a7915396d11bb39e6a218f2bcc441e16fe6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:getArticles.html.twig", 1);
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
        $__internal_c0d38ffd936f2c80a835f58075183fe90358440b4decf31bc7c1e03f293cf9ad = $this->env->getExtension("native_profiler");
        $__internal_c0d38ffd936f2c80a835f58075183fe90358440b4decf31bc7c1e03f293cf9ad->enter($__internal_c0d38ffd936f2c80a835f58075183fe90358440b4decf31bc7c1e03f293cf9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0d38ffd936f2c80a835f58075183fe90358440b4decf31bc7c1e03f293cf9ad->leave($__internal_c0d38ffd936f2c80a835f58075183fe90358440b4decf31bc7c1e03f293cf9ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c73602057125560a176fefd7a88937a1d2ad625c70402d873d43fcac12f2a9ef = $this->env->getExtension("native_profiler");
        $__internal_c73602057125560a176fefd7a88937a1d2ad625c70402d873d43fcac12f2a9ef->enter($__internal_c73602057125560a176fefd7a88937a1d2ad625c70402d873d43fcac12f2a9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_c73602057125560a176fefd7a88937a1d2ad625c70402d873d43fcac12f2a9ef->leave($__internal_c73602057125560a176fefd7a88937a1d2ad625c70402d873d43fcac12f2a9ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdb80b2ce66e64d8229e15f9cd8e512106e043b56fcd32d65fc5fea03f744c48 = $this->env->getExtension("native_profiler");
        $__internal_fdb80b2ce66e64d8229e15f9cd8e512106e043b56fcd32d65fc5fea03f744c48->enter($__internal_fdb80b2ce66e64d8229e15f9cd8e512106e043b56fcd32d65fc5fea03f744c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_fdb80b2ce66e64d8229e15f9cd8e512106e043b56fcd32d65fc5fea03f744c48->leave($__internal_fdb80b2ce66e64d8229e15f9cd8e512106e043b56fcd32d65fc5fea03f744c48_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:getArticles.html.twig";
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
/* {% block title %}ArticleBundle:Article:getArticles{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:getArticles page</h1>*/
/* {% endblock %}*/
/* */
