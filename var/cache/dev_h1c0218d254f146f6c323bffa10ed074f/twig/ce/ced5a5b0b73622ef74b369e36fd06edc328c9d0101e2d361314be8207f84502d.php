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

/* @SwagBasicExample/storefront/layout/navigation/flyout.html.twig */
class __TwigTemplate_67f4f183eddcd4c8e42e430bcd0a8e0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_flyout' => [$this, 'block_layout_navigation_flyout'],
            'layout_navigation_flyout_bar' => [$this, 'block_layout_navigation_flyout_bar'],
            'layout_navigation_flyout_bar_category' => [$this, 'block_layout_navigation_flyout_bar_category'],
            'layout_navigation_flyout_bar_category_link' => [$this, 'block_layout_navigation_flyout_bar_category_link'],
            'layout_navigation_flyout_content' => [$this, 'block_layout_navigation_flyout_content'],
            'layout_navigation_flyout_categories' => [$this, 'block_layout_navigation_flyout_categories'],
            'layout_navigation_flyout_categories_recoursion' => [$this, 'block_layout_navigation_flyout_categories_recoursion'],
            'layout_navigation_flyout_teaser' => [$this, 'block_layout_navigation_flyout_teaser'],
            'layout_navigation_flyout_teaser_image' => [$this, 'block_layout_navigation_flyout_teaser_image'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagBasicExample/storefront/layout/navigation/flyout.html.twig"));

        // line 1
        $this->displayBlock('layout_navigation_flyout', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_navigation_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout"));

        // line 2
        echo "    ";
        $context["category"] = sw_get_attribute($this->env, $this->source, ($context["navigationTree"] ?? null), "category", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $this->displayBlock('layout_navigation_flyout_bar', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('layout_navigation_flyout_content', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_layout_navigation_flyout_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar"));

        // line 5
        echo "        <div class=\"row navigation-flyout-bar\">
            ";
        // line 6
        $this->displayBlock('layout_navigation_flyout_bar_category', $context, $blocks);
        // line 22
        echo "

        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_layout_navigation_flyout_bar_category($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_category"));

        // line 7
        echo "                <div class=\"col\">
                    <div class=\"\">
                        ";
        // line 9
        $this->displayBlock('layout_navigation_flyout_bar_category_link', $context, $blocks);
        // line 19
        echo "                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_layout_navigation_flyout_bar_category_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_category_link"));

        // line 10
        echo "                            ";
        if ((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 10) == "page")) {
            // line 11
            echo "                                <a class=\"nav-link\"
                                   href=\"";
            // line 12
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\"
                                   itemprop=\"url\"
                                   title=\"";
            // line 14
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">

                                </a>
                            ";
        }
        // line 18
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_layout_navigation_flyout_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_content"));

        // line 28
        echo "        <div class=\"row navigation-flyout-content mx-auto\">
            ";
        // line 29
        $this->displayBlock('layout_navigation_flyout_categories', $context, $blocks);
        // line 42
        echo "
            ";
        // line 43
        $this->displayBlock('layout_navigation_flyout_teaser', $context, $blocks);
        // line 73
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_layout_navigation_flyout_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_categories"));

        // line 30
        echo "                <div class=\"";
        if (sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 30)) {
            echo "col-8 col-xl-9";
        } else {
            echo "col";
        }
        echo "\">
                    <div class=\"navigation-flyout-categories\">
                        ";
        // line 32
        $this->displayBlock('layout_navigation_flyout_categories_recoursion', $context, $blocks);
        // line 39
        echo "                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
    public function block_layout_navigation_flyout_categories_recoursion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_categories_recoursion"));

        // line 33
        echo "                            ";
        $this->loadTemplate("@SwagBasicExample/storefront/layout/navigation/categories.html.twig", "@SwagBasicExample/storefront/layout/navigation/flyout.html.twig", 33)->display(twig_to_array(["navigationTree" => sw_get_attribute($this->env, $this->source,         // line 34
($context["navigationTree"] ?? null), "children", [], "any", false, false, false, 34), "navigationMedia" => sw_get_attribute($this->env, $this->source,         // line 35
($context["category"] ?? null), "media", [], "any", false, false, false, 35), "page" =>         // line 36
($context["page"] ?? null)]));
        // line 38
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    public function block_layout_navigation_flyout_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_teaser"));

        // line 44
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 44)) {
            // line 45
            echo "                <div class=\"col-4 col-xl-3\">
                    <div class=\"navigation-flyout-teaser\">
                        ";
            // line 47
            $this->displayBlock('layout_navigation_flyout_teaser_image', $context, $blocks);
            // line 69
            echo "                    </div>
                </div>
                ";
        }
        // line 72
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 47
    public function block_layout_navigation_flyout_teaser_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_teaser_image"));

        // line 48
        echo "                            <a class=\"navigation-flyout-teaser-image-container\"
                               href=\"";
        // line 49
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
        echo "\"
                               ";
        // line 50
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
            echo "target=\"_blank\"
                                   ";
            // line 51
            if ((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "linkType", [], "any", false, false, false, 51) == "external")) {
                echo "rel=\"noopener noreferrer\"";
            }
            // line 52
            echo "                               ";
        }
        // line 53
        echo "                               title=\"";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 54
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@SwagBasicExample/storefront/layout/navigation/flyout.html.twig", 54);
        })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,         // line 55
