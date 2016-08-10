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
        $__internal_32c8ed358e9d727ecf14dd89e897887d4871e0c987d34dcbc970287a87edc15d = $this->env->getExtension("native_profiler");
        $__internal_32c8ed358e9d727ecf14dd89e897887d4871e0c987d34dcbc970287a87edc15d->enter($__internal_32c8ed358e9d727ecf14dd89e897887d4871e0c987d34dcbc970287a87edc15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c8ed358e9d727ecf14dd89e897887d4871e0c987d34dcbc970287a87edc15d->leave($__internal_32c8ed358e9d727ecf14dd89e897887d4871e0c987d34dcbc970287a87edc15d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fd5e33d8ce69d8e5cc79ab16f9382f86357ad17dc6af586ff2252d8508339cd = $this->env->getExtension("native_profiler");
        $__internal_5fd5e33d8ce69d8e5cc79ab16f9382f86357ad17dc6af586ff2252d8508339cd->enter($__internal_5fd5e33d8ce69d8e5cc79ab16f9382f86357ad17dc6af586ff2252d8508339cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_5fd5e33d8ce69d8e5cc79ab16f9382f86357ad17dc6af586ff2252d8508339cd->leave($__internal_5fd5e33d8ce69d8e5cc79ab16f9382f86357ad17dc6af586ff2252d8508339cd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec2f639ada5b4a5a3b3e3bce79d322d3012fba97c9bd069c52e26d14f440da66 = $this->env->getExtension("native_profiler");
        $__internal_ec2f639ada5b4a5a3b3e3bce79d322d3012fba97c9bd069c52e26d14f440da66->enter($__internal_ec2f639ada5b4a5a3b3e3bce79d322d3012fba97c9bd069c52e26d14f440da66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_ec2f639ada5b4a5a3b3e3bce79d322d3012fba97c9bd069c52e26d14f440da66->leave($__internal_ec2f639ada5b4a5a3b3e3bce79d322d3012fba97c9bd069c52e26d14f440da66_prof);

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
