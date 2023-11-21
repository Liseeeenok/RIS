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

/* /var/www/ris/plugins/bree7e/crisreport/components/raspilreport/raspil-list-by-departments.htm */
class __TwigTemplate_a338380c1e7ab9bffcc9256d7bc3910d3ede110ac7099d0411d34a5ad55e03eb extends \Twig\Template
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
        $context["departments"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "departments", [], "any", false, false, false, 2);
        // line 3
        echo "
<div class=\"ui vertical segment\">
    <table class=\"ui celled structured striped center aligned table\">
        <thead>
            <tr>
                <th rowspan=\"2\" class=\"left aligned\">Фамилия</th>
                <th colspan=\"15\">Статьи</th>
                <th colspan=\"3\">Труды конференций</th>
                <th rowspan=\"2\">Монографии</th>
                <th rowspan=\"2\">Свидетельства</th>
                <th rowspan=\"2\">ИТОГО</th>
            </tr>
            <tr>
                <th>WoS Q1</th>
                <th>WoS Q2</th>
                <th>WoS Q3</th>
                <th>WoS Q4</th>
                <th>Wos ESCI</th>
                <th>Scopus Q1</th>
                <th>Scopus Q2</th>
                <th>Scopus Q3</th>
                <th>Scopus Q4</th>
                <th>Scopus ESCI</th>
                <th>УБС1</th>
                <th>УБС2</th>
                <th>УБС3</th>
                <th>УБС4</th>
                <th>РИНЦ</th>
                <th>Wos</th>
                <th>Scopus</th>
                <th>РИНЦ</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 38
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["department"], "workers", [], "any", false, false, false, 38)) {
                // line 39
                echo "            <tr>
                <th colspan=\"18\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</th>
            </tr>
            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["department"], "workers", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                    // line 43
                    echo "            <tr data-user-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\">
                <td class=\"left aligned\">
                    ";
                    // line 45
                    echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->source, $context["author"], "surname", [], "any", false, false, false, 45) . " ") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 45))) . ".") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "middlename", [], "any", false, false, false, 45))) . "."), "html", null, true);
                    echo "
                    ";
                    // line 46
                    echo ((twig_get_attribute($this->env, $this->source, $context["author"], "hasExcepted", [], "any", false, false, false, 46)) ? (" (Не учитывается)") : (""));
                    echo "
                </td> <!--Фамилии-->
                <td>";
                    // line 48
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ1Total", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ1Total", [], "any", false, false, false, 48), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--WOS Q1-->
                <td>";
                    // line 49
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ2Total", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ2Total", [], "any", false, false, false, 49), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--WOS Q2-->
                <td>";
                    // line 50
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ3Total", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ3Total", [], "any", false, false, false, 50), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--WOS Q3-->
                <td>";
                    // line 51
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ4Total", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ4Total", [], "any", false, false, false, 51), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--WOS Q4-->
                <td>";
                    // line 52
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ5Total", [], "any", false, false, false, 52)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ5Total", [], "any", false, false, false, 52), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--WOS ESCI-->
                <td>";
                    // line 53
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ1Total", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ1Total", [], "any", false, false, false, 53), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Scopus Q1-->
                <td>";
                    // line 54
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ2Total", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ2Total", [], "any", false, false, false, 54), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Scopus Q2-->
                <td>";
                    // line 55
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ3Total", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ3Total", [], "any", false, false, false, 55), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Scopus Q3-->
                <td>";
                    // line 56
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ4Total", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ4Total", [], "any", false, false, false, 56), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Scopus Q4-->
                <td>";
                    // line 57
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ5Total", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ5Total", [], "any", false, false, false, 57), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                <!--Scopus ESCI-->
                <td>";
                    // line 59
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artUBS1Total", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artUBS1Total", [], "any", false, false, false, 59), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--УБС1-->
                <td>";
                    // line 60
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artUBS2Total", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artUBS2Total", [], "any", false, false, false, 60), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--УБС2-->
                <td>";
                    // line 61
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artUBS3Total", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artUBS3Total", [], "any", false, false, false, 61), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--УБС3-->
                <td>";
                    // line 62
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artUBS4Total", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artUBS4Total", [], "any", false, false, false, 62), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--УБС4-->
                <td>";
                    // line 63
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artRiscTotal", [], "any", false, false, false, 63)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artRiscTotal", [], "any", false, false, false, 63), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--РИНЦ-->
                <td>";
                    // line 64
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "procWosTotal", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "procWosTotal", [], "any", false, false, false, 64), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Wos-->
                <td>";
                    // line 65
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "procScopusTotal", [], "any", false, false, false, 65)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "procScopusTotal", [], "any", false, false, false, 65), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Scopus-->
                <td>";
                    // line 66
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "procRiscTotal", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "procRiscTotal", [], "any", false, false, false, 66), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--РИНЦ-->
                <td>";
                    // line 67
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "bookTotal", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "bookTotal", [], "any", false, false, false, 67), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Монографии-->
                <td>";
                    // line 68
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "patentTotal", [], "any", false, false, false, 68)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "patentTotal", [], "any", false, false, false, 68), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Свидетельства-->
                <td>";
                    // line 69
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "total", [], "any", false, false, false, 69)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "total", [], "any", false, false, false, 69), 2, ","), "html", null, true))) : (print (0)));
                    echo "</td> <!--ИТОГО-->
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "            ";
            }
            // line 73
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </tbody>
    </table>
