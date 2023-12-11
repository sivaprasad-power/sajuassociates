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

/* themes/custom/january/templates/block/block--hero-banner.html.twig */
class __TwigTemplate_51758fdc9d485b471a61b9762f6efccd extends Template
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
        echo "
<div";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "</div>";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "<div  class=\"hero-banner\" style=\"background-image:url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 45)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 45), "entity", [], "any", false, false, true, 45), "uri", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), 45, $this->source)), "html", null, true);
        echo ")\">
  <div class=\"container\">
    <div class='banner-content'>
      ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 48, $this->source), "html", null, true);
        echo "
        ";
        // line 49
        if (($context["label"] ?? null)) {
            // line 50
            echo "          <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block__title"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 50, $this->source), "html", null, true);
            echo "</h4>
        ";
        }
        // line 52
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 52, $this->source), "html", null, true);
        echo "
      ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 53)) {
            // line 54
            echo "        <h1>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</h1>
      ";
        }
        // line 56
        echo "      ";
        if ((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 56)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url_title"] ?? null) : null)) {
            // line 57
            echo "      <a class=\"icon-button white-button\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 57)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#url_title"] ?? null) : null), 57, $this->source), "html", null, true);
            echo "\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 57)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#title"] ?? null) : null), 57, $this->source), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 59
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 61
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/block/block--hero-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 61,  107 => 59,  99 => 57,  96 => 56,  90 => 54,  88 => 53,  83 => 52,  75 => 50,  73 => 49,  69 => 48,  62 => 45,  58 => 44,  54 => 65,  52 => 44,  48 => 43,  45 => 42,  43 => 39,  42 => 38,  41 => 37,  40 => 35,);
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
<div  class=\"hero-banner\" style=\"background-image:url({{ file_url(content.field_media_image[0]['#media'].field_media_image.entity.uri.value) }})\">
  <div class=\"container\">
    <div class='banner-content'>
      {{ title_prefix }}
        {% if label %}
          <h4{{ title_attributes.addClass('block__title') }}>{{ label }}</h4>
        {% endif %}
      {{ title_suffix }}
      {% if content.field_title %}
        <h1>{{ content.field_title }}</h1>
      {% endif %}
      {% if content.field_link[0][\"#url_title\"] %}
      <a class=\"icon-button white-button\" href=\"{{ content.field_link[0][\"#url_title\"] }}\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i>{{ content.field_link[0][\"#title\"] }}</a>
      {% else %}
      {{ content.field_link }}
      {% endif %}
    </div>
  </div>
</div>
{% endblock %}
</div>", "themes/custom/january/templates/block/block--hero-banner.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/block/block--hero-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "block" => 44, "if" => 49);
        static $filters = array("clean_class" => 37, "escape" => 43);
        static $functions = array("file_url" => 45);

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
