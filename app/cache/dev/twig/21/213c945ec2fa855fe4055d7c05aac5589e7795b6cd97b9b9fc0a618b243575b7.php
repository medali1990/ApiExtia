<?php

/* ArticleBundle:Article:getArticles.html.twig */
class __TwigTemplate_783a87695d52dcd64c201b0cc4a9a7915396d11bb39e6a218f2bcc441e16fe6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:getArticles.html.twig", 1);
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
        $__internal_f948efd6f88feccab304e1fab4cd122704ae43637c7438d32c381e415325508d = $this->env->getExtension("native_profiler");
        $__internal_f948efd6f88feccab304e1fab4cd122704ae43637c7438d32c381e415325508d->enter($__internal_f948efd6f88feccab304e1fab4cd122704ae43637c7438d32c381e415325508d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f948efd6f88feccab304e1fab4cd122704ae43637c7438d32c381e415325508d->leave($__internal_f948efd6f88feccab304e1fab4cd122704ae43637c7438d32c381e415325508d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_08e5fd6f40189286e4aa01468bd3a383f46e47c8a6fe70735099d0042b25e1a1 = $this->env->getExtension("native_profiler");
        $__internal_08e5fd6f40189286e4aa01468bd3a383f46e47c8a6fe70735099d0042b25e1a1->enter($__internal_08e5fd6f40189286e4aa01468bd3a383f46e47c8a6fe70735099d0042b25e1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_08e5fd6f40189286e4aa01468bd3a383f46e47c8a6fe70735099d0042b25e1a1->leave($__internal_08e5fd6f40189286e4aa01468bd3a383f46e47c8a6fe70735099d0042b25e1a1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_447ae6ef59c733432b9bbedd3b8c1e386aa23298155153dec8ac0d65b0b8a225 = $this->env->getExtension("native_profiler");
        $__internal_447ae6ef59c733432b9bbedd3b8c1e386aa23298155153dec8ac0d65b0b8a225->enter($__internal_447ae6ef59c733432b9bbedd3b8c1e386aa23298155153dec8ac0d65b0b8a225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_447ae6ef59c733432b9bbedd3b8c1e386aa23298155153dec8ac0d65b0b8a225->leave($__internal_447ae6ef59c733432b9bbedd3b8c1e386aa23298155153dec8ac0d65b0b8a225_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:getArticles.html.twig";
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
/* {% block title %}ArticleBundle:Article:getArticles{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:getArticles page</h1>*/
/* {% endblock %}*/
/* */
