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
        $__internal_f8b5808de63b067b9e84ce6cb2553b8d4fdf577ef2f27c97064ac80a109ad929 = $this->env->getExtension("native_profiler");
        $__internal_f8b5808de63b067b9e84ce6cb2553b8d4fdf577ef2f27c97064ac80a109ad929->enter($__internal_f8b5808de63b067b9e84ce6cb2553b8d4fdf577ef2f27c97064ac80a109ad929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b5808de63b067b9e84ce6cb2553b8d4fdf577ef2f27c97064ac80a109ad929->leave($__internal_f8b5808de63b067b9e84ce6cb2553b8d4fdf577ef2f27c97064ac80a109ad929_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e738d857beddf7c8697fa4d86af371ed43e9745334e2d3ed6a0b6ec2582697c5 = $this->env->getExtension("native_profiler");
        $__internal_e738d857beddf7c8697fa4d86af371ed43e9745334e2d3ed6a0b6ec2582697c5->enter($__internal_e738d857beddf7c8697fa4d86af371ed43e9745334e2d3ed6a0b6ec2582697c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_e738d857beddf7c8697fa4d86af371ed43e9745334e2d3ed6a0b6ec2582697c5->leave($__internal_e738d857beddf7c8697fa4d86af371ed43e9745334e2d3ed6a0b6ec2582697c5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7ac7e0fd83cae7dc0b399da208c695857c9070f7319f17707cf0521af4802c9 = $this->env->getExtension("native_profiler");
        $__internal_e7ac7e0fd83cae7dc0b399da208c695857c9070f7319f17707cf0521af4802c9->enter($__internal_e7ac7e0fd83cae7dc0b399da208c695857c9070f7319f17707cf0521af4802c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_e7ac7e0fd83cae7dc0b399da208c695857c9070f7319f17707cf0521af4802c9->leave($__internal_e7ac7e0fd83cae7dc0b399da208c695857c9070f7319f17707cf0521af4802c9_prof);

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
