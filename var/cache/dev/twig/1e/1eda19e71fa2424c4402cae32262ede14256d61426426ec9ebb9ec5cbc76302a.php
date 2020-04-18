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

/* SonataMediaBundle:GalleryAdmin:list.html.twig */
class __TwigTemplate_5b755784c78ff4035fbe29b1fedcb41e376d15c18c5b26bc79deaa1b7b51ed59 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'preview' => [$this, 'block_preview'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataMediaBundle:GalleryAdmin:list.html.twig"));

        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_list.html.twig", "SonataMediaBundle:GalleryAdmin:list.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview"));

        // line 15
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <h1 class=\"box-title\">
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.select_context", [], "SonataMediaBundle"), "html", null, true);
        echo "
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <strong class=\"text-info\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["persistent_parameters"]) || array_key_exists("persistent_parameters", $context) ? $context["persistent_parameters"] : (function () { throw new RuntimeError('Variable "persistent_parameters" does not exist.', 21, $this->source); })()), "context", [], "any", false, false, false, 21), [], "SonataMediaBundle"), "html", null, true);
        echo "</strong> <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["media_pool"]) || array_key_exists("media_pool", $context) ? $context["media_pool"] : (function () { throw new RuntimeError('Variable "media_pool" does not exist.', 24, $this->source); })()), "contexts", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 25
            echo "                            <li>
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "generateUrl", [0 => "list", 1 => ["context" => $context["name"]]], "method", false, false, false, 26), "html", null, true);
            echo "\">
                                    ";
            // line 27
            if (($context["name"] == twig_get_attribute($this->env, $this->source, (isset($context["persistent_parameters"]) || array_key_exists("persistent_parameters", $context) ? $context["persistent_parameters"] : (function () { throw new RuntimeError('Variable "persistent_parameters" does not exist.', 27, $this->source); })()), "context", [], "any", false, false, false, 27))) {
                // line 28
                echo "                                        <span class=\"pull-right\">
                                            <i class=\"fa fa-check\"></i>
                                        </span>
                                    ";
            }
            // line 32
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["name"], [], "SonataMediaBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </ul>
                </div>
            </h1>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:GalleryAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  95 => 32,  89 => 28,  87 => 27,  83 => 26,  80 => 25,  76 => 24,  70 => 21,  64 => 18,  59 => 15,  52 => 14,  35 => 12,);
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

{% block preview %}
    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <h1 class=\"box-title\">
                {{ \"label.select_context\"|trans({}, 'SonataMediaBundle') }}
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <strong class=\"text-info\">{{ persistent_parameters.context|trans({}, 'SonataMediaBundle') }}</strong> <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        {% for name, context in media_pool.contexts %}
                            <li>
                                <a href=\"{{ admin.generateUrl('list', {'context' : name }) }}\">
                                    {% if name == persistent_parameters.context %}
                                        <span class=\"pull-right\">
                                            <i class=\"fa fa-check\"></i>
                                        </span>
                                    {% endif %}
                                    {{ name|trans({}, 'SonataMediaBundle') }}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </h1>
        </div>
    </div>
{% endblock %}
", "SonataMediaBundle:GalleryAdmin:list.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/media-bundle/src/Resources/views/GalleryAdmin/list.html.twig");
    }
}
