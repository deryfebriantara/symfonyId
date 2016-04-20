<?php

/* core/themes/stable/templates/admin/admin-page.html.twig */
class __TwigTemplate_816ef1458e4230fc1966d0bed35a827c98459ccb70081b16b771985c0f3de2dc extends Twig_Template
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
        $__internal_192b07dad6dcbc7f3bb6fb9c747c33a3e2c1c7bb07fe5f014bc5b901beed1ebf = $this->env->getExtension("native_profiler");
        $__internal_192b07dad6dcbc7f3bb6fb9c747c33a3e2c1c7bb07fe5f014bc5b901beed1ebf->enter($__internal_192b07dad6dcbc7f3bb6fb9c747c33a3e2c1c7bb07fe5f014bc5b901beed1ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/admin-page.html.twig"));

        $tags = array("for" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 15
        echo "
<div class=\"clearfix\">
  ";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["system_compact_link"]) ? $context["system_compact_link"] : null), "html", null, true));
        echo "
  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) ? $context["containers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["container"]) {
            // line 19
            echo "    <div class=\"layout-column layout-column--half\">
      ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["container"], "blocks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 21
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["block"], "html", null, true));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
";
        
        $__internal_192b07dad6dcbc7f3bb6fb9c747c33a3e2c1c7bb07fe5f014bc5b901beed1ebf->leave($__internal_192b07dad6dcbc7f3bb6fb9c747c33a3e2c1c7bb07fe5f014bc5b901beed1ebf_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/admin-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  74 => 23,  65 => 21,  61 => 20,  58 => 19,  54 => 18,  50 => 17,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an administrative page.*/
/*  **/
/*  * Available variables:*/
/*  * - system_compact_link: Themed link to toggle compact view.*/
/*  * - containers: An list of administrative blocks keyed by position: left or*/
/*  *   right. Contains:*/
/*  *   - blocks: A list of blocks within a container.*/
/*  **/
/*  * @see template_preprocess_admin_page()*/
/*  *//* */
/* #}*/
/* */
/* <div class="clearfix">*/
/*   {{ system_compact_link }}*/
/*   {% for container in containers %}*/
/*     <div class="layout-column layout-column--half">*/
/*       {% for block in container.blocks %}*/
/*         {{ block }}*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
