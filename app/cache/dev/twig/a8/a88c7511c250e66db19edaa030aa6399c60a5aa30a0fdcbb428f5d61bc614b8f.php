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
        $__internal_be1e3dbbc7fb8b822e77467d015c83cb16d1d3f86c0f92a51d458880a61963d5 = $this->env->getExtension("native_profiler");
        $__internal_be1e3dbbc7fb8b822e77467d015c83cb16d1d3f86c0f92a51d458880a61963d5->enter($__internal_be1e3dbbc7fb8b822e77467d015c83cb16d1d3f86c0f92a51d458880a61963d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be1e3dbbc7fb8b822e77467d015c83cb16d1d3f86c0f92a51d458880a61963d5->leave($__internal_be1e3dbbc7fb8b822e77467d015c83cb16d1d3f86c0f92a51d458880a61963d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01697f8f36c24cd536b4a0230d9b1be1bbf90a3352bf2c7d79d77275a74c64a6 = $this->env->getExtension("native_profiler");
        $__internal_01697f8f36c24cd536b4a0230d9b1be1bbf90a3352bf2c7d79d77275a74c64a6->enter($__internal_01697f8f36c24cd536b4a0230d9b1be1bbf90a3352bf2c7d79d77275a74c64a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Details article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_01697f8f36c24cd536b4a0230d9b1be1bbf90a3352bf2c7d79d77275a74c64a6->leave($__internal_01697f8f36c24cd536b4a0230d9b1be1bbf90a3352bf2c7d79d77275a74c64a6_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_bcec9bda435dc52a6d7971da98122f510a3160111472641476dcdf00f523def9 = $this->env->getExtension("native_profiler");
        $__internal_bcec9bda435dc52a6d7971da98122f510a3160111472641476dcdf00f523def9->enter($__internal_bcec9bda435dc52a6d7971da98122f510a3160111472641476dcdf00f523def9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
  <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>titre de l'article </h1>

        </div>
    </div>

";
        
        $__internal_bcec9bda435dc52a6d7971da98122f510a3160111472641476dcdf00f523def9->leave($__internal_bcec9bda435dc52a6d7971da98122f510a3160111472641476dcdf00f523def9_prof);

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
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*   <div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1>titre de l'article </h1>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
