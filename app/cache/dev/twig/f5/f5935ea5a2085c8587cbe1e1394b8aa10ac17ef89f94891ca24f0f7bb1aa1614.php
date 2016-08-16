<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_6c81b87dc553419b7e06d8595eddd30cca6bf37509d43c21a226d25f0202d06b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4189f9b12dc61d709d4c3aa579de1628c4d8c30ea47f70186a08d88fa5fc804a = $this->env->getExtension("native_profiler");
        $__internal_4189f9b12dc61d709d4c3aa579de1628c4d8c30ea47f70186a08d88fa5fc804a->enter($__internal_4189f9b12dc61d709d4c3aa579de1628c4d8c30ea47f70186a08d88fa5fc804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4189f9b12dc61d709d4c3aa579de1628c4d8c30ea47f70186a08d88fa5fc804a->leave($__internal_4189f9b12dc61d709d4c3aa579de1628c4d8c30ea47f70186a08d88fa5fc804a_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_3b4e1187dd82dd6faaddc9136fd142499e79c77f1c33624e06b6f119f2f1247f = $this->env->getExtension("native_profiler");
        $__internal_3b4e1187dd82dd6faaddc9136fd142499e79c77f1c33624e06b6f119f2f1247f->enter($__internal_3b4e1187dd82dd6faaddc9136fd142499e79c77f1c33624e06b6f119f2f1247f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3b4e1187dd82dd6faaddc9136fd142499e79c77f1c33624e06b6f119f2f1247f->leave($__internal_3b4e1187dd82dd6faaddc9136fd142499e79c77f1c33624e06b6f119f2f1247f_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_057fbe8d255bac651bf749c5c603d7b7682143b7681b9fa93f5aa365d1626ad6 = $this->env->getExtension("native_profiler");
        $__internal_057fbe8d255bac651bf749c5c603d7b7682143b7681b9fa93f5aa365d1626ad6->enter($__internal_057fbe8d255bac651bf749c5c603d7b7682143b7681b9fa93f5aa365d1626ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_057fbe8d255bac651bf749c5c603d7b7682143b7681b9fa93f5aa365d1626ad6->leave($__internal_057fbe8d255bac651bf749c5c603d7b7682143b7681b9fa93f5aa365d1626ad6_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_761ecbf76c0beeb4e19234a4b33cbf4c99968a1ded91226dd4aa8824e1382193 = $this->env->getExtension("native_profiler");
        $__internal_761ecbf76c0beeb4e19234a4b33cbf4c99968a1ded91226dd4aa8824e1382193->enter($__internal_761ecbf76c0beeb4e19234a4b33cbf4c99968a1ded91226dd4aa8824e1382193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_761ecbf76c0beeb4e19234a4b33cbf4c99968a1ded91226dd4aa8824e1382193->leave($__internal_761ecbf76c0beeb4e19234a4b33cbf4c99968a1ded91226dd4aa8824e1382193_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
