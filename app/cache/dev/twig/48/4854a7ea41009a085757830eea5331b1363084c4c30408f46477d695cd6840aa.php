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
        $__internal_201e680b13ef88c7d73360ea7c44e001e35f9b1c6ccdef822785cfb770a0ea30 = $this->env->getExtension("native_profiler");
        $__internal_201e680b13ef88c7d73360ea7c44e001e35f9b1c6ccdef822785cfb770a0ea30->enter($__internal_201e680b13ef88c7d73360ea7c44e001e35f9b1c6ccdef822785cfb770a0ea30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201e680b13ef88c7d73360ea7c44e001e35f9b1c6ccdef822785cfb770a0ea30->leave($__internal_201e680b13ef88c7d73360ea7c44e001e35f9b1c6ccdef822785cfb770a0ea30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b88be8dcaa835b63f8c9f7f6492ffb69fed2ad88635ca7a329d3742813c6d39 = $this->env->getExtension("native_profiler");
        $__internal_3b88be8dcaa835b63f8c9f7f6492ffb69fed2ad88635ca7a329d3742813c6d39->enter($__internal_3b88be8dcaa835b63f8c9f7f6492ffb69fed2ad88635ca7a329d3742813c6d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Liste articles-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3b88be8dcaa835b63f8c9f7f6492ffb69fed2ad88635ca7a329d3742813c6d39->leave($__internal_3b88be8dcaa835b63f8c9f7f6492ffb69fed2ad88635ca7a329d3742813c6d39_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_9dc809d14d9ff4dd5c98920a3da47fe7c1526492b61e8402d8a08870e54a3b7a = $this->env->getExtension("native_profiler");
        $__internal_9dc809d14d9ff4dd5c98920a3da47fe7c1526492b61e8402d8a08870e54a3b7a->enter($__internal_9dc809d14d9ff4dd5c98920a3da47fe7c1526492b61e8402d8a08870e54a3b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

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
            echo "\">Details</a><a class=\"supprimer btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5\" style=\"margin-left:5px;\" id=\"";
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
        
        $__internal_9dc809d14d9ff4dd5c98920a3da47fe7c1526492b61e8402d8a08870e54a3b7a->leave($__internal_9dc809d14d9ff4dd5c98920a3da47fe7c1526492b61e8402d8a08870e54a3b7a_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5cd289806a1395d6d384939a7841b6277287e6715211c3cb5e8787c176a40bc7 = $this->env->getExtension("native_profiler");
        $__internal_5cd289806a1395d6d384939a7841b6277287e6715211c3cb5e8787c176a40bc7->enter($__internal_5cd289806a1395d6d384939a7841b6277287e6715211c3cb5e8787c176a40bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<!-- mon fichier test -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/frontoffice/js/test.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5cd289806a1395d6d384939a7841b6277287e6715211c3cb5e8787c176a40bc7->leave($__internal_5cd289806a1395d6d384939a7841b6277287e6715211c3cb5e8787c176a40bc7_prof);

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
        return array (  146 => 49,  140 => 47,  134 => 46,  118 => 37,  113 => 34,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  81 => 26,  77 => 25,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/* 		           				<th scope="row" class="inline col-lg-4 col-md-4 col-sm-4 col-xs-4"><a class="btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5" href="{{ path('Article', {'id':article.id}) }}">Details</a><a class="supprimer btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5" style="margin-left:5px;" id="{{ article.id }}">Supprimer</a></th>*/
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
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<!-- mon fichier test -->*/
/*     <script src="{{ asset('/bundles/frontoffice/js/test.js') }}"></script>*/
/* {% endblock %}*/
