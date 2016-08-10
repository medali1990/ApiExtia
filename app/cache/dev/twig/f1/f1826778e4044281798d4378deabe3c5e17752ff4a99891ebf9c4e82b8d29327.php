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
        $__internal_b7aa43b10e11eef678f17cb179135cceb31db15e7db263f89a36b014910d086c = $this->env->getExtension("native_profiler");
        $__internal_b7aa43b10e11eef678f17cb179135cceb31db15e7db263f89a36b014910d086c->enter($__internal_b7aa43b10e11eef678f17cb179135cceb31db15e7db263f89a36b014910d086c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7aa43b10e11eef678f17cb179135cceb31db15e7db263f89a36b014910d086c->leave($__internal_b7aa43b10e11eef678f17cb179135cceb31db15e7db263f89a36b014910d086c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f535e54955860d0b8b82d93fe9e2e206303b5aa669be4a295854cd44ae489d05 = $this->env->getExtension("native_profiler");
        $__internal_f535e54955860d0b8b82d93fe9e2e206303b5aa669be4a295854cd44ae489d05->enter($__internal_f535e54955860d0b8b82d93fe9e2e206303b5aa669be4a295854cd44ae489d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f535e54955860d0b8b82d93fe9e2e206303b5aa669be4a295854cd44ae489d05->leave($__internal_f535e54955860d0b8b82d93fe9e2e206303b5aa669be4a295854cd44ae489d05_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_c57b4feedff5916ed4f37af34e560eec828464b073c8c0b2ed099bcc6a12f4dc = $this->env->getExtension("native_profiler");
        $__internal_c57b4feedff5916ed4f37af34e560eec828464b073c8c0b2ed099bcc6a12f4dc->enter($__internal_c57b4feedff5916ed4f37af34e560eec828464b073c8c0b2ed099bcc6a12f4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_c57b4feedff5916ed4f37af34e560eec828464b073c8c0b2ed099bcc6a12f4dc->leave($__internal_c57b4feedff5916ed4f37af34e560eec828464b073c8c0b2ed099bcc6a12f4dc_prof);

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
