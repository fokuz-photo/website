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

/* @particles/contenttabs.html.twig */
class __TwigTemplate_0e9ec3323cd49527696076a733d98a7d2ba324c96420da57aff3124e2e7aab58 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript' => [$this, 'block_javascript'],
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contenttabs.html.twig", 1);
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
            // line 7
            echo "            <div class=\"g-grid\">
                <div class=\"g-block size-100\">
                    <div class=\"g-content\">
                        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\"><h2 class=\"heading heading-large link-heading\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []));
            echo "</h2></a>
                    </div>
                </div>
                <div class=\"g-block size-50\">
                    <div class=\"g-content\">
                        ";
            // line 15
            if ($this->getAttribute(($context["particle"] ?? null), "desc", [])) {
                echo "<div class=\"\">";
                echo $this->getAttribute(($context["particle"] ?? null), "desc", []);
                echo "</div>";
            }
            // line 16
            echo "                    </div>
                </div>
                <div class=\"g-block size-50\">
                    <div class=\"g-content\">
                        ";
            // line 20
            if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
                // line 21
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
                echo "\" class=\"fancybox\">
                                <img loading=\"lazy\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "thumbnail", [])), "html", null, true);
                echo "\" class=\"\" alt=\"Kontakt\" width=\"400\" height=\"300\">
                            </a>
                        ";
            }
            // line 25
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 29
        echo "
        <div class=\"g-contenttabs\">
            <div id=\"g-contenttabs-";
        // line 31
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-contenttabs-container\">
                <ul class=\"g-contenttabs-tab-wrapper-container\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
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
            // line 34
            echo "                        <li class=\"g-contenttabs-tab-wrapper\">
                            <a class=\"g-contenttabs-tab-wrapper-head\" href=\"#g-contenttabs-item-";
            // line 35
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\">
                                <span class=\"heading heading-small\">";
            // line 36
            echo $this->getAttribute($context["item"], "title", []);
            echo "</span>
                            </a>
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
        // line 40
        echo "                </ul>

                <div class=\"clearfix\"></div>

                <ul class=\"g-contenttabs-content-wrapper-container\">

                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
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
            // line 47
            echo "                        <li class=\"g-contenttabs-tab-wrapper\">
                            <div class=\"g-contenttabs-tab-wrapper-body\">
                                <div id=\"g-contenttabs-item-";
            // line 49
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\" class=\"g-contenttabs-content\">
                                    ";
            // line 50
            echo do_shortcode($this->getAttribute($context["item"], "content", []));
            echo "
                                </div>
                            </div>
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
        // line 55
        echo "
                </ul>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

";
    }

    // line 64
    public function block_javascript($context, array $blocks = [])
    {
        // line 65
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 66
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/juitabs.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 69
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 70
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            jQuery('#g-contenttabs-";
        // line 72
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').tabs({
                show: {
                    ";
        // line 74
        if ((((($this->getAttribute(($context["particle"] ?? null), "animation", []) == "up") || ($this->getAttribute(($context["particle"] ?? null), "animation", []) == "down")) || ($this->getAttribute(($context["particle"] ?? null), "animation", []) == "left")) || ($this->getAttribute(($context["particle"] ?? null), "animation", []) == "right"))) {
            // line 75
            echo "                    effect: 'slide',
                    direction: '";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation", []), "html", null, true);
            echo "',
                    ";
        } else {
            // line 78
            echo "                    effect: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animation", []), "slide")) : ("slide")), "html", null, true);
            echo "',
                    ";
        }
        // line 80
        echo "                    duration: 500
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/contenttabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 80,  252 => 78,  247 => 76,  244 => 75,  242 => 74,  237 => 72,  233 => 70,  230 => 69,  223 => 66,  220 => 65,  217 => 64,  206 => 55,  187 => 50,  181 => 49,  177 => 47,  160 => 46,  152 => 40,  134 => 36,  128 => 35,  125 => 34,  108 => 33,  103 => 31,  99 => 29,  93 => 25,  87 => 22,  82 => 21,  80 => 20,  74 => 16,  68 => 15,  58 => 10,  53 => 7,  51 => 6,  47 => 5,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/contenttabs.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/contenttabs.html.twig");
    }
}
