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

/* SonataUserBundle:Form:roles_matrix_list.html.twig */
class __TwigTemplate_3b0ae8b018239d3aad8065dd99b579f46d8b9382bbbbc6ac0fb4da6b4e1a0a25 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:roles_matrix_list.html.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 11, $this->source); })())));
        foreach ($context['_seq'] as $context["role"] => $context["attributes"]) {
            // line 12
            echo "    <li>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["attributes"], "form", [], "any", false, false, false, 12), 'widget', ["label" => twig_get_attribute($this->env, $this->source, $context["attributes"], "role_translated", [], "any", false, false, false, 12), "value" => twig_get_attribute($this->env, $this->source, $context["attributes"], "role", [], "any", false, false, false, 12)]);
            echo "</li>
    ";
            // line 13
            if ( !twig_get_attribute($this->env, $this->source, $context["attributes"], "is_granted", [], "any", false, false, false, 13)) {
                // line 14
                echo "        <script>
            \$('input[value=\"";
                // line 15
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "\"]').iCheck('disable');
            \$('form').on('submit', function() {
                \$('input[value=\"";
                // line 17
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "\"]').iCheck('enable');
            });
        </script>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:roles_matrix_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  54 => 15,  51 => 14,  49 => 13,  44 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% for role, attributes in roles|sort %}
    <li>{{ form_widget(attributes.form, {label: attributes.role_translated, value: attributes.role}) }}</li>
    {% if not attributes.is_granted %}
        <script>
            \$('input[value=\"{{ role }}\"]').iCheck('disable');
            \$('form').on('submit', function() {
                \$('input[value=\"{{ role }}\"]').iCheck('enable');
            });
        </script>
    {% endif %}
{% endfor %}
", "SonataUserBundle:Form:roles_matrix_list.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/user-bundle/src/Resources/views/Form/roles_matrix_list.html.twig");
    }
}
