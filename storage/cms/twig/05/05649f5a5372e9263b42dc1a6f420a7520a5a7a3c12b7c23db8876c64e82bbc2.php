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

/* /var/www/ris/plugins/bree7e/crisreport/components/report33/default.htm */
class __TwigTemplate_b1c19aec59c3ea5058eda8015481e1a51d7c45a67d2da43f357fbe5332270736 extends \Twig\Template
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
        echo "<form class=\"ui form\"
    data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRenderReport\"
    data-request-flash
    data-request-update=\"'";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::report': '#result'\">
    <div class=\"fields\">
        <div class=\"field\">
            <label>От года</label>
            <input name=\"fromYear\" type=\"number\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - 5), "html", null, true);
        echo "\" min=\"2000\" max=\"";
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") + 2), "html", null, true);
        echo "\">
        </div>
        <div class=\"field\">
            <label>До года</label>
            <input name=\"toYear\" type=\"number\" placeholder=\"\" min=\"1950\" max=\"";
        // line 13
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") + 2), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "\">
        </div>
    </div>    
    <div class=\"field\">
        <label>Сотрудник</label>
        <select name=\"author\" class=\"ui search dropdown\">
            <option value=\"0\">Выбор</option>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "authors", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 21
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "surname", [], "any", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "middlename", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </select> 
    </div>  

    <div class=\"field\">
        <button type=\"submit\" class=\"ui primary button\" data-attach-loading>
            Сформировать
        </button> 
    </div>      
</form>
<div id=\"result\"></div>

";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 35
        echo "    <script>
        \$( document ).ready(function() {
            \$('.ui.dropdown')
                .dropdown()
            ;
        });
    </script>
";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/report33/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  107 => 35,  105 => 34,  92 => 23,  77 => 21,  73 => 20,  61 => 13,  52 => 9,  45 => 5,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<form class=\"ui form\"
    data-request=\"{{ __SELF__ }}::onRenderReport\"
    data-request-flash
    data-request-update=\"'{{ __SELF__ }}::report': '#result'\">
    <div class=\"fields\">
        <div class=\"field\">
            <label>От года</label>
            <input name=\"fromYear\" type=\"number\" value=\"{{ \"now\"|date(\"Y\") - 5 }}\" min=\"2000\" max=\"{{ \"now\"|date(\"Y\") + 2 }}\">
        </div>
        <div class=\"field\">
            <label>До года</label>
            <input name=\"toYear\" type=\"number\" placeholder=\"\" min=\"1950\" max=\"{{ \"now\"|date(\"Y\") + 2 }}\" value=\"{{ \"now\"|date(\"Y\") }}\">
        </div>
    </div>    
    <div class=\"field\">
        <label>Сотрудник</label>
        <select name=\"author\" class=\"ui search dropdown\">
            <option value=\"0\">Выбор</option>
            {% for author in __SELF__.authors %}
                <option value=\"{{ author.id }}\">{{ author.surname }} {{ author.name }} {{ author.middlename }}</option>
            {% endfor %}
        </select> 
    </div>  

    <div class=\"field\">
        <button type=\"submit\" class=\"ui primary button\" data-attach-loading>
            Сформировать
        </button> 
    </div>      
</form>
<div id=\"result\"></div>

{% put scripts %}
    <script>
        \$( document ).ready(function() {
            \$('.ui.dropdown')
                .dropdown()
            ;
        });
    </script>
{% endput %}
", "/var/www/ris/plugins/bree7e/crisreport/components/report33/default.htm", "");
    }
}
