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
        $__internal_0c6bbabdb70f5c22d5ec10e71c0572ae526e8aba87eeb8540025d27c04159aec = $this->env->getExtension("native_profiler");
        $__internal_0c6bbabdb70f5c22d5ec10e71c0572ae526e8aba87eeb8540025d27c04159aec->enter($__internal_0c6bbabdb70f5c22d5ec10e71c0572ae526e8aba87eeb8540025d27c04159aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c6bbabdb70f5c22d5ec10e71c0572ae526e8aba87eeb8540025d27c04159aec->leave($__internal_0c6bbabdb70f5c22d5ec10e71c0572ae526e8aba87eeb8540025d27c04159aec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0d2d4148e361cecc3141f8a8f438e6b1e5b60f70c25bbc941c2f9a63e0ef13b = $this->env->getExtension("native_profiler");
        $__internal_b0d2d4148e361cecc3141f8a8f438e6b1e5b60f70c25bbc941c2f9a63e0ef13b->enter($__internal_b0d2d4148e361cecc3141f8a8f438e6b1e5b60f70c25bbc941c2f9a63e0ef13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Liste articles-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b0d2d4148e361cecc3141f8a8f438e6b1e5b60f70c25bbc941c2f9a63e0ef13b->leave($__internal_b0d2d4148e361cecc3141f8a8f438e6b1e5b60f70c25bbc941c2f9a63e0ef13b_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_0bd38f2e8ae2623a93c9a7e267b31c18388204770076c21fa77a96d0afc92e96 = $this->env->getExtension("native_profiler");
        $__internal_0bd38f2e8ae2623a93c9a7e267b31c18388204770076c21fa77a96d0afc92e96->enter($__internal_0bd38f2e8ae2623a93c9a7e267b31c18388204770076c21fa77a96d0afc92e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

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
        
        $__internal_0bd38f2e8ae2623a93c9a7e267b31c18388204770076c21fa77a96d0afc92e96->leave($__internal_0bd38f2e8ae2623a93c9a7e267b31c18388204770076c21fa77a96d0afc92e96_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7d81dcd12566652900da96e7b91c570f8c5549133aad507a746485053eb6cb3 = $this->env->getExtension("native_profiler");
        $__internal_b7d81dcd12566652900da96e7b91c570f8c5549133aad507a746485053eb6cb3->enter($__internal_b7d81dcd12566652900da96e7b91c570f8c5549133aad507a746485053eb6cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b7d81dcd12566652900da96e7b91c570f8c5549133aad507a746485053eb6cb3->leave($__internal_b7d81dcd12566652900da96e7b91c570f8c5549133aad507a746485053eb6cb3_prof);

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
