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

/* page.html.twig */
class __TwigTemplate_ad670e4bf31f2c91114a9bd78efe40476e0522978d1632c4cd16f88acb40ad7e extends \Twig\Template
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
        $context["twigTemplate"] = "page.html.twig";
        // line 3
        $context["scope"] = "page";
        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    <div class=\"platform-content\">
        <div class=\"content-wrapper\">
            <section class=\"entry\">
                ";
        // line 10
        if (call_user_func_array($this->env->getFunction('function')->getCallable(), ["is_page", "kontakt"])) {
            // line 11
            echo "                    <div class=\"bg-white\">
                        <div class=\"g-grid jumbotron bg-green\">
                            <div class=\"g-block\">
                                <div class=\"g-content heading heading-medium\">
                                    <div class=\"mb-2\">";
            // line 15
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["the_field", "title", "options"]);
            echo "<br>
                                    ";
            // line 16
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["the_field", "address", "options"]);
            echo "
                                    </div>

                                    ";
            // line 19
            $context["email"] = call_user_func_array($this->env->getFunction('function')->getCallable(), ["get_field", "email", "options"]);
            // line 20
            echo "                                    <div class=\"mb-2\"><a href=\"mailto:";
            echo ($context["email"] ?? null);
            echo "\">";
            echo ($context["email"] ?? null);
            echo "</a></div>
                                    ";
            // line 21
            $context["phone"] = call_user_func_array($this->env->getFunction('function')->getCallable(), ["get_field", "phone_number", "options"]);
            // line 22
            echo "                                    <div class=\"mb-2\">
                                        <i class=\"fa fa-whatsapp fa-fw\"></i><a href=\"https://wa.me/";
            // line 23
            echo twig_replace_filter(($context["phone"] ?? null), ["+" => "", " " => ""]);
            echo "
\">";
            // line 24
            echo ($context["phone"] ?? null);
            echo "</a>
                                    </div>

                                    ";
            // line 27
            $context["socials"] = call_user_func_array($this->env->getFunction('function')->getCallable(), ["get_field", "socials", "options"]);
            // line 28
            echo "                                    <ul>
                                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["socials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 30
                echo "                                            <li><a href=\"";
                echo $this->getAttribute($context["social"], "link", [], "array");
                echo "\" target=\"_blank\"><i class=\"";
                echo $this->getAttribute($context["social"], "icon_name", [], "array");
                echo "\"></i>";
                echo $this->getAttribute($context["social"], "label", [], "array");
                echo "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 38
            echo "                    ";
            $this->loadTemplate([0 => (("partials/content-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => "partials/content.html.twig"], "page.html.twig", 38)->display($context);
            // line 39
            echo "                ";
        }
        // line 40
        echo "            </section>
        </div> <!-- /content-wrapper -->
    </div>

";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 40,  128 => 39,  125 => 38,  117 => 32,  104 => 30,  100 => 29,  97 => 28,  95 => 27,  89 => 24,  85 => 23,  82 => 22,  80 => 21,  73 => 20,  71 => 19,  65 => 16,  61 => 15,  55 => 11,  53 => 10,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "page.html.twig", "/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/custom/views/page.html.twig");
    }
}
