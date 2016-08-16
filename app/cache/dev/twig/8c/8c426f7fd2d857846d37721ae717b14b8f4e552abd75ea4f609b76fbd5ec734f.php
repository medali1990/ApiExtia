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
        $__internal_b0c4f24170134667806d9559ebd8ac9a9c38450565d332f8e6b7569929d54778 = $this->env->getExtension("native_profiler");
        $__internal_b0c4f24170134667806d9559ebd8ac9a9c38450565d332f8e6b7569929d54778->enter($__internal_b0c4f24170134667806d9559ebd8ac9a9c38450565d332f8e6b7569929d54778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b0c4f24170134667806d9559ebd8ac9a9c38450565d332f8e6b7569929d54778->leave($__internal_b0c4f24170134667806d9559ebd8ac9a9c38450565d332f8e6b7569929d54778_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_88af24a900db84deba651149956b42df94eb6f4ef2df61e49ea53c47739348f9 = $this->env->getExtension("native_profiler");
        $__internal_88af24a900db84deba651149956b42df94eb6f4ef2df61e49ea53c47739348f9->enter($__internal_88af24a900db84deba651149956b42df94eb6f4ef2df61e49ea53c47739348f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_88af24a900db84deba651149956b42df94eb6f4ef2df61e49ea53c47739348f9->leave($__internal_88af24a900db84deba651149956b42df94eb6f4ef2df61e49ea53c47739348f9_prof);

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
