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

/* SonataAdminBundle:CRUD/Association:edit_one_to_many_sortable_script_tabs.html.twig */
class __TwigTemplate_2841a425bff325df292df715bdaa7fe49d5f198e98a53269771258418c6a874a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:edit_one_to_many_sortable_script_tabs.html.twig"));

        // line 11
        echo "<script type=\"text/javascript\">
    jQuery('div#field_container_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " .sonata-ba-tabs').sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> div',
        stop: apply_position_value_";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "
    });

    function apply_position_value_";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "() {
        // update the input value position
        jQuery('div#field_container_";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " .sonata-ba-tabs .sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 21, $this->source); })()), "field_description", [], "any", false, false, false, 21), "options", [], "any", false, false, false, 21), "sortable", [], "any", false, false, false, 21), "html", null, true);
        echo "').each(function(index, element) {
            // remove the sortable handler and put it back
            var parent = jQuery(element).closest('.nav-tabs-custom');
            var tabs = parent.find('> .nav-tabs');
            jQuery('.sonata-ba-sortable-handler', tabs).remove();
            \$('<li class=\"sonata-ba-sortable-handler pull-right\"></li>')
                    .prepend('<span class=\"ui-icon ui-icon-grip-solid-horizontal\"></span>')
                    .appendTo(tabs);
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " .sonata-ba-tabs .sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 32, $this->source); })()), "field_description", [], "any", false, false, false, 32), "options", [], "any", false, false, false, 32), "sortable", [], "any", false, false, false, 32), "html", null, true);
        echo " input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "').bind('sonata.add_element', function() {
        apply_position_value_";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "();
        jQuery('div#field_container_";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })()), "html", null, true);
        echo " .sonata-ba-tabs').sortable('refresh');
    });

    apply_position_value_";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "();
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_one_to_many_sortable_script_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  100 => 40,  96 => 39,  92 => 38,  79 => 32,  61 => 21,  56 => 19,  50 => 16,  43 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<script type=\"text/javascript\">
    jQuery('div#field_container_{{ id }} .sonata-ba-tabs').sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> div',
        stop: apply_position_value_{{ id }}
    });

    function apply_position_value_{{ id }}() {
        // update the input value position
        jQuery('div#field_container_{{ id }} .sonata-ba-tabs .sonata-ba-field-{{ id }}-{{ sonata_admin.field_description.options.sortable }}').each(function(index, element) {
            // remove the sortable handler and put it back
            var parent = jQuery(element).closest('.nav-tabs-custom');
            var tabs = parent.find('> .nav-tabs');
            jQuery('.sonata-ba-sortable-handler', tabs).remove();
            \$('<li class=\"sonata-ba-sortable-handler pull-right\"></li>')
                    .prepend('<span class=\"ui-icon ui-icon-grip-solid-horizontal\"></span>')
                    .appendTo(tabs);
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_{{ id }} .sonata-ba-tabs .sonata-ba-field-{{ id }}-{{ sonata_admin.field_description.options.sortable }} input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-{{ id }}').bind('sonata.add_element', function() {
        apply_position_value_{{ id }}();
        jQuery('div#field_container_{{ id }} .sonata-ba-tabs').sortable('refresh');
    });

    apply_position_value_{{ id }}();
</script>
", "SonataAdminBundle:CRUD/Association:edit_one_to_many_sortable_script_tabs.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_one_to_many_sortable_script_tabs.html.twig");
    }
}
