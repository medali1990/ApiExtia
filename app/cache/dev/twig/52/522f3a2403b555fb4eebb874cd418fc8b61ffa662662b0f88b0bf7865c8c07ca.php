<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_e9b6d7165fe10a5815d1e42d367c2c349cb4208a90bfff347950483a0e2a9a66 extends Twig_Template
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
        $__internal_7ebd21552ba97e7f5ce2e8bbf6b2170919a716268cbdd3f2f620ca207b010fff = $this->env->getExtension("native_profiler");
        $__internal_7ebd21552ba97e7f5ce2e8bbf6b2170919a716268cbdd3f2f620ca207b010fff->enter($__internal_7ebd21552ba97e7f5ce2e8bbf6b2170919a716268cbdd3f2f620ca207b010fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_7ebd21552ba97e7f5ce2e8bbf6b2170919a716268cbdd3f2f620ca207b010fff->leave($__internal_7ebd21552ba97e7f5ce2e8bbf6b2170919a716268cbdd3f2f620ca207b010fff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
