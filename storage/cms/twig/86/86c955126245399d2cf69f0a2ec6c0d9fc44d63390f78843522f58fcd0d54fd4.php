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

/* C:\Program Files\Ampps\www/themes/fb-news/partials/news.htm */
class __TwigTemplate_f3673425059a42d88c35bc59137a90cd34e6c8e51ac49b0a24cb4b7d730c063e extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, true, 3));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 4
                echo "
";
                // line 5
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 5)) {
                    echo ", ";
                }
                // line 6
                echo "<div class=\"card\"  data-cat=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo ">
    <div class=\"card-logo\">
            <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "\">
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 9));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 10
                    echo "                <img class=\"card-img\" src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo "\">
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            </a>
    </div>
    <div class=\"card-info\">
        <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\"><span class=\"card__head\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "</span></a>
        <a><span class=\"card__txt\">";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</span></a>
    </div>
    <div class=\"data\">
        <span class=\"tag\">";
                // line 19
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "</span>
        <div class=\"day\">";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 20), 20, $this->source), "d.m.y"), "html", null, true);
                echo "</div>
    </div>
    <div class=\"card__stat\">
        <span class=\"caed__stat__item\" >
            <i class=\"far fa-eye\"></i> ";
                // line 24
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
        </span>
        <span class=\"card__stat__item\" >
            <i class=\"far fa-comment\"></i> ";
                // line 27
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "count", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "
        </span>
    </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www/themes/fb-news/partials/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 31,  128 => 27,  122 => 24,  115 => 20,  111 => 19,  105 => 16,  99 => 15,  94 => 12,  83 => 10,  79 => 9,  75 => 8,  69 => 6,  65 => 5,  62 => 4,  45 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}
{% for post in posts %}
{% for tag in post.tags  %}

{% if not loop.last %}, {% endif  %}
<div class=\"card\"  data-cat={{ tag.name }}>
    <div class=\"card-logo\">
            <a href=\"{{ post.url }}\">
                {% for image in post.featured_images %}
                <img class=\"card-img\" src=\"{{ image.path }}\" alt=\"{{ post.title }}\">
                {% endfor %}
            </a>
    </div>
    <div class=\"card-info\">
        <a href=\"{{ post.url }}\"><span class=\"card__head\">{{ post.title }}</span></a>
        <a><span class=\"card__txt\">{{ post.excerpt }}</span></a>
    </div>
    <div class=\"data\">
        <span class=\"tag\">{{ tag.name  }}</span>
        <div class=\"day\">{{ post.published_at|date('d.m.y') }}</div>
    </div>
    <div class=\"card__stat\">
        <span class=\"caed__stat__item\" >
            <i class=\"far fa-eye\"></i> {{ post.views }}
        </span>
        <span class=\"card__stat__item\" >
            <i class=\"far fa-comment\"></i> {{commentsPost.count}}
        </span>
    </div>
    {% endfor %}
</div>
{% endfor %}", "C:\\Program Files\\Ampps\\www/themes/fb-news/partials/news.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 2, "if" => 5);
        static $filters = array("escape" => 6, "date" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'date'],
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
