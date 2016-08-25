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
        $__internal_a121b7494bbb0776d95d257d99253b6f85720795929b1ae5c309f737cbb02779 = $this->env->getExtension("native_profiler");
        $__internal_a121b7494bbb0776d95d257d99253b6f85720795929b1ae5c309f737cbb02779->enter($__internal_a121b7494bbb0776d95d257d99253b6f85720795929b1ae5c309f737cbb02779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a121b7494bbb0776d95d257d99253b6f85720795929b1ae5c309f737cbb02779->leave($__internal_a121b7494bbb0776d95d257d99253b6f85720795929b1ae5c309f737cbb02779_prof);

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
