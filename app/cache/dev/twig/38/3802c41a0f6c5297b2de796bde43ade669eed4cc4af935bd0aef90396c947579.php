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
        $__internal_de70a701ce2302c1949c4da7d66ad340687780193215f316717fdffb72690604 = $this->env->getExtension("native_profiler");
        $__internal_de70a701ce2302c1949c4da7d66ad340687780193215f316717fdffb72690604->enter($__internal_de70a701ce2302c1949c4da7d66ad340687780193215f316717fdffb72690604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de70a701ce2302c1949c4da7d66ad340687780193215f316717fdffb72690604->leave($__internal_de70a701ce2302c1949c4da7d66ad340687780193215f316717fdffb72690604_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75c3a81b36f1acb783089ad8626abadccf6cda90a211c3d8552add29af0d87a7 = $this->env->getExtension("native_profiler");
        $__internal_75c3a81b36f1acb783089ad8626abadccf6cda90a211c3d8552add29af0d87a7->enter($__internal_75c3a81b36f1acb783089ad8626abadccf6cda90a211c3d8552add29af0d87a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Creation article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_75c3a81b36f1acb783089ad8626abadccf6cda90a211c3d8552add29af0d87a7->leave($__internal_75c3a81b36f1acb783089ad8626abadccf6cda90a211c3d8552add29af0d87a7_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_9ef41b692db291a100c7da9b68396cc0566a422cacd4ae70264cba4cd19b3d24 = $this->env->getExtension("native_profiler");
        $__internal_9ef41b692db291a100c7da9b68396cc0566a422cacd4ae70264cba4cd19b3d24->enter($__internal_9ef41b692db291a100c7da9b68396cc0566a422cacd4ae70264cba4cd19b3d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

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
        
        $__internal_9ef41b692db291a100c7da9b68396cc0566a422cacd4ae70264cba4cd19b3d24->leave($__internal_9ef41b692db291a100c7da9b68396cc0566a422cacd4ae70264cba4cd19b3d24_prof);

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
/*   Creation article-{{ parent() }}*/
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
