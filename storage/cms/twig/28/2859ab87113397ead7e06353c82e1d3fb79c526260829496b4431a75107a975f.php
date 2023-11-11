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

/* /var/www/ris/themes/bree7e-semantic-theme/pages/account/account.htm */
class __TwigTemplate_a1774e0e4e6c5e251546d69f0e0c7574d99ee5dc0eec712f7a011481e52a2638 extends \Twig\Template
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
        echo "<div class=\"ui container\">
    ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/pages/account/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"ui container\">
    {% component 'account' %}
</div>", "/var/www/ris/themes/bree7e-semantic-theme/pages/account/account.htm", "");
    }
}
