<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\Program Files\Ampps\www/plugins/saurabhdhariwal/comments/components/comments/form.htm */
class __TwigTemplate_2d95515f2889283d525f201a00cb594bb26efb9860f9f5ce24dc3d62570a3367 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"wrap-comment-form\">
    <div class=\"row\" id=\"comment-form\">

        <h2 class=\"comment-reply-title\">Add comment
            <small><a onclick=\"Comment.cancel()\" style=\"display: none;\" rel=\"nofollow\" id=\"cancel-comment-reply-link\"
                      title=\"Cancel reply\">×</a>
            </small>
        </h2>
        <form>
            <div id=\"comment_flash_message\"></div>
            ";
        // line 11
        if ((($context["user"] ?? null) == false)) {
            // line 12
            echo "                <!-- Name Field -->
                <div class=\"form-group\">
                    <input placeholder=\"Name\" class=\"form-control\" name=\"author\" type=\"text\">
                </div>

                <!-- Email Field -->
                <div class=\"form-group\">
                    <input placeholder=\"Email\" class=\"form-control\" name=\"email\" type=\"text\">
                </div>
            ";
        }
        // line 22
        echo "            <!-- Content Field -->
            <div class=\"form-group\">
                <textarea placeholder=\"Leave a comment ...\" class=\"form-control\" id=\"comment-text\" name=\"content\"
                          cols=\"50\" rows=\"10\"></textarea>
            </div>

            <input name=\"post_id\" type=\"hidden\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post_id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\">

            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 30), "recaptcha_enabled", [], "any", false, false, true, 30)) {
            echo "  
            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 31), "site_key", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\"></div>
            <br>
            ";
        }
        // line 34
        echo "
            <!-- Submit Field -->
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\" onclick=\"Comment.saveButton(event)\">Send</button>
            </div>
        </form>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www/plugins/saurabhdhariwal/comments/components/comments/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  82 => 31,  78 => 30,  73 => 28,  65 => 22,  53 => 12,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wrap-comment-form\">
    <div class=\"row\" id=\"comment-form\">

        <h2 class=\"comment-reply-title\">Add comment
            <small><a onclick=\"Comment.cancel()\" style=\"display: none;\" rel=\"nofollow\" id=\"cancel-comment-reply-link\"
                      title=\"Cancel reply\">×</a>
            </small>
        </h2>
        <form>
            <div id=\"comment_flash_message\"></div>
            {% if(user == false) %}
                <!-- Name Field -->
                <div class=\"form-group\">
                    <input placeholder=\"Name\" class=\"form-control\" name=\"author\" type=\"text\">
                </div>

                <!-- Email Field -->
                <div class=\"form-group\">
                    <input placeholder=\"Email\" class=\"form-control\" name=\"email\" type=\"text\">
                </div>
            {% endif %}
            <!-- Content Field -->
            <div class=\"form-group\">
                <textarea placeholder=\"Leave a comment ...\" class=\"form-control\" id=\"comment-text\" name=\"content\"
                          cols=\"50\" rows=\"10\"></textarea>
            </div>

            <input name=\"post_id\" type=\"hidden\" value=\"{{__SELF__.post_id}}\">

            {% if (__SELF__.settings.recaptcha_enabled) %}  
            <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.settings.site_key }}\"></div>
            <br>
            {% endif %}

            <!-- Submit Field -->
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\" onclick=\"Comment.saveButton(event)\">Send</button>
            </div>
        </form>
    </div>
</div>


", "C:\\Program Files\\Ampps\\www/plugins/saurabhdhariwal/comments/components/comments/form.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11);
        static $filters = array("escape" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
