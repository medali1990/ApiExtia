<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9f3a10165d3cc629ca09c870870aaabf11a58218e3269dd2d2f3d201275284b2 extends Twig_Template
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
        $__internal_eead5ffca475aeefb5110c83b3787c5442956921838cc551b4fd7cb16ddce64a = $this->env->getExtension("native_profiler");
        $__internal_eead5ffca475aeefb5110c83b3787c5442956921838cc551b4fd7cb16ddce64a->enter($__internal_eead5ffca475aeefb5110c83b3787c5442956921838cc551b4fd7cb16ddce64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_eead5ffca475aeefb5110c83b3787c5442956921838cc551b4fd7cb16ddce64a->leave($__internal_eead5ffca475aeefb5110c83b3787c5442956921838cc551b4fd7cb16ddce64a_prof);

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
