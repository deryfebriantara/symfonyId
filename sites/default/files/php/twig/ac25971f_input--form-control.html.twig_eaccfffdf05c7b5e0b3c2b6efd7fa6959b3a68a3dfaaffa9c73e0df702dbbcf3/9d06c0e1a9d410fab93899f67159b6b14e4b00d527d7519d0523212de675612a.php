<?php

/* themes/bootstrap/templates/input/input--form-control.html.twig */
class __TwigTemplate_67902958f1b38290b5342a8c88fa9c4b8560e69ac8ab33ff16323610658108a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/bootstrap/templates/input/input--form-control.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbc8f547ef3b5ea7331fd752033f3d0002cae2f091890900b7e2d2a3093fa9e5 = $this->env->getExtension("native_profiler");
        $__internal_dbc8f547ef3b5ea7331fd752033f3d0002cae2f091890900b7e2d2a3093fa9e5->enter($__internal_dbc8f547ef3b5ea7331fd752033f3d0002cae2f091890900b7e2d2a3093fa9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/input--form-control.html.twig"));

        $tags = array("spaceless" => 23, "set" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'set'),
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

        // line 23
        ob_start();
        // line 25
        $context["classes"] = array(0 => "form-control");
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc8f547ef3b5ea7331fd752033f3d0002cae2f091890900b7e2d2a3093fa9e5->leave($__internal_dbc8f547ef3b5ea7331fd752033f3d0002cae2f091890900b7e2d2a3093fa9e5_prof);

    }

    // line 29
    public function block_input($context, array $blocks = array())
    {
        $__internal_519aeaed0ecb42af2b5ad6b416288f655f80987287127283c2ef6d0e9c8ad2a0 = $this->env->getExtension("native_profiler");
        $__internal_519aeaed0ecb42af2b5ad6b416288f655f80987287127283c2ef6d0e9c8ad2a0->enter($__internal_519aeaed0ecb42af2b5ad6b416288f655f80987287127283c2ef6d0e9c8ad2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        // line 30
        echo "    <input";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " />
  ";
        
        $__internal_519aeaed0ecb42af2b5ad6b416288f655f80987287127283c2ef6d0e9c8ad2a0->leave($__internal_519aeaed0ecb42af2b5ad6b416288f655f80987287127283c2ef6d0e9c8ad2a0_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/input--form-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 30,  64 => 29,  57 => 1,  54 => 25,  52 => 23,  11 => 1,);
    }
}
/* {% extends "input.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an 'input__textfield' #type form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the input element.*/
/*  * - children: Optional additional rendered elements.*/
/*  * - icon: An icon.*/
/*  * - input_group: Flag to display as an input group.*/
/*  * - icon_position: Where an icon should be displayed.*/
/*  * - prefix: Markup to display before the input element.*/
/*  * - suffix: Markup to display after the input element.*/
/*  * - type: The type of input.*/
/*  **/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\Input*/
/*  * @see template_preprocess_input()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   {%*/
/*     set classes = [*/
/*       'form-control',*/
/*     ]*/
/*   %}*/
/*   {% block input %}*/
/*     <input{{ attributes.addClass(classes) }} />*/
/*   {% endblock %}*/
/* {% endspaceless %}*/
/* */
