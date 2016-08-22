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
        $__internal_360145ff403cac476a5261df5159b221416b27ec8ef86410b50d231c3a7a8f60 = $this->env->getExtension("native_profiler");
        $__internal_360145ff403cac476a5261df5159b221416b27ec8ef86410b50d231c3a7a8f60->enter($__internal_360145ff403cac476a5261df5159b221416b27ec8ef86410b50d231c3a7a8f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_360145ff403cac476a5261df5159b221416b27ec8ef86410b50d231c3a7a8f60->leave($__internal_360145ff403cac476a5261df5159b221416b27ec8ef86410b50d231c3a7a8f60_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7af26acddc606e03f1fe87802a23eb4ed318a7ec94a7f69f1b5e7e8e28cb8189 = $this->env->getExtension("native_profiler");
        $__internal_7af26acddc606e03f1fe87802a23eb4ed318a7ec94a7f69f1b5e7e8e28cb8189->enter($__internal_7af26acddc606e03f1fe87802a23eb4ed318a7ec94a7f69f1b5e7e8e28cb8189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7af26acddc606e03f1fe87802a23eb4ed318a7ec94a7f69f1b5e7e8e28cb8189->leave($__internal_7af26acddc606e03f1fe87802a23eb4ed318a7ec94a7f69f1b5e7e8e28cb8189_prof);

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
