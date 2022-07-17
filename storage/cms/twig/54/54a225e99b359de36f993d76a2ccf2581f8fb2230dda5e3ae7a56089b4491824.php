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

/* C:\Program Files\Ampps\www/themes/fb-news/pages/home.htm */
class __TwigTemplate_116a23aecdd515e564a809a795abf97bb7b8fa445eae2f054495239a81725bd1 extends \Twig\Template
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
        echo "<main>
        <div class=\"conainer\">
        <div class=\"news\">
            <div class=\"news__head\">
                <h2>Лента публикаций</h2>
            </div>
            <ol class=\"news__naw\">
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Операционные\">Операционные новости</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Обучение\">Обучение</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"IT\">IT</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Персонал\">Персонал</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Закупки\">Закупки и поставки</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Маркетинг\">Маркетинг</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Инвентаризация\">Инвентаризация</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Бухгалтерия\">Бухгалтерия</a></li>

              <li class=\"news_link\"><a href=\"#\" data-filter=\"Общее\">Общее</a></li>
            </ol>
            <div class=\"news-cards\">
                
                ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("news"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo " 
            </div><!---...///newscard....-->
        </div><!---...///news....-->
    </div> <!---...///Comtainer....-->
    </main>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www/themes/fb-news/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  61 => 21,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main>
        <div class=\"conainer\">
        <div class=\"news\">
            <div class=\"news__head\">
                <h2>Лента публикаций</h2>
            </div>
            <ol class=\"news__naw\">
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Операционные\">Операционные новости</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Обучение\">Обучение</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"IT\">IT</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Персонал\">Персонал</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Закупки\">Закупки и поставки</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Маркетинг\">Маркетинг</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Инвентаризация\">Инвентаризация</a></li>
              <li class=\"news_link\"><a href=\"#\" data-filter=\"Бухгалтерия\">Бухгалтерия</a></li>

              <li class=\"news_link\"><a href=\"#\" data-filter=\"Общее\">Общее</a></li>
            </ol>
            <div class=\"news-cards\">
                
                {% partial 'news'%}
 
            </div><!---...///newscard....-->
        </div><!---...///news....-->
    </div> <!---...///Comtainer....-->
    </main>", "C:\\Program Files\\Ampps\\www/themes/fb-news/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 21);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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
