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

/* themes/custom/january/templates/layout/page.html.twig */
class __TwigTemplate_9af92d06f30ba738598afbab7b8f4676 extends Template
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
        // line 48
        echo "

";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 50) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 50))) {
            // line 51
            echo "\t";
            // line 52
            echo "\t<div class=\"topbar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class='topbar-left'>
\t\t\t\t\t\t";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t<a href=\"tel:+";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 58, $this->source), "html", null, true);
            echo "\">+";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 58, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t";
            // line 62
            if (($context["social"] ?? null)) {
                // line 63
                echo "\t\t\t\t\t<ul class=\"social-links\">
\t\t\t\t\t\t";
                // line 64
                if (($context["january_social_link_facebook"] ?? null)) {
                    // line 65
                    echo "\t\t\t\t\t\t<li class='facebook'>
\t\t\t\t\t\t\t<a href=\"";
                    // line 66
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_facebook"] ?? null), 66, $this->source), "html", null, true);
                    echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t\t\t";
                if (($context["january_social_link_twitter"] ?? null)) {
                    // line 72
                    echo "\t\t\t\t\t\t<li class='twitter'>
\t\t\t\t\t\t\t<a href=\"";
                    // line 73
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_twitter"] ?? null), 73, $this->source), "html", null, true);
                    echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 78
                echo "\t\t\t\t\t\t";
                if (($context["january_social_link_instagram"] ?? null)) {
                    // line 79
                    echo "\t\t\t\t\t\t<li class='insta'>
\t\t\t\t\t\t\t<a href=\"";
                    // line 80
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_instagram"] ?? null), 80, $this->source), "html", null, true);
                    echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t\t";
                if (($context["january_social_link_youtube"] ?? null)) {
                    // line 86
                    echo "\t\t\t\t\t\t<li class='youtube'>
\t\t\t\t\t\t\t<a href=\"";
                    // line 87
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_youtube"] ?? null), 87, $this->source), "html", null, true);
                    echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<header id=\"header\" class=\"site-header sticky-top\" data-drupal-selector=\"site-header\">
\t\t";
            // line 101
            echo "\t\t<nav class=\"navbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarScroll\" aria-controls=\"navbarScroll\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<svg class=\"open-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"28\" viewbox=\"0 0 48 28\">
\t\t\t\t\t\t<g transform=\"translate(-205 -94)\">
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 94)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 106)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 118)\" fill=\"#284544\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>

\t\t\t\t\t<svg class=\"close-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"38.348\" height=\"35.091\" viewbox=\"0 0 38.348 35.091\">
\t\t\t\t\t\t<g transform=\"translate(-209.826 -73.455)\">
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(212.503 73.455) rotate(42)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(248.174 76.427) rotate(138)\" fill=\"#284544\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>

\t\t\t\t</button>
\t\t\t\t";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarScroll\">
\t\t\t\t\t";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "
\t\t\t\t\t<p>
\t\t\t\t\t";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["management_message"] ?? null), 124, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t<a href=\"mailto:";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 125, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 125, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t\t<a href=\"tel:+";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 126, $this->source), "html", null, true);
            echo "\">+";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 126, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
";
        }
        // line 133
        echo "
";
        // line 134
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 134) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 134))) {
            // line 135
            echo "<div class='page-highlighted'>
\t";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "
\t";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page", [], "any", false, false, true, 137), "secondary_menu", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "
</div>
";
        }
        // line 140
        echo "
";
        // line 141
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 141)) {
            // line 142
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
            echo "
";
        }
        // line 144
        echo "
";
        // line 145
        if ( !($context["is_front"] ?? null)) {
            // line 146
            echo "<div class=\"small-banner\">
  <div class=\"page-title\">
    <div class=\"container\">
      <div class=\"col wow fadeInUpBig\">
        <div class=\"inner-right\">
          <h1>";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["page"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 151, $this->source), "html", null, true);
            echo "</h1>
          ";
            // line 152
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 152)) {
                // line 153
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 155
            echo "        </div>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 161
        echo "<main role=\"main\">
\t";
        // line 162
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 162) &&  !($context["is_front"] ?? null))) {
            echo "\t
\t\t<div class=\"page-with-sidebar section-spacing inner-page\">
\t\t\t<div class=\"container\">
\t\t        <div class=\"row\">
\t\t\t\t\t<div class='col-md-8 col-lg-9'>
\t";
        } elseif ( !        // line 167
($context["is_front"] ?? null)) {
            // line 168
            echo "\t\t<div class=\"page-without-sidebar section-spacing inner-page\">
\t\t\t<div class='container'>
\t";
        } else {
            // line 171
            echo "\t\t<div class=\"page-without-sidebar section-spacing\">
\t";
        }
        // line 173
        echo "\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
        echo "
