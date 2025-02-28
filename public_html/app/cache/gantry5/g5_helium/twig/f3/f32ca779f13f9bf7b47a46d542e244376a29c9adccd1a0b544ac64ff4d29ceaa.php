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

/* archive.html.twig */
class __TwigTemplate_42e6906c799763d86d0119c825501827fba143d3b4c0762cea6a53cbc326fa68 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["twigTemplate"] = "archive.html.twig";
        // line 3
        $context["scope"] = "archive";
        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "archive.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    <div class=\"platform-content\">
        <div class=\"archive\">

            ";
        // line 11
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".heading.enabled"), 1 => "0"], "method")) {
            // line 12
            echo "                <header class=\"page-header\">
                    <h1>
                        ";
            // line 14
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".heading.text")], "method"))) {
                // line 15
                echo "                            ";
                echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".heading.text")], "method");
                echo "
                        ";
            } else {
                // line 17
                echo "                            ";
                echo ($context["title"] ?? null);
                echo "
                        ";
            }
            // line 19
            echo "                    </h1>
                </header>
            ";
        }
        // line 22
        echo "            ";
        // line 23
        echo "
            ";
        // line 24
        if ( !twig_test_empty(($context["posts"] ?? null))) {
            // line 25
            echo "
                ";
            // line 27
            echo "                <section class=\"entries\">
                    <div class=\"g-grid\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 30
                echo "                            <div class=\"g-block ";
                if ((($this->getAttribute(($context["pagination"] ?? null), "current", []) == 1) && twig_in_filter("sticky", $this->getAttribute($context["post"], "class", [])))) {
                    echo "size-100";
                } else {
                    echo (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", [], "any", false, true), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".content.columns")], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", [], "any", false, true), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".content.columns")], "method"), "size-100")) : ("size-100"));
                }
                echo "\">
                                ";
                // line 31
                $this->loadTemplate([0 => (("partials/content-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => (($this->getAttribute($context["post"], "format", [])) ? ((("partials/content-" . $this->getAttribute($context["post"], "format", [])) . ".html.twig")) : ("")), 2 => "partials/content.html.twig"], "archive.html.twig", 31)->display($context);
                // line 32
                echo "                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </div>
                </section>
                ";
            // line 37
            echo "
                ";
            // line 39
            echo "                ";
            if (($this->getAttribute(($context["pagination"] ?? null), "pages", []) && (twig_length_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "pages", [])) > 1))) {
                // line 40
                echo "                    ";
                $this->loadTemplate("partials/pagination.html.twig", "archive.html.twig", 40)->display($context);
                // line 41
                echo "                ";
            }
            // line 42
            echo "                ";
            // line 43
            echo "
            ";
        } else {
            // line 45
            echo "
                ";
            // line 47
            echo "                <div class=\"no-matches-notice\">
                    <h1>
                        ";
            // line 49
            echo __("Sorry, but there aren't any posts matching your query.", ($context["textdomain"] ?? null));
            echo "
                    </h1>
                </div>

            ";
        }
        // line 54
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 54,  165 => 49,  161 => 47,  158 => 45,  154 => 43,  152 => 42,  149 => 41,  146 => 40,  143 => 39,  140 => 37,  136 => 34,  121 => 32,  119 => 31,  110 => 30,  93 => 29,  89 => 27,  86 => 25,  84 => 24,  81 => 23,  79 => 22,  74 => 19,  68 => 17,  62 => 15,  60 => 14,  56 => 12,  53 => 11,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "archive.html.twig", "/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/views/archive.html.twig");
    }
}
