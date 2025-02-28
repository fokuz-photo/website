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

/* @particles/hero.html.twig */
class __TwigTemplate_95249612378587b727017eabc1f5796d4c6fb21bfcc3651356b03635c2fbf87f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/hero.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "\t<div class=\"\">
\t\t";
        // line 5
        $context["post"] = $this->getAttribute(($context["wordpress"] ?? null), "call", [0 => "Timber::get_post"], "method");
        // line 6
        echo "\t\t<h1 class=\"heading heading-large\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", []), "html", null, true);
        echo "</h1>
\t\t<div class=\"g-grid g-flushed\">
\t\t\t<div class=\"g-block size-100\">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t";
        // line 10
        if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
            echo "\" class=\"hero-temp\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "headline", []));
            echo "\" width=\"800\" height=\"600\">";
        }
        // line 11
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"g-block size-100 relative\">
\t\t\t\t<div class=\"g-content hero-content\">
\t\t\t\t\t";
        // line 15
        if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
            echo "<div class=\"hero-description heading heading-small\">";
            echo $this->getAttribute(($context["particle"] ?? null), "description", []);
            echo "</div>";
        }
        // line 16
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "linktext", [])) {
            echo "<div class=\"mt-1\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\" class=\"button\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", []));
            echo "</a></div>";
        }
        // line 17
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  75 => 16,  69 => 15,  63 => 11,  55 => 10,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/hero.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/hero.html.twig");
    }
}
