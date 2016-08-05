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
        $__internal_81973cc2b936e61b3ff1c7687218929f71da0552cc65a011d930c7ee456191c1 = $this->env->getExtension("native_profiler");
        $__internal_81973cc2b936e61b3ff1c7687218929f71da0552cc65a011d930c7ee456191c1->enter($__internal_81973cc2b936e61b3ff1c7687218929f71da0552cc65a011d930c7ee456191c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81973cc2b936e61b3ff1c7687218929f71da0552cc65a011d930c7ee456191c1->leave($__internal_81973cc2b936e61b3ff1c7687218929f71da0552cc65a011d930c7ee456191c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdd7b0375017ce21ecfbba6e080dbd4f5a98757eeece1e2546f645d41292e72c = $this->env->getExtension("native_profiler");
        $__internal_bdd7b0375017ce21ecfbba6e080dbd4f5a98757eeece1e2546f645d41292e72c->enter($__internal_bdd7b0375017ce21ecfbba6e080dbd4f5a98757eeece1e2546f645d41292e72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_bdd7b0375017ce21ecfbba6e080dbd4f5a98757eeece1e2546f645d41292e72c->leave($__internal_bdd7b0375017ce21ecfbba6e080dbd4f5a98757eeece1e2546f645d41292e72c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1844d0898aeed790f6841fd4c9e1658d41512d61459d266766b057e7582a9f9e = $this->env->getExtension("native_profiler");
        $__internal_1844d0898aeed790f6841fd4c9e1658d41512d61459d266766b057e7582a9f9e->enter($__internal_1844d0898aeed790f6841fd4c9e1658d41512d61459d266766b057e7582a9f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_1844d0898aeed790f6841fd4c9e1658d41512d61459d266766b057e7582a9f9e->leave($__internal_1844d0898aeed790f6841fd4c9e1658d41512d61459d266766b057e7582a9f9e_prof);

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
