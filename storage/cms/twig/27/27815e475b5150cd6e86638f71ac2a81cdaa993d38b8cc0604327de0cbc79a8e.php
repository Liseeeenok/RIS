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

/* /var/www/ris/plugins/bree7e/cris/components/publicationsearch/default.htm */
class __TwigTemplate_55ef21dae661b96720cbbf25d1b39fee36c5cb8b88ead21c039a155e6d0a12fc extends \Twig\Template
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
        $context["now"] = twig_date_format_filter($this->env, "now", "Y");
        // line 4
        echo "
<form class=\"ui form\"
    data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onGetPublications\"
    data-request-update=\"'";
        // line 7
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::publication-list': '#result'\">
    <div class=\"fields\">
        <div class=\"field\">
            <label>От года</label>
            <input name=\"fromYear\" type=\"number\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (($context["now"] ?? null) - 1), "html", null, true);
        echo "\" min=\"";
        echo twig_escape_filter($this->env, (($context["now"] ?? null) - 50), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, (($context["now"] ?? null) + 5), "html", null, true);
        echo "\">
        </div>
        <div class=\"field\">
            <label>До года</label>
            <input name=\"toYear\" type=\"number\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["now"] ?? null), "html", null, true);
        echo "\" min=\"";
        echo twig_escape_filter($this->env, (($context["now"] ?? null) - 50), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, (($context["now"] ?? null) + 5), "html", null, true);
        echo "\">
        </div>
    </div>
    <div class=\"field\">
        <label>Индексация</label>
        <select name=\"index\" class=\"ui search dropdown\">
            <option value=\"all\">Все типы</option>
            <option value=\"wos\">Web of Science</option>
            <option value=\"scopus\">Scopus</option>
            <option value=\"risc\">РИНЦ</option>
        </select> 
    </div>      
    <div class=\"field\">
        <label>Проект</label>
        <select name=\"project\" class=\"ui search dropdown\">
            <option value=\"all\">Все проекты</option>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "projects", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 32
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "leader", [], "any", false, true, false, 32), "surname", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "leader", [], "any", false, true, false, 32), "surname", [], "any", false, false, false, 32), "Без руководителя")) : ("Без руководителя")), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "start_year", [], "any", false, false, false, 32), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select> 
    </div>
    <div class=\"field\">
        <label>Тип публикации</label>
        <select name=\"type\" class=\"ui search dropdown\">
            <option value=\"0\">Все типы</option>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "types", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 41
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </select> 
    </div>      
    <div class=\"field\" id=\"js-department\">
        <label>Подразделение</label>
        <select name=\"department\" class=\"ui search dropdown\">
            <option value=\"0\">Все Подразделения</option>
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 50
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </select>        
    </div>  
    <div class=\"field\">
        <label>Сотрудник</label>
        <select name=\"author\" class=\"ui search dropdown\">
            <option value=\"0\">Все сотрудники</option>
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "authors", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 59
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "surname", [], "any", false, false, false, 59), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "middlename", [], "any", false, false, false, 59), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </select> 
        <p>Если указан сотрудник, то подразделение не учитывается</p>      
    </div>  

    <div class=\"field\">
        <button type=\"submit\" class=\"ui primary button\" data-attach-loading>
            Сформировать
        </button> 
        <div id=\"reset-fields\" class=\"ui button\">
            Очистить выбор
        </div>
    </div>      
</form>
<br>
<div id=\"result\">
    <!-- Сюда помещаяется паршл publication-list   -->
</div>

";
        // line 79
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 80
        echo "
    <script>
        \$(document).ready(function() {
            \$('.ui.dropdown').dropdown();

            \$('select[name=\"author\"]')
                .dropdown('setting', 'onChange', function(newValue){
                    if (newValue == 0) {
                        \$('#js-department').removeClass('disabled');
                    } else {
                        \$('#js-department').addClass('disabled');
                    }
                }); 

            \$('#reset-fields').on('click', function() {
                \$('.ui.form .ui.dropdown').dropdown('restore defaults');
            })
            ;            
        });
    </script>

