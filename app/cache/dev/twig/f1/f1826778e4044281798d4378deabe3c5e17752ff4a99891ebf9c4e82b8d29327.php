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
        $__internal_495e4b23251321495d783f2a535f1b8c5995ae9d2656bb9d76211bbfc6c32829 = $this->env->getExtension("native_profiler");
        $__internal_495e4b23251321495d783f2a535f1b8c5995ae9d2656bb9d76211bbfc6c32829->enter($__internal_495e4b23251321495d783f2a535f1b8c5995ae9d2656bb9d76211bbfc6c32829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_495e4b23251321495d783f2a535f1b8c5995ae9d2656bb9d76211bbfc6c32829->leave($__internal_495e4b23251321495d783f2a535f1b8c5995ae9d2656bb9d76211bbfc6c32829_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b47e9238790b5ed098f2bd58898492ae223d1bf1dd05b6444aa0ee39b1c91264 = $this->env->getExtension("native_profiler");
        $__internal_b47e9238790b5ed098f2bd58898492ae223d1bf1dd05b6444aa0ee39b1c91264->enter($__internal_b47e9238790b5ed098f2bd58898492ae223d1bf1dd05b6444aa0ee39b1c91264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b47e9238790b5ed098f2bd58898492ae223d1bf1dd05b6444aa0ee39b1c91264->leave($__internal_b47e9238790b5ed098f2bd58898492ae223d1bf1dd05b6444aa0ee39b1c91264_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_bfc26e41edae68bb05d6aa1141f66672899e619d1449d1fb4aea3a0720bea2ca = $this->env->getExtension("native_profiler");
        $__internal_bfc26e41edae68bb05d6aa1141f66672899e619d1449d1fb4aea3a0720bea2ca->enter($__internal_bfc26e41edae68bb05d6aa1141f66672899e619d1449d1fb4aea3a0720bea2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_bfc26e41edae68bb05d6aa1141f66672899e619d1449d1fb4aea3a0720bea2ca->leave($__internal_bfc26e41edae68bb05d6aa1141f66672899e619d1449d1fb4aea3a0720bea2ca_prof);

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
