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
        $__internal_3b2587aa1ee996f6978f6b5150b02aea24e09d54df35ba7b55f432570af18c0f = $this->env->getExtension("native_profiler");
        $__internal_3b2587aa1ee996f6978f6b5150b02aea24e09d54df35ba7b55f432570af18c0f->enter($__internal_3b2587aa1ee996f6978f6b5150b02aea24e09d54df35ba7b55f432570af18c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b2587aa1ee996f6978f6b5150b02aea24e09d54df35ba7b55f432570af18c0f->leave($__internal_3b2587aa1ee996f6978f6b5150b02aea24e09d54df35ba7b55f432570af18c0f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b891216de475c2c020a51010bfef9663344d2165fbf273a41bcffa880c80e965 = $this->env->getExtension("native_profiler");
        $__internal_b891216de475c2c020a51010bfef9663344d2165fbf273a41bcffa880c80e965->enter($__internal_b891216de475c2c020a51010bfef9663344d2165fbf273a41bcffa880c80e965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_b891216de475c2c020a51010bfef9663344d2165fbf273a41bcffa880c80e965->leave($__internal_b891216de475c2c020a51010bfef9663344d2165fbf273a41bcffa880c80e965_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_56deafcea9eeb41f9c9e441e4e9970a057d5b366500fb0afaad12e7ac4ee5a13 = $this->env->getExtension("native_profiler");
        $__internal_56deafcea9eeb41f9c9e441e4e9970a057d5b366500fb0afaad12e7ac4ee5a13->enter($__internal_56deafcea9eeb41f9c9e441e4e9970a057d5b366500fb0afaad12e7ac4ee5a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_56deafcea9eeb41f9c9e441e4e9970a057d5b366500fb0afaad12e7ac4ee5a13->leave($__internal_56deafcea9eeb41f9c9e441e4e9970a057d5b366500fb0afaad12e7ac4ee5a13_prof);

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
