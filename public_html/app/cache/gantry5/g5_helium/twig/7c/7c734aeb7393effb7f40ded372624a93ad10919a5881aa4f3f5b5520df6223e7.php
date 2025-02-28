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

/* partials/content.html.twig */
class __TwigTemplate_402f8a688bcde561964e0d24abe088193aeb109ef8939a571f3983975bbe29c9 extends \Twig\Template
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
        echo "<article class=\"tease tease-";
        echo $this->getAttribute(($context["post"] ?? null), "post_type", []);
        echo " ";
        echo $this->getAttribute(($context["post"] ?? null), "class", []);
        echo " clearfix\" id=\"tease-";
        echo $this->getAttribute(($context["post"] ?? null), "ID", []);
        echo "\">

    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 94
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
        // line 9
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".title.enabled"), 1 => "1"], "method")) {
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
        }
        // line 18
        echo "            ";
        // line 19
        echo "
            ";
        // line 21
        echo "            ";
        if ((((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.enabled"), 1 => "1"], "method") || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.enabled"), 1 => "1"], "method")) || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-comments.enabled"), 1 => "1"], "method")) || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-categories.enabled"), 1 => "1"], "method")) || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-tags.enabled"), 1 => "0"], "method"))) {
            // line 22
            echo "                ";
            $this->loadTemplate([0 => (("partials/meta-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => "partials/meta.html.twig"], "partials/content.html.twig", 22)->display($context);
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
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".content.enabled"), 1 => "1"], "method")) {
                // line 46
                echo "                    ";
                if ((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".content.type"), 1 => "content"], "method") == "excerpt") &&  !twig_test_empty($this->getAttribute(($context["post"] ?? null), "post_excerpt", [])))) {
                    // line 47
                    echo "                        <div class=\"post-excerpt\">";
                    echo call_user_func_array($this->env->getFilter('apply_filters')->getCallable(), [$this->getAttribute(($context["post"] ?? null), "post_excerpt", []), "the_excerpt"]);
                    echo "</div>
                    ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 48
($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".content.type"), 1 => "content"], "method") == "gexcerpt")) {
                    // line 49
                    echo "                        <div class=\"post-excerpt\">";
                    echo call_user_func_array($this->env->getFilter('apply_filters')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["post"] ?? null), "preview", []), "length", [0 => $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".content.gexcerpt-length"), 1 => "50"], "method")], "method"), "force", [0 => true], "method"), "read_more", [0 => false], "method"), "the_excerpt"]);
                    echo "</div>
                    ";
                } else {
                    // line 51
                    echo "                        <div class=\"post-content\">
                            ";
                    // line 52
                    $context["readmore"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->pregMatch("/<!--more(.*?)?-->/", $this->getAttribute(($context["post"] ?? null), "post_content", []));
                    // line 53
                    echo "                            ";
                    if (($context["readmore"] ?? null)) {
                        // line 54
                        echo "                                ";
                        $context["split_content"] = twig_split_filter($this->env, $this->getAttribute(($context["post"] ?? null), "post_content", []), $this->getAttribute(($context["readmore"] ?? null), 0, [], "array"), 2);
                        // line 55
                        echo "                                ";
                        echo call_user_func_array($this->env->getFilter('apply_filters')->getCallable(), [$this->getAttribute(($context["split_content"] ?? null), 0, [], "array"), "the_content"]);
                        echo "
                            ";
                    } elseif (twig_in_filter("<!--nextpage-->", $this->getAttribute(                    // line 56
($context["post"] ?? null), "post_content", []))) {
                        // line 57
                        echo "                                ";
                        $context["split_content"] = twig_split_filter($this->env, $this->getAttribute(($context["post"] ?? null), "post_content", []), "<!--nextpage-->", 2);
                        // line 58
                        echo "                                ";
                        echo call_user_func_array($this->env->getFilter('apply_filters')->getCallable(), [$this->getAttribute(($context["split_content"] ?? null), 0, [], "array"), "the_content"]);
                        echo "
                            ";
                    } else {
                        // line 60
                        echo "                                ";
                        echo $this->getAttribute(($context["post"] ?? null), "content", []);
                        echo "
                            ";
                    }
                    // line 62
                    echo "                        </div>
                    ";
                }
                // line 64
                echo "                ";
            }
            // line 65
            echo "
                ";
            // line 66
            if ((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".read-more.mode"), 1 => "auto"], "method") == "always") || (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".read-more.mode"), 1 => "auto"], "method") == "auto") && ((($context["readmore"] ?? null) ||  !twig_test_empty($this->getAttribute(($context["post"] ?? null), "post_excerpt", []))) || ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".content.type"), 1 => "content"], "method") == "gexcerpt"))))) {
                // line 67
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", []);
                echo "\" class=\"read-more button button-xsmall\">
                        ";
                // line 68
                if ( !twig_test_empty($this->getAttribute(($context["readmore"] ?? null), 1, [], "array"))) {
                    // line 69
                    echo $this->getAttribute(($context["readmore"] ?? null), 1, [], "array");
                } else {
                    // line 71
                    echo "                            ";
                    echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".read-more.label"), 1 => "Read More"], "method");
                    echo "
                        ";
                }
                // line 73
                echo "                    </a>
                ";
            }
            // line 75
            echo "                ";
            // line 76
            echo "
            </section>
            ";
            // line 79
            echo "
        ";
        } else {
            // line 81
            echo "
            ";
            // line 83
            echo "            <div class=\"password-form\">

                ";
            // line 86
            echo "                ";
            $this->loadTemplate("partials/password-form.html.twig", "partials/content.html.twig", 86)->display($context);
            // line 87
            echo "
            </div>
            ";
            // line 90
            echo "
        ";
        }
        // line 92
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 92,  254 => 90,  250 => 87,  247 => 86,  243 => 83,  240 => 81,  236 => 79,  232 => 76,  230 => 75,  226 => 73,  220 => 71,  217 => 69,  215 => 68,  210 => 67,  208 => 66,  205 => 65,  202 => 64,  198 => 62,  192 => 60,  186 => 58,  183 => 57,  181 => 56,  176 => 55,  173 => 54,  170 => 53,  168 => 52,  165 => 51,  159 => 49,  157 => 48,  152 => 47,  149 => 46,  146 => 45,  143 => 43,  141 => 42,  131 => 39,  126 => 38,  123 => 37,  120 => 36,  116 => 33,  113 => 31,  110 => 30,  107 => 28,  103 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 19,  87 => 18,  83 => 16,  77 => 14,  67 => 12,  65 => 11,  62 => 10,  59 => 9,  55 => 6,  52 => 4,  49 => 3,  43 => 94,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"tease tease-{{ post.post_type }} {{ post.class }} clearfix\" id=\"tease-{{ post.ID }}\">

    {% block content %}

        {# Begin Entry Header #}
        <section class=\"entry-header\">

            {# Begin Entry Title #}
            {% if gantry.config.get('content.' ~ scope ~ '.title.enabled', '1') %}
                <h2 class=\"entry-title\">
                    {% if gantry.config.get('content.' ~ scope ~ '.title.link', '0') %}
                        <a href=\"{{ post.link }}\" title=\"{{ post.title }}\">{{ post.title }}</a>
                    {% else %}
                        {{ post.title }}
                    {% endif %}
                </h2>
            {% endif %}
            {# End Entry Title #}

            {# Begin Entry Meta #}
            {% if gantry.config.get('content.' ~ scope ~ '.meta-date.enabled', '1') or gantry.config.get('content.' ~ scope ~ '.meta-author.enabled', '1') or gantry.config.get('content.' ~ scope ~ '.meta-comments.enabled', '1') or gantry.config.get('content.' ~ scope ~ '.meta-categories.enabled', '1') or gantry.config.get('content.' ~ scope ~ '.meta-tags.enabled', '0') %}
                {% include ['partials/meta-' ~ scope ~ '.html.twig', 'partials/meta.html.twig'] %}
            {% endif %}
            {# End Entry Meta #}

        </section>
        {# End Entry Header #}

        {# Check if post is password protected #}
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

                {# Begin Tease #}
                {% if gantry.config.get('content.' ~ scope ~ '.content.enabled', '1') %}
                    {% if gantry.config.get('content.' ~ scope ~ '.content.type', 'content') == 'excerpt' and post.post_excerpt is not empty %}
                        <div class=\"post-excerpt\">{{ post.post_excerpt|apply_filters('the_excerpt')|raw }}</div>
                    {% elseif gantry.config.get('content.' ~ scope ~ '.content.type', 'content') == 'gexcerpt' %}
                        <div class=\"post-excerpt\">{{ post.preview.length(gantry.config.get('content.' ~ scope ~ '.content.gexcerpt-length', '50')).force(true).read_more(false)|apply_filters('the_excerpt')|raw }}</div>
                    {% else %}
                        <div class=\"post-content\">
                            {% set readmore = preg_match('/<!--more(.*?)?-->/', post.post_content) %}
                            {% if readmore %}
                                {% set split_content = post.post_content|split(readmore[0], 2) %}
                                {{ split_content[0]|apply_filters('the_content')|raw }}
                            {% elseif '<!--nextpage-->' in post.post_content %}
                                {% set split_content = post.post_content|split('<!--nextpage-->', 2) %}
                                {{ split_content[0]|apply_filters('the_content')|raw }}
                            {% else %}
                                {{ post.content|raw }}
                            {% endif %}
                        </div>
                    {% endif %}
                {% endif %}

                {% if gantry.config.get('content.' ~ scope ~ '.read-more.mode', 'auto') == 'always' or (gantry.config.get('content.' ~ scope ~ '.read-more.mode', 'auto') == 'auto' and (readmore or post.post_excerpt is not empty or gantry.config.get('content.' ~ scope ~ '.content.type', 'content') == 'gexcerpt') )  %}
                    <a href=\"{{ post.link }}\" class=\"read-more button button-xsmall\">
                        {% if readmore[1] is not empty %}
                            {{- readmore[1] -}}
                        {% else %}
                            {{ gantry.config.get('content.' ~ scope ~ '.read-more.label', 'Read More') }}
                        {% endif %}
                    </a>
                {% endif %}
                {# End Tease #}

            </section>
            {# End Entry Content #}

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
", "partials/content.html.twig", "/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/views/partials/content.html.twig");
    }
}
