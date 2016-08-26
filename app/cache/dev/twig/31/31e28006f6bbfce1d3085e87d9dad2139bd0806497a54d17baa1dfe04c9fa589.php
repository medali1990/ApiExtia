<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8724488bd716ef3dfe36feb690c914b9490134e569fa74ef5db10fc182dd2bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aba3a4fa73b16a5ca38a6c789699006088722c5f6fb1816b9c3c4fc2a8cc7271 = $this->env->getExtension("native_profiler");
        $__internal_aba3a4fa73b16a5ca38a6c789699006088722c5f6fb1816b9c3c4fc2a8cc7271->enter($__internal_aba3a4fa73b16a5ca38a6c789699006088722c5f6fb1816b9c3c4fc2a8cc7271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aba3a4fa73b16a5ca38a6c789699006088722c5f6fb1816b9c3c4fc2a8cc7271->leave($__internal_aba3a4fa73b16a5ca38a6c789699006088722c5f6fb1816b9c3c4fc2a8cc7271_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_efd260442ff8f321f49bfa2293d27f01fe293b69caf2f26cb421a28734ee020d = $this->env->getExtension("native_profiler");
        $__internal_efd260442ff8f321f49bfa2293d27f01fe293b69caf2f26cb421a28734ee020d->enter($__internal_efd260442ff8f321f49bfa2293d27f01fe293b69caf2f26cb421a28734ee020d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_efd260442ff8f321f49bfa2293d27f01fe293b69caf2f26cb421a28734ee020d->leave($__internal_efd260442ff8f321f49bfa2293d27f01fe293b69caf2f26cb421a28734ee020d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_95443a603add72209f69986b826d0f17bee7d541d281bda01255d607e046ee73 = $this->env->getExtension("native_profiler");
        $__internal_95443a603add72209f69986b826d0f17bee7d541d281bda01255d607e046ee73->enter($__internal_95443a603add72209f69986b826d0f17bee7d541d281bda01255d607e046ee73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_95443a603add72209f69986b826d0f17bee7d541d281bda01255d607e046ee73->leave($__internal_95443a603add72209f69986b826d0f17bee7d541d281bda01255d607e046ee73_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
