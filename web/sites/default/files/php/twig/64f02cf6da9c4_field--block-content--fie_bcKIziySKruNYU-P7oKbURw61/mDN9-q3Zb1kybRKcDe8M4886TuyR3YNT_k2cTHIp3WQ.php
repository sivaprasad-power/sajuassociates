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

/* themes/custom/january/templates/field/field--block-content--field-service-wrapper--services.html.twig */
class __TwigTemplate_9a5e5378ef0bce05f0774b56917dd187 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "<div class='col custom-tabs'>
      <ul class=\"tab-nav\">
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 43)) {
                // line 44
                echo "            <li class=\"tab-nav-item active\" data-id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 44)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null), "field_service_name", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source), [" " => "_"])), "html", null, true);
                echo "\">
          ";
            } else {
                // line 46
                echo "            <li class=\"tab-nav-item\" data-id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 46)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null), "field_service_name", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), 46, $this->source), [" " => "_"])), "html", null, true);
                echo "\">
          ";
            }
            // line 47
            echo "        
              <span class=\"icon\"><img src=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 48)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#paragraph"] ?? null) : null), "field_service_icon", [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "field_media_image", [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "fileuri", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
            echo "\" alt=\"icon\"></span>
              <span class=\"name\">";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 49)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null), "field_service_name", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</span>
            </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "      </ul>
    <div class=\"tab-contents\">
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 55)) {
                // line 56
                echo "      <h4 class=\"tab-nav-item active\" data-id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 56)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "field_service_name", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56), 56, $this->source), [" " => "_"])), "html", null, true);
                echo "\">
          <span class=\"icon\"><img src=\"";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 57)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#paragraph"] ?? null) : null), "field_service_icon", [], "any", false, false, true, 57), "entity", [], "any", false, false, true, 57), "field_media_image", [], "any", false, false, true, 57), "entity", [], "any", false, false, true, 57), "fileuri", [], "any", false, false, true, 57), 57, $this->source)), "html", null, true);
                echo "\" alt=\"icon\"></span>
          <span class=\"name\">";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 58)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "field_service_name", [], "any", false, false, true, 58), "value", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "</span>
        </h4>
      <div class=\"tab-content active\" data-id=\"";
                // line 60
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 60)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#paragraph"] ?? null) : null), "field_service_name", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60), 60, $this->source), [" " => "_"])), "html", null, true);
                echo "\">
      ";
            } else {
                // line 62
                echo "       <h4 class=\"tab-nav-item\" data-id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 62)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "field_service_name", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62), 62, $this->source), [" " => "_"])), "html", null, true);
                echo "\">
          <span class=\"icon\"><img src=\"";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 63)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#paragraph"] ?? null) : null), "field_service_icon", [], "any", false, false, true, 63), "entity", [], "any", false, false, true, 63), "field_media_image", [], "any", false, false, true, 63), "entity", [], "any", false, false, true, 63), "fileuri", [], "any", false, false, true, 63), 63, $this->source)), "html", null, true);
                echo "\" alt=\"icon\"></span>
          <span class=\"name\">";
                // line 64
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 64)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "field_service_name", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "</span>
        </h4>
      <div class=\"tab-content\" data-id=\"";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 66)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#paragraph"] ?? null) : null), "field_service_name", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66), 66, $this->source), [" " => "_"])), "html", null, true);
                echo "\">       
      ";
            }
            // line 68
            echo "        <div class=\"row\">
          <div class=\"col-lg-6 content-wrapper\">
            <h3>";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 70)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#paragraph"] ?? null) : null), "field_service_name", [], "any", false, false, true, 70), "value", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "</h3>
            <p>";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 71)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#paragraph"] ?? null) : null), "field_service_detail", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), 71, $this->source));
            echo "</p>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"img-wrapper\">
              <img src=\"";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 75)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#paragraph"] ?? null) : null), "field_service_image", [], "any", false, false, true, 75), "entity", [], "any", false, false, true, 75), "field_media_image", [], "any", false, false, true, 75), "entity", [], "any", false, false, true, 75), "fileuri", [], "any", false, false, true, 75), 75, $this->source)), "html", null, true);
            echo "\">
            </div>
          </div>
        </div>
      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/field/field--block-content--field-service-wrapper--services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 81,  176 => 75,  169 => 71,  165 => 70,  161 => 68,  156 => 66,  151 => 64,  147 => 63,  142 => 62,  137 => 60,  132 => 58,  128 => 57,  123 => 56,  120 => 55,  103 => 54,  99 => 52,  82 => 49,  78 => 48,  75 => 47,  69 => 46,  63 => 44,  60 => 43,  43 => 42,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 *
 * @see template_preprocess_field()
 */
