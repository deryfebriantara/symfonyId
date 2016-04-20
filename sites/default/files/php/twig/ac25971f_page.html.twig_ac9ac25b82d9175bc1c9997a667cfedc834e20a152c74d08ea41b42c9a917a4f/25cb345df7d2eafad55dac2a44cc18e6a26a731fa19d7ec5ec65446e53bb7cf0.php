<?php

/* themes/bootstrap_clean_blog/templates/page.html.twig */
class __TwigTemplate_c625e97ac55fe29dc452443f3e607268ab449fd4405e6d37435bc65685b0dcd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'social_buttons' => array($this, 'block_social_buttons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ad90262f49b42bc052f59c630f0b778bc4f8cf013e7e50e6285a5b585341726 = $this->env->getExtension("native_profiler");
        $__internal_3ad90262f49b42bc052f59c630f0b778bc4f8cf013e7e50e6285a5b585341726->enter($__internal_3ad90262f49b42bc052f59c630f0b778bc4f8cf013e7e50e6285a5b585341726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap_clean_blog/templates/page.html.twig"));

        $tags = array("if" => 75, "trans" => 99, "block" => 129, "for" => 149);
        $filters = array("t" => 70);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans', 'block', 'for'),
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

        // line 64
        echo "<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header page-scroll\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
              data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
        echo "</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      ";
        // line 75
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 76
            echo "        <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "</a>
      ";
        }
        // line 78
        echo "    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      ";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "bootstrap_clean_blog_main_menu", array()), "html", null, true));
        echo "
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class=\"intro-header\" style=\"background-image: url('";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_image"]) ? $context["header_image"] : null), "html", null, true));
        echo "')\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 93
        if ((isset($context["node"]) ? $context["node"] : null)) {
            // line 94
            echo "        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
          <div class=\"post-heading\">
            <h1>";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "label", array()), "html", null, true));
            echo "</h1>
            ";
            // line 97
            if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
                // line 98
                echo "              <span class=\"meta\">
                ";
                // line 99
                echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
                // line 100
                echo "              </span>
            ";
            }
            // line 102
            echo "          </div>
        </div>
      ";
        } else {
            // line 105
            echo "        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
          <div class=\"site-heading\">
            <h1>";
            // line 107
            if ($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "label", array())) {
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "label", array()), "html", null, true));
                echo " ";
            } else {
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo " ";
            }
            echo "</h1>
            ";
            // line 108
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 109
                echo "              <hr class=\"small\">
              <span class=\"subheading\">
                ";
                // line 111
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "
              </span>
            ";
            }
            // line 114
            echo "          </div>
        </div>
      ";
        }
        // line 117
        echo "    </div>
  </div>
</header>

<!-- Post Content -->
<article>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
        ";
        // line 126
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

        ";
        // line 129
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 133
        echo "      </div>
    </div>
  </div>
</article>

<hr>

