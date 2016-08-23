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
        $__internal_79c65b34a1c8350f45f04fe9ae5b21fe63b3166fcbf0aaef4b8e1a5dbb3e590e = $this->env->getExtension("native_profiler");
        $__internal_79c65b34a1c8350f45f04fe9ae5b21fe63b3166fcbf0aaef4b8e1a5dbb3e590e->enter($__internal_79c65b34a1c8350f45f04fe9ae5b21fe63b3166fcbf0aaef4b8e1a5dbb3e590e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::ArticleLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79c65b34a1c8350f45f04fe9ae5b21fe63b3166fcbf0aaef4b8e1a5dbb3e590e->leave($__internal_79c65b34a1c8350f45f04fe9ae5b21fe63b3166fcbf0aaef4b8e1a5dbb3e590e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_223209e4d4dd220e7fb8c6c92ca85b1f212037364ebc249ed1e82e19d3ecdb20 = $this->env->getExtension("native_profiler");
        $__internal_223209e4d4dd220e7fb8c6c92ca85b1f212037364ebc249ed1e82e19d3ecdb20->enter($__internal_223209e4d4dd220e7fb8c6c92ca85b1f212037364ebc249ed1e82e19d3ecdb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_223209e4d4dd220e7fb8c6c92ca85b1f212037364ebc249ed1e82e19d3ecdb20->leave($__internal_223209e4d4dd220e7fb8c6c92ca85b1f212037364ebc249ed1e82e19d3ecdb20_prof);

    }

    // line 14
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_bc40a474137c4bab2b2a0dd787ea9fffb65cd23db0c35dcc1229fbca3965821b = $this->env->getExtension("native_profiler");
        $__internal_bc40a474137c4bab2b2a0dd787ea9fffb65cd23db0c35dcc1229fbca3965821b->enter($__internal_bc40a474137c4bab2b2a0dd787ea9fffb65cd23db0c35dcc1229fbca3965821b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 15
        echo "  ";
        
        $__internal_bc40a474137c4bab2b2a0dd787ea9fffb65cd23db0c35dcc1229fbca3965821b->leave($__internal_bc40a474137c4bab2b2a0dd787ea9fffb65cd23db0c35dcc1229fbca3965821b_prof);

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
