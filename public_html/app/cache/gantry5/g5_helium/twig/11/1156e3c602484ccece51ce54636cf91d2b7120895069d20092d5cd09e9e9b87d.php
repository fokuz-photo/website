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

/* 404.html.twig */
class __TwigTemplate_02c96c90fca9ecc52e4e77c045f861d8ebf1638b2ea4c38f5affedf04b20b435 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["twigTemplate"] = "404.html.twig";
        // line 3
        $context["scope"] = "404";
        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    <h1>";
        // line 7
        echo __("404 Page not found", ($context["textdomain"] ?? null));
        echo "</h1>

";
    }

    public function getTemplateName()
    {
        return "404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"partials/page.html.twig\" %}
{% set twigTemplate = '404.html.twig' %}
{% set scope = '404' %}

{% block content %}

    <h1>{{ __('404 Page not found', textdomain) }}</h1>

{% endblock %}
", "404.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/views/404.html.twig");
    }
}
