<?php

/* core/themes/classy/templates/layout/region.html.twig */
class __TwigTemplate_8986fb1875ecc526f39b36247d0ca60c02dc5f9514a40f3d4a398ec44586166f extends Twig_Template
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
        $__internal_4ae2ff526ac5afbc67e3e8ca6b4b597ec8b5c2f265e87dca44bb47bad6a77376 = $this->env->getExtension("native_profiler");
        $__internal_4ae2ff526ac5afbc67e3e8ca6b4b597ec8b5c2f265e87dca44bb47bad6a77376->enter($__internal_4ae2ff526ac5afbc67e3e8ca6b4b597ec8b5c2f265e87dca44bb47bad6a77376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/layout/region.html.twig"));

        $tags = array("set" => 16, "if" => 21);
        $filters = array("clean_class" => 18);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 16
        $context["classes"] = array(0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 18
(isset($context["region"]) ? $context["region"] : null))));
        // line 21
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 22
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  </div>
";
        }
        
        $__internal_4ae2ff526ac5afbc67e3e8ca6b4b597ec8b5c2f265e87dca44bb47bad6a77376->leave($__internal_4ae2ff526ac5afbc67e3e8ca6b4b597ec8b5c2f265e87dca44bb47bad6a77376_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  51 => 22,  49 => 21,  47 => 18,  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a region.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - attributes: HTML attributes for the region div.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'region',*/
/*     'region-' ~ region|clean_class,*/
/*   ]*/
/* %}*/
/* {% if content %}*/
/*   <div{{ attributes.addClass(classes) }}>*/
/*     {{ content }}*/
/*   </div>*/
/* {% endif %}*/
/* */