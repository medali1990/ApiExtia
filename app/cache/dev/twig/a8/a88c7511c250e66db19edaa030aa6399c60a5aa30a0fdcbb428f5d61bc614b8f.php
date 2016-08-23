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
        $__internal_15b45dc3da6962f58888c7081b5adebdf064c6da7ba8eb11ccca914b003ee6b1 = $this->env->getExtension("native_profiler");
        $__internal_15b45dc3da6962f58888c7081b5adebdf064c6da7ba8eb11ccca914b003ee6b1->enter($__internal_15b45dc3da6962f58888c7081b5adebdf064c6da7ba8eb11ccca914b003ee6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b45dc3da6962f58888c7081b5adebdf064c6da7ba8eb11ccca914b003ee6b1->leave($__internal_15b45dc3da6962f58888c7081b5adebdf064c6da7ba8eb11ccca914b003ee6b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e1947bc0e7a2425fd2ea0c20cba4485202a8c08c72cb19a556ede67da182cec = $this->env->getExtension("native_profiler");
        $__internal_0e1947bc0e7a2425fd2ea0c20cba4485202a8c08c72cb19a556ede67da182cec->enter($__internal_0e1947bc0e7a2425fd2ea0c20cba4485202a8c08c72cb19a556ede67da182cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Details article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0e1947bc0e7a2425fd2ea0c20cba4485202a8c08c72cb19a556ede67da182cec->leave($__internal_0e1947bc0e7a2425fd2ea0c20cba4485202a8c08c72cb19a556ede67da182cec_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_f2baecbab213e3dcda99a3fcb83f33853b025b79de3e975e34793a28cd3e6226 = $this->env->getExtension("native_profiler");
        $__internal_f2baecbab213e3dcda99a3fcb83f33853b025b79de3e975e34793a28cd3e6226->enter($__internal_f2baecbab213e3dcda99a3fcb83f33853b025b79de3e975e34793a28cd3e6226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
  <div class=\"container\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
        \t<div class=\"row\">
        \t\t<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\">
        \t\t\t<h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h1>
        \t\t</div>
        \t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\" >
        \t\t\t<h3 style=\"margin-top:37px;\">Par ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "createdBy", array()), "html", null, true);
        echo "</h3>
        \t\t</div>
           \t\t<p style=\"font-size:2em;\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "body", array()), "html", null, true);
        echo "</p>
\t   \t\t</div>
\t   \t\t<div class=\"row\" style=\"margin-top:50px;\">
        \t\t<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\">
        \t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("Liste_Articles");
        echo "\"><button class=\"btn btn-danger\"> Retour</button></a>
        \t\t</div>
        \t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\" >
        \t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("Ajout_article");
        echo "\"><button class=\"btn btn-success\">Ajouter un article</button></a>
        \t\t</div>
\t   \t\t</div>
        </div>
    </div>
";
        
        $__internal_f2baecbab213e3dcda99a3fcb83f33853b025b79de3e975e34793a28cd3e6226->leave($__internal_f2baecbab213e3dcda99a3fcb83f33853b025b79de3e975e34793a28cd3e6226_prof);

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
        return array (  88 => 25,  82 => 22,  75 => 18,  70 => 16,  64 => 13,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*   <div class="container">*/
/*         <div class="col-lg-12 col-md-12 col-sm-12 text-center">*/
/*         	<div class="row">*/
/*         		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">*/
/*         			<h1>{{ article.title }}</h1>*/
/*         		</div>*/
/*         		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" >*/
/*         			<h3 style="margin-top:37px;">Par {{ article.createdBy }}</h3>*/
/*         		</div>*/
/*            		<p style="font-size:2em;">{{ article.body }}</p>*/
/* 	   		</div>*/
/* 	   		<div class="row" style="margin-top:50px;">*/
/*         		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">*/
/*         			<a href="{{ path('Liste_Articles') }}"><button class="btn btn-danger"> Retour</button></a>*/
/*         		</div>*/
/*         		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" >*/
/*         			<a href="{{ path('Ajout_article') }}"><button class="btn btn-success">Ajouter un article</button></a>*/
/*         		</div>*/
/* 	   		</div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
