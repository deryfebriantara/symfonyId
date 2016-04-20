<?php

/* {# inline_template_start #}<strong>{% trans 'Title' %}</strong> */
class __TwigTemplate_5b5242f9e11b9bb7cacc662387d3987a831e898de735477dfb136afa3606dad7 extends Twig_Template
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
        $__internal_7983777f8998042e84624f7e4e390321135781aad867faacbabf6997cd2423ac = $this->env->getExtension("native_profiler");
        $__internal_7983777f8998042e84624f7e4e390321135781aad867faacbabf6997cd2423ac->enter($__internal_7983777f8998042e84624f7e4e390321135781aad867faacbabf6997cd2423ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<strong>{% trans 'Title' %}</strong>"));

        $tags = array("trans" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('trans'),
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
        echo "<strong>";
        echo t("Title", array());
        echo "</strong>";
        
        $__internal_7983777f8998042e84624f7e4e390321135781aad867faacbabf6997cd2423ac->leave($__internal_7983777f8998042e84624f7e4e390321135781aad867faacbabf6997cd2423ac_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<strong>{% trans 'Title' %}</strong>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<strong>{% trans 'Title' %}</strong>*/
