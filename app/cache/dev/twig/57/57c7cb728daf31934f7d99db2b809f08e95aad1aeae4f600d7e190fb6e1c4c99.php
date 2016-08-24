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
        $__internal_4fc42fb2225625211518b6e8aa7dc2f1f587ba4bd1f790277ca574f5c2a32054 = $this->env->getExtension("native_profiler");
        $__internal_4fc42fb2225625211518b6e8aa7dc2f1f587ba4bd1f790277ca574f5c2a32054->enter($__internal_4fc42fb2225625211518b6e8aa7dc2f1f587ba4bd1f790277ca574f5c2a32054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc42fb2225625211518b6e8aa7dc2f1f587ba4bd1f790277ca574f5c2a32054->leave($__internal_4fc42fb2225625211518b6e8aa7dc2f1f587ba4bd1f790277ca574f5c2a32054_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51db6f8d85c3b43c50aa22ac111f358be3b6d217a2de9e785c351ce87a23fb0a = $this->env->getExtension("native_profiler");
        $__internal_51db6f8d85c3b43c50aa22ac111f358be3b6d217a2de9e785c351ce87a23fb0a->enter($__internal_51db6f8d85c3b43c50aa22ac111f358be3b6d217a2de9e785c351ce87a23fb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_51db6f8d85c3b43c50aa22ac111f358be3b6d217a2de9e785c351ce87a23fb0a->leave($__internal_51db6f8d85c3b43c50aa22ac111f358be3b6d217a2de9e785c351ce87a23fb0a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae58751b8220cea84b9b4f4a326c695dc06ed4b31488a99c48e39383fd881fbb = $this->env->getExtension("native_profiler");
        $__internal_ae58751b8220cea84b9b4f4a326c695dc06ed4b31488a99c48e39383fd881fbb->enter($__internal_ae58751b8220cea84b9b4f4a326c695dc06ed4b31488a99c48e39383fd881fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ae58751b8220cea84b9b4f4a326c695dc06ed4b31488a99c48e39383fd881fbb->leave($__internal_ae58751b8220cea84b9b4f4a326c695dc06ed4b31488a99c48e39383fd881fbb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_06ec5237493ad927511412c42d2af436b543539b2e3655a4491e28a2a24be122 = $this->env->getExtension("native_profiler");
        $__internal_06ec5237493ad927511412c42d2af436b543539b2e3655a4491e28a2a24be122->enter($__internal_06ec5237493ad927511412c42d2af436b543539b2e3655a4491e28a2a24be122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_06ec5237493ad927511412c42d2af436b543539b2e3655a4491e28a2a24be122->leave($__internal_06ec5237493ad927511412c42d2af436b543539b2e3655a4491e28a2a24be122_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8a04188e0b9bc62c23f5fffd66ed3ac10edc0bc313efcb9e675a1ae778a2e4ee = $this->env->getExtension("native_profiler");
        $__internal_8a04188e0b9bc62c23f5fffd66ed3ac10edc0bc313efcb9e675a1ae778a2e4ee->enter($__internal_8a04188e0b9bc62c23f5fffd66ed3ac10edc0bc313efcb9e675a1ae778a2e4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8a04188e0b9bc62c23f5fffd66ed3ac10edc0bc313efcb9e675a1ae778a2e4ee->leave($__internal_8a04188e0b9bc62c23f5fffd66ed3ac10edc0bc313efcb9e675a1ae778a2e4ee_prof);

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
