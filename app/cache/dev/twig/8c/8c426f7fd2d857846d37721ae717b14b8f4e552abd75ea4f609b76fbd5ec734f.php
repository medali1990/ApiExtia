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
        $__internal_56ee86d5c4bbff322c348c05f1cbdadd948ae5e209dc13f1fbddb63b7d510546 = $this->env->getExtension("native_profiler");
        $__internal_56ee86d5c4bbff322c348c05f1cbdadd948ae5e209dc13f1fbddb63b7d510546->enter($__internal_56ee86d5c4bbff322c348c05f1cbdadd948ae5e209dc13f1fbddb63b7d510546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_56ee86d5c4bbff322c348c05f1cbdadd948ae5e209dc13f1fbddb63b7d510546->leave($__internal_56ee86d5c4bbff322c348c05f1cbdadd948ae5e209dc13f1fbddb63b7d510546_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b42793bb83ca75df1622a80aa672490889e6be1067f9b5d2fdfa7c6c2646971d = $this->env->getExtension("native_profiler");
        $__internal_b42793bb83ca75df1622a80aa672490889e6be1067f9b5d2fdfa7c6c2646971d->enter($__internal_b42793bb83ca75df1622a80aa672490889e6be1067f9b5d2fdfa7c6c2646971d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b42793bb83ca75df1622a80aa672490889e6be1067f9b5d2fdfa7c6c2646971d->leave($__internal_b42793bb83ca75df1622a80aa672490889e6be1067f9b5d2fdfa7c6c2646971d_prof);

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
