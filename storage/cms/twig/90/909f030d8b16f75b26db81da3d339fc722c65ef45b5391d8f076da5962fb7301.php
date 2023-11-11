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

/* /var/www/ris/plugins/xeor/yandexwebmaster/components/yandexwebmaster/default.htm */
class __TwigTemplate_f627926ec51d6a6912c39f68dc83d2fe44c2410c8424af53a2ef67808dec6abd extends \Twig\Template
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
        // line 1
        echo "<meta name=\"yandex-verification\" content=\"";
        echo ($context["webmaster"] ?? null);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/xeor/yandexwebmaster/components/yandexwebmaster/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta name=\"yandex-verification\" content=\"{{ webmaster|raw }}\" />
", "/var/www/ris/plugins/xeor/yandexwebmaster/components/yandexwebmaster/default.htm", "");
    }
}
