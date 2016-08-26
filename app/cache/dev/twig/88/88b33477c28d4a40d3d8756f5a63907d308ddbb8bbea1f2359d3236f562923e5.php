<?php

/* FrontOfficeBundle::ArticleLayout.html.twig */
class __TwigTemplate_9e3ed4ba0d31c3557169bbee012778207340b263fd67e5053bfac131e3c36d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::FrontOfficeLayout.html.twig", "FrontOfficeBundle::ArticleLayout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'article_body' => array($this, 'block_article_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::FrontOfficeLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f84603d52fba10397375e00990f61dd83f568e8a6290553323ae96abc9461e5 = $this->env->getExtension("native_profiler");
        $__internal_6f84603d52fba10397375e00990f61dd83f568e8a6290553323ae96abc9461e5->enter($__internal_6f84603d52fba10397375e00990f61dd83f568e8a6290553323ae96abc9461e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f84603d52fba10397375e00990f61dd83f568e8a6290553323ae96abc9461e5->leave($__internal_6f84603d52fba10397375e00990f61dd83f568e8a6290553323ae96abc9461e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_edbb23335b81501c254e28be2e63db1578d4f976b418904ba9e31c77088e5824 = $this->env->getExtension("native_profiler");
        $__internal_edbb23335b81501c254e28be2e63db1578d4f976b418904ba9e31c77088e5824->enter($__internal_edbb23335b81501c254e28be2e63db1578d4f976b418904ba9e31c77088e5824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">

        
        <!-- /.row -->

    </div>
    <!-- /.container -->
  ";
        // line 12
        echo " 
  ";
        // line 14
        echo "  ";
        $this->displayBlock('article_body', $context, $blocks);
        // line 16
        echo "
";
        
        $__internal_edbb23335b81501c254e28be2e63db1578d4f976b418904ba9e31c77088e5824->leave($__internal_edbb23335b81501c254e28be2e63db1578d4f976b418904ba9e31c77088e5824_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_2b42f28cf4b866365b17720a69e1270ac5499be8a227777c6b7005b50463f95c = $this->env->getExtension("native_profiler");
        $__internal_2b42f28cf4b866365b17720a69e1270ac5499be8a227777c6b7005b50463f95c->enter($__internal_2b42f28cf4b866365b17720a69e1270ac5499be8a227777c6b7005b50463f95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_2b42f28cf4b866365b17720a69e1270ac5499be8a227777c6b7005b50463f95c->leave($__internal_2b42f28cf4b866365b17720a69e1270ac5499be8a227777c6b7005b50463f95c_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle::ArticleLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  64 => 14,  56 => 16,  53 => 14,  50 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::FrontOfficeLayout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 	<div class="container">*/
/* */
/*         */
/*         <!-- /.row -->*/
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*  */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block article_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
