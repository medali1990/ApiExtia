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
        $__internal_90b0f6065aebbe269f59eedf28d30fb6abc6039545c1d152b5973ba756bbe837 = $this->env->getExtension("native_profiler");
        $__internal_90b0f6065aebbe269f59eedf28d30fb6abc6039545c1d152b5973ba756bbe837->enter($__internal_90b0f6065aebbe269f59eedf28d30fb6abc6039545c1d152b5973ba756bbe837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90b0f6065aebbe269f59eedf28d30fb6abc6039545c1d152b5973ba756bbe837->leave($__internal_90b0f6065aebbe269f59eedf28d30fb6abc6039545c1d152b5973ba756bbe837_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebbfb3e80d8bebe03629ea17d637bcce1db2fab7402cc93543419fc9b2b3588a = $this->env->getExtension("native_profiler");
        $__internal_ebbfb3e80d8bebe03629ea17d637bcce1db2fab7402cc93543419fc9b2b3588a->enter($__internal_ebbfb3e80d8bebe03629ea17d637bcce1db2fab7402cc93543419fc9b2b3588a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ebbfb3e80d8bebe03629ea17d637bcce1db2fab7402cc93543419fc9b2b3588a->leave($__internal_ebbfb3e80d8bebe03629ea17d637bcce1db2fab7402cc93543419fc9b2b3588a_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_049bb66790bc956cb3268dd81636d21ce8c4f41df83fb3a26c18c216b7974c87 = $this->env->getExtension("native_profiler");
        $__internal_049bb66790bc956cb3268dd81636d21ce8c4f41df83fb3a26c18c216b7974c87->enter($__internal_049bb66790bc956cb3268dd81636d21ce8c4f41df83fb3a26c18c216b7974c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_049bb66790bc956cb3268dd81636d21ce8c4f41df83fb3a26c18c216b7974c87->leave($__internal_049bb66790bc956cb3268dd81636d21ce8c4f41df83fb3a26c18c216b7974c87_prof);

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
