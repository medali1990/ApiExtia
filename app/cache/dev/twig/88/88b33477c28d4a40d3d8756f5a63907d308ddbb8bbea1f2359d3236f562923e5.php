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
        $__internal_2f033ca297d84b52d977046650fb029e82c97c84b37684190f54ca9d584c88a9 = $this->env->getExtension("native_profiler");
        $__internal_2f033ca297d84b52d977046650fb029e82c97c84b37684190f54ca9d584c88a9->enter($__internal_2f033ca297d84b52d977046650fb029e82c97c84b37684190f54ca9d584c88a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f033ca297d84b52d977046650fb029e82c97c84b37684190f54ca9d584c88a9->leave($__internal_2f033ca297d84b52d977046650fb029e82c97c84b37684190f54ca9d584c88a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c6a264592f6f62dbe6035834f81d51a284e79080cea4216da72c5057817e79b = $this->env->getExtension("native_profiler");
        $__internal_5c6a264592f6f62dbe6035834f81d51a284e79080cea4216da72c5057817e79b->enter($__internal_5c6a264592f6f62dbe6035834f81d51a284e79080cea4216da72c5057817e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c6a264592f6f62dbe6035834f81d51a284e79080cea4216da72c5057817e79b->leave($__internal_5c6a264592f6f62dbe6035834f81d51a284e79080cea4216da72c5057817e79b_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_73bdcf95315aae335afba656ed877803705643926e8137b5825e06b2d8c51be0 = $this->env->getExtension("native_profiler");
        $__internal_73bdcf95315aae335afba656ed877803705643926e8137b5825e06b2d8c51be0->enter($__internal_73bdcf95315aae335afba656ed877803705643926e8137b5825e06b2d8c51be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_73bdcf95315aae335afba656ed877803705643926e8137b5825e06b2d8c51be0->leave($__internal_73bdcf95315aae335afba656ed877803705643926e8137b5825e06b2d8c51be0_prof);

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
