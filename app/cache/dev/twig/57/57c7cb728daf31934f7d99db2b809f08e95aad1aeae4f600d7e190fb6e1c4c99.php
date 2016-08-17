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
        $__internal_bc1241302d3cef929a37ea6c45ed828a62e2515e0b510bb9fec20a6624ad9ec6 = $this->env->getExtension("native_profiler");
        $__internal_bc1241302d3cef929a37ea6c45ed828a62e2515e0b510bb9fec20a6624ad9ec6->enter($__internal_bc1241302d3cef929a37ea6c45ed828a62e2515e0b510bb9fec20a6624ad9ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc1241302d3cef929a37ea6c45ed828a62e2515e0b510bb9fec20a6624ad9ec6->leave($__internal_bc1241302d3cef929a37ea6c45ed828a62e2515e0b510bb9fec20a6624ad9ec6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63c61c750cf50dc0f5104ddd22ce5c3181f38791429654a273463d5b8fe213e5 = $this->env->getExtension("native_profiler");
        $__internal_63c61c750cf50dc0f5104ddd22ce5c3181f38791429654a273463d5b8fe213e5->enter($__internal_63c61c750cf50dc0f5104ddd22ce5c3181f38791429654a273463d5b8fe213e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_63c61c750cf50dc0f5104ddd22ce5c3181f38791429654a273463d5b8fe213e5->leave($__internal_63c61c750cf50dc0f5104ddd22ce5c3181f38791429654a273463d5b8fe213e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c526739f146f72a4b8efb2cb25d4fa005bb4176a72961afeba7942bd2574d48 = $this->env->getExtension("native_profiler");
        $__internal_2c526739f146f72a4b8efb2cb25d4fa005bb4176a72961afeba7942bd2574d48->enter($__internal_2c526739f146f72a4b8efb2cb25d4fa005bb4176a72961afeba7942bd2574d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_2c526739f146f72a4b8efb2cb25d4fa005bb4176a72961afeba7942bd2574d48->leave($__internal_2c526739f146f72a4b8efb2cb25d4fa005bb4176a72961afeba7942bd2574d48_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_280f21af3a2bbe37043b3884fa8f4ec6aada755a80943a94b1ab3eb37aa3be62 = $this->env->getExtension("native_profiler");
        $__internal_280f21af3a2bbe37043b3884fa8f4ec6aada755a80943a94b1ab3eb37aa3be62->enter($__internal_280f21af3a2bbe37043b3884fa8f4ec6aada755a80943a94b1ab3eb37aa3be62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_280f21af3a2bbe37043b3884fa8f4ec6aada755a80943a94b1ab3eb37aa3be62->leave($__internal_280f21af3a2bbe37043b3884fa8f4ec6aada755a80943a94b1ab3eb37aa3be62_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_999ae7bfaf97e7a3774b909ed4eb81814ca078217316f555f2e98eff9d241714 = $this->env->getExtension("native_profiler");
        $__internal_999ae7bfaf97e7a3774b909ed4eb81814ca078217316f555f2e98eff9d241714->enter($__internal_999ae7bfaf97e7a3774b909ed4eb81814ca078217316f555f2e98eff9d241714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_999ae7bfaf97e7a3774b909ed4eb81814ca078217316f555f2e98eff9d241714->leave($__internal_999ae7bfaf97e7a3774b909ed4eb81814ca078217316f555f2e98eff9d241714_prof);

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