</div>

";
        // line 78
        $context["publications"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "publications", [], "any", false, false, false, 78);
        // line 79
        if (($context["publications"] ?? null)) {
            // line 80
            echo "<div class=\"ui vertical segment\">
    <h2>Список публикаций, участвующих в отчёте</h2>
    <ol class=\"ui list\">
        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 84
                echo "        <li>
            ";
                // line 85
                echo twig_escape_filter($this->env, ((((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "k", [], "any", false, false, false, 85), 2, ",") . "/") . twig_get_attribute($this->env, $this->source, $context["p"], "countAuthor", [], "any", false, false, false, 85)) . "=") . twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "dividedK", [], "any", false, false, false, 85), 2, ",")), "html", null, true);
                echo "
            ";
                // line 87
                echo "            - ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['publication'] = $context["p"]                ;
                $context['__cms_partial_params']['showIndextion'] = true                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@publication"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 88
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["p"], "hasTranslatedVersion", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "            <span style=\"color: orange;\">(Есть перевод:
                ";
                    // line 90
                    echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "translated_version", [], "any", false, false, false, 90), "authors", [], "any", false, false, false, 90) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "translated_version", [], "any", false, false, false, 90), "title", [], "any", false, false, false, 90)) . ".") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "translated_version", [], "any", false, false, false, 90), "year", [], "any", false, false, false, 90)) . "."), "html", null, true);
                    // line 91
                    echo "
                )</span>
            ";
                }
                // line 94
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["p"], "hasExceptAuthors", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "            <span style=\"color: red;\">(Не&nbspучитываются:
                ";
                    // line 96
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p"], "publication_authors", [], "any", false, false, false, 96));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 97
                        echo "                ";
                        ((twig_get_attribute($this->env, $this->source, $context["a"], "is_except", [], "any", false, false, false, 97)) ? (print (twig_escape_filter($this->env, ((((((" " . twig_get_attribute($this->env, $this->source, $context["a"], "surname", [], "any", false, false, false, 97)) . " ") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 97))) . ".") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "middlename", [], "any", false, false, false, 97))) . "."), "html", null, true))) : (print ("")));
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "                )</span>
            ";
                }
                // line 101
                echo "        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    </ol>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/raspilreport/raspil-list-by-departments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 103,  277 => 101,  273 => 99,  264 => 97,  260 => 96,  257 => 95,  254 => 94,  249 => 91,  247 => 90,  244 => 89,  241 => 88,  234 => 87,  230 => 85,  227 => 84,  223 => 83,  218 => 80,  216 => 79,  214 => 78,  208 => 74,  202 => 73,  199 => 72,  190 => 69,  186 => 68,  182 => 67,  178 => 66,  174 => 65,  170 => 64,  166 => 63,  162 => 62,  158 => 61,  154 => 60,  150 => 59,  145 => 57,  141 => 56,  137 => 55,  133 => 54,  129 => 53,  125 => 52,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  104 => 46,  100 => 45,  94 => 43,  90 => 42,  85 => 40,  82 => 39,  79 => 38,  75 => 37,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set departments = __SELF__.departments %}

