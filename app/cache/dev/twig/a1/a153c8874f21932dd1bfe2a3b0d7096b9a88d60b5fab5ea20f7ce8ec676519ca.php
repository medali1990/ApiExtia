<?php

/* base.html.twig */
class __TwigTemplate_6701761fb7cf8bb148ad46dec89b57cf1d990bd771e636cbadd246a184a495b7 extends Twig_Template
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
        $__internal_acd53ea24491fac2ee203694976943f0d202cbf9c722a49fe959980649f8159e = $this->env->getExtension("native_profiler");
        $__internal_acd53ea24491fac2ee203694976943f0d202cbf9c722a49fe959980649f8159e->enter($__internal_acd53ea24491fac2ee203694976943f0d202cbf9c722a49fe959980649f8159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_acd53ea24491fac2ee203694976943f0d202cbf9c722a49fe959980649f8159e->leave($__internal_acd53ea24491fac2ee203694976943f0d202cbf9c722a49fe959980649f8159e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_498f3e20b5ba6a202a89d66219049b2785f5146d96c942decfe40161a1cb7adc = $this->env->getExtension("native_profiler");
        $__internal_498f3e20b5ba6a202a89d66219049b2785f5146d96c942decfe40161a1cb7adc->enter($__internal_498f3e20b5ba6a202a89d66219049b2785f5146d96c942decfe40161a1cb7adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_498f3e20b5ba6a202a89d66219049b2785f5146d96c942decfe40161a1cb7adc->leave($__internal_498f3e20b5ba6a202a89d66219049b2785f5146d96c942decfe40161a1cb7adc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d0b54a96efb5360f59a0856f630a2313e82fc8e07e06068d784563f7b08347f = $this->env->getExtension("native_profiler");
        $__internal_2d0b54a96efb5360f59a0856f630a2313e82fc8e07e06068d784563f7b08347f->enter($__internal_2d0b54a96efb5360f59a0856f630a2313e82fc8e07e06068d784563f7b08347f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2d0b54a96efb5360f59a0856f630a2313e82fc8e07e06068d784563f7b08347f->leave($__internal_2d0b54a96efb5360f59a0856f630a2313e82fc8e07e06068d784563f7b08347f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b1378d5368de910297bdc308478b52a2425dd085002b0d4f0139da2173a5484 = $this->env->getExtension("native_profiler");
        $__internal_1b1378d5368de910297bdc308478b52a2425dd085002b0d4f0139da2173a5484->enter($__internal_1b1378d5368de910297bdc308478b52a2425dd085002b0d4f0139da2173a5484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1b1378d5368de910297bdc308478b52a2425dd085002b0d4f0139da2173a5484->leave($__internal_1b1378d5368de910297bdc308478b52a2425dd085002b0d4f0139da2173a5484_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2834c3e5756b81a8d043276d360e3312a6603de1d3d20c07504bc4117d9e240 = $this->env->getExtension("native_profiler");
        $__internal_a2834c3e5756b81a8d043276d360e3312a6603de1d3d20c07504bc4117d9e240->enter($__internal_a2834c3e5756b81a8d043276d360e3312a6603de1d3d20c07504bc4117d9e240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a2834c3e5756b81a8d043276d360e3312a6603de1d3d20c07504bc4117d9e240->leave($__internal_a2834c3e5756b81a8d043276d360e3312a6603de1d3d20c07504bc4117d9e240_prof);

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
