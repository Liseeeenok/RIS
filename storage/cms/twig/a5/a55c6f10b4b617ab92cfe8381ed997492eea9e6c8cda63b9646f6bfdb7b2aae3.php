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

/* /var/www/ris/themes/bree7e-semantic-theme/partials/site/footer.htm */
class __TwigTemplate_987171d3992c9f4fa0dccf608b4550194ce8fb5fd97e020dd47a28fb66f5fd90 extends \Twig\Template
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
        echo "<div class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"column\">
            <div class=\"footer\">
                <p class=\"muted\"> © 2023 — Илья Новоселов и Владислав Ведерников</p>
                <p>Сайт работает на <a href=\"http://octobercms.com\">October CMS</a></p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"column\">
            <div class=\"footer\">
                <p class=\"muted\"> © 2023 — Илья Новоселов и Владислав Ведерников</p>
                <p>Сайт работает на <a href=\"http://octobercms.com\">October CMS</a></p>
            </div>
        </div>
    </div>
</div>", "/var/www/ris/themes/bree7e-semantic-theme/partials/site/footer.htm", "");
    }
}
