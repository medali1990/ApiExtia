<?php

/* FrontOfficeBundle::ArticleLayout.html.twig */
class __TwigTemplate_3f67aac98d5cee3d7a34a0efd3697b941fff8d7936c78f4a595493bedad606a2 extends Twig_Template
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
        $__internal_84e44b7ff72e520276c55cf28ee837654f87e99ca6c75452754427ed586fb536 = $this->env->getExtension("native_profiler");
        $__internal_84e44b7ff72e520276c55cf28ee837654f87e99ca6c75452754427ed586fb536->enter($__internal_84e44b7ff72e520276c55cf28ee837654f87e99ca6c75452754427ed586fb536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e44b7ff72e520276c55cf28ee837654f87e99ca6c75452754427ed586fb536->leave($__internal_84e44b7ff72e520276c55cf28ee837654f87e99ca6c75452754427ed586fb536_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_313929c40966d42ea7869c4209e5e9c9a0e485ce1d2b9bd1cebbd2c50e1a6cbc = $this->env->getExtension("native_profiler");
        $__internal_313929c40966d42ea7869c4209e5e9c9a0e485ce1d2b9bd1cebbd2c50e1a6cbc->enter($__internal_313929c40966d42ea7869c4209e5e9c9a0e485ce1d2b9bd1cebbd2c50e1a6cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_313929c40966d42ea7869c4209e5e9c9a0e485ce1d2b9bd1cebbd2c50e1a6cbc->leave($__internal_313929c40966d42ea7869c4209e5e9c9a0e485ce1d2b9bd1cebbd2c50e1a6cbc_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_914f871a97b1cc250af87a69281c5165a50bfb0cc8b89a172bae7ebf285f00f0 = $this->env->getExtension("native_profiler");
        $__internal_914f871a97b1cc250af87a69281c5165a50bfb0cc8b89a172bae7ebf285f00f0->enter($__internal_914f871a97b1cc250af87a69281c5165a50bfb0cc8b89a172bae7ebf285f00f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_914f871a97b1cc250af87a69281c5165a50bfb0cc8b89a172bae7ebf285f00f0->leave($__internal_914f871a97b1cc250af87a69281c5165a50bfb0cc8b89a172bae7ebf285f00f0_prof);

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
