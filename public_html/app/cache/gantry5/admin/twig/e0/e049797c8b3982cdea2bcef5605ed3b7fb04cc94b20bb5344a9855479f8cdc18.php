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

/* @gantry-admin/pages/menu/edit.html.twig */
class __TwigTemplate_ee9c1f07e8b097d867693716aabe284f0edfe5f8c3a7833a8e22910a66c10a2c extends \Twig\Template
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
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/menu/edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = [])
    {
        // line 4
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "menu/edit", 1 => ($context["id"] ?? null), 2 => "validate"], "method"), "html", null, true);
        echo "\">
    <div class=\"card settings-block\">
        <h4>
            <span data-title-editable=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "settings", []), "title", []), "html", null, true);
        echo "\" class=\"title\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "settings", []), "title", []), "html", null, true);
        echo "
            </span>
            <i class=\"fa fa-pencil fa-pencil-alt font-small\" aria-hidden=\"true\" tabindex=\"0\" aria-label=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", $this->getAttribute($this->getAttribute(($context["data"] ?? null), "settings", []), "title", [])), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
            ";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "form", []), "fields", []), "enabled", [])) {
            // line 12
            echo "            ";
            $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/menu/edit.html.twig", 12)->display(twig_array_merge($context, ["default" => true, "name" => "enabled", "field" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "form", []), "fields", []), "enabled", []), "value" => $this->getAttribute(($context["data"] ?? null), "enabled", [])]));
            // line 13
            echo "            ";
        }
        // line 14
        echo "        </h4>
        <div class=\"inner-params\">
            ";
        // line 16
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/menu/edit.html.twig", 16)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["blueprints"] ?? null), "form", []), "data" => ($context["data"] ?? null), "skip" => [0 => "enabled", 1 => "settings.title"]]));
        // line 17
        echo "        </div>
    </div>
    <div class=\"g-modal-actions\">
        ";
        // line 20
        if ($this->getAttribute(($context["gantry"] ?? null), "authorize", [0 => "menu.edit", 1 => ($context["id"] ?? null)], "method")) {
            // line 21
            echo "        ";
            // line 22
            echo "        <button class=\"button button-primary\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
            echo "</button>
        <button class=\"button button-primary\" data-apply-and-save=\"\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 25
        echo "        <button class=\"button g5-dialog-close\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/menu/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  89 => 23,  84 => 22,  82 => 21,  80 => 20,  75 => 17,  73 => 16,  69 => 14,  66 => 13,  63 => 12,  61 => 11,  57 => 10,  52 => 8,  48 => 7,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/pages/menu/edit.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/plugins/gantry5/admin/templates/pages/menu/edit.html.twig");
    }
}
