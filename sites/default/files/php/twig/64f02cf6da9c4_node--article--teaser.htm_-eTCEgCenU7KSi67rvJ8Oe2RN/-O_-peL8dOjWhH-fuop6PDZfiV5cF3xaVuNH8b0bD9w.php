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

/* themes/custom/january/templates/content/node--article--teaser.html.twig */
class __TwigTemplate_1d6d04f83f55d874d448ce04a9884152 extends Template
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
        echo "
<div class=\"inner-wrapper\">
    ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 71)) {
            // line 72
            echo "    <div class=\"img-wrapper\">
        <a href=\"";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 73, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 73)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 73), "entity", [], "any", false, false, true, 73), "uri", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
            echo "\" alt=\"Blog Image\"></a>
        ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_category", [], "any", false, false, true, 74)) {
                // line 75
                echo "        <div class=\"blog-category\">
            ";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_category", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 78
            echo "        
    </div>
    ";
        }
        // line 81
        echo "    <div class=\"blog-details\">
        ";
        // line 82
        if (($context["date"] ?? null)) {
            // line 83
            echo "        <div class=\"blog-date\">
            <span class=\"date\">";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 84, $this->source), "d"), "html", null, true);
            echo "</span>
            <span>";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 85, $this->source), "M"), "html", null, true);
            echo "</span>
        </div>
        ";
        }
        // line 88
        echo "        ";
        if (($context["author_name"] ?? null)) {
            // line 89
            echo "        <h6>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 89, $this->source), "html", null, true);
            echo "</h6>
        ";
        }
        // line 91
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 91, $this->source), "html", null, true);
        echo "
          ";
        // line 92
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 93
            echo "          <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 93), 93, $this->source), "html", null, true);
            echo ">
            <a href=\"";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 94, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 94, $this->source), "html", null, true);
            echo "</a>
          </h4>
        ";
        }
        // line 97
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 97, $this->source), "html", null, true);
        echo "
        <a class=\"icon-button medium\" href=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 98, $this->source), "html", null, true);
        echo "\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i>Read more</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/content/node--article--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 98,  117 => 97,  109 => 94,  104 => 93,  102 => 92,  97 => 91,  91 => 89,  88 => 88,  82 => 85,  78 => 84,  75 => 83,  73 => 82,  70 => 81,  65 => 78,  59 => 76,  56 => 75,  54 => 74,  48 => 73,  45 => 72,  43 => 71,  39 => 69,);
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

<div class=\"inner-wrapper\">
    {% if content.field_media_image %}
    <div class=\"img-wrapper\">
        <a href=\"{{ url }}\" rel=\"bookmark\"><img src=\"{{ file_url(content.field_media_image[0]['#media'].field_media_image.entity.uri.value) }}\" alt=\"Blog Image\"></a>
        {% if content.field_category %}
        <div class=\"blog-category\">
            {{ content.field_category }}
        </div>
        {% endif %}        
    </div>
    {% endif %}
    <div class=\"blog-details\">
        {% if date %}
        <div class=\"blog-date\">
            <span class=\"date\">{{ date|date(\"d\") }}</span>
            <span>{{ date|date(\"M\") }}</span>
        </div>
        {% endif %}
        {% if author_name %}
        <h6>{{ author_name }}</h6>
        {% endif %}
        {{ title_prefix }}
          {% if label and not page %}
          <h4{{ title_attributes.addClass('node__title') }}>
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
          </h4>
        {% endif %}
        {{ title_suffix }}
        <a class=\"icon-button medium\" href=\"{{ url }}\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i>Read more</a>
    </div>
</div>
", "themes/custom/january/templates/content/node--article--teaser.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/content/node--article--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71);
        static $filters = array("escape" => 73, "date" => 84);
        static $functions = array("file_url" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
