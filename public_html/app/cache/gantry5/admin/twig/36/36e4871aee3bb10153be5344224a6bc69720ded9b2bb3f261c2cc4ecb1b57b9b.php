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

/* @gantry-admin/pages/configurations/content/content.html.twig */
class __TwigTemplate_d7601f1036be78eb44773113bc73062aa845f91cba6fcdd32b71a455032f162a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'gantry' => [$this, 'block_gantry'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/content/content.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $context["stored_data"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->jsonDecodeFilter(_twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->getCookie("g5-collapsed"), "{}"));
        // line 5
        echo "    <div id=\"content-settings\">
        <form method=\"post\">
            <div data-set-page=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
        echo "\" data-set-root=\"\">
                <span class=\"float-right\">
                    <button type=\"submit\" class=\"button button-primary button-save\" data-save=\"Content Settings\">
                    <i class=\"fa fa-fw fa-check\" aria-hidden=\"true\"></i> <span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SAVE_CONTENT_SETTINGS"), "html", null, true);
        echo "</span></button>
                </span>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
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
        foreach ($context['_seq'] as $context["group"] => $context["list"]) {
            // line 13
            echo "                    <h2 class=\"page-title\">
                        <span class=\"title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["group"]), "html", null, true);
            echo "</span>
                    </h2>

                    <div class=\"g-filter-actions\">
                        <div class=\"g-panel-filters\" data-g-global-filter=\"\">
                            <div class=\"search settings-block\">
                                <input type=\"text\" data-g-collapse-filter=\"\" placeholder=\"";
            // line 20
            echo twig_escape_filter($this->env, (($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FILTER") . " ") . twig_capitalize_string_filter($this->env, $context["group"])), "html", null, true);
            echo "...\" aria-label=\"";
            echo twig_escape_filter($this->env, (($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FILTER") . " ") . twig_capitalize_string_filter($this->env, $context["group"])), "html", null, true);
            echo "...\" role=\"search\">
                                <i class=\"fa fa-fw fa-search\" aria-hidden=\"true\"></i>
                            </div>
                            <button class=\"button\" type=\"button\" data-g-collapse-all=\"true\"><i class=\"fa fa-fw fa-toggle-up\" aria-hidden=\"true\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_COLLAPSE_ALL"), "html", null, true);
            echo "</button>
                            <button class=\"button\" type=\"button\" data-g-collapse-all=\"false\"><i class=\"fa fa-fw fa-toggle-down\" aria-hidden=\"true\"></i> ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EXPAND_ALL"), "html", null, true);
            echo "</button>
                        </div>
                    </div>

                    <div class=\"cards-wrapper g-grid\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["list"]);
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
            foreach ($context['_seq'] as $context["id"] => $context["item"]) {
                // line 30
                echo "                            ";
                if ( !$this->getAttribute($context["item"], "hidden", [])) {
                    // line 31
                    echo "                                ";
                    $context["item"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "content", []), "getBlueprintForm", [0 => (($context["group"] . "/") . $context["id"])], "method");
                    // line 32
                    echo "                                ";
                    $context["prefix"] = (((("content." . $context["group"]) . ".") . $context["id"]) . ".");
                    // line 33
                    echo "                                ";
                    $context["collapsed"] = ($this->getAttribute($this->getAttribute($context["item"], "form", []), "collapsed", []) || $this->getAttribute(($context["stored_data"] ?? null), ($context["prefix"] ?? null)));
                    // line 34
                    echo "                                ";
                    $context["labels"] = ["collapse" => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_COLLAPSE"), "expand" => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EXPAND")];
                    // line 35
                    echo "                                <div class=\"card settings-block";
                    echo ((($context["collapsed"] ?? null)) ? (" g-collapsed") : (""));
                    echo "\">
                                    <input type=\"hidden\" name=\"content[";
                    // line 36
                    echo twig_escape_filter($this->env, $context["group"], "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "]\"/>
                                    <h4 data-g-collapse=\"";
                    // line 37
                    echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge(($context["labels"] ?? null), ["collapsed" => ((($context["collapsed"] ?? null)) ? (true) : (false)), "id" => ($context["prefix"] ?? null), "target" => "~ .inner-params"])), "html_attr");
                    echo "\"
                                        data-g-collapse-id=\"";
                    // line 38
                    echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                    echo "\"
                                        ";
                    // line 39
                    echo ((($context["overrideable"] ?? null)) ? (" class=\"card-overrideable\"") : (""));
                    echo "
                                    >
                                        <span class=\"g-collapse\" data-title=\"";
                    // line 41
                    echo twig_escape_filter($this->env, ((($context["collapsed"] ?? null)) ? ($this->getAttribute(($context["labels"] ?? null), "expand", [])) : ($this->getAttribute(($context["labels"] ?? null), "collapse", []))), "html", null, true);
                    echo "\" data-tip=\"";
                    echo twig_escape_filter($this->env, ((($context["collapsed"] ?? null)) ? ($this->getAttribute(($context["labels"] ?? null), "expand", [])) : ($this->getAttribute(($context["labels"] ?? null), "collapse", []))), "html", null, true);
                    echo "\" data-tip-place=\"top-right\">
                                            <i class=\"fa fa-fw  fa-caret-up\" aria-hidden=\"true\"></i>
                                        </span>
                                        <span class=\"g-title\">";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                    echo "</span>
                                        ";
                    // line 45
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "form", []), "fields", []), "enabled", [])) {
                        // line 46
                        echo "                                            ";
                        $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/configurations/content/content.html.twig", 46)->display(twig_array_merge($context, ["default" => true, "scope" => ($context["prefix"] ?? null), "name" => "enabled", "field" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "form", []), "fields", []), "enabled", []), "value" => $this->getAttribute(($context["data"] ?? null), "get", [0 => (($context["prefix"] ?? null) . "enabled"), 1 => $this->getAttribute(($context["defaults"] ?? null), "get", [0 => (($context["prefix"] ?? null) . "enabled")], "method")], "method")]));
                        // line 47
                        echo "
                                            ";
                        // line 48
                        if (($context["overrideable"] ?? null)) {
                            // line 49
                            echo "                                                ";
                            $this->loadTemplate("forms/override.html.twig", "@gantry-admin/pages/configurations/content/content.html.twig", 49)->display(twig_array_merge($context, ["scope" => ($context["prefix"] ?? null), "name" => "enabled", "has_value" =>  !(null === $this->getAttribute(($context["data"] ?? null), "get", [0 => (($context["prefix"] ?? null) . "enabled")], "method")), "field" => ["label" => (("Enabled of the " . $this->getAttribute(($context["particle"] ?? null), "name", [])) . " Particle")]]));
                            // line 50
                            echo "                                            ";
                        }
                        // line 51
                        echo "                                        ";
                    }
                    // line 52
                    echo "                                    </h4>

                                    <div class=\"inner-params\">
                                        ";
                    // line 55
                    $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/content/content.html.twig", 55)->display(twig_array_merge($context, ["overrideable" => ($context["overrideable"] ?? null), "blueprints" => $this->getAttribute($context["item"], "form", []), "skip" => [0 => "enabled"], "prefix" => ($context["prefix"] ?? null)]));
                    // line 56
                    echo "                                    </div>
                                </div>
                            ";
                }
                // line 59
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
                <div class=\"g-footer-actions\">
                    <span class=\"float-right\">
                        <button type=\"submit\" class=\"button button-primary button-save\" data-save=\"Content Settings\">
                            <i class=\"fa fa-fw fa-check\" aria-hidden=\"true\"></i> <span>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SAVE_CONTENT_SETTINGS"), "html", null, true);
        echo "</span></button>
                    </span>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/content/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 66,  236 => 62,  221 => 60,  207 => 59,  202 => 56,  200 => 55,  195 => 52,  192 => 51,  189 => 50,  186 => 49,  184 => 48,  181 => 47,  178 => 46,  176 => 45,  172 => 44,  164 => 41,  159 => 39,  155 => 38,  151 => 37,  145 => 36,  140 => 35,  137 => 34,  134 => 33,  131 => 32,  128 => 31,  125 => 30,  108 => 29,  100 => 24,  96 => 23,  88 => 20,  79 => 14,  76 => 13,  59 => 12,  54 => 10,  48 => 7,  44 => 5,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/pages/configurations/content/content.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/plugins/gantry5/admin/templates/pages/configurations/content/content.html.twig");
    }
}
