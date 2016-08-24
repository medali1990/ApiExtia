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
        $__internal_b9593c4f881b3a02efddff04a833511efa6fcb9ee1d3037bdb92fa5d2f7827a6 = $this->env->getExtension("native_profiler");
        $__internal_b9593c4f881b3a02efddff04a833511efa6fcb9ee1d3037bdb92fa5d2f7827a6->enter($__internal_b9593c4f881b3a02efddff04a833511efa6fcb9ee1d3037bdb92fa5d2f7827a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9593c4f881b3a02efddff04a833511efa6fcb9ee1d3037bdb92fa5d2f7827a6->leave($__internal_b9593c4f881b3a02efddff04a833511efa6fcb9ee1d3037bdb92fa5d2f7827a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aea933a3d5b28eef3ef1d2d0fafbdd6125622fea3dd443a847419249ff56b69f = $this->env->getExtension("native_profiler");
        $__internal_aea933a3d5b28eef3ef1d2d0fafbdd6125622fea3dd443a847419249ff56b69f->enter($__internal_aea933a3d5b28eef3ef1d2d0fafbdd6125622fea3dd443a847419249ff56b69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_aea933a3d5b28eef3ef1d2d0fafbdd6125622fea3dd443a847419249ff56b69f->leave($__internal_aea933a3d5b28eef3ef1d2d0fafbdd6125622fea3dd443a847419249ff56b69f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71356775f93ba97f867235ac7d57a5ad330c0beed16e74c7778a121de12fca40 = $this->env->getExtension("native_profiler");
        $__internal_71356775f93ba97f867235ac7d57a5ad330c0beed16e74c7778a121de12fca40->enter($__internal_71356775f93ba97f867235ac7d57a5ad330c0beed16e74c7778a121de12fca40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_71356775f93ba97f867235ac7d57a5ad330c0beed16e74c7778a121de12fca40->leave($__internal_71356775f93ba97f867235ac7d57a5ad330c0beed16e74c7778a121de12fca40_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_486022baea567c52a99839d60f36fc5a2e0225dc9d29507d173e6ce5ef154f01 = $this->env->getExtension("native_profiler");
        $__internal_486022baea567c52a99839d60f36fc5a2e0225dc9d29507d173e6ce5ef154f01->enter($__internal_486022baea567c52a99839d60f36fc5a2e0225dc9d29507d173e6ce5ef154f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_486022baea567c52a99839d60f36fc5a2e0225dc9d29507d173e6ce5ef154f01->leave($__internal_486022baea567c52a99839d60f36fc5a2e0225dc9d29507d173e6ce5ef154f01_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_3629944b2b17014fb6ab5e86f432238e17b731dd54a0a2279c8f035cdc8165be = $this->env->getExtension("native_profiler");
        $__internal_3629944b2b17014fb6ab5e86f432238e17b731dd54a0a2279c8f035cdc8165be->enter($__internal_3629944b2b17014fb6ab5e86f432238e17b731dd54a0a2279c8f035cdc8165be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3629944b2b17014fb6ab5e86f432238e17b731dd54a0a2279c8f035cdc8165be->leave($__internal_3629944b2b17014fb6ab5e86f432238e17b731dd54a0a2279c8f035cdc8165be_prof);

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
