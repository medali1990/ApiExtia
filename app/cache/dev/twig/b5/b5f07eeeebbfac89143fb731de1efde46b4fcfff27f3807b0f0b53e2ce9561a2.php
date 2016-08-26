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
        $__internal_b6ff9808fe7bce2fa5c2711a83bfaa2505da617551f8af689d6d4de1410038cd = $this->env->getExtension("native_profiler");
        $__internal_b6ff9808fe7bce2fa5c2711a83bfaa2505da617551f8af689d6d4de1410038cd->enter($__internal_b6ff9808fe7bce2fa5c2711a83bfaa2505da617551f8af689d6d4de1410038cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ff9808fe7bce2fa5c2711a83bfaa2505da617551f8af689d6d4de1410038cd->leave($__internal_b6ff9808fe7bce2fa5c2711a83bfaa2505da617551f8af689d6d4de1410038cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_482b1978c2b441bc29dd7320ecba40e706979915e6f7bd1766aa83134f8f7f92 = $this->env->getExtension("native_profiler");
        $__internal_482b1978c2b441bc29dd7320ecba40e706979915e6f7bd1766aa83134f8f7f92->enter($__internal_482b1978c2b441bc29dd7320ecba40e706979915e6f7bd1766aa83134f8f7f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_482b1978c2b441bc29dd7320ecba40e706979915e6f7bd1766aa83134f8f7f92->leave($__internal_482b1978c2b441bc29dd7320ecba40e706979915e6f7bd1766aa83134f8f7f92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8676571428052c02879f91e787ea3d6f06110ede793ee6c7d251c514002fff97 = $this->env->getExtension("native_profiler");
        $__internal_8676571428052c02879f91e787ea3d6f06110ede793ee6c7d251c514002fff97->enter($__internal_8676571428052c02879f91e787ea3d6f06110ede793ee6c7d251c514002fff97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_8676571428052c02879f91e787ea3d6f06110ede793ee6c7d251c514002fff97->leave($__internal_8676571428052c02879f91e787ea3d6f06110ede793ee6c7d251c514002fff97_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_08a9e4a2afb97f268f8686175b102b91b4ef3fddb0140c7a704dcccc109ea026 = $this->env->getExtension("native_profiler");
        $__internal_08a9e4a2afb97f268f8686175b102b91b4ef3fddb0140c7a704dcccc109ea026->enter($__internal_08a9e4a2afb97f268f8686175b102b91b4ef3fddb0140c7a704dcccc109ea026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08a9e4a2afb97f268f8686175b102b91b4ef3fddb0140c7a704dcccc109ea026->leave($__internal_08a9e4a2afb97f268f8686175b102b91b4ef3fddb0140c7a704dcccc109ea026_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c47ec8ecac3210860dfbc913ac49362fde9076257eba0a6b5f9c1a3810939f4d = $this->env->getExtension("native_profiler");
        $__internal_c47ec8ecac3210860dfbc913ac49362fde9076257eba0a6b5f9c1a3810939f4d->enter($__internal_c47ec8ecac3210860dfbc913ac49362fde9076257eba0a6b5f9c1a3810939f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c47ec8ecac3210860dfbc913ac49362fde9076257eba0a6b5f9c1a3810939f4d->leave($__internal_c47ec8ecac3210860dfbc913ac49362fde9076257eba0a6b5f9c1a3810939f4d_prof);

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
