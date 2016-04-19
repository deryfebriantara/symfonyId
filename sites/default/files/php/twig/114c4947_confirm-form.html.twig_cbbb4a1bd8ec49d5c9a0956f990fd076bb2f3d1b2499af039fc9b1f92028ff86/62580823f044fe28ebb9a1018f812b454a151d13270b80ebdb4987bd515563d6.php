<?php

/* core/themes/classy/templates/form/confirm-form.html.twig */
class __TwigTemplate_f410b29622d8521586e2bc59481af9d71950c1831f84393fe4b82ca4799bd22d extends Twig_Template
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
        $__internal_67154873cfa07a634e1104e3fae1d5a08f8fc8f6e2395c0f5152e2769b5310a8 = $this->env->getExtension("native_profiler");
        $__internal_67154873cfa07a634e1104e3fae1d5a08f8fc8f6e2395c0f5152e2769b5310a8->enter($__internal_67154873cfa07a634e1104e3fae1d5a08f8fc8f6e2395c0f5152e2769b5310a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/confirm-form.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "
";
        
        $__internal_67154873cfa07a634e1104e3fae1d5a08f8fc8f6e2395c0f5152e2769b5310a8->leave($__internal_67154873cfa07a634e1104e3fae1d5a08f8fc8f6e2395c0f5152e2769b5310a8_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/confirm-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for confirm form.*/
/*  **/
/*  * By default this does not alter the appearance of a form at all,*/
/*  * but is provided as a convenience for themers.*/
/*  **/
/*  * Available variables:*/
/*  * - form: The confirm form.*/
/*  *//* */
/* #}*/
/* {{ form }}*/
/* */
