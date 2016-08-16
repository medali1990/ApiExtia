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
        $__internal_eb7ad15a7f8e1f45c1309fd707d69fca6454f8f570950c3bd779b8a63c9efe8c = $this->env->getExtension("native_profiler");
        $__internal_eb7ad15a7f8e1f45c1309fd707d69fca6454f8f570950c3bd779b8a63c9efe8c->enter($__internal_eb7ad15a7f8e1f45c1309fd707d69fca6454f8f570950c3bd779b8a63c9efe8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb7ad15a7f8e1f45c1309fd707d69fca6454f8f570950c3bd779b8a63c9efe8c->leave($__internal_eb7ad15a7f8e1f45c1309fd707d69fca6454f8f570950c3bd779b8a63c9efe8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab3bb21071061713a01fdb4da7009a803e7d525e7128ffbe15b88ff77428ef33 = $this->env->getExtension("native_profiler");
        $__internal_ab3bb21071061713a01fdb4da7009a803e7d525e7128ffbe15b88ff77428ef33->enter($__internal_ab3bb21071061713a01fdb4da7009a803e7d525e7128ffbe15b88ff77428ef33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ab3bb21071061713a01fdb4da7009a803e7d525e7128ffbe15b88ff77428ef33->leave($__internal_ab3bb21071061713a01fdb4da7009a803e7d525e7128ffbe15b88ff77428ef33_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_b5f77fb8c3bfbb9351c14c2e261902bf7bf3c6e7aef34b501dcc5638df90e812 = $this->env->getExtension("native_profiler");
        $__internal_b5f77fb8c3bfbb9351c14c2e261902bf7bf3c6e7aef34b501dcc5638df90e812->enter($__internal_b5f77fb8c3bfbb9351c14c2e261902bf7bf3c6e7aef34b501dcc5638df90e812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_b5f77fb8c3bfbb9351c14c2e261902bf7bf3c6e7aef34b501dcc5638df90e812->leave($__internal_b5f77fb8c3bfbb9351c14c2e261902bf7bf3c6e7aef34b501dcc5638df90e812_prof);

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
