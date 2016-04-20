<?php

/* core/themes/stable/templates/admin/views-ui-display-tab-bucket.html.twig */
class __TwigTemplate_638ccc3c484d4c5548df24040e679f1fdbdabb2148bfd9c3c2a9c1cfb3660ea6 extends Twig_Template
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
        $__internal_01bc3b6a915d9f164b1169e18ceb91e90fd7e0185e35c3ba67893d7b5341854f = $this->env->getExtension("native_profiler");
        $__internal_01bc3b6a915d9f164b1169e18ceb91e90fd7e0185e35c3ba67893d7b5341854f->enter($__internal_01bc3b6a915d9f164b1169e18ceb91e90fd7e0185e35c3ba67893d7b5341854f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-display-tab-bucket.html.twig"));

        $tags = array("set" => 19, "if" => 26);
        $filters = array("clean_class" => 21);
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

        // line 19
        $context["classes"] = array(0 => "views-ui-display-tab-bucket", 1 => ((        // line 21
(isset($context["name"]) ? $context["name"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["name"]) ? $context["name"] : null))) : ("")), 2 => ((        // line 22
(isset($context["overridden"]) ? $context["overridden"] : null)) ? ("overridden") : ("")));
        // line 25
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 26
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 27
            echo "<h3 class=\"views-ui-display-tab-bucket__title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>";
        }
        // line 29
        echo "  ";
        if ((isset($context["actions"]) ? $context["actions"] : null)) {
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["actions"]) ? $context["actions"] : null), "html", null, true));
        }
        // line 32
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_01bc3b6a915d9f164b1169e18ceb91e90fd7e0185e35c3ba67893d7b5341854f->leave($__internal_01bc3b6a915d9f164b1169e18ceb91e90fd7e0185e35c3ba67893d7b5341854f_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-display-tab-bucket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 32,  65 => 30,  62 => 29,  57 => 27,  55 => 26,  50 => 25,  48 => 22,  47 => 21,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for each "box" on the display query edit screen.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes to apply to the container element.*/
/*  * - actions: Action links such as "Add", "And/Or, Rearrange" for the content.*/
/*  * - title: The title of the bucket, e.g. "Fields", "Filter Criteria", etc.*/
/*  * - content: Content items such as fields or settings in this container.*/
/*  * - name: The name of the bucket, e.g. "Fields", "Filter Criteria", etc.*/
/*  * - overridden: A boolean indicating the setting has been overridden from the*/
/*  *   default.*/
/*  **/
/*  * @see template_preprocess_views_ui_display_tab_bucket()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'views-ui-display-tab-bucket',*/
/*     name ? name|clean_class,*/
/*     overridden ? 'overridden',*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% if title -%}*/
/*     <h3 class="views-ui-display-tab-bucket__title">{{ title }}</h3>*/
/*   {%- endif %}*/
/*   {% if actions -%}*/
/*     {{ actions }}*/
/*   {%- endif %}*/
/*   {{ content }}*/
/* </div>*/
/* */
