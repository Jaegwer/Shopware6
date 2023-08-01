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

/* @SwagBasicExample/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_1b8bff0202772b3f9f5274c062c91b38 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_footer_navigation' => [$this, 'block_layout_footer_navigation'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/footer/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagBasicExample/storefront/layout/footer/footer.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@SwagBasicExample/storefront/layout/footer/footer.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_footer_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation"));

        // line 4
        echo "
<div class=\"ml-16 p-16 hidden md:flex\">
\t\t<div class=\"hidden md:flex justify-center items-center\">
\t\t\t<div class=\"grid grid-cols-5 gap-10 mt-5\">
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>NOCH FRAGEN?</h4>
\t\t\t\t\t<p><i class=\"fas fa-envelope\"></i> info@fcsp-shop.com</p>
\t\t\t\t\t<p><i class=\"fas fa-phone\"></i> 040 317 874 888</p>
\t\t\t\t\t<p><i class=\"fas fa-clock\"></i> Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>SICHER BEZAHLEN</h4>
\t\t\t\t\t<div class=\"grid grid-cols-3 gap-2\">
\t\t\t\t\t\t<img src=\"";
        // line 17
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/swagbasicexample/paypal.png", "asset"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 18
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/swagbasicexample/visa.png", "asset"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 19
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/swagbasicexample/mastercard.png", "asset"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 20
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/swagbasicexample/elv.png", "asset"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>UNSERE STORES</h4>
\t\t\t\t\t<p>Harald-Stender-Platz 1</p>
\t\t\t\t\t<p>20359 Sankt Pauli</p>
\t\t\t\t\t<p>Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex items-end\">
\t\t\t\t\t<div class=\"grid grid-cols-1 gap-2 \">
\t\t\t\t\t\t<p>Reeperbahn 63-65</p>
\t\t\t\t\t\t<p>20359 Hamburg</p>
\t\t\t\t\t\t<p>Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>FC ST. PAULI</h4>
\t\t\t\t\t<p>AGB</p>
\t\t\t\t\t<p>Datenschutz</p>
\t\t\t\t\t<p>Impressum</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>FCSP-SHOPS</h4>
\t\t\t\t\t<p>Die Shops</p>
\t\t\t\t\t<p>Öffnungszeiten</p>
\t\t\t\t\t<p>Anfahrt</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>FANS & VIERTEL</h4>
\t\t\t\t\t<p>Fanladen</p>
\t\t\t\t\t<p>Podcast</p>
\t\t\t\t\t<p>Stadtteilführung</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>FCSP</h4>
\t\t\t\t\t<p>Team</p>
\t\t\t\t\t<p>Rabauken</p>
\t\t\t\t\t<p>Museum</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>HILFE</h4>
\t\t\t\t\t<p>Bezahlung & Versand</p>
\t\t\t\t\t<p>Rücksendung & Retouren</p>
\t\t\t\t\t<p>FAQ</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex items-end\">
\t\t\t\t\t<div class=\"grid grid-cols-2 gap-2\">
\t\t\t\t\t\t<img src=\"";
        // line 68
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/swagbasicexample/St. Pauli.png", "asset"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 69
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/swagbasicexample/Totenkopf_Weiss.png", "asset"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"md:hidden justify-center items-center p-4\">
\t\t<div class=\"grid grid-cols-6 gap-16 mt-5\">
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>NOCH FRAGEN?</h4>
\t\t\t\t<p><i class=\"fas fa-envelope mr-2\"></i>info@fcsp-shop.com</p>
\t\t\t\t<p><i class=\"fas fa-phone mr-2\"></i>040 317 874 888</p>
\t\t\t\t<p><i class=\"fas fa-clock mr-2\"></i>Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>SICHER BEZAHLEN</h4>
\t\t\t\t<div class=\"grid grid-cols-3 gap-2\">
\t\t\t\t\t<img src=\"/St.-Pauli/assets/images/paypal.png\" alt=\"\" />
\t\t\t\t\t<img src=\"/St.-Pauli/assets/images/visa.png\" alt=\"\" />
\t\t\t\t\t<img src=\"/St.-Pauli/assets/images/mastercard.png\" alt=\"\" />
\t\t\t\t\t<img src=\"/St.-Pauli/assets/images/elv.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>UNSERE STORES</h4>
\t\t\t\t<p>Harald-Stender-Platz 1</p>
\t\t\t\t<p>20359 Sankt Pauli</p>
\t\t\t\t<p>Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t</div>
\t\t\t<div class=\"flex items-end col-span-3\">
\t\t\t\t<div class=\"grid grid-cols-1 whitespace-nowrap\">
\t\t\t\t\t<p>Reeperbahn 63-65</p>
\t\t\t\t\t<p>20359 Hamburg</p>
\t\t\t\t\t<p>Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>FC ST. PAULI</h4>
\t\t\t\t<p>AGB</p>
\t\t\t\t<p>Datenschutz</p>
\t\t\t\t<p>Impressum</p>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>FCSP-SHOPS</h4>
\t\t\t\t<p>Die Shops</p>
\t\t\t\t<p>Öffnungszeiten</p>
\t\t\t\t<p>Anfahrt</p>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>FANS & VIERTEL</h4>
\t\t\t\t<p>Fanladen</p>
\t\t\t\t<p>Podcast</p>
\t\t\t\t<p>Stadtteilführung</p>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>FCSP</h4>
\t\t\t\t<p>Team</p>
\t\t\t\t<p>Rabauken</p>
\t\t\t\t<p>Museum</p>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>HILFE</h4>
\t\t\t\t<p>Bezahlung & Versand</p>
\t\t\t\t<p>Rücksendung & Retouren</p>
\t\t\t\t<p>FAQ</p>
\t\t\t</div>
\t\t\t<div class=\"flex items-end col-span-3\">
\t\t\t\t<div class=\"grid grid-cols-2 gap-2\">
\t\t\t\t\t<img src=\"/St.-Pauli/assetsimages/St. Pauli.png\" alt=\"\" />
\t\t\t\t\t<img src=\"/St.-Pauli/assetsimages/Totenkopf_Weiss.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SwagBasicExample/storefront/layout/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 69,  137 => 68,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  59 => 4,  52 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source(" {% sw_extends '@Storefront/storefront/layout/footer/footer.html.twig' %}

{% block layout_footer_navigation %}

<div class=\"ml-16 p-16 hidden md:flex\">
\t\t<div class=\"hidden md:flex justify-center items-center\">
\t\t\t<div class=\"grid grid-cols-5 gap-10 mt-5\">
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>NOCH FRAGEN?</h4>
\t\t\t\t\t<p><i class=\"fas fa-envelope\"></i> info@fcsp-shop.com</p>
\t\t\t\t\t<p><i class=\"fas fa-phone\"></i> 040 317 874 888</p>
\t\t\t\t\t<p><i class=\"fas fa-clock\"></i> Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>SICHER BEZAHLEN</h4>
\t\t\t\t\t<div class=\"grid grid-cols-3 gap-2\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/swagbasicexample/paypal.png', 'asset') }}\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/swagbasicexample/visa.png', 'asset') }}\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/swagbasicexample/mastercard.png', 'asset') }}\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/swagbasicexample/elv.png', 'asset') }}\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>UNSERE STORES</h4>
\t\t\t\t\t<p>Harald-Stender-Platz 1</p>
\t\t\t\t\t<p>20359 Sankt Pauli</p>
\t\t\t\t\t<p>Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex items-end\">
\t\t\t\t\t<div class=\"grid grid-cols-1 gap-2 \">
\t\t\t\t\t\t<p>Reeperbahn 63-65</p>
\t\t\t\t\t\t<p>20359 Hamburg</p>
\t\t\t\t\t\t<p>Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>FC ST. PAULI</h4>
\t\t\t\t\t<p>AGB</p>
\t\t\t\t\t<p>Datenschutz</p>
\t\t\t\t\t<p>Impressum</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>FCSP-SHOPS</h4>
\t\t\t\t\t<p>Die Shops</p>
\t\t\t\t\t<p>Öffnungszeiten</p>
\t\t\t\t\t<p>Anfahrt</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>FANS & VIERTEL</h4>
\t\t\t\t\t<p>Fanladen</p>
\t\t\t\t\t<p>Podcast</p>
\t\t\t\t\t<p>Stadtteilführung</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>FCSP</h4>
\t\t\t\t\t<p>Team</p>
\t\t\t\t\t<p>Rabauken</p>
\t\t\t\t\t<p>Museum</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid gap-2 \">
\t\t\t\t\t<h4>HILFE</h4>
\t\t\t\t\t<p>Bezahlung & Versand</p>
\t\t\t\t\t<p>Rücksendung & Retouren</p>
\t\t\t\t\t<p>FAQ</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex items-end\">
\t\t\t\t\t<div class=\"grid grid-cols-2 gap-2\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/swagbasicexample/St. Pauli.png', 'asset') }}\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/swagbasicexample/Totenkopf_Weiss.png', 'asset') }}\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"md:hidden justify-center items-center p-4\">
\t\t<div class=\"grid grid-cols-6 gap-16 mt-5\">
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>NOCH FRAGEN?</h4>
\t\t\t\t<p><i class=\"fas fa-envelope mr-2\"></i>info@fcsp-shop.com</p>
\t\t\t\t<p><i class=\"fas fa-phone mr-2\"></i>040 317 874 888</p>
\t\t\t\t<p><i class=\"fas fa-clock mr-2\"></i>Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>SICHER BEZAHLEN</h4>
\t\t\t\t<div class=\"grid grid-cols-3 gap-2\">
\t\t\t\t\t<img src=\"/St.-Pauli/assets/images/paypal.png\" alt=\"\" />
\t\t\t\t\t<img src=\"/St.-Pauli/assets/images/visa.png\" alt=\"\" />
\t\t\t\t\t<img src=\"/St.-Pauli/assets/images/mastercard.png\" alt=\"\" />
\t\t\t\t\t<img src=\"/St.-Pauli/assets/images/elv.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>UNSERE STORES</h4>
\t\t\t\t<p>Harald-Stender-Platz 1</p>
\t\t\t\t<p>20359 Sankt Pauli</p>
\t\t\t\t<p>Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t</div>
\t\t\t<div class=\"flex items-end col-span-3\">
\t\t\t\t<div class=\"grid grid-cols-1 whitespace-nowrap\">
\t\t\t\t\t<p>Reeperbahn 63-65</p>
\t\t\t\t\t<p>20359 Hamburg</p>
\t\t\t\t\t<p>Mo - Fr 10 - 17:00 Uhr</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>FC ST. PAULI</h4>
\t\t\t\t<p>AGB</p>
\t\t\t\t<p>Datenschutz</p>
\t\t\t\t<p>Impressum</p>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>FCSP-SHOPS</h4>
\t\t\t\t<p>Die Shops</p>
\t\t\t\t<p>Öffnungszeiten</p>
\t\t\t\t<p>Anfahrt</p>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>FANS & VIERTEL</h4>
\t\t\t\t<p>Fanladen</p>
\t\t\t\t<p>Podcast</p>
\t\t\t\t<p>Stadtteilführung</p>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>FCSP</h4>
\t\t\t\t<p>Team</p>
\t\t\t\t<p>Rabauken</p>
\t\t\t\t<p>Museum</p>
\t\t\t</div>
\t\t\t<div class=\"col-span-3 whitespace-nowrap\">
\t\t\t\t<h4>HILFE</h4>
\t\t\t\t<p>Bezahlung & Versand</p>
\t\t\t\t<p>Rücksendung & Retouren</p>
\t\t\t\t<p>FAQ</p>
\t\t\t</div>
\t\t\t<div class=\"flex items-end col-span-3\">
\t\t\t\t<div class=\"grid grid-cols-2 gap-2\">
\t\t\t\t\t<img src=\"/St.-Pauli/assetsimages/St. Pauli.png\" alt=\"\" />
\t\t\t\t\t<img src=\"/St.-Pauli/assetsimages/Totenkopf_Weiss.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "@SwagBasicExample/storefront/layout/footer/footer.html.twig", "/home/melexsoft/Masaüstü/NewShopware/custom/plugins/SwagBasicExample/src/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
