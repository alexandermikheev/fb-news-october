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

/* C:\Program Files\Ampps\www/themes/fb-news/pages/login.htm */
class __TwigTemplate_4028f25b0580a0d6a0e24b13ec23280f8a089987feb8db6c4f4b21c3e1bf0230 extends \Twig\Template
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
        echo "<body>
    <div class=\"container\">
        <div class=\"logo__img\">

            <div class=\"sladeshow_container\">
                    <div class=\"mySlides fade\">
                        <div class=\"nubertext\">1/3</div>
                        <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/Franklins-burger.jpg");
        echo "\" style=\"width: 100%; height: 100vh;\">
                    </div>
                

                <div class=\"sladeshow_container\">
                    <div class=\"mySlides fade\">
                        <div class=\"nubertext\">2/3</div>
                        <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/fb.jpg");
        echo "\" style=\"width: 100%; height: 100vh;\">
                    </div>
                </div>

                <div class=\"sladeshow_container\">
                    <div class=\"mySlides fade\">
                        <div class=\"nubertext\">3/3</div>
                        <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/fb2.jpg");
        echo "\" style=\"width: 100%; height: 100vh;\">
                    </div>
                </div>
                <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094</a>
                <a class=\"next\" onclick=\"plusSlides(1)\">&#10095</a>
            </div>
        </div>
        <div class=\"form-login\">
            <div class=\"brand\"></div>
            <div class=\"login-title\">
                <h1>Добро пожаловать</h1>
                <span>Пожалуйста, введите логин и пароль, для авторазации</span>
                <div class=\"login\">
                    <div class=\"login-info\">
                        <span>Франклинс Бургер Корпоративный</span>
                        <span>Сотрудники, менеджеры и офис</span>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 form-login\">
                            <h3></h3>
                            ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("signin"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "                        </div>
                    </div>
            </div>
            </div>

        </div>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www/themes/fb-news/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  91 => 42,  68 => 22,  58 => 15,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
    <div class=\"container\">
        <div class=\"logo__img\">

            <div class=\"sladeshow_container\">
                    <div class=\"mySlides fade\">
                        <div class=\"nubertext\">1/3</div>
                        <img src=\"{{ '/assets/images/Franklins-burger.jpg'|theme }}\" style=\"width: 100%; height: 100vh;\">
                    </div>
                

                <div class=\"sladeshow_container\">
                    <div class=\"mySlides fade\">
                        <div class=\"nubertext\">2/3</div>
                        <img src=\"{{ '/assets/images/fb.jpg'|theme }}\" style=\"width: 100%; height: 100vh;\">
                    </div>
                </div>

                <div class=\"sladeshow_container\">
                    <div class=\"mySlides fade\">
                        <div class=\"nubertext\">3/3</div>
                        <img src=\"{{ '/assets/images/fb2.jpg'|theme }}\" style=\"width: 100%; height: 100vh;\">
                    </div>
                </div>
                <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094</a>
                <a class=\"next\" onclick=\"plusSlides(1)\">&#10095</a>
            </div>
        </div>
        <div class=\"form-login\">
            <div class=\"brand\"></div>
            <div class=\"login-title\">
                <h1>Добро пожаловать</h1>
                <span>Пожалуйста, введите логин и пароль, для авторазации</span>
                <div class=\"login\">
                    <div class=\"login-info\">
                        <span>Франклинс Бургер Корпоративный</span>
                        <span>Сотрудники, менеджеры и офис</span>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 form-login\">
                            <h3></h3>
                            {% partial 'signin'%}
                        </div>
                    </div>
            </div>
            </div>

        </div>
    </div>
</body>
</html>", "C:\\Program Files\\Ampps\\www/themes/fb-news/pages/login.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 42);
        static $filters = array("theme" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['theme'],
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
