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

/* SonataMediaBundle:Provider:view_youtube.html.twig */
class __TwigTemplate_803e735449ed7979b0d1446e328239a9fc1223472c990fab4a1339d52c388d2e extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataMediaBundle:Provider:view_youtube.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 12, $this->source); })()), "html5", [], "any", false, false, false, 12)) {
            // line 13
            echo "    <iframe width=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })()), "player_parameters", [], "any", false, false, false, 13), "width", [], "any", false, false, false, 13), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })()), "player_parameters", [], "any", false, false, false, 13), "height", [], "any", false, false, false, 13), "html", null, true);
            echo "\" src=\"//www.youtube.com/embed/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 13, $this->source); })()), "providerreference", [], "any", false, false, false, 13), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })()), "player_url_parameters", [], "any", false, false, false, 13), "html", null, true);
            echo "\" frameborder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })()), "player_parameters", [], "any", false, false, false, 13), "border", [], "any", false, false, false, 13), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })()), "player_parameters", [], "any", false, false, false, 13), "allowFullScreen", [], "any", false, false, false, 13)) {
                echo " allowfullscreen";
            }
            echo "></iframe>
";
        } else {
            // line 15
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 15, $this->source); })()), "player_parameters", [], "any", false, false, false, 15), "allowFullScreen", [], "any", false, false, false, 15)) {
                // line 16
                echo "        ";
                $context["allowFullScreen"] = "true";
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                $context["allowFullScreen"] = "false";
                // line 19
                echo "    ";
            }
            // line 20
            echo "    <object width=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 20, $this->source); })()), "player_parameters", [], "any", false, false, false, 20), "width", [], "any", false, false, false, 20), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 20, $this->source); })()), "player_parameters", [], "any", false, false, false, 20), "height", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
        <param name=\"movie\" value=\"//www.youtube.com/v/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 21, $this->source); })()), "providerreference", [], "any", false, false, false, 21), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 21, $this->source); })()), "player_url_parameters", [], "any", false, false, false, 21), "html", null, true);
            echo "\"></param>
        <param name=\"allowFullScreen\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["allowFullScreen"]) || array_key_exists("allowFullScreen", $context) ? $context["allowFullScreen"] : (function () { throw new RuntimeError('Variable "allowFullScreen" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\"></param>
        <param name=\"allowscriptaccess\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 23, $this->source); })()), "player_parameters", [], "any", false, false, false, 23), "allowScriptAccess", [], "any", false, false, false, 23), "html", null, true);
            echo "\"></param>
        <param name=\"wmode\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 24, $this->source); })()), "player_parameters", [], "any", false, false, false, 24), "wmode", [], "any", false, false, false, 24), "html", null, true);
            echo "\">

        <embed
            src=\"//www.youtube.com/v/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 27, $this->source); })()), "providerreference", [], "any", false, false, false, 27), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 27, $this->source); })()), "player_url_parameters", [], "any", false, false, false, 27), "html", null, true);
            echo "\"
            type=\"application/x-shockwave-flash\"
            allowscriptaccess=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 29, $this->source); })()), "player_parameters", [], "any", false, false, false, 29), "allowScriptAccess", [], "any", false, false, false, 29), "html", null, true);
            echo "\"
            allowfullscreen=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["allowFullScreen"]) || array_key_exists("allowFullScreen", $context) ? $context["allowFullScreen"] : (function () { throw new RuntimeError('Variable "allowFullScreen" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\"
            width=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 31, $this->source); })()), "player_parameters", [], "any", false, false, false, 31), "width", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
            height=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 32, $this->source); })()), "player_parameters", [], "any", false, false, false, 32), "height", [], "any", false, false, false, 32), "html", null, true);
            echo "\"
            wmode=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 33, $this->source); })()), "player_parameters", [], "any", false, false, false, 33), "wmode", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
        </embed>
    </object>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 33,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  105 => 27,  99 => 24,  95 => 23,  91 => 22,  85 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  45 => 13,  43 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if options.html5 %}
    <iframe width=\"{{ options.player_parameters.width }}\" height=\"{{ options.player_parameters.height }}\" src=\"//www.youtube.com/embed/{{ media.providerreference }}?{{ options.player_url_parameters }}\" frameborder=\"{{ options.player_parameters.border }}\"{% if options.player_parameters.allowFullScreen %} allowfullscreen{% endif %}></iframe>
{% else %}
    {% if options.player_parameters.allowFullScreen %}
        {% set allowFullScreen = \"true\" %}
    {% else %}
        {% set allowFullScreen = \"false\" %}
    {% endif %}
    <object width=\"{{ options.player_parameters.width }}\" height=\"{{ options.player_parameters.height }}\">
        <param name=\"movie\" value=\"//www.youtube.com/v/{{ media.providerreference }}?{{ options.player_url_parameters }}\"></param>
        <param name=\"allowFullScreen\" value=\"{{ allowFullScreen }}\"></param>
        <param name=\"allowscriptaccess\" value=\"{{ options.player_parameters.allowScriptAccess }}\"></param>
        <param name=\"wmode\" value=\"{{ options.player_parameters.wmode }}\">

        <embed
            src=\"//www.youtube.com/v/{{ media.providerreference }}?{{ options.player_url_parameters }}\"
            type=\"application/x-shockwave-flash\"
            allowscriptaccess=\"{{ options.player_parameters.allowScriptAccess }}\"
            allowfullscreen=\"{{ allowFullScreen }}\"
            width=\"{{ options.player_parameters.width }}\"
            height=\"{{ options.player_parameters.height }}\"
            wmode=\"{{ options.player_parameters.wmode }}\">
        </embed>
    </object>
{% endif %}
", "SonataMediaBundle:Provider:view_youtube.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/media-bundle/src/Resources/views/Provider/view_youtube.html.twig");
    }
}
