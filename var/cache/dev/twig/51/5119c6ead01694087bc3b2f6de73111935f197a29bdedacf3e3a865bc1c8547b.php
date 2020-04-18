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

/* SonataUserBundle:Admin/Security:login.html.twig */
class __TwigTemplate_f922d97e9a37a8b3445ee56dafd1774ee330e6f626a6cc83f317b574b8a7b59f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sonata_nav' => [$this, 'block_sonata_nav'],
            'logo' => [$this, 'block_logo'],
            'sonata_left_side' => [$this, 'block_sonata_left_side'],
            'body_attributes' => [$this, 'block_body_attributes'],
            'sonata_wrapper' => [$this, 'block_sonata_wrapper'],
            'login_box_header' => [$this, 'block_login_box_header'],
            'sonata_user_login_form' => [$this, 'block_sonata_user_login_form'],
            'sonata_user_login_error' => [$this, 'block_sonata_user_login_error'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 12, $this->source); })()), "SonataUserBundle:Admin/Security:login.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security:login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 26
        echo "
    <div class=\"login-box\">
        ";
        // line 28
        $this->displayBlock('login_box_header', $context, $blocks);
        // line 42
        echo "        <div class=\"login-box-body\">
            ";
        // line 43
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 123
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_login_box_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_box_header"));

        // line 29
        echo "            <div class=\"login-logo\">
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
        echo "\">
                    ";
        // line 31
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 31, $this->source); })()), "adminPool", [], "any", false, false, false, 31), "getOption", [0 => "title_mode"], "method", false, false, false, 31), [0 => "single_image", 1 => "both"])) {
            // line 32
            echo "                        <div>
                            <img style=\"width:64px;\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 33, $this->source); })()), "adminPool", [], "any", false, false, false, 33), "titlelogo", [], "any", false, false, false, 33)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 33, $this->source); })()), "adminPool", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        // line 36
        echo "                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 36, $this->source); })()), "adminPool", [], "any", false, false, false, 36), "getOption", [0 => "title_mode"], "method", false, false, false, 36), [0 => "single_text", 1 => "both"])) {
            // line 37
            echo "                        <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 37, $this->source); })()), "adminPool", [], "any", false, false, false, 37), "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
                    ";
        }
        // line 39
        echo "                </a>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_sonata_user_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 44
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 51
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_user_authentication", [], "SonataUserBundle"), "html", null, true);
        echo "</p>
                ";
        // line 52
        if ((isset($context["qrCodeUrl"]) || array_key_exists("qrCodeUrl", $context))) {
            // line 53
            echo "                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <p align=\"middle\"> <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["qrCodeUrl"]) || array_key_exists("qrCodeUrl", $context) ? $context["qrCodeUrl"] : (function () { throw new RuntimeError('Variable "qrCodeUrl" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\" alt=\"QR-code\"></p>
                            <p align=\"middle\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("qr_code_secret", [], "SonataUserBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (isset($context["qrSecret"]) || array_key_exists("qrSecret", $context) ? $context["qrSecret"] : (function () { throw new RuntimeError('Variable "qrSecret" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "</p>
                            <p align=\"middle\">
                                <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("qr_go_next", [], "SonataUserBundle"), "html", null, true);
            echo "</a>
                            </p>
                        </div>
                    </div>
                ";
        } elseif (((        // line 62
(isset($context["two_step_submit"]) || array_key_exists("two_step_submit", $context))) ? (_twig_default_filter((isset($context["two_step_submit"]) || array_key_exists("two_step_submit", $context) ? $context["two_step_submit"] : (function () { throw new RuntimeError('Variable "two_step_submit" does not exist.', 62, $this->source); })()), false)) : (false))) {
            // line 63
            echo "                    <form method=\"POST\" role=\"form\">
                        ";
            // line 64
            if (((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 64, $this->source); })()) == "error")) {
                // line 65
                echo "                            <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_two_step_code_error", [], "SonataUserBundle"), "html", null, true);
                echo "</div>
                        ";
            }
            // line 67
            echo "                        <label for=\"_code\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_two_step_code", [], "SonataUserBundle"), "html", null, true);
            echo "</label>
                        <div class=\"input-group input-group-lg\">
                            <input type=\"text\" class=\"form-control\" id=\"_code\" name=\"_code\" autocomplete='off' />
                            <span class=\"input-group-btn\">
                                <input class=\"btn btn-primary\"
                                    id=\"_submit\"
                                    name=\"_submit\"
                                    type=\"submit\"
                                    value=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
            echo "\" />
                            </span>
                        </div>
                        <span class=\"help-block sonata-ba-field-help\">";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_two_step_code_help", [], "SonataUserBundle"), "html", null, true);
            echo "</span>
                    </form>
                ";
        } else {
            // line 81
            echo "                    <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_user_admin_security_check");
            echo "\" method=\"post\" role=\"form\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "\"/>

                        <div class=\"form-group has-feedback\">
                            <input class=\"form-control\"
                                id=\"username\"
                                name=\"_username\"
                                placeholder=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "SonataUserBundle"), "html", null, true);
            echo "\"
                                required=\"required\"
                                type=\"text\"
                                value=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 91, $this->source); })()), "html", null, true);
            echo "\"/>
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        </div>

                        <div class=\"form-group has-feedback\">
                            <input class=\"form-control\"
                                id=\"password\"
                                name=\"_password\"
                                placeholder=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "SonataUserBundle"), "html", null, true);
            echo "\"
                                required=\"required\"
                                type=\"password\"/>
                            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-8\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        ";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
            echo "
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-xs-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
            echo "</button>
                            </div>
                        </div>
                    </form>

                    <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["reset_route"]) || array_key_exists("reset_route", $context) ? $context["reset_route"] : (function () { throw new RuntimeError('Variable "reset_route" does not exist.', 120, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forgotten_password", [], "SonataUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 122
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_sonata_user_login_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 45
        echo "                    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "                        <div class=\"alert alert-danger alert-error\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageKey", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageData", [], "any", false, false, false, 47), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 50
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 50,  346 => 47,  343 => 46,  340 => 45,  333 => 44,  326 => 122,  319 => 120,  311 => 115,  303 => 110,  289 => 99,  278 => 91,  272 => 88,  263 => 82,  258 => 81,  252 => 78,  246 => 75,  234 => 67,  228 => 65,  226 => 64,  223 => 63,  221 => 62,  212 => 58,  205 => 56,  201 => 55,  197 => 53,  195 => 52,  190 => 51,  187 => 44,  180 => 43,  171 => 39,  165 => 37,  162 => 36,  154 => 33,  151 => 32,  149 => 31,  145 => 30,  142 => 29,  135 => 28,  125 => 123,  123 => 43,  120 => 42,  118 => 28,  114 => 26,  107 => 25,  94 => 23,  82 => 20,  70 => 17,  58 => 14,  42 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}

    <div class=\"login-box\">
        {% block login_box_header %}
            <div class=\"login-logo\">
                <a href=\"{{ path('sonata_admin_dashboard') }}\">
                    {% if sonata_admin.adminPool.getOption('title_mode') in ['single_image', 'both'] %}
                        <div>
                            <img style=\"width:64px;\" src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                        </div>
                    {% endif %}
                    {% if sonata_admin.adminPool.getOption('title_mode') in ['single_text', 'both'] %}
                        <span>{{ sonata_admin.adminPool.title }}</span>
                    {% endif %}
                </a>
            </div>
        {% endblock %}
        <div class=\"login-box-body\">
            {% block sonata_user_login_form %}
                {% block sonata_user_login_error %}
                    {% if error %}
                        <div class=\"alert alert-danger alert-error\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</p>
                {% if qrCodeUrl is defined %}
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <p align=\"middle\"> <img src=\"{{ qrCodeUrl }}\" alt=\"QR-code\"></p>
                            <p align=\"middle\">{{ 'qr_code_secret'|trans({}, 'SonataUserBundle') }}: {{ qrSecret }}</p>
                            <p align=\"middle\">
                                <a href=\"{{ path('sonata_admin_dashboard') }}\">{{ 'qr_go_next'|trans({}, 'SonataUserBundle') }}</a>
                            </p>
                        </div>
                    </div>
                {% elseif two_step_submit|default(false) %}
                    <form method=\"POST\" role=\"form\">
                        {% if state == 'error' %}
                            <div class=\"alert alert-error\">{{ 'label_two_step_code_error'|trans({}, 'SonataUserBundle') }}</div>
                        {% endif %}
                        <label for=\"_code\">{{ 'label_two_step_code'|trans({}, 'SonataUserBundle') }}</label>
                        <div class=\"input-group input-group-lg\">
                            <input type=\"text\" class=\"form-control\" id=\"_code\" name=\"_code\" autocomplete='off' />
                            <span class=\"input-group-btn\">
                                <input class=\"btn btn-primary\"
                                    id=\"_submit\"
                                    name=\"_submit\"
                                    type=\"submit\"
                                    value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
                            </span>
                        </div>
                        <span class=\"help-block sonata-ba-field-help\">{{ 'message_two_step_code_help'|trans({}, 'SonataUserBundle') }}</span>
                    </form>
                {% else %}
                    <form action=\"{{ path(\"sonata_user_admin_security_check\") }}\" method=\"post\" role=\"form\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                        <div class=\"form-group has-feedback\">
                            <input class=\"form-control\"
                                id=\"username\"
                                name=\"_username\"
                                placeholder=\"{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}\"
                                required=\"required\"
                                type=\"text\"
                                value=\"{{ last_username }}\"/>
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        </div>

                        <div class=\"form-group has-feedback\">
                            <input class=\"form-control\"
                                id=\"password\"
                                name=\"_password\"
                                placeholder=\"{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}\"
                                required=\"required\"
                                type=\"password\"/>
                            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-8\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-xs-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>
                            </div>
                        </div>
                    </form>

                    <a href=\"{{ reset_route }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
                {% endif %}
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security:login.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/user-bundle/src/Resources/views/Admin/Security/login.html.twig");
    }
}
