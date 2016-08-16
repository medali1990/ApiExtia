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
        $__internal_524c508d5f151166c276372596af0fabb08034dac8b7e4c3ad8f353e18ba83db = $this->env->getExtension("native_profiler");
        $__internal_524c508d5f151166c276372596af0fabb08034dac8b7e4c3ad8f353e18ba83db->enter($__internal_524c508d5f151166c276372596af0fabb08034dac8b7e4c3ad8f353e18ba83db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524c508d5f151166c276372596af0fabb08034dac8b7e4c3ad8f353e18ba83db->leave($__internal_524c508d5f151166c276372596af0fabb08034dac8b7e4c3ad8f353e18ba83db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_baf84b20ca1d058a9a730e6c3273fe3dff50329c63503d022d47258610ddb931 = $this->env->getExtension("native_profiler");
        $__internal_baf84b20ca1d058a9a730e6c3273fe3dff50329c63503d022d47258610ddb931->enter($__internal_baf84b20ca1d058a9a730e6c3273fe3dff50329c63503d022d47258610ddb931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_baf84b20ca1d058a9a730e6c3273fe3dff50329c63503d022d47258610ddb931->leave($__internal_baf84b20ca1d058a9a730e6c3273fe3dff50329c63503d022d47258610ddb931_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a218af57c089388d8a2f010310e00152a5b38f53a5078479c153968a227b37e = $this->env->getExtension("native_profiler");
        $__internal_8a218af57c089388d8a2f010310e00152a5b38f53a5078479c153968a227b37e->enter($__internal_8a218af57c089388d8a2f010310e00152a5b38f53a5078479c153968a227b37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_8a218af57c089388d8a2f010310e00152a5b38f53a5078479c153968a227b37e->leave($__internal_8a218af57c089388d8a2f010310e00152a5b38f53a5078479c153968a227b37e_prof);

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
