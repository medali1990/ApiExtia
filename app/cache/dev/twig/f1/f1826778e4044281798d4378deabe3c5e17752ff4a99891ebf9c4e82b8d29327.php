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
        $__internal_112404fbdaefa73cfd09fd8e6922d47f6f468a0e5a10315f5fb2f8afee1e8aaa = $this->env->getExtension("native_profiler");
        $__internal_112404fbdaefa73cfd09fd8e6922d47f6f468a0e5a10315f5fb2f8afee1e8aaa->enter($__internal_112404fbdaefa73cfd09fd8e6922d47f6f468a0e5a10315f5fb2f8afee1e8aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_112404fbdaefa73cfd09fd8e6922d47f6f468a0e5a10315f5fb2f8afee1e8aaa->leave($__internal_112404fbdaefa73cfd09fd8e6922d47f6f468a0e5a10315f5fb2f8afee1e8aaa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e6325a4392ed4dba863fd22a41a519ddb56d043c3ed23ff703a15a5659670b8 = $this->env->getExtension("native_profiler");
        $__internal_3e6325a4392ed4dba863fd22a41a519ddb56d043c3ed23ff703a15a5659670b8->enter($__internal_3e6325a4392ed4dba863fd22a41a519ddb56d043c3ed23ff703a15a5659670b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e6325a4392ed4dba863fd22a41a519ddb56d043c3ed23ff703a15a5659670b8->leave($__internal_3e6325a4392ed4dba863fd22a41a519ddb56d043c3ed23ff703a15a5659670b8_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_f02bddad978be9ef23f8b61ccbe2172f945e6559d269613cdb59453280493156 = $this->env->getExtension("native_profiler");
        $__internal_f02bddad978be9ef23f8b61ccbe2172f945e6559d269613cdb59453280493156->enter($__internal_f02bddad978be9ef23f8b61ccbe2172f945e6559d269613cdb59453280493156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_f02bddad978be9ef23f8b61ccbe2172f945e6559d269613cdb59453280493156->leave($__internal_f02bddad978be9ef23f8b61ccbe2172f945e6559d269613cdb59453280493156_prof);

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
