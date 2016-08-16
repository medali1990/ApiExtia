<?php

/* ArticleBundle:Article:postArticle.html.twig */
class __TwigTemplate_d5545b59e836820956a80da70ce7b70e196a098633215643f857a808044a3bbb extends Twig_Template
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
        $__internal_ea11c624c601c9b144d4213e1980d46f16311a903b2369b4897d8a8d9ee21c0e = $this->env->getExtension("native_profiler");
        $__internal_ea11c624c601c9b144d4213e1980d46f16311a903b2369b4897d8a8d9ee21c0e->enter($__internal_ea11c624c601c9b144d4213e1980d46f16311a903b2369b4897d8a8d9ee21c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea11c624c601c9b144d4213e1980d46f16311a903b2369b4897d8a8d9ee21c0e->leave($__internal_ea11c624c601c9b144d4213e1980d46f16311a903b2369b4897d8a8d9ee21c0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a36a26d8d9c65d3c4f318a18adc5a1dfe03038407316872fb89c6d8d9f237f33 = $this->env->getExtension("native_profiler");
        $__internal_a36a26d8d9c65d3c4f318a18adc5a1dfe03038407316872fb89c6d8d9f237f33->enter($__internal_a36a26d8d9c65d3c4f318a18adc5a1dfe03038407316872fb89c6d8d9f237f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_a36a26d8d9c65d3c4f318a18adc5a1dfe03038407316872fb89c6d8d9f237f33->leave($__internal_a36a26d8d9c65d3c4f318a18adc5a1dfe03038407316872fb89c6d8d9f237f33_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7aba499a3057cde331e02095619fffc5006183a9c1bbb3cb287362115e51968 = $this->env->getExtension("native_profiler");
        $__internal_f7aba499a3057cde331e02095619fffc5006183a9c1bbb3cb287362115e51968->enter($__internal_f7aba499a3057cde331e02095619fffc5006183a9c1bbb3cb287362115e51968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_f7aba499a3057cde331e02095619fffc5006183a9c1bbb3cb287362115e51968->leave($__internal_f7aba499a3057cde331e02095619fffc5006183a9c1bbb3cb287362115e51968_prof);

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
