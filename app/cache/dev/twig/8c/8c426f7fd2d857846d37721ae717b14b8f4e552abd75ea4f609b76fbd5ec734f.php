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
        $__internal_2b5da1e716240689bfd7add781330082f1b3ef556b0e914b81d47ec38e64dc47 = $this->env->getExtension("native_profiler");
        $__internal_2b5da1e716240689bfd7add781330082f1b3ef556b0e914b81d47ec38e64dc47->enter($__internal_2b5da1e716240689bfd7add781330082f1b3ef556b0e914b81d47ec38e64dc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2b5da1e716240689bfd7add781330082f1b3ef556b0e914b81d47ec38e64dc47->leave($__internal_2b5da1e716240689bfd7add781330082f1b3ef556b0e914b81d47ec38e64dc47_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bccada5e081324042f7b085c832e4a5af9a2943061238ee503cb963c623a6e1f = $this->env->getExtension("native_profiler");
        $__internal_bccada5e081324042f7b085c832e4a5af9a2943061238ee503cb963c623a6e1f->enter($__internal_bccada5e081324042f7b085c832e4a5af9a2943061238ee503cb963c623a6e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bccada5e081324042f7b085c832e4a5af9a2943061238ee503cb963c623a6e1f->leave($__internal_bccada5e081324042f7b085c832e4a5af9a2943061238ee503cb963c623a6e1f_prof);

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
