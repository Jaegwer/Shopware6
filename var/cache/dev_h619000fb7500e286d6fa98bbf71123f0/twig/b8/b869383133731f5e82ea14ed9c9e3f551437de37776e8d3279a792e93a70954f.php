<?php

use Twig\Environment;
use function Shopware\Core\Framework\Adapter\Twig\sw_get_attribute;
use function Shopware\Core\Framework\Adapter\Twig\sw_escape_filter;
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

/* @Storefront/storefront/element/cms-element-image.html.twig */
class __TwigTemplate_10504d36d4bea0d5bba2c1494b02c719 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_image' => [$this, 'block_element_image'],
            'element_product_slider_alignment' => [$this, 'block_element_product_slider_alignment'],
            'element_image_inner' => [$this, 'block_element_image_inner'],
            'element_image_container' => [$this, 'block_element_image_container'],
            'element_image_media' => [$this, 'block_element_image_media'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-image.html.twig"));

        // line 1
        $this->displayBlock('element_image', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_element_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image"));

        // line 2
        echo "    ";
        $context["config"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 2), "elements", [], "any", false, false, false, 2);
        // line 3
        echo "
    <div class=\"cms-element-";
        // line 4
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 4), "html", null, true);
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4)) {
            echo " has-vertical-alignment";
        }
        echo "\">
        ";
        // line 5
        $this->displayBlock('element_product_slider_alignment', $context, $blocks);
        // line 50
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_element_product_slider_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_alignment"));

        // line 6
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6)) {
            // line 7
            echo "                <div class=\"cms-element-alignment";
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7) == "center")) {
                echo " align-self-center";
            } elseif ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7) == "flex-end")) {
                echo " align-self-end";
            } else {
                echo " align-self-start";
            }
            echo "\">
            ";
        }
        // line 9
        echo "                ";
        $this->displayBlock('element_image_inner', $context, $blocks);
        // line 46
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 46), "value", [], "any", false, false, false, 46)) {
            // line 47
            echo "                </div>
            ";
        }
        // line 49
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_element_image_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_inner"));

        // line 10
        echo "                    ";
        ob_start();
        // line 11
        echo "                        ";
        $this->displayBlock('element_image_container', $context, $blocks);
        // line 34
        echo "                    ";
        $context["imageElement"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "
                    ";
        // line 36
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 36), "config", [], "any", false, false, false, 36), "url", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36)) {
            // line 37
            echo "                        <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 37), "config", [], "any", false, false, false, 37), "url", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), "html", null, true);
            echo "\"
                           class=\"cms-image-link\"
                           ";
            // line 39
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 39), "config", [], "any", false, false, false, 39), "newTab", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39)) {
                echo "target=\"_blank\" rel=\"noopener\"";
            }
            echo ">
                            ";
            // line 40
            echo sw_escape_filter($this->env, ($context["imageElement"] ?? null), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 43
            echo "                        ";
            echo sw_escape_filter($this->env, ($context["imageElement"] ?? null), "html", null, true);
            echo "
                    ";
        }
        // line 45
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_element_image_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_container"));

        // line 12
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 12), "media", [], "any", false, false, false, 12), "url", [], "any", false, false, false, 12)) {
            // line 13
            echo "                                <div class=\"cms-image-container is-";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 13), "config", [], "any", false, false, false, 13), "displayMode", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "html", null, true);
            echo "\"
                                    ";
            // line 14
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 14), "config", [], "any", false, false, false, 14), "minHeight", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14) && (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 14), "config", [], "any", false, false, false, 14), "displayMode", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14) == "cover"))) {
                echo " style=\"min-height: ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 14), "config", [], "any", false, false, false, 14), "minHeight", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "html", null, true);
                echo ";\"";
            }
            echo ">
                                    ";
            // line 15
            $this->displayBlock('element_image_media', $context, $blocks);
            // line 31
            echo "                                </div>
                            ";
        }
        // line 33
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_element_image_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_media"));

        // line 16
        echo "                                        ";
        $context["attributes"] = ["class" => "cms-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 18
($context["element"] ?? null), "data", [], "any", false, false, false, 18), "media", [], "any", false, false, false, 18), "translated", [], "any", false, false, false, 18), "alt", [], "any", false, false, false, 18)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 18), "media", [], "any", false, false, false, 18), "translated", [], "any", false, false, false, 18), "alt", [], "any", false, false, false, 18)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 19
($context["element"] ?? null), "data", [], "any", false, false, false, 19), "media", [], "any", false, false, false, 19), "translated", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 19), "media", [], "any", false, false, false, 19), "translated", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19)) : ("")), "loading" => "lazy"];
        // line 22
        echo "
                                        ";
        // line 23
        if (((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 23), "config", [], "any", false, false, false, 23), "displayMode", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23) == "cover") || (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 23), "config", [], "any", false, false, false, 23), "displayMode", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23) == "contain"))) {
            // line 24
            echo "                                            ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 24), "config", [], "any", false, false, false, 24), "displayMode", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24)]);
            // line 25
            echo "                                        ";
        }
        // line 26
        echo "
                                        ";
        // line 27
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image.html.twig", 27);
        })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 28
