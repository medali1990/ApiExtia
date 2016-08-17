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
        $__internal_cc8ad65765c12cfa321c2858d913f49f947eebc891f7b2e0dab0c2c5eb4addea = $this->env->getExtension("native_profiler");
        $__internal_cc8ad65765c12cfa321c2858d913f49f947eebc891f7b2e0dab0c2c5eb4addea->enter($__internal_cc8ad65765c12cfa321c2858d913f49f947eebc891f7b2e0dab0c2c5eb4addea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc8ad65765c12cfa321c2858d913f49f947eebc891f7b2e0dab0c2c5eb4addea->leave($__internal_cc8ad65765c12cfa321c2858d913f49f947eebc891f7b2e0dab0c2c5eb4addea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b67b884cf007aa6176ecbaaa094906049cc1e5ceebe2f0099c0bfc4546fd5100 = $this->env->getExtension("native_profiler");
        $__internal_b67b884cf007aa6176ecbaaa094906049cc1e5ceebe2f0099c0bfc4546fd5100->enter($__internal_b67b884cf007aa6176ecbaaa094906049cc1e5ceebe2f0099c0bfc4546fd5100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Creation article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_b67b884cf007aa6176ecbaaa094906049cc1e5ceebe2f0099c0bfc4546fd5100->leave($__internal_b67b884cf007aa6176ecbaaa094906049cc1e5ceebe2f0099c0bfc4546fd5100_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_dec27b624a93391067dedc9e1b1ff3c0d7ab26ffc2b5fdbf195f7c96aabcefc0 = $this->env->getExtension("native_profiler");
        $__internal_dec27b624a93391067dedc9e1b1ff3c0d7ab26ffc2b5fdbf195f7c96aabcefc0->enter($__internal_dec27b624a93391067dedc9e1b1ff3c0d7ab26ffc2b5fdbf195f7c96aabcefc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "\t<div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>Creer un article</h1>
\t\t\t<div class=\"row\">
                <div class=\"col-lg-12\">
                ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your title")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laeding", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your leading")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your body")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdBy", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your author")));
        echo "
                            </div>
                        \t<div class=\"form-group\">
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-xl")));
        echo "
                            </div>
                        </div>
                    </div>
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
  

";
        
        $__internal_dec27b624a93391067dedc9e1b1ff3c0d7ab26ffc2b5fdbf195f7c96aabcefc0->leave($__internal_dec27b624a93391067dedc9e1b1ff3c0d7ab26ffc2b5fdbf195f7c96aabcefc0_prof);

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
        return array (  110 => 35,  106 => 34,  99 => 30,  93 => 27,  87 => 24,  81 => 21,  75 => 18,  68 => 14,  64 => 13,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FrontOfficeBundle::ArticleLayout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Creation article-{{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block article_body %}*/
/* 	<div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1>Creer un article</h1>*/
/* 			<div class="row">*/
/*                 <div class="col-lg-12">*/
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
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
/*                         	<div class="form-group">*/
/*                                 {{ form_row(form.save,{'attr':{'class':'btn btn-xl'}}) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {{ form_rest(form) }}*/
/*                 {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*   */
/* */
/* {% endblock %}*/
