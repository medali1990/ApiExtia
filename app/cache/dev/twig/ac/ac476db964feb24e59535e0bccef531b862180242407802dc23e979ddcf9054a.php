<?php

/* FrontOfficeBundle:FrontOffice:ViewArticles.html.twig */
class __TwigTemplate_863c4c5f5cc9ab72b2be822f7895af4f3c5f4b61aab1baa7ea3c311070994a76 extends Twig_Template
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
        $__internal_03f77608076ede97527a60a28b1c2281302486f2e94c186e57459707278645d8 = $this->env->getExtension("native_profiler");
        $__internal_03f77608076ede97527a60a28b1c2281302486f2e94c186e57459707278645d8->enter($__internal_03f77608076ede97527a60a28b1c2281302486f2e94c186e57459707278645d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03f77608076ede97527a60a28b1c2281302486f2e94c186e57459707278645d8->leave($__internal_03f77608076ede97527a60a28b1c2281302486f2e94c186e57459707278645d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bd27de62fadc76bdda8e135bf18fd9f1aaf90ac57fe7f7703cc3a35bbb50eb6 = $this->env->getExtension("native_profiler");
        $__internal_3bd27de62fadc76bdda8e135bf18fd9f1aaf90ac57fe7f7703cc3a35bbb50eb6->enter($__internal_3bd27de62fadc76bdda8e135bf18fd9f1aaf90ac57fe7f7703cc3a35bbb50eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Liste articles-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3bd27de62fadc76bdda8e135bf18fd9f1aaf90ac57fe7f7703cc3a35bbb50eb6->leave($__internal_3bd27de62fadc76bdda8e135bf18fd9f1aaf90ac57fe7f7703cc3a35bbb50eb6_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_afe619f2863bbfc19eda9ba77d1cb944ba3694701a5dbc5618a766e144bd18b0 = $this->env->getExtension("native_profiler");
        $__internal_afe619f2863bbfc19eda9ba77d1cb944ba3694701a5dbc5618a766e144bd18b0->enter($__internal_afe619f2863bbfc19eda9ba77d1cb944ba3694701a5dbc5618a766e144bd18b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

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
            echo "\">Details</a><a class=\"test btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5\" style=\"margin-left:5px;\" id=\"";
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
\t\t        </div>
\t          \t<div class=\"col-md-6\">
\t          \t</div>
        </div>
    </div>

";
        
        $__internal_afe619f2863bbfc19eda9ba77d1cb944ba3694701a5dbc5618a766e144bd18b0->leave($__internal_afe619f2863bbfc19eda9ba77d1cb944ba3694701a5dbc5618a766e144bd18b0_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b3340d4a1bc710b8db260681191380576e6f62fb002c2d7c6be882e98fa9671 = $this->env->getExtension("native_profiler");
        $__internal_0b3340d4a1bc710b8db260681191380576e6f62fb002c2d7c6be882e98fa9671->enter($__internal_0b3340d4a1bc710b8db260681191380576e6f62fb002c2d7c6be882e98fa9671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<!-- mon fichier test -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/frontoffice/js/test.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0b3340d4a1bc710b8db260681191380576e6f62fb002c2d7c6be882e98fa9671->leave($__internal_0b3340d4a1bc710b8db260681191380576e6f62fb002c2d7c6be882e98fa9671_prof);

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
        return array (  140 => 46,  134 => 44,  128 => 43,  113 => 34,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  81 => 26,  77 => 25,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/* 		           				<th scope="row" class="inline col-lg-4 col-md-4 col-sm-4 col-xs-4"><a class="btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5" href="{{ path('Article', {'id':article.id}) }}">Details</a><a class="test btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5" style="margin-left:5px;" id="{{ article.id }}">Supprimer</a></th>*/
/* 		           			</tr>*/
/* 		           			{% endfor %}*/
/* 		           		</tbody>*/
/* 		           </table>*/
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
