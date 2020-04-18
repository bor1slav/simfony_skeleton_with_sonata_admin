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

/* SonataMediaBundle:Gallery:view.html.twig */
class __TwigTemplate_52d08466a10a18477b1ec40083c8b9e2a9e6ad0aee41b9c2d4e36f75628cffc1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sonata_page_breadcrumb' => [$this, 'block_sonata_page_breadcrumb'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataMediaBundle:Gallery:view.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the gallery view template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 13
        echo "
";
        // line 14
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 19
        echo "
<h1>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</h1>

<div class=\"sonata-media-gallery-media-list\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 23, $this->source); })()), "GalleryHasMedias", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["galleryHasMedia"]) {
            // line 24
            echo "        <div class=\"media sonata-media-gallery-media-item\">
            <a class=\"pull-left sonata-media-gallery-media-item-link\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sonata_media_view", ["id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier(twig_get_attribute($this->env, $this->source, $context["galleryHasMedia"], "media", [], "any", false, false, false, 25))]), "html", null, true);
            echo "\">
                ";
            // line 26
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail(twig_get_attribute($this->env, $this->source, $context["galleryHasMedia"], "media", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 26, $this->source); })()), "defaultFormat", [], "any", false, false, false, 26), ["class" => "media-object"]);
            // line 27
            echo "            </a>
            <div class=\"media-body\">
                <h4 class=\"media-heading\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["galleryHasMedia"], "media", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</h4>
                <p>";
            // line 30
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["galleryHasMedia"], "media", [], "any", false, false, false, 30), "description", [], "any", false, false, false, 30);
            echo "</p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryHasMedia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_sonata_page_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 15
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["breadcrumb", ["context" => "gallery_view", "gallery" => (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 16, $this->source); })()), "current_uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "requestUri", [], "any", false, false, false, 16)]]);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Gallery:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 16,  108 => 15,  101 => 14,  93 => 34,  83 => 30,  79 => 29,  75 => 27,  73 => 26,  69 => 25,  66 => 24,  62 => 23,  56 => 20,  53 => 19,  51 => 14,  48 => 13,  44 => 12,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% sonata_template_box 'This is the gallery view template. Feel free to override it.' %}

{% block sonata_page_breadcrumb %}
    <div class=\"row-fluid clearfix\">
        {{ sonata_block_render_event('breadcrumb', { 'context': 'gallery_view', 'gallery': gallery, 'current_uri': app.request.requestUri }) }}
    </div>
{% endblock %}

<h1>{{ gallery.name }}</h1>

<div class=\"sonata-media-gallery-media-list\">
    {% for galleryHasMedia in gallery.GalleryHasMedias %}
        <div class=\"media sonata-media-gallery-media-item\">
            <a class=\"pull-left sonata-media-gallery-media-item-link\" href=\"{{ url('sonata_media_view', {'id': galleryHasMedia.media|sonata_urlsafeid }) }}\">
                {% thumbnail galleryHasMedia.media, gallery.defaultFormat with {'class': 'media-object'} %}
            </a>
            <div class=\"media-body\">
                <h4 class=\"media-heading\">{{ galleryHasMedia.media.name }}</h4>
                <p>{{ galleryHasMedia.media.description|raw }}</p>
            </div>
        </div>
    {% endfor %}
</div>
", "SonataMediaBundle:Gallery:view.html.twig", "/home/vagrant/code/caldaie/vendor/sonata-project/media-bundle/src/Resources/views/Gallery/view.html.twig");
    }
}
