<?php

/* FrontOfficeBundle:FrontOffice:ViewArticles.html.twig */
class __TwigTemplate_fba31a9e0504242a0be002e8a1a4b91b88a17eaf5ae363f28a761ffb3b700e72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::ArticleLayout.html.twig", "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'article_body' => array($this, 'block_article_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle::ArticleLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66f62948d9a106490d21deb780d364a023f3a7c4d105e779410b9531c99ddfb4 = $this->env->getExtension("native_profiler");
        $__internal_66f62948d9a106490d21deb780d364a023f3a7c4d105e779410b9531c99ddfb4->enter($__internal_66f62948d9a106490d21deb780d364a023f3a7c4d105e779410b9531c99ddfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f62948d9a106490d21deb780d364a023f3a7c4d105e779410b9531c99ddfb4->leave($__internal_66f62948d9a106490d21deb780d364a023f3a7c4d105e779410b9531c99ddfb4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b101d8a30869984902b2ec0eb9ccd1a9a0256bc82e47cc91952b9da5f2a69927 = $this->env->getExtension("native_profiler");
        $__internal_b101d8a30869984902b2ec0eb9ccd1a9a0256bc82e47cc91952b9da5f2a69927->enter($__internal_b101d8a30869984902b2ec0eb9ccd1a9a0256bc82e47cc91952b9da5f2a69927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Liste articles-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b101d8a30869984902b2ec0eb9ccd1a9a0256bc82e47cc91952b9da5f2a69927->leave($__internal_b101d8a30869984902b2ec0eb9ccd1a9a0256bc82e47cc91952b9da5f2a69927_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_1f304bb243ae076294133a7a3d76cca08c0e547788634d3927013fd11e215d5f = $this->env->getExtension("native_profiler");
        $__internal_1f304bb243ae076294133a7a3d76cca08c0e547788634d3927013fd11e215d5f->enter($__internal_1f304bb243ae076294133a7a3d76cca08c0e547788634d3927013fd11e215d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
\t<div class=\"container col-lg-12 col-sm-12 col-md-12 text-center\">
        <div class=\"col-lg-12 text-center\">
           <h1 style=\"margin-bottom:34px;\">Liste des articles</h1>
           \t\t<div class=\"col-md-3\"></div>\t
\t           \t<div class=\"col-md-6 center\">\t
\t\t           <table class=\"table table-striped\">
\t\t           \t\t<thead class=\"thead-inverse\">
\t\t           \t\t\t<tr>
\t\t           \t\t\t\t<th>Num</th>
\t\t           \t\t\t\t<th>Titre</th>
\t\t           \t\t\t\t<th>Description</th>
\t\t           \t\t\t\t<th>Auteur</th>
\t\t           \t\t\t\t<th>Action</th>
\t\t           \t\t\t</tr>
\t\t           \t\t</thead>
\t\t           \t\t<tbody>
\t\t           \t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "\t\t           \t\t\t<tr id=\"tr_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">
\t\t           \t\t\t\t<th scope=\"row\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</th>
\t\t           \t\t\t\t<th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</th>
\t\t           \t\t\t\t<th scope=\"row\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "body", array()), "html", null, true);
            echo "</th>
\t\t           \t\t\t\t<th scope=\"row\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "createdBy", array()), "html", null, true);
            echo "</th>
\t\t           \t\t\t\t<th scope=\"row\" class=\"inline col-lg-4 col-md-4 col-sm-4 col-xs-4\"><a class=\"btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Details"), "html", null, true);
            echo "</a><a class=\"supprimer btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5\" style=\"margin-left:5px;\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">Supprimer</a></th>
\t\t           \t\t\t</tr>
\t\t           \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t           \t\t</tbody>
\t\t           </table>
\t\t           <div class=\"navigation\">
    \t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        echo "
\t\t\t\t\t</div>
\t\t        </div>
\t          \t<div class=\"col-md-6\">
\t          \t</div>
        </div>
    </div>
";
        
        $__internal_1f304bb243ae076294133a7a3d76cca08c0e547788634d3927013fd11e215d5f->leave($__internal_1f304bb243ae076294133a7a3d76cca08c0e547788634d3927013fd11e215d5f_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa74302085e64f5a6e273d8ab5440d4338d8b3353fc2e4b2e48a37609017905b = $this->env->getExtension("native_profiler");
        $__internal_fa74302085e64f5a6e273d8ab5440d4338d8b3353fc2e4b2e48a37609017905b->enter($__internal_fa74302085e64f5a6e273d8ab5440d4338d8b3353fc2e4b2e48a37609017905b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<!-- mon fichier test -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/frontoffice/js/test.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fa74302085e64f5a6e273d8ab5440d4338d8b3353fc2e4b2e48a37609017905b->leave($__internal_fa74302085e64f5a6e273d8ab5440d4338d8b3353fc2e4b2e48a37609017905b_prof);

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
        return array (  147 => 48,  141 => 46,  135 => 45,  120 => 37,  115 => 34,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  81 => 26,  77 => 25,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/* 	<div class="container col-lg-12 col-sm-12 col-md-12 text-center">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1 style="margin-bottom:34px;">Liste des articles</h1>*/
/*            		<div class="col-md-3"></div>	*/
/* 	           	<div class="col-md-6 center">	*/
/* 		           <table class="table table-striped">*/
/* 		           		<thead class="thead-inverse">*/
/* 		           			<tr>*/
/* 		           				<th>Num</th>*/
/* 		           				<th>Titre</th>*/
/* 		           				<th>Description</th>*/
/* 		           				<th>Auteur</th>*/
/* 		           				<th>Action</th>*/
/* 		           			</tr>*/
/* 		           		</thead>*/
/* 		           		<tbody>*/
/* 		           			{% for article in articles %}*/
/* 		           			<tr id="tr_{{ article.id }}">*/
/* 		           				<th scope="row">{{ article.id }}</th>*/
/* 		           				<th scope="row">{{ article.title }}</th>*/
/* 		           				<th scope="row">{{ article.body }}</th>*/
/* 		           				<th scope="row">{{ article.createdBy }}</th>*/
/* 		           				<th scope="row" class="inline col-lg-4 col-md-4 col-sm-4 col-xs-4"><a class="btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5" href="{{ path('Article', {'id':article.id}) }}">{{ 'Details'|trans }}</a><a class="supprimer btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5" style="margin-left:5px;" id="{{ article.id }}">Supprimer</a></th>*/
/* 		           			</tr>*/
/* 		           			{% endfor %}*/
/* 		           		</tbody>*/
/* 		           </table>*/
/* 		           <div class="navigation">*/
/*     					{{ knp_pagination_render(articles) }}*/
/* 					</div>*/
/* 		        </div>*/
/* 	          	<div class="col-md-6">*/
/* 	          	</div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<!-- mon fichier test -->*/
/*     <script src="{{ asset('/bundles/frontoffice/js/test.js') }}"></script>*/
/* {% endblock %}*/
