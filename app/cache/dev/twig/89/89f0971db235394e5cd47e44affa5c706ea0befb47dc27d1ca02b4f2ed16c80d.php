<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8c9618a06ff608cd9ab3eca4432eb8e1fba9f9cd4b60a751c7cfafb7f841be6d extends Twig_Template
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
        $__internal_2a2218be0679790139bcb0df5d6fea3a41405800053b0ff4324fd86dd49e19e8 = $this->env->getExtension("native_profiler");
        $__internal_2a2218be0679790139bcb0df5d6fea3a41405800053b0ff4324fd86dd49e19e8->enter($__internal_2a2218be0679790139bcb0df5d6fea3a41405800053b0ff4324fd86dd49e19e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2a2218be0679790139bcb0df5d6fea3a41405800053b0ff4324fd86dd49e19e8->leave($__internal_2a2218be0679790139bcb0df5d6fea3a41405800053b0ff4324fd86dd49e19e8_prof);

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
