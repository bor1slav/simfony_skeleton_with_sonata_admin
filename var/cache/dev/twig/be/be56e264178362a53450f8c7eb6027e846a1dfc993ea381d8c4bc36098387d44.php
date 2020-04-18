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

/* SonataMediaBundle:MediaAdmin:edit.html.twig */
class __TwigTemplate_192195add48ac696c6ff859d2c812dd9993a1ff4bdaf59900f7ac18f25e0dfc3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'form' => [$this, 'block_form'],
            'sonata_media_show_reference' => [$this, 'block_sonata_media_show_reference'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 29
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:edit.html.twig"));

        // line 12
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 29
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_edit.html.twig", "SonataMediaBundle:MediaAdmin:edit.html.twig", 29);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        button.btn.btn-sm.btn-default.pixlr-link {
            margin-bottom: 0;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 41
        echo "    <div class=\"row\">
        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)) {
            // line 43
            echo "            <div class=\"col-md-6\">
                ";
            // line 44
            $this->displayBlock('sonata_media_show_reference', $context, $blocks);
            // line 121
            echo "            </div>
        ";
        }
        // line 123
        echo "
        <div class=\"col-md-6\">
            ";
        // line 126
        echo "            ";
        $this->displayParentBlock("form", $context, $blocks);
        echo "
        </div>
    </div>

    ";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_media"]) || array_key_exists("sonata_media", $context) ? $context["sonata_media"] : (function () { throw new RuntimeError('Variable "sonata_media" does not exist.', 130, $this->source); })()), "pixlr", [], "any", false, false, false, 130) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_media"]) || array_key_exists("sonata_media", $context) ? $context["sonata_media"] : (function () { throw new RuntimeError('Variable "sonata_media" does not exist.', 130, $this->source); })()), "pixlr", [], "any", false, false, false, 130), "isEditable", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 130, $this->source); })())], "method", false, false, false, 130))) {
            // line 131
            echo "        <div class=\"modal fade\" id=\"pixlr-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.edit_with_pixlr", [], "SonataMediaBundle"), "html", null, true);
            echo "\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.edit_with_pixlr", [], "SonataMediaBundle"), "html", null, true);
            echo "</h4>
                    </div>
                    <div class=\"modal-body\" id=\"pixlr-modal-body\">
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\">
            window.closeModal = function() {
                jQuery('#pixlr-modal').modal('hide');
            }

            jQuery('button.pixlr-link').on('click', function(e) {
                e.preventDefault();
                var url = jQuery(this).attr('data-href');
                jQuery(\"#pixlr-modal-body\").html('<iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\" allowtransparency=\"true\" src=\"'+url+'\"></iframe>');
            });

            Admin.setup_list_modal(jQuery('#pixlr-modal'));
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_sonata_media_show_reference($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_media_show_reference"));

        // line 45
        echo "                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.media_preview", [], "SonataMediaBundle"), "html", null, true);
        echo "</h3>
                            ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_media"]) || array_key_exists("sonata_media", $context) ? $context["sonata_media"] : (function () { throw new RuntimeError('Variable "sonata_media" does not exist.', 48, $this->source); })()), "pixlr", [], "any", false, false, false, 48) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_media"]) || array_key_exists("sonata_media", $context) ? $context["sonata_media"] : (function () { throw new RuntimeError('Variable "sonata_media" does not exist.', 48, $this->source); })()), "pixlr", [], "any", false, false, false, 48), "isEditable", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 48, $this->source); })())], "method", false, false, false, 48))) {
            // line 49
            echo "                                <div class=\"box-tools pull-right\">
                                    <button class=\"btn btn-sm btn-default pixlr-link\"
                                            data-href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_media_pixlr_open_editor", ["id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 51, $this->source); })()))]), "html", null, true);
            echo "\"
                                            data-toggle=\"modal\"
                                            data-target=\"#pixlr-modal\"
                                            >
                                        <i class=\"fa fa-pencil-square-o\"></i> ";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.edit_with_pixlr", [], "SonataMediaBundle"), "html", null, true);
            echo "
                                    </button>
                                </div>
                            ";
        }
        // line 59
        echo "
                        </div>
                        <div class=\"box-body table-responsive\">

                            <div class=\"text-center\">
                                ";
        // line 64
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 64, $this->source); })()), "reference", ["class" => "img-responsive img-rounded"]);
        // line 65
        echo "                            </div>

                            <table class=\"table\">
                                <tr>
                                    <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.size", [], "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 71, $this->source); })()), "width", [], "any", false, false, false, 71), "html", null, true);
        echo " x ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 71, $this->source); })()), "height", [], "any", false, false, false, 71), "html", null, true);
        echo "
                                        ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 72, $this->source); })()), "size", [], "any", false, false, false, 72) > 0)) {
            echo "(";
            echo twig_call_macro($macros["macros"], "macro_bytesToSize", [twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 72, $this->source); })()), "size", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext());
            echo ")";
        }
        // line 73
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.content_type", [], "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 77, $this->source); })()), "contenttype", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.cdn", [], "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 82, $this->source); })()), "cdnisflushable", [], "any", false, false, false, 82)) {
            // line 83
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.to_be_flushed", [], "SonataMediaBundle"), "html", null, true);
            echo "
                                        ";
        } else {
            // line 85
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.flushed_at", [], "SonataMediaBundle"), "html", null, true);
            echo "
                                            ";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 86, $this->source); })()), "cdnflushat", [], "any", false, false, false, 86)), "html", null, true);
            echo "
                                        ";
        }
        // line 88
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <th><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_media_download", ["id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 91, $this->source); })()))]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.protected_download_url", [], "SonataMediaBundle"), "html", null, true);
        echo "</a></th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_media_download", ["id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 93, $this->source); })()))]), "html", null, true);
        echo "\" />
                                        <span class=\"label label-warning\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.protected_download_url_notice", [], "SonataMediaBundle"), "html", null, true);
        echo "</span> ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_media"]) || array_key_exists("sonata_media", $context) ? $context["sonata_media"] : (function () { throw new RuntimeError('Variable "sonata_media" does not exist.', 94, $this->source); })()), "pool", [], "any", false, false, false, 94), "downloadStrategy", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 94, $this->source); })())], "method", false, false, false, 94), "description", [], "any", false, false, false, 94);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <a href=\"";
        // line 99
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 99, $this->source); })()), "reference");
        echo "\" target=\"_blank\">reference</a>
                                    </th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
        // line 102
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 102, $this->source); })()), "reference");
        echo "\" />
                                    </td>
                                </tr>

                                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_media"]) || array_key_exists("sonata_media", $context) ? $context["sonata_media"] : (function () { throw new RuntimeError('Variable "sonata_media" does not exist.', 106, $this->source); })()), "pool", [], "any", false, false, false, 106), "formatNamesByContext", [0 => twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 106, $this->source); })()), "context", [], "any", false, false, false, 106)], "method", false, false, false, 106));
        foreach ($context['_seq'] as $context["name"] => $context["format"]) {
            // line 107
            echo "                                    <tr>
                                        <th>
                                            <a href=\"";
            // line 109
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 109, $this->source); })()), $context["name"]);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
                                        </th>
                                        <td>
                                            <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
            // line 112
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 112, $this->source); })()), $context["name"]);
            echo "\" />
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                            </table>
                        </div>

                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function macro_bytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "bytesToSize"));

            // line 15
            ob_start();
            // line 16
            echo "    ";
            $context["kilobyte"] = 1024;
            // line 17
            echo "    ";
            $context["megabyte"] = ((isset($context["kilobyte"]) || array_key_exists("kilobyte", $context) ? $context["kilobyte"] : (function () { throw new RuntimeError('Variable "kilobyte" does not exist.', 17, $this->source); })()) * 1024);
            // line 18
            echo "
    ";
            // line 19
            if (((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 19, $this->source); })()) < (isset($context["kilobyte"]) || array_key_exists("kilobyte", $context) ? $context["kilobyte"] : (function () { throw new RuntimeError('Variable "kilobyte" does not exist.', 19, $this->source); })()))) {
                // line 20
                echo "        ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 20, $this->source); })()) . " B"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 21
(isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 21, $this->source); })()) < (isset($context["megabyte"]) || array_key_exists("megabyte", $context) ? $context["megabyte"] : (function () { throw new RuntimeError('Variable "megabyte" does not exist.', 21, $this->source); })()))) {
                // line 22
                echo "        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 22, $this->source); })()) / (isset($context["kilobyte"]) || array_key_exists("kilobyte", $context) ? $context["kilobyte"] : (function () { throw new RuntimeError('Variable "kilobyte" does not exist.', 22, $this->source); })())), 2) . " KB"), "html", null, true);
                echo "
    ";
            } else {
                // line 24
                echo "        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 24, $this->source); })()) / (isset($context["megabyte"]) || array_key_exists("megabyte", $context) ? $context["megabyte"] : (function () { throw new RuntimeError('Variable "megabyte" does not exist.', 24, $this->source); })())), 2) . " MB"), "html", null, true);
                echo "
    ";
            }
            $___internal_af9f7deea64399bb525cd81171079764bcfa3669252464b7d4077b906911028e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 15
            echo twig_spaceless($___internal_af9f7deea64399bb525cd81171079764bcfa3669252464b7d4077b906911028e_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 15,  376 => 24,  370 => 22,  368 => 21,  363 => 20,  361 => 19,  358 => 18,  355 => 17,  352 => 16,  350 => 15,  334 => 14,  323 => 116,  313 => 112,  305 => 109,  301 => 107,  297 => 106,  290 => 102,  284 => 99,  274 => 94,  270 => 93,  263 => 91,  258 => 88,  253 => 86,  248 => 85,  242 => 83,  240 => 82,  235 => 80,  229 => 77,  225 => 76,  220 => 73,  214 => 72,  208 => 71,  203 => 69,  197 => 65,  195 => 64,  188 => 59,  181 => 55,  174 => 51,  170 => 49,  168 => 48,  164 => 47,  160 => 45,  153 => 44,  123 => 136,  114 => 131,  112 => 130,  104 => 126,  100 => 123,  96 => 121,  94 => 44,  91 => 43,  89 => 42,  86 => 41,  79 => 40,  64 => 32,  57 => 31,  49 => 29,  47 => 12,  37 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% import _self as macros %}

