<?php

/* modules/social_login/templates/provider-container.html.twig */
class __TwigTemplate_05edb53f59e551b4d0fa05682977b4373149ee65face5d81b464384a5be7bc82 extends Twig_Template
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
        $tags = array("if" => 8);
        $filters = array("raw" => 14);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('raw'),
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

        // line 7
        echo "<div class=\"social_login\" style=\"margin:20px 0 10px 0\">
 ";
        // line 8
        if ( !twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            echo "<label>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</label>";
        }
        // line 9
        echo " <div id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["containerid"]) ? $context["containerid"] : null), "html", null, true));
        echo "\"></div>
</div>

<script type=\"text/javascript\">
\tvar _oneall = _oneall || [];
\t_oneall.push([\"";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["plugintype"]) ? $context["plugintype"] : null), "html", null, true));
        echo "\", \"set_providers\", [";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["providers"]) ? $context["providers"] : null)));
        echo "]]);
\t_oneall.push([\"";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["plugintype"]) ? $context["plugintype"] : null), "html", null, true));
        echo "\", \"set_callback_uri\", \"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["callbackuri"]) ? $context["callbackuri"] : null), "html", null, true));
        echo "\"]);
\t_oneall.push([\"";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["plugintype"]) ? $context["plugintype"] : null), "html", null, true));
        echo "\", \"set_force_re_authentication\",
\t\t";
        // line 17
        if (((isset($context["plugin_type"]) ? $context["plugin_type"] : null) == "social_link")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "]);
\t";
        // line 18
        if ( !twig_test_empty((isset($context["token"]) ? $context["token"] : null))) {
            // line 19
            echo "\t\t_oneall.push([\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["plugintype"]) ? $context["plugintype"] : null), "html", null, true));
            echo "\", \"set_user_token\", \"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true));
            echo "\"]);
\t";
        }
        // line 21
        echo "\t_oneall.push([\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["plugintype"]) ? $context["plugintype"] : null), "html", null, true));
        echo "\", \"do_render_ui\", \"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["containerid"]) ? $context["containerid"] : null), "html", null, true));
        echo "\"]);
</script>
";
    }

    public function getTemplateName()
    {
        return "modules/social_login/templates/provider-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  87 => 19,  85 => 18,  77 => 17,  73 => 16,  67 => 15,  61 => 14,  52 => 9,  46 => 8,  43 => 7,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Container in which the social network icons are displayed.*/
/*  *//* */
/* #}*/
/* <div class="social_login" style="margin:20px 0 10px 0">*/
/*  {% if label is not empty %}<label>{{ label }}</label>{% endif %}*/
/*  <div id="{{ containerid }}"></div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* 	var _oneall = _oneall || [];*/
/* 	_oneall.push(["{{ plugintype }}", "set_providers", [{{ providers | raw }}]]);*/
/* 	_oneall.push(["{{ plugintype }}", "set_callback_uri", "{{ callbackuri }}"]);*/
/* 	_oneall.push(["{{ plugintype }}", "set_force_re_authentication",*/
/* 		{% if plugin_type == 'social_link' %}true{% else %}false{% endif %}]);*/
/* 	{% if token is not empty %}*/
/* 		_oneall.push(["{{ plugintype }}", "set_user_token", "{{ token }}"]);*/
/* 	{% endif %}*/
/* 	_oneall.push(["{{ plugintype }}", "do_render_ui", "{{ containerid }}"]);*/
/* </script>*/
/* */
