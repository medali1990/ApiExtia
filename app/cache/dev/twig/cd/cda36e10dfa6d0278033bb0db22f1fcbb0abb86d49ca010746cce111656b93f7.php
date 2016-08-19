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
        $__internal_17e06bb3eb419a57573b95a95f41503886ce31aeee44f9f62f468ec96ef4ed66 = $this->env->getExtension("native_profiler");
        $__internal_17e06bb3eb419a57573b95a95f41503886ce31aeee44f9f62f468ec96ef4ed66->enter($__internal_17e06bb3eb419a57573b95a95f41503886ce31aeee44f9f62f468ec96ef4ed66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e06bb3eb419a57573b95a95f41503886ce31aeee44f9f62f468ec96ef4ed66->leave($__internal_17e06bb3eb419a57573b95a95f41503886ce31aeee44f9f62f468ec96ef4ed66_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c23b63b34f738ea24807c4aca09e3aaae9319ecac01b1f64fdd61c70ce83ff09 = $this->env->getExtension("native_profiler");
        $__internal_c23b63b34f738ea24807c4aca09e3aaae9319ecac01b1f64fdd61c70ce83ff09->enter($__internal_c23b63b34f738ea24807c4aca09e3aaae9319ecac01b1f64fdd61c70ce83ff09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_c23b63b34f738ea24807c4aca09e3aaae9319ecac01b1f64fdd61c70ce83ff09->leave($__internal_c23b63b34f738ea24807c4aca09e3aaae9319ecac01b1f64fdd61c70ce83ff09_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2274bb69b416a74aa55c121b1dab029feedd5642042b30cfcf4f8e30167ace95 = $this->env->getExtension("native_profiler");
        $__internal_2274bb69b416a74aa55c121b1dab029feedd5642042b30cfcf4f8e30167ace95->enter($__internal_2274bb69b416a74aa55c121b1dab029feedd5642042b30cfcf4f8e30167ace95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_2274bb69b416a74aa55c121b1dab029feedd5642042b30cfcf4f8e30167ace95->leave($__internal_2274bb69b416a74aa55c121b1dab029feedd5642042b30cfcf4f8e30167ace95_prof);

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
