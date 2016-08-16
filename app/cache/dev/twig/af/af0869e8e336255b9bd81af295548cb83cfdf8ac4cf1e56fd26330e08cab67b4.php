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
        $__internal_0111e8c6df038aeda2fd009b41039a8880e8888c940b8113aafd3b85e88137d8 = $this->env->getExtension("native_profiler");
        $__internal_0111e8c6df038aeda2fd009b41039a8880e8888c940b8113aafd3b85e88137d8->enter($__internal_0111e8c6df038aeda2fd009b41039a8880e8888c940b8113aafd3b85e88137d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0111e8c6df038aeda2fd009b41039a8880e8888c940b8113aafd3b85e88137d8->leave($__internal_0111e8c6df038aeda2fd009b41039a8880e8888c940b8113aafd3b85e88137d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1926e06617faf9446462436d0dabe307085206ff1e36f29b8602f8a40f396bba = $this->env->getExtension("native_profiler");
        $__internal_1926e06617faf9446462436d0dabe307085206ff1e36f29b8602f8a40f396bba->enter($__internal_1926e06617faf9446462436d0dabe307085206ff1e36f29b8602f8a40f396bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1926e06617faf9446462436d0dabe307085206ff1e36f29b8602f8a40f396bba->leave($__internal_1926e06617faf9446462436d0dabe307085206ff1e36f29b8602f8a40f396bba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9336fb4fa9d4ed7aa350a7a07d35a6027f4c72ca8d2a0fd3d192993953fc405f = $this->env->getExtension("native_profiler");
        $__internal_9336fb4fa9d4ed7aa350a7a07d35a6027f4c72ca8d2a0fd3d192993953fc405f->enter($__internal_9336fb4fa9d4ed7aa350a7a07d35a6027f4c72ca8d2a0fd3d192993953fc405f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9336fb4fa9d4ed7aa350a7a07d35a6027f4c72ca8d2a0fd3d192993953fc405f->leave($__internal_9336fb4fa9d4ed7aa350a7a07d35a6027f4c72ca8d2a0fd3d192993953fc405f_prof);

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
