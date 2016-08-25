<?php

/* ArticleBundle:Article:postArticle.html.twig */
class __TwigTemplate_ead7eba8f95075eea8ca85d43edd980711b8e1fbc8f38f9a8e9cbc5120890037 extends Twig_Template
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
        $__internal_58f1c8def6a93ee875caca824a562c200605c415f7c823d20fbe8b22b0682584 = $this->env->getExtension("native_profiler");
        $__internal_58f1c8def6a93ee875caca824a562c200605c415f7c823d20fbe8b22b0682584->enter($__internal_58f1c8def6a93ee875caca824a562c200605c415f7c823d20fbe8b22b0682584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58f1c8def6a93ee875caca824a562c200605c415f7c823d20fbe8b22b0682584->leave($__internal_58f1c8def6a93ee875caca824a562c200605c415f7c823d20fbe8b22b0682584_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d891ddb52f4dcaaa6788869e0cab6937ac8380d15c8aa463e0e1b95306b916bc = $this->env->getExtension("native_profiler");
        $__internal_d891ddb52f4dcaaa6788869e0cab6937ac8380d15c8aa463e0e1b95306b916bc->enter($__internal_d891ddb52f4dcaaa6788869e0cab6937ac8380d15c8aa463e0e1b95306b916bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_d891ddb52f4dcaaa6788869e0cab6937ac8380d15c8aa463e0e1b95306b916bc->leave($__internal_d891ddb52f4dcaaa6788869e0cab6937ac8380d15c8aa463e0e1b95306b916bc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c9ab30885c5e4fa7beb053c12b89a1d43eeabd3260465737eb8579a5d515f59 = $this->env->getExtension("native_profiler");
        $__internal_9c9ab30885c5e4fa7beb053c12b89a1d43eeabd3260465737eb8579a5d515f59->enter($__internal_9c9ab30885c5e4fa7beb053c12b89a1d43eeabd3260465737eb8579a5d515f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_9c9ab30885c5e4fa7beb053c12b89a1d43eeabd3260465737eb8579a5d515f59->leave($__internal_9c9ab30885c5e4fa7beb053c12b89a1d43eeabd3260465737eb8579a5d515f59_prof);

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
