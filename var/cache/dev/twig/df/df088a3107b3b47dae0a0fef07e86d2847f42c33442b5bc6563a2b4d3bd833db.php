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

/* SonataAdminBundle:CRUD:display_boolean.html.twig */
class __TwigTemplate_483cad4e330febfd1bf0f5ac3059c8ecc1a00bd7cd5ecf5009f5dda9c914fcc4 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:display_boolean.html.twig"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "        ";
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_type_yes", [], "SonataAdminBundle");
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_type_no", [], "SonataAdminBundle");
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 19), "inverse", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 19), "inverse", [], "any", false, false, false, 19), false)) : (false))) ? ( !(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })())) : ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })())))) {
            // line 20
            echo "        ";
            $context["class"] = "label-success";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            $context["class"] = "label-danger";
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <span class=\"label ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</span>
";
        $___internal_16f86851059170f9df37d838f0bbf58beafaea0d1b4fbf4518c8d923a9da5811_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_16f86851059170f9df37d838f0bbf58beafaea0d1b4fbf4518c8d923a9da5811_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:display_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  77 => 25,  74 => 24,  71 => 23,  68 => 22,  65 => 21,  62 => 20,  60 => 19,  57 => 18,  54 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{%- apply spaceless %}
    {% if value %}
        {% set text = 'label_type_yes'|trans({}, 'SonataAdminBundle') %}
    {% else %}
        {% set text = 'label_type_no'|trans({}, 'SonataAdminBundle') %}
    {% endif %}

    {% if field_description.options.inverse|default(false) ? not value : value %}
        {% set class = 'label-success' %}
    {% else %}
        {% set class = 'label-danger' %}
    {% endif %}

    <span class=\"label {{ class }}\">{{ text }}</span>
{% endapply -%}
", "SonataAdminBundle:CRUD:display_boolean.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_boolean.html.twig");
    }
}
