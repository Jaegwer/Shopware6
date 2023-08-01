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

/* @SwagBasicExample/storefront/layout/navigation/navigation.html.twig */
class __TwigTemplate_6ad9aefc70cf9d6afaf10bcef083e810 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_main_navigation' => [$this, 'block_layout_main_navigation'],
            'layout_main_navigation_navbar' => [$this, 'block_layout_main_navigation_navbar'],
            'layout_main_navigation_menu' => [$this, 'block_layout_main_navigation_menu'],
            'layout_main_navigation_menu_home' => [$this, 'block_layout_main_navigation_menu_home'],
            'layout_main_navigation_menu_items' => [$this, 'block_layout_main_navigation_menu_items'],
            'layout_main_navigation_menu_item' => [$this, 'block_layout_main_navigation_menu_item'],
            'layout_main_navigation_menu_flyout_wrapper' => [$this, 'block_layout_main_navigation_menu_flyout_wrapper'],
            'layout_main_navigation_menu_flyout_container' => [$this, 'block_layout_main_navigation_menu_flyout_container'],
            'layout_main_navigation_menu_flyouts' => [$this, 'block_layout_main_navigation_menu_flyouts'],
            'layout_main_navigation_menu_flyout' => [$this, 'block_layout_main_navigation_menu_flyout'],
            'layout_main_navigation_menu_flyout_include' => [$this, 'block_layout_main_navigation_menu_flyout_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagBasicExample/storefront/layout/navigation/navigation.html.twig"));

        // line 1
        $this->displayBlock('layout_main_navigation', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_main_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation"));

        // line 2
        echo "
\t<div class=\"main-navigation\" id=\"mainNavigation\" data-flyout-menu=\"true\">
\t\t";
        // line 4
        $this->displayBlock('layout_main_navigation_navbar', $context, $blocks);
        // line 68
        echo "
\t\t";
        // line 69
        $this->displayBlock('layout_main_navigation_menu_flyout_wrapper', $context, $blocks);
        // line 99
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_layout_main_navigation_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_navbar"));

        // line 5
        echo "\t\t\t<div class=\"\">
\t\t\t\t";
        // line 6
        $this->displayBlock('layout_main_navigation_menu', $context, $blocks);
        // line 66
        echo "\t\t\t</div>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_layout_main_navigation_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu"));

        // line 7
        echo "\t\t\t\t\t<nav class=\"nav main-navigation-menu p-4 grid grid-cols-2 gap-36\" itemscope=\"itemscope\" itemtype=\"http://schema.org/SiteNavigationElement\">
\t\t\t\t\t<ul class=\"flex justify-around items-end medium\">
\t\t\t\t\t";
        // line 9
        $context["homeLabel"] = ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 9), "translated", [], "any", false, true, false, 9), "homeName", [], "any", true, true, false, 9)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 9), "translated", [], "any", false, true, false, 9), "homeName", [], "any", false, false, false, 9), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink")));
        // line 10
        echo "\t\t\t\t\t\t";
        $this->displayBlock('layout_main_navigation_menu_home', $context, $blocks);
        // line 13
        echo "
\t\t\t\t\t\t";
        // line 14
        $this->displayBlock('layout_main_navigation_menu_items', $context, $blocks);
        // line 41
        echo "                    </ul>
\t\t\t\t\t<div class=\"\">
\t\t\t<ul class=\"flex justify-evenly items-center text-black\">
\t\t\t\t<li>
\t\t\t\t\t<input class=\"w-80\" id=\"search-box\" placeholder=\" Wonach Suchst Du?\" type=\"text\" />
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t";
        // line 48
        $this->loadTemplate("@SwagBasicExample/storefront/layout/navigation/actions/language-widget.html.twig", "@SwagBasicExample/storefront/layout/navigation/navigation.html.twig", 48)->display($context);
        // line 49
        echo "\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 51
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/swagbasicexample/8324223_ui_essential_app_avatar_profile_icon (1).png", "asset"), "html", null, true);
        echo "\">
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"relative inline-flex items-center flow-root\" href=\"\">
\t\t\t\t\t\t<img src=\"";
        // line 55
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/swagbasicexample/shop.png", "asset"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"absolute inline-flex items-center justify-center w-4 h-4 text-xs font-bold text-white bg-red-500 rounded-full -top-1 -right-1\">
\t\t\t\t\t\t\t3
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_layout_main_navigation_menu_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_home"));

        // line 11
        echo "\t\t\t\t\t\t\t";
        $this->loadTemplate("@SwagBasicExample/storefront/layout/navigation/logo.html.twig", "@SwagBasicExample/storefront/layout/navigation/navigation.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_layout_main_navigation_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_items"));

        // line 15
        echo "\t\t\t\t\t\t\t";
        $context["activePath"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 15), "navigation", [], "any", false, false, false, 15), "active", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15);
        // line 16
        echo "
