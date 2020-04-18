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

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_ad2808db355a0c26cd53be2354019b67f7891819e3bdf2b3854d82e30674ee96 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'user_block' => [$this, 'block_user_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_user_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_block"));

        // line 13
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 15
            echo "        ";
            $context["_logout_uri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sonata_user_admin_security_logout");
            // line 16
            echo "        ";
            $context["_logout_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_block_logout", [], "SonataUserBundle");
            // line 17
            echo "        ";
            $context["_profile_uri"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 17, $this->source); })()), "userAdmin", [], "any", false, false, false, 17), "isGranted", [0 => "EDIT", 1 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)], "method", false, false, false, 17)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 17, $this->source); })()), "userAdmin", [], "any", false, false, false, 17), "generateUrl", [0 => "edit", 1 => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]], "method", false, false, false, 17)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 17, $this->source); })()), "userAdmin", [], "any", false, false, false, 17), "generateUrl", [0 => "show", 1 => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]], "method", false, false, false, 17)));
            // line 18
            echo "        ";
            $context["_profile_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_block_profile", [], "SonataUserBundle");
            // line 19
            echo "        ";
            $context["_user_image"] = ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 19, $this->source); })()), "defaultAvatar", [], "any", false, false, false, 19)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 19, $this->source); })()), "defaultAvatar", [], "any", false, false, false, 19))) : (null));
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            // line 22
            echo "
        ";
            // line 23
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN") && twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 23, $this->source); })()), "impersonating", [], "any", false, false, false, 23))) {
                // line 24
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 25
                echo "            ";
                $context["_logout_uri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 25, $this->source); })()), "impersonating", [], "any", false, false, false, 25), "route", [], "any", false, false, false, 25), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 25, $this->source); })()), "impersonating", [], "any", false, false, false, 25), "parameters", [], "any", false, false, false, 25), ["_switch_user" => "_exit"]));
                // line 26
                echo "            ";
                $context["_logout_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("switch_user_exit", [], "SonataUserBundle");
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        <li class=\"user-header ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["_bg_class"]) || array_key_exists("_bg_class", $context) ? $context["_bg_class"] : (function () { throw new RuntimeError('Variable "_bg_class" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 30
            if ((isset($context["_user_image"]) || array_key_exists("_user_image", $context) ? $context["_user_image"] : (function () { throw new RuntimeError('Variable "_user_image" does not exist.', 30, $this->source); })())) {
                // line 31
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["_user_image"]) || array_key_exists("_user_image", $context) ? $context["_user_image"] : (function () { throw new RuntimeError('Variable "_user_image" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 33
            echo "            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
        </li>

";
            // line 42
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["_profile_uri"]) || array_key_exists("_profile_uri", $context) ? $context["_profile_uri"] : (function () { throw new RuntimeError('Variable "_profile_uri" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_profile_text"]) || array_key_exists("_profile_text", $context) ? $context["_profile_text"] : (function () { throw new RuntimeError('Variable "_profile_text" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["_logout_uri"]) || array_key_exists("_logout_uri", $context) ? $context["_logout_uri"] : (function () { throw new RuntimeError('Variable "_logout_uri" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_logout_text"]) || array_key_exists("_logout_text", $context) ? $context["_logout_text"] : (function () { throw new RuntimeError('Variable "_logout_text" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  126 => 45,  121 => 42,  114 => 33,  108 => 31,  106 => 30,  102 => 29,  99 => 28,  96 => 27,  93 => 26,  90 => 25,  87 => 24,  85 => 23,  82 => 22,  80 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  57 => 13,  44 => 12,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block user_block %}
    {% if app.user %}
        {% set _bg_class          = \"bg-light-blue\" %}
        {% set _logout_uri        = url('sonata_user_admin_security_logout') %}
        {% set _logout_text       = 'user_block_logout'|trans({}, 'SonataUserBundle') %}
        {% set _profile_uri       = sonata_user.userAdmin.isGranted('EDIT', app.user) ? sonata_user.userAdmin.generateUrl('edit', {id: app.user.id}) : sonata_user.userAdmin.generateUrl('show', {id: app.user.id}) %}
        {% set _profile_text      = 'user_block_profile'|trans({}, 'SonataUserBundle') %}
        {% set _user_image        = sonata_user.defaultAvatar ? asset(sonata_user.defaultAvatar) : null %}
        {# Customize this with your profile picture implementation, see below for example #}
        {#{% set _user_image  = app.user.profilePicture|default(asset(sonata_user.defaultAvatar)) %}#}

        {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}
            {% set _bg_class    = \"bg-light-green\" %}
            {% set _logout_uri  = url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) %}
            {% set _logout_text = 'switch_user_exit'|trans({}, 'SonataUserBundle') %}
        {% endif %}

        <li class=\"user-header {{ _bg_class }}\">
            {% if _user_image %}
                <img src=\"{{ _user_image }}\" class=\"img-circle\" alt=\"Avatar\" />
            {% endif %}
            <p>{{ app.user }}</p>
        </li>

{#
    Uncomment to add some information
        <li class=\"user-body\">

        </li>
#}

        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"{{ _profile_uri }}\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> {{ _profile_text }}</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"{{ _logout_uri }}\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> {{ _logout_text }}</a>
            </div>
        </li>
    {% endif %}
{% endblock %}
", "SonataUserBundle:Admin/Core:user_block.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/user-bundle/src/Resources/views/Admin/Core/user_block.html.twig");
    }
}
