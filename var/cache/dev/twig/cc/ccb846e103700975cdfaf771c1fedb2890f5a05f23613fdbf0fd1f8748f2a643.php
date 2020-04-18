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

/* SonataMediaBundle:Block:block_feature_media.html.twig */
class __TwigTemplate_6029c8477bedb7182e45e83af3f9815640e50dff87c1d78e39417e1b5fef78ee extends \Twig\Template
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
        // line 11
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new RuntimeError('Variable "sonata_block" does not exist.', 11, $this->source); })()), "templates", [], "any", false, false, false, 11), "block_base", [], "any", false, false, false, 11), "SonataMediaBundle:Block:block_feature_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataMediaBundle:Block:block_feature_media.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "
    <div class=\"sonata-media-block-feature-media-container ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 15, $this->source); })()), "class", [], "any", false, false, false, 15), "html", null, true);
        echo "\">

        <div class=\"sonata-media-block-feature-media-container-";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 17, $this->source); })()), "orientation", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
            ";
        // line 18
        if (((isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 18, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 18, $this->source); })()), "format", [], "any", false, false, false, 18))) {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media((isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 19, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 19, $this->source); })()), "format", [], "any", false, false, false, 19), []);
            // line 20
            echo "            ";
        } else {
            // line 21
            echo "                ";
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </div>

        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25)) {
            // line 26
            echo "            <h3>
                ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 27, $this->source); })()), "icon", [], "any", false, false, false, 27)) {
                // line 28
                echo "                    <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 28, $this->source); })()), "icon", [], "any", false, false, false, 28), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                ";
            }
            // line 30
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 30, $this->source); })()), "translation_domain", [], "any", false, false, false, 30)) {
                // line 31
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), [], twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 31, $this->source); })()), "translation_domain", [], "any", false, false, false, 31)), "html", null, true);
                echo "
                ";
            } else {
                // line 33
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
                echo "
                ";
            }
            // line 35
            echo "            </h3>
        ";
        }
        // line 37
        echo "
        <div class=\"sonata-media-block-feature-media-content\">
            ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 39, $this->source); })()), "content", [], "any", false, false, false, 39), "html", null, true);
        echo "
        </div>

        <div style=\"clear: both\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_feature_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  119 => 37,  115 => 35,  109 => 33,  103 => 31,  100 => 30,  94 => 28,  92 => 27,  89 => 26,  87 => 25,  83 => 23,  80 => 22,  78 => 21,  75 => 20,  72 => 19,  70 => 18,  66 => 17,  61 => 15,  58 => 14,  51 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends sonata_block.templates.block_base %}

{% block block %}

    <div class=\"sonata-media-block-feature-media-container {{ settings.class }}\">

        <div class=\"sonata-media-block-feature-media-container-{{ settings.orientation }}\">
            {% if media and settings.format %}
                {% media media, settings.format %}
            {% else %}
                {# no media selected or format defined... #}
            {% endif %}
        </div>

        {% if settings.title %}
            <h3>
                {% if settings.icon %}
                    <i class=\"{{ settings.icon }}\" aria-hidden=\"true\"></i>
                {% endif %}
                {% if settings.translation_domain %}
                    {{ settings.title|trans({}, settings.translation_domain) }}
                {% else %}
                    {{ settings.title }}
                {% endif %}
            </h3>
        {% endif %}

        <div class=\"sonata-media-block-feature-media-content\">
            {{ settings.content }}
        </div>

        <div style=\"clear: both\"></div>
    </div>
{% endblock %}
", "SonataMediaBundle:Block:block_feature_media.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/media-bundle/src/Resources/views/Block/block_feature_media.html.twig");
    }
}
