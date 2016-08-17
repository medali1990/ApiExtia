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
        $__internal_b050fcea5921866f9a644306d12740a66dcbcec71be601fef2801d593382e510 = $this->env->getExtension("native_profiler");
        $__internal_b050fcea5921866f9a644306d12740a66dcbcec71be601fef2801d593382e510->enter($__internal_b050fcea5921866f9a644306d12740a66dcbcec71be601fef2801d593382e510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b050fcea5921866f9a644306d12740a66dcbcec71be601fef2801d593382e510->leave($__internal_b050fcea5921866f9a644306d12740a66dcbcec71be601fef2801d593382e510_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aad8d53ca5b9555fab445c0dc355e158695fba7c314175ed9837c00add2ab87b = $this->env->getExtension("native_profiler");
        $__internal_aad8d53ca5b9555fab445c0dc355e158695fba7c314175ed9837c00add2ab87b->enter($__internal_aad8d53ca5b9555fab445c0dc355e158695fba7c314175ed9837c00add2ab87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Details article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aad8d53ca5b9555fab445c0dc355e158695fba7c314175ed9837c00add2ab87b->leave($__internal_aad8d53ca5b9555fab445c0dc355e158695fba7c314175ed9837c00add2ab87b_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_5698d8f1d9b0a6e62f2eb035bafbf65ef684075f3ea772d67b4ae1f06887015a = $this->env->getExtension("native_profiler");
        $__internal_5698d8f1d9b0a6e62f2eb035bafbf65ef684075f3ea772d67b4ae1f06887015a->enter($__internal_5698d8f1d9b0a6e62f2eb035bafbf65ef684075f3ea772d67b4ae1f06887015a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
  <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>titre de l'article </h1>

        </div>
    </div>

";
        
        $__internal_5698d8f1d9b0a6e62f2eb035bafbf65ef684075f3ea772d67b4ae1f06887015a->leave($__internal_5698d8f1d9b0a6e62f2eb035bafbf65ef684075f3ea772d67b4ae1f06887015a_prof);

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
