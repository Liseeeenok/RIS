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

/* /var/www/ris/themes/bree7e-semantic-theme/partials/account/update.htm */
class __TwigTemplate_16b0ca390964eeae7be0effbdf063650b410f8de1562368adfd326bbcb6f0f45 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate", ["model" => ($context["user"] ?? null), "class" => "ui form column"]]);
        echo "

<div class=\"field\">
    <label for=\"accountName\">Логин</label>
    <input name=\"name\" type=\"text\" id=\"accountName\" value=\"";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "name"]);
        echo "\">
</div>

<div class=\"field\">
    <label for=\"accountEmail\">Email</label>
    <input name=\"email\" type=\"email\" id=\"accountEmail\" value=\"";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "email"]);
        echo "\">
</div>

<div class=\"field\">
    <label for=\"accountPassword\">Новый пароль</label>
    <input name=\"password\" type=\"password\" id=\"accountPassword\">
</div>

<div class=\"field\">
    <label for=\"accountPasswordConfirm\">Подтверждение пароля</label>
    <input name=\"password_confirmation\" type=\"password\" id=\"accountPasswordConfirm\">
</div>

<button type=\"submit\" class=\"ui button\">Сохранить</button>

";
        // line 26
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/partials/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  52 => 11,  44 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{{ form_ajax('onUpdate', { model: user, class: 'ui form column'} ) }}

<div class=\"field\">
    <label for=\"accountName\">Логин</label>
    <input name=\"name\" type=\"text\" id=\"accountName\" value=\"{{ form_value('name') }}\">
</div>

<div class=\"field\">
    <label for=\"accountEmail\">Email</label>
    <input name=\"email\" type=\"email\" id=\"accountEmail\" value=\"{{ form_value('email') }}\">
</div>

<div class=\"field\">
    <label for=\"accountPassword\">Новый пароль</label>
    <input name=\"password\" type=\"password\" id=\"accountPassword\">
</div>

<div class=\"field\">
    <label for=\"accountPasswordConfirm\">Подтверждение пароля</label>
    <input name=\"password_confirmation\" type=\"password\" id=\"accountPasswordConfirm\">
</div>

<button type=\"submit\" class=\"ui button\">Сохранить</button>

{{ form_close() }}", "/var/www/ris/themes/bree7e-semantic-theme/partials/account/update.htm", "");
    }
}
