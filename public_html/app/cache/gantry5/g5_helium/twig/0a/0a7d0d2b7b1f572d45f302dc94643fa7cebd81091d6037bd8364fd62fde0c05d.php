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

/* @particles/content_repeater.html.twig */
class __TwigTemplate_d8b689ef957889e62f31631d3c23910902c032cdf8b354278e31c262c3cf0ffd extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/content_repeater.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "\t<div class=\"\">
\t\t";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            // line 6
            echo "\t\t\t<div class=\"g-grid\">
\t\t\t\t<div class=\"g-block\">
\t\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t\t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\"><h2 class=\"heading heading-large link-heading\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []));
            echo "</h2></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 14
        echo "
\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "\t\t\t<div class=\"g-grid\">
\t\t\t\t<div class=\"g-block size-50\">
\t\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t\t";
            // line 19
            if ($this->getAttribute($context["item"], "image", [])) {
                // line 20
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])), "html", null, true);
                echo "\" class=\"fancybox\">
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "thumbnail", [])), "html", null, true);
                echo "\" class=\"\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "imagealt", []));
                echo "\" width=\"555\" height=\"375\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"g-block size-50\">
\t\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t\t";
            // line 28
            if ($this->getAttribute($context["item"], "name", [])) {
                echo "<h3>";
                echo $this->getAttribute($context["item"], "name", []);
                echo "</h3>";
            }
            // line 29
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["item"], "date", [])) {
                echo "<span>";
                echo $this->getAttribute($context["item"], "date", []);
                echo "</span>";
            }
            // line 30
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["item"], "desc", [])) {
                echo "<div class=\"\">";
                echo $this->getAttribute($context["item"], "desc", []);
                echo "</div>";
            }
            // line 31
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["item"], "linktext", [])) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                echo "\" class=\"link-opaque link-opaque-gray\">";
                echo $this->getAttribute($context["item"], "linktext", []);
                echo "</a>";
            }
            // line 32
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/content_repeater.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 36,  124 => 32,  115 => 31,  108 => 30,  101 => 29,  95 => 28,  89 => 24,  81 => 21,  76 => 20,  74 => 19,  69 => 16,  65 => 15,  62 => 14,  52 => 9,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/content_repeater.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/content_repeater.html.twig");
    }
}
