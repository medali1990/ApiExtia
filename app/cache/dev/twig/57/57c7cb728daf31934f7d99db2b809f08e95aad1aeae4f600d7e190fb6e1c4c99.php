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
        $__internal_241728db6dfaefdc8e0a4c3cba83f506851e5236454d2b619d00096eb63d78b7 = $this->env->getExtension("native_profiler");
        $__internal_241728db6dfaefdc8e0a4c3cba83f506851e5236454d2b619d00096eb63d78b7->enter($__internal_241728db6dfaefdc8e0a4c3cba83f506851e5236454d2b619d00096eb63d78b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_241728db6dfaefdc8e0a4c3cba83f506851e5236454d2b619d00096eb63d78b7->leave($__internal_241728db6dfaefdc8e0a4c3cba83f506851e5236454d2b619d00096eb63d78b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32ec2922b6d1cfa1334997bb904a031d034d3228e4a7522a5b36633a8fb843a1 = $this->env->getExtension("native_profiler");
        $__internal_32ec2922b6d1cfa1334997bb904a031d034d3228e4a7522a5b36633a8fb843a1->enter($__internal_32ec2922b6d1cfa1334997bb904a031d034d3228e4a7522a5b36633a8fb843a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_32ec2922b6d1cfa1334997bb904a031d034d3228e4a7522a5b36633a8fb843a1->leave($__internal_32ec2922b6d1cfa1334997bb904a031d034d3228e4a7522a5b36633a8fb843a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2122642fa277458a5a74fa1004e150a4a424bcf5a66b5e23e6d26a38f55a5a7 = $this->env->getExtension("native_profiler");
        $__internal_a2122642fa277458a5a74fa1004e150a4a424bcf5a66b5e23e6d26a38f55a5a7->enter($__internal_a2122642fa277458a5a74fa1004e150a4a424bcf5a66b5e23e6d26a38f55a5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a2122642fa277458a5a74fa1004e150a4a424bcf5a66b5e23e6d26a38f55a5a7->leave($__internal_a2122642fa277458a5a74fa1004e150a4a424bcf5a66b5e23e6d26a38f55a5a7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeacd386071f90929ed911ebc659fb8b21dd0af3d1b78b15eb0690ad1db845a6 = $this->env->getExtension("native_profiler");
        $__internal_eeacd386071f90929ed911ebc659fb8b21dd0af3d1b78b15eb0690ad1db845a6->enter($__internal_eeacd386071f90929ed911ebc659fb8b21dd0af3d1b78b15eb0690ad1db845a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eeacd386071f90929ed911ebc659fb8b21dd0af3d1b78b15eb0690ad1db845a6->leave($__internal_eeacd386071f90929ed911ebc659fb8b21dd0af3d1b78b15eb0690ad1db845a6_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ed3225fb43854b69979683607633224ea85d4383fead0e6aee4af96d77670c7 = $this->env->getExtension("native_profiler");
        $__internal_7ed3225fb43854b69979683607633224ea85d4383fead0e6aee4af96d77670c7->enter($__internal_7ed3225fb43854b69979683607633224ea85d4383fead0e6aee4af96d77670c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7ed3225fb43854b69979683607633224ea85d4383fead0e6aee4af96d77670c7->leave($__internal_7ed3225fb43854b69979683607633224ea85d4383fead0e6aee4af96d77670c7_prof);

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
