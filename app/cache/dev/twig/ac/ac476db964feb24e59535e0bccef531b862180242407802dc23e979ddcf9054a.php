<?php

/* FrontOfficeBundle:FrontOffice:ViewArticles.html.twig */
class __TwigTemplate_863c4c5f5cc9ab72b2be822f7895af4f3c5f4b61aab1baa7ea3c311070994a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::ArticleLayout.html.twig", "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig", 1);
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
        $__internal_40b23a76475f5ab5661d792a9dcabba1d6d2dfc9da7aab870c301b706d2a5a49 = $this->env->getExtension("native_profiler");
        $__internal_40b23a76475f5ab5661d792a9dcabba1d6d2dfc9da7aab870c301b706d2a5a49->enter($__internal_40b23a76475f5ab5661d792a9dcabba1d6d2dfc9da7aab870c301b706d2a5a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b23a76475f5ab5661d792a9dcabba1d6d2dfc9da7aab870c301b706d2a5a49->leave($__internal_40b23a76475f5ab5661d792a9dcabba1d6d2dfc9da7aab870c301b706d2a5a49_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07dc79ea793373b676f6a905b8db26c5d480ca5b80b20acece00ae41784e7383 = $this->env->getExtension("native_profiler");
        $__internal_07dc79ea793373b676f6a905b8db26c5d480ca5b80b20acece00ae41784e7383->enter($__internal_07dc79ea793373b676f6a905b8db26c5d480ca5b80b20acece00ae41784e7383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Liste articles-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_07dc79ea793373b676f6a905b8db26c5d480ca5b80b20acece00ae41784e7383->leave($__internal_07dc79ea793373b676f6a905b8db26c5d480ca5b80b20acece00ae41784e7383_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_16bfb30d2a5259dc540360316c0fa5c0d38d266f58dcebc39101fba97660c57e = $this->env->getExtension("native_profiler");
        $__internal_16bfb30d2a5259dc540360316c0fa5c0d38d266f58dcebc39101fba97660c57e->enter($__internal_16bfb30d2a5259dc540360316c0fa5c0d38d266f58dcebc39101fba97660c57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
\t<div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>Liste des articles</h1>

        </div>
    </div>

";
        
        $__internal_16bfb30d2a5259dc540360316c0fa5c0d38d266f58dcebc39101fba97660c57e->leave($__internal_16bfb30d2a5259dc540360316c0fa5c0d38d266f58dcebc39101fba97660c57e_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig";
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
/*   Liste articles-{{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block article_body %}*/
/* */
/* 	<div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1>Liste des articles</h1>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
