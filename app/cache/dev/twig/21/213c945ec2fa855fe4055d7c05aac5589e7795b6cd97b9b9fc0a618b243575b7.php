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
        $__internal_083cb32011f3cf34511840c78dc87bc324de11f3229ccf729926d6c75e6ba550 = $this->env->getExtension("native_profiler");
        $__internal_083cb32011f3cf34511840c78dc87bc324de11f3229ccf729926d6c75e6ba550->enter($__internal_083cb32011f3cf34511840c78dc87bc324de11f3229ccf729926d6c75e6ba550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_083cb32011f3cf34511840c78dc87bc324de11f3229ccf729926d6c75e6ba550->leave($__internal_083cb32011f3cf34511840c78dc87bc324de11f3229ccf729926d6c75e6ba550_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_048cabc7ad5f9798124dcb293fbe8e45dbe3585b993e67bb4bb5aa70d4cf30ae = $this->env->getExtension("native_profiler");
        $__internal_048cabc7ad5f9798124dcb293fbe8e45dbe3585b993e67bb4bb5aa70d4cf30ae->enter($__internal_048cabc7ad5f9798124dcb293fbe8e45dbe3585b993e67bb4bb5aa70d4cf30ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_048cabc7ad5f9798124dcb293fbe8e45dbe3585b993e67bb4bb5aa70d4cf30ae->leave($__internal_048cabc7ad5f9798124dcb293fbe8e45dbe3585b993e67bb4bb5aa70d4cf30ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_33927ee70e9beb1bcff965162a384754281b8fbcb0b41f6622e000a4f1f36848 = $this->env->getExtension("native_profiler");
        $__internal_33927ee70e9beb1bcff965162a384754281b8fbcb0b41f6622e000a4f1f36848->enter($__internal_33927ee70e9beb1bcff965162a384754281b8fbcb0b41f6622e000a4f1f36848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_33927ee70e9beb1bcff965162a384754281b8fbcb0b41f6622e000a4f1f36848->leave($__internal_33927ee70e9beb1bcff965162a384754281b8fbcb0b41f6622e000a4f1f36848_prof);

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
