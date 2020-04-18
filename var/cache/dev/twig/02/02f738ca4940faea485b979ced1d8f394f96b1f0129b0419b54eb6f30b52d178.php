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

/* SonataMediaBundle:Block:block_gallery_list.html.twig */
class __TwigTemplate_572abc480d69c741bed84dba68ac5cd8ecd5417ed05de4a8503cdbb05af64d27 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block' => [$this, 'block_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new RuntimeError('Variable "sonata_block" does not exist.', 1, $this->source); })()), "templates", [], "any", false, false, false, 1), "block_base", [], "any", false, false, false, 1), "SonataMediaBundle:Block:block_gallery_list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataMediaBundle:Block:block_gallery_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        // line 4
        echo "    <div class=\"panel panel-default ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 4, $this->source); })()), "class", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
        ";
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5))) {
            // line 6
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 8, $this->source); })()), "icon", [], "any", false, false, false, 8)) {
                // line 9
                echo "                        <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 9, $this->source); })()), "icon", [], "any", false, false, false, 9), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 11
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 11, $this->source); })()), "translation_domain", [], "any", false, false, false, 11)) {
                // line 12
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), [], twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 12, $this->source); })()), "translation_domain", [], "any", false, false, false, 12)), "html", null, true);
                echo "
                    ";
            } else {
                // line 14
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
                echo "
                    ";
            }
            // line 16
            echo "                </h4>
            </div>
        ";
        }
        // line 19
        echo "
        <div class=\"panel-body\">
            <div class=\"list-group\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 22, $this->source); })()), "getResults", [], "method", false, false, false, 22));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 23
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 23, $this->source); })()), "mode", [], "any", false, false, false, 23) == "admin") && (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)))) {
                // line 24
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 24, $this->source); })()), "url", [0 => "sonata.media.admin.gallery", 1 => "edit", 2 => ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [], "any", false, false, false, 24), "context" => twig_get_attribute($this->env, $this->source, $context["gallery"], "context", [], "any", false, false, false, 24)]], "method", false, false, false, 24), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["gallery"], "enabled", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "                                <span class=\"label label-success pull-right\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_gallery_enabled", [], "SonataMediaBundle"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 28
                    echo "                                <span class=\"label label-danger pull-right\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_gallery_disabled", [], "SonataMediaBundle"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 30
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", [], "any", false, false, false, 30), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 33
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sonata_media_gallery_view", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", [], "any", false, false, false, 34), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 37
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                    <span class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_galleries_found", [], "SonataMediaBundle"), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>

            ";
        // line 42
        if (((twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 42, $this->source); })()), "mode", [], "any", false, false, false, 42) == "admin") && (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)))) {
            // line 43
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 43, $this->source); })()), "context", [], "any", false, false, false, 43)) {
                // line 44
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 44, $this->source); })()), "url", [0 => "sonata.media.admin.gallery", 1 => "list", 2 => ["context" => twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 44, $this->source); })()), "context", [], "any", false, false, false, 44)]], "method", false, false, false, 44), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_all_galleries", [], "SonataMediaBundle"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 47
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 47, $this->source); })()), "url", [0 => "sonata.media.admin.gallery", 1 => "list"], "method", false, false, false, 47), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_all_galleries", [], "SonataMediaBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 50
            echo "            ";
        }
        // line 51
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_gallery_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 51,  188 => 50,  179 => 47,  170 => 44,  167 => 43,  165 => 42,  161 => 40,  152 => 38,  147 => 37,  141 => 34,  136 => 33,  129 => 30,  123 => 28,  117 => 26,  115 => 25,  110 => 24,  107 => 23,  102 => 22,  97 => 19,  92 => 16,  86 => 14,  80 => 12,  77 => 11,  71 => 9,  69 => 8,  65 => 6,  63 => 5,  58 => 4,  51 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"panel panel-default {{ settings.class }}\">
        {% if settings.title is not empty %}
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    {% if settings.icon %}
                        <i class=\"{{ settings.icon }}\" aria-hidden=\"true\"></i>
                    {% endif %}
                    {% if settings.translation_domain %}
                        {{ settings.title|trans({}, settings.translation_domain) }}
                    {% else %}
                        {{ settings.title }}
                    {% endif %}
                </h4>
            </div>
        {% endif %}

        <div class=\"panel-body\">
            <div class=\"list-group\">
                {% for gallery in pager.getResults() %}
                    {% if settings.mode == 'admin' and sonata_admin is defined %}
                        <a href=\"{{ sonata_admin.url('sonata.media.admin.gallery', 'edit', { 'id': gallery.id, 'context': gallery.context }) }}\" class=\"list-group-item\">
                            {% if gallery.enabled %}
                                <span class=\"label label-success pull-right\">{{ 'label_gallery_enabled'|trans({}, 'SonataMediaBundle') }}</span>
                            {% else %}
                                <span class=\"label label-danger pull-right\">{{ 'label_gallery_disabled'|trans({}, 'SonataMediaBundle') }}</span>
                            {% endif %}
                            {{ gallery.name }}
                        </a>
                    {% else %}
                        <a href=\"{{ url('sonata_media_gallery_view', { 'id': gallery.id }) }}\" class=\"list-group-item\">
                            {{ gallery.name }}
                        </a>
                    {% endif %}
                {% else %}
                    <span class=\"list-group-item\">{{ 'no_galleries_found'|trans({}, 'SonataMediaBundle') }}</span>
                {% endfor %}
            </div>

            {% if settings.mode == 'admin' and sonata_admin is defined %}
                {% if settings.context %}
                    <a href=\"{{ sonata_admin.url('sonata.media.admin.gallery', 'list', {context:settings.context }) }}\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> {{ 'view_all_galleries'|trans({}, 'SonataMediaBundle') }}
                    </a>
                {% else %}
                    <a href=\"{{ sonata_admin.url('sonata.media.admin.gallery', 'list') }}\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> {{ 'view_all_galleries'|trans({}, 'SonataMediaBundle') }}
                    </a>
                {% endif %}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "SonataMediaBundle:Block:block_gallery_list.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/media-bundle/src/Resources/views/Block/block_gallery_list.html.twig");
    }
}
