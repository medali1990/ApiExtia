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
        $__internal_deda56cdd28da177b38f917ca9dd5b66f21431da29ff2d40a852c769e1fb43fe = $this->env->getExtension("native_profiler");
        $__internal_deda56cdd28da177b38f917ca9dd5b66f21431da29ff2d40a852c769e1fb43fe->enter($__internal_deda56cdd28da177b38f917ca9dd5b66f21431da29ff2d40a852c769e1fb43fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deda56cdd28da177b38f917ca9dd5b66f21431da29ff2d40a852c769e1fb43fe->leave($__internal_deda56cdd28da177b38f917ca9dd5b66f21431da29ff2d40a852c769e1fb43fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d256753cd19975abf60ca8b1a5a7998c73245285cc09ae3aed7a6e12ee176216 = $this->env->getExtension("native_profiler");
        $__internal_d256753cd19975abf60ca8b1a5a7998c73245285cc09ae3aed7a6e12ee176216->enter($__internal_d256753cd19975abf60ca8b1a5a7998c73245285cc09ae3aed7a6e12ee176216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Liste articles-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d256753cd19975abf60ca8b1a5a7998c73245285cc09ae3aed7a6e12ee176216->leave($__internal_d256753cd19975abf60ca8b1a5a7998c73245285cc09ae3aed7a6e12ee176216_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_e318c370c1a0140fe9820f4e118a5c0439fe35aada8069bac43526021274de3b = $this->env->getExtension("native_profiler");
        $__internal_e318c370c1a0140fe9820f4e118a5c0439fe35aada8069bac43526021274de3b->enter($__internal_e318c370c1a0140fe9820f4e118a5c0439fe35aada8069bac43526021274de3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

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
            echo "\">Details</a><a class=\"btn btn-danger col-lg-6 col-md-5 col-sm-4 col-xs-4\" style=\"margin-left:5px;\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" onclick=\"\"supprimer(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo ");\"\">Supprimer</a></th>
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
        
        $__internal_e318c370c1a0140fe9820f4e118a5c0439fe35aada8069bac43526021274de3b->leave($__internal_e318c370c1a0140fe9820f4e118a5c0439fe35aada8069bac43526021274de3b_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8dd975c1e091d4f8231074345a9990db72fd0d239f2b3792ff462f3576d49394 = $this->env->getExtension("native_profiler");
        $__internal_8dd975c1e091d4f8231074345a9990db72fd0d239f2b3792ff462f3576d49394->enter($__internal_8dd975c1e091d4f8231074345a9990db72fd0d239f2b3792ff462f3576d49394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "\t<script type=\"text/javascript\">
\tfunction supprimer(supid){
\t\$(function(){
\t\$(\"#sup_\"+supid+\"\").click(function(){
\t\t\$.ajax({
\t\ttype:'GET',
\t\turl:'http://localhost:8080/Extia/web/app_dev.php/supprimer'+supid,
\t\ttimeout: 3000,
\t\tsuccess: function(){
\t\tconsole.log(\"article supprimé\")},
\t\terror:function(){
\t\talert('article nest pas supprimer');
\t\t}
\t});
});
});
}
</script>
";
        
        $__internal_8dd975c1e091d4f8231074345a9990db72fd0d239f2b3792ff462f3576d49394->leave($__internal_8dd975c1e091d4f8231074345a9990db72fd0d239f2b3792ff462f3576d49394_prof);

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
        return array (  134 => 44,  128 => 43,  113 => 34,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  81 => 26,  77 => 25,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/* 		           				<th scope="row" class="inline col-lg-4 col-md-4 col-sm-4 col-xs-4"><a class="btn btn-primary col-lg-5 col-md-5 col-sm-5 col-xs-5" href="{{ path('Article', {'id':article.id}) }}">Details</a><a class="btn btn-danger col-lg-6 col-md-5 col-sm-4 col-xs-4" style="margin-left:5px;" id="{{ article.id }}" onclick=""supprimer({{ article.id }});"">Supprimer</a></th>*/
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
/* 	<script type="text/javascript">*/
/* 	function supprimer(supid){*/
/* 	$(function(){*/
/* 	$("#sup_"+supid+"").click(function(){*/
/* 		$.ajax({*/
/* 		type:'GET',*/
/* 		url:'http://localhost:8080/Extia/web/app_dev.php/supprimer'+supid,*/
/* 		timeout: 3000,*/
/* 		success: function(){*/
/* 		console.log("article supprimé")},*/
/* 		error:function(){*/
/* 		alert('article nest pas supprimer');*/
/* 		}*/
/* 	});*/
/* });*/
/* });*/
/* }*/
/* </script>*/
/* {% endblock %}*/
