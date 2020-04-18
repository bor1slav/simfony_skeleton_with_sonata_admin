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

/* SonataAdminBundle:CRUD:list_html.html.twig */
class __TwigTemplate_73c624468d01a33f8565f6f86b0446a884eb9e7a6f3a40213d91209c197c52d4 extends \Twig\Template
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
        return $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("base_list_field", twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 1, $this->source); })()), "code", [], "any", false, false, false, 1)), "SonataAdminBundle:CRUD:list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
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
                    @trigger_error("The \"truncate.preserve\" option is deprecated since sonata-project/admin-bundle 3.x, to be removed in 4.0. Use \"truncate.cut\" instead."." (\"SonataAdminBundle:CRUD:list_html.html.twig\" at line 11).", E_USER_DEPRECATED);
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
                    @trigger_error("The \"truncate.separator\" option is deprecated since sonata-project/admin-bundle 3.x, to be removed in 4.0. Use \"truncate.ellipsis\" instead."." (\"SonataAdminBundle:CRUD:list_html.html.twig\" at line 15).", E_USER_DEPRECATED);
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
        return "SonataAdminBundle:CRUD:list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  104 => 23,  101 => 21,  99 => 20,  95 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  66 => 8,  64 => 7,  60 => 5,  58 => 4,  51 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends get_admin_template('base_list_field', admin.code) %}

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
", "SonataAdminBundle:CRUD:list_html.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_html.html.twig");
    }
}
