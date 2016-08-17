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
        $__internal_997f10afdadcdda195fce74b420fdd668c6f09d96a691e7ca588e45cdea2cb71 = $this->env->getExtension("native_profiler");
        $__internal_997f10afdadcdda195fce74b420fdd668c6f09d96a691e7ca588e45cdea2cb71->enter($__internal_997f10afdadcdda195fce74b420fdd668c6f09d96a691e7ca588e45cdea2cb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_997f10afdadcdda195fce74b420fdd668c6f09d96a691e7ca588e45cdea2cb71->leave($__internal_997f10afdadcdda195fce74b420fdd668c6f09d96a691e7ca588e45cdea2cb71_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c6a4bd3c16f5099d56fd926f7dfef31056a1bc4e7039c0532473f5b9ab42344 = $this->env->getExtension("native_profiler");
        $__internal_9c6a4bd3c16f5099d56fd926f7dfef31056a1bc4e7039c0532473f5b9ab42344->enter($__internal_9c6a4bd3c16f5099d56fd926f7dfef31056a1bc4e7039c0532473f5b9ab42344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9c6a4bd3c16f5099d56fd926f7dfef31056a1bc4e7039c0532473f5b9ab42344->leave($__internal_9c6a4bd3c16f5099d56fd926f7dfef31056a1bc4e7039c0532473f5b9ab42344_prof);

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
