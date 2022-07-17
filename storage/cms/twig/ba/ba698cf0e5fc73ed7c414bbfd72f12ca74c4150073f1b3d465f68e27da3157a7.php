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

/* C:\Program Files\Ampps\www/themes/fb-news/pages/posts.htm */
class __TwigTemplate_81d299d1d516af54d951453c78a71b95c1317dd4f592003fde01dec94e108b7b extends \Twig\Template
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
        echo "<section class=\"section\">
   <div class=\"container\">
      <div class=\"section_header\">
         <h2 class=\"section_title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h2>
         <div class=\"section_post\">
            ";
        // line 6
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 6))) {
            // line 7
            echo "            <div class=\"featured-images text-center\">
               ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 9
                echo "               <div class=\"section_img\">
                  <img
                     data-src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\"
                     src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\"
                     alt=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "\"
                     style=\"max-width: 100%\" />
               </div>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "            </div>
            ";
        }
        // line 19
        echo "            ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 19), 19, $this->source);
        echo "
         </div>
      </div>
   </div>
   ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("commentsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www/themes/fb-news/pages/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  92 => 23,  84 => 19,  80 => 17,  70 => 13,  66 => 12,  62 => 11,  58 => 9,  54 => 8,  51 => 7,  49 => 6,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\">
   <div class=\"container\">
      <div class=\"section_header\">
         <h2 class=\"section_title\">{{ post.title }}</h2>
         <div class=\"section_post\">
            {% if post.featured_images|length %}
            <div class=\"featured-images text-center\">
               {% for image in post.featured_images %}
               <div class=\"section_img\">
                  <img
                     data-src=\"{{ image.filename }}\"
                     src=\"{{ image.path }}\"
                     alt=\"{{ image.description }}\"
                     style=\"max-width: 100%\" />
               </div>
               {% endfor %}
            </div>
            {% endif %}
            {{ post.content_html|raw}}
         </div>
      </div>
   </div>
   {% component 'commentsPost' %}
</section>", "C:\\Program Files\\Ampps\\www/themes/fb-news/pages/posts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 8, "component" => 23);
        static $filters = array("escape" => 4, "length" => 6, "raw" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'component'],
                ['escape', 'length', 'raw'],
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
