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

/* partials/page_head.html.twig */
class __TwigTemplate_5021dfac793d83739bb7d9d2d2b2d9794f869021793ade15a009c10c21f78591 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'head_application' => [$this, 'block_head_application'],
            'head_platform' => [$this, 'block_head_platform'],
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/page_head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/page_head.html.twig", "partials/page_head.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_title($context, array $blocks = [])
    {
        // line 4
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "charset", []), "html", null, true);
        echo "\" />
    <link rel=\"profile\" href=\"http://gmpg.org/xfn/11\" />
    <link rel=\"pingback\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "pingback_url", []), "html", null, true);
        echo "\" />";
    }

    // line 9
    public function block_head_application($context, array $blocks = [])
    {
        // line 10
        echo ($context["wp_head"] ?? null);
    }

    // line 13
    public function block_head_platform($context, array $blocks = [])
    {
        // line 14
        $this->displayParentBlock("head_platform", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-engine://css-compiled/wordpress.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://style.css"), "html", null, true);
        echo "\" type=\"text/css\" />";
    }

    // line 19
    public function block_head($context, array $blocks = [])
    {
        // line 20
        $this->displayParentBlock("head", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "partials/page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  79 => 19,  74 => 16,  70 => 15,  66 => 14,  63 => 13,  59 => 10,  56 => 9,  51 => 6,  45 => 4,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/page_head.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/plugins/gantry5/engines/nucleus/views/partials/page_head.html.twig");
    }
}
