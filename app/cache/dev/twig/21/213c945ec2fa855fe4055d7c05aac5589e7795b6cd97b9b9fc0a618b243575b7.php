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
        $__internal_0490471948e03f3eeb9a5b24b104d23494deed0a5b7865527422a9222fb0f15d = $this->env->getExtension("native_profiler");
        $__internal_0490471948e03f3eeb9a5b24b104d23494deed0a5b7865527422a9222fb0f15d->enter($__internal_0490471948e03f3eeb9a5b24b104d23494deed0a5b7865527422a9222fb0f15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0490471948e03f3eeb9a5b24b104d23494deed0a5b7865527422a9222fb0f15d->leave($__internal_0490471948e03f3eeb9a5b24b104d23494deed0a5b7865527422a9222fb0f15d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3ce51924f79beb32ca8eb2ed70f37115d75528d71e1668b43a468ba69dd9f07 = $this->env->getExtension("native_profiler");
        $__internal_d3ce51924f79beb32ca8eb2ed70f37115d75528d71e1668b43a468ba69dd9f07->enter($__internal_d3ce51924f79beb32ca8eb2ed70f37115d75528d71e1668b43a468ba69dd9f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_d3ce51924f79beb32ca8eb2ed70f37115d75528d71e1668b43a468ba69dd9f07->leave($__internal_d3ce51924f79beb32ca8eb2ed70f37115d75528d71e1668b43a468ba69dd9f07_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_242a35e5a3444d5a3ff6fbd6d2f9e72debb22fa7a4befdd0b1acb1dc0677bf51 = $this->env->getExtension("native_profiler");
        $__internal_242a35e5a3444d5a3ff6fbd6d2f9e72debb22fa7a4befdd0b1acb1dc0677bf51->enter($__internal_242a35e5a3444d5a3ff6fbd6d2f9e72debb22fa7a4befdd0b1acb1dc0677bf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_242a35e5a3444d5a3ff6fbd6d2f9e72debb22fa7a4befdd0b1acb1dc0677bf51->leave($__internal_242a35e5a3444d5a3ff6fbd6d2f9e72debb22fa7a4befdd0b1acb1dc0677bf51_prof);

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
