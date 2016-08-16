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
        $__internal_ba310a9b4e9b2e393a0541bc95e1a0ffed9061a77d8f84b6f157142d474f2add = $this->env->getExtension("native_profiler");
        $__internal_ba310a9b4e9b2e393a0541bc95e1a0ffed9061a77d8f84b6f157142d474f2add->enter($__internal_ba310a9b4e9b2e393a0541bc95e1a0ffed9061a77d8f84b6f157142d474f2add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba310a9b4e9b2e393a0541bc95e1a0ffed9061a77d8f84b6f157142d474f2add->leave($__internal_ba310a9b4e9b2e393a0541bc95e1a0ffed9061a77d8f84b6f157142d474f2add_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2564529e05ca619fb36c281aa4d01e49ed827b23e3010ee1d4d07121308432b3 = $this->env->getExtension("native_profiler");
        $__internal_2564529e05ca619fb36c281aa4d01e49ed827b23e3010ee1d4d07121308432b3->enter($__internal_2564529e05ca619fb36c281aa4d01e49ed827b23e3010ee1d4d07121308432b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_2564529e05ca619fb36c281aa4d01e49ed827b23e3010ee1d4d07121308432b3->leave($__internal_2564529e05ca619fb36c281aa4d01e49ed827b23e3010ee1d4d07121308432b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2a63a39d8823894ac55693482d9ac77cc73386f0c6b212d8c193c75a62fff9f = $this->env->getExtension("native_profiler");
        $__internal_a2a63a39d8823894ac55693482d9ac77cc73386f0c6b212d8c193c75a62fff9f->enter($__internal_a2a63a39d8823894ac55693482d9ac77cc73386f0c6b212d8c193c75a62fff9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_a2a63a39d8823894ac55693482d9ac77cc73386f0c6b212d8c193c75a62fff9f->leave($__internal_a2a63a39d8823894ac55693482d9ac77cc73386f0c6b212d8c193c75a62fff9f_prof);

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
