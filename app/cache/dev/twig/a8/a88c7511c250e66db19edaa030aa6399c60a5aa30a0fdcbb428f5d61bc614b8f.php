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
        $__internal_2616eb840fd3589c008b0f3206d36d398a083994ed7504f858f4b516545b9722 = $this->env->getExtension("native_profiler");
        $__internal_2616eb840fd3589c008b0f3206d36d398a083994ed7504f858f4b516545b9722->enter($__internal_2616eb840fd3589c008b0f3206d36d398a083994ed7504f858f4b516545b9722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2616eb840fd3589c008b0f3206d36d398a083994ed7504f858f4b516545b9722->leave($__internal_2616eb840fd3589c008b0f3206d36d398a083994ed7504f858f4b516545b9722_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_491c3f0223484680fa34aff911f1908bd4292b29ce1ab63ed71f2bf1c202ca06 = $this->env->getExtension("native_profiler");
        $__internal_491c3f0223484680fa34aff911f1908bd4292b29ce1ab63ed71f2bf1c202ca06->enter($__internal_491c3f0223484680fa34aff911f1908bd4292b29ce1ab63ed71f2bf1c202ca06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Details article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_491c3f0223484680fa34aff911f1908bd4292b29ce1ab63ed71f2bf1c202ca06->leave($__internal_491c3f0223484680fa34aff911f1908bd4292b29ce1ab63ed71f2bf1c202ca06_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_29c54a86c0c0462ac2a166dd78598e897d5d8067fcc2c200b0d255072beaea33 = $this->env->getExtension("native_profiler");
        $__internal_29c54a86c0c0462ac2a166dd78598e897d5d8067fcc2c200b0d255072beaea33->enter($__internal_29c54a86c0c0462ac2a166dd78598e897d5d8067fcc2c200b0d255072beaea33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
  <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>titre de l'article </h1>

        </div>
    </div>

";
        
        $__internal_29c54a86c0c0462ac2a166dd78598e897d5d8067fcc2c200b0d255072beaea33->leave($__internal_29c54a86c0c0462ac2a166dd78598e897d5d8067fcc2c200b0d255072beaea33_prof);

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
