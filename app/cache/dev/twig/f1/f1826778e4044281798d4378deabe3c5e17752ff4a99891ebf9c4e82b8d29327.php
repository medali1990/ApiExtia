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
        $__internal_b876df6bf2d3e786b24e851bf733bb0bfa7fd4da66586c02eac8dabbbcdbc96b = $this->env->getExtension("native_profiler");
        $__internal_b876df6bf2d3e786b24e851bf733bb0bfa7fd4da66586c02eac8dabbbcdbc96b->enter($__internal_b876df6bf2d3e786b24e851bf733bb0bfa7fd4da66586c02eac8dabbbcdbc96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b876df6bf2d3e786b24e851bf733bb0bfa7fd4da66586c02eac8dabbbcdbc96b->leave($__internal_b876df6bf2d3e786b24e851bf733bb0bfa7fd4da66586c02eac8dabbbcdbc96b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aac45b15de5afd76cfb0c671b355eb59ffaf95fba0645ca0b426608be55d9cdd = $this->env->getExtension("native_profiler");
        $__internal_aac45b15de5afd76cfb0c671b355eb59ffaf95fba0645ca0b426608be55d9cdd->enter($__internal_aac45b15de5afd76cfb0c671b355eb59ffaf95fba0645ca0b426608be55d9cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aac45b15de5afd76cfb0c671b355eb59ffaf95fba0645ca0b426608be55d9cdd->leave($__internal_aac45b15de5afd76cfb0c671b355eb59ffaf95fba0645ca0b426608be55d9cdd_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_9bb9ed9070170965d278caadf3e693f5dc0a8e36c01673348b4ff99c51eac157 = $this->env->getExtension("native_profiler");
        $__internal_9bb9ed9070170965d278caadf3e693f5dc0a8e36c01673348b4ff99c51eac157->enter($__internal_9bb9ed9070170965d278caadf3e693f5dc0a8e36c01673348b4ff99c51eac157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_9bb9ed9070170965d278caadf3e693f5dc0a8e36c01673348b4ff99c51eac157->leave($__internal_9bb9ed9070170965d278caadf3e693f5dc0a8e36c01673348b4ff99c51eac157_prof);

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
