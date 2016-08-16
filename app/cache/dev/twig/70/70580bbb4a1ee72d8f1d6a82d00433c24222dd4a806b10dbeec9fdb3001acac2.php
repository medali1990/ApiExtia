<?php

/* ArticleBundle:Article:deletArticle.html.twig */
class __TwigTemplate_4fc59290d65551a1189cefd22e794543bf2f8fcab90e339638e9fb3fd16e41e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:deletArticle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2116111d594efc259e23d47fdca73b2a2f1e46d8fa787ed1091f49180196fc1e = $this->env->getExtension("native_profiler");
        $__internal_2116111d594efc259e23d47fdca73b2a2f1e46d8fa787ed1091f49180196fc1e->enter($__internal_2116111d594efc259e23d47fdca73b2a2f1e46d8fa787ed1091f49180196fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2116111d594efc259e23d47fdca73b2a2f1e46d8fa787ed1091f49180196fc1e->leave($__internal_2116111d594efc259e23d47fdca73b2a2f1e46d8fa787ed1091f49180196fc1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_213719801a298d2066946af78ac3746fba3b154c7ebf30bec992b2a3174adcf4 = $this->env->getExtension("native_profiler");
        $__internal_213719801a298d2066946af78ac3746fba3b154c7ebf30bec992b2a3174adcf4->enter($__internal_213719801a298d2066946af78ac3746fba3b154c7ebf30bec992b2a3174adcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_213719801a298d2066946af78ac3746fba3b154c7ebf30bec992b2a3174adcf4->leave($__internal_213719801a298d2066946af78ac3746fba3b154c7ebf30bec992b2a3174adcf4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae090985338e162aef6295a2728b17c92b4cd881e4f9302f750b97d00e13b1cf = $this->env->getExtension("native_profiler");
        $__internal_ae090985338e162aef6295a2728b17c92b4cd881e4f9302f750b97d00e13b1cf->enter($__internal_ae090985338e162aef6295a2728b17c92b4cd881e4f9302f750b97d00e13b1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_ae090985338e162aef6295a2728b17c92b4cd881e4f9302f750b97d00e13b1cf->leave($__internal_ae090985338e162aef6295a2728b17c92b4cd881e4f9302f750b97d00e13b1cf_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:deletArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ArticleBundle:Article:deletArticle{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:deletArticle page</h1>*/
/* {% endblock %}*/
/* */
