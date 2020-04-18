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

/* SonataAdminBundle:CRUD:display_date.html.twig */
class __TwigTemplate_62ffd93974c1247fb1db50b33551da4e69a9c5c17724d2b121890027732dd07a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:display_date.html.twig"));

        // line 12
        ob_start();
        // line 13
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "&nbsp;";
        } else {
            // line 16
            $context["options"] = twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 16, $this->source); })()), "options", [], "any", false, false, false, 16);
            // line 17
            echo "        <time datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()), "Y-m-d", "UTC"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()), "Y-m-d", "UTC"), "html", null, true);
            echo "\">
            ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "format", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "format", [], "any", false, false, false, 18), "F j, Y")) : ("F j, Y")), ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "timezone", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "timezone", [], "any", false, false, false, 18), null)) : (null))), "html", null, true);
            echo "
        </time>";
        }
        $___internal_46bbc888e878034598cfd82561f5efd43c03f6f03b58ec6d68149d9531ae87dc_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_46bbc888e878034598cfd82561f5efd43c03f6f03b58ec6d68149d9531ae87dc_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:display_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  56 => 18,  49 => 17,  47 => 16,  44 => 14,  42 => 13,  40 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {% set options = field_description.options %}
        <time datetime=\"{{ value|date('Y-m-d', 'UTC') }}\" title=\"{{ value|date('Y-m-d', 'UTC') }}\">
            {{ value|date(options.format|default('F j, Y'), options.timezone|default(null)) }}
        </time>
    {%- endif -%}
{% endapply -%}
", "SonataAdminBundle:CRUD:display_date.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_date.html.twig");
    }
}
