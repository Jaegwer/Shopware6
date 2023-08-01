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

/* @SwagBasicExample/storefront/layout/header/header.html.twig */
class __TwigTemplate_cae763035d39c59db7b7639bc9246e71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_header' => [$this, 'block_layout_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/header/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagBasicExample/storefront/layout/header/header.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@SwagBasicExample/storefront/layout/header/header.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_layout_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        // line 6
        echo "<div class=\"js-navigation-wrapper\"
     data-sticky-header=\"true\"
     data-sticky-header-options='{\"showOnScrollPosition\": \"";
        // line 8
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "showOnScrollPosition"), "html", null, true);
        echo "\"}'>
        <div class=\"text-center text-white\">


                    <p class=\"mb-0\">GRATIS VERSAND AB EINEN BESTELLWERT VON 60 €</p>


\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SwagBasicExample/storefront/layout/header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  59 => 6,  52 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/header/header.html.twig' %}



{% block layout_header%}
<div class=\"js-navigation-wrapper\"
     data-sticky-header=\"true\"
     data-sticky-header-options='{\"showOnScrollPosition\": \"{{theme_config('showOnScrollPosition')}}\"}'>
        <div class=\"text-center text-white\">


                    <p class=\"mb-0\">GRATIS VERSAND AB EINEN BESTELLWERT VON 60 €</p>


\t\t{% endblock %}
", "@SwagBasicExample/storefront/layout/header/header.html.twig", "/home/melexsoft/Masaüstü/NewShopware/custom/plugins/SwagBasicExample/src/Resources/views/storefront/layout/header/header.html.twig");
    }
}
