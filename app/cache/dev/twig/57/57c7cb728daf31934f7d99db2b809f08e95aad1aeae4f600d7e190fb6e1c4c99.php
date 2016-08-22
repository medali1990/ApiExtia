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
        $__internal_809407f5e84fe278f996c964d59d6a17e18437b6bd388a8eedfc1f24c3d502ae = $this->env->getExtension("native_profiler");
        $__internal_809407f5e84fe278f996c964d59d6a17e18437b6bd388a8eedfc1f24c3d502ae->enter($__internal_809407f5e84fe278f996c964d59d6a17e18437b6bd388a8eedfc1f24c3d502ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_809407f5e84fe278f996c964d59d6a17e18437b6bd388a8eedfc1f24c3d502ae->leave($__internal_809407f5e84fe278f996c964d59d6a17e18437b6bd388a8eedfc1f24c3d502ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2a64c8c5e111cffe860603e4fdbc4b2bbfc88bdea22d322c03bfc74af6fdf80 = $this->env->getExtension("native_profiler");
        $__internal_b2a64c8c5e111cffe860603e4fdbc4b2bbfc88bdea22d322c03bfc74af6fdf80->enter($__internal_b2a64c8c5e111cffe860603e4fdbc4b2bbfc88bdea22d322c03bfc74af6fdf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b2a64c8c5e111cffe860603e4fdbc4b2bbfc88bdea22d322c03bfc74af6fdf80->leave($__internal_b2a64c8c5e111cffe860603e4fdbc4b2bbfc88bdea22d322c03bfc74af6fdf80_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32a86d95f93ba1486e7143545aeeca3023d54229e1e0fd662e044a7405e90cbb = $this->env->getExtension("native_profiler");
        $__internal_32a86d95f93ba1486e7143545aeeca3023d54229e1e0fd662e044a7405e90cbb->enter($__internal_32a86d95f93ba1486e7143545aeeca3023d54229e1e0fd662e044a7405e90cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_32a86d95f93ba1486e7143545aeeca3023d54229e1e0fd662e044a7405e90cbb->leave($__internal_32a86d95f93ba1486e7143545aeeca3023d54229e1e0fd662e044a7405e90cbb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd71dd94f545bc45872eb8ee9dd6d066bdbeca729d3b0e9f76ec111694e0ce49 = $this->env->getExtension("native_profiler");
        $__internal_cd71dd94f545bc45872eb8ee9dd6d066bdbeca729d3b0e9f76ec111694e0ce49->enter($__internal_cd71dd94f545bc45872eb8ee9dd6d066bdbeca729d3b0e9f76ec111694e0ce49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cd71dd94f545bc45872eb8ee9dd6d066bdbeca729d3b0e9f76ec111694e0ce49->leave($__internal_cd71dd94f545bc45872eb8ee9dd6d066bdbeca729d3b0e9f76ec111694e0ce49_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_18ba5366eb10fedf8fa02dab0f869664b965b073004b5ee7f6a5fd159cd9e549 = $this->env->getExtension("native_profiler");
        $__internal_18ba5366eb10fedf8fa02dab0f869664b965b073004b5ee7f6a5fd159cd9e549->enter($__internal_18ba5366eb10fedf8fa02dab0f869664b965b073004b5ee7f6a5fd159cd9e549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_18ba5366eb10fedf8fa02dab0f869664b965b073004b5ee7f6a5fd159cd9e549->leave($__internal_18ba5366eb10fedf8fa02dab0f869664b965b073004b5ee7f6a5fd159cd9e549_prof);

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
