<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_34e7b65ffe7694b555344bbfef60a1a10b0c2034c4af319270b7f8901c63cb39 extends Twig_Template
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
        $__internal_e64f45544b9e1cce1401e6769c6a05542bdffc615da50f60be6bf821e0bf6bd7 = $this->env->getExtension("native_profiler");
        $__internal_e64f45544b9e1cce1401e6769c6a05542bdffc615da50f60be6bf821e0bf6bd7->enter($__internal_e64f45544b9e1cce1401e6769c6a05542bdffc615da50f60be6bf821e0bf6bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e64f45544b9e1cce1401e6769c6a05542bdffc615da50f60be6bf821e0bf6bd7->leave($__internal_e64f45544b9e1cce1401e6769c6a05542bdffc615da50f60be6bf821e0bf6bd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */