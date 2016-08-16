<?php

/* FrontOfficeBundle:FrontOffice:ViewArticle.html.twig */
class __TwigTemplate_fd29179339b750178379f17c30476640b4b3124234a8a1b619838bf9c6610497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::ArticleLayout.html.twig", "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig", 1);
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
        $__internal_b1a4afac812fbd666baaf96f0d41eecd40aa2fe59bcdadae3c97f9fec643ad5e = $this->env->getExtension("native_profiler");
        $__internal_b1a4afac812fbd666baaf96f0d41eecd40aa2fe59bcdadae3c97f9fec643ad5e->enter($__internal_b1a4afac812fbd666baaf96f0d41eecd40aa2fe59bcdadae3c97f9fec643ad5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a4afac812fbd666baaf96f0d41eecd40aa2fe59bcdadae3c97f9fec643ad5e->leave($__internal_b1a4afac812fbd666baaf96f0d41eecd40aa2fe59bcdadae3c97f9fec643ad5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04edf5255bea9404e9b6fa80e88c37bd3eb2bff5fdb5e3c597a4c908634ea4f3 = $this->env->getExtension("native_profiler");
        $__internal_04edf5255bea9404e9b6fa80e88c37bd3eb2bff5fdb5e3c597a4c908634ea4f3->enter($__internal_04edf5255bea9404e9b6fa80e88c37bd3eb2bff5fdb5e3c597a4c908634ea4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Details article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_04edf5255bea9404e9b6fa80e88c37bd3eb2bff5fdb5e3c597a4c908634ea4f3->leave($__internal_04edf5255bea9404e9b6fa80e88c37bd3eb2bff5fdb5e3c597a4c908634ea4f3_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_110467ef447b5d85c301ec858fe3bb8d562a3dbaf664c1d25e66e9b27d2f9f59 = $this->env->getExtension("native_profiler");
        $__internal_110467ef447b5d85c301ec858fe3bb8d562a3dbaf664c1d25e66e9b27d2f9f59->enter($__internal_110467ef447b5d85c301ec858fe3bb8d562a3dbaf664c1d25e66e9b27d2f9f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
  <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>titre de l'article </h1>

        </div>
    </div>

";
        
        $__internal_110467ef447b5d85c301ec858fe3bb8d562a3dbaf664c1d25e66e9b27d2f9f59->leave($__internal_110467ef447b5d85c301ec858fe3bb8d562a3dbaf664c1d25e66e9b27d2f9f59_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FrontOfficeBundle::ArticleLayout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Details article-{{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block article_body %}*/
/* */
/*   <div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1>titre de l'article </h1>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
