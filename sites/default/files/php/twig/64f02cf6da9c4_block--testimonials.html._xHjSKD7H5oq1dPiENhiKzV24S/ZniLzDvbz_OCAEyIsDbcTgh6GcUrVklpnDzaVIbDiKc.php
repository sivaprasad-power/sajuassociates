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

/* themes/custom/january/templates/block/block--testimonials.html.twig */
class __TwigTemplate_d37159cbebe5db87dc80c35aec2c0f32 extends Template
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
<div class=\"testimonial-sec section-spacing wow fadeInUpBig\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "        </div>
    </div>
</div>
</div>

";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                <div class=\"col-lg-4 testimonial-heading\">
                    <h5>";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sub_title", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</h5>
                    ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 49, $this->source), "html", null, true);
        echo "
                    ";
        // line 50
        if (($context["label"] ?? null)) {
            // line 51
            echo "                        <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block__title"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 51, $this->source), "html", null, true);
            echo "</h2>
                    ";
        }
        // line 53
        echo "                    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 53, $this->source), "html", null, true);
        echo "
                    ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 54)) {
            // line 55
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 57
        echo "                    ";
        $context["site_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 58
        echo "                    ";
        if (twig_in_filter("home", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["site_url"] ?? null))))) {
            // line 59
            echo "                        ";
            if ((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 59)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url_title"] ?? null) : null)) {
                // line 60
                echo "                        <a class=\"icon-button\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 60)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url_title"] ?? null) : null), 60, $this->source), "html", null, true);
                echo "\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 60)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#title"] ?? null) : null), 60, $this->source), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 62
                echo "                        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "
                        ";
            }
            // line 64
            echo "                    ";
        }
        // line 65
        echo "                </div>
                ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_testimonial", [], "any", false, false, true, 66)) {
            // line 67
            echo "                <div class=\"col-lg-8\">
                    ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_testimonial", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
                </div>
                ";
        }
        // line 71
        echo "            ";
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/block/block--testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 71,  136 => 68,  133 => 67,  131 => 66,  128 => 65,  125 => 64,  119 => 62,  111 => 60,  108 => 59,  105 => 58,  102 => 57,  96 => 55,  94 => 54,  89 => 53,  81 => 51,  79 => 50,  75 => 49,  71 => 48,  68 => 47,  64 => 46,  55 => 72,  53 => 46,  45 => 42,  43 => 39,  42 => 38,  41 => 37,  40 => 35,);
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
<div class=\"testimonial-sec section-spacing wow fadeInUpBig\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            {% block content %}
                <div class=\"col-lg-4 testimonial-heading\">
                    <h5>{{ content.field_sub_title }}</h5>
                    {{ title_prefix }}
                    {% if label %}
                        <h2{{ title_attributes.addClass('block__title') }}>{{ label }}</h2>
                    {% endif %}
                    {{ title_suffix }}
                    {% if content.body %}
                    {{ content.body }}
                    {% endif %}
                    {% set site_url = url(\"<current>\") %}
                    {% if 'home' in site_url|render|render %}
                        {% if content.field_link[0][\"#url_title\"] %}
                        <a class=\"icon-button\" href=\"{{ content.field_link[0][\"#url_title\"] }}\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i>{{ content.field_link[0][\"#title\"] }}</a>
                        {% else %}
                        {{ content.field_link }}
                        {% endif  %}
                    {% endif %}
                </div>
                {% if content.field_testimonial %}
                <div class=\"col-lg-8\">
                    {{ content.field_testimonial }}
                </div>
                {% endif %}
            {% endblock %}
        </div>
    </div>
</div>
</div>

", "themes/custom/january/templates/block/block--testimonials.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/block/block--testimonials.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "block" => 46, "if" => 50);
        static $filters = array("clean_class" => 37, "escape" => 42, "render" => 58);
        static $functions = array("url" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'render'],
                ['url']
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
