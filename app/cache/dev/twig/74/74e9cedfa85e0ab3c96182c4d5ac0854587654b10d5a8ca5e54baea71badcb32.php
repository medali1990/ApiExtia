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
        $__internal_b5eba103eb866ebb6fa0a14db84c71b75fb399ed310a1ecb6a939a5eff0002d0 = $this->env->getExtension("native_profiler");
        $__internal_b5eba103eb866ebb6fa0a14db84c71b75fb399ed310a1ecb6a939a5eff0002d0->enter($__internal_b5eba103eb866ebb6fa0a14db84c71b75fb399ed310a1ecb6a939a5eff0002d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5eba103eb866ebb6fa0a14db84c71b75fb399ed310a1ecb6a939a5eff0002d0->leave($__internal_b5eba103eb866ebb6fa0a14db84c71b75fb399ed310a1ecb6a939a5eff0002d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24e58b2ad17145e01247fc3b7e0a48986ed9c36d6796c71c4f79f489969bca57 = $this->env->getExtension("native_profiler");
        $__internal_24e58b2ad17145e01247fc3b7e0a48986ed9c36d6796c71c4f79f489969bca57->enter($__internal_24e58b2ad17145e01247fc3b7e0a48986ed9c36d6796c71c4f79f489969bca57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_24e58b2ad17145e01247fc3b7e0a48986ed9c36d6796c71c4f79f489969bca57->leave($__internal_24e58b2ad17145e01247fc3b7e0a48986ed9c36d6796c71c4f79f489969bca57_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c00c7321ba25cf9244bc626e869c081397dd977c470092062dc919a37210d883 = $this->env->getExtension("native_profiler");
        $__internal_c00c7321ba25cf9244bc626e869c081397dd977c470092062dc919a37210d883->enter($__internal_c00c7321ba25cf9244bc626e869c081397dd977c470092062dc919a37210d883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_c00c7321ba25cf9244bc626e869c081397dd977c470092062dc919a37210d883->leave($__internal_c00c7321ba25cf9244bc626e869c081397dd977c470092062dc919a37210d883_prof);

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
