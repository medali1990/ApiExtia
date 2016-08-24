<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bf088b3ff4f7aaf277a1a7cbd92de3f5bf603a20b7d04aaccf0baef7c93f6607 extends Twig_Template
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
        $__internal_9b60937bcd4911b531a85f7cb50d50453117a27188cbfecd307f535bef849116 = $this->env->getExtension("native_profiler");
        $__internal_9b60937bcd4911b531a85f7cb50d50453117a27188cbfecd307f535bef849116->enter($__internal_9b60937bcd4911b531a85f7cb50d50453117a27188cbfecd307f535bef849116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9b60937bcd4911b531a85f7cb50d50453117a27188cbfecd307f535bef849116->leave($__internal_9b60937bcd4911b531a85f7cb50d50453117a27188cbfecd307f535bef849116_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
