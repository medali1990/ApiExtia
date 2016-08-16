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
        $__internal_4dccaee9bd605e51ffecf75a8e347250a0259b610c0080f46e29af1ae0bba7c6 = $this->env->getExtension("native_profiler");
        $__internal_4dccaee9bd605e51ffecf75a8e347250a0259b610c0080f46e29af1ae0bba7c6->enter($__internal_4dccaee9bd605e51ffecf75a8e347250a0259b610c0080f46e29af1ae0bba7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dccaee9bd605e51ffecf75a8e347250a0259b610c0080f46e29af1ae0bba7c6->leave($__internal_4dccaee9bd605e51ffecf75a8e347250a0259b610c0080f46e29af1ae0bba7c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_88265b8ea510f833b6aec7050e216e5743a5274496cf067092379efdb70e515c = $this->env->getExtension("native_profiler");
        $__internal_88265b8ea510f833b6aec7050e216e5743a5274496cf067092379efdb70e515c->enter($__internal_88265b8ea510f833b6aec7050e216e5743a5274496cf067092379efdb70e515c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_88265b8ea510f833b6aec7050e216e5743a5274496cf067092379efdb70e515c->leave($__internal_88265b8ea510f833b6aec7050e216e5743a5274496cf067092379efdb70e515c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_63272083987e9914fa4a6f16154040661ea64eb79ba95353e619033afea414c9 = $this->env->getExtension("native_profiler");
        $__internal_63272083987e9914fa4a6f16154040661ea64eb79ba95353e619033afea414c9->enter($__internal_63272083987e9914fa4a6f16154040661ea64eb79ba95353e619033afea414c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_63272083987e9914fa4a6f16154040661ea64eb79ba95353e619033afea414c9->leave($__internal_63272083987e9914fa4a6f16154040661ea64eb79ba95353e619033afea414c9_prof);

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
