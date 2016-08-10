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
        $__internal_a57f2aa97f95bd857b2bf5d14201c1dd113529a338e3ea88f24b31b33364b474 = $this->env->getExtension("native_profiler");
        $__internal_a57f2aa97f95bd857b2bf5d14201c1dd113529a338e3ea88f24b31b33364b474->enter($__internal_a57f2aa97f95bd857b2bf5d14201c1dd113529a338e3ea88f24b31b33364b474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a57f2aa97f95bd857b2bf5d14201c1dd113529a338e3ea88f24b31b33364b474->leave($__internal_a57f2aa97f95bd857b2bf5d14201c1dd113529a338e3ea88f24b31b33364b474_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_270257bf633d60e8a7e9b955d0a0db7bb9e508965b7e2c49493c3d2d392dc1f5 = $this->env->getExtension("native_profiler");
        $__internal_270257bf633d60e8a7e9b955d0a0db7bb9e508965b7e2c49493c3d2d392dc1f5->enter($__internal_270257bf633d60e8a7e9b955d0a0db7bb9e508965b7e2c49493c3d2d392dc1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_270257bf633d60e8a7e9b955d0a0db7bb9e508965b7e2c49493c3d2d392dc1f5->leave($__internal_270257bf633d60e8a7e9b955d0a0db7bb9e508965b7e2c49493c3d2d392dc1f5_prof);

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
