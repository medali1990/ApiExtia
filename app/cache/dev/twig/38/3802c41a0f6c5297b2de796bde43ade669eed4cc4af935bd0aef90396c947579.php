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
        $__internal_6a6569b18a1c266a7c3d52eed0aab733a930103a098699360310fded1ff81ebf = $this->env->getExtension("native_profiler");
        $__internal_6a6569b18a1c266a7c3d52eed0aab733a930103a098699360310fded1ff81ebf->enter($__internal_6a6569b18a1c266a7c3d52eed0aab733a930103a098699360310fded1ff81ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a6569b18a1c266a7c3d52eed0aab733a930103a098699360310fded1ff81ebf->leave($__internal_6a6569b18a1c266a7c3d52eed0aab733a930103a098699360310fded1ff81ebf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbeeed28c448e843eaf0299d9c1bdefb0672f433e84a4e906ddfe9ab16b1d84e = $this->env->getExtension("native_profiler");
        $__internal_fbeeed28c448e843eaf0299d9c1bdefb0672f433e84a4e906ddfe9ab16b1d84e->enter($__internal_fbeeed28c448e843eaf0299d9c1bdefb0672f433e84a4e906ddfe9ab16b1d84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Creation article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_fbeeed28c448e843eaf0299d9c1bdefb0672f433e84a4e906ddfe9ab16b1d84e->leave($__internal_fbeeed28c448e843eaf0299d9c1bdefb0672f433e84a4e906ddfe9ab16b1d84e_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_fae00541cd3f348f155f0aac2672048b65a3d7ff0cc7f275064b61bf61bead9c = $this->env->getExtension("native_profiler");
        $__internal_fae00541cd3f348f155f0aac2672048b65a3d7ff0cc7f275064b61bf61bead9c->enter($__internal_fae00541cd3f348f155f0aac2672048b65a3d7ff0cc7f275064b61bf61bead9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
\t<div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>Creer un article - version_1.1</h1>

\t\t\t<div class=\"well\">
\t\t\t  ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t\t\t</div>

        </div>
    </div>
  

";
        
        $__internal_fae00541cd3f348f155f0aac2672048b65a3d7ff0cc7f275064b61bf61bead9c->leave($__internal_fae00541cd3f348f155f0aac2672048b65a3d7ff0cc7f275064b61bf61bead9c_prof);

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
/*   Creation article-{{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block article_body %}*/
/* */
/* 	<div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1>Creer un article - version_1.1</h1>*/
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
