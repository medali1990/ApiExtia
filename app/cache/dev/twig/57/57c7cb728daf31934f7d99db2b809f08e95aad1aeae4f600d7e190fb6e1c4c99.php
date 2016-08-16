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
        $__internal_d9efdf70452b8dbadba30252375f2c8465284b678ee3c95f312bb49c18a2484a = $this->env->getExtension("native_profiler");
        $__internal_d9efdf70452b8dbadba30252375f2c8465284b678ee3c95f312bb49c18a2484a->enter($__internal_d9efdf70452b8dbadba30252375f2c8465284b678ee3c95f312bb49c18a2484a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9efdf70452b8dbadba30252375f2c8465284b678ee3c95f312bb49c18a2484a->leave($__internal_d9efdf70452b8dbadba30252375f2c8465284b678ee3c95f312bb49c18a2484a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd1288f534fe174359fb1f3be9f9042ca44ea44f7be3e222f6d51dfb8f246641 = $this->env->getExtension("native_profiler");
        $__internal_dd1288f534fe174359fb1f3be9f9042ca44ea44f7be3e222f6d51dfb8f246641->enter($__internal_dd1288f534fe174359fb1f3be9f9042ca44ea44f7be3e222f6d51dfb8f246641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_dd1288f534fe174359fb1f3be9f9042ca44ea44f7be3e222f6d51dfb8f246641->leave($__internal_dd1288f534fe174359fb1f3be9f9042ca44ea44f7be3e222f6d51dfb8f246641_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c85467ec0a1ddefeaac093b7a23720625bcc4ffd61e35a9bf4abee656e55b25a = $this->env->getExtension("native_profiler");
        $__internal_c85467ec0a1ddefeaac093b7a23720625bcc4ffd61e35a9bf4abee656e55b25a->enter($__internal_c85467ec0a1ddefeaac093b7a23720625bcc4ffd61e35a9bf4abee656e55b25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c85467ec0a1ddefeaac093b7a23720625bcc4ffd61e35a9bf4abee656e55b25a->leave($__internal_c85467ec0a1ddefeaac093b7a23720625bcc4ffd61e35a9bf4abee656e55b25a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ded17c22af5d79124249c47627170eecfa5fcb01c7905f48eddb40a602510d0 = $this->env->getExtension("native_profiler");
        $__internal_3ded17c22af5d79124249c47627170eecfa5fcb01c7905f48eddb40a602510d0->enter($__internal_3ded17c22af5d79124249c47627170eecfa5fcb01c7905f48eddb40a602510d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3ded17c22af5d79124249c47627170eecfa5fcb01c7905f48eddb40a602510d0->leave($__internal_3ded17c22af5d79124249c47627170eecfa5fcb01c7905f48eddb40a602510d0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7df620574b1062986e0ae169d44defcae899193b4d79fe188e73b13b086227ba = $this->env->getExtension("native_profiler");
        $__internal_7df620574b1062986e0ae169d44defcae899193b4d79fe188e73b13b086227ba->enter($__internal_7df620574b1062986e0ae169d44defcae899193b4d79fe188e73b13b086227ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7df620574b1062986e0ae169d44defcae899193b4d79fe188e73b13b086227ba->leave($__internal_7df620574b1062986e0ae169d44defcae899193b4d79fe188e73b13b086227ba_prof);

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
