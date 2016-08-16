<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8442f904968807a7d3e7120786fbf8e503d0e759fae7fc7a8b0ec21ba73cd498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deb24b9f644ac2e124778f3c1bc999f30906ec4ef605b10f013085be2afef8c5 = $this->env->getExtension("native_profiler");
        $__internal_deb24b9f644ac2e124778f3c1bc999f30906ec4ef605b10f013085be2afef8c5->enter($__internal_deb24b9f644ac2e124778f3c1bc999f30906ec4ef605b10f013085be2afef8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_deb24b9f644ac2e124778f3c1bc999f30906ec4ef605b10f013085be2afef8c5->leave($__internal_deb24b9f644ac2e124778f3c1bc999f30906ec4ef605b10f013085be2afef8c5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f58185d0d5f502b6ca0ae23be1669dca3cfbcca7d09b69f9f5775df7ba4ff78 = $this->env->getExtension("native_profiler");
        $__internal_2f58185d0d5f502b6ca0ae23be1669dca3cfbcca7d09b69f9f5775df7ba4ff78->enter($__internal_2f58185d0d5f502b6ca0ae23be1669dca3cfbcca7d09b69f9f5775df7ba4ff78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2f58185d0d5f502b6ca0ae23be1669dca3cfbcca7d09b69f9f5775df7ba4ff78->leave($__internal_2f58185d0d5f502b6ca0ae23be1669dca3cfbcca7d09b69f9f5775df7ba4ff78_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
