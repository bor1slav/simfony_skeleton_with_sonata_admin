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

/* SonataMediaBundle:Block:block_gallery.html.twig */
class __TwigTemplate_6b727cba8dddf139b5b09d532bbbea9257380db7a85d7953d0aacfe824bb0175 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block' => [$this, 'block_block'],
            'element_indicator' => [$this, 'block_element_indicator'],
            'element_display' => [$this, 'block_element_display'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@SonataBlock/Block/block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataMediaBundle:Block:block_gallery.html.twig"));

        $this->parent = $this->loadTemplate("@SonataBlock/Block/block_base.html.twig", "SonataMediaBundle:Block:block_gallery.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 14, $this->source); })()), "format", [], "any", false, false, false, 14)) {
            // line 15
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 15, $this->source); })()), "class", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16)) {
                // line 17
                echo "                <h3>
                    ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 18, $this->source); })()), "icon", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "                        <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 19, $this->source); })()), "icon", [], "any", false, false, false, 19), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                    ";
                }
                // line 21
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 21, $this->source); })()), "translation_domain", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), [], twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 22, $this->source); })()), "translation_domain", [], "any", false, false, false, 22)), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 24
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
                    echo "
                    ";
                }
                // line 26
                echo "                </h3>
            ";
            }
            // line 28
            echo "
            ";
            // line 29
            echo "<div class='alert alert-default alert-info'>
    <strong>This is the gallery media block. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";            // line 30
            echo "
            <div id=\"carousel-";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"carousel slide\"
                 data-interval=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 32, $this->source); })()), "pauseTime", [], "any", false, false, false, 32), "html", null, true);
            echo "\"
                 ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 33, $this->source); })()), "startPaused", [], "any", false, false, false, 33) != 1)) {
                echo "data-ride=\"carousel\"";
            }
            // line 34
            echo "            >

                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 38, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 39
                echo "                        ";
                $this->displayBlock("element_indicator", $context, $blocks);
                echo "
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 45, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 46
                echo "                        ";
                $this->displayBlock("element_display", $context, $blocks);
                echo "
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_element_indicator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_indicator"));

        // line 63
        echo "    <li data-target=\"#carousel-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63), "html", null, true);
        echo "\" data-slide-to=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 63, $this->source); })()), "index0", [], "any", false, false, false, 63), "html", null, true);
        echo "\"";
        if (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 63, $this->source); })()), "first", [], "any", false, false, false, 63)) {
            echo " class=\"active\"";
        }
        echo "></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_element_display($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_display"));

        // line 67
        echo "    <div class=\"item";
        if (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 67, $this->source); })()), "first", [], "any", false, false, false, 67)) {
            echo " active";
        }
        echo "\">
        ";
        // line 68
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 68, $this->source); })()), "media", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 68, $this->source); })()), "format", [], "any", false, false, false, 68), []);
        // line 69
        echo "        <div class=\"carousel-caption\">
            <h4>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 70, $this->source); })()), "title", [], "any", false, false, false, 70), "html", null, true);
        echo "</h4>
            <p>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 71, $this->source); })()), "caption", [], "any", false, false, false, 71), "html", null, true);
        echo "</p>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 71,  270 => 70,  267 => 69,  265 => 68,  258 => 67,  251 => 66,  235 => 63,  228 => 62,  214 => 54,  208 => 51,  203 => 48,  186 => 46,  169 => 45,  163 => 41,  146 => 39,  129 => 38,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  108 => 30,  104 => 29,  101 => 28,  97 => 26,  91 => 24,  85 => 22,  82 => 21,  76 => 19,  74 => 18,  71 => 17,  69 => 16,  64 => 15,  61 => 14,  54 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends '@SonataBlock/Block/block_base.html.twig' %}

{% block block %}
    {% if settings.format %}
        <div class=\"{{ settings.class }}\">
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

            {% sonata_template_box 'This is the gallery media block. Feel free to override it.' %}

            <div id=\"carousel-{{ block.id }}\" class=\"carousel slide\"
                 data-interval=\"{{ settings.pauseTime }}\"
                 {% if settings.startPaused != 1 %}data-ride=\"carousel\"{% endif %}
            >

                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    {% for element in elements %}
                        {{ block('element_indicator') }}
                    {% endfor %}
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    {% for element in elements %}
                        {{ block('element_display') }}
                    {% endfor %}
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-{{ block.id }}\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-{{ block.id }}\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block element_indicator %}
    <li data-target=\"#carousel-{{ block.id }}\" data-slide-to=\"{{ loop.index0 }}\"{% if loop.first %} class=\"active\"{% endif %}></li>
{% endblock element_indicator %}

{% block element_display %}
    <div class=\"item{% if loop.first %} active{% endif %}\">
        {% media element.media, settings.format %}
        <div class=\"carousel-caption\">
            <h4>{{ element.title }}</h4>
            <p>{{ element.caption }}</p>
        </div>
    </div>
{% endblock element_display %}
", "SonataMediaBundle:Block:block_gallery.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/media-bundle/src/Resources/views/Block/block_gallery.html.twig");
    }
}
