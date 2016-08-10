<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c8f5ecbb3453e06af94a2a97c9afa392d92898c5c320562408f98efe65b884c1 extends Twig_Template
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
        $__internal_5fa9167b168b9a3d77ab336170261bfb2eb20221391769300a4377ecd6ce2b4a = $this->env->getExtension("native_profiler");
        $__internal_5fa9167b168b9a3d77ab336170261bfb2eb20221391769300a4377ecd6ce2b4a->enter($__internal_5fa9167b168b9a3d77ab336170261bfb2eb20221391769300a4377ecd6ce2b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5fa9167b168b9a3d77ab336170261bfb2eb20221391769300a4377ecd6ce2b4a->leave($__internal_5fa9167b168b9a3d77ab336170261bfb2eb20221391769300a4377ecd6ce2b4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
