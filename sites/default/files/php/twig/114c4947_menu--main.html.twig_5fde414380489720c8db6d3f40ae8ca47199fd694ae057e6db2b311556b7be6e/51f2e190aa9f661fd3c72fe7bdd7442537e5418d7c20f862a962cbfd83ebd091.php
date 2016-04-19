<?php

/* themes/bootstrap_clean_blog/templates/menu--main.html.twig */
class __TwigTemplate_2d7a258e58bbfb23ddda84975d4cff19948f72126956503bdc2d8377eb13c65a extends Twig_Template
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
        $__internal_083a2376867677a1a869696cf8f6dc6cc0823f08377947570b418fc5006418ff = $this->env->getExtension("native_profiler");
        $__internal_083a2376867677a1a869696cf8f6dc6cc0823f08377947570b418fc5006418ff->enter($__internal_083a2376867677a1a869696cf8f6dc6cc0823f08377947570b418fc5006418ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap_clean_blog/templates/menu--main.html.twig"));

        $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 34);
        $filters = array();
        $functions = array("link" => 36);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for'),
                array(),
                array('link')
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

        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
        
        $__internal_083a2376867677a1a869696cf8f6dc6cc0823f08377947570b418fc5006418ff->leave($__internal_083a2376867677a1a869696cf8f6dc6cc0823f08377947570b418fc5006418ff_prof);

    }

    // line 26
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e839eba82f3199fc3339f3e08becb07906a928ec022b700ccd7e4bdbc2aa441f = $this->env->getExtension("native_profiler");
            $__internal_e839eba82f3199fc3339f3e08becb07906a928ec022b700ccd7e4bdbc2aa441f->enter($__internal_e839eba82f3199fc3339f3e08becb07906a928ec022b700ccd7e4bdbc2aa441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 29
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 30
                    echo "      <ul class=\"nav navbar-nav navbar-right\">
    ";
                } else {
                    // line 32
                    echo "      <ul class=\"menu\">
    ";
                }
                // line 34
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "        <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                    echo ">
          ";
                    // line 36
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
          ";
                    // line 37
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 38
                        echo "            ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
          ";
                    }
                    // line 40
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "    </ul>
  ";
            }
            
            $__internal_e839eba82f3199fc3339f3e08becb07906a928ec022b700ccd7e4bdbc2aa441f->leave($__internal_e839eba82f3199fc3339f3e08becb07906a928ec022b700ccd7e4bdbc2aa441f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_clean_blog/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  117 => 40,  111 => 38,  109 => 37,  105 => 36,  100 => 35,  95 => 34,  91 => 32,  87 => 30,  84 => 29,  81 => 28,  78 => 27,  61 => 26,  51 => 24,  48 => 19,  46 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*     {% else %}*/
/*       <ul class="menu">*/
/*     {% endif %}*/
/*       {% for item in items %}*/
/*         <li{{ item.attributes }}>*/
/*           {{ link(item.title, item.url) }}*/
/*           {% if item.below %}*/
/*             {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
