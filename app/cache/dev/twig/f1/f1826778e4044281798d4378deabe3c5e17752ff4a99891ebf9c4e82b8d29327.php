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
        $__internal_8cd76c6f2cbb3fadb597bb65dbcb4d33999a747ea5a0f590e164a62ed2091dd1 = $this->env->getExtension("native_profiler");
        $__internal_8cd76c6f2cbb3fadb597bb65dbcb4d33999a747ea5a0f590e164a62ed2091dd1->enter($__internal_8cd76c6f2cbb3fadb597bb65dbcb4d33999a747ea5a0f590e164a62ed2091dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd76c6f2cbb3fadb597bb65dbcb4d33999a747ea5a0f590e164a62ed2091dd1->leave($__internal_8cd76c6f2cbb3fadb597bb65dbcb4d33999a747ea5a0f590e164a62ed2091dd1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_729cda842fbd44f8b96834569e6b79206ca34a44ffca6e17a4520e69a74f97c0 = $this->env->getExtension("native_profiler");
        $__internal_729cda842fbd44f8b96834569e6b79206ca34a44ffca6e17a4520e69a74f97c0->enter($__internal_729cda842fbd44f8b96834569e6b79206ca34a44ffca6e17a4520e69a74f97c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_729cda842fbd44f8b96834569e6b79206ca34a44ffca6e17a4520e69a74f97c0->leave($__internal_729cda842fbd44f8b96834569e6b79206ca34a44ffca6e17a4520e69a74f97c0_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_09629c8798a75ad17e68bd184c71ebb2937e6240b4578886a7b78d3a5cc2d5cc = $this->env->getExtension("native_profiler");
        $__internal_09629c8798a75ad17e68bd184c71ebb2937e6240b4578886a7b78d3a5cc2d5cc->enter($__internal_09629c8798a75ad17e68bd184c71ebb2937e6240b4578886a7b78d3a5cc2d5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_09629c8798a75ad17e68bd184c71ebb2937e6240b4578886a7b78d3a5cc2d5cc->leave($__internal_09629c8798a75ad17e68bd184c71ebb2937e6240b4578886a7b78d3a5cc2d5cc_prof);

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
