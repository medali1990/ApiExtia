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
        $__internal_5b1e6f04d7b5502c5064be27b44829e5f5d70fa878d038643504cfe5128e5a87 = $this->env->getExtension("native_profiler");
        $__internal_5b1e6f04d7b5502c5064be27b44829e5f5d70fa878d038643504cfe5128e5a87->enter($__internal_5b1e6f04d7b5502c5064be27b44829e5f5d70fa878d038643504cfe5128e5a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b1e6f04d7b5502c5064be27b44829e5f5d70fa878d038643504cfe5128e5a87->leave($__internal_5b1e6f04d7b5502c5064be27b44829e5f5d70fa878d038643504cfe5128e5a87_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a2c382425a5f7e68fb030759a1949b081ad8c87cf7473916a18c7e1f7233190 = $this->env->getExtension("native_profiler");
        $__internal_6a2c382425a5f7e68fb030759a1949b081ad8c87cf7473916a18c7e1f7233190->enter($__internal_6a2c382425a5f7e68fb030759a1949b081ad8c87cf7473916a18c7e1f7233190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_6a2c382425a5f7e68fb030759a1949b081ad8c87cf7473916a18c7e1f7233190->leave($__internal_6a2c382425a5f7e68fb030759a1949b081ad8c87cf7473916a18c7e1f7233190_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_57dc3a7880a942c3c6211ce40a9398d6e57f295dec629f56066c1388ed60efee = $this->env->getExtension("native_profiler");
        $__internal_57dc3a7880a942c3c6211ce40a9398d6e57f295dec629f56066c1388ed60efee->enter($__internal_57dc3a7880a942c3c6211ce40a9398d6e57f295dec629f56066c1388ed60efee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_57dc3a7880a942c3c6211ce40a9398d6e57f295dec629f56066c1388ed60efee->leave($__internal_57dc3a7880a942c3c6211ce40a9398d6e57f295dec629f56066c1388ed60efee_prof);

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
