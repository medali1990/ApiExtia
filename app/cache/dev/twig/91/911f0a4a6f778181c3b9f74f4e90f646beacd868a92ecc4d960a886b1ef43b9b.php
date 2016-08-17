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
        $__internal_8a61b96b4c0443c5cd0f4e40aaed1d0236897daf8059f57a0b48397d1b4ef9f0 = $this->env->getExtension("native_profiler");
        $__internal_8a61b96b4c0443c5cd0f4e40aaed1d0236897daf8059f57a0b48397d1b4ef9f0->enter($__internal_8a61b96b4c0443c5cd0f4e40aaed1d0236897daf8059f57a0b48397d1b4ef9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_8a61b96b4c0443c5cd0f4e40aaed1d0236897daf8059f57a0b48397d1b4ef9f0->leave($__internal_8a61b96b4c0443c5cd0f4e40aaed1d0236897daf8059f57a0b48397d1b4ef9f0_prof);

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