\t\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 17), "navigation", [], "any", false, false, false, 17), "tree", [], "any", false, false, false, 17));
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
            // line 18
            echo "\t\t\t\t\t\t\t\t";
            $context["category"] = sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 18);
            // line 19
            echo "\t\t\t\t\t\t\t\t";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19);
            // line 20
            echo "
\t\t\t\t\t\t\t\t";
            // line 21
            $this->displayBlock('layout_main_navigation_menu_item', $context, $blocks);
            // line 39
            echo "\t\t\t\t\t\t\t";
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
        // line 40
        echo "\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_layout_main_navigation_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_item"));

        // line 22
        echo "\t\t\t\t\t\t\t\t\t";
        if ((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 22) == "folder")) {
            // line 23
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"nav-link\" ";
            if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 23)) > 0)) {
                echo " data-flyout-menu-trigger=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\" ";
            }
            echo " title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-navigation-link-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span itemprop=\"name\">";
            // line 25
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link ";
            // line 31
            if (((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 31) == sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "navigation", [], "any", false, false, false, 31), "active", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)) || twig_in_filter(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 31), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\" href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            echo "\" itemprop=\"url\" ";
            if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 31)) > 0)) {
                echo " data-flyout-menu-trigger=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\" ";
            }
            echo " ";
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                echo " target=\"_blank\" ";
            }
            echo " title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-navigation-link-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span itemprop=\"name\">";
            // line 33
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 69
    public function block_layout_main_navigation_menu_flyout_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_wrapper"));

        // line 70
        echo "\t\t\t";
        $context["navigationChildrenCount"] = 0;
        // line 71
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 71), "navigation", [], "any", false, false, false, 71), "tree", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 72
            echo "\t\t\t\t";
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 72), "childCount", [], "any", false, false, false, 72) > 0)) {
                // line 73
                echo "\t\t\t\t\t";
                $context["navigationChildrenCount"] = (($context["navigationChildrenCount"] ?? null) + 1);
                // line 74
                echo "\t\t\t\t";
            }
            // line 75
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
\t\t\t";
        // line 77
        if ((($context["navigationChildrenCount"] ?? null) > 0)) {
            // line 78
            echo "\t\t\t\t";
            $this->displayBlock('layout_main_navigation_menu_flyout_container', $context, $blocks);
            // line 97
            echo "\t\t\t";
        }
        // line 98
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 78
    public function block_layout_main_navigation_menu_flyout_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_container"));

        // line 79
        echo "\t\t\t\t\t<div class=\"navigation-flyouts\">
\t\t\t\t\t\t";
        // line 80
        $this->displayBlock('layout_main_navigation_menu_flyouts', $context, $blocks);
        // line 95
        echo "\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 80
    public function block_layout_main_navigation_menu_flyouts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyouts"));

        // line 81
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 81), "navigation", [], "any", false, false, false, 81), "tree", [], "any", false, false, false, 81));
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
            // line 82
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, $context["treeItem"], "children", [], "any", false, false, false, 82)) > 0)) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t";
                $this->displayBlock('layout_main_navigation_menu_flyout', $context, $blocks);
                // line 92
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t\t\t";
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
        // line 94
        echo "\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_layout_main_navigation_menu_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout"));

        // line 84
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"navigation-flyout\" data-flyout-menu-id=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 86
        $this->displayBlock('layout_main_navigation_menu_flyout_include', $context, $blocks);
        // line 89
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 86
    public function block_layout_main_navigation_menu_flyout_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_include"));

        // line 87
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $this->loadTemplate("@SwagBasicExample/storefront/layout/navigation/flyout.html.twig", "@SwagBasicExample/storefront/layout/navigation/navigation.html.twig", 87)->display(twig_to_array(["navigationTree" => ($context["treeItem"] ?? null), "level" => (($context["level"] ?? null) + 1), "page" => ($context["page"] ?? null)]));
        // line 88
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SwagBasicExample/storefront/layout/navigation/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  469 => 88,  466 => 87,  459 => 86,  450 => 89,  448 => 86,  442 => 84,  435 => 83,  428 => 94,  414 => 93,  411 => 92,  408 => 83,  405 => 82,  387 => 81,  380 => 80,  372 => 95,  370 => 80,  367 => 79,  360 => 78,  353 => 98,  350 => 97,  347 => 78,  345 => 77,  342 => 76,  336 => 75,  333 => 74,  330 => 73,  327 => 72,  322 => 71,  319 => 70,  312 => 69,  305 => 38,  297 => 33,  276 => 31,  273 => 30,  265 => 25,  253 => 23,  250 => 22,  243 => 21,  236 => 40,  222 => 39,  220 => 21,  217 => 20,  214 => 19,  211 => 18,  194 => 17,  191 => 16,  188 => 15,  181 => 14,  174 => 12,  171 => 11,  164 => 10,  146 => 55,  139 => 51,  135 => 49,  133 => 48,  124 => 41,  122 => 14,  119 => 13,  116 => 10,  114 => 9,  110 => 7,  103 => 6,  95 => 66,  93 => 6,  90 => 5,  83 => 4,  75 => 99,  73 => 69,  70 => 68,  68 => 4,  64 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_main_navigation %}

