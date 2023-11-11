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

/* /var/www/ris/themes/bree7e-semantic-theme/partials/account/activation_check.htm */
class __TwigTemplate_6bc9a4f62eb1addabcb3895113e92a0b63628e500d2ce6c84a2c4f77fa5f5baf extends \Twig\Template
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "is_activated", [], "any", false, false, false, 2)) {
            // line 3
            echo "
    <h3>Ваш email адрес не подтверждён.</h3>
    <p>
        You should verify your account otherwise it may be deleted. Please check your email to verify.
        <a href=\"javascript:;\" data-request=\"onSendActivationEmail\">Send the verification email again</a>.
    </p>

";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/partials/account/activation_check.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% if not user.is_activated %}

    <h3>Ваш email адрес не подтверждён.</h3>
    <p>
        You should verify your account otherwise it may be deleted. Please check your email to verify.
        <a href=\"javascript:;\" data-request=\"onSendActivationEmail\">Send the verification email again</a>.
    </p>

{% endif %}", "/var/www/ris/themes/bree7e-semantic-theme/partials/account/activation_check.htm", "");
    }
}
