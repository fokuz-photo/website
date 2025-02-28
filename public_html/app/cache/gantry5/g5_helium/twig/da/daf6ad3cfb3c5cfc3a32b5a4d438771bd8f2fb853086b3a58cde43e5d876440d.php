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

/* @particles/2cols_w_image.html.twig */
class __TwigTemplate_b6c49e8457d2945276c0d121207979d504e2ed61e48e1fcd44b7ca39add554f7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/2cols_w_image.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "\t<div class=\"bg-white\">
\t\t<div class=\"g-grid jumbotron bg-red\">
\t\t\t<div class=\"g-block size-45\">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
            echo "\" class=\"\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "headline", []));
            echo "\" width=\"400\" height=\"410\">";
        }
        // line 9
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"g-block size-55\">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t";
        // line 13
        if ($this->getAttribute(($context["particle"] ?? null), "linktext", [])) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\"><h2 class=\"heading heading-large heading-large-alt link-heading\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", []));
            echo "</h2></a>";
        }
        // line 14
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
            echo "<div class=\"sample-description\">";
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "description", []), "html", null, true));
            echo "</div>";
        }
        // line 15
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"g-block size-100\">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t";
        // line 19
        if ($this->getAttribute(($context["particle"] ?? null), "linktext", [])) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\" class=\"link-opaque\">";
            echo twig_escape_filter($this->env, "Mehr sehen");
            echo "</a>";
        }
        // line 20
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/2cols_w_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  83 => 19,  77 => 15,  70 => 14,  62 => 13,  56 => 9,  48 => 8,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/2cols_w_image.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/2cols_w_image.html.twig");
    }
}
