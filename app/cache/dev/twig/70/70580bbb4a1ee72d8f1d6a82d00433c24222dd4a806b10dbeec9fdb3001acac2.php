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
        $__internal_8bfd24690acd9af1d1f583ed8192fa5a7d0ed5d9f075598c5fad9e606189250e = $this->env->getExtension("native_profiler");
        $__internal_8bfd24690acd9af1d1f583ed8192fa5a7d0ed5d9f075598c5fad9e606189250e->enter($__internal_8bfd24690acd9af1d1f583ed8192fa5a7d0ed5d9f075598c5fad9e606189250e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bfd24690acd9af1d1f583ed8192fa5a7d0ed5d9f075598c5fad9e606189250e->leave($__internal_8bfd24690acd9af1d1f583ed8192fa5a7d0ed5d9f075598c5fad9e606189250e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10aa00f3165aa9c59f342858f8034903c792650b2d831fd4784837af7faca833 = $this->env->getExtension("native_profiler");
        $__internal_10aa00f3165aa9c59f342858f8034903c792650b2d831fd4784837af7faca833->enter($__internal_10aa00f3165aa9c59f342858f8034903c792650b2d831fd4784837af7faca833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_10aa00f3165aa9c59f342858f8034903c792650b2d831fd4784837af7faca833->leave($__internal_10aa00f3165aa9c59f342858f8034903c792650b2d831fd4784837af7faca833_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_390920af244c97012bd8765fc4b6a8e7f7639eccbccdd3a8cd39869cf125d1fd = $this->env->getExtension("native_profiler");
        $__internal_390920af244c97012bd8765fc4b6a8e7f7639eccbccdd3a8cd39869cf125d1fd->enter($__internal_390920af244c97012bd8765fc4b6a8e7f7639eccbccdd3a8cd39869cf125d1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_390920af244c97012bd8765fc4b6a8e7f7639eccbccdd3a8cd39869cf125d1fd->leave($__internal_390920af244c97012bd8765fc4b6a8e7f7639eccbccdd3a8cd39869cf125d1fd_prof);

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
