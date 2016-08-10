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
        $__internal_3a2f72c36d92507fa75770c4bb0bf8a294259077728318c9997458e242814e3d = $this->env->getExtension("native_profiler");
        $__internal_3a2f72c36d92507fa75770c4bb0bf8a294259077728318c9997458e242814e3d->enter($__internal_3a2f72c36d92507fa75770c4bb0bf8a294259077728318c9997458e242814e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2f72c36d92507fa75770c4bb0bf8a294259077728318c9997458e242814e3d->leave($__internal_3a2f72c36d92507fa75770c4bb0bf8a294259077728318c9997458e242814e3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0636f1e03149846785c8fb891eac0b33ce38534599c3b1f22a5c43c74cb87fa9 = $this->env->getExtension("native_profiler");
        $__internal_0636f1e03149846785c8fb891eac0b33ce38534599c3b1f22a5c43c74cb87fa9->enter($__internal_0636f1e03149846785c8fb891eac0b33ce38534599c3b1f22a5c43c74cb87fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Liste articles-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0636f1e03149846785c8fb891eac0b33ce38534599c3b1f22a5c43c74cb87fa9->leave($__internal_0636f1e03149846785c8fb891eac0b33ce38534599c3b1f22a5c43c74cb87fa9_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_13872687c01cc4292f727e3590d8c36599336cfce1c9936abb3d6681ceced23f = $this->env->getExtension("native_profiler");
        $__internal_13872687c01cc4292f727e3590d8c36599336cfce1c9936abb3d6681ceced23f->enter($__internal_13872687c01cc4292f727e3590d8c36599336cfce1c9936abb3d6681ceced23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
\t<div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>Liste des articles</h1>
           \t\t<div class=\"col-md-3\"></div>\t
           \t\t
\t           \t<div class=\"col-md-6 center\">\t
\t\t           <table class=\"table table-striped\">
\t\t           \t\t<thead class=\"thead-inverse\">
\t\t           \t\t\t<tr>
\t\t           \t\t\t\t<th>Num</th>
\t\t           \t\t\t\t<th>Titre</th>
\t\t           \t\t\t\t<th>Description</th>
\t\t           \t\t\t\t<th>Auteur</th>
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
\t\t           \t\t\t</tr>
\t\t           \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t           \t\t</tbody>
\t\t           </table>
\t\t        </div>
\t          \t<div class=\"col-md-3\"></div>
        </div>
    </div>

";
        
        $__internal_13872687c01cc4292f727e3590d8c36599336cfce1c9936abb3d6681ceced23f->leave($__internal_13872687c01cc4292f727e3590d8c36599336cfce1c9936abb3d6681ceced23f_prof);

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
        return array (  104 => 33,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  80 => 26,  76 => 25,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/* 	<div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1>Liste des articles</h1>*/
/*            		<div class="col-md-3"></div>	*/
/*            		*/
/* 	           	<div class="col-md-6 center">	*/
/* 		           <table class="table table-striped">*/
/* 		           		<thead class="thead-inverse">*/
/* 		           			<tr>*/
/* 		           				<th>Num</th>*/
/* 		           				<th>Titre</th>*/
/* 		           				<th>Description</th>*/
/* 		           				<th>Auteur</th>*/
/* 		           			</tr>*/
/* 		           		</thead>*/
/* 		           		<tbody>*/
/* 		           			{% for article in articles %}*/
/* 		           			<tr>*/
/* 		           				<th scope="row">{{ article.id }}</th>*/
/* 		           				<th scope="row">{{ article.title }}</th>*/
/* 		           				<th scope="row">{{ article.body }}</th>*/
/* 		           				<th scope="row">{{ article.createdBy }}</th>*/
/* 		           			</tr>*/
/* 		           			{% endfor %}*/
/* 		           		</tbody>*/
/* 		           </table>*/
/* 		        </div>*/
/* 	          	<div class="col-md-3"></div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
