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

/* themes/custom/january/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_37cbc8b8e9b8cc59166ae7b23d9763e5 extends Template
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
        // line 10
        echo "
";
        // line 11
        if (($context["breadcrumb"] ?? null)) {
            // line 12
            echo "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            echo "</h2>
    <div class=\"breadcrumb__content\">
      <ol class=\"breadcrumb__list\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "          <li class=\"breadcrumb__item\">
            ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 18)) {
                    // line 19
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo "\" class=\"breadcrumb__link\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 21
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 23
                echo "          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      </ol>
    </div>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  76 => 23,  70 => 21,  62 => 19,  60 => 18,  57 => 17,  53 => 16,  47 => 13,  44 => 12,  42 => 11,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a breadcrumb trail.
 *
 * Available variables:
 * - breadcrumb: Breadcrumb trail items.
 */
#}

{% if breadcrumb %}
  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">{{ 'Breadcrumb'|t }}</h2>
    <div class=\"breadcrumb__content\">
      <ol class=\"breadcrumb__list\">
        {% for item in breadcrumb %}
          <li class=\"breadcrumb__item\">
            {% if item.url %}
              <a href=\"{{ item.url }}\" class=\"breadcrumb__link\">{{ item.text }}</a>
            {% else %}
              {{ item.text }}
            {% endif %}
          </li>
        {% endfor %}
      </ol>
    </div>
  </nav>
{% endif %}
", "themes/custom/january/templates/navigation/breadcrumb.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/navigation/breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "for" => 16);
        static $filters = array("t" => 13, "escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'escape'],
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
