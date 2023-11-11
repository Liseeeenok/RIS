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

/* /var/www/ris/plugins/bree7e/crisreport/components/list_work/default.htm */
class __TwigTemplate_85c3152d69c1ba79e1b10d3af9b0ecd99a497fb175b40b23377e8fae2bd0dbf3 extends \Twig\Template
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
        echo "<form class=\"ui form\" data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRenderReport\" data-request-flash
    data-request-update=\"'";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::report': '#result'\">
    <div class=\"fields\">
        <div class=\"field\">
            <label>От года</label>
            <input name=\"fromYear\" type=\"number\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, " now", "Y") - 5), "html", null, true);
        echo "\" min=\"2000\" max=\"";
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, " now", "Y") + 2), "html", null, true);
        // line 8
        echo "\">
        </div>
        <div class=\"field\">
            <label>До года</label>
            <input name=\"toYear\" type=\"number\" placeholder=\"\" min=\"1950\" max=\"";
        // line 12
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, " now", "Y") + 2), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "
                now", "Y"), "html", null, true);
        // line 13
        echo "\">
        </div>
    </div>
    <div class=\"field\">
        <label>Сотрудник</label>
        <select name=\"author\" id=\"author\" class=\"ui search dropdown\">
            <option value=\"0\">Выбор</option>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "authors", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 21
            echo "            <option value=\"";
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
        <button type=\"button\" id=\"get_docx_proceedings\" class=\"ui red button disabled\">
            Скачать DOCX списка трудов
        </button>
    </div>
</form>
<div id=\"result\"></div>

";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 38
        echo "<script>
    \$(document).ready(function () {
        \$('.ui.dropdown')
            .dropdown()
            ;
    });
    author_id = 0;
    document.getElementById('author').addEventListener('change', async (e) => {
        document.getElementById('get_docx_proceedings').classList.add('disabled');
    });
    url = `https://mypew.ru:4501`;
    document.getElementById('get_docx_proceedings').addEventListener('click', async (e) => {
        fromYear = \$('input[name=\"fromYear\"]').val();
        toYear = \$('input[name=\"toYear\"]').val();
        send_url = `\${url}/docx?form=proceedings&author_id=\${author_id}&from_year=\${fromYear}&to_year=\${toYear}`
        ret_url = await sendRequest(send_url);
        window.open(ret_url);
    });
    async function sendRequest(send_url) {
        let response = await fetch(send_url);
        if (response.ok) { // если HTTP-статус в диапазоне 200-299
            // получаем тело ответа
            let json = await response.json();
            answer = json;
            return `https://ris.mypew.ru/docx/\${answer}.docx`
        } else {
            alert(\"Ошибка HTTP: \" + response.status);
        }
    }
</script>
";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/list_work/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  110 => 38,  108 => 37,  92 => 23,  77 => 21,  73 => 20,  64 => 13,  59 => 12,  53 => 8,  49 => 7,  42 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<form class=\"ui form\" data-request=\"{{ __SELF__ }}::onRenderReport\" data-request-flash
    data-request-update=\"'{{ __SELF__ }}::report': '#result'\">
    <div class=\"fields\">
        <div class=\"field\">
            <label>От года</label>
            <input name=\"fromYear\" type=\"number\" value=\"{{ \" now\"|date(\"Y\") - 5 }}\" min=\"2000\" max=\"{{ \" now\"|date(\"Y\")
                + 2 }}\">
        </div>
        <div class=\"field\">
            <label>До года</label>
            <input name=\"toYear\" type=\"number\" placeholder=\"\" min=\"1950\" max=\"{{ \" now\"|date(\"Y\") + 2 }}\" value=\"{{ \"
                now\"|date(\"Y\") }}\">
        </div>
    </div>
    <div class=\"field\">
        <label>Сотрудник</label>
        <select name=\"author\" id=\"author\" class=\"ui search dropdown\">
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
        <button type=\"button\" id=\"get_docx_proceedings\" class=\"ui red button disabled\">
            Скачать DOCX списка трудов
        </button>
    </div>
</form>
<div id=\"result\"></div>

{% put scripts %}
<script>
    \$(document).ready(function () {
        \$('.ui.dropdown')
            .dropdown()
            ;
    });
    author_id = 0;
    document.getElementById('author').addEventListener('change', async (e) => {
        document.getElementById('get_docx_proceedings').classList.add('disabled');
    });
    url = `https://mypew.ru:4501`;
    document.getElementById('get_docx_proceedings').addEventListener('click', async (e) => {
        fromYear = \$('input[name=\"fromYear\"]').val();
        toYear = \$('input[name=\"toYear\"]').val();
        send_url = `\${url}/docx?form=proceedings&author_id=\${author_id}&from_year=\${fromYear}&to_year=\${toYear}`
        ret_url = await sendRequest(send_url);
        window.open(ret_url);
    });
    async function sendRequest(send_url) {
        let response = await fetch(send_url);
        if (response.ok) { // если HTTP-статус в диапазоне 200-299
            // получаем тело ответа
            let json = await response.json();
            answer = json;
            return `https://ris.mypew.ru/docx/\${answer}.docx`
        } else {
            alert(\"Ошибка HTTP: \" + response.status);
        }
    }
</script>
{% endput %}", "/var/www/ris/plugins/bree7e/crisreport/components/list_work/default.htm", "");
    }
}
