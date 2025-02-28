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

/* @particles/1col_w_images.html.twig */
class __TwigTemplate_fa66ba1136f72f67a6f6d4e93f4497adac9065e3e2f49a76cc90e91c3de5c64c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/1col_w_images.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "\t<div class=\"\">
\t\t<div class=\"g-grid\">
\t\t\t<div class=\"g-block\">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
            echo "<div class=\"sample-description\">";
            echo $this->getAttribute(($context["particle"] ?? null), "description", []);
            echo "</div>";
        }
        // line 9
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"g-grid\">
\t\t\t<div class=\"g-block\">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t";
        // line 15
        if ($this->getAttribute(($context["particle"] ?? null), "image1", [])) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image1", [])), "html", null, true);
            echo "\" class=\"\" alt=\"Clickable image\" />";
        }
        // line 16
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t";
        // line 18
        if ($this->getAttribute(($context["particle"] ?? null), "image2", [])) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image2", [])), "html", null, true);
            echo "\" class=\"\" alt=\"Clickable image\" />";
        }
        // line 19
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t";
        // line 21
        if ($this->getAttribute(($context["particle"] ?? null), "image3", [])) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image3", [])), "html", null, true);
            echo "\" class=\"\" alt=\"Clickable image\" />";
        }
        // line 22
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/1col_w_images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  82 => 21,  78 => 19,  72 => 18,  68 => 16,  62 => 15,  54 => 9,  48 => 8,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/1col_w_images.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/1col_w_images.html.twig");
    }
}
