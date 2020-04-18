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

/* SonataAdminBundle:CRUD:show_html.html.twig */
class __TwigTemplate_88d295e254cab593982f9cfb9d28904f8e126ba3267bd443b4c09bd35ad396aa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_html.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 7), "truncate", [], "any", true, true, false, 7)) {
                // line 8
                $context["truncate"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 8, $this->source); })()), "options", [], "any", false, false, false, 8), "truncate", [], "any", false, false, false, 8);
                // line 9
                echo "            ";
                $context["length"] = ((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "length", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "length", [], "any", false, false, false, 9), 30)) : (30));
                // line 10
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "preserve", [], "any", true, true, false, 10)) {
                    // line 11
                    echo "                ";
                    @trigger_error("The \"truncate.preserve\" option is deprecated since sonata-project/admin-bundle 3.x, to be removed in 4.0. Use \"truncate.cut\" instead."." (\"SonataAdminBundle:CRUD:show_html.html.twig\" at line 11).", E_USER_DEPRECATED);
                    // line 12
                    echo "            ";
                }
                // line 13
                echo "            ";
                $context["cut"] = ((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "cut", [], "any", true, true, false, 13)) ? (twig_get_attribute($this->env, $this->source, (isset($context["truncate"]) || array_key_exists("truncate", $context) ? $context["truncate"] : (function () { throw new RuntimeError('Variable "truncate" does not exist.', 13, $this->source); })()), "cut", [], "any", false, false, false, 13)) : (((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "preserve", [], "any", true, true, false, 13)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["truncate"]) || array_key_exists("truncate", $context) ? $context["truncate"] : (function () { throw new RuntimeError('Variable "truncate" does not exist.', 13, $this->source); })()), "preserve", [], "any", false, false, false, 13) != true)) : (true))));
                // line 14
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "separator", [], "any", true, true, false, 14)) {
                    // line 15
                    echo "                ";
                    @trigger_error("The \"truncate.separator\" option is deprecated since sonata-project/admin-bundle 3.x, to be removed in 4.0. Use \"truncate.ellipsis\" instead."." (\"SonataAdminBundle:CRUD:show_html.html.twig\" at line 15).", E_USER_DEPRECATED);
                    // line 16
                    echo "            ";
                }
                // line 17
                echo "            ";
                $context["ellipsis"] = ((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "ellipsis", [], "any", true, true, false, 17)) ? (twig_get_attribute($this->env, $this->source, (isset($context["truncate"]) || array_key_exists("truncate", $context) ? $context["truncate"] : (function () { throw new RuntimeError('Variable "truncate" does not exist.', 17, $this->source); })()), "ellipsis", [], "any", false, false, false, 17)) : (((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "separator", [], "any", true, true, false, 17)) ? (twig_get_attribute($this->env, $this->source, (isset($context["truncate"]) || array_key_exists("truncate", $context) ? $context["truncate"] : (function () { throw new RuntimeError('Variable "truncate" does not exist.', 17, $this->source); })()), "separator", [], "any", false, false, false, 17)) : ("..."))));
                // line 18
                echo "            ";
                echo $this->extensions['Sonata\AdminBundle\Twig\Extension\StringExtension']->legacyTruncteWithUnicodeString(strip_tags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })())), (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 18, $this->source); })()), ((isset($context["cut"]) || array_key_exists("cut", $context) ? $context["cut"] : (function () { throw new RuntimeError('Variable "cut" does not exist.', 18, $this->source); })()) == false), (isset($context["ellipsis"]) || array_key_exists("ellipsis", $context) ? $context["ellipsis"] : (function () { throw new RuntimeError('Variable "ellipsis" does not exist.', 18, $this->source); })()));
            } else {
                // line 20
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 20), "strip", [], "any", true, true, false, 20)) {
                    // line 21
                    $context["value"] = strip_tags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 21, $this->source); })()));
                }
                // line 23
                echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 23, $this->source); })());
                echo "
        ";
            }
            // line 25
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 25,  105 => 23,  102 => 21,  100 => 20,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  69 => 9,  67 => 8,  65 => 7,  61 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SonataAdmin/CRUD/base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% if truncate.preserve is defined %}
                {% deprecated 'The \"truncate.preserve\" option is deprecated since sonata-project/admin-bundle 3.x, to be removed in 4.0. Use \"truncate.cut\" instead.' %}
            {% endif %}
            {% set cut = truncate.cut is defined ? truncate.cut : (truncate.preserve is defined ? truncate.preserve != true : true) %}
            {% if truncate.separator is defined %}
                {% deprecated 'The \"truncate.separator\" option is deprecated since sonata-project/admin-bundle 3.x, to be removed in 4.0. Use \"truncate.ellipsis\" instead.' %}
            {% endif %}
            {% set ellipsis = truncate.ellipsis is defined ? truncate.ellipsis : (truncate.separator is defined ? truncate.separator : '...') %}
            {{ value|striptags|sonata_truncate(length, cut == false, ellipsis)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_html.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_html.html.twig");
    }
}
