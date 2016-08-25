<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_70bcbc1eb800a2c4b5b36b06a24bdc25cd07a1cf5d050b2e151600e74e3153c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76507bafcf2a51e9dfee7f83192130f7f4bcc154c95eb009946a08b46c6624c3 = $this->env->getExtension("native_profiler");
        $__internal_76507bafcf2a51e9dfee7f83192130f7f4bcc154c95eb009946a08b46c6624c3->enter($__internal_76507bafcf2a51e9dfee7f83192130f7f4bcc154c95eb009946a08b46c6624c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_76507bafcf2a51e9dfee7f83192130f7f4bcc154c95eb009946a08b46c6624c3->leave($__internal_76507bafcf2a51e9dfee7f83192130f7f4bcc154c95eb009946a08b46c6624c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
