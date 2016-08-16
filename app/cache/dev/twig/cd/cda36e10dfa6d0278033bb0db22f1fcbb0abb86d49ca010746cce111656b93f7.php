<?php

/* ArticleBundle:Article:getArticle.html.twig */
class __TwigTemplate_bca9d4b44dabb63d12a449e0c33f9f6f630e26d119f53c8ef98078300401837f extends Twig_Template
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
        $__internal_e0e69a35ade432f33ec033f3fb086383a7ae18ef5bc23b337c30003d4b57e589 = $this->env->getExtension("native_profiler");
        $__internal_e0e69a35ade432f33ec033f3fb086383a7ae18ef5bc23b337c30003d4b57e589->enter($__internal_e0e69a35ade432f33ec033f3fb086383a7ae18ef5bc23b337c30003d4b57e589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e69a35ade432f33ec033f3fb086383a7ae18ef5bc23b337c30003d4b57e589->leave($__internal_e0e69a35ade432f33ec033f3fb086383a7ae18ef5bc23b337c30003d4b57e589_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c613c346d044bc15818ce9f85dac88cdfdb6329043f5f044d4c61a9bde24ee01 = $this->env->getExtension("native_profiler");
        $__internal_c613c346d044bc15818ce9f85dac88cdfdb6329043f5f044d4c61a9bde24ee01->enter($__internal_c613c346d044bc15818ce9f85dac88cdfdb6329043f5f044d4c61a9bde24ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_c613c346d044bc15818ce9f85dac88cdfdb6329043f5f044d4c61a9bde24ee01->leave($__internal_c613c346d044bc15818ce9f85dac88cdfdb6329043f5f044d4c61a9bde24ee01_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_37080858e93ee817cc6e8f22375912d7ad7b404a13dbd0023a10b6a3c64ecede = $this->env->getExtension("native_profiler");
        $__internal_37080858e93ee817cc6e8f22375912d7ad7b404a13dbd0023a10b6a3c64ecede->enter($__internal_37080858e93ee817cc6e8f22375912d7ad7b404a13dbd0023a10b6a3c64ecede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_37080858e93ee817cc6e8f22375912d7ad7b404a13dbd0023a10b6a3c64ecede->leave($__internal_37080858e93ee817cc6e8f22375912d7ad7b404a13dbd0023a10b6a3c64ecede_prof);

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
