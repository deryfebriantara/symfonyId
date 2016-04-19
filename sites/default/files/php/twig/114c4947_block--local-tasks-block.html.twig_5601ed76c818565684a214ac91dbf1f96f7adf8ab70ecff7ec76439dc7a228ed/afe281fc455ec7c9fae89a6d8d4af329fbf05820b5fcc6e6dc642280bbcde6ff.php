<?php

/* themes/bootstrap/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_615a7c783d7b048d15aea49141d18f624d39a2e8942a722228c35c9fd2b3387c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f34c10fa43bccf9e68bd23ec9eababe2e14b70d1ec0c5f633bbea90e90077de6 = $this->env->getExtension("native_profiler");
        $__internal_f34c10fa43bccf9e68bd23ec9eababe2e14b70d1ec0c5f633bbea90e90077de6->enter($__internal_f34c10fa43bccf9e68bd23ec9eababe2e14b70d1ec0c5f633bbea90e90077de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        
        $__internal_f34c10fa43bccf9e68bd23ec9eababe2e14b70d1ec0c5f633bbea90e90077de6->leave($__internal_f34c10fa43bccf9e68bd23ec9eababe2e14b70d1ec0c5f633bbea90e90077de6_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_72ce6fa8c89281836622088c7f1ee3b4dc88bc13c1f429793be4f7d7d4e7dfed = $this->env->getExtension("native_profiler");
        $__internal_72ce6fa8c89281836622088c7f1ee3b4dc88bc13c1f429793be4f7d7d4e7dfed->enter($__internal_72ce6fa8c89281836622088c7f1ee3b4dc88bc13c1f429793be4f7d7d4e7dfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_72ce6fa8c89281836622088c7f1ee3b4dc88bc13c1f429793be4f7d7d4e7dfed->leave($__internal_72ce6fa8c89281836622088c7f1ee3b4dc88bc13c1f429793be4f7d7d4e7dfed_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "block--bare.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
