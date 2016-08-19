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
        $__internal_7164a2d4383b6682cb17522166eb0ae7f3720406c1ab6382a8be9b8968bdbc2a = $this->env->getExtension("native_profiler");
        $__internal_7164a2d4383b6682cb17522166eb0ae7f3720406c1ab6382a8be9b8968bdbc2a->enter($__internal_7164a2d4383b6682cb17522166eb0ae7f3720406c1ab6382a8be9b8968bdbc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7164a2d4383b6682cb17522166eb0ae7f3720406c1ab6382a8be9b8968bdbc2a->leave($__internal_7164a2d4383b6682cb17522166eb0ae7f3720406c1ab6382a8be9b8968bdbc2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9af98e2578e33a2ac4b584b67748d3241ee3cf90e51a68b334579a95d973d697 = $this->env->getExtension("native_profiler");
        $__internal_9af98e2578e33a2ac4b584b67748d3241ee3cf90e51a68b334579a95d973d697->enter($__internal_9af98e2578e33a2ac4b584b67748d3241ee3cf90e51a68b334579a95d973d697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9af98e2578e33a2ac4b584b67748d3241ee3cf90e51a68b334579a95d973d697->leave($__internal_9af98e2578e33a2ac4b584b67748d3241ee3cf90e51a68b334579a95d973d697_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d74bcb587f406bf648c40f427bd2418054f4103f963f28c49249a13d3afc669 = $this->env->getExtension("native_profiler");
        $__internal_5d74bcb587f406bf648c40f427bd2418054f4103f963f28c49249a13d3afc669->enter($__internal_5d74bcb587f406bf648c40f427bd2418054f4103f963f28c49249a13d3afc669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_5d74bcb587f406bf648c40f427bd2418054f4103f963f28c49249a13d3afc669->leave($__internal_5d74bcb587f406bf648c40f427bd2418054f4103f963f28c49249a13d3afc669_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_49db562291777712c73592ad5d5764a1b4baef55f7450038ac3a6205339915f5 = $this->env->getExtension("native_profiler");
        $__internal_49db562291777712c73592ad5d5764a1b4baef55f7450038ac3a6205339915f5->enter($__internal_49db562291777712c73592ad5d5764a1b4baef55f7450038ac3a6205339915f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_49db562291777712c73592ad5d5764a1b4baef55f7450038ac3a6205339915f5->leave($__internal_49db562291777712c73592ad5d5764a1b4baef55f7450038ac3a6205339915f5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a26b2b68c34a41244ea2f2a369aa49132d6d6d1d72fb22136cdcf75001905147 = $this->env->getExtension("native_profiler");
        $__internal_a26b2b68c34a41244ea2f2a369aa49132d6d6d1d72fb22136cdcf75001905147->enter($__internal_a26b2b68c34a41244ea2f2a369aa49132d6d6d1d72fb22136cdcf75001905147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a26b2b68c34a41244ea2f2a369aa49132d6d6d1d72fb22136cdcf75001905147->leave($__internal_a26b2b68c34a41244ea2f2a369aa49132d6d6d1d72fb22136cdcf75001905147_prof);

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
