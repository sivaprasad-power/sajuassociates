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

/* themes/custom/january/templates/content/node--our-professionals--teaser.html.twig */
class __TwigTemplate_479d9c19a212bb186911fdaba27a52e2 extends Template
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
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 69)) {
            // line 70
            echo "<div class=\"img-wrapper\">
    <a href=\"";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 71, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 71)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 71), "entity", [], "any", false, false, true, 71), "uri", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), 71, $this->source)), "html", null, true);
            echo "\" alt=\"Professionals image\"></a>
</div>
";
        }
        // line 74
        echo "<div class=\"professional-details\">
    ";
        // line 75
        if (($context["label"] ?? null)) {
            // line 76
            echo "    <h4><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 76, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 76, $this->source), "html", null, true);
            echo "</a></h4>
    ";
        }
        // line 78
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_job_type", [], "any", false, false, true, 78)) {
            // line 79
            echo "    <div class=\"date\"><i class=\"icon\"><i class=\"fa-solid fa-suitcase\"></i></i>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_job_type", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 81
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_phone", [], "any", false, false, true, 81)) {
            // line 82
            echo "    <div class=\"list-icon\">
      <a href=\"tel:";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_phone", [], "any", false, false, true, 83), 0, [], "any", false, false, true, 83)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#context"] ?? null) : null), "value", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "\"><i class=\"icon\"><i class=\"fa-solid fa-phone\"></i></i>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_phone", [], "any", false, false, true, 83), 0, [], "any", false, false, true, 83)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#context"] ?? null) : null), "value", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "</a>
    </div>
    ";
        }
        // line 86
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_email", [], "any", false, false, true, 86)) {
            // line 87
            echo "    <div class=\"list-icon\">
      <a href=\"";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_email", [], "any", false, false, true, 88), 0, [], "any", false, false, true, 88)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#url"] ?? null) : null), 88, $this->source), "html", null, true);
            echo "\"><i class=\"icon\"><i class=\"fa-solid fa-envelope\"></i></i>Send an Email</a>
    </div>
    ";
        }
        // line 91
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/content/node--our-professionals--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 91,  94 => 88,  91 => 87,  88 => 86,  80 => 83,  77 => 82,  74 => 81,  68 => 79,  65 => 78,  57 => 76,  55 => 75,  52 => 74,  44 => 71,  41 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * january's theme implementation to display a node teaser.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{% if content.field_media_image %}
<div class=\"img-wrapper\">
    <a href=\"{{ url }}\" rel=\"bookmark\"><img src=\"{{ file_url(content.field_media_image[0]['#media'].field_media_image.entity.uri.value) }}\" alt=\"Professionals image\"></a>
</div>
{% endif %}
<div class=\"professional-details\">
    {% if label %}
    <h4><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a></h4>
    {% endif %}
    {% if content.field_job_type %}
    <div class=\"date\"><i class=\"icon\"><i class=\"fa-solid fa-suitcase\"></i></i>{{ content.field_job_type }}</div>
    {% endif %}
    {% if content.field_member_phone %}
    <div class=\"list-icon\">
      <a href=\"tel:{{ content.field_member_phone.0[\"#context\"].value }}\"><i class=\"icon\"><i class=\"fa-solid fa-phone\"></i></i>{{ content.field_member_phone.0[\"#context\"].value }}</a>
    </div>
    {% endif %}
    {% if content.field_member_email %}
    <div class=\"list-icon\">
      <a href=\"{{ content.field_member_email.0['#url'] }}\"><i class=\"icon\"><i class=\"fa-solid fa-envelope\"></i></i>Send an Email</a>
    </div>
    {% endif %}
</div>", "themes/custom/january/templates/content/node--our-professionals--teaser.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/content/node--our-professionals--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 69);
        static $filters = array("escape" => 71);
        static $functions = array("file_url" => 71);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
