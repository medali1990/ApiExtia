<?php

/* ::base.html.twig */
class __TwigTemplate_7b24304a1f26dd3a3d471ec6c741a627e0dc320a619c11755c12ff2d61389f29 extends Twig_Template
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
        $__internal_cd34a42244bb02cda28e3d943d2eef6fabb8e428c7cb0fa65bfd0a5cb6910179 = $this->env->getExtension("native_profiler");
        $__internal_cd34a42244bb02cda28e3d943d2eef6fabb8e428c7cb0fa65bfd0a5cb6910179->enter($__internal_cd34a42244bb02cda28e3d943d2eef6fabb8e428c7cb0fa65bfd0a5cb6910179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_cd34a42244bb02cda28e3d943d2eef6fabb8e428c7cb0fa65bfd0a5cb6910179->leave($__internal_cd34a42244bb02cda28e3d943d2eef6fabb8e428c7cb0fa65bfd0a5cb6910179_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6f47f144eddbc540a5af0c0791a70e94edeca3663a90bf157a2c11672d8146f = $this->env->getExtension("native_profiler");
        $__internal_d6f47f144eddbc540a5af0c0791a70e94edeca3663a90bf157a2c11672d8146f->enter($__internal_d6f47f144eddbc540a5af0c0791a70e94edeca3663a90bf157a2c11672d8146f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d6f47f144eddbc540a5af0c0791a70e94edeca3663a90bf157a2c11672d8146f->leave($__internal_d6f47f144eddbc540a5af0c0791a70e94edeca3663a90bf157a2c11672d8146f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87a746831c91be6147732ff780ba8167a315aaab0246c3bb69edc21ca83a8037 = $this->env->getExtension("native_profiler");
        $__internal_87a746831c91be6147732ff780ba8167a315aaab0246c3bb69edc21ca83a8037->enter($__internal_87a746831c91be6147732ff780ba8167a315aaab0246c3bb69edc21ca83a8037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87a746831c91be6147732ff780ba8167a315aaab0246c3bb69edc21ca83a8037->leave($__internal_87a746831c91be6147732ff780ba8167a315aaab0246c3bb69edc21ca83a8037_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e80be55a37ad12fa9e2ace9a82ca3ff060dd6f75d258525321a0c4b7815f89f = $this->env->getExtension("native_profiler");
        $__internal_9e80be55a37ad12fa9e2ace9a82ca3ff060dd6f75d258525321a0c4b7815f89f->enter($__internal_9e80be55a37ad12fa9e2ace9a82ca3ff060dd6f75d258525321a0c4b7815f89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e80be55a37ad12fa9e2ace9a82ca3ff060dd6f75d258525321a0c4b7815f89f->leave($__internal_9e80be55a37ad12fa9e2ace9a82ca3ff060dd6f75d258525321a0c4b7815f89f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7cd8f68739c12bdef0e7cdc0a3ea76e3d2d40ef6409d21171c0cad53521e541b = $this->env->getExtension("native_profiler");
        $__internal_7cd8f68739c12bdef0e7cdc0a3ea76e3d2d40ef6409d21171c0cad53521e541b->enter($__internal_7cd8f68739c12bdef0e7cdc0a3ea76e3d2d40ef6409d21171c0cad53521e541b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7cd8f68739c12bdef0e7cdc0a3ea76e3d2d40ef6409d21171c0cad53521e541b->leave($__internal_7cd8f68739c12bdef0e7cdc0a3ea76e3d2d40ef6409d21171c0cad53521e541b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
