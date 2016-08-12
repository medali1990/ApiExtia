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
        $__internal_cf749fdc4951049a43c8ab5c58b5253ae781f3269144e1e242442a4011ea2dac = $this->env->getExtension("native_profiler");
        $__internal_cf749fdc4951049a43c8ab5c58b5253ae781f3269144e1e242442a4011ea2dac->enter($__internal_cf749fdc4951049a43c8ab5c58b5253ae781f3269144e1e242442a4011ea2dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf749fdc4951049a43c8ab5c58b5253ae781f3269144e1e242442a4011ea2dac->leave($__internal_cf749fdc4951049a43c8ab5c58b5253ae781f3269144e1e242442a4011ea2dac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be906c8ad93ea14b5b2671223edb1bd27635f47f7d481958377549cf18a898d9 = $this->env->getExtension("native_profiler");
        $__internal_be906c8ad93ea14b5b2671223edb1bd27635f47f7d481958377549cf18a898d9->enter($__internal_be906c8ad93ea14b5b2671223edb1bd27635f47f7d481958377549cf18a898d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Creation article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_be906c8ad93ea14b5b2671223edb1bd27635f47f7d481958377549cf18a898d9->leave($__internal_be906c8ad93ea14b5b2671223edb1bd27635f47f7d481958377549cf18a898d9_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_fae5ad18de84acf0d7ef65f99b8e7761b94022670eef59a09697a34dc5f5865d = $this->env->getExtension("native_profiler");
        $__internal_fae5ad18de84acf0d7ef65f99b8e7761b94022670eef59a09697a34dc5f5865d->enter($__internal_fae5ad18de84acf0d7ef65f99b8e7761b94022670eef59a09697a34dc5f5865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
\t<div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>Creer un article</h1>

\t\t\t<div class=\"well\">
\t\t\t  ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t\t\t</div>

        </div>
    </div>
  

";
        
        $__internal_fae5ad18de84acf0d7ef65f99b8e7761b94022670eef59a09697a34dc5f5865d->leave($__internal_fae5ad18de84acf0d7ef65f99b8e7761b94022670eef59a09697a34dc5f5865d_prof);

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
/*            <h1>Creer un article</h1>*/
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