{% macro bytesToSize(bytes) %}
{% apply spaceless %}
    {% set kilobyte = 1024 %}
    {% set megabyte = kilobyte * 1024 %}

    {% if bytes < kilobyte %}
        {{ bytes ~ ' B' }}
    {% elseif bytes < megabyte %}
        {{ (bytes / kilobyte)|number_format(2) ~ ' KB' }}
    {% else %}
        {{ (bytes / megabyte)|number_format(2) ~ ' MB' }}
    {% endif %}
{% endapply %}
{% endmacro %}

{% extends '@SonataAdmin/CRUD/base_edit.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        button.btn.btn-sm.btn-default.pixlr-link {
            margin-bottom: 0;
        }
    </style>
{% endblock %}

{% block form %}
    <div class=\"row\">
        {% if object.id %}
            <div class=\"col-md-6\">
                {% block sonata_media_show_reference %}
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">{{ 'title.media_preview'|trans({}, 'SonataMediaBundle') }}</h3>
                            {% if sonata_media.pixlr and sonata_media.pixlr.isEditable(object) %}
                                <div class=\"box-tools pull-right\">
                                    <button class=\"btn btn-sm btn-default pixlr-link\"
                                            data-href=\"{{ path('sonata_media_pixlr_open_editor', { 'id': object|sonata_urlsafeid }) }}\"
                                            data-toggle=\"modal\"
                                            data-target=\"#pixlr-modal\"
                                            >
                                        <i class=\"fa fa-pencil-square-o\"></i> {{ \"label.edit_with_pixlr\"|trans({}, \"SonataMediaBundle\") }}
                                    </button>
                                </div>
                            {% endif %}

                        </div>
                        <div class=\"box-body table-responsive\">

                            <div class=\"text-center\">
                                {% media object, 'reference' with {'class': 'img-responsive img-rounded'} %}
                            </div>

                            <table class=\"table\">
                                <tr>
                                    <th>{{ 'label.size'|trans({}, 'SonataMediaBundle') }}</th>
                                    <td>
                                        {{ object.width }} x {{ object.height }}
                                        {% if object.size > 0 %}({{ macros.bytesToSize(object.size) }}){% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ 'label.content_type'|trans({}, 'SonataMediaBundle') }}</th>
                                    <td>{{ object.contenttype }}</td>
                                </tr>
                                <tr>
                                    <th>{{ 'label.cdn'|trans({}, 'SonataMediaBundle') }}</th>
                                    <td>
                                        {% if object.cdnisflushable %}
                                            {{ 'label.to_be_flushed'|trans({}, 'SonataMediaBundle') }}
                                        {% else %}
                                            {{ 'label.flushed_at'|trans({}, 'SonataMediaBundle') }}
                                            {{ object.cdnflushat|date }}
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th><a href=\"{{ path('sonata_media_download', {'id': object|sonata_urlsafeid }) }}\">{{ 'label.protected_download_url'|trans({}, 'SonataMediaBundle') }}</a></th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"{{ path('sonata_media_download', {'id': object|sonata_urlsafeid }) }}\" />
                                        <span class=\"label label-warning\">{{ 'label.protected_download_url_notice'|trans({}, 'SonataMediaBundle') }}</span> {{ sonata_media.pool.downloadStrategy(object).description|raw }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <a href=\"{% path object, 'reference' %}\" target=\"_blank\">reference</a>
                                    </th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"{% path object, 'reference' %}\" />
                                    </td>
                                </tr>

                                {% for name, format in sonata_media.pool.formatNamesByContext(object.context) %}
                                    <tr>
                                        <th>
                                            <a href=\"{% path object, name %}\" target=\"_blank\">{{ name }}</a>
                                        </th>
                                        <td>
                                            <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"{% path object, name %}\" />
                                        </td>
                                    </tr>
                                {% endfor %}
                            </table>
                        </div>

                    </div>
                {% endblock sonata_media_show_reference %}
            </div>
        {% endif %}

        <div class=\"col-md-6\">
            {# Renders the form #}
            {{ parent() }}
        </div>
    </div>

    {% if sonata_media.pixlr and sonata_media.pixlr.isEditable(object) %}
        <div class=\"modal fade\" id=\"pixlr-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{{ \"label.edit_with_pixlr\"|trans({}, \"SonataMediaBundle\") }}\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">{{ \"label.edit_with_pixlr\"|trans({}, \"SonataMediaBundle\") }}</h4>
                    </div>
                    <div class=\"modal-body\" id=\"pixlr-modal-body\">
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\">
            window.closeModal = function() {
                jQuery('#pixlr-modal').modal('hide');
            }

            jQuery('button.pixlr-link').on('click', function(e) {
                e.preventDefault();
                var url = jQuery(this).attr('data-href');
                jQuery(\"#pixlr-modal-body\").html('<iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\" allowtransparency=\"true\" src=\"'+url+'\"></iframe>');
            });

            Admin.setup_list_modal(jQuery('#pixlr-modal'));
        </script>
    {% endif %}
{% endblock form %}
", "SonataMediaBundle:MediaAdmin:edit.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/media-bundle/src/Resources/views/MediaAdmin/edit.html.twig");
    }
}
