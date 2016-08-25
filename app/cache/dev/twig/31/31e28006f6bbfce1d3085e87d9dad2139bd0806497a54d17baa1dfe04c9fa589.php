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
        $__internal_c6d61650029a7ae70d800f38abd0f7aee6f680c03356869948ec2833975bbbd4 = $this->env->getExtension("native_profiler");
        $__internal_c6d61650029a7ae70d800f38abd0f7aee6f680c03356869948ec2833975bbbd4->enter($__internal_c6d61650029a7ae70d800f38abd0f7aee6f680c03356869948ec2833975bbbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d61650029a7ae70d800f38abd0f7aee6f680c03356869948ec2833975bbbd4->leave($__internal_c6d61650029a7ae70d800f38abd0f7aee6f680c03356869948ec2833975bbbd4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b72cad2b13a16fb908d90705e51bd3c7144667e59e7cf9568c4925e71fa17ed = $this->env->getExtension("native_profiler");
        $__internal_6b72cad2b13a16fb908d90705e51bd3c7144667e59e7cf9568c4925e71fa17ed->enter($__internal_6b72cad2b13a16fb908d90705e51bd3c7144667e59e7cf9568c4925e71fa17ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6b72cad2b13a16fb908d90705e51bd3c7144667e59e7cf9568c4925e71fa17ed->leave($__internal_6b72cad2b13a16fb908d90705e51bd3c7144667e59e7cf9568c4925e71fa17ed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0655b26355047e6cc147f329b2f0c81a9d6aeb1bb9b51b6cadee20d74700013 = $this->env->getExtension("native_profiler");
        $__internal_a0655b26355047e6cc147f329b2f0c81a9d6aeb1bb9b51b6cadee20d74700013->enter($__internal_a0655b26355047e6cc147f329b2f0c81a9d6aeb1bb9b51b6cadee20d74700013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a0655b26355047e6cc147f329b2f0c81a9d6aeb1bb9b51b6cadee20d74700013->leave($__internal_a0655b26355047e6cc147f329b2f0c81a9d6aeb1bb9b51b6cadee20d74700013_prof);

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
