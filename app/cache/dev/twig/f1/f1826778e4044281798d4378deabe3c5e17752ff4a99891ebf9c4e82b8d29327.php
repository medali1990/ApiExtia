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
        $__internal_9c0aaf39c0426a78d30a8897bb922ec52a8265129d39dfe79dfeb5251bfe286d = $this->env->getExtension("native_profiler");
        $__internal_9c0aaf39c0426a78d30a8897bb922ec52a8265129d39dfe79dfeb5251bfe286d->enter($__internal_9c0aaf39c0426a78d30a8897bb922ec52a8265129d39dfe79dfeb5251bfe286d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c0aaf39c0426a78d30a8897bb922ec52a8265129d39dfe79dfeb5251bfe286d->leave($__internal_9c0aaf39c0426a78d30a8897bb922ec52a8265129d39dfe79dfeb5251bfe286d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d36cde360466d82ef25d5596d907dab1c720078db898bad17e12ac70b29d4ce8 = $this->env->getExtension("native_profiler");
        $__internal_d36cde360466d82ef25d5596d907dab1c720078db898bad17e12ac70b29d4ce8->enter($__internal_d36cde360466d82ef25d5596d907dab1c720078db898bad17e12ac70b29d4ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d36cde360466d82ef25d5596d907dab1c720078db898bad17e12ac70b29d4ce8->leave($__internal_d36cde360466d82ef25d5596d907dab1c720078db898bad17e12ac70b29d4ce8_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_a6c5bbe05c1c439d38cd43f677a2078d228484fe3c257b526fedf3191410bbe4 = $this->env->getExtension("native_profiler");
        $__internal_a6c5bbe05c1c439d38cd43f677a2078d228484fe3c257b526fedf3191410bbe4->enter($__internal_a6c5bbe05c1c439d38cd43f677a2078d228484fe3c257b526fedf3191410bbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_a6c5bbe05c1c439d38cd43f677a2078d228484fe3c257b526fedf3191410bbe4->leave($__internal_a6c5bbe05c1c439d38cd43f677a2078d228484fe3c257b526fedf3191410bbe4_prof);

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
