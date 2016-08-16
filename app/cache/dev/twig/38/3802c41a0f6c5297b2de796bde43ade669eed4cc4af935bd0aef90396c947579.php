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
        $__internal_926a2f1747088200f059a40cb511dc4d86ca37ecd90af49a03eb377d89397dd8 = $this->env->getExtension("native_profiler");
        $__internal_926a2f1747088200f059a40cb511dc4d86ca37ecd90af49a03eb377d89397dd8->enter($__internal_926a2f1747088200f059a40cb511dc4d86ca37ecd90af49a03eb377d89397dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_926a2f1747088200f059a40cb511dc4d86ca37ecd90af49a03eb377d89397dd8->leave($__internal_926a2f1747088200f059a40cb511dc4d86ca37ecd90af49a03eb377d89397dd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e9ba774461650f49d6f9d3db088a54c2922c96f9460b9b57f6adfe55df6fe10 = $this->env->getExtension("native_profiler");
        $__internal_6e9ba774461650f49d6f9d3db088a54c2922c96f9460b9b57f6adfe55df6fe10->enter($__internal_6e9ba774461650f49d6f9d3db088a54c2922c96f9460b9b57f6adfe55df6fe10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Creation article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_6e9ba774461650f49d6f9d3db088a54c2922c96f9460b9b57f6adfe55df6fe10->leave($__internal_6e9ba774461650f49d6f9d3db088a54c2922c96f9460b9b57f6adfe55df6fe10_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_04144d434ea18b2dd272a02dd8085f1f0e946b081ecd7a0b071a613f57f2fda2 = $this->env->getExtension("native_profiler");
        $__internal_04144d434ea18b2dd272a02dd8085f1f0e946b081ecd7a0b071a613f57f2fda2->enter($__internal_04144d434ea18b2dd272a02dd8085f1f0e946b081ecd7a0b071a613f57f2fda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
\t<div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>Creer un article</h1>
\t\t\t<div class=\"row\">
                    <div class=\"col-lg-12\">
                    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your name")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laeding", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your Mail")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your Tel")));
        echo "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdBy", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Your Message")));
        echo "
                                </div>
                            
                            \t<div class=\"form-group\">
                                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-xl")));
        echo "
                                </div>
                            </div>
                        </div>
                        
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
        </div>
    </div>
  

";
        
        $__internal_04144d434ea18b2dd272a02dd8085f1f0e946b081ecd7a0b071a613f57f2fda2->leave($__internal_04144d434ea18b2dd272a02dd8085f1f0e946b081ecd7a0b071a613f57f2fda2_prof);

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
        return array (  114 => 39,  110 => 38,  102 => 33,  95 => 29,  88 => 25,  82 => 22,  76 => 19,  69 => 15,  65 => 14,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/* 			<div class="row">*/
/*                     <div class="col-lg-12">*/
/*                     {{ form_start(form) }}*/
/*                     {{ form_errors(form) }}*/
/*                         <div class="row">*/
/*                             <div class="col-md-6">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_row(form.title,{'attr':{'class':'form-control','placeholder':'Your name'}}) }}*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     {{ form_row(form.laeding,{'attr':{'class':'form-control','placeholder':'Your Mail'}}) }}*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     {{ form_row(form.body,{'attr':{'class':'form-control','placeholder':'Your Tel'}}) }}*/
/*                                 </div>*/
/*                             */
/*                                 <div class="form-group">*/
/*                                     {{ form_row(form.createdBy,{'attr':{'class':'form-control','placeholder':'Your Message'}}) }}*/
/*                                 </div>*/
/*                             */
/*                             	<div class="form-group">*/
/*                                     {{ form_row(form.save,{'attr':{'class':'btn btn-xl'}}) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                     {{ form_rest(form) }}*/
/*                     {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/*   */
/* */
/* {% endblock %}*/
