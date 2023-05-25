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
class __TwigTemplate_b405f489e6a91f2591693f3d14880e92bdf6c19a6b679636029911b534fab84f extends \Twig\Template
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
            <tr >
                <th rowspan=\"2\" class=\"left aligned\">Фамилия</th>
                <th colspan=\"7\">Статьи</th>
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
                <th>ESCI</th>
                <th>Scopus</th>
                <th>РИНЦ</th>
                <th>Wos</th>
                <th>Scopus</th>
                <th>РИНЦ</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 30
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["department"], "workers", [], "any", false, false, false, 30)) {
                // line 31
                echo "                    <tr><th colspan=\"14\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "</th></tr>
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["department"], "workers", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                    // line 33
                    echo "                    <tr data-user-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 33), "html", null, true);
                    echo "\">
                        <td class=\"left aligned\">
                            ";
                    // line 35
                    echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->source, $context["author"], "surname", [], "any", false, false, false, 35) . " ") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 35))) . ".") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "middlename", [], "any", false, false, false, 35))) . "."), "html", null, true);
                    echo "
                            ";
                    // line 36
                    echo ((twig_get_attribute($this->env, $this->source, $context["author"], "hasExcepted", [], "any", false, false, false, 36)) ? (" (Не учитывается)") : (""));
                    echo "
                        </td>
                        <td>";
                    // line 38
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ1Total", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ1Total", [], "any", false, false, false, 38), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 39
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ2Total", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ2Total", [], "any", false, false, false, 39), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 40
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ3Total", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ3Total", [], "any", false, false, false, 40), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 41
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ4Total", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ4Total", [], "any", false, false, false, 41), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 42
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ5Total", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ5Total", [], "any", false, false, false, 42), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 43
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusTotal", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusTotal", [], "any", false, false, false, 43), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 44
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artRiscTotal", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artRiscTotal", [], "any", false, false, false, 44), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 45
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "procWosTotal", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "procWosTotal", [], "any", false, false, false, 45), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 46
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "procScopusTotal", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "procScopusTotal", [], "any", false, false, false, 46), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 47
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "procRiscTotal", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "procRiscTotal", [], "any", false, false, false, 47), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 48
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "bookTotal", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "bookTotal", [], "any", false, false, false, 48), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 49
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "patentTotal", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "patentTotal", [], "any", false, false, false, 49), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 50
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "total", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "total", [], "any", false, false, false, 50), 2, ","), "html", null, true))) : (print (0)));
                    echo "</td>
                    </tr>             
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                ";
            }
            // line 54
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
</div>

";
        // line 59
        $context["publications"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "publications", [], "any", false, false, false, 59);
        // line 60
        if (($context["publications"] ?? null)) {
            // line 61
            echo "<div class=\"ui vertical segment\">
    <h2>Список публикаций, участвующих в отчёте</h2>
    <ol class=\"ui list\">
        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 65
                echo "        <li>
            ";
                // line 66
                echo twig_escape_filter($this->env, ((((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "k", [], "any", false, false, false, 66), 2, ",") . "/") . twig_get_attribute($this->env, $this->source, $context["p"], "countAuthor", [], "any", false, false, false, 66)) . "=") . twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "dividedK", [], "any", false, false, false, 66), 2, ",")), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "authors", [], "any", false, false, false, 66), "html", null, true);
                echo "</strong> - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 66), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "year", [], "any", false, false, false, 66), "html", null, true);
                echo "
            ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["p"], "hasTranslatedVersion", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "                 <span style=\"color: orange;\">(Есть перевод:
                    ";
                    // line 69
                    echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "translated_version", [], "any", false, false, false, 69), "authors", [], "any", false, false, false, 69) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "translated_version", [], "any", false, false, false, 69), "title", [], "any", false, false, false, 69)) . ".") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "translated_version", [], "any", false, false, false, 69), "year", [], "any", false, false, false, 69)) . "."), "html", null, true);
                    echo "
                )</span>
            ";
                }
                // line 71
                echo "            
            ";
                // line 72
                if (twig_get_attribute($this->env, $this->source, $context["p"], "hasExceptAuthors", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "                 <span style=\"color: red;\">(Не&nbspучитываются:
                ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p"], "publication_authors", [], "any", false, false, false, 74));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 75
                        echo "                    ";
                        ((twig_get_attribute($this->env, $this->source, $context["a"], "is_except", [], "any", false, false, false, 75)) ? (print (twig_escape_filter($this->env, ((((((" " . twig_get_attribute($this->env, $this->source, $context["a"], "surname", [], "any", false, false, false, 75)) . " ") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 75))) . ".") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "middlename", [], "any", false, false, false, 75))) . "."), "html", null, true))) : (print ("")));
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                )</span>
            ";
                }
                // line 79
                echo "        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
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
        return array (  239 => 81,  232 => 79,  228 => 77,  219 => 75,  215 => 74,  212 => 73,  210 => 72,  207 => 71,  201 => 69,  198 => 68,  196 => 67,  186 => 66,  183 => 65,  179 => 64,  174 => 61,  172 => 60,  170 => 59,  164 => 55,  158 => 54,  155 => 53,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  98 => 38,  93 => 36,  89 => 35,  83 => 33,  79 => 32,  74 => 31,  71 => 30,  67 => 29,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set departments = __SELF__.departments %}

