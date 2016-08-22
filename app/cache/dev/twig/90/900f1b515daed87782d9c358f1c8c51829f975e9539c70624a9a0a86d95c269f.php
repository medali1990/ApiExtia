<?php

/* base.html.twig */
class __TwigTemplate_1f8d0bbdf6b7193aa7bb741a56d73c624e9a9bdeff4687297871b8e57c15da09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdcd4a7187fa6f21a6a8f482d72c091de9b505ad53c22073f5cf5bab9f0e4477 = $this->env->getExtension("native_profiler");
        $__internal_cdcd4a7187fa6f21a6a8f482d72c091de9b505ad53c22073f5cf5bab9f0e4477->enter($__internal_cdcd4a7187fa6f21a6a8f482d72c091de9b505ad53c22073f5cf5bab9f0e4477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cdcd4a7187fa6f21a6a8f482d72c091de9b505ad53c22073f5cf5bab9f0e4477->leave($__internal_cdcd4a7187fa6f21a6a8f482d72c091de9b505ad53c22073f5cf5bab9f0e4477_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6d8faf74e8e217ed490c8acd1b3a1d8a022116ab474c92db40a3f23d2277aa9 = $this->env->getExtension("native_profiler");
        $__internal_f6d8faf74e8e217ed490c8acd1b3a1d8a022116ab474c92db40a3f23d2277aa9->enter($__internal_f6d8faf74e8e217ed490c8acd1b3a1d8a022116ab474c92db40a3f23d2277aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f6d8faf74e8e217ed490c8acd1b3a1d8a022116ab474c92db40a3f23d2277aa9->leave($__internal_f6d8faf74e8e217ed490c8acd1b3a1d8a022116ab474c92db40a3f23d2277aa9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82e6cec41eb54d6a53ed5409a4f31383c9cd10095c49bb54c117e7fe796b640e = $this->env->getExtension("native_profiler");
        $__internal_82e6cec41eb54d6a53ed5409a4f31383c9cd10095c49bb54c117e7fe796b640e->enter($__internal_82e6cec41eb54d6a53ed5409a4f31383c9cd10095c49bb54c117e7fe796b640e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_82e6cec41eb54d6a53ed5409a4f31383c9cd10095c49bb54c117e7fe796b640e->leave($__internal_82e6cec41eb54d6a53ed5409a4f31383c9cd10095c49bb54c117e7fe796b640e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_93c45ee8385ff6e77d10e1300b0b9ff06bb3991efa9a9f65f768eaffa521a6af = $this->env->getExtension("native_profiler");
        $__internal_93c45ee8385ff6e77d10e1300b0b9ff06bb3991efa9a9f65f768eaffa521a6af->enter($__internal_93c45ee8385ff6e77d10e1300b0b9ff06bb3991efa9a9f65f768eaffa521a6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93c45ee8385ff6e77d10e1300b0b9ff06bb3991efa9a9f65f768eaffa521a6af->leave($__internal_93c45ee8385ff6e77d10e1300b0b9ff06bb3991efa9a9f65f768eaffa521a6af_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e583d65f189530ba95927100d496b22dd6d18f7dd949ce6c9f3f550f08fded54 = $this->env->getExtension("native_profiler");
        $__internal_e583d65f189530ba95927100d496b22dd6d18f7dd949ce6c9f3f550f08fded54->enter($__internal_e583d65f189530ba95927100d496b22dd6d18f7dd949ce6c9f3f550f08fded54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e583d65f189530ba95927100d496b22dd6d18f7dd949ce6c9f3f550f08fded54->leave($__internal_e583d65f189530ba95927100d496b22dd6d18f7dd949ce6c9f3f550f08fded54_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