<!-- Footer -->
<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
        ";
        // line 146
        echo "        ";
        $this->displayBlock('social_buttons', $context, $blocks);
        // line 162
        echo "
        ";
        // line 163
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</footer>
";
        
        $__internal_3ad90262f49b42bc052f59c630f0b778bc4f8cf013e7e50e6285a5b585341726->leave($__internal_3ad90262f49b42bc052f59c630f0b778bc4f8cf013e7e50e6285a5b585341726_prof);

    }

    // line 129
    public function block_content($context, array $blocks = array())
    {
        $__internal_7df4187cefc4af2898cb53c4c8ad5ddad8515da54a418aac4784781472b9188b = $this->env->getExtension("native_profiler");
        $__internal_7df4187cefc4af2898cb53c4c8ad5ddad8515da54a418aac4784781472b9188b->enter($__internal_7df4187cefc4af2898cb53c4c8ad5ddad8515da54a418aac4784781472b9188b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 130
        echo "          <a id=\"main-content\"></a>
          ";
        // line 131
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_7df4187cefc4af2898cb53c4c8ad5ddad8515da54a418aac4784781472b9188b->leave($__internal_7df4187cefc4af2898cb53c4c8ad5ddad8515da54a418aac4784781472b9188b_prof);

    }

    // line 146
    public function block_social_buttons($context, array $blocks = array())
    {
        $__internal_df4fad25e1657c2384c2aa1e84c0a6695145601db6801053c983debba3742a18 = $this->env->getExtension("native_profiler");
        $__internal_df4fad25e1657c2384c2aa1e84c0a6695145601db6801053c983debba3742a18->enter($__internal_df4fad25e1657c2384c2aa1e84c0a6695145601db6801053c983debba3742a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "social_buttons"));

        // line 147
        echo "        ";
        if ((isset($context["social_links"]) ? $context["social_links"] : null)) {
            // line 148
            echo "        <ul class=\"list-inline text-center\">
          ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["social_links"]) ? $context["social_links"] : null));
            foreach ($context['_seq'] as $context["network"] => $context["url"]) {
                // line 150
                echo "          <li>
            <a target=\"_blank\" href=\"";
                // line 151
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["url"], "html", null, true));
                echo "\">
              <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x\"></i>
                <i class=\"fa fa-";
                // line 154
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["network"], "html", null, true));
                echo " fa-stack-1x fa-inverse\"></i>
              </span>
            </a>
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['network'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "        </ul>
        ";
        }
        // line 161
        echo "        ";
        
        $__internal_df4fad25e1657c2384c2aa1e84c0a6695145601db6801053c983debba3742a18->leave($__internal_df4fad25e1657c2384c2aa1e84c0a6695145601db6801053c983debba3742a18_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap_clean_blog/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 161,  264 => 159,  253 => 154,  247 => 151,  244 => 150,  240 => 149,  237 => 148,  234 => 147,  228 => 146,  219 => 131,  216 => 130,  210 => 129,  197 => 163,  194 => 162,  191 => 146,  177 => 133,  174 => 129,  169 => 126,  158 => 117,  153 => 114,  147 => 111,  143 => 109,  141 => 108,  129 => 107,  125 => 105,  120 => 102,  116 => 100,  114 => 99,  111 => 98,  109 => 97,  105 => 96,  101 => 94,  99 => 93,  93 => 90,  82 => 82,  76 => 78,  66 => 76,  64 => 75,  56 => 70,  48 => 64,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* <nav class="navbar navbar-default navbar-custom navbar-fixed-top">*/
/*   <div class="container-fluid">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header page-scroll">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/*               data-target="#bs-example-navbar-collapse-1">*/
/*         <span class="sr-only">{{ 'Toggle navigation'|t}}</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       {% if site_name %}*/
/*         <a class="navbar-brand" href="{{ front_page }}" title="{{ 'Home'|t }}">{{ site_name }}</a>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       {{ page.header.bootstrap_clean_blog_main_menu }}*/
/*     </div>*/
/*     <!-- /.navbar-collapse -->*/
/*   </div>*/
/* </nav>*/
/* */
/* <!-- Page Header -->*/
/* <!-- Set your background image for this header on the line below. -->*/
/* <header class="intro-header" style="background-image: url('{{ header_image }}')">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if node %}*/
/*         <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*           <div class="post-heading">*/
/*             <h1>{{ node.label }}</h1>*/
/*             {% if display_submitted %}*/
/*               <span class="meta">*/
/*                 {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}*/
/*               </span>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       {% else %}*/
/*         <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*           <div class="site-heading">*/
/*             <h1>{% if node.label %} {{ node.label }} {% else %} {{ site_name }} {% endif %}</h1>*/
/*             {% if site_slogan %}*/
/*               <hr class="small">*/
/*               <span class="subheading">*/
/*                 {{ site_slogan }}*/
/*               </span>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* */
/* <!-- Post Content -->*/
/* <article>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*         {{ page.highlighted }}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </article>*/
/* */
/* <hr>*/
/* */
/* <!-- Footer -->*/
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*         {# Social buttons block #}*/
/*         {% block social_buttons %}*/
/*         {% if social_links %}*/
/*         <ul class="list-inline text-center">*/
/*           {% for network, url in social_links %}*/
/*           <li>*/
/*             <a target="_blank" href="{{ url }}">*/
/*               <span class="fa-stack fa-lg">*/
/*                 <i class="fa fa-circle fa-stack-2x"></i>*/
/*                 <i class="fa fa-{{ network }} fa-stack-1x fa-inverse"></i>*/
/*               </span>*/
/*             </a>*/
/*           </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         {% endif %}*/
/*         {% endblock %}*/
/* */
/*         {{ page.footer }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </footer>*/
/* */
