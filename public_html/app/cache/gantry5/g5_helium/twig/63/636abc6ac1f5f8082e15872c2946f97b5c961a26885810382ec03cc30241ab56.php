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

/* partials/content-page.html.twig */
class __TwigTemplate_bc03c858e0e14bb20aa584490a7f29367b0826e75f575f8ae86d8b3068854a8b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<article class=\"post-type-";
        echo $this->getAttribute(($context["post"] ?? null), "post_type", []);
        echo " ";
        echo $this->getAttribute(($context["post"] ?? null), "class", []);
        echo "\" id=\"post-";
        echo $this->getAttribute(($context["post"] ?? null), "ID", []);
        echo "\">

    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "
</article>
";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
        ";
        // line 6
        echo "        <section class=\"entry-header\">

            ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".title.enabled"), 1 => "1"], "method")) {
            // line 9
            echo "                ";
            // line 10
            echo "                <h2 class=\"entry-title\">
                    ";
            // line 11
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".title.link"), 1 => "0"], "method")) {
                // line 12
                echo "                        <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", []);
                echo "\" title=\"";
                echo $this->getAttribute(($context["post"] ?? null), "title", []);
                echo "\">";
                echo $this->getAttribute(($context["post"] ?? null), "title", []);
                echo "</a>
                    ";
            } else {
                // line 14
                echo "                        ";
                echo $this->getAttribute(($context["post"] ?? null), "title", []);
                echo "
                    ";
            }
            // line 16
            echo "                </h2>
                ";
            // line 18
            echo "            ";
        }
        // line 19
        echo "
            ";
        // line 21
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.enabled"), 1 => "1"], "method") || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.enabled"), 1 => "1"], "method"))) {
            // line 22
            echo "                ";
            $this->loadTemplate([0 => (("partials/meta-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => "partials/meta.html.twig"], "partials/content-page.html.twig", 22)->display($context);
            // line 23
            echo "            ";
        }
        // line 24
        echo "            ";
        // line 25
        echo "
        </section>
        ";
        // line 28
        echo "
        ";
        // line 30
        echo "        ";
        if ( !call_user_func_array($this->env->getFunction('function')->getCallable(), ["post_password_required", $this->getAttribute(($context["post"] ?? null), "ID", [])])) {
            // line 31
            echo "
            ";
            // line 33
            echo "            <section class=\"entry-content\">

                ";
            // line 36
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.enabled"), 1 => "1"], "method") && $this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", []), "src", []))) {
                // line 37
                echo "                    ";
                $context["position"] = ((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.position"), 1 => "none"], "method") == "none")) ? ("") : (("float-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.position"), 1 => "none"], "method"))));
                // line 38
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", []);
                echo "\" class=\"post-thumbnail\" aria-hidden=\"true\">
                        <img src=\"";
                // line 39
                echo Timber\ImageHelper::resize($this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", []), "src", []), $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.width"), 1 => "1200"], "method"), $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.height"), 1 => "350"], "method"));
                echo "\" class=\"featured-image tease-featured-image ";
                echo ($context["position"] ?? null);
                echo "\" alt=\"";
                echo $this->getAttribute(($context["post"] ?? null), "title", []);
                echo "\" />
                    </a>
                ";
            }
            // line 42
            echo "                ";
            // line 43
            echo "
                ";
            // line 45
            echo "                ";
            echo $this->getAttribute(($context["post"] ?? null), "content", []);
            echo "

                ";
            // line 47
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["wp_link_pages", ["before" => "<div class=\"page-links\" itemprop=\"pagination\">", "after" => "</div>", "link_before" => "<span class=\"page-number page-numbers\">", "link_after" => "</span>", "echo" => 0]]);
            echo "
                ";
            // line 49
            echo "
                ";
            // line 51
            echo "                ";
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["edit_post_link", __("Edit", ($context["textdomain"] ?? null)), "<span class=\"edit-link\">", "</span>"]);
            echo "
                ";
            // line 53
            echo "
            </section>
            ";
            // line 56
            echo "
            ";
            // line 58
            echo "            ";
            if (((($this->getAttribute(($context["post"] ?? null), "comment_status", []) == "open") || ($this->getAttribute(($context["post"] ?? null), "comment_count", []) > 0)) && ($this->getAttribute(($context["post"] ?? null), "post_type", []) != "product"))) {
                // line 59
                echo "                ";
                echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["comments_template"]);
                echo "
            ";
            }
            // line 61
            echo "            ";
            // line 62
            echo "
        ";
        } else {
            // line 64
            echo "
            ";
            // line 66
            echo "            <div class=\"password-form\">

                ";
            // line 69
            echo "                ";
            $this->loadTemplate("partials/password-form.html.twig", "partials/content-page.html.twig", 69)->display($context);
            // line 70
            echo "
            </div>
            ";
            // line 73
            echo "
        ";
        }
        // line 75
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/content-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 75,  201 => 73,  197 => 70,  194 => 69,  190 => 66,  187 => 64,  183 => 62,  181 => 61,  175 => 59,  172 => 58,  169 => 56,  165 => 53,  160 => 51,  157 => 49,  153 => 47,  147 => 45,  144 => 43,  142 => 42,  132 => 39,  127 => 38,  124 => 37,  121 => 36,  117 => 33,  114 => 31,  111 => 30,  108 => 28,  104 => 25,  102 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 19,  87 => 18,  84 => 16,  78 => 14,  68 => 12,  66 => 11,  63 => 10,  61 => 9,  59 => 8,  55 => 6,  52 => 4,  49 => 3,  43 => 77,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"post-type-{{ post.post_type }} {{ post.class }}\" id=\"post-{{ post.ID }}\">

    {% block content %}

        {# Begin Entry Header #}
        <section class=\"entry-header\">

            {% if gantry.config.get('content.' ~ scope ~ '.title.enabled', '1') %}
                {# Begin Entry Title #}
                <h2 class=\"entry-title\">
                    {% if gantry.config.get('content.' ~ scope ~ '.title.link', '0') %}
                        <a href=\"{{ post.link }}\" title=\"{{ post.title }}\">{{ post.title }}</a>
                    {% else %}
                        {{ post.title }}
                    {% endif %}
                </h2>
                {# End Entry Title #}
            {% endif %}

            {# Begin Entry Meta #}
            {% if gantry.config.get('content.' ~ scope ~ '.meta-date.enabled', '1') or gantry.config.get('content.' ~ scope ~ '.meta-author.enabled', '1') %}
                {% include ['partials/meta-' ~ scope ~ '.html.twig', 'partials/meta.html.twig'] %}
            {% endif %}
            {# End Entry Meta #}

        </section>
        {# End Entry Header #}

        {# Check if page is password protected #}
        {% if not function( 'post_password_required', post.ID ) %}

            {# Begin Entry Content #}
            <section class=\"entry-content\">

                {# Begin Featured Image #}
                {% if gantry.config.get('content.' ~ scope ~ '.featured-image.enabled', '1') and post.thumbnail.src %}
                    {% set position = (gantry.config.get('content.' ~ scope ~ '.featured-image.position', 'none') == 'none') ? '' : 'float-' ~ gantry.config.get('content.' ~ scope ~ '.featured-image.position', 'none') %}
                    <a href=\"{{ post.link }}\" class=\"post-thumbnail\" aria-hidden=\"true\">
                        <img src=\"{{ post.thumbnail.src|resize(gantry.config.get('content.' ~ scope ~ '.featured-image.width', '1200'), gantry.config.get('content.' ~ scope ~ '.featured-image.height', '350')) }}\" class=\"featured-image tease-featured-image {{ position }}\" alt=\"{{ post.title }}\" />
                    </a>
                {% endif %}
                {# End Featured Image #}

                {# Begin Page Content #}
                {{ post.content|raw }}

                {{ function('wp_link_pages', {'before': '<div class=\"page-links\" itemprop=\"pagination\">', 'after': '</div>', 'link_before': '<span class=\"page-number page-numbers\">', 'link_after': '</span>', 'echo': 0}) }}
                {# End Page Content #}

                {# Begin Edit Link #}
                {{ function('edit_post_link', __('Edit', textdomain), '<span class=\"edit-link\">', '</span>') }}
                {# End Edit Link #}

            </section>
            {# End Entry Content #}

            {# Begin Comments #}
            {% if (post.comment_status == 'open' or post.comment_count > 0) and post.post_type != 'product' %}
                {{ function('comments_template')|raw }}
            {% endif %}
            {# End Comments #}

        {% else %}

            {# Begin Password Protected Form #}
            <div class=\"password-form\">

                {# Include the password form #}
                {% include 'partials/password-form.html.twig' %}

            </div>
            {# End Password Protected Form #}

        {% endif %}

    {% endblock %}

</article>
", "partials/content-page.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/views/partials/content-page.html.twig");
    }
}
