<?php

/* ArticleBundle:Article:getArticles.html.twig */
class __TwigTemplate_783a87695d52dcd64c201b0cc4a9a7915396d11bb39e6a218f2bcc441e16fe6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:getArticles.html.twig", 1);
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
        $__internal_f59d614518603647b63ed8db799a5d2daa4b00f5238ac132256ef301060da732 = $this->env->getExtension("native_profiler");
        $__internal_f59d614518603647b63ed8db799a5d2daa4b00f5238ac132256ef301060da732->enter($__internal_f59d614518603647b63ed8db799a5d2daa4b00f5238ac132256ef301060da732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f59d614518603647b63ed8db799a5d2daa4b00f5238ac132256ef301060da732->leave($__internal_f59d614518603647b63ed8db799a5d2daa4b00f5238ac132256ef301060da732_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92eba964c973b1b9fac52cb3d8b51792106cae1d87264564fba98e88237e0572 = $this->env->getExtension("native_profiler");
        $__internal_92eba964c973b1b9fac52cb3d8b51792106cae1d87264564fba98e88237e0572->enter($__internal_92eba964c973b1b9fac52cb3d8b51792106cae1d87264564fba98e88237e0572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_92eba964c973b1b9fac52cb3d8b51792106cae1d87264564fba98e88237e0572->leave($__internal_92eba964c973b1b9fac52cb3d8b51792106cae1d87264564fba98e88237e0572_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_00c83914b359d6e2899c4ab7ead5425b7a5a6ed2bc8b5f5328944b1725578c79 = $this->env->getExtension("native_profiler");
        $__internal_00c83914b359d6e2899c4ab7ead5425b7a5a6ed2bc8b5f5328944b1725578c79->enter($__internal_00c83914b359d6e2899c4ab7ead5425b7a5a6ed2bc8b5f5328944b1725578c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_00c83914b359d6e2899c4ab7ead5425b7a5a6ed2bc8b5f5328944b1725578c79->leave($__internal_00c83914b359d6e2899c4ab7ead5425b7a5a6ed2bc8b5f5328944b1725578c79_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:getArticles.html.twig";
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
/* {% block title %}ArticleBundle:Article:getArticles{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:getArticles page</h1>*/
/* {% endblock %}*/
/* */
