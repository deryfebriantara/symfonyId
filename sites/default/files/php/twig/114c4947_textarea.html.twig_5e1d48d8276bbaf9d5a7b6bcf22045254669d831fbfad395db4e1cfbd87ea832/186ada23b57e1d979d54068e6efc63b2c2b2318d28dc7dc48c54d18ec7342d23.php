<?php

/* core/themes/classy/templates/form/textarea.html.twig */
class __TwigTemplate_ca6b78eca54ff9a351a9b6ed9989116e05f6b113da911496541b8dc9ff2f2aca extends Twig_Template
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
        $__internal_b9e8609596ca9e63474f15673554d449de80e520ab3a7500e0af05ebf98ed60a = $this->env->getExtension("native_profiler");
        $__internal_b9e8609596ca9e63474f15673554d449de80e520ab3a7500e0af05ebf98ed60a->enter($__internal_b9e8609596ca9e63474f15673554d449de80e520ab3a7500e0af05ebf98ed60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/textarea.html.twig"));

        $tags = array("set" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 17
        $context["classes"] = array(0 => "form-textarea", 1 => ((        // line 19
(isset($context["resizable"]) ? $context["resizable"] : null)) ? (("resize-" . (isset($context["resizable"]) ? $context["resizable"] : null))) : ("")), 2 => ((        // line 20
(isset($context["required"]) ? $context["required"] : null)) ? ("required") : ("")));
        // line 23
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", array(0 => "form-textarea-wrapper"), "method"), "html", null, true));
        echo ">
  <textarea";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        echo "</textarea>
</div>
";
        
        $__internal_b9e8609596ca9e63474f15673554d449de80e520ab3a7500e0af05ebf98ed60a->leave($__internal_b9e8609596ca9e63474f15673554d449de80e520ab3a7500e0af05ebf98ed60a_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 24,  50 => 23,  48 => 20,  47 => 19,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a 'textarea' #type form element.*/
/*  **/
/*  * Available variables*/
/*  * - wrapper_attributes: A list of HTML attributes for the wrapper element.*/
/*  * - attributes: A list of HTML attributes for the textarea element.*/
/*  * - resizable: An indicator for whether the textarea is resizable.*/
/*  * - required: An indicator for whether the textarea is required.*/
/*  * - value: The textarea content.*/
/*  **/
/*  * @see template_preprocess_textarea()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'form-textarea',*/
/*     resizable ? 'resize-' ~ resizable,*/
/*     required ? 'required',*/
/*   ]*/
/* %}*/
/* <div{{ wrapper_attributes.addClass('form-textarea-wrapper') }}>*/
/*   <textarea{{ attributes.addClass(classes) }}>{{ value }}</textarea>*/
/* </div>*/
/* */
