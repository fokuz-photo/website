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

/* @gantry-admin/modals/atom.html.twig */
class __TwigTemplate_3a0689cdd345938c51d20f9e645d24183aa603d24bed108892f2213a735200b5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'gantry' => [$this, 'block_gantry'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/modals/atom.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = [])
    {
        // line 4
        echo "    <form method=\"post\"
          action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => ($context["action"] ?? null)], "method"), "html", null, true);
        echo "\"
          data-g-inheritance-settings=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["id" => $this->getAttribute(($context["item"] ?? null), "id", []), "type" => "atom", "subtype" => $this->getAttribute(($context["item"] ?? null), "type", [])]), "html_attr");
        echo "\"
    >
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
        echo "\" />
        <div class=\"g-tabs\" role=\"tablist\">
            <ul>
                ";
        // line 12
        echo "                <li class=\"active\">
                    <a href=\"#\" id=\"g-settings-atom-tab\" role=\"presentation\" aria-controls=\"g-settings-atom\" role=\"tab\" aria-expanded=\"true\">
                        ";
        // line 14
        if (($context["inheritable"] ?? null)) {
            echo "<i class=\"fa fa-fw fa-";
            echo ((($this->getAttribute(($context["item"] ?? null), "inherit", []) && twig_in_filter("attributes", $this->getAttribute($this->getAttribute(($context["item"] ?? null), "inherit", []), "include", [])))) ? ("lock") : ("unlock"));
            echo "\" aria-hidden=\"true\"></i>";
        }
        // line 15
        echo "                        ";
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "                    </a>
                </li>
                ";
        // line 21
        echo "                ";
        if (($context["inheritance"] ?? null)) {
            // line 22
            echo "                    <li>
                        <a href=\"#\" id=\"g-settings-inheritance-tab\" role=\"presentation\" aria-controls=\"g-settings-inheritance\" aria-expanded=\"false\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_INHERITANCE"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 28
        echo "            </ul>
        </div>

        <div class=\"g-panes\">
            ";
        // line 33
        echo "            <div class=\"g-pane active\" role=\"tabpanel\" id=\"g-settings-atom\" aria-labelledby=\"g-settings-atom-tab\" aria-expanded=\"true\">
                ";
        // line 34
        $this->loadTemplate("@gantry-admin/pages/configurations/layouts/particle-card.html.twig", "@gantry-admin/modals/atom.html.twig", 34)->display(twig_array_merge($context, ["item" =>         // line 35
($context["item"] ?? null), "title" => $this->getAttribute(        // line 36
($context["item"] ?? null), "title", []), "blueprints" => $this->getAttribute(        // line 37
($context["blueprints"] ?? null), "form", []), "overrideable" => (        // line 38
($context["overrideable"] ?? null) && ( !$this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "form", [], "any", false, true), "overrideable", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "form", []), "overrideable", []))), "inherit" => (((twig_in_filter("attributes", $this->getAttribute($this->getAttribute(        // line 39
($context["item"] ?? null), "inherit", []), "include", [])) && twig_in_filter($this->getAttribute($this->getAttribute(($context["item"] ?? null), "inherit", []), "outline", []), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["inheritance"] ?? null), "form", []), "fields", []), "outline", []), "filter", [])))) ? ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "inherit", []), "outline", [])) : (null))]));
        // line 41
        echo "            </div>

            ";
        // line 44
        echo "            ";
        if (($context["inheritance"] ?? null)) {
            // line 45
            echo "                <div class=\"g-pane\" role=\"tabpanel\" id=\"g-settings-inheritance\" aria-labelledby=\"g-settings-inheritance-tab\" aria-expanded=\"false\">
                    <div class=\"card settings-block\">
                        <h4>
                            ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_INHERITANCE"), "html", null, true);
            echo "
                        </h4>
                        <div class=\"inner-params\">
                            ";
            // line 51
            $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/modals/atom.html.twig", 51)->display(twig_to_array(["gantry" =>             // line 52
($context["gantry"] ?? null), "blueprints" => $this->getAttribute(            // line 53
($context["inheritance"] ?? null), "form", []), "data" => ["inherit" => $this->getAttribute(            // line 54
($context["item"] ?? null), "inherit", [])], "prefix" => "inherit."]));
            // line 57
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        // line 61
        echo "        </div>

        <div class=\"g-modal-actions\">
            <button class=\"button button-primary\" type=\"submit\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
        echo "</button>
            <button class=\"button button-primary\" data-apply-and-save=\"\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
        echo "</button>
            <button class=\"button g5-dialog-close\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
        </div>
    </form>
";
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        // line 16
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ATOM"), "html", null, true);
        echo "
                        ";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/modals/atom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 16,  157 => 15,  149 => 66,  145 => 65,  141 => 64,  136 => 61,  130 => 57,  128 => 54,  127 => 53,  126 => 52,  125 => 51,  119 => 48,  114 => 45,  111 => 44,  107 => 41,  105 => 39,  104 => 38,  103 => 37,  102 => 36,  101 => 35,  100 => 34,  97 => 33,  91 => 28,  84 => 24,  80 => 22,  77 => 21,  73 => 18,  70 => 15,  64 => 14,  60 => 12,  54 => 8,  49 => 6,  45 => 5,  42 => 4,  39 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/modals/atom.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/plugins/gantry5/admin/templates/modals/atom.html.twig");
    }
}