<div class=\"ui vertical segment\">
    <table class=\"ui celled structured striped center aligned table\">
        <thead>
            <tr >
                <th rowspan=\"2\" class=\"left aligned\">Фамилия</th>
                <th colspan=\"7\">Статьи</th>
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
                <th>ESCI</th>
                <th>Scopus</th>
                <th>РИНЦ</th>
                <th>Wos</th>
                <th>Scopus</th>
                <th>РИНЦ</th>
            </tr>
        </thead>
        <tbody>
            {% for department in departments %}
                {% if department.workers %}
                    <tr><th colspan=\"14\">{{ department.name }}</th></tr>
                    {% for author in department.workers %}
                    <tr data-user-id=\"{{ author.id }}\">
                        <td class=\"left aligned\">
                            {{ author.surname ~ \" \" ~ author.name|first ~ \".\" ~ author.middlename|first ~ \".\"}}
                            {{ author.hasExcepted ? \" (Не учитывается)\"}}
                        </td>
                        <td>{{ author.artWosQ1Total ? author.artWosQ1Total|number_format(2, ',')  }}</td>
                        <td>{{ author.artWosQ2Total ? author.artWosQ2Total|number_format(2, ',')  }}</td>
                        <td>{{ author.artWosQ3Total ? author.artWosQ3Total|number_format(2, ',')  }}</td>
                        <td>{{ author.artWosQ4Total ? author.artWosQ4Total|number_format(2, ',')  }}</td>
                        <td>{{ author.artWosQ5Total ? author.artWosQ5Total|number_format(2, ',')  }}</td>
                        <td>{{ author.artScopusTotal ? author.artScopusTotal|number_format(2, ',')  }}</td>
                        <td>{{ author.artRiscTotal ? author.artRiscTotal|number_format(2, ',')  }}</td>
                        <td>{{ author.procWosTotal ? author.procWosTotal|number_format(2, ',')  }}</td>
                        <td>{{ author.procScopusTotal ? author.procScopusTotal|number_format(2, ',')  }}</td>
                        <td>{{ author.procRiscTotal ? author.procRiscTotal|number_format(2, ',')  }}</td>
                        <td>{{ author.bookTotal ? author.bookTotal|number_format(2, ',')  }}</td>
                        <td>{{ author.patentTotal ? author.patentTotal|number_format(2, ',')  }}</td>
                        <td>{{ author.total ? author.total|number_format(2, ',') : 0 }}</td>
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
            {{ p.k|number_format(2, ',') ~ \"/\" ~ p.countAuthor ~ \"=\" ~ p.dividedK|number_format(2, ',') }} <strong>{{ p.authors }}</strong> - {{ p.title }}. {{ p.year }}
            {% if p.hasTranslatedVersion %}
                 <span style=\"color: orange;\">(Есть перевод:
                    {{ p.translated_version.authors ~ \" \" ~ p.translated_version.title ~ \".\" ~ p.translated_version.year ~ \".\" }}
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
{% endif %}
", "/var/www/ris/plugins/bree7e/crisreport/components/raspilreport/raspil-list-by-departments.htm", "");
    }
}