<div class=\"ui vertical segment\">
    <table class=\"ui celled structured striped center aligned table\">
        <thead>
            <tr>
                <th rowspan=\"2\" class=\"left aligned\">Фамилия</th>
                <th colspan=\"15\">Статьи</th>
                <th colspan=\"3\">Труды конференций</th>
                <th rowspan=\"2\">Монографии</th>
                <th rowspan=\"2\">Свидетельства</th>
                <th rowspan=\"2\">ИТОГО</th>
            </tr>
            <tr>
                <th>WoS Q1</th>
                <th>WoS Q2</th>
                <th>WoS Q3</th>
                <th>WoS Q4</th>
                <th>Wos ESCI</th>
                <th>Scopus Q1</th>
                <th>Scopus Q2</th>
                <th>Scopus Q3</th>
                <th>Scopus Q4</th>
                <th>Scopus ESCI</th>
                <th>УБС1</th>
                <th>УБС2</th>
                <th>УБС3</th>
                <th>УБС4</th>
                <th>РИНЦ</th>
                <th>Wos</th>
                <th>Scopus</th>
                <th>РИНЦ</th>
            </tr>
        </thead>
        <tbody>
            {% for department in departments %}
            {% if department.workers %}
            <tr>
                <th colspan=\"18\">{{ department.name }}</th>
            </tr>
            {% for author in department.workers %}
            <tr data-user-id=\"{{ author.id }}\">
                <td class=\"left aligned\">
                    {{ author.surname ~ \" \" ~ author.name|first ~ \".\" ~ author.middlename|first ~ \".\"}}
                    {{ author.hasExcepted ? \" (Не учитывается)\"}}
                </td> <!--Фамилии-->
                <td>{{ author.artWosQ1Total ? author.artWosQ1Total|number_format(2, ',') }}</td> <!--WOS Q1-->
                <td>{{ author.artWosQ2Total ? author.artWosQ2Total|number_format(2, ',') }}</td> <!--WOS Q2-->
                <td>{{ author.artWosQ3Total ? author.artWosQ3Total|number_format(2, ',') }}</td> <!--WOS Q3-->
                <td>{{ author.artWosQ4Total ? author.artWosQ4Total|number_format(2, ',') }}</td> <!--WOS Q4-->
                <td>{{ author.artWosQ5Total ? author.artWosQ5Total|number_format(2, ',') }}</td> <!--WOS ESCI-->
                <td>{{ author.artScopusQ1Total ? author.artScopusQ1Total|number_format(2, ',') }}</td> <!--Scopus Q1-->
                <td>{{ author.artScopusQ2Total ? author.artScopusQ2Total|number_format(2, ',') }}</td> <!--Scopus Q2-->
                <td>{{ author.artScopusQ3Total ? author.artScopusQ3Total|number_format(2, ',') }}</td> <!--Scopus Q3-->
                <td>{{ author.artScopusQ4Total ? author.artScopusQ4Total|number_format(2, ',') }}</td> <!--Scopus Q4-->
                <td>{{ author.artScopusQ5Total ? author.artScopusQ5Total|number_format(2, ',') }}</td>
                <!--Scopus ESCI-->
                <td>{{ author.artUBS1Total ? author.artUBS1Total|number_format(2, ',') }}</td> <!--УБС1-->
                <td>{{ author.artUBS2Total ? author.artUBS2Total|number_format(2, ',') }}</td> <!--УБС2-->
                <td>{{ author.artUBS3Total ? author.artUBS3Total|number_format(2, ',') }}</td> <!--УБС3-->
                <td>{{ author.artUBS4Total ? author.artUBS4Total|number_format(2, ',') }}</td> <!--УБС4-->
                <td>{{ author.artRiscTotal ? author.artRiscTotal|number_format(2, ',') }}</td> <!--РИНЦ-->
                <td>{{ author.procWosTotal ? author.procWosTotal|number_format(2, ',') }}</td> <!--Wos-->
                <td>{{ author.procScopusTotal ? author.procScopusTotal|number_format(2, ',') }}</td> <!--Scopus-->
                <td>{{ author.procRiscTotal ? author.procRiscTotal|number_format(2, ',') }}</td> <!--РИНЦ-->
                <td>{{ author.bookTotal ? author.bookTotal|number_format(2, ',') }}</td> <!--Монографии-->
                <td>{{ author.patentTotal ? author.patentTotal|number_format(2, ',') }}</td> <!--Свидетельства-->
                <td>{{ author.total ? author.total|number_format(2, ',') : 0 }}</td> <!--ИТОГО-->
            </tr>
            {% endfor %}
            {% endif %}
            {% endfor %}
        </tbody>
    </table>
</div>

{% set publications = __SELF__.publications %}
{% if publications %}
<div class=\"ui vertical segment\">
    <h2>Список публикаций, участвующих в отчёте</h2>
    <ol class=\"ui list\">
        {% for p in publications %}
        <li>
            {{ p.k|number_format(2, ',') ~ \"/\" ~ p.countAuthor ~ \"=\" ~ p.dividedK|number_format(2, ',') }}
            {#<strong>{{ p.authors }}</strong>#}
            - {% partial '@publication' publication = p showIndextion = true %}
            {% if p.hasTranslatedVersion %}
            <span style=\"color: orange;\">(Есть перевод:
                {{ p.translated_version.authors ~ \" \" ~ p.translated_version.title ~ \".\" ~ p.translated_version.year ~
                \".\" }}
                )</span>
            {% endif %}
            {% if p.hasExceptAuthors %}
            <span style=\"color: red;\">(Не&nbspучитываются:
                {% for a in p.publication_authors %}
                {{ a.is_except ? \" \" ~ a.surname ~ \" \" ~ a.name|first ~ \".\" ~ a.middlename|first ~ \".\" }}
                {% endfor %}
                )</span>
            {% endif %}
        </li>
        {% endfor %}
    </ol>
</div>
{% endif %}", "/var/www/ris/plugins/bree7e/crisreport/components/raspilreport/raspil-list-by-departments.htm", "");
    }
}
