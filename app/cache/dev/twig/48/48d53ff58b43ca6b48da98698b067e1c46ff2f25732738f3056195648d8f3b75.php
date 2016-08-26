<?php

/* ArticleBundle:Article:getArticle.html.twig */
class __TwigTemplate_bccc7e87e8fe5eb65e507593c8f80b4ef94578269f6c94ee2996e2f9d39efff9 extends Twig_Template
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
        $__internal_aaf176658f74e6789fe562e5ead6f89148bfa764255b4b68fb759ab90cc61911 = $this->env->getExtension("native_profiler");
        $__internal_aaf176658f74e6789fe562e5ead6f89148bfa764255b4b68fb759ab90cc61911->enter($__internal_aaf176658f74e6789fe562e5ead6f89148bfa764255b4b68fb759ab90cc61911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf176658f74e6789fe562e5ead6f89148bfa764255b4b68fb759ab90cc61911->leave($__internal_aaf176658f74e6789fe562e5ead6f89148bfa764255b4b68fb759ab90cc61911_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14527ab758ef33296e33d56cf9e3bbed6ac9aba3cf8752477b24aa26954f86c9 = $this->env->getExtension("native_profiler");
        $__internal_14527ab758ef33296e33d56cf9e3bbed6ac9aba3cf8752477b24aa26954f86c9->enter($__internal_14527ab758ef33296e33d56cf9e3bbed6ac9aba3cf8752477b24aa26954f86c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_14527ab758ef33296e33d56cf9e3bbed6ac9aba3cf8752477b24aa26954f86c9->leave($__internal_14527ab758ef33296e33d56cf9e3bbed6ac9aba3cf8752477b24aa26954f86c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b273a4e893a0b9edeab317f7363a6b467a401d956d8e3770e32e0c297d23a710 = $this->env->getExtension("native_profiler");
        $__internal_b273a4e893a0b9edeab317f7363a6b467a401d956d8e3770e32e0c297d23a710->enter($__internal_b273a4e893a0b9edeab317f7363a6b467a401d956d8e3770e32e0c297d23a710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_b273a4e893a0b9edeab317f7363a6b467a401d956d8e3770e32e0c297d23a710->leave($__internal_b273a4e893a0b9edeab317f7363a6b467a401d956d8e3770e32e0c297d23a710_prof);

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
