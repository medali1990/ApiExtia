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
        $__internal_a8a6e7106f1aaf8eb5de70cfc23de3945d134e643d7c8055c9e40001faacd93c = $this->env->getExtension("native_profiler");
        $__internal_a8a6e7106f1aaf8eb5de70cfc23de3945d134e643d7c8055c9e40001faacd93c->enter($__internal_a8a6e7106f1aaf8eb5de70cfc23de3945d134e643d7c8055c9e40001faacd93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a6e7106f1aaf8eb5de70cfc23de3945d134e643d7c8055c9e40001faacd93c->leave($__internal_a8a6e7106f1aaf8eb5de70cfc23de3945d134e643d7c8055c9e40001faacd93c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9b0f7463f5dafeb1eb05624ac538c280f3b40fa1c0d8efdb0db6033dd2250e8 = $this->env->getExtension("native_profiler");
        $__internal_f9b0f7463f5dafeb1eb05624ac538c280f3b40fa1c0d8efdb0db6033dd2250e8->enter($__internal_f9b0f7463f5dafeb1eb05624ac538c280f3b40fa1c0d8efdb0db6033dd2250e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Creation article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_f9b0f7463f5dafeb1eb05624ac538c280f3b40fa1c0d8efdb0db6033dd2250e8->leave($__internal_f9b0f7463f5dafeb1eb05624ac538c280f3b40fa1c0d8efdb0db6033dd2250e8_prof);

    }

    // line 5
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_d296e98364b65b44744b284ff21ef198a4d40fd8fee05deef37b4c5b15309ac2 = $this->env->getExtension("native_profiler");
        $__internal_d296e98364b65b44744b284ff21ef198a4d40fd8fee05deef37b4c5b15309ac2->enter($__internal_d296e98364b65b44744b284ff21ef198a4d40fd8fee05deef37b4c5b15309ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 6
        echo "\t<div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>Creer un article</h1>
\t\t\t<div class=\"well\">
\t\t\t  ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t\t\t</div>
        </div>
    </div>
";
        
        $__internal_d296e98364b65b44744b284ff21ef198a4d40fd8fee05deef37b4c5b15309ac2->leave($__internal_d296e98364b65b44744b284ff21ef198a4d40fd8fee05deef37b4c5b15309ac2_prof);

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
        return array (  63 => 10,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "FrontOfficeBundle::ArticleLayout.html.twig" %}*/
/* {% block title %}*/
/*   Creation article-{{ parent() }} */
/* {% endblock %}*/
/* {% block article_body %}*/
/* 	<div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1>Creer un article</h1>*/
/* 			<div class="well">*/
/* 			  {{ form(form) }}*/
/* 			</div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
