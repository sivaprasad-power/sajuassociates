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

/* themes/custom/january/templates/block/block--views-block--case-studies-block-1.html.twig */
class __TwigTemplate_d8f5353793fb0b1613d522971f1c776f extends Template
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
<div class=\"case-study-sec wow fadeInUpBig\">
      <div class=\"inner-bg\">
        <div class=\"container\">
            ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 46, $this->source), "html", null, true);
        echo "
            ";
        // line 47
        if (($context["label"] ?? null)) {
            // line 48
            echo "                <div class=\"col title-with-button\">
                    <h2>";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 49, $this->source), "html", null, true);
            echo "</h2>
                    <a class=\"icon-button\" href=\"/case-studies\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i> View More</a>
                </div>
            ";
        }
        // line 53
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 53, $this->source), "html", null, true);
        echo "
            ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "        </div>
    </div>
</div>
</div>";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "block__content"], "method", false, false, true, 55), 55, $this->source), "html", null, true);
        echo ">
                ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 56, $this->source), "html", null, true);
        echo "
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/block/block--views-block--case-studies-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 56,  87 => 55,  83 => 54,  76 => 59,  74 => 54,  69 => 53,  62 => 49,  59 => 48,  57 => 47,  53 => 46,  45 => 42,  43 => 39,  42 => 38,  41 => 37,  40 => 35,);
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
<div class=\"case-study-sec wow fadeInUpBig\">
      <div class=\"inner-bg\">
        <div class=\"container\">
            {{ title_prefix }}
            {% if label %}
                <div class=\"col title-with-button\">
                    <h2>{{ label }}</h2>
                    <a class=\"icon-button\" href=\"/case-studies\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i> View More</a>
                </div>
            {% endif %}
            {{ title_suffix }}
            {% block content %}
                <div{{ content_attributes.addClass('block__content') }}>
                {{ content }}
                </div>
            {% endblock %}
        </div>
    </div>
</div>
</div>", "themes/custom/january/templates/block/block--views-block--case-studies-block-1.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/block/block--views-block--case-studies-block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 47, "block" => 54);
        static $filters = array("clean_class" => 37, "escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
                []
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
