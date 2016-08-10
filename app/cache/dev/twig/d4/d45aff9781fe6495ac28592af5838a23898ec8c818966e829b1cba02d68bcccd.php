<?php

/* ArticleBundle:Article:postArticle.html.twig */
class __TwigTemplate_d5545b59e836820956a80da70ce7b70e196a098633215643f857a808044a3bbb extends Twig_Template
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
        $__internal_7901bdb7e95ba48825a53a45a013c6e95640b0c1e742a5644af6af0ad6aa5891 = $this->env->getExtension("native_profiler");
        $__internal_7901bdb7e95ba48825a53a45a013c6e95640b0c1e742a5644af6af0ad6aa5891->enter($__internal_7901bdb7e95ba48825a53a45a013c6e95640b0c1e742a5644af6af0ad6aa5891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7901bdb7e95ba48825a53a45a013c6e95640b0c1e742a5644af6af0ad6aa5891->leave($__internal_7901bdb7e95ba48825a53a45a013c6e95640b0c1e742a5644af6af0ad6aa5891_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_381c370970be1a7cd5c665c85fd112f3d07887fbc1d1d1636b7809d6f144af4d = $this->env->getExtension("native_profiler");
        $__internal_381c370970be1a7cd5c665c85fd112f3d07887fbc1d1d1636b7809d6f144af4d->enter($__internal_381c370970be1a7cd5c665c85fd112f3d07887fbc1d1d1636b7809d6f144af4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_381c370970be1a7cd5c665c85fd112f3d07887fbc1d1d1636b7809d6f144af4d->leave($__internal_381c370970be1a7cd5c665c85fd112f3d07887fbc1d1d1636b7809d6f144af4d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_735ccbeb2988554be71ecd8fd182edd233cb8f7c434fe1c0f28d393055f8ba28 = $this->env->getExtension("native_profiler");
        $__internal_735ccbeb2988554be71ecd8fd182edd233cb8f7c434fe1c0f28d393055f8ba28->enter($__internal_735ccbeb2988554be71ecd8fd182edd233cb8f7c434fe1c0f28d393055f8ba28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_735ccbeb2988554be71ecd8fd182edd233cb8f7c434fe1c0f28d393055f8ba28->leave($__internal_735ccbeb2988554be71ecd8fd182edd233cb8f7c434fe1c0f28d393055f8ba28_prof);

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
