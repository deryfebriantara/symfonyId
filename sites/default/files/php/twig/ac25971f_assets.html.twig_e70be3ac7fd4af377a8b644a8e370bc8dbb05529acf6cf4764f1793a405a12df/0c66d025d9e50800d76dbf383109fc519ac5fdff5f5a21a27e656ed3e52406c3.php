<?php

/* @webprofiler/Collector/assets.html.twig */
class __TwigTemplate_365fa02e65bccc035550a190afce3d6288dbca09b5285a665dc6e3326157e7f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f66a06b9c59f23864b39bace49d41352f1b6d628c3e10004caa16bb075f3b4fd = $this->env->getExtension("native_profiler");
        $__internal_f66a06b9c59f23864b39bace49d41352f1b6d628c3e10004caa16bb075f3b4fd->enter($__internal_f66a06b9c59f23864b39bace49d41352f1b6d628c3e10004caa16bb075f3b4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/assets.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 22);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set'),
                array('t', 'default'),
                array('url')
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
        $this->displayBlock('toolbar', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f66a06b9c59f23864b39bace49d41352f1b6d628c3e10004caa16bb075f3b4fd->leave($__internal_f66a06b9c59f23864b39bace49d41352f1b6d628c3e10004caa16bb075f3b4fd_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_09c9719d560c30b144afb7ba9ab702634aa0cd5268b0a1d8d7677f80725dd4bb = $this->env->getExtension("native_profiler");
        $__internal_09c9719d560c30b144afb7ba9ab702634aa0cd5268b0a1d8d7677f80725dd4bb->enter($__internal_09c9719d560c30b144afb7ba9ab702634aa0cd5268b0a1d8d7677f80725dd4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "assets")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Assets")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Assets")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getcsscount", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getjscount", array())), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>CSS</b>
        <span>";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getcsscount", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>JS</b>
        <span>";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getjscount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_09c9719d560c30b144afb7ba9ab702634aa0cd5268b0a1d8d7677f80725dd4bb->leave($__internal_09c9719d560c30b144afb7ba9ab702634aa0cd5268b0a1d8d7677f80725dd4bb_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ab353a74008b037d3947f3086b2c267e64a863b30ff963a5636552c3d2e62c7 = $this->env->getExtension("native_profiler");
        $__internal_2ab353a74008b037d3947f3086b2c267e64a863b30ff963a5636552c3d2e62c7->enter($__internal_2ab353a74008b037d3947f3086b2c267e64a863b30ff963a5636552c3d2e62c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"assets\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Assets")));
        echo "</h2>
        <div class=\"tabs\">
            <% if( data.js.length != 0){ %>
            <input class=\"tabs__radio\" type=\"radio\" id=\"js\" name=\"tabs\" checked/>
            <% } %>
            <% if( data.js.length != 0){ %>
            <input class=\"tabs__radio\" type=\"radio\" id=\"css\" name=\"tabs\"/>
            <% } %>
            <ul class=\"tabs__tabs list--inline\">
                <% if( data.js.length != 0){ %>
                <li><label class=\"tabs__label\" for=\"js\">JS</label></li>
                <% } %>
                <% if( data.js.length != 0){ %>
                <li><label class=\"tabs__label\" for=\"css\">CSS</label></li>
                <% } %>
            </ul>
            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <% if( data.js.length != 0){ %>
                    <% _.each( data.js, function( item, key ){ %>
                    <% if( key === 'drupalSettings' ){ %>
                    <div class=\"panel__container\">
                        <div class=\"panel__expand-header \">
                            <ul class=\"list--inline\">
                                <li><b>asset</b> <%- key %></li>
                            </ul>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Data")));
        echo "</div>
                        </div>
                        <div class=\"panel__expand-content\">
                            <% if(item.data && item.data.length != 0){ %>
                        <pre>
                            <code class=\"code--json \"><%= JSON.stringify(item.data, null, 4) %></code>
                        </pre>
                            <% } %>
                            <table class=\"table--duo\">
                                <% _.each( item, function( item, key ){ %>
                                <tr>
                                    <% if(key != 'data'){ %>
                                    <th><%- key %></th>
                                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                                    <% } %>
                                </tr>
                                <% }); %>
                            </table>
                        </div>
                    </div>
                    <% } else { %>
                    <div class=\"panel__container\">
                        <div class=\"panel__expand-header \">
                            <ul class=\"list--inline\">
                                <li><b>asset</b> <%= Drupal.webprofiler.helpers.classLink({\"file\":
                                    data.assets.installation_path + key, \"class\": key, \"line\": 0}) %>
                                </li>
                                <li><b>version</b> <%- item.version %></li>
                                <li><b>scope</b> <%- item.scope %></li>
                            </ul>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Data")));
        echo "</div>
                        </div>
                        <div class=\"panel__expand-content\">
                            <table class=\"table--duo\">
                                <% _.each( item, function( item, key ){ %>
                                <tr>
                                    <th><%- key %></th>
                                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                                </tr>
                                <% }); %>
                            </table>
                        </div>
                    </div>
                    <% } %>
                    <% }); %>
                    <% } %>
                </div>
                <div class=\"tabs__panel\">
                    <% if( data.css.length != 0){ %>
                    <% _.each( data.css, function( item, key ){ %>
                    <div class=\"panel__container\">
                        <div class=\"panel__expand-header \">
                            <ul class=\"list--inline\">
                                <li><b>asset</b> <%= Drupal.webprofiler.helpers.classLink({\"file\":
                                    data.assets.installation_path + key, \"class\": key, \"line\": 0}) %>
                                </li>
                                <li><b>version</b> <%- item.version %></li>
                            </ul>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 113
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Data")));
        echo "</div>
                        </div>
                        <div class=\"panel__expand-content\">
                            <table class=\"table--duo\">
                                <% _.each( item, function( item, key ){ %>
                                <tr>
                                    <th><%- key %></th>
                                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                                </tr>
                                <% }); %>
                            </table>
                        </div>
                    </div>
                    <% }); %>
                </div>
            </div>
        </div>

        <% } %>
    </script>
";
        
        $__internal_2ab353a74008b037d3947f3086b2c267e64a863b30ff963a5636552c3d2e62c7->leave($__internal_2ab353a74008b037d3947f3086b2c267e64a863b30ff963a5636552c3d2e62c7_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/assets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  231 => 113,  200 => 85,  167 => 55,  138 => 29,  135 => 28,  129 => 27,  119 => 23,  115 => 22,  111 => 20,  105 => 17,  98 => 13,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 27,  50 => 26,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'assets'}) }}" title="{{ 'Assets'|t }}">*/
/*         <img width="20" height="28" alt="{{ 'Assets'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         <span class="sf-toolbar-info-piece-additional sf-toolbar-status">{{ collector.getcsscount + collector.getjscount }}</span>*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/* */
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>CSS</b>*/
/*         <span>{{ collector.getcsscount }}</span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>JS</b>*/
/*         <span>{{ collector.getjscount }}</span>*/
/*     </div>*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="assets" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Assets'|t }}</h2>*/
/*         <div class="tabs">*/
/*             <% if( data.js.length != 0){ %>*/
/*             <input class="tabs__radio" type="radio" id="js" name="tabs" checked/>*/
/*             <% } %>*/
/*             <% if( data.js.length != 0){ %>*/
/*             <input class="tabs__radio" type="radio" id="css" name="tabs"/>*/
/*             <% } %>*/
/*             <ul class="tabs__tabs list--inline">*/
/*                 <% if( data.js.length != 0){ %>*/
/*                 <li><label class="tabs__label" for="js">JS</label></li>*/
/*                 <% } %>*/
/*                 <% if( data.js.length != 0){ %>*/
/*                 <li><label class="tabs__label" for="css">CSS</label></li>*/
/*                 <% } %>*/
/*             </ul>*/
/*             <div class="tabs__panels">*/
/*                 <div class="tabs__panel">*/
/*                     <% if( data.js.length != 0){ %>*/
/*                     <% _.each( data.js, function( item, key ){ %>*/
/*                     <% if( key === 'drupalSettings' ){ %>*/
/*                     <div class="panel__container">*/
/*                         <div class="panel__expand-header ">*/
/*                             <ul class="list--inline">*/
/*                                 <li><b>asset</b> <%- key %></li>*/
/*                             </ul>*/
/*                             <div class="button--flat l-right js--panel-toggle">{{ 'Data'|t }}</div>*/
/*                         </div>*/
/*                         <div class="panel__expand-content">*/
/*                             <% if(item.data && item.data.length != 0){ %>*/
/*                         <pre>*/
/*                             <code class="code--json "><%= JSON.stringify(item.data, null, 4) %></code>*/
/*                         </pre>*/
/*                             <% } %>*/
/*                             <table class="table--duo">*/
/*                                 <% _.each( item, function( item, key ){ %>*/
/*                                 <tr>*/
/*                                     <% if(key != 'data'){ %>*/
/*                                     <th><%- key %></th>*/
/*                                     <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                                     <% } %>*/
/*                                 </tr>*/
/*                                 <% }); %>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                     <% } else { %>*/
/*                     <div class="panel__container">*/
/*                         <div class="panel__expand-header ">*/
/*                             <ul class="list--inline">*/
/*                                 <li><b>asset</b> <%= Drupal.webprofiler.helpers.classLink({"file":*/
/*                                     data.assets.installation_path + key, "class": key, "line": 0}) %>*/
/*                                 </li>*/
/*                                 <li><b>version</b> <%- item.version %></li>*/
/*                                 <li><b>scope</b> <%- item.scope %></li>*/
/*                             </ul>*/
/*                             <div class="button--flat l-right js--panel-toggle">{{ 'Data'|t }}</div>*/
/*                         </div>*/
/*                         <div class="panel__expand-content">*/
/*                             <table class="table--duo">*/
/*                                 <% _.each( item, function( item, key ){ %>*/
/*                                 <tr>*/
/*                                     <th><%- key %></th>*/
/*                                     <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                                 </tr>*/
/*                                 <% }); %>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                     <% } %>*/
/*                     <% }); %>*/
/*                     <% } %>*/
/*                 </div>*/
/*                 <div class="tabs__panel">*/
/*                     <% if( data.css.length != 0){ %>*/
/*                     <% _.each( data.css, function( item, key ){ %>*/
/*                     <div class="panel__container">*/
/*                         <div class="panel__expand-header ">*/
/*                             <ul class="list--inline">*/
/*                                 <li><b>asset</b> <%= Drupal.webprofiler.helpers.classLink({"file":*/
/*                                     data.assets.installation_path + key, "class": key, "line": 0}) %>*/
/*                                 </li>*/
/*                                 <li><b>version</b> <%- item.version %></li>*/
/*                             </ul>*/
/*                             <div class="button--flat l-right js--panel-toggle">{{ 'Data'|t }}</div>*/
/*                         </div>*/
/*                         <div class="panel__expand-content">*/
/*                             <table class="table--duo">*/
/*                                 <% _.each( item, function( item, key ){ %>*/
/*                                 <tr>*/
/*                                     <th><%- key %></th>*/
/*                                     <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                                 </tr>*/
/*                                 <% }); %>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                     <% }); %>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <% } %>*/
/*     </script>*/
/* {% endblock %}*/
/* */
