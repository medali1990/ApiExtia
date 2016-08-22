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
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle::ArticleLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fcb54a31754666a4c5e1c8659a5b2d1f9ec493eb0c77b0207b87981aeb2f740 = $this->env->getExtension("native_profiler");
        $__internal_4fcb54a31754666a4c5e1c8659a5b2d1f9ec493eb0c77b0207b87981aeb2f740->enter($__internal_4fcb54a31754666a4c5e1c8659a5b2d1f9ec493eb0c77b0207b87981aeb2f740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fcb54a31754666a4c5e1c8659a5b2d1f9ec493eb0c77b0207b87981aeb2f740->leave($__internal_4fcb54a31754666a4c5e1c8659a5b2d1f9ec493eb0c77b0207b87981aeb2f740_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a5a10bfc658e05e9b40069a274cec07d810e9ed752ea45380bf758db7a0e0f6 = $this->env->getExtension("native_profiler");
        $__internal_8a5a10bfc658e05e9b40069a274cec07d810e9ed752ea45380bf758db7a0e0f6->enter($__internal_8a5a10bfc658e05e9b40069a274cec07d810e9ed752ea45380bf758db7a0e0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Liste articles-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8a5a10bfc658e05e9b40069a274cec07d810e9ed752ea45380bf758db7a0e0f6->leave($__internal_8a5a10bfc658e05e9b40069a274cec07d810e9ed752ea45380bf758db7a0e0f6_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_95adbc14bd753701940d3e9fb1b95ceebbfd2a7d9022857e45612dd85e001137 = $this->env->getExtension("native_profiler");
        $__internal_95adbc14bd753701940d3e9fb1b95ceebbfd2a7d9022857e45612dd85e001137->enter($__internal_95adbc14bd753701940d3e9fb1b95ceebbfd2a7d9022857e45612dd85e001137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

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
            echo "\t\t           \t\t\t<tr>
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
            echo "\">Details</a><a class=\"btn btn-danger col-lg-6 col-md-5 col-sm-4 col-xs-4\" style=\"margin-left:5px;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Suppression_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
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
        
        $__internal_95adbc14bd753701940d3e9fb1b95ceebbfd2a7d9022857e45612dd85e001137->leave($__internal_95adbc14bd753701940d3e9fb1b95ceebbfd2a7d9022857e45612dd85e001137_prof);

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
        return array (  110 => 34,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  80 => 26,  76 => 25,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/* 		           			<tr>*/
/* 		           				<th scope="row">{{ article.id }}</th>*/
/* 		           				<th scope="row">{{ article.title }}</th>*/
/* 		           				<th scope="row">{{ article.body }}</th>*/
/* 		           				<th scope="row">{{ article.createdBy }}</th>*/
/* 		           				<th scope="row" class="inline col-lg-4 col-md-4 col-sm-4 col-xs-4"><a class="btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5" href="{{ path('Article', {'id':article.id}) }}">Details</a><a class="btn btn-danger col-lg-6 col-md-5 col-sm-4 col-xs-4" style="margin-left:5px;" href="{{ path('Suppression_article', {'id':article.id}) }}">Supprimer</a></th>*/
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
