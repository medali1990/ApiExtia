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
        $__internal_4f7ed367cc4b931d3c4452c76bd3d83bb4796aea249f0852d676de5657fc5feb = $this->env->getExtension("native_profiler");
        $__internal_4f7ed367cc4b931d3c4452c76bd3d83bb4796aea249f0852d676de5657fc5feb->enter($__internal_4f7ed367cc4b931d3c4452c76bd3d83bb4796aea249f0852d676de5657fc5feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f7ed367cc4b931d3c4452c76bd3d83bb4796aea249f0852d676de5657fc5feb->leave($__internal_4f7ed367cc4b931d3c4452c76bd3d83bb4796aea249f0852d676de5657fc5feb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb4c6da6e529bc79937de70547c243b4a2e9e8d90e9cec32dae5ae65e3c89cb3 = $this->env->getExtension("native_profiler");
        $__internal_eb4c6da6e529bc79937de70547c243b4a2e9e8d90e9cec32dae5ae65e3c89cb3->enter($__internal_eb4c6da6e529bc79937de70547c243b4a2e9e8d90e9cec32dae5ae65e3c89cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_eb4c6da6e529bc79937de70547c243b4a2e9e8d90e9cec32dae5ae65e3c89cb3->leave($__internal_eb4c6da6e529bc79937de70547c243b4a2e9e8d90e9cec32dae5ae65e3c89cb3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bcb19fa9da2339fb6c8e0d9aaa49c402434f2288cbbd251ba0b7168b97ee1d3 = $this->env->getExtension("native_profiler");
        $__internal_2bcb19fa9da2339fb6c8e0d9aaa49c402434f2288cbbd251ba0b7168b97ee1d3->enter($__internal_2bcb19fa9da2339fb6c8e0d9aaa49c402434f2288cbbd251ba0b7168b97ee1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_2bcb19fa9da2339fb6c8e0d9aaa49c402434f2288cbbd251ba0b7168b97ee1d3->leave($__internal_2bcb19fa9da2339fb6c8e0d9aaa49c402434f2288cbbd251ba0b7168b97ee1d3_prof);

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
