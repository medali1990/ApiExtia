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
        $__internal_3b59d7fbada82a5898238618514e7bf72800df5f2bdad552d072dd95a1f1f698 = $this->env->getExtension("native_profiler");
        $__internal_3b59d7fbada82a5898238618514e7bf72800df5f2bdad552d072dd95a1f1f698->enter($__internal_3b59d7fbada82a5898238618514e7bf72800df5f2bdad552d072dd95a1f1f698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3b59d7fbada82a5898238618514e7bf72800df5f2bdad552d072dd95a1f1f698->leave($__internal_3b59d7fbada82a5898238618514e7bf72800df5f2bdad552d072dd95a1f1f698_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_66a1e9b9da284ef96984511bb1289c7987b17727cd55286eee3e51b2a261116d = $this->env->getExtension("native_profiler");
        $__internal_66a1e9b9da284ef96984511bb1289c7987b17727cd55286eee3e51b2a261116d->enter($__internal_66a1e9b9da284ef96984511bb1289c7987b17727cd55286eee3e51b2a261116d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_66a1e9b9da284ef96984511bb1289c7987b17727cd55286eee3e51b2a261116d->leave($__internal_66a1e9b9da284ef96984511bb1289c7987b17727cd55286eee3e51b2a261116d_prof);

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
