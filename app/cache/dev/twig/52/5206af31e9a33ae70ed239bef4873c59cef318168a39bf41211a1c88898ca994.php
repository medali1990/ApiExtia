<?php

/* ArticleBundle:Article:postArticle.html.twig */
class __TwigTemplate_ead7eba8f95075eea8ca85d43edd980711b8e1fbc8f38f9a8e9cbc5120890037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:postArticle.html.twig", 1);
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
        $__internal_7a19752f25bc0f7518e102e9ba6b2b9f49bb395f62f6ef0b672e575c4a9b7a62 = $this->env->getExtension("native_profiler");
        $__internal_7a19752f25bc0f7518e102e9ba6b2b9f49bb395f62f6ef0b672e575c4a9b7a62->enter($__internal_7a19752f25bc0f7518e102e9ba6b2b9f49bb395f62f6ef0b672e575c4a9b7a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a19752f25bc0f7518e102e9ba6b2b9f49bb395f62f6ef0b672e575c4a9b7a62->leave($__internal_7a19752f25bc0f7518e102e9ba6b2b9f49bb395f62f6ef0b672e575c4a9b7a62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a20be41008fe27866530e7ac97219d694c7ad6bdcc8d030c6073d6e06e8c1cb = $this->env->getExtension("native_profiler");
        $__internal_6a20be41008fe27866530e7ac97219d694c7ad6bdcc8d030c6073d6e06e8c1cb->enter($__internal_6a20be41008fe27866530e7ac97219d694c7ad6bdcc8d030c6073d6e06e8c1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_6a20be41008fe27866530e7ac97219d694c7ad6bdcc8d030c6073d6e06e8c1cb->leave($__internal_6a20be41008fe27866530e7ac97219d694c7ad6bdcc8d030c6073d6e06e8c1cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb5c8fed4b0fa2774d9fc2d7fa61b96901f47f5d45a8e414afe19186e654acca = $this->env->getExtension("native_profiler");
        $__internal_fb5c8fed4b0fa2774d9fc2d7fa61b96901f47f5d45a8e414afe19186e654acca->enter($__internal_fb5c8fed4b0fa2774d9fc2d7fa61b96901f47f5d45a8e414afe19186e654acca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_fb5c8fed4b0fa2774d9fc2d7fa61b96901f47f5d45a8e414afe19186e654acca->leave($__internal_fb5c8fed4b0fa2774d9fc2d7fa61b96901f47f5d45a8e414afe19186e654acca_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:postArticle.html.twig";
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
/* {% block title %}ArticleBundle:Article:postArticle{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:postArticle page</h1>*/
/* {% endblock %}*/
/* */
