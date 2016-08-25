<?php

/* ArticleBundle:Article:getArticle.html.twig */
class __TwigTemplate_bccc7e87e8fe5eb65e507593c8f80b4ef94578269f6c94ee2996e2f9d39efff9 extends Twig_Template
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
        $__internal_a5bb95e4329b96ad2fe4ecbd4eb9335892160ec3c98f79f9d5d5c93e75ebd4ac = $this->env->getExtension("native_profiler");
        $__internal_a5bb95e4329b96ad2fe4ecbd4eb9335892160ec3c98f79f9d5d5c93e75ebd4ac->enter($__internal_a5bb95e4329b96ad2fe4ecbd4eb9335892160ec3c98f79f9d5d5c93e75ebd4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5bb95e4329b96ad2fe4ecbd4eb9335892160ec3c98f79f9d5d5c93e75ebd4ac->leave($__internal_a5bb95e4329b96ad2fe4ecbd4eb9335892160ec3c98f79f9d5d5c93e75ebd4ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_094ea7f2896db1e2829063be4c30c5a066d0e2da926f45378c84c9e88633addf = $this->env->getExtension("native_profiler");
        $__internal_094ea7f2896db1e2829063be4c30c5a066d0e2da926f45378c84c9e88633addf->enter($__internal_094ea7f2896db1e2829063be4c30c5a066d0e2da926f45378c84c9e88633addf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_094ea7f2896db1e2829063be4c30c5a066d0e2da926f45378c84c9e88633addf->leave($__internal_094ea7f2896db1e2829063be4c30c5a066d0e2da926f45378c84c9e88633addf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7eaeed2bbc90d4345b429879a37a46d874ee8ed7800034da5c75ba81577db6b2 = $this->env->getExtension("native_profiler");
        $__internal_7eaeed2bbc90d4345b429879a37a46d874ee8ed7800034da5c75ba81577db6b2->enter($__internal_7eaeed2bbc90d4345b429879a37a46d874ee8ed7800034da5c75ba81577db6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_7eaeed2bbc90d4345b429879a37a46d874ee8ed7800034da5c75ba81577db6b2->leave($__internal_7eaeed2bbc90d4345b429879a37a46d874ee8ed7800034da5c75ba81577db6b2_prof);

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