\t<div class=\"main-navigation\" id=\"mainNavigation\" data-flyout-menu=\"true\">
\t\t{% block layout_main_navigation_navbar %}
\t\t\t<div class=\"\">
\t\t\t\t{% block layout_main_navigation_menu %}
\t\t\t\t\t<nav class=\"nav main-navigation-menu p-4 grid grid-cols-2 gap-36\" itemscope=\"itemscope\" itemtype=\"http://schema.org/SiteNavigationElement\">
\t\t\t\t\t<ul class=\"flex justify-around items-end medium\">
\t\t\t\t\t{% set homeLabel = context.salesChannel.translated.homeName|default(\"general.homeLink\"|trans) %}
\t\t\t\t\t\t{% block layout_main_navigation_menu_home %}
\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/layout/navigation/logo.html.twig' %}
\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t{% block layout_main_navigation_menu_items %}
\t\t\t\t\t\t\t{% set activePath = page.header.navigation.active.path %}

\t\t\t\t\t\t\t{% for treeItem in page.header.navigation.tree %}
\t\t\t\t\t\t\t\t{% set category = treeItem.category %}
\t\t\t\t\t\t\t\t{% set name = category.translated.name %}

\t\t\t\t\t\t\t\t{% block layout_main_navigation_menu_item %}
\t\t\t\t\t\t\t\t\t{% if category.type == 'folder' %}
\t\t\t\t\t\t\t\t\t\t<div class=\"nav-link\" {% if treeItem.children|length > 0 %} data-flyout-menu-trigger=\"{{ category.id }}\" {% endif %} title=\"{{ name }}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-navigation-link-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span itemprop=\"name\">{{ name }}</span>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link {% if category.id == page.header.navigation.active.id or category.id in activePath %} active{% endif %}\" href=\"{{ category_url(category) }}\" itemprop=\"url\" {% if treeItem.children|length > 0 %} data-flyout-menu-trigger=\"{{ category.id }}\" {% endif %} {% if category_linknewtab(category) %} target=\"_blank\" {% endif %} title=\"{{ name }}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-navigation-link-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span itemprop=\"name\">{{ name }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endblock %}
                    </ul>
\t\t\t\t\t<div class=\"\">
\t\t\t<ul class=\"flex justify-evenly items-center text-black\">
\t\t\t\t<li>
\t\t\t\t\t<input class=\"w-80\" id=\"search-box\" placeholder=\" Wonach Suchst Du?\" type=\"text\" />
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t{% sw_include '@Storefront/storefront/layout/navigation/actions/language-widget.html.twig' %}
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"{{ asset('bundles/swagbasicexample/8324223_ui_essential_app_avatar_profile_icon (1).png', 'asset') }}\">
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"relative inline-flex items-center flow-root\" href=\"\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/swagbasicexample/shop.png', 'asset') }}\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"absolute inline-flex items-center justify-center w-4 h-4 text-xs font-bold text-white bg-red-500 rounded-full -top-1 -right-1\">
\t\t\t\t\t\t\t3
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t{% endblock %}

\t\t{% block layout_main_navigation_menu_flyout_wrapper %}
\t\t\t{% set navigationChildrenCount = 0 %}
\t\t\t{% for treeItem in page.header.navigation.tree %}
\t\t\t\t{% if treeItem.category.childCount > 0 %}
\t\t\t\t\t{% set navigationChildrenCount = navigationChildrenCount + 1 %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t\t{% if navigationChildrenCount > 0 %}
\t\t\t\t{% block layout_main_navigation_menu_flyout_container %}
\t\t\t\t\t<div class=\"navigation-flyouts\">
\t\t\t\t\t\t{% block layout_main_navigation_menu_flyouts %}
\t\t\t\t\t\t\t{% for treeItem in page.header.navigation.tree %}
\t\t\t\t\t\t\t\t{% if treeItem.children|length > 0 %}
\t\t\t\t\t\t\t\t\t{% block layout_main_navigation_menu_flyout %}
\t\t\t\t\t\t\t\t\t\t<div class=\"navigation-flyout\" data-flyout-menu-id=\"{{ treeItem.category.id }}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t{% block layout_main_navigation_menu_flyout_include %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/layout/navigation/flyout.html.twig' with {navigationTree: treeItem, level: level+1, page: page} only %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t{% endif %}
\t\t{% endblock %}
\t</div>
{% endblock %}
", "@SwagBasicExample/storefront/layout/navigation/navigation.html.twig", "/home/melexsoft/Masaüstü/NewShopware/custom/plugins/SwagBasicExample/src/Resources/views/storefront/layout/navigation/navigation.html.twig");
    }
}
