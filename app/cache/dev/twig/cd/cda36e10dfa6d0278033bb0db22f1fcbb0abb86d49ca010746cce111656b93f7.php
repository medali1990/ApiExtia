<?php

/* ArticleBundle:Article:getArticle.html.twig */
class __TwigTemplate_bca9d4b44dabb63d12a449e0c33f9f6f630e26d119f53c8ef98078300401837f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:getArticle.html.twig", 1);
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
        $__internal_ba7335243b389088256addfa1acdaf96acaf753e77e3e4bd4530ad866d0f1042 = $this->env->getExtension("native_profiler");
        $__internal_ba7335243b389088256addfa1acdaf96acaf753e77e3e4bd4530ad866d0f1042->enter($__internal_ba7335243b389088256addfa1acdaf96acaf753e77e3e4bd4530ad866d0f1042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba7335243b389088256addfa1acdaf96acaf753e77e3e4bd4530ad866d0f1042->leave($__internal_ba7335243b389088256addfa1acdaf96acaf753e77e3e4bd4530ad866d0f1042_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5effb8aa98442a9f4c2cb992cb8d40798911401115fff9ac70d08c384fd6871 = $this->env->getExtension("native_profiler");
        $__internal_c5effb8aa98442a9f4c2cb992cb8d40798911401115fff9ac70d08c384fd6871->enter($__internal_c5effb8aa98442a9f4c2cb992cb8d40798911401115fff9ac70d08c384fd6871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_c5effb8aa98442a9f4c2cb992cb8d40798911401115fff9ac70d08c384fd6871->leave($__internal_c5effb8aa98442a9f4c2cb992cb8d40798911401115fff9ac70d08c384fd6871_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65a2bc761313050ba881c174c140a3c740362dceebc7e719d3ef01ba50c60e2d = $this->env->getExtension("native_profiler");
        $__internal_65a2bc761313050ba881c174c140a3c740362dceebc7e719d3ef01ba50c60e2d->enter($__internal_65a2bc761313050ba881c174c140a3c740362dceebc7e719d3ef01ba50c60e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_65a2bc761313050ba881c174c140a3c740362dceebc7e719d3ef01ba50c60e2d->leave($__internal_65a2bc761313050ba881c174c140a3c740362dceebc7e719d3ef01ba50c60e2d_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:getArticle.html.twig";
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
/* {% block title %}ArticleBundle:Article:getArticle{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:getArticle page</h1>*/
/* {% endblock %}*/
/* */