#}
<div class='col custom-tabs'>
      <ul class=\"tab-nav\">
      {% for item in items %}
          {% if loop.first %}
            <li class=\"tab-nav-item active\" data-id=\"{{ item.content[\"#paragraph\"].field_service_name.value|replace({' ':'_'})|lower }}\">
          {% else %}
            <li class=\"tab-nav-item\" data-id=\"{{ item.content[\"#paragraph\"].field_service_name.value|replace({' ':'_'})|lower }}\">
          {% endif %}        
              <span class=\"icon\"><img src=\"{{ file_url(item.content[\"#paragraph\"].field_service_icon.entity.field_media_image.entity.fileuri) }}\" alt=\"icon\"></span>
              <span class=\"name\">{{ item.content[\"#paragraph\"].field_service_name.value }}</span>
            </li>
      {% endfor %}
      </ul>
    <div class=\"tab-contents\">
    {% for item in items %}
      {% if loop.first %}
      <h4 class=\"tab-nav-item active\" data-id=\"{{ item.content[\"#paragraph\"].field_service_name.value|replace({' ':'_'})|lower }}\">
          <span class=\"icon\"><img src=\"{{ file_url(item.content[\"#paragraph\"].field_service_icon.entity.field_media_image.entity.fileuri) }}\" alt=\"icon\"></span>
          <span class=\"name\">{{ item.content[\"#paragraph\"].field_service_name.value }}</span>
        </h4>
      <div class=\"tab-content active\" data-id=\"{{ item.content[\"#paragraph\"].field_service_name.value|replace({' ':'_'})|lower }}\">
      {% else %}
       <h4 class=\"tab-nav-item\" data-id=\"{{ item.content[\"#paragraph\"].field_service_name.value|replace({' ':'_'})|lower }}\">
          <span class=\"icon\"><img src=\"{{ file_url(item.content[\"#paragraph\"].field_service_icon.entity.field_media_image.entity.fileuri) }}\" alt=\"icon\"></span>
          <span class=\"name\">{{ item.content[\"#paragraph\"].field_service_name.value }}</span>
        </h4>
      <div class=\"tab-content\" data-id=\"{{ item.content[\"#paragraph\"].field_service_name.value|replace({' ':'_'})|lower }}\">       
      {% endif %}
        <div class=\"row\">
          <div class=\"col-lg-6 content-wrapper\">
            <h3>{{ item.content[\"#paragraph\"].field_service_name.value }}</h3>
            <p>{{ item.content[\"#paragraph\"].field_service_detail.value|raw }}</p>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"img-wrapper\">
              <img src=\"{{ file_url(item.content[\"#paragraph\"].field_service_image.entity.field_media_image.entity.fileuri) }}\">
            </div>
          </div>
        </div>
      </div>
    {% endfor %}
    </div>
</div>", "themes/custom/january/templates/field/field--block-content--field-service-wrapper--services.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/field/field--block-content--field-service-wrapper--services.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 42, "if" => 43);
        static $filters = array("escape" => 44, "lower" => 44, "replace" => 44, "raw" => 71);
        static $functions = array("file_url" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'lower', 'replace', 'raw'],
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
