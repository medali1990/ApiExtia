<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_b59610622876dfd87bd90b57b64ab9a744a937733c138d5c32716de211299b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1d119131313debca983fc45f6e5c7044c5fd62f36529fff6999b7782b815d44 = $this->env->getExtension("native_profiler");
        $__internal_b1d119131313debca983fc45f6e5c7044c5fd62f36529fff6999b7782b815d44->enter($__internal_b1d119131313debca983fc45f6e5c7044c5fd62f36529fff6999b7782b815d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1d119131313debca983fc45f6e5c7044c5fd62f36529fff6999b7782b815d44->leave($__internal_b1d119131313debca983fc45f6e5c7044c5fd62f36529fff6999b7782b815d44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed3e6815d796f2a58e33605eee1819295926020cbe4a339bc2a552e152dbcb47 = $this->env->getExtension("native_profiler");
        $__internal_ed3e6815d796f2a58e33605eee1819295926020cbe4a339bc2a552e152dbcb47->enter($__internal_ed3e6815d796f2a58e33605eee1819295926020cbe4a339bc2a552e152dbcb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure database";
        
        $__internal_ed3e6815d796f2a58e33605eee1819295926020cbe4a339bc2a552e152dbcb47->leave($__internal_ed3e6815d796f2a58e33605eee1819295926020cbe4a339bc2a552e152dbcb47_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_331be7d3ab44b703c96f3fe0c4740c2ca8a0479f7553f9a033a46c79a8519c51 = $this->env->getExtension("native_profiler");
        $__internal_331be7d3ab44b703c96f3fe0c4740c2ca8a0479f7553f9a033a46c79a8519c51->enter($__internal_331be7d3ab44b703c96f3fe0c4740c2ca8a0479f7553f9a033a46c79a8519c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 9)->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver", array()), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
        
        $__internal_331be7d3ab44b703c96f3fe0c4740c2ca8a0479f7553f9a033a46c79a8519c51->leave($__internal_331be7d3ab44b703c96f3fe0c4740c2ca8a0479f7553f9a033a46c79a8519c51_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block title %}Symfony - Configure database{% endblock %}*/
/* */
/* {% block content %}*/
/*     {% form_theme form "SensioDistributionBundle::Configurator/form.html.twig" %}*/
/* */
/*     <div class="step">*/
/*         {% include "SensioDistributionBundle::Configurator/steps.html.twig" with { "index": index, "count": count } %}*/
/* */
/*         <h1>Configure your Database</h1>*/
/*         <p>If your website needs a database connection, please configure it here.</p>*/
/* */
/*         <div class="symfony-form-errors">*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*         <form action="{{ path('_configurator_step', { 'index': index }) }}" method="POST">*/
/*             <div class="symfony-form-column">*/
/*                 {{ form_row(form.driver) }}*/
/*                 {{ form_row(form.host) }}*/
/*                 {{ form_row(form.name) }}*/
/*             </div>*/
/*             <div class="symfony-form-column">*/
/*                 {{ form_row(form.user) }}*/
/*                 {{ form_row(form.password) }}*/
/*             </div>*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*             <div class="symfony-form-footer">*/
/*                 <p>*/
/*                     <button type="submit" class="sf-button">*/
/*                         <span class="border-l">*/
/*                             <span class="border-r">*/
/*                                 <span class="btn-bg">NEXT STEP</span>*/
/*                             </span>*/
/*                         </span>*/
/*                     </button>*/
/*                 </p>*/
/*                 <p>* mandatory fields</p>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
