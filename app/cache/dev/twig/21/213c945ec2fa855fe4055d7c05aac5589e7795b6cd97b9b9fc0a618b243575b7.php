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
        $__internal_9b1ba11f7f96a3028764488f0002974f63c1372854199fe14869d53240a07169 = $this->env->getExtension("native_profiler");
        $__internal_9b1ba11f7f96a3028764488f0002974f63c1372854199fe14869d53240a07169->enter($__internal_9b1ba11f7f96a3028764488f0002974f63c1372854199fe14869d53240a07169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b1ba11f7f96a3028764488f0002974f63c1372854199fe14869d53240a07169->leave($__internal_9b1ba11f7f96a3028764488f0002974f63c1372854199fe14869d53240a07169_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71105953cc4e7daf6f96cdd041d6d85d849130bf37761d43431a73e24d6ff1f0 = $this->env->getExtension("native_profiler");
        $__internal_71105953cc4e7daf6f96cdd041d6d85d849130bf37761d43431a73e24d6ff1f0->enter($__internal_71105953cc4e7daf6f96cdd041d6d85d849130bf37761d43431a73e24d6ff1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_71105953cc4e7daf6f96cdd041d6d85d849130bf37761d43431a73e24d6ff1f0->leave($__internal_71105953cc4e7daf6f96cdd041d6d85d849130bf37761d43431a73e24d6ff1f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eef637f6852e9dcbf517f72098c834fda8531ebcb2aef695cb3f7389117b2efb = $this->env->getExtension("native_profiler");
        $__internal_eef637f6852e9dcbf517f72098c834fda8531ebcb2aef695cb3f7389117b2efb->enter($__internal_eef637f6852e9dcbf517f72098c834fda8531ebcb2aef695cb3f7389117b2efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_eef637f6852e9dcbf517f72098c834fda8531ebcb2aef695cb3f7389117b2efb->leave($__internal_eef637f6852e9dcbf517f72098c834fda8531ebcb2aef695cb3f7389117b2efb_prof);

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
