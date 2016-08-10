<?php

/* FrontOfficeBundle:FrontOffice:NewArticle.html.twig */
class __TwigTemplate_5b146713fa4a16f35a91dfa5c6edbb5c65c1ce2c2051dbb4ebc2131e7ba37ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::ArticleLayout.html.twig", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'article_body' => array($this, 'block_article_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle::ArticleLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a17d3a422a381d7b84db979a71f281807a2b5bb73b2889b84aefa4b27e73565d = $this->env->getExtension("native_profiler");
        $__internal_a17d3a422a381d7b84db979a71f281807a2b5bb73b2889b84aefa4b27e73565d->enter($__internal_a17d3a422a381d7b84db979a71f281807a2b5bb73b2889b84aefa4b27e73565d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a17d3a422a381d7b84db979a71f281807a2b5bb73b2889b84aefa4b27e73565d->leave($__internal_a17d3a422a381d7b84db979a71f281807a2b5bb73b2889b84aefa4b27e73565d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68e16586aaf6e26702230c817b7c8a0f084bff0977f6f1e26d189478f4aa68a8 = $this->env->getExtension("native_profiler");
        $__internal_68e16586aaf6e26702230c817b7c8a0f084bff0977f6f1e26d189478f4aa68a8->enter($__internal_68e16586aaf6e26702230c817b7c8a0f084bff0977f6f1e26d189478f4aa68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Creation article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_68e16586aaf6e26702230c817b7c8a0f084bff0977f6f1e26d189478f4aa68a8->leave($__internal_68e16586aaf6e26702230c817b7c8a0f084bff0977f6f1e26d189478f4aa68a8_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_971e4ad6524697f1aa57d1b84e9aa7a5e87fc27c8f0780a67d07cb3b064381d5 = $this->env->getExtension("native_profiler");
        $__internal_971e4ad6524697f1aa57d1b84e9aa7a5e87fc27c8f0780a67d07cb3b064381d5->enter($__internal_971e4ad6524697f1aa57d1b84e9aa7a5e87fc27c8f0780a67d07cb3b064381d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
\t<div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>Creer un article -version_1_1</h1>

\t\t\t<div class=\"well\">
\t\t\t  ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t\t\t</div>

        </div>
    </div>
  

";
        
        $__internal_971e4ad6524697f1aa57d1b84e9aa7a5e87fc27c8f0780a67d07cb3b064381d5->leave($__internal_971e4ad6524697f1aa57d1b84e9aa7a5e87fc27c8f0780a67d07cb3b064381d5_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:FrontOffice:NewArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FrontOfficeBundle::ArticleLayout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Creation article-{{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block article_body %}*/
/* */
/* 	<div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1>Creer un article -version_1_1</h1>*/
/* */
/* 			<div class="well">*/
/* 			  {{ form(form) }}*/
/* 			</div>*/
/* */
/*         </div>*/
/*     </div>*/
/*   */
/* */
/* {% endblock %}*/
