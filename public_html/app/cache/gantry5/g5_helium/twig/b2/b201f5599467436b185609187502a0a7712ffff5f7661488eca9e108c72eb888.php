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

/* partials/pagination.html.twig */
class __TwigTemplate_acb8eba9f38e99daaa679f704f11633dd1ddcf8f0564764346c9ebc2335a6bec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'pagination' => [$this, 'block_pagination'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["twigTemplate"] = "pagination.html.twig";
        // line 2
        echo "
<div class=\"pagination\">

    ";
        // line 5
        $this->displayBlock('pagination', $context, $blocks);
        // line 43
        echo "
</div>
";
    }

    // line 5
    public function block_pagination($context, array $blocks = [])
    {
        // line 6
        echo "
        <p class=\"counter pull-right\">
            ";
        // line 8
        $context["current_page"] = "1";
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pagination"] ?? null), "pages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 10
            echo "                ";
            if ($this->getAttribute($context["page"], "current", [])) {
                // line 11
                echo "                    ";
                $context["current_page"] = $this->getAttribute($context["page"], "title", []);
                // line 12
                echo "                ";
            }
            // line 13
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
            ";
        // line 15
        echo sprintf(__("Page %1\$s of %2\$s", ($context["textdomain"] ?? null)), ($context["current_page"] ?? null), $this->getAttribute(twig_last($this->env, $this->getAttribute(($context["pagination"] ?? null), "pages", [])), "name", []));
        echo "
        </p>

        <ul class=\"pagination-list\">
            ";
        // line 19
        if ($this->getAttribute(($context["pagination"] ?? null), "prev", [])) {
            // line 20
            echo "                <li class=\"pagination-list-item pagination-prev ";
            echo ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["pagination"] ?? null), "prev", []), "link", []))) ? ("") : ("hide"));
            echo "\">
                    <a href=\"";
            // line 21
            echo $this->getAttribute($this->getAttribute(($context["pagination"] ?? null), "prev", []), "link", []);
            echo "\" class=\"prev\">";
            echo __("Prev", ($context["textdomain"] ?? null));
            echo "</a>
                </li>
            ";
        }
        // line 24
        echo "
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pagination"] ?? null), "pages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                <li class=\"pagination-list-item ";
            echo (($this->getAttribute($context["page"], "current", [])) ? ("current-item") : (""));
            echo "\">
                    ";
            // line 27
            if ($this->getAttribute($context["page"], "link", [])) {
                // line 28
                echo "                        <a href=\"";
                echo $this->getAttribute($context["page"], "link", []);
                echo "\" class=\"";
                echo $this->getAttribute($context["page"], "class", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "title", []);
                echo "</a>
                    ";
            } else {
                // line 30
                echo "                        <span class=\"";
                echo $this->getAttribute($context["page"], "class", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "title", []);
                echo "</span>
                    ";
            }
            // line 32
            echo "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
            ";
        // line 35
        if ($this->getAttribute(($context["pagination"] ?? null), "next", [])) {
            // line 36
            echo "                <li class=\"pagination-list-item pagination-next ";
            echo ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["pagination"] ?? null), "next", []), "link", []))) ? ("") : ("hide"));
            echo "\">
                    <a href=\"";
            // line 37
            echo $this->getAttribute($this->getAttribute(($context["pagination"] ?? null), "next", []), "link", []);
            echo "\" class=\"next\">";
            echo __("Next", ($context["textdomain"] ?? null));
            echo "</a>
                </li>
            ";
        }
        // line 40
        echo "        </ul>

    ";
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 40,  149 => 37,  144 => 36,  142 => 35,  139 => 34,  132 => 32,  124 => 30,  114 => 28,  112 => 27,  107 => 26,  103 => 25,  100 => 24,  92 => 21,  87 => 20,  85 => 19,  78 => 15,  75 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  55 => 9,  53 => 8,  49 => 6,  46 => 5,  40 => 43,  38 => 5,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/pagination.html.twig", "/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/views/partials/pagination.html.twig");
    }
}
