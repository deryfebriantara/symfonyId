<?php

/* themes/bootstrap/templates/block/block--page-title-block.html.twig */
class __TwigTemplate_871ba0ccadf13cb9fbffec1b6023b62146300636d23de229d0b3eceb435840b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--page-title-block.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bae549e8196649c0b603b5c3c5a6049682e532a6f14d6b6bec8a685db4e7a6b3 = $this->env->getExtension("native_profiler");
        $__internal_bae549e8196649c0b603b5c3c5a6049682e532a6f14d6b6bec8a685db4e7a6b3->enter($__internal_bae549e8196649c0b603b5c3c5a6049682e532a6f14d6b6bec8a685db4e7a6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--page-title-block.html.twig"));

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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bae549e8196649c0b603b5c3c5a6049682e532a6f14d6b6bec8a685db4e7a6b3->leave($__internal_bae549e8196649c0b603b5c3c5a6049682e532a6f14d6b6bec8a685db4e7a6b3_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--page-title-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "block--bare.html.twig" %}*/
/* */
