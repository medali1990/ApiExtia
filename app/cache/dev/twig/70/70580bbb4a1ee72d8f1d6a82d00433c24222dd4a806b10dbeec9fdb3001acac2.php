<?php

/* ArticleBundle:Article:deletArticle.html.twig */
class __TwigTemplate_4fc59290d65551a1189cefd22e794543bf2f8fcab90e339638e9fb3fd16e41e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:deletArticle.html.twig", 1);
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
        $__internal_8f4bcb34fd9c77f661ac3f0d3698808b0aec86b869b1d8c2a0b59e46473209ae = $this->env->getExtension("native_profiler");
        $__internal_8f4bcb34fd9c77f661ac3f0d3698808b0aec86b869b1d8c2a0b59e46473209ae->enter($__internal_8f4bcb34fd9c77f661ac3f0d3698808b0aec86b869b1d8c2a0b59e46473209ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f4bcb34fd9c77f661ac3f0d3698808b0aec86b869b1d8c2a0b59e46473209ae->leave($__internal_8f4bcb34fd9c77f661ac3f0d3698808b0aec86b869b1d8c2a0b59e46473209ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5367a730e6e41a5480d21a37a99f8ae8b15acbd70a9e832a8b68e5fe171440ed = $this->env->getExtension("native_profiler");
        $__internal_5367a730e6e41a5480d21a37a99f8ae8b15acbd70a9e832a8b68e5fe171440ed->enter($__internal_5367a730e6e41a5480d21a37a99f8ae8b15acbd70a9e832a8b68e5fe171440ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_5367a730e6e41a5480d21a37a99f8ae8b15acbd70a9e832a8b68e5fe171440ed->leave($__internal_5367a730e6e41a5480d21a37a99f8ae8b15acbd70a9e832a8b68e5fe171440ed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaa29df1622987fdf5bf03890e3a7e8565dc1ef59f1a62adc89f495ee9195e88 = $this->env->getExtension("native_profiler");
        $__internal_eaa29df1622987fdf5bf03890e3a7e8565dc1ef59f1a62adc89f495ee9195e88->enter($__internal_eaa29df1622987fdf5bf03890e3a7e8565dc1ef59f1a62adc89f495ee9195e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_eaa29df1622987fdf5bf03890e3a7e8565dc1ef59f1a62adc89f495ee9195e88->leave($__internal_eaa29df1622987fdf5bf03890e3a7e8565dc1ef59f1a62adc89f495ee9195e88_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:deletArticle.html.twig";
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
/* {% block title %}ArticleBundle:Article:deletArticle{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:deletArticle page</h1>*/
/* {% endblock %}*/
/* */