\t";
        // line 176
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 176) &&  !($context["is_front"] ?? null))) {
            echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-lg-3 right-sidebar\">
\t\t\t\t\t\t";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        } elseif ( !        // line 184
($context["is_front"] ?? null)) {
            // line 185
            echo "\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 188
            echo "\t\t</div>
\t";
        }
        // line 190
        echo "</main>

";
        // line 192
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 192) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 192)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 192)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 192))) {
            // line 193
            echo " <footer class=\"site-footer wow fadeInUp\">
\t";
            // line 194
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 194) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 194)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 194))) {
                // line 195
                echo "\t<div class='footer-top'>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t<div class='footer-contact'>
\t\t\t\t\t\t";
                // line 200
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 201
                if (($context["january_logo_footer_use"] ?? null)) {
                    // line 202
                    echo "\t\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t\t<a href='/'><img src='";
                    // line 203
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_logo_footer"] ?? null), 203, $this->source), "html", null, true);
                    echo "' alt='Logo'></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 206
                echo "\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-location-dot\"></i>
\t\t\t\t\t\t\t<p>";
                // line 208
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_address"] ?? null), 208, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>      
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-phone\"></i>
\t\t\t\t\t\t\t<a href=\"tel:+";
                // line 212
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 212, $this->source), "html", null, true);
                echo "\">+";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 212, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-envelope-open\"></i>
