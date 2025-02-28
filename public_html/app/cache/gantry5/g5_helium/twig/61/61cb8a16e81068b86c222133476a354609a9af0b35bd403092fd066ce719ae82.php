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

/* @particles/owlcarousel.html.twig */
class __TwigTemplate_65c2ebbeb9d8e0a5e3f4b93a013b8d90e0003d1a2b8dbfad385cfb8e5b462b5a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/owlcarousel.html.twig", 1);
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
        ";
        // line 6
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 7
        echo "

        <div id=\"g-owlcarousel-";
        // line 9
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-owlcarousel owl-carousel ";
        if (($this->getAttribute(($context["particle"] ?? null), "imageOverlay", []) == "enable")) {
            echo "has-color-overlay";
        }
        echo "\">

            ";
        // line 11
        $context["slide_counter"] = 1;
        // line 12
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "                ";
            if ( !$this->getAttribute($context["item"], "disable", [])) {
                // line 14
                echo "                    <div class=\"g-owlcarousel-item ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
                echo "\">
                        <div class=\"g-owlcarousel-item-wrapper\">
                            <div class=\"g-owlcarousel-item-img\">
                                <img ";
                // line 17
                if ((($context["slide_counter"] ?? null) > 1)) {
                    echo "loading=\"lazy\"";
                }
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
                echo "\" class=\"carousel-img-hero\" width=\"1200\" height=\"745\">
                            </div>
                            <div class=\"g-owlcarousel-item-content-container\">
                                <div class=\"g-owlcarousel-item-content-wrapper\">
                                    <div class=\"g-owlcarousel-item-content\">
                                        ";
                // line 22
                if ($this->getAttribute($context["item"], "line1", [])) {
                    // line 23
                    echo "                                            <h1><span class=\"heading heading-medium\">";
                    echo $this->getAttribute($context["item"], "line1", []);
                    echo "</span><br>";
                }
                // line 24
                echo "                                        ";
                if ($this->getAttribute($context["item"], "line2", [])) {
                    // line 25
                    echo "                                            <span class=\"heading heading-sub\">";
                    echo $this->getAttribute($context["item"], "line2", []);
                    echo "</span></h1>";
                }
                // line 26
                echo "                                        ";
                if ($this->getAttribute($context["item"], "link", [])) {
                    // line 27
                    echo "                                            <div class=\"g-owlcarousel-item-link\">
                                                <a target=\"_self\" class=\"button ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", []));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                    echo "\">
                                                    ";
                    // line 29
                    echo $this->getAttribute($context["item"], "linktext", []);
                    echo "
                                                </a>
                                            </div>
                                        ";
                }
                // line 33
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 39
            echo "                ";
            $context["slide_counter"] = (($context["slide_counter"] ?? null) + 1);
            // line 40
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div>
    </div>

";
    }

    // line 46
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 47
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 48
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            jQuery('#g-owlcarousel-";
        // line 51
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').owlCarousel({
                items: 1,
                rtl: ";
        // line 53
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                loop: true,
                ";
        // line 55
        if (($this->getAttribute(($context["particle"] ?? null), "nav", []) == "enable")) {
            // line 56
            echo "                nav: true,
                navText: ['";
            // line 57
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "prevText", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "prevText", []), "<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "nextText", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "nextText", []), "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "'],
                ";
        } else {
            // line 59
            echo "                nav: false,
                ";
        }
        // line 61
        echo "                ";
        if (($this->getAttribute(($context["particle"] ?? null), "dots", []) == "enable")) {
            // line 62
            echo "                dots: true,
                ";
        } else {
            // line 64
            echo "                dots: false,
                ";
        }
        // line 66
        echo "                ";
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) == "enable")) {
            // line 67
            echo "                autoplay: true,
                autoplayTimeout: ";
            // line 68
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", []), "5000")) : ("5000")), "html", null, true);
            echo ",
                ";
        } else {
            // line 70
            echo "                autoplay: false,
                ";
        }
        // line 72
        echo "            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 72,  223 => 70,  218 => 68,  215 => 67,  212 => 66,  208 => 64,  204 => 62,  201 => 61,  197 => 59,  190 => 57,  187 => 56,  185 => 55,  176 => 53,  171 => 51,  164 => 48,  161 => 47,  158 => 46,  151 => 41,  145 => 40,  142 => 39,  134 => 33,  127 => 29,  121 => 28,  118 => 27,  115 => 26,  110 => 25,  107 => 24,  102 => 23,  100 => 22,  86 => 17,  79 => 14,  76 => 13,  71 => 12,  69 => 11,  60 => 9,  56 => 7,  50 => 6,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/owlcarousel.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/owlcarousel.html.twig");
    }
}
