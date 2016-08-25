<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_c993a574d494a838988a547aea448d0ecc505a792cf12f6f57d334c246c26e19 extends Twig_Template
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
        $__internal_319888a6c305ecea158cf4a5c1a5e319f865ace93b79de17535589fd28a81f7b = $this->env->getExtension("native_profiler");
        $__internal_319888a6c305ecea158cf4a5c1a5e319f865ace93b79de17535589fd28a81f7b->enter($__internal_319888a6c305ecea158cf4a5c1a5e319f865ace93b79de17535589fd28a81f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319888a6c305ecea158cf4a5c1a5e319f865ace93b79de17535589fd28a81f7b->leave($__internal_319888a6c305ecea158cf4a5c1a5e319f865ace93b79de17535589fd28a81f7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4833c8aac0af7a2503eab63a64e8fa797d8dadcf061a1c633ee8da822f75c2b1 = $this->env->getExtension("native_profiler");
        $__internal_4833c8aac0af7a2503eab63a64e8fa797d8dadcf061a1c633ee8da822f75c2b1->enter($__internal_4833c8aac0af7a2503eab63a64e8fa797d8dadcf061a1c633ee8da822f75c2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_4833c8aac0af7a2503eab63a64e8fa797d8dadcf061a1c633ee8da822f75c2b1->leave($__internal_4833c8aac0af7a2503eab63a64e8fa797d8dadcf061a1c633ee8da822f75c2b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3303c115710641aee3792c75e9f07d37009a45782ff9dd55e3b09cc102b8278b = $this->env->getExtension("native_profiler");
        $__internal_3303c115710641aee3792c75e9f07d37009a45782ff9dd55e3b09cc102b8278b->enter($__internal_3303c115710641aee3792c75e9f07d37009a45782ff9dd55e3b09cc102b8278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_3303c115710641aee3792c75e9f07d37009a45782ff9dd55e3b09cc102b8278b->leave($__internal_3303c115710641aee3792c75e9f07d37009a45782ff9dd55e3b09cc102b8278b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9535e90dfec498ea63e94bb5d4c29466faeff572cce0c87b219e92743db28cd = $this->env->getExtension("native_profiler");
        $__internal_a9535e90dfec498ea63e94bb5d4c29466faeff572cce0c87b219e92743db28cd->enter($__internal_a9535e90dfec498ea63e94bb5d4c29466faeff572cce0c87b219e92743db28cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a9535e90dfec498ea63e94bb5d4c29466faeff572cce0c87b219e92743db28cd->leave($__internal_a9535e90dfec498ea63e94bb5d4c29466faeff572cce0c87b219e92743db28cd_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2d34f06fee5a13217bacc52c612160ae4f43a00b9cf1dc3daf4236c49402f0dd = $this->env->getExtension("native_profiler");
        $__internal_2d34f06fee5a13217bacc52c612160ae4f43a00b9cf1dc3daf4236c49402f0dd->enter($__internal_2d34f06fee5a13217bacc52c612160ae4f43a00b9cf1dc3daf4236c49402f0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2d34f06fee5a13217bacc52c612160ae4f43a00b9cf1dc3daf4236c49402f0dd->leave($__internal_2d34f06fee5a13217bacc52c612160ae4f43a00b9cf1dc3daf4236c49402f0dd_prof);

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
