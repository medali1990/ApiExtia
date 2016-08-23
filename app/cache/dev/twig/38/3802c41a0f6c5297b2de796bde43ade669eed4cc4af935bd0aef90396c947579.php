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
        $__internal_33ee8dae7517ef702c331e7a0852a776eeba89aa3945b951a6324fa26da573bc = $this->env->getExtension("native_profiler");
        $__internal_33ee8dae7517ef702c331e7a0852a776eeba89aa3945b951a6324fa26da573bc->enter($__internal_33ee8dae7517ef702c331e7a0852a776eeba89aa3945b951a6324fa26da573bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33ee8dae7517ef702c331e7a0852a776eeba89aa3945b951a6324fa26da573bc->leave($__internal_33ee8dae7517ef702c331e7a0852a776eeba89aa3945b951a6324fa26da573bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_605a0efccb5dbb5a93c7c3f51e9e14abc174708b66550edf42f2381fe4c62056 = $this->env->getExtension("native_profiler");
        $__internal_605a0efccb5dbb5a93c7c3f51e9e14abc174708b66550edf42f2381fe4c62056->enter($__internal_605a0efccb5dbb5a93c7c3f51e9e14abc174708b66550edf42f2381fe4c62056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Creation article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_605a0efccb5dbb5a93c7c3f51e9e14abc174708b66550edf42f2381fe4c62056->leave($__internal_605a0efccb5dbb5a93c7c3f51e9e14abc174708b66550edf42f2381fe4c62056_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_a30b023fed20c6bf22a538ed3225e2e8b9a4e95a4c8cc1177f0cfd06de08c197 = $this->env->getExtension("native_profiler");
        $__internal_a30b023fed20c6bf22a538ed3225e2e8b9a4e95a4c8cc1177f0cfd06de08c197->enter($__internal_a30b023fed20c6bf22a538ed3225e2e8b9a4e95a4c8cc1177f0cfd06de08c197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "\t<div class=\"container col-lg-6 col-lg-offset-3 text-center\">
        <div class=\"col-sm-12 col-md-12 col-lg-12\">
           <h1>Creer un article</h1>
                
                ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    
                            <div class=\"form-group\">
                                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your title")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laeding", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your leading")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your body")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdBy", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your author")));
        echo "
                            </div>
                        \t<div class=\"form-group inline\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-xl")));
        echo "
                            </div>
                        
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                
           
        </div>
        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("Liste_Articles");
        echo "\"><button class=\"btn btn-danger\">Retour</button> </a>
    </div>
    
  

";
        
        $__internal_a30b023fed20c6bf22a538ed3225e2e8b9a4e95a4c8cc1177f0cfd06de08c197->leave($__internal_a30b023fed20c6bf22a538ed3225e2e8b9a4e95a4c8cc1177f0cfd06de08c197_prof);

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
        return array (  114 => 36,  107 => 32,  103 => 31,  97 => 28,  91 => 25,  85 => 22,  79 => 19,  73 => 16,  67 => 13,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FrontOfficeBundle::ArticleLayout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Creation article-{{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block article_body %}*/
/* 	<div class="container col-lg-6 col-lg-offset-3 text-center">*/
/*         <div class="col-sm-12 col-md-12 col-lg-12">*/
/*            <h1>Creer un article</h1>*/
/*                 */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                     */
/*                             <div class="form-group">*/
/*                                 {{ form_row(form.title,{'attr':{'class':'form-control','placeholder':'Your title'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_row(form.laeding,{'attr':{'class':'form-control','placeholder':'Your leading'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_row(form.body,{'attr':{'class':'form-control','placeholder':'Your body'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_row(form.createdBy,{'attr':{'class':'form-control','placeholder':'Your author'}}) }}*/
/*                             </div>*/
/*                         	<div class="form-group inline">*/
/*                                 {{ form_row(form.save,{'attr':{'class':'btn btn-xl'}}) }}*/
/*                             </div>*/
/*                         */
/*                 {{ form_rest(form) }}*/
/*                 {{ form_end(form) }}*/
/*                 */
/*            */
/*         </div>*/
/*         <a href="{{ path('Liste_Articles') }}"><button class="btn btn-danger">Retour</button> </a>*/
/*     </div>*/
/*     */
/*   */
/* */
/* {% endblock %}*/
