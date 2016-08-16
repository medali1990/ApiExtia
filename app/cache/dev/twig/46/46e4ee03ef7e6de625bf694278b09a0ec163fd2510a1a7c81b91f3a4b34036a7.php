<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_baaa94b0e12271cb7670d1922c85884742e67aabab228d0e45fa4ef66288a849 extends Twig_Template
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
        $__internal_39bedd10876ec03ecc9608e7cfe1a67e5586079dfe0a308b029f23f6f6c87c6a = $this->env->getExtension("native_profiler");
        $__internal_39bedd10876ec03ecc9608e7cfe1a67e5586079dfe0a308b029f23f6f6c87c6a->enter($__internal_39bedd10876ec03ecc9608e7cfe1a67e5586079dfe0a308b029f23f6f6c87c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_39bedd10876ec03ecc9608e7cfe1a67e5586079dfe0a308b029f23f6f6c87c6a->leave($__internal_39bedd10876ec03ecc9608e7cfe1a67e5586079dfe0a308b029f23f6f6c87c6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
