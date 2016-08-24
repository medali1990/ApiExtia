<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_61edff4b185871dea180386ecd1668aac0a97a093fc2780362471e4655216f4c extends Twig_Template
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
        $__internal_4a01d90dbafd222203ba2d08c021b4a2b9c9a2e23022a0a0919bb7fbbdf13209 = $this->env->getExtension("native_profiler");
        $__internal_4a01d90dbafd222203ba2d08c021b4a2b9c9a2e23022a0a0919bb7fbbdf13209->enter($__internal_4a01d90dbafd222203ba2d08c021b4a2b9c9a2e23022a0a0919bb7fbbdf13209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a01d90dbafd222203ba2d08c021b4a2b9c9a2e23022a0a0919bb7fbbdf13209->leave($__internal_4a01d90dbafd222203ba2d08c021b4a2b9c9a2e23022a0a0919bb7fbbdf13209_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b59c7b0feb1691d62c245fb54103f9eb0ce2b814208f27a96b7f80fdbc4e42a = $this->env->getExtension("native_profiler");
        $__internal_7b59c7b0feb1691d62c245fb54103f9eb0ce2b814208f27a96b7f80fdbc4e42a->enter($__internal_7b59c7b0feb1691d62c245fb54103f9eb0ce2b814208f27a96b7f80fdbc4e42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7b59c7b0feb1691d62c245fb54103f9eb0ce2b814208f27a96b7f80fdbc4e42a->leave($__internal_7b59c7b0feb1691d62c245fb54103f9eb0ce2b814208f27a96b7f80fdbc4e42a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1678ef3cc8ed462ff79290542343c215f45a91c9736c7daa08ac6ba568ef8d92 = $this->env->getExtension("native_profiler");
        $__internal_1678ef3cc8ed462ff79290542343c215f45a91c9736c7daa08ac6ba568ef8d92->enter($__internal_1678ef3cc8ed462ff79290542343c215f45a91c9736c7daa08ac6ba568ef8d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1678ef3cc8ed462ff79290542343c215f45a91c9736c7daa08ac6ba568ef8d92->leave($__internal_1678ef3cc8ed462ff79290542343c215f45a91c9736c7daa08ac6ba568ef8d92_prof);

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
