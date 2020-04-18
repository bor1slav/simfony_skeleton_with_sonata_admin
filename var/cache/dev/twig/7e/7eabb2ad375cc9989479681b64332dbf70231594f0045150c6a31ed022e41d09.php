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

/* SonataMediaBundle:MediaAdmin:inner_row_media.html.twig */
class __TwigTemplate_4a25af4e40dc69bf892ae4c51571c6bc0e2b0f4cb21aedbe608bbd8d2e509fdb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'row' => [$this, 'block_row'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:inner_row_media.html.twig"));

        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig", "SonataMediaBundle:MediaAdmin:inner_row_media.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row"));

        // line 15
        echo "
    <div class=\"col-sm-12\">
        <div class=\"pull-left\">
            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 18, $this->source); })()), "isGranted", [0 => "EDIT", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 18, $this->source); })())], "method", false, false, false, 18) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 18, $this->source); })()), "hasRoute", [0 => "edit"], "method", false, false, false, 18))) {
            // line 19
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 19, $this->source); })()), "generateUrl", [0 => "edit", 1 => ["id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 19, $this->source); })()))]], "method", false, false, false, 19), "html", null, true);
            echo "\" style=\"float: left; margin-right: 6px;\">";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 19, $this->source); })()), "admin", ["width" => 90]);
            echo "</a>
            ";
        } else {
            // line 21
            echo "                ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 21, $this->source); })()), "admin", ["height" => 90]);
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </div>
        <span class=\"badge pull-right\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 24, $this->source); })()), "providerName", [], "any", false, false, false, 24), [], "SonataMediaBundle"), "html", null, true);
        echo "</span>
        ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 25, $this->source); })()), "isGranted", [0 => "EDIT", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 25, $this->source); })())], "method", false, false, false, 25) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 25, $this->source); })()), "hasRoute", [0 => "edit"], "method", false, false, false, 25))) {
            // line 26
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "generateUrl", [0 => "edit", 1 => ["id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 26, $this->source); })()))]], "method", false, false, false, 26), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</strong></a>
        ";
        } else {
            // line 28
            echo "            <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</strong>
        ";
        }
        // line 30
        echo "

        <br />
        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 33, $this->source); })()), "width", [], "any", false, false, false, 33)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 33, $this->source); })()), "width", [], "any", false, false, false, 33), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 33, $this->source); })()), "height", [], "any", false, false, false, 33)) {
                echo "x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 33, $this->source); })()), "height", [], "any", false, false, false, 33), "html", null, true);
            }
            echo "px";
        }
        // line 34
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 34, $this->source); })()), "length", [], "any", false, false, false, 34) > 0)) {
            // line 35
            echo "            (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 35, $this->source); })()), "length", [], "any", false, false, false, 35), "html", null, true);
            echo ")
        ";
        }
        // line 37
        echo "
        <br />

        ";
        // line 40
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 40, $this->source); })()), "authorname", [], "any", false, false, false, 40))) {
            // line 41
            echo "           ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 41, $this->source); })()), "authorname", [], "any", false, false, false, 41), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "
        ";
        // line 44
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 44, $this->source); })()), "copyright", [], "any", false, false, false, 44)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 44, $this->source); })()), "authorname", [], "any", false, false, false, 44)))) {
            // line 45
            echo "            ~
        ";
        }
        // line 47
        echo "
        ";
        // line 48
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 48, $this->source); })()), "copyright", [], "any", false, false, false, 48))) {
            // line 49
            echo "            &copy; ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 49, $this->source); })()), "copyright", [], "any", false, false, false, 49), "html", null, true);
            echo "
        ";
        }
        // line 51
        echo "
        ";
        // line 53
        echo "        ";
        // line 54
        echo "        ";
        // line 55
        echo "            ";
        // line 56
        echo "        ";
        // line 57
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:inner_row_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 57,  169 => 56,  167 => 55,  165 => 54,  163 => 53,  160 => 51,  154 => 49,  152 => 48,  149 => 47,  145 => 45,  143 => 44,  140 => 43,  134 => 41,  132 => 40,  127 => 37,  121 => 35,  118 => 34,  108 => 33,  103 => 30,  97 => 28,  89 => 26,  87 => 25,  83 => 24,  80 => 23,  77 => 22,  74 => 21,  66 => 19,  64 => 18,  59 => 15,  52 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig' %}

{% block row %}

    <div class=\"col-sm-12\">
        <div class=\"pull-left\">
            {% if admin.isGranted('EDIT', object) and admin.hasRoute('edit') %}
                <a href=\"{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid }) }}\" style=\"float: left; margin-right: 6px;\">{% thumbnail object, 'admin' with {'width': 90} %}</a>
            {% else %}
                {% thumbnail object, 'admin' with {'height': 90} %}
            {% endif %}
        </div>
        <span class=\"badge pull-right\">{{ object.providerName|trans({}, 'SonataMediaBundle') }}</span>
        {% if admin.isGranted('EDIT', object) and admin.hasRoute('edit') %}
            <a href=\"{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid }) }}\"><strong>{{ object.name }}</strong></a>
        {% else %}
            <strong>{{ object.name }}</strong>
        {% endif %}


        <br />
        {% if object.width %} {{ object.width }}{% if object.height %}x{{ object.height }}{% endif %}px{% endif %}
        {% if object.length > 0 %}
            ({{ object.length }})
        {% endif %}

        <br />

        {% if object.authorname is not empty %}
           {{ object.authorname }}
        {% endif %}

        {% if object.copyright is not empty and object.authorname is not empty %}
            ~
        {% endif %}

        {% if object.copyright is not empty %}
            &copy; {{ object.copyright }}
        {% endif  %}

        {#{% set enabled_field_description = admin.getListFieldDescription('enabled') %}#}
        {#{% set url = path('sonata_admin_set_object_field_value', { 'context': 'list', 'field': enabled_field_description.name, 'objectId': admin.id(object), 'code': admin.code(object) })  %}#}
        {#<span {% block field_span_attributes %}class=\"x-editable\" data-type=\"{{ enabled_field_description.type|sonata_xeditable_type }}\" data-value=\"{{ object.enabled }}\" data-title=\"{{ enabled_field_description.label|trans({}, enabled_field_description.translationDomain) }}\" data-pk=\"{{ admin.id(object) }}\" data-url=\"{{ url }}\" {% endblock %}>#}
            {#{{ block('field') }}#}
        {#</span>#}

    </div>
{% endblock %}
", "SonataMediaBundle:MediaAdmin:inner_row_media.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/media-bundle/src/Resources/views/MediaAdmin/inner_row_media.html.twig");
    }
}
