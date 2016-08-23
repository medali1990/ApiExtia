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
        $__internal_92c0ebba48ec6874574a2ec1cdcac07f8ed6f96739d7a56d73ad4aadc82ffe9f = $this->env->getExtension("native_profiler");
        $__internal_92c0ebba48ec6874574a2ec1cdcac07f8ed6f96739d7a56d73ad4aadc82ffe9f->enter($__internal_92c0ebba48ec6874574a2ec1cdcac07f8ed6f96739d7a56d73ad4aadc82ffe9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92c0ebba48ec6874574a2ec1cdcac07f8ed6f96739d7a56d73ad4aadc82ffe9f->leave($__internal_92c0ebba48ec6874574a2ec1cdcac07f8ed6f96739d7a56d73ad4aadc82ffe9f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cff82263c51efaa64fc6ec6f2292f308390ff718aeea8914d628ffb54f72ad0 = $this->env->getExtension("native_profiler");
        $__internal_2cff82263c51efaa64fc6ec6f2292f308390ff718aeea8914d628ffb54f72ad0->enter($__internal_2cff82263c51efaa64fc6ec6f2292f308390ff718aeea8914d628ffb54f72ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_2cff82263c51efaa64fc6ec6f2292f308390ff718aeea8914d628ffb54f72ad0->leave($__internal_2cff82263c51efaa64fc6ec6f2292f308390ff718aeea8914d628ffb54f72ad0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5579fc06954a88b8ec48c96651efd734f30b15ed5a2e11872697ef70c0442cab = $this->env->getExtension("native_profiler");
        $__internal_5579fc06954a88b8ec48c96651efd734f30b15ed5a2e11872697ef70c0442cab->enter($__internal_5579fc06954a88b8ec48c96651efd734f30b15ed5a2e11872697ef70c0442cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_5579fc06954a88b8ec48c96651efd734f30b15ed5a2e11872697ef70c0442cab->leave($__internal_5579fc06954a88b8ec48c96651efd734f30b15ed5a2e11872697ef70c0442cab_prof);

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
