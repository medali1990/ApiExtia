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
        $__internal_59cc84f6984deaa33a85847b588fd7d50e3b14d09840af1abfa2f30cae727f53 = $this->env->getExtension("native_profiler");
        $__internal_59cc84f6984deaa33a85847b588fd7d50e3b14d09840af1abfa2f30cae727f53->enter($__internal_59cc84f6984deaa33a85847b588fd7d50e3b14d09840af1abfa2f30cae727f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59cc84f6984deaa33a85847b588fd7d50e3b14d09840af1abfa2f30cae727f53->leave($__internal_59cc84f6984deaa33a85847b588fd7d50e3b14d09840af1abfa2f30cae727f53_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce71976e8959f7e82120afbed0e6b62dd6e415cdd7b782de844c152d5145a7ce = $this->env->getExtension("native_profiler");
        $__internal_ce71976e8959f7e82120afbed0e6b62dd6e415cdd7b782de844c152d5145a7ce->enter($__internal_ce71976e8959f7e82120afbed0e6b62dd6e415cdd7b782de844c152d5145a7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_ce71976e8959f7e82120afbed0e6b62dd6e415cdd7b782de844c152d5145a7ce->leave($__internal_ce71976e8959f7e82120afbed0e6b62dd6e415cdd7b782de844c152d5145a7ce_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aa9888d5b500104165bbf677491fd83665b186bc9c68ed9b5e211e4b9cec5d5 = $this->env->getExtension("native_profiler");
        $__internal_6aa9888d5b500104165bbf677491fd83665b186bc9c68ed9b5e211e4b9cec5d5->enter($__internal_6aa9888d5b500104165bbf677491fd83665b186bc9c68ed9b5e211e4b9cec5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_6aa9888d5b500104165bbf677491fd83665b186bc9c68ed9b5e211e4b9cec5d5->leave($__internal_6aa9888d5b500104165bbf677491fd83665b186bc9c68ed9b5e211e4b9cec5d5_prof);

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
