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

/* @SwagBasicExample/storefront/layout/navigation/categories.html.twig */
class __TwigTemplate_a8fe220959ee0515b8a666147d33f27f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_categories' => [$this, 'block_layout_navigation_categories'],
            'layout_navigation_categories_item' => [$this, 'block_layout_navigation_categories_item'],
            'layout_navigation_categories_item_link' => [$this, 'block_layout_navigation_categories_item_link'],
            'layout_navigation_categories_recoursion' => [$this, 'block_layout_navigation_categories_recoursion'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagBasicExample/storefront/layout/navigation/categories.html.twig"));

        // line 1
        $this->displayBlock('layout_navigation_categories', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_navigation_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories"));

        // line 2
        echo "    ";
        $context["navigationMaxDepth"] = 3;
        // line 3
        echo "
    ";
        // line 4
        if ( !($context["level"] ?? null)) {
            // line 5
            echo "        ";
            $context["level"] = 0;
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $context["activeId"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "navigation", [], "any", false, false, false, 7), "active", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
        // line 8
        echo "
    ";
        // line 9
        $context["activePath"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "navigation", [], "any", false, false, false, 9), "active", [], "any", false, false, false, 9), "path", [], "any", false, false, false, 9);
        // line 10
        echo "
    <div class=\"";
        // line 11
        if ((($context["level"] ?? null) == 0)) {
            echo "row ";
        }
        echo "navigation-flyout-categories is-level-";
        echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigationTree"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 13
            echo "            ";
            $context["id"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13);
            // line 14
            echo "            ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 14), "translated", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14);
            // line 15
            echo "            ";
            $context["link"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 15));
            // line 16
            echo "
            ";
            // line 17
            $this->displayBlock('layout_navigation_categories_item', $context, $blocks);
            // line 49
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_layout_navigation_categories_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item"));

        // line 18
        echo "                <div class=\"";
        if ((($context["level"] ?? null) == 0)) {
            if (($context["navigationMedia"] ?? null)) {
                echo "col-auto ";
            } else {
                echo "col-3 ";
            }
        }
        echo "navigation-flyout-col\">
                    ";
        // line 19
        $this->displayBlock('layout_navigation_categories_item_link', $context, $blocks);
        // line 37
        echo "
                    ";
        // line 38
        $this->displayBlock('layout_navigation_categories_recoursion', $context, $blocks);
        // line 47
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_layout_navigation_categories_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item_link"));

        // line 20
        echo "                        ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 20), "type", [], "any", false, false, false, 20) == "folder")) {
            // line 21
            echo "                            <div class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"
                                 title=\"";
            // line 22
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 23
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </div>
                        ";
        } else {
            // line 26
            echo "                            <a class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            if (((($context["id"] ?? null) == ($context["activeId"] ?? null)) || twig_in_filter(($context["id"] ?? null), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\"
                               href=\"";
            // line 27
            echo sw_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\"
                               itemprop=\"url\"
                               ";
            // line 29
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 29))) {
                echo "target=\"_blank\"
                                   ";
                // line 30
                if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 30), "linkType", [], "any", false, false, false, 30) == "external")) {
                    echo "rel=\"noopener noreferrer\"";
                }
                // line 31
                echo "                               ";
            }
            // line 32
            echo "                               title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 33
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </a>
                        ";
        }
        // line 36
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_layout_navigation_categories_recoursion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_recoursion"));

        // line 39
        echo "                        ";
        if ((($context["level"] ?? null) < ($context["navigationMaxDepth"] ?? null))) {
            // line 40
            echo "                            ";
            $this->loadTemplate("@SwagBasicExample/storefront/layout/navigation/categories.html.twig", "@SwagBasicExample/storefront/layout/navigation/categories.html.twig", 40)->display(twig_to_array(["navigationTree" => sw_get_attribute($this->env, $this->source,             // line 41
($context["treeItem"] ?? null), "children", [], "any", false, false, false, 41), "level" => (            // line 42
($context["level"] ?? null) + 1), "page" =>             // line 43
($context["page"] ?? null)]));
            // line 45
            echo "                        ";
        }
        // line 46
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SwagBasicExample/storefront/layout/navigation/categories.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  262 => 46,  259 => 45,  257 => 43,  256 => 42,  255 => 41,  253 => 40,  250 => 39,  243 => 38,  236 => 36,  230 => 33,  225 => 32,  222 => 31,  218 => 30,  214 => 29,  209 => 27,  201 => 26,  195 => 23,  191 => 22,  186 => 21,  183 => 20,  176 => 19,  168 => 47,  166 => 38,  163 => 37,  161 => 19,  150 => 18,  143 => 17,  135 => 50,  121 => 49,  119 => 17,  116 => 16,  113 => 15,  110 => 14,  107 => 13,  90 => 12,  82 => 11,  79 => 10,  77 => 9,  74 => 8,  71 => 7,  68 => 6,  65 => 5,  63 => 4,  60 => 3,  57 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_navigation_categories %}
    {% set navigationMaxDepth = 3 %}

    {% if not level %}
        {% set level = 0 %}
    {% endif %}
    {% set activeId = page.header.navigation.active.id %}

    {% set activePath = page.header.navigation.active.path %}

    <div class=\"{% if level == 0 %}row {% endif %}navigation-flyout-categories is-level-{{ level }}\">
        {% for treeItem in navigationTree %}
            {% set id = treeItem.category.id %}
            {% set name = treeItem.category.translated.name %}
            {% set link = category_url(treeItem.category) %}

            {% block layout_navigation_categories_item %}
                <div class=\"{% if level == 0 %}{% if navigationMedia %}col-auto {% else %}col-3 {% endif %}{% endif %}navigation-flyout-col\">
                    {% block layout_navigation_categories_item_link %}
                        {% if treeItem.category.type == 'folder' %}
                            <div class=\"nav-item nav-link navigation-flyout-link is-level-{{ level }}\"
                                 title=\"{{ name }}\">
                                <span itemprop=\"name\">{{ name }}</span>
                            </div>
                        {% else %}
                            <a class=\"nav-item nav-link navigation-flyout-link is-level-{{ level }}{% if id == activeId or id in activePath %} active{% endif %}\"
                               href=\"{{ link }}\"
                               itemprop=\"url\"
                               {% if category_linknewtab(treeItem.category) %}target=\"_blank\"
                                   {% if treeItem.category.linkType == \"external\" %}rel=\"noopener noreferrer\"{% endif %}
                               {% endif %}
                               title=\"{{ name }}\">
                                <span itemprop=\"name\">{{ name }}</span>
                            </a>
                        {% endif %}
                    {% endblock %}

                    {% block layout_navigation_categories_recoursion %}
                        {% if level < navigationMaxDepth %}
                            {% sw_include '@Storefront/storefront/layout/navigation/categories.html.twig' with {
                                navigationTree: treeItem.children,
                                level: level + 1,
                                page: page
                            } only %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}
        {% endfor %}
    </div>
{% endblock %}
", "@SwagBasicExample/storefront/layout/navigation/categories.html.twig", "/home/melexsoft/Masaüstü/NewShopware/custom/plugins/SwagBasicExample/src/Resources/views/storefront/layout/navigation/categories.html.twig");
    }
}
