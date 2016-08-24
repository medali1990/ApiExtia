<?php

/* ArticleBundle:Article:postArticle.html.twig */
class __TwigTemplate_ead7eba8f95075eea8ca85d43edd980711b8e1fbc8f38f9a8e9cbc5120890037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:postArticle.html.twig", 1);
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
        $__internal_f52d3489bc083cde934e0a3cc1a3182e1a49d504fb97b436b410368eab6e9495 = $this->env->getExtension("native_profiler");
        $__internal_f52d3489bc083cde934e0a3cc1a3182e1a49d504fb97b436b410368eab6e9495->enter($__internal_f52d3489bc083cde934e0a3cc1a3182e1a49d504fb97b436b410368eab6e9495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f52d3489bc083cde934e0a3cc1a3182e1a49d504fb97b436b410368eab6e9495->leave($__internal_f52d3489bc083cde934e0a3cc1a3182e1a49d504fb97b436b410368eab6e9495_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce444c277d34cb985e9d1a58ef7bcfc6dbd22f87c7210422d195ef117979482b = $this->env->getExtension("native_profiler");
        $__internal_ce444c277d34cb985e9d1a58ef7bcfc6dbd22f87c7210422d195ef117979482b->enter($__internal_ce444c277d34cb985e9d1a58ef7bcfc6dbd22f87c7210422d195ef117979482b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_ce444c277d34cb985e9d1a58ef7bcfc6dbd22f87c7210422d195ef117979482b->leave($__internal_ce444c277d34cb985e9d1a58ef7bcfc6dbd22f87c7210422d195ef117979482b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c76cb3af615907a454e95ca94ab75fd4b053b0b40bc21c772632a5d37411d6e2 = $this->env->getExtension("native_profiler");
        $__internal_c76cb3af615907a454e95ca94ab75fd4b053b0b40bc21c772632a5d37411d6e2->enter($__internal_c76cb3af615907a454e95ca94ab75fd4b053b0b40bc21c772632a5d37411d6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_c76cb3af615907a454e95ca94ab75fd4b053b0b40bc21c772632a5d37411d6e2->leave($__internal_c76cb3af615907a454e95ca94ab75fd4b053b0b40bc21c772632a5d37411d6e2_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:postArticle.html.twig";
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
/* {% block title %}ArticleBundle:Article:postArticle{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:postArticle page</h1>*/
/* {% endblock %}*/
/* */
