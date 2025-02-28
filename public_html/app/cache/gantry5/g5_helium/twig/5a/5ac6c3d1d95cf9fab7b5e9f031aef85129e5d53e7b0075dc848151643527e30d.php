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

/* partials/comments.html.twig */
class __TwigTemplate_e2e112beff40bbedb5d1a8f90b394f23cf9280c56cdb7c8410835ff5c9b8d446 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'comments' => [$this, 'block_comments'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["twigTemplate"] = "comments.html.twig";
        // line 2
        echo "
";
        // line 3
        if ((call_user_func_array($this->env->getFunction('function')->getCallable(), ["get_option", "thread_comments"]) == "1")) {
            // line 4
            echo "    ";
            $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
            $assetVariables = [];
            if ($assetVariables && !is_array($assetVariables)) {
                throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
            }
            $location = "footer";
            if ($location && !is_string($location)) {
                throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
            }
            $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
            ob_start();
            // line 5
            echo "        ";
            echo $this->getAttribute(($context["wordpress"] ?? null), "call", [0 => "wp_enqueue_script", 1 => "comment-reply"], "method");
            echo "
    ";
            $content = ob_get_clean();
            $assetFunction($content, $location, $priority);
        }
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('comments', $context, $blocks);
    }

    public function block_comments($context, array $blocks = [])
    {
        // line 10
        echo "
    ";
        // line 12
        echo "    <section id=\"comments\" class=\"comments-area\">

        ";
        // line 14
        if ($this->getAttribute(($context["post"] ?? null), "comments", [])) {
            // line 15
            echo "            <div id=\"responses\">
                <h2 class=\"g-title\">";
            // line 16
            echo (($this->getAttribute(($context["post"] ?? null), "comment_count", []) . " ") . __("Comments", ($context["textdomain"] ?? null)));
            echo "</h2>

                <ol class=\"commentlist\">
                    ";
            // line 19
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["wp_list_comments", ["style" => "ol", "type" => "comment", "callback" => [0 => "G5ThemeHelper", 1 => "comments"]]]);
            echo "
                </ol>

                <footer>
                    <nav id=\"comments-nav\">
                        <div class=\"comments-previous\">";
            // line 24
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["previous_comments_link", (("<i class=\"fa fa-chevron-left fa-fw\" aria-hidden=\"true\"></i><span> " . __("Older comments", ($context["textdomain"] ?? null))) . "</span>")]);
            echo "</div>
                        <div class=\"comments-next\">";
            // line 25
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["next_comments_link", (("<span>" . __("Newer comments", ($context["textdomain"] ?? null))) . " </span><i class=\"fa fa-chevron-right fa-fw\" aria-hidden=\"true\"></i>")]);
            echo "</div>
                    </nav>
                </footer>
            </div>
        ";
        }
        // line 30
        echo "
        ";
        // line 31
        if (($this->getAttribute(($context["post"] ?? null), "comment_status", []) == "open")) {
            // line 32
            echo "
            ";
            // line 33
            call_user_func_array($this->env->getFunction('action')->getCallable(), [$context, "comment_form_before"]);
            // line 34
            echo "
            <div id=\"respond\">
                <h3>";
            // line 36
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["comment_form_title", __("Leave a Reply", ($context["textdomain"] ?? null)), __("Leave a Reply to %s", ($context["textdomain"] ?? null))]);
            echo "</h3>

                <p class=\"cancel-comment-reply\">";
            // line 38
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["cancel_comment_reply_link"]);
            echo "</p>

                ";
            // line 40
            if (($this->getAttribute(($context["site"] ?? null), "comment_registration", []) &&  !($context["is_user_logged_in"] ?? null))) {
                // line 41
                echo "
                    <div class=\"notice\">
                        <p class=\"alert alert-info\">";
                // line 43
                echo sprintf(__("You must be <a href=\"%s\">logged in</a> to post a comment.", ($context["textdomain"] ?? null)), call_user_func_array($this->env->getFunction('function')->getCallable(), ["wp_login_url", $this->getAttribute(($context["post"] ?? null), "link", [])]));
                echo "</p>
                    </div>

                    ";
                // line 46
                call_user_func_array($this->env->getFunction('action')->getCallable(), [$context, "comment_form_must_log_in_after"]);
                // line 47
                echo "
                ";
            } else {
                // line 49
                echo "
                    ";
                // line 50
                $context["req"] = call_user_func_array($this->env->getFunction('function')->getCallable(), ["get_option", "require_name_email"]);
                // line 51
                echo "
                    <form action=\"";
                // line 52
                echo $this->getAttribute(($context["site"] ?? null), "site_url", []);
                echo "/wp-comments-post.php\" method=\"post\" id=\"commentform\">

                        ";
                // line 54
                call_user_func_array($this->env->getFunction('action')->getCallable(), [$context, "comment_form_top"]);
                // line 55
                echo "
                        ";
                // line 56
                if (($context["is_user_logged_in"] ?? null)) {
                    // line 57
                    echo "
                            <p>";
                    // line 58
                    echo sprintf(__("Logged in as <a href=\"%s/wp-admin/profile.php\">%s</a>.", ($context["textdomain"] ?? null)), $this->getAttribute(($context["site"] ?? null), "site_url", []), $this->getAttribute(($context["current_user"] ?? null), "display_name", []));
                    echo " <a href=\"";
                    echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["wp_logout_url", $this->getAttribute(($context["post"] ?? null), "link", [])]);
                    echo "\" title=\"";
                    echo __("Log out of this account", ($context["textdomain"] ?? null));
                    echo "\">";
                    echo __("Log out &raquo;", ($context["textdomain"] ?? null));
                    echo "</a></p>

                            ";
                    // line 60
                    call_user_func_array($this->env->getFunction('action')->getCallable(), [$context, "comment_form_logged_in_after", "current_user", "current_user.display_name"]);
                    // line 61
                    echo "
                        ";
                } else {
                    // line 63
                    echo "
                            ";
                    // line 64
                    call_user_func_array($this->env->getFunction('action')->getCallable(), [$context, "comment_form_before_fields"]);
                    // line 65
                    echo "
                            <p>
                                <input type=\"text\" class=\"inputbox respond-author\" name=\"author\" id=\"author\" placeholder=\"";
                    // line 67
                    echo __("Name", ($context["textdomain"] ?? null));
                    echo " ";
                    echo ((($context["req"] ?? null)) ? (__("(required)", ($context["textdomain"] ?? null))) : (""));
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, ($context["comment_author"] ?? null));
                    echo "\" size=\"40\" tabindex=\"1\" aria-required='true' />
                            </p>
                            <p>
                                <input type=\"text\" class=\"inputbox respond-email\" name=\"email\" id=\"email\" placeholder=\"";
                    // line 70
                    echo __("Email", ($context["textdomain"] ?? null));
                    echo " ";
                    echo ((($context["req"] ?? null)) ? (__("(required)", ($context["textdomain"] ?? null))) : (""));
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, ($context["comment_author_email"] ?? null));
                    echo "\" size=\"40\" tabindex=\"2\" aria-required='true' />
                            </p>
                            <p>
                                <input type=\"text\" class=\"inputbox respond-website\" name=\"url\" id=\"url\" placeholder=\"";
                    // line 73
                    echo __("Website", ($context["textdomain"] ?? null));
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, ($context["comment_author_url"] ?? null));
                    echo "\" size=\"40\" tabindex=\"3\">
                            </p>

                            ";
                    // line 76
                    call_user_func_array($this->env->getFunction('action')->getCallable(), [$context, "comment_form_after_fields"]);
                    // line 77
                    echo "
                        ";
                }
                // line 79
                echo "
                        <p>
                            <textarea class=\"inputbox respond-textarea\" name=\"comment\" id=\"comment\" placeholder=\"";
                // line 81
                echo __("Your comment goes here.", ($context["textdomain"] ?? null));
                echo "\" tabindex=\"4\"></textarea>
                        </p>

                        <p id=\"allowed_tags\" class=\"small\"><strong>XHTML:</strong> ";
                // line 84
                echo __("You can use these tags:", ($context["textdomain"] ?? null));
                echo " <code>";
                echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["allowed_tags"]);
                echo "</code></p>
                        <p><input name=\"submit\" class=\"button\" type=\"submit\" id=\"submit\" tabindex=\"5\" value=\"";
                // line 85
                echo twig_escape_filter($this->env, __("Submit Comment", ($context["textdomain"] ?? null)));
                echo "\"></p>

                        ";
                // line 87
                echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["comment_id_fields"]);
                echo "
                        ";
                // line 88
                call_user_func_array($this->env->getFunction('action')->getCallable(), [$context, "comment_form", $this->getAttribute(($context["post"] ?? null), "id", [])]);
                // line 89
                echo "                    </form>

                ";
            }
            // line 92
            echo "            </div>

            ";
            // line 94
            call_user_func_array($this->env->getFunction('action')->getCallable(), [$context, "comment_form_after"]);
            // line 95
            echo "
        ";
        } else {
            // line 97
            echo "
            ";
            // line 98
            call_user_func_array($this->env->getFunction('action')->getCallable(), [$context, "comment_form_comments_closed"]);
            // line 99
            echo "
        ";
        }
        // line 101
        echo "
    </section>
    ";
        // line 104
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 104,  282 => 101,  278 => 99,  276 => 98,  273 => 97,  269 => 95,  267 => 94,  263 => 92,  258 => 89,  256 => 88,  252 => 87,  247 => 85,  241 => 84,  235 => 81,  231 => 79,  227 => 77,  225 => 76,  217 => 73,  207 => 70,  197 => 67,  193 => 65,  191 => 64,  188 => 63,  184 => 61,  182 => 60,  171 => 58,  168 => 57,  166 => 56,  163 => 55,  161 => 54,  156 => 52,  153 => 51,  151 => 50,  148 => 49,  144 => 47,  142 => 46,  136 => 43,  132 => 41,  130 => 40,  125 => 38,  120 => 36,  116 => 34,  114 => 33,  111 => 32,  109 => 31,  106 => 30,  98 => 25,  94 => 24,  86 => 19,  80 => 16,  77 => 15,  75 => 14,  71 => 12,  68 => 10,  62 => 9,  59 => 8,  51 => 5,  38 => 4,  36 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/comments.html.twig", "/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/views/partials/comments.html.twig");
    }
}
