<?php

/* {# inline_template_start #}<center>
<div  class="left">
<div class = "col-sm-12 col-md-9">
    <div class = "thumbnail-tutorial">
        {{ field_image }}
    </div>
 <div class="captionss">
        <h2>{{ title }}</h2>
         <h6> {{ view_node }} </h6>
        <p> Authored By: {{ field_author }} On {{ created }}</p>
    </div>
    </div>
</div>
</center> */
class __TwigTemplate_4e480d1584bbdc5d143dd95c1420eb3c7e39f92908be2f905f7a996d3526faeb extends Twig_Template
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

        // line 1
        echo "<center>
<div  class=\"left\">
<div class = \"col-sm-12 col-md-9\">
    <div class = \"thumbnail-tutorial\">
        ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
    </div>
 <div class=\"captionss\">
        <h2>";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>
         <h6> ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["view_node"]) ? $context["view_node"] : null), "html", null, true));
        echo " </h6>
        <p> Authored By: ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_author"]) ? $context["field_author"] : null), "html", null, true));
        echo " On ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</p>
    </div>
    </div>
</div>
</center>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<center>
<div  class=\"left\">
<div class = \"col-sm-12 col-md-9\">
    <div class = \"thumbnail-tutorial\">
        {{ field_image }}
    </div>
 <div class=\"captionss\">
        <h2>{{ title }}</h2>
         <h6> {{ view_node }} </h6>
        <p> Authored By: {{ field_author }} On {{ created }}</p>
    </div>
    </div>
</div>
</center>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  72 => 9,  68 => 8,  62 => 5,  56 => 1,);
    }
}
/* {# inline_template_start #}<center>*/
/* <div  class="left">*/
/* <div class = "col-sm-12 col-md-9">*/
/*     <div class = "thumbnail-tutorial">*/
/*         {{ field_image }}*/
/*     </div>*/
/*  <div class="captionss">*/
/*         <h2>{{ title }}</h2>*/
/*          <h6> {{ view_node }} </h6>*/
/*         <p> Authored By: {{ field_author }} On {{ created }}</p>*/
/*     </div>*/
/*     </div>*/
/* </div>*/
/* </center>*/