\t\t\t\t\t\t\t<a href=\"mailto:";
                // line 216
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 216, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 216, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-6\">
\t\t\t\t\t<div class ='footer-quick-link'>
\t\t\t\t\t\t";
                // line 222
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-3\">
\t\t\t\t\t<div class='footer-subscribe-us'>
\t\t\t\t\t\t";
                // line 227
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 228
                if (($context["social"] ?? null)) {
                    // line 229
                    echo "\t\t\t\t\t\t<ul class=\"social-links list-inline d-flex align-items-center m-0\">
\t\t\t\t\t\t\t";
                    // line 230
                    if (($context["january_social_link_facebook"] ?? null)) {
                        // line 231
                        echo "\t\t\t\t\t\t\t<li class='facebook'>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 232
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_facebook"] ?? null), 232, $this->source), "html", null, true);
                        echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 237
                    echo "\t\t\t\t\t\t\t";
                    if (($context["january_social_link_twitter"] ?? null)) {
                        // line 238
                        echo "\t\t\t\t\t\t\t<li class='twitter'>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 239
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_twitter"] ?? null), 239, $this->source), "html", null, true);
                        echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 244
                    echo "\t\t\t\t\t\t\t";
                    if (($context["january_social_link_instagram"] ?? null)) {
                        // line 245
                        echo "\t\t\t\t\t\t\t<li class='insta'>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 246
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_instagram"] ?? null), 246, $this->source), "html", null, true);
                        echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 251
                    echo "\t\t\t\t\t\t\t";
                    if (($context["january_social_link_youtube"] ?? null)) {
                        // line 252
                        echo "\t\t\t\t\t\t\t<li class='youtube'>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 253
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_youtube"] ?? null), 253, $this->source), "html", null, true);
                        echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 258
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                // line 259
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 266
            echo "\t<div class=\"copyright-sec\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">\t\t
\t\t\t\t";
            // line 269
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 269)) {
                // line 270
                echo "\t\t\t\t\t<div class=\"col-md-6 text-center text-lg-start\">
\t\t\t\t\t\tAll Rights Reserved by @";
                // line 271
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t <div class=\"col-md-6 text-center text-lg-end designerdby\">
\t\t\t\t\t \t<a href=\"https://www.dotsquares.com/lp/drupal\" target='_blank'>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Layer_1\" x=\"0px\" y=\"0px\" width=\"16px\" height=\"16px\" viewBox=\"0 0 16 16\" enable-background=\"new 0 0 16 16\" xml:space=\"preserve\">  <image id=\"image0\" width=\"16\" height=\"16\" x=\"0\" y=\"0\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJN AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAw1BMVEX0gSj0gyzzdhb6yaP9 6dnzehz0gir96Nj5tYHzdxf0fiP1kEL0hS/zeRr6yqX96dr0fCD0hC35toPzeRv0hjD0gCf2kkXy awL6xZv859bwbgnxdxnwbgr85tT4r3bybAPzcxD1hzL/9u7/yZn/zaD/ypr/9u3838n6xZz6yKH7 0K7y9/7J1+3M2u7y9/3/8+j859f97N4aLmklOnPJ1uv/tHXwbwv1ijgwRX0lOnTM2ez/uX7xeBr0 hS70fyX1kUT///9NSq1tAAAAAWJLR0RA/tlc2AAAAAd0SU1FB+cBDQURDSM87bEAAACNSURBVBjT hY9XFoIwFERfSBM1EKxArBA7WIgF+/535QLeh7/3nJm5AwDEo4wLwWXDJ80WIEBIWwWhjiItO91e fwCep4ZxkhozGk+majYHSoNYZrm1i+VqHWy2wFiYZLuiLIv94RjKE3Cu07yonKvOl6v2byBEZGzp 6vr+eL7eny8GKIJK0SwSQ+p/3/4AUrgXcZWWOC8AAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDEt MTNUMDU6MTc6MTMrMDA6MDCPV1nyAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTAxLTEzVDA1OjE3 OjEzKzAwOjAw/grhTgAAACh0RVh0ZGF0ZTp0aW1lc3RhbXAAMjAyMy0wMS0xM1QwNToxNzoxMysw MDowMKkfwJEAAAAASUVORK5CYII=\"/></svg>
\t\t\t\t\t\t\tDotsquares
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 280
                echo "\t\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 282
            echo "\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<a href=\"#top\" id=\"top\"><span class=\"topbutton\"><i class=\"fa-solid fa-angle-up\"></i></span></a>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/january/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 282,  484 => 280,  472 => 271,  469 => 270,  467 => 269,  462 => 266,  453 => 259,  449 => 258,  441 => 253,  438 => 252,  435 => 251,  427 => 246,  424 => 245,  421 => 244,  413 => 239,  410 => 238,  407 => 237,  399 => 232,  396 => 231,  394 => 230,  391 => 229,  389 => 228,  385 => 227,  377 => 222,  366 => 216,  357 => 212,  350 => 208,  346 => 206,  340 => 203,  337 => 202,  335 => 201,  331 => 200,  324 => 195,  322 => 194,  319 => 193,  317 => 192,  313 => 190,  309 => 188,  304 => 185,  302 => 184,  294 => 179,  288 => 176,  284 => 175,  280 => 174,  275 => 173,  271 => 171,  266 => 168,  264 => 167,  256 => 162,  253 => 161,  245 => 155,  239 => 153,  237 => 152,  233 => 151,  226 => 146,  224 => 145,  221 => 144,  215 => 142,  213 => 141,  210 => 140,  204 => 137,  200 => 136,  197 => 135,  195 => 134,  192 => 133,  180 => 126,  174 => 125,  170 => 124,  165 => 122,  160 => 120,  139 => 101,  131 => 94,  127 => 92,  119 => 87,  116 => 86,  113 => 85,  105 => 80,  102 => 79,  99 => 78,  91 => 73,  88 => 72,  85 => 71,  77 => 66,  74 => 65,  72 => 64,  69 => 63,  67 => 62,  58 => 58,  54 => 57,  47 => 52,  45 => 51,  43 => 50,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * january's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.content: The main content of the current page.
 * - page.sidebar: Items for the first sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.social: Items for the social region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}


{% if page.header or page.primary_menu %}
\t{# topbar #}
\t<div class=\"topbar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class='topbar-left'>
\t\t\t\t\t\t{{ page.topbar }}
\t\t\t\t\t\t<a href=\"tel:+{{ january_info_link_phone }}\">+{{ january_info_link_phone }}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t{% if social %}
\t\t\t\t\t<ul class=\"social-links\">
\t\t\t\t\t\t{% if january_social_link_facebook %}
\t\t\t\t\t\t<li class='facebook'>
\t\t\t\t\t\t\t<a href=\"{{ january_social_link_facebook }}\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if january_social_link_twitter %}
\t\t\t\t\t\t<li class='twitter'>
\t\t\t\t\t\t\t<a href=\"{{ january_social_link_twitter }}\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if january_social_link_instagram %}
\t\t\t\t\t\t<li class='insta'>
\t\t\t\t\t\t\t<a href=\"{{ january_social_link_instagram }}\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if january_social_link_youtube %}
\t\t\t\t\t\t<li class='youtube'>
\t\t\t\t\t\t\t<a href=\"{{ january_social_link_youtube }}\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<header id=\"header\" class=\"site-header sticky-top\" data-drupal-selector=\"site-header\">
\t\t{# navbar #}
\t\t<nav class=\"navbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarScroll\" aria-controls=\"navbarScroll\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<svg class=\"open-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"28\" viewbox=\"0 0 48 28\">
\t\t\t\t\t\t<g transform=\"translate(-205 -94)\">
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 94)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 106)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 118)\" fill=\"#284544\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>

\t\t\t\t\t<svg class=\"close-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"38.348\" height=\"35.091\" viewbox=\"0 0 38.348 35.091\">
\t\t\t\t\t\t<g transform=\"translate(-209.826 -73.455)\">
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(212.503 73.455) rotate(42)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(248.174 76.427) rotate(138)\" fill=\"#284544\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>

\t\t\t\t</button>
\t\t\t\t{{ page.header }}
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarScroll\">
\t\t\t\t\t{{ page.primary_menu }}
\t\t\t\t\t<p>
\t\t\t\t\t{{ management_message }}
\t\t\t\t\t\t<a href=\"mailto:{{ january_info_link_email }}\">{{ january_info_link_email }}</a>
\t\t\t\t\t\t<a href=\"tel:+{{ january_info_link_phone }}\">+{{ january_info_link_phone }}</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
{% endif %}

{% if page.highlighted or page.secondary_menu %}
<div class='page-highlighted'>
\t{{ page.highlighted }}
\t{{ page.page.secondary_menu }}
</div>
{% endif %}

{% if page.hero %}
\t{{ page.hero }}
{% endif %}

{% if not is_front %}
<div class=\"small-banner\">
  <div class=\"page-title\">
    <div class=\"container\">
      <div class=\"col wow fadeInUpBig\">
        <div class=\"inner-right\">
          <h1>{{ page['#title'] }}</h1>
          {% if page.breadcrumb  %}
            {{ page.breadcrumb }}
          {% endif %}
        </div>
      </div>
    </div>
  </div>
</div>
{% endif %}
<main role=\"main\">
\t{% if page.sidebar and not is_front %}\t
\t\t<div class=\"page-with-sidebar section-spacing inner-page\">
\t\t\t<div class=\"container\">
\t\t        <div class=\"row\">
\t\t\t\t\t<div class='col-md-8 col-lg-9'>
\t{% elseif not is_front %}
\t\t<div class=\"page-without-sidebar section-spacing inner-page\">
\t\t\t<div class='container'>
\t{% else %}
\t\t<div class=\"page-without-sidebar section-spacing\">
\t{% endif %}
\t\t\t{{ page.content_above }}
\t\t\t{{ page.content }}
\t\t\t{{ page.content_below }}
\t{% if page.sidebar and not is_front %}\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-lg-3 right-sidebar\">
\t\t\t\t\t\t{{ page.sidebar }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% elseif not is_front %}
\t\t\t</div>
\t\t</div>
\t{% else %}
\t\t</div>
\t{% endif %}
</main>

{% if page.footer_first or page.footer_second or page.footer_third or page.footer_bottom %}
 <footer class=\"site-footer wow fadeInUp\">
\t{% if page.footer_first or page.footer_second or page.footer_third %}
\t<div class='footer-top'>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t<div class='footer-contact'>
\t\t\t\t\t\t{{ page.footer_first }}
\t\t\t\t\t\t{% if january_logo_footer_use %}
\t\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t\t<a href='/'><img src='{{ january_logo_footer }}' alt='Logo'></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-location-dot\"></i>
\t\t\t\t\t\t\t<p>{{ january_info_link_address }}</p>
\t\t\t\t\t\t</div>      
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-phone\"></i>
\t\t\t\t\t\t\t<a href=\"tel:+{{ january_info_link_phone }}\">+{{ january_info_link_phone }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-envelope-open\"></i>
\t\t\t\t\t\t\t<a href=\"mailto:{{ january_info_link_email }}\">{{ january_info_link_email }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-6\">
\t\t\t\t\t<div class ='footer-quick-link'>
\t\t\t\t\t\t{{ page.footer_second }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-3\">
\t\t\t\t\t<div class='footer-subscribe-us'>
\t\t\t\t\t\t{{ page.footer_third }}
\t\t\t\t\t\t{% if social %}
\t\t\t\t\t\t<ul class=\"social-links list-inline d-flex align-items-center m-0\">
\t\t\t\t\t\t\t{% if january_social_link_facebook %}
\t\t\t\t\t\t\t<li class='facebook'>
\t\t\t\t\t\t\t\t<a href=\"{{ january_social_link_facebook }}\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if january_social_link_twitter %}
\t\t\t\t\t\t\t<li class='twitter'>
\t\t\t\t\t\t\t\t<a href=\"{{ january_social_link_twitter }}\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if january_social_link_instagram %}
\t\t\t\t\t\t\t<li class='insta'>
\t\t\t\t\t\t\t\t<a href=\"{{ january_social_link_instagram }}\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if january_social_link_youtube %}
\t\t\t\t\t\t\t<li class='youtube'>
\t\t\t\t\t\t\t\t<a href=\"{{ january_social_link_youtube }}\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% endif %}
\t<div class=\"copyright-sec\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">\t\t
\t\t\t\t{% if page.footer_bottom %}
\t\t\t\t\t<div class=\"col-md-6 text-center text-lg-start\">
\t\t\t\t\t\tAll Rights Reserved by @{{ \"now\" | date(\"Y\") }}
\t\t\t\t\t</div>
\t\t\t\t\t <div class=\"col-md-6 text-center text-lg-end designerdby\">
\t\t\t\t\t \t<a href=\"https://www.dotsquares.com/lp/drupal\" target='_blank'>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Layer_1\" x=\"0px\" y=\"0px\" width=\"16px\" height=\"16px\" viewBox=\"0 0 16 16\" enable-background=\"new 0 0 16 16\" xml:space=\"preserve\">  <image id=\"image0\" width=\"16\" height=\"16\" x=\"0\" y=\"0\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJN AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAw1BMVEX0gSj0gyzzdhb6yaP9 6dnzehz0gir96Nj5tYHzdxf0fiP1kEL0hS/zeRr6yqX96dr0fCD0hC35toPzeRv0hjD0gCf2kkXy awL6xZv859bwbgnxdxnwbgr85tT4r3bybAPzcxD1hzL/9u7/yZn/zaD/ypr/9u3838n6xZz6yKH7 0K7y9/7J1+3M2u7y9/3/8+j859f97N4aLmklOnPJ1uv/tHXwbwv1ijgwRX0lOnTM2ez/uX7xeBr0 hS70fyX1kUT///9NSq1tAAAAAWJLR0RA/tlc2AAAAAd0SU1FB+cBDQURDSM87bEAAACNSURBVBjT hY9XFoIwFERfSBM1EKxArBA7WIgF+/535QLeh7/3nJm5AwDEo4wLwWXDJ80WIEBIWwWhjiItO91e fwCep4ZxkhozGk+majYHSoNYZrm1i+VqHWy2wFiYZLuiLIv94RjKE3Cu07yonKvOl6v2byBEZGzp 6vr+eL7eny8GKIJK0SwSQ+p/3/4AUrgXcZWWOC8AAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDEt MTNUMDU6MTc6MTMrMDA6MDCPV1nyAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTAxLTEzVDA1OjE3 OjEzKzAwOjAw/grhTgAAACh0RVh0ZGF0ZTp0aW1lc3RhbXAAMjAyMy0wMS0xM1QwNToxNzoxMysw MDowMKkfwJEAAAAASUVORK5CYII=\"/></svg>
\t\t\t\t\t\t\tDotsquares
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t\t{{ page.footer_bottom }}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<a href=\"#top\" id=\"top\"><span class=\"topbutton\"><i class=\"fa-solid fa-angle-up\"></i></span></a>
{% endif %}", "themes/custom/january/templates/layout/page.html.twig", "/home/user/public_html/siva-new-demo/web/themes/custom/january/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 50);
        static $filters = array("escape" => 57, "date" => 271);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
