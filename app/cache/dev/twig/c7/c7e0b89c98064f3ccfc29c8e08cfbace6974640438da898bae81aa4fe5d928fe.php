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
        $__internal_f6e819c3b8679c0b3d1720593cebb422450ed9614caa3bc11e61e98868c84c7f = $this->env->getExtension("native_profiler");
        $__internal_f6e819c3b8679c0b3d1720593cebb422450ed9614caa3bc11e61e98868c84c7f->enter($__internal_f6e819c3b8679c0b3d1720593cebb422450ed9614caa3bc11e61e98868c84c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f6e819c3b8679c0b3d1720593cebb422450ed9614caa3bc11e61e98868c84c7f->leave($__internal_f6e819c3b8679c0b3d1720593cebb422450ed9614caa3bc11e61e98868c84c7f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b66c1cdc2d19238063844babb6fa576527729b8e417f9e54ec06d6120b228b0 = $this->env->getExtension("native_profiler");
        $__internal_2b66c1cdc2d19238063844babb6fa576527729b8e417f9e54ec06d6120b228b0->enter($__internal_2b66c1cdc2d19238063844babb6fa576527729b8e417f9e54ec06d6120b228b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2b66c1cdc2d19238063844babb6fa576527729b8e417f9e54ec06d6120b228b0->leave($__internal_2b66c1cdc2d19238063844babb6fa576527729b8e417f9e54ec06d6120b228b0_prof);

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
