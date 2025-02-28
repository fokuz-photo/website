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

/* @gantry-admin/ajax/particles-loss.html.twig */
class __TwigTemplate_e8b2735749d705ea4a55b1d40e21788df47bbee2783f912c90d58bcc3c7d3d99 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["sections"] = (("<strong>" . twig_join_filter(($context["particles"] ?? null), "</strong>, <strong>")) . "</strong>");
        // line 2
        echo "
<div class=\"card settings-block\">
    <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_PARTICLE_LOSS_WARNING"), "html", null, true);
        echo "</h4>
    <div class=\"inner-params\">

        ";
        // line 7
        if ((twig_length_filter($this->env, ($context["particles"] ?? null)) > 1)) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_PARTICLE_LOSS_SECTIONS_X", ($context["sections"] ?? null));
            echo "
        ";
        } else {
            // line 10
            echo "        ";
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_PARTICLE_LOSS_SECTION_X", ($context["sections"] ?? null));
            echo "
        ";
        }
        // line 12
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_PARTICLE_LOSS_TEXT"), "html", null, true);
        echo "
        <br /><br />
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_TO_CONTINUE"), "html", null, true);
        echo "
    </div>
</div>

<div class=\"g-modal-actions\">
    <button tabindex=\"0\" class=\"button button-primary\" role=\"button\" data-g-delete-confirm>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CONTINUE"), "html", null, true);
        echo "</button>
    <button class=\"button button-primary g5-dialog-close\" role=\"button\" data-g-delete-cancel>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CLOSE"), "html", null, true);
        echo "</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/ajax/particles-loss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  70 => 19,  62 => 14,  56 => 12,  50 => 10,  44 => 8,  42 => 7,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/ajax/particles-loss.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/plugins/gantry5/admin/templates/ajax/particles-loss.html.twig");
    }
}
