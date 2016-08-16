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
        $__internal_f600bcbeb1f442a5ccade54a6e6729143e531a058885ba558f99ab46c729e6a2 = $this->env->getExtension("native_profiler");
        $__internal_f600bcbeb1f442a5ccade54a6e6729143e531a058885ba558f99ab46c729e6a2->enter($__internal_f600bcbeb1f442a5ccade54a6e6729143e531a058885ba558f99ab46c729e6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f600bcbeb1f442a5ccade54a6e6729143e531a058885ba558f99ab46c729e6a2->leave($__internal_f600bcbeb1f442a5ccade54a6e6729143e531a058885ba558f99ab46c729e6a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac4c1d70bf7ae06077db0c836254d0ae55391ce4e1ea70335aaca7d836fb6f97 = $this->env->getExtension("native_profiler");
        $__internal_ac4c1d70bf7ae06077db0c836254d0ae55391ce4e1ea70335aaca7d836fb6f97->enter($__internal_ac4c1d70bf7ae06077db0c836254d0ae55391ce4e1ea70335aaca7d836fb6f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_ac4c1d70bf7ae06077db0c836254d0ae55391ce4e1ea70335aaca7d836fb6f97->leave($__internal_ac4c1d70bf7ae06077db0c836254d0ae55391ce4e1ea70335aaca7d836fb6f97_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdb14ecfef67ae089bbfef0663eaa7f4bc6f64351df898e760d82f9d24fe4a66 = $this->env->getExtension("native_profiler");
        $__internal_bdb14ecfef67ae089bbfef0663eaa7f4bc6f64351df898e760d82f9d24fe4a66->enter($__internal_bdb14ecfef67ae089bbfef0663eaa7f4bc6f64351df898e760d82f9d24fe4a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_bdb14ecfef67ae089bbfef0663eaa7f4bc6f64351df898e760d82f9d24fe4a66->leave($__internal_bdb14ecfef67ae089bbfef0663eaa7f4bc6f64351df898e760d82f9d24fe4a66_prof);

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
