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

/* @particles/pricing.html.twig */
class __TwigTemplate_d48687368eb24a9b5eb16d21b0f454df5c1cf9f78a892118d8ad79777e927f31 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/pricing.html.twig", 1);
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
        if ($this->getAttribute(($context["particle"] ?? null), "linktext", [])) {
            // line 9
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\">
\t\t\t\t\t\t<h2 class=\"heading heading-large link-heading\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", []));
            echo "</h2>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"g-grid gap-2\">
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "prices", []));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 18
            echo "\t\t\t\t<div ";
            if ($this->getAttribute($context["price"], "id", [])) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "id", []));
                echo "\"";
            }
            // line 19
            echo "\t\t\t\t\t class=\"g-block ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "class", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "variations", []), "html", null, true);
            echo " g-card\">
\t\t\t\t\t<div class=\"g-content h-100 pb-2 d-flex flex-col justify-content-between\">
\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t";
            // line 22
            if ($this->getAttribute($context["price"], "image", [])) {
                echo "<img loading=\"lazy\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["price"], "image", [])), "html", null, true);
                echo "\" class=\"w-100\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "title", []));
                echo "\" width=\"280\" height=\"185\">";
            }
            // line 23
            echo "\t\t\t\t\t\t\t<h3 class=\"heading heading-medium word-wrap\">";
            echo $this->getAttribute($context["price"], "title", []);
            echo "</h3>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<p>";
            // line 26
            echo $this->getAttribute($context["price"], "description", []);
            echo "</p>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t<div><span class=\"heading heading-small\">ab</span> <span class=\"heading heading-medium\">";
            // line 29
            echo $this->getAttribute($context["price"], "amount", []);
            echo " €</span></div>
\t\t\t\t\t\t\t<a href=\"#g-contenttabs-contenttabs-3854\" class=\"button center w-100\">";
            // line 30
            echo twig_escape_filter($this->env, "Jetzt buchen");
            echo "</a>
\t\t\t\t\t\t</footer>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 35,  112 => 30,  108 => 29,  102 => 26,  95 => 23,  87 => 22,  78 => 19,  71 => 18,  67 => 17,  61 => 13,  55 => 10,  50 => 9,  48 => 8,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/pricing.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/pricing.html.twig");
    }
}
