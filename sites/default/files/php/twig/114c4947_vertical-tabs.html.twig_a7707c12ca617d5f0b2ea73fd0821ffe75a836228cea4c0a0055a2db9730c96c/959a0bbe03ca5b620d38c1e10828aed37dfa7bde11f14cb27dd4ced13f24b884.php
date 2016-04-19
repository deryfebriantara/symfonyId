<?php

/* core/themes/classy/templates/navigation/vertical-tabs.html.twig */
class __TwigTemplate_3d3536787a0c7283f6c4ba4d0f3be9e15c638dff6c226ca3c2b0787b5f485f22 extends Twig_Template
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
        $__internal_9265864459e09bf071ac0104c5f519691f232fbe4a78e64a018e66118d78ef34 = $this->env->getExtension("native_profiler");
        $__internal_9265864459e09bf071ac0104c5f519691f232fbe4a78e64a018e66118d78ef34->enter($__internal_9265864459e09bf071ac0104c5f519691f232fbe4a78e64a018e66118d78ef34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/vertical-tabs.html.twig"));

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
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "setAttribute", array(0 => "data-vertical-tabs-panes", 1 => true), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_9265864459e09bf071ac0104c5f519691f232fbe4a78e64a018e66118d78ef34->leave($__internal_9265864459e09bf071ac0104c5f519691f232fbe4a78e64a018e66118d78ef34_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/vertical-tabs.html.twig";
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
/*  * Theme override for vertical tabs.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The rendered tabs.*/
/*  **/
/*  * @see template_preprocess_vertical_tabs()*/
/*  *//* */
/* #}*/
/* <div{{ attributes.setAttribute('data-vertical-tabs-panes', TRUE) }}>{{ children }}</div>*/
/* */
