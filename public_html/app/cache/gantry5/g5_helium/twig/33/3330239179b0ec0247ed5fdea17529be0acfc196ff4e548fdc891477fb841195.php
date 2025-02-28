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

/* @particles/contact.html.twig */
class __TwigTemplate_e9886f47091b9d34c1859e74dd02be49be08fb6166a0f48f0c1881f43f97850b extends \Twig\Template
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
        // line 3
        $context["start_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "start", [])), [0 => "now", 1 => ""])) ? (call_user_func_array($this->env->getFilter('date')->getCallable(), ["now", "Y"])) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "start", []))));
        // line 4
        $context["end_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "end", [])), [0 => "now", 1 => ""])) ? (call_user_func_array($this->env->getFilter('date')->getCallable(), ["now", "Y"])) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "end", []))));
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_particle($context, array $blocks = [])
    {
        // line 7
        echo "<div class=\"heading-xsmall\">
    <a
        href=\"/kontakt\"
        target=\"_blank\"
        title=\"Kontakt\"
        class=\"text-white\"
    >Kontakt</a>
</div>
<div class=\"g-contact ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
        echo "\">
    ";
        // line 16
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "additional", []), "text", []))) {
            // line 17
            echo "        <em>";
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "additional", []), "text", []), "html", null, true));
            echo "</em>
    ";
        }
        // line 18
        echo "<br />
    <em>&copy;
    ";
        // line 20
        if ((($context["start_date"] ?? null) != ($context["end_date"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["start_date"] ?? null));
            echo " - ";
        }
        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, ($context["end_date"] ?? null));
        echo "&nbsp;";
        if ( !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "link", []))) {
            echo "<a target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_blank")) : ("_blank")));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "owner", []));
            echo "\">";
        }
        // line 22
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "owner", []));
        echo "
        ";
        // line 23
        if ( !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "link", []))) {
            echo "</a>";
        }
        echo "</em>

</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  91 => 22,  78 => 21,  73 => 20,  69 => 18,  63 => 17,  61 => 16,  57 => 15,  47 => 7,  44 => 6,  39 => 1,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/contact.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/contact.html.twig");
    }
}
