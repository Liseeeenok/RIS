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

/* /var/www/ris/plugins/bree7e/crisreport/components/raspilreport/default.htm */
class __TwigTemplate_bb620dd684a085fdf10ccf911a9f527f2e67c94efe09b2bebe5ebc0f9684ce78 extends \Twig\Template
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
        echo "
";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 4
        echo "<script>
    \$('.ui.radio.checkbox').checkbox();

    \$('.raspil-type-radio').checkbox('setting', 'onChange', function () {
        if (this.value == 'we') {
            \$('.except-authors-radio').removeClass('disabled');
        } else {
            \$('.except-authors-radio').addClass('disabled');
        }
    }); 
</script>
";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 16
        echo "
";
        // line 17
        $context["nowYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 18
        echo "
<form class=\"ui form\" data-request=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onLoadReport\"
    data-request-update=\"'";
        // line 20
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::raspil-list-by-departments': '#result'\">
    <h4 class=\"ui dividing header\">Общая информация</h4>
    <div class=\"fields\">
        <div class=\"field\">
            <label>Первый отчетный год</label>
            <input name=\"year[from]\" type=\"number\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($context["nowYear"] ?? null) - 1), "html", null, true);
        echo "\" min=\"1990\" max=\"";
        echo twig_escape_filter($this->env, ($context["nowYear"] ?? null), "html", null, true);
        echo "\"
                tabindex=\"0\">
        </div>
        <div class=\"field\">
            <label>Последний отчетный год</label>
            <input name=\"year[to]\" type=\"number\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["nowYear"] ?? null), "html", null, true);
        echo "\" min=\"1990\" max=\"";
        echo twig_escape_filter($this->env, ($context["nowYear"] ?? null), "html", null, true);
        echo "\" tabindex=\"1\">
        </div>

    </div>
    <div class=\"grouped fields\">
        <label for=\"raspil-type\">Способ деления</label>
        <div class=\"field\">
            <div class=\"ui radio checkbox raspil-type-radio\">
                <input type=\"radio\" name=\"raspil-type\" checked tabindex=\"0\" value=\"all\" class=\"hidden\">
                <label>На общее количество авторов</label>
            </div>
        </div>
        <div class=\"field\">
            <div class=\"ui radio checkbox raspil-type-radio\">
                <input type=\"radio\" name=\"raspil-type\" tabindex=\"0\" value=\"we\" class=\"hidden\">
                <label>На авторов только из нашего института</label>
            </div>
        </div>
    </div>
    <div class=\"grouped fields except-authors-radio disabled\">
        <label for=\"except-authors\">Исключение авторов из расчета</label>
        <div class=\"field\">
            <div class=\"ui radio checkbox\">
                <input type=\"radio\" name=\"except-authors\" checked tabindex=\"0\" value=\"all\" class=\"hidden\">
                <label>Учитывать всех авторов</label>
            </div>
        </div>
        <div class=\"field\">
            <div class=\"ui radio checkbox\">
                <input type=\"radio\" name=\"except-authors\" tabindex=\"0\" value=\"except\" class=\"hidden\">
                <label>Не учитывать отказавшихся</label>
            </div>
        </div>
    </div>
    <div class=\"grouped fields\">
        <label for=\"pub-list\">Подробности расчёта</label>
        <div class=\"field\">
            <div class=\"ui radio checkbox\">
                <input type=\"radio\" name=\"pub-list\" checked value=\"none\" class=\"hidden\">
                <label>Не выводить</label>
            </div>
        </div>
        <div class=\"field\">
            <div class=\"ui radio checkbox\">
                <input type=\"radio\" name=\"pub-list\" value=\"list\" class=\"hidden\">
                <label>Выводить список публикаций</label>
            </div>
        </div>
    </div>
    <h4 class=\"ui dividing header\">Коэффициенты</h4>
    <div class=\"fields\">
        <div class=\"field\">
            <label>Статьи Wos Q1</label>
            <input name=\"art-wos-q1\" type=\"number\" value=\"20\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Wos Q2</label>
            <input name=\"art-wos-q2\" type=\"number\" value=\"10\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Wos Q3</label>
            <input name=\"art-wos-q3\" type=\"number\" value=\"5\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Wos Q4</label>
            <input name=\"art-wos-q4\" type=\"number\" value=\"2.5\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
    </div>
    <div class=\"fields\">
        <div class=\"field\">
            <label>Статьи Scopus Q1</label>
            <input name=\"art-scopus-q1\" type=\"number\" value=\"10\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Scopus Q2</label>
            <input name=\"art-scopus-q2\" type=\"number\" value=\"5\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Scopus Q3</label>
            <input name=\"art-scopus-q3\" type=\"number\" value=\"2.5\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Scopus Q4</label>
            <input name=\"art-scopus-q4\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
    </div>
    <div class=\"fields\">
        <div class=\"field\">
            <label>Статьи Wos ESCI</label>
            <input name=\"art-wos-q5\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Scopus ESCI</label>
            <input name=\"art-scopus-q5\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи РИНЦ</label>
            <input name=\"art-risc\" type=\"number\" value=\"0.2\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
    </div>
    <div class=\"fields\">
        <div class=\"three field\">
            <label>Труды Wos</label>
            <input name=\"proc-wos\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Труды Scopus</label>
            <input name=\"proc-scopus\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Труды РИНЦ</label>
            <input name=\"proc-risc\" type=\"number\" value=\"0.1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
    </div>
    <div class=\"fields\">
        <div class=\"field\">
            <label>Монографии</label>
            <input name=\"books\" type=\"number\" value=\"15\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Свидетельства о регистрации</label>
            <input name=\"patents\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
    </div>
    <div class=\"field\">
        <button type=\"submit\" class=\"ui primary labeled icon button\" data-attach-loading>
            <i class=\"book icon\"></i>Сформировать
        </button>
    </div>
</form>
<div id=\"result\">
    <!-- Сюда помещаяется паршл raspil-list   -->
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/raspilreport/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  77 => 25,  69 => 20,  65 => 19,  62 => 18,  60 => 17,  57 => 16,  55 => 3,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

{% put scripts %}
<script>
    \$('.ui.radio.checkbox').checkbox();

    \$('.raspil-type-radio').checkbox('setting', 'onChange', function () {
        if (this.value == 'we') {
            \$('.except-authors-radio').removeClass('disabled');
        } else {
            \$('.except-authors-radio').addClass('disabled');
        }
    }); 
</script>
{% endput %}

{% set nowYear = \"now\"|date('Y') %}

<form class=\"ui form\" data-request=\"{{ __SELF__ }}::onLoadReport\"
    data-request-update=\"'{{ __SELF__ }}::raspil-list-by-departments': '#result'\">
    <h4 class=\"ui dividing header\">Общая информация</h4>
    <div class=\"fields\">
        <div class=\"field\">
            <label>Первый отчетный год</label>
            <input name=\"year[from]\" type=\"number\" value=\"{{ nowYear - 1 }}\" min=\"1990\" max=\"{{ nowYear }}\"
                tabindex=\"0\">
        </div>
        <div class=\"field\">
            <label>Последний отчетный год</label>
            <input name=\"year[to]\" type=\"number\" value=\"{{ nowYear }}\" min=\"1990\" max=\"{{ nowYear }}\" tabindex=\"1\">
        </div>

    </div>
    <div class=\"grouped fields\">
        <label for=\"raspil-type\">Способ деления</label>
        <div class=\"field\">
            <div class=\"ui radio checkbox raspil-type-radio\">
                <input type=\"radio\" name=\"raspil-type\" checked tabindex=\"0\" value=\"all\" class=\"hidden\">
                <label>На общее количество авторов</label>
            </div>
        </div>
        <div class=\"field\">
            <div class=\"ui radio checkbox raspil-type-radio\">
                <input type=\"radio\" name=\"raspil-type\" tabindex=\"0\" value=\"we\" class=\"hidden\">
                <label>На авторов только из нашего института</label>
            </div>
        </div>
    </div>
    <div class=\"grouped fields except-authors-radio disabled\">
        <label for=\"except-authors\">Исключение авторов из расчета</label>
        <div class=\"field\">
            <div class=\"ui radio checkbox\">
                <input type=\"radio\" name=\"except-authors\" checked tabindex=\"0\" value=\"all\" class=\"hidden\">
                <label>Учитывать всех авторов</label>
            </div>
        </div>
        <div class=\"field\">
            <div class=\"ui radio checkbox\">
                <input type=\"radio\" name=\"except-authors\" tabindex=\"0\" value=\"except\" class=\"hidden\">
                <label>Не учитывать отказавшихся</label>
            </div>
        </div>
    </div>
    <div class=\"grouped fields\">
        <label for=\"pub-list\">Подробности расчёта</label>
        <div class=\"field\">
            <div class=\"ui radio checkbox\">
                <input type=\"radio\" name=\"pub-list\" checked value=\"none\" class=\"hidden\">
                <label>Не выводить</label>
            </div>
        </div>
        <div class=\"field\">
            <div class=\"ui radio checkbox\">
                <input type=\"radio\" name=\"pub-list\" value=\"list\" class=\"hidden\">
                <label>Выводить список публикаций</label>
            </div>
        </div>
    </div>
    <h4 class=\"ui dividing header\">Коэффициенты</h4>
    <div class=\"fields\">
        <div class=\"field\">
            <label>Статьи Wos Q1</label>
            <input name=\"art-wos-q1\" type=\"number\" value=\"20\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Wos Q2</label>
            <input name=\"art-wos-q2\" type=\"number\" value=\"10\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Wos Q3</label>
            <input name=\"art-wos-q3\" type=\"number\" value=\"5\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Wos Q4</label>
            <input name=\"art-wos-q4\" type=\"number\" value=\"2.5\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
    </div>
    <div class=\"fields\">
        <div class=\"field\">
            <label>Статьи Scopus Q1</label>
            <input name=\"art-scopus-q1\" type=\"number\" value=\"10\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Scopus Q2</label>
            <input name=\"art-scopus-q2\" type=\"number\" value=\"5\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Scopus Q3</label>
            <input name=\"art-scopus-q3\" type=\"number\" value=\"2.5\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Scopus Q4</label>
            <input name=\"art-scopus-q4\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
    </div>
    <div class=\"fields\">
        <div class=\"field\">
            <label>Статьи Wos ESCI</label>
            <input name=\"art-wos-q5\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи Scopus ESCI</label>
            <input name=\"art-scopus-q5\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Статьи РИНЦ</label>
            <input name=\"art-risc\" type=\"number\" value=\"0.2\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
    </div>
    <div class=\"fields\">
        <div class=\"three field\">
            <label>Труды Wos</label>
            <input name=\"proc-wos\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Труды Scopus</label>
            <input name=\"proc-scopus\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Труды РИНЦ</label>
            <input name=\"proc-risc\" type=\"number\" value=\"0.1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
    </div>
    <div class=\"fields\">
        <div class=\"field\">
            <label>Монографии</label>
            <input name=\"books\" type=\"number\" value=\"15\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
        <div class=\"field\">
            <label>Свидетельства о регистрации</label>
            <input name=\"patents\" type=\"number\" value=\"1\" min=\"0\" max=\"100\" step=\"0.05\">
        </div>
    </div>
    <div class=\"field\">
        <button type=\"submit\" class=\"ui primary labeled icon button\" data-attach-loading>
            <i class=\"book icon\"></i>Сформировать
        </button>
    </div>
</form>
<div id=\"result\">
    <!-- Сюда помещаяется паршл raspil-list   -->
</div>
", "/var/www/ris/plugins/bree7e/crisreport/components/raspilreport/default.htm", "");
    }
}
