<?php

/* themes/bootstrap/templates/block/block--system.html.twig */
class __TwigTemplate_f2032aa7a6650eeb2e8f15bc245183911d77143b5419446445e8a6971950bd78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--system.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cd0887a08b475481e525b1e33b3242628160f1058661132bfeb3ae5bde33ea9 = $this->env->getExtension("native_profiler");
        $__internal_1cd0887a08b475481e525b1e33b3242628160f1058661132bfeb3ae5bde33ea9->enter($__internal_1cd0887a08b475481e525b1e33b3242628160f1058661132bfeb3ae5bde33ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--system.html.twig"));

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
        
        $__internal_1cd0887a08b475481e525b1e33b3242628160f1058661132bfeb3ae5bde33ea9->leave($__internal_1cd0887a08b475481e525b1e33b3242628160f1058661132bfeb3ae5bde33ea9_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--system.html.twig";
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
