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
        $__internal_849a2077327a1e934e56164dbbb849c0e1609e17a3a9ba45fea80b10907a51b5 = $this->env->getExtension("native_profiler");
        $__internal_849a2077327a1e934e56164dbbb849c0e1609e17a3a9ba45fea80b10907a51b5->enter($__internal_849a2077327a1e934e56164dbbb849c0e1609e17a3a9ba45fea80b10907a51b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_849a2077327a1e934e56164dbbb849c0e1609e17a3a9ba45fea80b10907a51b5->leave($__internal_849a2077327a1e934e56164dbbb849c0e1609e17a3a9ba45fea80b10907a51b5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9c1afec886f1b6cde00d284d48f23514bb4edbfdedff14987c978d1ed1f9bec = $this->env->getExtension("native_profiler");
        $__internal_b9c1afec886f1b6cde00d284d48f23514bb4edbfdedff14987c978d1ed1f9bec->enter($__internal_b9c1afec886f1b6cde00d284d48f23514bb4edbfdedff14987c978d1ed1f9bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b9c1afec886f1b6cde00d284d48f23514bb4edbfdedff14987c978d1ed1f9bec->leave($__internal_b9c1afec886f1b6cde00d284d48f23514bb4edbfdedff14987c978d1ed1f9bec_prof);

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