";
        // line 79
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/cris/components/publicationsearch/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 79,  204 => 80,  202 => 79,  182 => 61,  167 => 59,  163 => 58,  155 => 52,  144 => 50,  140 => 49,  132 => 43,  121 => 41,  117 => 40,  109 => 34,  94 => 32,  90 => 31,  67 => 15,  56 => 11,  49 => 7,  45 => 6,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set departments = __SELF__.departments %}
{% set now = \"now\"|date(\"Y\") %}

<form class=\"ui form\"
    data-request=\"{{ __SELF__ }}::onGetPublications\"
    data-request-update=\"'{{ __SELF__ }}::publication-list': '#result'\">
    <div class=\"fields\">
        <div class=\"field\">
            <label>От года</label>
            <input name=\"fromYear\" type=\"number\" value=\"{{ now - 1 }}\" min=\"{{ now - 50 }}\" max=\"{{ now + 5 }}\">
        </div>
        <div class=\"field\">
            <label>До года</label>
            <input name=\"toYear\" type=\"number\" value=\"{{ now }}\" min=\"{{ now - 50 }}\" max=\"{{ now + 5 }}\">
        </div>
    </div>
    <div class=\"field\">
        <label>Индексация</label>
        <select name=\"index\" class=\"ui search dropdown\">
            <option value=\"all\">Все типы</option>
            <option value=\"wos\">Web of Science</option>
            <option value=\"scopus\">Scopus</option>
            <option value=\"risc\">РИНЦ</option>
        </select> 
    </div>      
    <div class=\"field\">
        <label>Проект</label>
        <select name=\"project\" class=\"ui search dropdown\">
            <option value=\"all\">Все проекты</option>
            {% for project in __SELF__.projects %}
                <option value=\"{{ project.id }}\">{{ project.leader.surname|default('Без руководителя') }} / {{ project.name }} ({{ project.start_year }})</option>
            {% endfor %}
        </select> 
    </div>
    <div class=\"field\">
        <label>Тип публикации</label>
        <select name=\"type\" class=\"ui search dropdown\">
            <option value=\"0\">Все типы</option>
            {% for type in __SELF__.types %}
                <option value=\"{{ type.id }}\">{{ type.name }}</option>
            {% endfor %}
        </select> 
    </div>      
    <div class=\"field\" id=\"js-department\">
        <label>Подразделение</label>
        <select name=\"department\" class=\"ui search dropdown\">
            <option value=\"0\">Все Подразделения</option>
            {% for department in departments %}
                <option value=\"{{ department.id }}\">{{ department.name }}</option>
            {% endfor %}
        </select>        
    </div>  
    <div class=\"field\">
        <label>Сотрудник</label>
        <select name=\"author\" class=\"ui search dropdown\">
            <option value=\"0\">Все сотрудники</option>
            {% for author in __SELF__.authors %}
                <option value=\"{{ author.id }}\">{{ author.surname }} {{ author.name }} {{ author.middlename }}</option>
            {% endfor %}
        </select> 
        <p>Если указан сотрудник, то подразделение не учитывается</p>      
    </div>  

    <div class=\"field\">
        <button type=\"submit\" class=\"ui primary button\" data-attach-loading>
            Сформировать
        </button> 
        <div id=\"reset-fields\" class=\"ui button\">
            Очистить выбор
        </div>
    </div>      
</form>
<br>
<div id=\"result\">
    <!-- Сюда помещаяется паршл publication-list   -->
</div>

{% put scripts %}

    <script>
        \$(document).ready(function() {
            \$('.ui.dropdown').dropdown();

            \$('select[name=\"author\"]')
                .dropdown('setting', 'onChange', function(newValue){
                    if (newValue == 0) {
                        \$('#js-department').removeClass('disabled');
                    } else {
                        \$('#js-department').addClass('disabled');
                    }
                }); 

            \$('#reset-fields').on('click', function() {
                \$('.ui.form .ui.dropdown').dropdown('restore defaults');
            })
            ;            
        });
    </script>

{% endput %}
", "/var/www/ris/plugins/bree7e/cris/components/publicationsearch/default.htm", "");
    }
}
