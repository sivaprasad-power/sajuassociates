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

/* themes/custom/january/templates/content/node--case-studies--teaser.html.twig */
class __TwigTemplate_0caa5a8afd24581031c609fc1d97b7ca extends Template
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
        echo "<div class=\"inner-wrapper\">
    ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 70)) {
            // line 71
            echo "    <div class=\"img-wrapper\">
        <a href=\"";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 72, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 72)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 72), "entity", [], "any", false, false, true, 72), "uri", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72), 72, $this->source)), "html", null, true);
            echo "\"></a>
    </div>
    ";
        }
        // line 75
        echo "    <div class=\"casestudy-details\">
        ";
        // line 76
        if (($context["label"] ?? null)) {
            // line 77
            echo "        <h4><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 77, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 77, $this->source), "html", null, true);
            echo "</a></h4>
        ";
        }
        // line 79
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 79)) {
            // line 80
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 82
        echo "        <div class=\"casestudy-action\">
            ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "addtoany", [], "any", false, false, true, 83)) {
            // line 84
            echo "            <div class=\"icon-link\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "addtoany", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "</div>
            ";
        }
        // line 86
        echo "            <a class=\"icon-button small\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 86, $this->source), "html", null, true);
        echo "\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i> View more</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/content/node--case-studies--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 86,  82 => 84,  80 => 83,  77 => 82,  71 => 80,  68 => 79,  60 => 77,  58 => 76,  55 => 75,  47 => 72,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * january's theme implementation to display a node.
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
        <a href=\"{{ url }}\" rel=\"bookmark\"><img src=\"{{ file_url(content.field_media_image[0]['#media'].field_media_image.entity.uri.value) }}\"></a>
    </div>
    {% endif %}
    <div class=\"casestudy-details\">
        {% if label %}
        <h4><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a></h4>
        {% endif %}
        {% if content.body %}
        {{ content.body }}
        {% endif %}
        <div class=\"casestudy-action\">
            {% if content.addtoany %}
            <div class=\"icon-link\">{{ content.addtoany }}</div>
            {% endif %}
            <a class=\"icon-button small\" href=\"{{ url }}\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i> View more</a>
        </div>
    </div>
</div>
", "themes/custom/january/templates/content/node--case-studies--teaser.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/content/node--case-studies--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 70);
        static $filters = array("escape" => 72);
        static $functions = array("file_url" => 72);

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
