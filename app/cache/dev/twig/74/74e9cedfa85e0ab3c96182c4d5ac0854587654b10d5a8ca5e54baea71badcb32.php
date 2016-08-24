<?php

/* ArticleBundle:Article:getArticles.html.twig */
class __TwigTemplate_752925e87dff9f0cb98d2106e584a827072eb5962db2c4523f1d03d21e14d45f extends Twig_Template
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
        $__internal_88b264f7c576099b119c22d571d3ba4571930baee4e60d956d605b534ce96c70 = $this->env->getExtension("native_profiler");
        $__internal_88b264f7c576099b119c22d571d3ba4571930baee4e60d956d605b534ce96c70->enter($__internal_88b264f7c576099b119c22d571d3ba4571930baee4e60d956d605b534ce96c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88b264f7c576099b119c22d571d3ba4571930baee4e60d956d605b534ce96c70->leave($__internal_88b264f7c576099b119c22d571d3ba4571930baee4e60d956d605b534ce96c70_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93022cb643c1ae754b4fd2f0ca5cda7a67e439d308461ec6f7f60e787650e237 = $this->env->getExtension("native_profiler");
        $__internal_93022cb643c1ae754b4fd2f0ca5cda7a67e439d308461ec6f7f60e787650e237->enter($__internal_93022cb643c1ae754b4fd2f0ca5cda7a67e439d308461ec6f7f60e787650e237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_93022cb643c1ae754b4fd2f0ca5cda7a67e439d308461ec6f7f60e787650e237->leave($__internal_93022cb643c1ae754b4fd2f0ca5cda7a67e439d308461ec6f7f60e787650e237_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d80d541458c3be8b04f31be0f1e29d88a54c60677e64c9814c2286d1d7e213ae = $this->env->getExtension("native_profiler");
        $__internal_d80d541458c3be8b04f31be0f1e29d88a54c60677e64c9814c2286d1d7e213ae->enter($__internal_d80d541458c3be8b04f31be0f1e29d88a54c60677e64c9814c2286d1d7e213ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_d80d541458c3be8b04f31be0f1e29d88a54c60677e64c9814c2286d1d7e213ae->leave($__internal_d80d541458c3be8b04f31be0f1e29d88a54c60677e64c9814c2286d1d7e213ae_prof);

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
