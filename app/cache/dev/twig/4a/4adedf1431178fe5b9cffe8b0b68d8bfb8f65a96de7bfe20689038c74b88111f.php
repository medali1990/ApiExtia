<?php

/* ArticleBundle:Article:deletArticle.html.twig */
class __TwigTemplate_c1d2a8fb6f4e48f856ad11e6069ea9dac0cfec1479b9174ebb77f8e7787f53c4 extends Twig_Template
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
        $__internal_c64684afa52b22252ad683e0ef8ab765546a316aa41e201bf1ee9a6183b6d9bc = $this->env->getExtension("native_profiler");
        $__internal_c64684afa52b22252ad683e0ef8ab765546a316aa41e201bf1ee9a6183b6d9bc->enter($__internal_c64684afa52b22252ad683e0ef8ab765546a316aa41e201bf1ee9a6183b6d9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c64684afa52b22252ad683e0ef8ab765546a316aa41e201bf1ee9a6183b6d9bc->leave($__internal_c64684afa52b22252ad683e0ef8ab765546a316aa41e201bf1ee9a6183b6d9bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9221e579ee486a10dba58fdc0668bf71b65bd84641eeead8f569b978cd78d545 = $this->env->getExtension("native_profiler");
        $__internal_9221e579ee486a10dba58fdc0668bf71b65bd84641eeead8f569b978cd78d545->enter($__internal_9221e579ee486a10dba58fdc0668bf71b65bd84641eeead8f569b978cd78d545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_9221e579ee486a10dba58fdc0668bf71b65bd84641eeead8f569b978cd78d545->leave($__internal_9221e579ee486a10dba58fdc0668bf71b65bd84641eeead8f569b978cd78d545_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0013dd5fbed8a184a81496ff6476ec2ae99c17b90a9500d73c1999aabd6cc232 = $this->env->getExtension("native_profiler");
        $__internal_0013dd5fbed8a184a81496ff6476ec2ae99c17b90a9500d73c1999aabd6cc232->enter($__internal_0013dd5fbed8a184a81496ff6476ec2ae99c17b90a9500d73c1999aabd6cc232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_0013dd5fbed8a184a81496ff6476ec2ae99c17b90a9500d73c1999aabd6cc232->leave($__internal_0013dd5fbed8a184a81496ff6476ec2ae99c17b90a9500d73c1999aabd6cc232_prof);

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
