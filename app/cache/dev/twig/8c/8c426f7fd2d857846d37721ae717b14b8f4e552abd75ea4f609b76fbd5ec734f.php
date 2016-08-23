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
        $__internal_b9ab134f49a07a46edb28ea17c2b8e9a2a2fe7dd3472940fa09e1cde6883be2c = $this->env->getExtension("native_profiler");
        $__internal_b9ab134f49a07a46edb28ea17c2b8e9a2a2fe7dd3472940fa09e1cde6883be2c->enter($__internal_b9ab134f49a07a46edb28ea17c2b8e9a2a2fe7dd3472940fa09e1cde6883be2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b9ab134f49a07a46edb28ea17c2b8e9a2a2fe7dd3472940fa09e1cde6883be2c->leave($__internal_b9ab134f49a07a46edb28ea17c2b8e9a2a2fe7dd3472940fa09e1cde6883be2c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb24ff1cc998f8569a6c79b31cc74dbbf562a4ad6d60ef0edace81e11e55879b = $this->env->getExtension("native_profiler");
        $__internal_fb24ff1cc998f8569a6c79b31cc74dbbf562a4ad6d60ef0edace81e11e55879b->enter($__internal_fb24ff1cc998f8569a6c79b31cc74dbbf562a4ad6d60ef0edace81e11e55879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fb24ff1cc998f8569a6c79b31cc74dbbf562a4ad6d60ef0edace81e11e55879b->leave($__internal_fb24ff1cc998f8569a6c79b31cc74dbbf562a4ad6d60ef0edace81e11e55879b_prof);

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
