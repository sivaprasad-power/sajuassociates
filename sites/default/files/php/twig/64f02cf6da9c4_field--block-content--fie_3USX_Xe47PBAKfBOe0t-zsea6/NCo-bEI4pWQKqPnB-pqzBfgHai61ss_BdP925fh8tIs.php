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

/* themes/custom/january/templates/field/field--block-content--field-testimonial--testimonials.html.twig */
class __TwigTemplate_797c60985e702c30020ed7768b2dc1a2 extends Template
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
        if (($context["multiple"] ?? null)) {
            // line 41
            echo "<div class=\"testimonial-slider\">
";
        }
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    <div class=\"item\">
        <div class=\"inner-wrapper\">
            <div class=\"testimonial-content\">
                <p>";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 47)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null), "field_customer_review_message", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), 47, $this->source));
            echo "</p>
            </div>
            <div class=\"testimonial-user\">
                <div class=\"user-icon\">
                    <img src=\"";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 51)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null), "field_customer_image", [], "any", false, false, true, 51), "entity", [], "any", false, false, true, 51), "field_media_image", [], "any", false, false, true, 51), "entity", [], "any", false, false, true, 51), "fileuri", [], "any", false, false, true, 51), 51, $this->source)), "html", null, true);
            echo "\" alt=\"Customer Image\">
                </div>
                <div class=\"user-name\">
                    <h6>";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 54)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#paragraph"] ?? null) : null), "field_customer_name", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo " –</h6>
                    <span>";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 55)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null), "field_customer_designation", [], "any", false, false, true, 55), "value", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</span>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        if (($context["multiple"] ?? null)) {
            // line 62
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/field/field--block-content--field-testimonial--testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 62,  84 => 61,  72 => 55,  68 => 54,  62 => 51,  55 => 47,  50 => 44,  45 => 43,  41 => 41,  39 => 40,);
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
{% if multiple %}
<div class=\"testimonial-slider\">
{% endif %}
    {% for item in items %}
    <div class=\"item\">
        <div class=\"inner-wrapper\">
            <div class=\"testimonial-content\">
                <p>{{ item.content['#paragraph'].field_customer_review_message.value|raw }}</p>
            </div>
            <div class=\"testimonial-user\">
                <div class=\"user-icon\">
                    <img src=\"{{ file_url(item.content['#paragraph'].field_customer_image.entity.field_media_image.entity.fileuri) }}\" alt=\"Customer Image\">
                </div>
                <div class=\"user-name\">
                    <h6>{{ item.content['#paragraph'].field_customer_name.value }} –</h6>
                    <span>{{ item.content['#paragraph'].field_customer_designation.value }}</span>
                </div>
            </div>
        </div>
    </div>
    {% endfor %}
{% if multiple %}
</div>
{% endif %}
", "themes/custom/january/templates/field/field--block-content--field-testimonial--testimonials.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/field/field--block-content--field-testimonial--testimonials.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40, "for" => 43);
        static $filters = array("raw" => 47, "escape" => 51);
        static $functions = array("file_url" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['raw', 'escape'],
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