($context["category"] ?? null), "media", [], "any", false, false, false, 55), "sizes" => ["default" => "350px"], "attributes" => ["class" => "navigation-flyout-teaser-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 61
($context["category"] ?? null), "media", [], "any", false, false, false, 61), "translated", [], "any", false, false, false, 61), "alt", [], "any", false, false, false, 61)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 61), "translated", [], "any", false, false, false, 61), "alt", [], "any", false, false, false, 61)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 62
($context["category"] ?? null), "media", [], "any", false, false, false, 62), "translated", [], "any", false, false, false, 62), "title", [], "any", false, false, false, 62)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 62), "translated", [], "any", false, false, false, 62), "title", [], "any", false, false, false, 62)) : ("")), "data-object-fit" => "cover", "loading" => "lazy"], "name" => "navigation-flyout-teaser-image-thumbnails"]));
        // line 67
        echo "                            </a>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SwagBasicExample/storefront/layout/navigation/flyout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  299 => 67,  297 => 62,  296 => 61,  295 => 55,  288 => 54,  283 => 53,  280 => 52,  276 => 51,  272 => 50,  268 => 49,  265 => 48,  258 => 47,  251 => 72,  246 => 69,  244 => 47,  240 => 45,  237 => 44,  230 => 43,  223 => 38,  221 => 36,  220 => 35,  219 => 34,  217 => 33,  210 => 32,  201 => 39,  199 => 32,  189 => 30,  182 => 29,  174 => 73,  172 => 43,  169 => 42,  167 => 29,  164 => 28,  157 => 27,  150 => 18,  143 => 14,  138 => 12,  135 => 11,  132 => 10,  125 => 9,  116 => 19,  114 => 9,  110 => 7,  103 => 6,  93 => 22,  91 => 6,  88 => 5,  81 => 4,  74 => 27,  71 => 26,  68 => 4,  65 => 3,  62 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_navigation_flyout %}
    {% set category = navigationTree.category %}
    {% set name = category.translated.name %}
    {% block layout_navigation_flyout_bar %}
        <div class=\"row navigation-flyout-bar\">
            {% block layout_navigation_flyout_bar_category %}
                <div class=\"col\">
                    <div class=\"\">
                        {% block layout_navigation_flyout_bar_category_link %}
                            {% if category.type == 'page' %}
                                <a class=\"nav-link\"
                                   href=\"{{ seoUrl('frontend.navigation.page', { navigationId: category.id }) }}\"
                                   itemprop=\"url\"
                                   title=\"{{ name }}\">

                                </a>
                            {% endif %}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}


        </div>
    {% endblock %}

    {% block layout_navigation_flyout_content %}
        <div class=\"row navigation-flyout-content mx-auto\">
            {% block layout_navigation_flyout_categories %}
                <div class=\"{% if category.media %}col-8 col-xl-9{% else %}col{% endif %}\">
                    <div class=\"navigation-flyout-categories\">
                        {% block layout_navigation_flyout_categories_recoursion %}
                            {% sw_include '@Storefront/storefront/layout/navigation/categories.html.twig' with {
                                navigationTree: navigationTree.children,
                                navigationMedia: category.media,
                                page: page
                            } only %}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}

            {% block layout_navigation_flyout_teaser %}
                {% if category.media %}
                <div class=\"col-4 col-xl-3\">
                    <div class=\"navigation-flyout-teaser\">
                        {% block layout_navigation_flyout_teaser_image %}
                            <a class=\"navigation-flyout-teaser-image-container\"
                               href=\"{{ category_url(category) }}\"
                               {% if category_linknewtab(category) %}target=\"_blank\"
                                   {% if category.linkType == \"external\" %}rel=\"noopener noreferrer\"{% endif %}
                               {% endif %}
                               title=\"{{ name }}\">
                                {% sw_thumbnails 'navigation-flyout-teaser-image-thumbnails' with {
                                    media: category.media,
                                    sizes: {
\t\t\t\t\t\t\t\t\t\t'default': '350px'
                                    },
                                    attributes: {
                                        'class': 'navigation-flyout-teaser-image',
                                        'alt': (category.media.translated.alt ?: ''),
                                        'title': (category.media.translated.title ?: ''),
                                        'data-object-fit': 'cover',
                                        'loading': 'lazy'
                                    }
                                } %}
                            </a>
                        {% endblock %}
                    </div>
                </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@SwagBasicExample/storefront/layout/navigation/flyout.html.twig", "/home/melexsoft/Masaüstü/NewShopware/custom/plugins/SwagBasicExample/src/Resources/views/storefront/layout/navigation/flyout.html.twig");
    }
}
