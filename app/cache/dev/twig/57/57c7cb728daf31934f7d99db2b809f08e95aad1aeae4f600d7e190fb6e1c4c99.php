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
        $__internal_e667b5b68edcce8df260b211321061b9baf797bae8b604ee890d42eaf4705837 = $this->env->getExtension("native_profiler");
        $__internal_e667b5b68edcce8df260b211321061b9baf797bae8b604ee890d42eaf4705837->enter($__internal_e667b5b68edcce8df260b211321061b9baf797bae8b604ee890d42eaf4705837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e667b5b68edcce8df260b211321061b9baf797bae8b604ee890d42eaf4705837->leave($__internal_e667b5b68edcce8df260b211321061b9baf797bae8b604ee890d42eaf4705837_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cba669a90cecbe2cb14065196c8c032ce5493f547fb34dd7edaec25b84cfac85 = $this->env->getExtension("native_profiler");
        $__internal_cba669a90cecbe2cb14065196c8c032ce5493f547fb34dd7edaec25b84cfac85->enter($__internal_cba669a90cecbe2cb14065196c8c032ce5493f547fb34dd7edaec25b84cfac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cba669a90cecbe2cb14065196c8c032ce5493f547fb34dd7edaec25b84cfac85->leave($__internal_cba669a90cecbe2cb14065196c8c032ce5493f547fb34dd7edaec25b84cfac85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d18f406677175ee1811d00f55185e3fd9fdd35d1c54f5e5d6da164395c7d0f9 = $this->env->getExtension("native_profiler");
        $__internal_3d18f406677175ee1811d00f55185e3fd9fdd35d1c54f5e5d6da164395c7d0f9->enter($__internal_3d18f406677175ee1811d00f55185e3fd9fdd35d1c54f5e5d6da164395c7d0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_3d18f406677175ee1811d00f55185e3fd9fdd35d1c54f5e5d6da164395c7d0f9->leave($__internal_3d18f406677175ee1811d00f55185e3fd9fdd35d1c54f5e5d6da164395c7d0f9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b498aee83ec25c2e54a2640598744d27cb7b4a5b0fbfe92762ac107b7938ed22 = $this->env->getExtension("native_profiler");
        $__internal_b498aee83ec25c2e54a2640598744d27cb7b4a5b0fbfe92762ac107b7938ed22->enter($__internal_b498aee83ec25c2e54a2640598744d27cb7b4a5b0fbfe92762ac107b7938ed22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b498aee83ec25c2e54a2640598744d27cb7b4a5b0fbfe92762ac107b7938ed22->leave($__internal_b498aee83ec25c2e54a2640598744d27cb7b4a5b0fbfe92762ac107b7938ed22_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1cf18777fa9335d7f4c9473d8c81ec9e30e40a3b6234c36b2f5e397f5a1582c6 = $this->env->getExtension("native_profiler");
        $__internal_1cf18777fa9335d7f4c9473d8c81ec9e30e40a3b6234c36b2f5e397f5a1582c6->enter($__internal_1cf18777fa9335d7f4c9473d8c81ec9e30e40a3b6234c36b2f5e397f5a1582c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1cf18777fa9335d7f4c9473d8c81ec9e30e40a3b6234c36b2f5e397f5a1582c6->leave($__internal_1cf18777fa9335d7f4c9473d8c81ec9e30e40a3b6234c36b2f5e397f5a1582c6_prof);

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
