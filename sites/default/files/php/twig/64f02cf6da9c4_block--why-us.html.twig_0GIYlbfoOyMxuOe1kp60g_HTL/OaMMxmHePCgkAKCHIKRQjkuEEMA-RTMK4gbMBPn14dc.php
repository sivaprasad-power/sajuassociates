<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/january/templates/block/block--why-us.html.twig */
class __TwigTemplate_a8deb1f25367b2c761c655a061a4acfc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 37
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 37), 37, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["plugin_id"] ?? null), 38, $this->source))), 3 => ((        // line 39
($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 39, $this->source)))) : (""))];
        // line 42
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
";
        // line 43
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "    
    <div class=\"partner-sec section-spacing\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 47)) {
            // line 48
            echo "                <div class=\"col-lg-6 wow fadeInLeftBig\">
                    <div class=\"img-wrapper\">
                        <img src=\"";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 50)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 50), "entity", [], "any", false, false, true, 50), "uri", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
            echo "\" alt=\"why us image\">
                    </div>
                </div>
                ";
        }
        // line 54
        echo "                <div class=\"col-lg-6 wow fadeInRightBig\">
                    <div class=\"content-wrapper\">
                        ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 56, $this->source), "html", null, true);
        echo "
                        ";
        // line 57
        if (($context["label"] ?? null)) {
            // line 58
            echo "                            <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block__title"], "method", false, false, true, 58), 58, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "description", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "</h2>
                        ";
        }
        // line 60
        echo "                        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 60, $this->source), "html", null, true);
        echo "
                        ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 61)) {
            // line 62
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
                        ";
        }
        // line 64
        echo "                        ";
        if ((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 64)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url_title"] ?? null) : null)) {
            // line 65
            echo "                        <a class=\"icon-button\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 65)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#url_title"] ?? null) : null), 65, $this->source), "html", null, true);
            echo "\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 65)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#title"] ?? null) : null), 65, $this->source), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 67
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
                        ";
        }
        // line 69
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/block/block--why-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 69,  117 => 67,  109 => 65,  106 => 64,  100 => 62,  98 => 61,  93 => 60,  85 => 58,  83 => 57,  79 => 56,  75 => 54,  68 => 50,  64 => 48,  62 => 47,  50 => 43,  45 => 42,  43 => 39,  42 => 38,  41 => 37,  40 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * january's implementation to display a block.
 *
 * Available variables:
 * - layout: String that will determine the layout of the block.
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - in_preview: Whether the plugin is being rendered in preview mode.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main content
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    layout ? 'layout--' ~ layout|clean_class,
  ]
%}
<div{{ attributes.addClass(classes) }}>
{% block content %}    
    <div class=\"partner-sec section-spacing\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                {% if content.field_media_image %}
                <div class=\"col-lg-6 wow fadeInLeftBig\">
                    <div class=\"img-wrapper\">
                        <img src=\"{{ file_url(content.field_media_image[0]['#media'].field_media_image.entity.uri.value) }}\" alt=\"why us image\">
                    </div>
                </div>
                {% endif %}
                <div class=\"col-lg-6 wow fadeInRightBig\">
                    <div class=\"content-wrapper\">
                        {{ title_prefix }}
                        {% if label %}
                            <h2{{ title_attributes.addClass('block__title') }}>{{ content.description }}</h2>
                        {% endif %}
                        {{ title_suffix }}
                        {% if content.body %}
                        {{ content.body }}
                        {% endif %}
                        {% if content.field_link[0][\"#url_title\"] %}
                        <a class=\"icon-button\" href=\"{{ content.field_link[0][\"#url_title\"] }}\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i>{{ content.field_link[0][\"#title\"] }}</a>
                        {% else %}
                        {{ content.field_link }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 {% endblock %}", "themes/custom/january/templates/block/block--why-us.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/block/block--why-us.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "block" => 43, "if" => 47);
        static $filters = array("clean_class" => 37, "escape" => 42);
        static $functions = array("file_url" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
                ['file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
