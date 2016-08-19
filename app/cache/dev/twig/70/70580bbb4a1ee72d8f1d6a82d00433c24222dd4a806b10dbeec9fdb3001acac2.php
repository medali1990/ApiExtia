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
        $__internal_44a9fa9c07cfeb50148b01d37936eb22340a549d8df8f68a23c05913f78e8a67 = $this->env->getExtension("native_profiler");
        $__internal_44a9fa9c07cfeb50148b01d37936eb22340a549d8df8f68a23c05913f78e8a67->enter($__internal_44a9fa9c07cfeb50148b01d37936eb22340a549d8df8f68a23c05913f78e8a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a9fa9c07cfeb50148b01d37936eb22340a549d8df8f68a23c05913f78e8a67->leave($__internal_44a9fa9c07cfeb50148b01d37936eb22340a549d8df8f68a23c05913f78e8a67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f48076c7402a643c614154411d15d026b08dacb402883ac3ae2df652f05040e4 = $this->env->getExtension("native_profiler");
        $__internal_f48076c7402a643c614154411d15d026b08dacb402883ac3ae2df652f05040e4->enter($__internal_f48076c7402a643c614154411d15d026b08dacb402883ac3ae2df652f05040e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_f48076c7402a643c614154411d15d026b08dacb402883ac3ae2df652f05040e4->leave($__internal_f48076c7402a643c614154411d15d026b08dacb402883ac3ae2df652f05040e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c5197755f762c78aca4d275311b6bdaa71fc55587f042faf740acb62ea68461 = $this->env->getExtension("native_profiler");
        $__internal_6c5197755f762c78aca4d275311b6bdaa71fc55587f042faf740acb62ea68461->enter($__internal_6c5197755f762c78aca4d275311b6bdaa71fc55587f042faf740acb62ea68461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_6c5197755f762c78aca4d275311b6bdaa71fc55587f042faf740acb62ea68461->leave($__internal_6c5197755f762c78aca4d275311b6bdaa71fc55587f042faf740acb62ea68461_prof);

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
