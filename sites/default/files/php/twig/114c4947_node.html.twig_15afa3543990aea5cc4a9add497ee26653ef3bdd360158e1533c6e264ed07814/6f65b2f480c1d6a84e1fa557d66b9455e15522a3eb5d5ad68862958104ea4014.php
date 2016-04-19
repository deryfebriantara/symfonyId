<?php

/* themes/bootstrap_clean_blog/templates/node.html.twig */
class __TwigTemplate_810cdf29adbeae0d6063cf46779b611c6255588061e7a9cb32c7f416887254a1 extends Twig_Template
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
        $__internal_51152b273b37f75207e25ac05a32007b24baa6593c140da60ae9e5e04cd7d3d9 = $this->env->getExtension("native_profiler");
        $__internal_51152b273b37f75207e25ac05a32007b24baa6593c140da60ae9e5e04cd7d3d9->enter($__internal_51152b273b37f75207e25ac05a32007b24baa6593c140da60ae9e5e04cd7d3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap_clean_blog/templates/node.html.twig"));

        $tags = array("if" => 11, "trans" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 8
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">

  ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 11
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 12
            echo "    <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">
      <a href=\"";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
    </h2>
  ";
        }
        // line 16
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

  ";
        // line 18
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 19
            echo "    <div class=\"post-meta submitted\">
      ";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
      <div";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_attributes"]) ? $context["author_attributes"] : null), "html", null, true));
            echo ">
        ";
            // line 22
            echo t("Posted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 23
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 27
        echo "
  <div";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  </div>

</article>
";
        
        $__internal_51152b273b37f75207e25ac05a32007b24baa6593c140da60ae9e5e04cd7d3d9->leave($__internal_51152b273b37f75207e25ac05a32007b24baa6593c140da60ae9e5e04cd7d3d9_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap_clean_blog/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  103 => 28,  100 => 27,  92 => 23,  90 => 22,  86 => 21,  82 => 20,  79 => 19,  77 => 18,  71 => 16,  63 => 13,  58 => 12,  56 => 11,  52 => 10,  46 => 8,);
    }
}
/* {#*/
/* */
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a node.*/
/*  *//* */
/* #}*/
/* <article{{ attributes }}>*/
/* */
/*   {{ title_prefix }}*/
/*   {% if not page %}*/
/*     <h2{{ title_attributes }}>*/
/*       <a href="{{ url }}" rel="bookmark">{{ label }}</a>*/
/*     </h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/* */
/*   {% if display_submitted %}*/
/*     <div class="post-meta submitted">*/
/*       {{ author_picture }}*/
/*       <div{{ author_attributes }}>*/
/*         {% trans %}Posted by {{ author_name }} on {{ date }}{% endtrans %}*/
/*         {{ metadata }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <div{{ content_attributes }}>*/
/*     {{ content }}*/
/*   </div>*/
/* */
/* </article>*/
/* */
