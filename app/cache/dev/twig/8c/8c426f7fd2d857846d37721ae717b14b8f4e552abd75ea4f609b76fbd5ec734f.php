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
        $__internal_184bb53e3caea8662957addfebee2616f6e5caa37279ff8770e5af6955d94988 = $this->env->getExtension("native_profiler");
        $__internal_184bb53e3caea8662957addfebee2616f6e5caa37279ff8770e5af6955d94988->enter($__internal_184bb53e3caea8662957addfebee2616f6e5caa37279ff8770e5af6955d94988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_184bb53e3caea8662957addfebee2616f6e5caa37279ff8770e5af6955d94988->leave($__internal_184bb53e3caea8662957addfebee2616f6e5caa37279ff8770e5af6955d94988_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a2986ae8cf5202c482f94da6e64f4c0a708027f3bbafb966f584aea9a1df6d5 = $this->env->getExtension("native_profiler");
        $__internal_0a2986ae8cf5202c482f94da6e64f4c0a708027f3bbafb966f584aea9a1df6d5->enter($__internal_0a2986ae8cf5202c482f94da6e64f4c0a708027f3bbafb966f584aea9a1df6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0a2986ae8cf5202c482f94da6e64f4c0a708027f3bbafb966f584aea9a1df6d5->leave($__internal_0a2986ae8cf5202c482f94da6e64f4c0a708027f3bbafb966f584aea9a1df6d5_prof);

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
