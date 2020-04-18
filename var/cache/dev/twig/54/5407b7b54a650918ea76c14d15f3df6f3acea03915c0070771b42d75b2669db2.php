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

/* SonataMediaBundle:Form:media_widgets.html.twig */
class __TwigTemplate_75a879a52b26db1a58f139048428181b0bdb4b828129107c690a816e980afbb8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sonata_media_type_widget' => [$this, 'block_sonata_media_type_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataMediaBundle:Form:media_widgets.html.twig"));

        // line 1
        $this->displayBlock('sonata_media_type_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_sonata_media_type_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_media_type_widget"));

        // line 2
        echo "    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            ";
        // line 4
        if (( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })()), "providerReference", [], "any", false, false, false, 4))) {
            // line 5
            echo "                ";
            if ((((isset($context["sonata_admin_enabled"]) || array_key_exists("sonata_admin_enabled", $context)) && (isset($context["sonata_admin_enabled"]) || array_key_exists("sonata_admin_enabled", $context) ? $context["sonata_admin_enabled"] : (function () { throw new RuntimeError('Variable "sonata_admin_enabled" does not exist.', 5, $this->source); })())) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 5, $this->source); })()), "admin", [], "any", false, false, false, 5) === false))) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 6, $this->source); })()), "admin", [], "any", false, false, false, 6), "getConfigurationPool", [], "method", false, false, false, 6), "adminByAdminCode", [0 => "sonata.media.admin.media"], "method", false, false, false, 6), "generateObjectUrl", [0 => "edit", 1 => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 6, $this->source); })())], "method", false, false, false, 6), "html", null, true);
                echo "\">
                        <strong>";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
                echo "</strong>
                    </a>
                ";
            } else {
                // line 10
                echo "                    <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
                echo "</strong>
                ";
            }
            // line 12
            echo "            ";
        } else {
            // line 13
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_linked_media", [], "SonataMediaBundle"), "html", null, true);
            echo "</strong>
            ";
        }
        // line 15
        echo "        </div>

        <div class=\"col-md-3 pull-left\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("widget_headline_information", [], "SonataMediaBundle"), "html", null, true);
        echo "</strong></div>
        <div class=\"col-md-2 pull-left\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_media", [], "SonataMediaBundle"), "html", null, true);
        echo "</strong></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            ";
        // line 22
        if (( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })()), "providerReference", [], "any", false, false, false, 22))) {
            // line 23
            echo "                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    ";
            // line 24
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()), "admin", ["class" => "img-polaroid media-object"]);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sonatamedia/grey.png"), "html", null, true);
            echo "\" class=\"img-polaroid media-object\" style=\"width: 85px; height: 85px\"/>
                </div>
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"col-md-3 pull-left\">
            ";
        // line 33
        if (( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 33, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 33, $this->source); })()), "providerReference", [], "any", false, false, false, 33))) {
            // line 34
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("widget_label_type", [], "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })()), "providerName", [], "any", false, false, false, 34), [], "SonataMediaBundle"), "html", null, true);
            echo "</span>
                <br />
                <strong>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("widget_label_context", [], "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 36, $this->source); })()), "context", [], "any", false, false, false, 36), [], "SonataMediaBundle"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 38
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("widget_label_type", [], "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "provider", [], "array", false, false, false, 38), [], "SonataMediaBundle"), "html", null, true);
            echo "</span>
                <br />
                <strong>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("widget_label_context", [], "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "vars", [], "any", false, false, false, 40), "context", [], "array", false, false, false, 40), [], "SonataMediaBundle"), "html", null, true);
            echo "</span>
            ";
        }
        // line 42
        echo "        </div>
        <div class=\"col-md-2 pull-left\">
            ";
        // line 44
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Form:media_widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 44,  160 => 42,  153 => 40,  145 => 38,  138 => 36,  130 => 34,  128 => 33,  124 => 31,  118 => 28,  115 => 27,  111 => 25,  109 => 24,  106 => 23,  104 => 22,  97 => 18,  93 => 17,  89 => 15,  83 => 13,  80 => 12,  74 => 10,  68 => 7,  63 => 6,  60 => 5,  58 => 4,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block sonata_media_type_widget %}
    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            {% if value is not empty and value.providerReference %}
                {% if sonata_admin_enabled is defined and sonata_admin_enabled and sonata_admin.admin is not same as(false) %}
                    <a href=\"{{ sonata_admin.admin.getConfigurationPool().adminByAdminCode('sonata.media.admin.media').generateObjectUrl('edit', value) }}\">
                        <strong>{{ value.name }}</strong>
                    </a>
                {% else %}
                    <strong>{{ value.name }}</strong>
                {% endif %}
            {% else %}
                <strong>{{ 'no_linked_media'|trans({}, 'SonataMediaBundle') }}</strong>
            {% endif %}
        </div>

        <div class=\"col-md-3 pull-left\"><strong>{{ 'widget_headline_information'|trans({}, 'SonataMediaBundle') }}</strong></div>
        <div class=\"col-md-2 pull-left\"><strong>{{ 'link_media'|trans({}, 'SonataMediaBundle') }}</strong></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            {% if value is not empty and value.providerReference %}
                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    {% thumbnail value, 'admin' with {'class': 'img-polaroid media-object'} %}
                </div>
            {% else %}
                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    <img src=\"{{ asset('bundles/sonatamedia/grey.png') }}\" class=\"img-polaroid media-object\" style=\"width: 85px; height: 85px\"/>
                </div>
            {% endif %}
        </div>
        <div class=\"col-md-3 pull-left\">
            {% if value is not empty and value.providerReference %}
                <strong>{{ 'widget_label_type'|trans({}, 'SonataMediaBundle') }}:</strong> <span type=\"label\">{{ value.providerName|trans({}, 'SonataMediaBundle') }}</span>
                <br />
                <strong>{{ 'widget_label_context'|trans({}, 'SonataMediaBundle') }}:</strong> <span type=\"label\">{{ value.context|trans({}, 'SonataMediaBundle') }}</span>
            {% else %}
                <strong>{{ 'widget_label_type'|trans({}, 'SonataMediaBundle') }}:</strong> <span type=\"label\">{{ form.vars['provider']|trans({}, 'SonataMediaBundle') }}</span>
                <br />
                <strong>{{ 'widget_label_context'|trans({}, 'SonataMediaBundle') }}:</strong> <span type=\"label\">{{ form.vars['context']|trans({}, 'SonataMediaBundle') }}</span>
            {% endif %}
        </div>
        <div class=\"col-md-2 pull-left\">
            {{ block('form_widget') }}
        </div>
    </div>
{% endblock sonata_media_type_widget %}
", "SonataMediaBundle:Form:media_widgets.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/media-bundle/src/Resources/views/Form/media_widgets.html.twig");
    }
}
