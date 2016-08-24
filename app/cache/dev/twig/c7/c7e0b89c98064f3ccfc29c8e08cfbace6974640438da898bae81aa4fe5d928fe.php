<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8789174e45312889adb255ff7fc37a07b3419b08b2d0384f720cda56ef6e05aa extends Twig_Template
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
        $__internal_eee5fb82f748b3e5fbf907b9f02ace8d133d396d384430027b8c301c1a0aa440 = $this->env->getExtension("native_profiler");
        $__internal_eee5fb82f748b3e5fbf907b9f02ace8d133d396d384430027b8c301c1a0aa440->enter($__internal_eee5fb82f748b3e5fbf907b9f02ace8d133d396d384430027b8c301c1a0aa440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eee5fb82f748b3e5fbf907b9f02ace8d133d396d384430027b8c301c1a0aa440->leave($__internal_eee5fb82f748b3e5fbf907b9f02ace8d133d396d384430027b8c301c1a0aa440_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_18c0cd417e85b166b10d474adeb89296f9e509e0d1c5741fb98a68dabea395dd = $this->env->getExtension("native_profiler");
        $__internal_18c0cd417e85b166b10d474adeb89296f9e509e0d1c5741fb98a68dabea395dd->enter($__internal_18c0cd417e85b166b10d474adeb89296f9e509e0d1c5741fb98a68dabea395dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_18c0cd417e85b166b10d474adeb89296f9e509e0d1c5741fb98a68dabea395dd->leave($__internal_18c0cd417e85b166b10d474adeb89296f9e509e0d1c5741fb98a68dabea395dd_prof);

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