($context["element"] ?? null), "data", [], "any", false, false, false, 28), "media", [], "any", false, false, false, 28), "name" => "cms-image-thumbnails"]));
        // line 30
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-image.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  243 => 30,  241 => 28,  234 => 27,  231 => 26,  228 => 25,  225 => 24,  223 => 23,  220 => 22,  218 => 19,  217 => 18,  215 => 16,  208 => 15,  201 => 33,  197 => 31,  195 => 15,  187 => 14,  182 => 13,  179 => 12,  172 => 11,  165 => 45,  159 => 43,  153 => 40,  147 => 39,  141 => 37,  139 => 36,  136 => 35,  133 => 34,  130 => 11,  127 => 10,  120 => 9,  113 => 49,  109 => 47,  106 => 46,  103 => 9,  91 => 7,  88 => 6,  81 => 5,  73 => 50,  71 => 5,  64 => 4,  61 => 3,  58 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_image %}
    {% set config = element.fieldConfig.elements %}

    <div class=\"cms-element-{{ element.type }}{% if config.verticalAlign.value %} has-vertical-alignment{% endif %}\">
        {% block element_product_slider_alignment %}
            {% if config.verticalAlign.value %}
                <div class=\"cms-element-alignment{% if config.verticalAlign.value == \"center\" %} align-self-center{% elseif config.verticalAlign.value == \"flex-end\" %} align-self-end{% else %} align-self-start{% endif %}\">
            {% endif %}
                {% block element_image_inner %}
                    {% set imageElement %}
                        {% block element_image_container %}
                            {% if element.data.media.url %}
                                <div class=\"cms-image-container is-{{ element.translated.config.displayMode.value }}\"
                                    {% if element.translated.config.minHeight.value and element.translated.config.displayMode.value == \"cover\" %} style=\"min-height: {{ element.translated.config.minHeight.value }};\"{% endif %}>
                                    {% block element_image_media %}
                                        {% set attributes = {
                                            'class': 'cms-image',
                                            'alt': (element.data.media.translated.alt ?: ''),
                                            'title': (element.data.media.translated.title ?: ''),
                                            'loading': 'lazy'
                                        } %}

                                        {% if element.translated.config.displayMode.value == 'cover' or element.translated.config.displayMode.value == 'contain' %}
                                            {% set attributes = attributes|merge({ 'data-object-fit': element.translated.config.displayMode.value }) %}
                                        {% endif %}

                                        {% sw_thumbnails 'cms-image-thumbnails' with {
                                            media: element.data.media
                                        } %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    {% endset %}

                    {% if element.translated.config.url.value %}
                        <a href=\"{{ element.translated.config.url.value }}\"
                           class=\"cms-image-link\"
                           {% if element.translated.config.newTab.value %}target=\"_blank\" rel=\"noopener\"{% endif %}>
                            {{ imageElement }}
                        </a>
                    {% else %}
                        {{ imageElement }}
                    {% endif %}
                {% endblock %}
            {% if config.verticalAlign.value %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-image.html.twig", "/home/melexsoft/Masaüstü/NewShopware/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-image.html.twig");
    }
}
