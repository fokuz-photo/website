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

/* forms/fields/wordpress/categories.html.twig */
class __TwigTemplate_7b048ab7fb4726a385aa5c361c30cadf5e5aeac11e9fd35a925c3ae57ce742a2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/fields/input/selectize.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/fields/input/selectize.html.twig", "forms/fields/wordpress/categories.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $context["taxonomy"] = (($this->getAttribute(($context["field"] ?? null), "taxonomy", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "taxonomy", []), "category")) : ("category"));
        // line 5
        echo "    ";
        $context["hide_empty"] = (($this->getAttribute(($context["field"] ?? null), "hide_empty", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "hide_empty", []), "false")) : ("false"));
        // line 6
        echo "    ";
        $context["query_parameters"] = ["taxonomy" =>         // line 7
($context["taxonomy"] ?? null), "hide_empty" =>         // line 8
($context["hide_empty"] ?? null)];
        // line 10
        echo "    ";
        $context["categories"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "getCategories", [0 => ($context["query_parameters"] ?? null)], "method");
        // line 11
        echo "    ";
        $context["Options"] = $this->getAttribute($this->getAttribute(($context["field"] ?? null), "selectize", []), "Options", []);
        // line 12
        echo "    ";
        $context["options"] = [];
        // line 13
        echo "    ";
        if (($context["categories"] ?? null)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["category"]) {
                // line 15
                echo "            ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), [0 => ["value" => $context["id"], "text" => $context["category"]]]);
                // line 16
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
        ";
            // line 18
            $context["field"] = twig_array_merge(twig_array_merge(($context["field"] ?? null), (($this->getAttribute($this->getAttribute(($context["field"] ?? null), "selectize", [], "any", false, true), "Options", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "selectize", [], "any", false, true), "Options", []), [])) : ([]))), ["selectize" => ["Options" => ($context["options"] ?? null)]]);
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    data-selectize=\"";
        // line 21
        echo (($this->getAttribute(($context["field"] ?? null), "selectize", [], "any", true, true)) ? (twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "selectize", [])), "html_attr")) : (""));
        echo "\"
    ";
        // line 22
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/wordpress/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  90 => 21,  87 => 20,  84 => 19,  82 => 18,  79 => 17,  73 => 16,  70 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 8,  50 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/wordpress/categories.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/plugins/gantry5/admin/templates/forms/fields/wordpress/categories.html.twig");
    }
}
