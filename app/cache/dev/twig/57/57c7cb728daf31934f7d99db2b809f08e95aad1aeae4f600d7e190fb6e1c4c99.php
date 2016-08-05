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
        $__internal_22c39ad53f613941b40d9d14c82c6d48b7ba058d2f0a0d6cff9090fef6eb67b7 = $this->env->getExtension("native_profiler");
        $__internal_22c39ad53f613941b40d9d14c82c6d48b7ba058d2f0a0d6cff9090fef6eb67b7->enter($__internal_22c39ad53f613941b40d9d14c82c6d48b7ba058d2f0a0d6cff9090fef6eb67b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c39ad53f613941b40d9d14c82c6d48b7ba058d2f0a0d6cff9090fef6eb67b7->leave($__internal_22c39ad53f613941b40d9d14c82c6d48b7ba058d2f0a0d6cff9090fef6eb67b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b69a8fdc9a7fdbdc9dca1f636600a5aca68f860f65e550151be6b3cb48bae037 = $this->env->getExtension("native_profiler");
        $__internal_b69a8fdc9a7fdbdc9dca1f636600a5aca68f860f65e550151be6b3cb48bae037->enter($__internal_b69a8fdc9a7fdbdc9dca1f636600a5aca68f860f65e550151be6b3cb48bae037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b69a8fdc9a7fdbdc9dca1f636600a5aca68f860f65e550151be6b3cb48bae037->leave($__internal_b69a8fdc9a7fdbdc9dca1f636600a5aca68f860f65e550151be6b3cb48bae037_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4539e9ca3fd3d39e4a9558b3ee7b7f1e5404123be69e76516c5f5e1bd21b226 = $this->env->getExtension("native_profiler");
        $__internal_d4539e9ca3fd3d39e4a9558b3ee7b7f1e5404123be69e76516c5f5e1bd21b226->enter($__internal_d4539e9ca3fd3d39e4a9558b3ee7b7f1e5404123be69e76516c5f5e1bd21b226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_d4539e9ca3fd3d39e4a9558b3ee7b7f1e5404123be69e76516c5f5e1bd21b226->leave($__internal_d4539e9ca3fd3d39e4a9558b3ee7b7f1e5404123be69e76516c5f5e1bd21b226_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5120b3fddeec29b60427e940b76f44859d13191363a490549b09f5d1b3ebb13c = $this->env->getExtension("native_profiler");
        $__internal_5120b3fddeec29b60427e940b76f44859d13191363a490549b09f5d1b3ebb13c->enter($__internal_5120b3fddeec29b60427e940b76f44859d13191363a490549b09f5d1b3ebb13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5120b3fddeec29b60427e940b76f44859d13191363a490549b09f5d1b3ebb13c->leave($__internal_5120b3fddeec29b60427e940b76f44859d13191363a490549b09f5d1b3ebb13c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b338b91dc56a3ac35265ffbb7e3d3a4ca20cf88c532f15a549c357843fd4c37 = $this->env->getExtension("native_profiler");
        $__internal_5b338b91dc56a3ac35265ffbb7e3d3a4ca20cf88c532f15a549c357843fd4c37->enter($__internal_5b338b91dc56a3ac35265ffbb7e3d3a4ca20cf88c532f15a549c357843fd4c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5b338b91dc56a3ac35265ffbb7e3d3a4ca20cf88c532f15a549c357843fd4c37->leave($__internal_5b338b91dc56a3ac35265ffbb7e3d3a4ca20cf88c532f15a549c357843fd4c37_prof);

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
