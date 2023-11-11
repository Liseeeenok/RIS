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

/* /var/www/ris/plugins/bree7e/crisreport/components/list_work/report.htm */
class __TwigTemplate_5865d0e7d6a811d7984a7f7df102d65eb268a42e8cf65b754ec4a44ac5f6f0d1 extends \Twig\Template
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
        $context["author2"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "author", [], "any", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        if (($context["publications"] ?? null)) {
            // line 5
            echo "<script>
    document.getElementById('get_docx_proceedings').classList.remove('disabled');
    author_id = ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
            echo ";
</script>
<div class=\"ui center aligned container\" style=\"display: none;\">
    <h3 class=\"ui header\">СПИСОК</h3>
    <span>опубликованных научных и учебно-методических работ</span>
    <p>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "surname", [], "any", false, false, false, 12), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "middlename", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
</div>
<table class=\"ui celled table\" style=\"display: none;\">
    <thead>
        <tr>
            <th>№<br>п/п</th>
            <th>Наименование работы</th>
            <th>Вид работы</th>
            <th>Выходные данные</th>
            <th>Объем работы</th>
            <th>Соавторы</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 27
                echo "        <tr>
            <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
            <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
            <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "publicationtype", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
            <td>";
                // line 31
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['publication'] = $context["p"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@publication_outdata"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                echo "</td>
            <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "pagesNumber", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "authors", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
            ";
                // line 35
                echo "        </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </tbody>
</table>
<p style=\"display: none;\">Соискатель: ________________________</p>
<br style=\"display: none;\">
<p style=\"display: none;\">Список верен.<br>Руководитель научного подразделения: ________________________________</p>
<br style=\"display: none;\">
<p style=\"display: none;\">Ученый секретарь: ________________________________
</p>
<p style=\"display: none;\">Дата: ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d.m.Y"), "html", null, true);
            echo "</p>
<p style=\"display: none;\">Печать организации</p>
";
        } else {
            // line 48
            echo "<h2 class=\"ui header\" style=\"margin-top: 1vw\" style=\"display: none;\">Публикации не найдены</h2>
";
        }
        // line 50
        echo "

";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/list_work/report.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 50,  155 => 48,  149 => 45,  139 => 37,  124 => 35,  120 => 33,  116 => 32,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  94 => 27,  77 => 26,  56 => 12,  48 => 7,  44 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set author2 = __SELF__.author %}

{% if publications %}
<script>
    document.getElementById('get_docx_proceedings').classList.remove('disabled');
    author_id = {{ author.id }};
</script>
<div class=\"ui center aligned container\" style=\"display: none;\">
    <h3 class=\"ui header\">СПИСОК</h3>
    <span>опубликованных научных и учебно-методических работ</span>
    <p>{{ author.surname }} {{ author.name }} {{ author.middlename }}</p>
</div>
<table class=\"ui celled table\" style=\"display: none;\">
    <thead>
        <tr>
            <th>№<br>п/п</th>
            <th>Наименование работы</th>
            <th>Вид работы</th>
            <th>Выходные данные</th>
            <th>Объем работы</th>
            <th>Соавторы</th>
        </tr>
    </thead>
    <tbody>
        {% for p in publications %}
        <tr>
            <td>{{ loop.index }}</td>
            <td>{{ p.title }}</td>
            <td>{{ p.publicationtype.name }}</td>
            <td>{% partial '@publication_outdata' publication = p %}</td>
            <td>{{ p.pagesNumber }}</td>
            <td>{{ p.authors }}</td>
            {# <td>{{ p.coAuthors }}</td> #}
        </tr>
        {% endfor %}
    </tbody>
</table>
<p style=\"display: none;\">Соискатель: ________________________</p>
<br style=\"display: none;\">
<p style=\"display: none;\">Список верен.<br>Руководитель научного подразделения: ________________________________</p>
<br style=\"display: none;\">
<p style=\"display: none;\">Ученый секретарь: ________________________________
</p>
<p style=\"display: none;\">Дата: {{ \"now\"|date(\"d.m.Y\") }}</p>
<p style=\"display: none;\">Печать организации</p>
{% else %}
<h2 class=\"ui header\" style=\"margin-top: 1vw\" style=\"display: none;\">Публикации не найдены</h2>
{% endif %}


{# author.artRiscTotal ? author.artRiscTotal|number_format(2) #}", "/var/www/ris/plugins/bree7e/crisreport/components/list_work/report.htm", "");
    }
}
