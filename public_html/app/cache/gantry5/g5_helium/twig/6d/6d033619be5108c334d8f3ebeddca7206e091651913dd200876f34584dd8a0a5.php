<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/testimonials_carousel.html.twig */
class __TwigTemplate_1a651d19dad9e9a7e9bfdbf6b8fc710e5c4d16d40bce51be6366599176ff55f0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/testimonials_carousel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
    <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
        <div id=\"g-owlcarousel-";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-owlcarousel owl-carousel ";
        if (($this->getAttribute(($context["particle"] ?? null), "imageOverlay", []) == "enable")) {
            echo "has-color-overlay";
        }
        echo "\">

            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "                ";
            if ( !$this->getAttribute($context["item"], "disable", [])) {
                // line 10
                echo "                    <div class=\"g-owlcarousel-item ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
                echo "\">
                        <div class=\"g-grid\">
                            <div class=\"g-block\">
                                <div class=\"g-content\">
                                    ";
                // line 14
                if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                    // line 15
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
                    echo "\">
                                            <h2 class=\"heading heading-large link-heading\">";
                    // line 16
                    echo $this->getAttribute(($context["particle"] ?? null), "title", []);
                    echo "</h2></a>
                                    ";
                }
                // line 18
                echo "                                </div>
                            </div>
                        </div>
                        <div class=\"g-grid\">
                            <div class=\"g-block size-50\">
                                <div class=\"g-content\">
                                    ";
                // line 24
                if ($this->getAttribute($context["item"], "image", [])) {
                    echo "<img loading=\"lazy\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])), "html", null, true);
                    echo "\" class=\"carousel-img\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []));
                    echo "\" width=\"560\" height=\"400\">";
                }
                // line 25
                echo "                                </div>
                            </div>
                            <div class=\"g-block size-50\">
                                <div class=\"g-content\">
                                    <div class=\"g-content-meta\">
                                        ";
                // line 30
                if ($this->getAttribute($context["item"], "name", [])) {
                    echo "<h3>";
                    echo $this->getAttribute($context["item"], "name", []);
                    echo "</h3>";
                }
                // line 31
                echo "                                        ";
                if ($this->getAttribute($context["item"], "date", [])) {
                    echo "<span>";
                    echo $this->getAttribute($context["item"], "date", []);
                    echo "</span>";
                }
                // line 32
                echo "                                    </div>
                                    ";
                // line 33
                if ($this->getAttribute($context["item"], "desc", [])) {
                    // line 34
                    echo "                                        <p>";
                    echo $this->getAttribute($context["item"], "desc", []);
                }
                echo "</p>
                                    ";
                // line 35
                if ($this->getAttribute($context["item"], "link", [])) {
                    // line 36
                    echo "                                        <div class=\"g-owlcarousel-item-link\">
                                            <a target=\"_self\" class=\"g-owlcarousel-item-button link-opaque ";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", []));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                    echo "\">
                                                ";
                    // line 38
                    echo $this->getAttribute($context["item"], "linktext", []);
                    echo "
                                            </a>
                                        </div>
                                    ";
                }
                // line 42
                echo "                                </div>
                            </div>
                        </div>
                        <div class=\"g-grid\">
                            <div class=\"g-block\">
                                <div class=\"g-content\">
                                    <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
                echo "\" class=\"link-opaque\">Mehr sehen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 54
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
        </div>
    </div>

";
    }

    // line 61
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 62
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 63
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            jQuery('#g-owlcarousel-";
        // line 66
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').owlCarousel({
                items: 1,
                rtl: ";
        // line 68
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                loop: true,
                ";
        // line 70
        if (($this->getAttribute(($context["particle"] ?? null), "nav", []) == "enable")) {
            // line 71
            echo "                nav: true,
                navText: ['";
            // line 72
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "prevText", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "prevText", []), "<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "nextText", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "nextText", []), "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "'],
                ";
        } else {
            // line 74
            echo "                nav: false,
                ";
        }
        // line 76
        echo "                ";
        if (($this->getAttribute(($context["particle"] ?? null), "dots", []) == "enable")) {
            // line 77
            echo "                dots: true,
                ";
        } else {
            // line 79
            echo "                dots: false,
                ";
        }
        // line 81
        echo "                ";
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) == "enable")) {
            // line 82
            echo "                autoplay: true,
                autoplayTimeout: ";
            // line 83
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", []), "5000")) : ("5000")), "html", null, true);
            echo ",
                ";
        } else {
            // line 85
            echo "                autoplay: false,
                ";
        }
        // line 87
        echo "            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/testimonials_carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 87,  247 => 85,  242 => 83,  239 => 82,  236 => 81,  232 => 79,  228 => 77,  225 => 76,  221 => 74,  214 => 72,  211 => 71,  209 => 70,  200 => 68,  195 => 66,  188 => 63,  185 => 62,  182 => 61,  174 => 55,  168 => 54,  159 => 48,  151 => 42,  144 => 38,  138 => 37,  135 => 36,  133 => 35,  127 => 34,  125 => 33,  122 => 32,  115 => 31,  109 => 30,  102 => 25,  94 => 24,  86 => 18,  81 => 16,  76 => 15,  74 => 14,  66 => 10,  63 => 9,  59 => 8,  50 => 6,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/testimonials_carousel.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/testimonials_carousel.html.twig");
    }
}
