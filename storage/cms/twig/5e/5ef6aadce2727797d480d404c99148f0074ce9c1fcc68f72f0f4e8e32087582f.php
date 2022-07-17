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

/* C:\Program Files\Ampps\www/themes/fb-news/partials/header.htm */
class __TwigTemplate_be727b87a3659a011631d909be92c7934be2896f5b0f99aeadd07741e60c9e1c extends \Twig\Template
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
        echo "<header>
    <div class=\"topbar__padder\">
            <div class=\"topbar\">
                    <div class=\"topbar__inner\">
                            <a href=\"/homepage#\"><div class=\"toolbar__brand\"></div></a>
                            <div class=\"topbar__form\">
                                    <input class=\"search-form__input\" type=\"seach\" placeholder=\"Найти\">
                                    <button class=\"search-form__button\">
                                        <svg class=\"search-form__svg\"  id=\"Glyph\" version=\"1.1\" viewBox=\"0 0 32 32\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                            <path d=\"M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z\" id=\"XMLID_223_\"/>
                                        </svg>
                                </button>
                            </div>
                            <div class=\"topbar__links\">
                                <a href=\"#\">Новости</a>
                                <a href=\"#\">Обучение</a>
                                <a href=\"#\">Контакты</a>
                                ";
        // line 18
        if (($context["user"] ?? null)) {
            // line 19
            echo "                                <p class=\"user__hi\">Привет, ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</p><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
                                ";
        }
        // line 21
        echo "
                            </div>
                    </div>
            </div>
        </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www/themes/fb-news/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  60 => 19,  58 => 18,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <div class=\"topbar__padder\">
            <div class=\"topbar\">
                    <div class=\"topbar__inner\">
                            <a href=\"/homepage#\"><div class=\"toolbar__brand\"></div></a>
                            <div class=\"topbar__form\">
                                    <input class=\"search-form__input\" type=\"seach\" placeholder=\"Найти\">
                                    <button class=\"search-form__button\">
                                        <svg class=\"search-form__svg\"  id=\"Glyph\" version=\"1.1\" viewBox=\"0 0 32 32\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                            <path d=\"M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z\" id=\"XMLID_223_\"/>
                                        </svg>
                                </button>
                            </div>
                            <div class=\"topbar__links\">
                                <a href=\"#\">Новости</a>
                                <a href=\"#\">Обучение</a>
                                <a href=\"#\">Контакты</a>
                                {% if user  %}
                                <p class=\"user__hi\">Привет, {{ user.name  }}</p><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
                                {% endif  %}

                            </div>
                    </div>
            </div>
        </div>
</header>", "C:\\Program Files\\Ampps\\www/themes/fb-news/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18);
        static $filters = array("escape" => 19);
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
