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

/* @particles/contentcubes.html.twig */
class __TwigTemplate_2ec3cca506e6885de33c47f695aac528c2b0bbfb6c35fdc77dbaacf5d92425cd extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contentcubes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
<div class=\"g-contentcubes ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
        echo "\">

    ";
        // line 7
        if ($this->getAttribute(($context["particle"] ?? null), "items", [])) {
            // line 8
            echo "    ";
            $context["item_counter"] = 1;
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "            <div class=\"g-grid\">
                <div class=\"g-block size-50 image-position-";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "imageposition", []), "html", null, true);
                echo "\">
                    <div class=\"g-content\">
                        ";
                // line 13
                if ((($context["item_counter"] ?? null) == 1)) {
                    // line 14
                    echo "                            ";
                    if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
                        echo "\"><h2 class=\"heading heading-large link-heading\">";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []));
                        echo "</h2></a>";
                    }
                    // line 15
                    echo "                        ";
                }
                // line 16
                echo "                        <div class=\"g-card p-sm-1 p-md-2 mx-auto\">
                            <div class=\"d-flex flex-col justify-content-between\">
";
                // line 19
                echo "                                    ";
                if ($this->getAttribute($context["item"], "name", [])) {
                    echo "<h3 class=\"heading heading-medium\">";
                    echo $this->getAttribute($context["item"], "name", []);
                    echo "</h3>";
                }
                // line 20
                echo "                                    ";
                if ($this->getAttribute($context["item"], "image", [])) {
                    // line 21
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])), "html", null, true);
                    echo "\" class=\"fancybox\">
                                            <img loading=\"lazy\" src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "thumbnail", [])), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []));
                    echo "\" width=\"400\" height=\"400\">
                                        </a>
                                    ";
                }
                // line 26
                echo "                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"g-block size-50\">
                    <div class=\"g-content\">
                        ";
                // line 33
                if ($this->getAttribute($context["item"], "desc", [])) {
                    echo "<div class=\"\">";
                    echo $this->getAttribute($context["item"], "desc", []);
                    echo "</div>";
                }
                // line 34
                echo "                        ";
                $context["image_counter"] = 1;
                // line 35
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "images", []));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 36
                    echo "                            ";
                    if (((($context["item_counter"] ?? null) % 2) == 1)) {
                        // line 37
                        echo "                            <div class=\"d-flex ";
                        if (((($context["image_counter"] ?? null) % 2) == 1)) {
                            echo "justify-content-end";
                        }
                        echo "\">
                            ";
                    } else {
                        // line 39
                        echo "                            <div class=\"d-flex ";
                        if (((($context["image_counter"] ?? null) % 2) == 0)) {
                            echo "justify-content-end";
                        }
                        echo "\">
                            ";
                    }
                    // line 41
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["image"], "image", [])), "html", null, true);
                    echo "\" class=\"fancybox size-45\">
                                    <img loading=\"lazy\" src=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["image"], "thumbnail", [])), "html", null, true);
                    echo "\" alt=\"";
                    if ($this->getAttribute($context["image"], "alttext", [])) {
                        echo $this->getAttribute($context["image"], "alttext", []);
                    } else {
                        echo "Clickable image";
                    }
                    echo "\" width=\"300\" height=\"300\">
                                </a>
                            </div>
                            ";
                    // line 45
                    $context["image_counter"] = (($context["image_counter"] ?? null) + 1);
                    // line 46
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    </div>
                </div>
            </div>
            ";
                // line 50
                $context["item_counter"] = (($context["item_counter"] ?? null) + 1);
                // line 51
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
    ";
        }
        // line 54
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/contentcubes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 54,  189 => 52,  183 => 51,  181 => 50,  176 => 47,  170 => 46,  168 => 45,  156 => 42,  151 => 41,  143 => 39,  135 => 37,  132 => 36,  127 => 35,  124 => 34,  118 => 33,  109 => 26,  101 => 22,  96 => 21,  93 => 20,  86 => 19,  82 => 16,  79 => 15,  70 => 14,  68 => 13,  63 => 11,  60 => 10,  55 => 9,  52 => 8,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/contentcubes.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/contentcubes.html.twig");
    }
}
