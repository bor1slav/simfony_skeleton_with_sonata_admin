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

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_d1150adcdd4e6a05dc3e6c51a3967069787a4dc08dcce353aba60b092c0c0e2d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'list_table' => [$this, 'block_list_table'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:list.html.twig"));

        // line 14
        $macros["tree"] = $this->macros["tree"] = $this;
        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_list.html.twig", "SonataMediaBundle:MediaAdmin:list.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_list_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_table"));

        // line 41
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "values", [], "any", false, true, false, 41), "category", [], "array", false, true, false, 41), "value", [], "array", true, true, false, 41)) {
            // line 42
            echo "        <div class=\"col-xs-6 col-md-3\">
            ";
            // line 43
            echo twig_call_macro($macros["tree"], "macro_navigate_child", [[0 => (isset($context["root_category"]) || array_key_exists("root_category", $context) ? $context["root_category"] : (function () { throw new RuntimeError('Variable "root_category" does not exist.', 43, $this->source); })())], (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 43, $this->source); })()), true, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 43, $this->source); })()), "values", [], "any", false, false, false, 43), "category", [], "array", false, false, false, 43), "value", [], "array", false, false, false, 43), 1], 43, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"col-xs-12 col-md-9 no-padding\">
            ";
            // line 46
            $this->displayParentBlock("list_table", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 49
            echo "        ";
            $this->displayParentBlock("list_table", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function macro_navigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__current_category_id__ = null, $__depth__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "current_category_id" => $__current_category_id__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "navigate_child"));

            // line 17
            echo "    ";
            $macros["tree"] = $this;
            // line 18
            echo "
    ";
            // line 19
            if (((isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 19, $this->source); })()) && (twig_length_filter($this->env, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 19, $this->source); })())) == 0))) {
                // line 20
                echo "        <div>
            <p class=\"bg-warning\">";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("warning_no_category", [], twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 21, $this->source); })()), "translationdomain", [], "any", false, false, false, 21)), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            // line 24
            echo "    <ul";
            if ((isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 24, $this->source); })())) {
                echo " class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"";
            }
            echo ">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 25, $this->source); })()), function ($__element__) use ($context, $macros) { $context["element"] = $__element__; return  !(null === $context["element"]); }));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                echo "            <li>
                <div class=\"sonata-tree__item";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 27) == (isset($context["current_category_id"]) || array_key_exists("current_category_id", $context) ? $context["current_category_id"] : (function () { throw new RuntimeError('Variable "current_category_id" does not exist.', 27, $this->source); })()))) {
                    echo " is-active";
                }
                echo "\"";
                if (((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new RuntimeError('Variable "depth" does not exist.', 27, $this->source); })()) < 2)) {
                    echo " data-treeview-toggled";
                }
                echo ">
                    ";
                // line 28
                if ((twig_get_attribute($this->env, $this->source, $context["element"], "parent", [], "any", false, false, false, 28) || (isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 28, $this->source); })()))) {
                    echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                }
                // line 29
                echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "query", [], "any", false, false, false, 29), "all", [], "any", false, false, false, 29), ["category" => twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 29)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</a>
                </div>

                ";
                // line 32
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "children", [], "any", false, false, false, 32))) {
                    // line 33
                    echo "                    ";
                    echo twig_call_macro($macros["tree"], "macro_navigate_child", [twig_get_attribute($this->env, $this->source, $context["element"], "children", [], "any", false, false, false, 33), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 33, $this->source); })()), false, (isset($context["current_category_id"]) || array_key_exists("current_category_id", $context) ? $context["current_category_id"] : (function () { throw new RuntimeError('Variable "current_category_id" does not exist.', 33, $this->source); })()), ((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new RuntimeError('Variable "depth" does not exist.', 33, $this->source); })()) + 1)], 33, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 35
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 37,  173 => 35,  167 => 33,  165 => 32,  156 => 29,  152 => 28,  142 => 27,  139 => 26,  135 => 25,  128 => 24,  122 => 21,  119 => 20,  117 => 19,  114 => 18,  111 => 17,  91 => 16,  80 => 49,  74 => 46,  68 => 43,  65 => 42,  62 => 41,  55 => 40,  47 => 12,  45 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_list.html.twig' %}

{% import _self as tree %}

{% macro navigate_child(collection, admin, root, current_category_id, depth) %}
    {% import _self as tree %}

    {% if root and collection|length == 0 %}
        <div>
            <p class=\"bg-warning\">{{ 'warning_no_category'|trans({}, admin.translationdomain) }}</p>
        </div>
    {% endif %}
    <ul{% if root %} class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"{% endif %}>
        {% for element in collection|filter(element => element is not null) %}
            <li>
                <div class=\"sonata-tree__item{% if element.id == current_category_id %} is-active{% endif %}\"{% if depth < 2 %} data-treeview-toggled{% endif %}>
                    {% if element.parent or root %}<i class=\"fa fa-caret-right\" data-treeview-toggler></i>{% endif %}
                    <a class=\"sonata-tree__item__edit\" href=\"{{ url(app.request.attributes.get('_route'), app.request.query.all|merge({category: element.id})) }}\">{{ element.name }}</a>
                </div>

                {% if element.children|length %}
                    {{ tree.navigate_child(element.children, admin, false, current_category_id, depth + 1) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endmacro %}

{% block list_table %}
    {% if datagrid.values['category']['value'] is defined %}
        <div class=\"col-xs-6 col-md-3\">
            {{ tree.navigate_child([root_category], admin, true, datagrid.values['category']['value'], 1) }}
        </div>
        <div class=\"col-xs-12 col-md-9 no-padding\">
            {{ parent() }}
        </div>
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}
", "SonataMediaBundle:MediaAdmin:list.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/media-bundle/src/Resources/views/MediaAdmin/list.html.twig");
    }
}
