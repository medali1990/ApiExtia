<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_06d8862067035aba99526a51413bbf9036d6ac10baec2f281a11c72f7a9d6a77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cac5a1a3977adc9123b5d9bffd3fc6152d67b19622819cf6e33ddf2cd298babf = $this->env->getExtension("native_profiler");
        $__internal_cac5a1a3977adc9123b5d9bffd3fc6152d67b19622819cf6e33ddf2cd298babf->enter($__internal_cac5a1a3977adc9123b5d9bffd3fc6152d67b19622819cf6e33ddf2cd298babf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac5a1a3977adc9123b5d9bffd3fc6152d67b19622819cf6e33ddf2cd298babf->leave($__internal_cac5a1a3977adc9123b5d9bffd3fc6152d67b19622819cf6e33ddf2cd298babf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfcb8dea77ee3f5f0aa82425d40c9044b61cc8cbb9bc4ecacf9e12e690aa3cbe = $this->env->getExtension("native_profiler");
        $__internal_dfcb8dea77ee3f5f0aa82425d40c9044b61cc8cbb9bc4ecacf9e12e690aa3cbe->enter($__internal_dfcb8dea77ee3f5f0aa82425d40c9044b61cc8cbb9bc4ecacf9e12e690aa3cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_dfcb8dea77ee3f5f0aa82425d40c9044b61cc8cbb9bc4ecacf9e12e690aa3cbe->leave($__internal_dfcb8dea77ee3f5f0aa82425d40c9044b61cc8cbb9bc4ecacf9e12e690aa3cbe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c42a6dd687c479dd9b21eb5dc7a439a902b9d8d7077c2285ee6a4c2b7ed97114 = $this->env->getExtension("native_profiler");
        $__internal_c42a6dd687c479dd9b21eb5dc7a439a902b9d8d7077c2285ee6a4c2b7ed97114->enter($__internal_c42a6dd687c479dd9b21eb5dc7a439a902b9d8d7077c2285ee6a4c2b7ed97114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c42a6dd687c479dd9b21eb5dc7a439a902b9d8d7077c2285ee6a4c2b7ed97114->leave($__internal_c42a6dd687c479dd9b21eb5dc7a439a902b9d8d7077c2285ee6a4c2b7ed97114_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f20db96e39de3f182c5af21652dff35069946aa8f5f21b1c0be1138f4367686 = $this->env->getExtension("native_profiler");
        $__internal_8f20db96e39de3f182c5af21652dff35069946aa8f5f21b1c0be1138f4367686->enter($__internal_8f20db96e39de3f182c5af21652dff35069946aa8f5f21b1c0be1138f4367686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_8f20db96e39de3f182c5af21652dff35069946aa8f5f21b1c0be1138f4367686->leave($__internal_8f20db96e39de3f182c5af21652dff35069946aa8f5f21b1c0be1138f4367686_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a98c72453098c37d89baa9f50b5a3c9f948bef9894b0608dbccb3f2f3a1e2a0 = $this->env->getExtension("native_profiler");
        $__internal_5a98c72453098c37d89baa9f50b5a3c9f948bef9894b0608dbccb3f2f3a1e2a0->enter($__internal_5a98c72453098c37d89baa9f50b5a3c9f948bef9894b0608dbccb3f2f3a1e2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5a98c72453098c37d89baa9f50b5a3c9f948bef9894b0608dbccb3f2f3a1e2a0->leave($__internal_5a98c72453098c37d89baa9f50b5a3c9f948bef9894b0608dbccb3f2f3a1e2a0_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
