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

/* partials/page.html.twig */
class __TwigTemplate_b351305d7d8d3c413a304b969ad83f2e6409d4684cdbe5a947989f5815f10266 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page_head' => [$this, 'block_page_head'],
            'page_footer' => [$this, 'block_page_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/page.html.twig", "partials/page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_head($context, array $blocks = [])
    {
        // line 4
        if (($context["page_head"] ?? null)) {
            // line 5
            echo "        ";
            echo ($context["page_head"] ?? null);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            $this->displayParentBlock("page_head", $context, $blocks);
            echo "
    ";
        }
    }

    // line 11
    public function block_page_footer($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "finalize", [], "method");
        // line 13
        echo "    ";
        echo ($context["wp_footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  62 => 12,  59 => 11,  51 => 7,  45 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/page.html.twig", "/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/plugins/gantry5/engines/nucleus/views/partials/page.html.twig");
    }
}
