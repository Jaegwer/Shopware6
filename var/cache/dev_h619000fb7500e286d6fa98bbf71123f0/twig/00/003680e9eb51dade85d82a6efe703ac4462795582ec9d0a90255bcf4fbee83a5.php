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

/* @Storefront/storefront/utilities/thumbnail.html.twig */
class __TwigTemplate_26f22c0a699de7c35106e8680ca2117f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'thumbnail_utility' => [$this, 'block_thumbnail_utility'],
            'thumbnail_utility_img' => [$this, 'block_thumbnail_utility_img'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/thumbnail.html.twig"));

        // line 1
        $this->displayBlock('thumbnail_utility', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_thumbnail_utility($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "thumbnail_utility"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if ( !array_key_exists("load", $context)) {
            // line 4
            echo "        ";
            $context["load"] = true;
            // line 5
            echo "    ";
        }
        // line 6
        echo "
    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        if ( !array_key_exists("loadOriginalImage", $context)) {
            // line 10
            echo "        ";
            $context["loadOriginalImage"] = false;
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        if ( !array_key_exists("autoColumnSizes", $context)) {
            // line 16
            echo "        ";
            $context["autoColumnSizes"] = true;
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ( !array_key_exists("attributes", $context)) {
            // line 20
            echo "        ";
            $context["attributes"] = [];
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if (( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "alt", [], "any", true, true, false, 23) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 23), "alt", [], "any", true, true, false, 23))) {
            // line 24
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["alt" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 24), "alt", [], "any", false, false, false, 24)]);
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "title", [], "any", true, true, false, 27) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 27), "title", [], "any", true, true, false, 27))) {
            // line 28
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["title" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28)]);
            // line 29
            echo "    ";
        }
        // line 30
        echo "
    ";
        // line 32
        echo "    ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "loading", [], "any", true, true, false, 32)) {
            // line 33
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["loading" => "eager"]);
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    ";
        // line 37
        echo "    ";
        if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 37)) > 0)) {
            // line 38
            echo "        ";
            if (((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null)) &&  !array_key_exists("sizes", $context))) {
                // line 39
                echo "            ";
                // line 40
                echo "            ";
                $context["sizes"] = ["xs" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm") - 1) . "px"), "sm" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1) . "px"), "md" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1) /                 // line 43
($context["columns"] ?? null)), 0, "ceil") . "px"), "lg" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl") - 1) /                 // line 44
($context["columns"] ?? null)), 0, "ceil") . "px")];
                // line 46
                echo "
            ";
                // line 48
                echo "            ";
                if ((($context["layout"] ?? null) == "full-width")) {
                    // line 49
                    echo "                ";
                    $context["container"] = 100;
                    // line 50
                    echo "                ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "vw")]);
                    // line 51
                    echo "            ";
                } else {
                    // line 52
                    echo "                ";
                    $context["container"] = 1360;
                    // line 53
                    echo "                ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "px")]);
                    // line 54
                    echo "            ";
                }
                // line 55
                echo "        ";
            }
            // line 56
            echo "
        ";
            // line 57
            $context["thumbnails"] = twig_reverse_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->sort(sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 57)));
            // line 58
            echo "
        ";
            // line 60
            echo "        ";
            ob_start();
            ob_start();
            // line 61
            echo "            ";
            if (($context["loadOriginalImage"] ?? null)) {
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, (sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 61) + 1), "html", null, true);
                echo "w, ";
            }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["thumbnails"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl(sw_get_attribute($this->env, $this->source, $context["thumbnail"], "url", [], "any", false, false, false, 61)), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["thumbnail"], "width", [], "any", false, false, false, 61), "html", null, true);
                echo "w";
                if ( !sw_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 61)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "        ";
            $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            echo twig_spaceless($___internal_parse_1_);
            $context["srcsetValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            echo "
        ";
            // line 65
            echo "        ";
            ob_start();
            ob_start();
            // line 66
            echo "            ";
            $context["sizeFallback"] = 100;
            // line 67
            echo "
            ";
            // line 69
            echo "            ";
            if ((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null))) {
                // line 70
                echo "                ";
                $context["sizeFallback"] = twig_round((($context["sizeFallback"] ?? null) / ($context["columns"] ?? null)), 0, "ceil");
                // line 71
                echo "            ";
            }
            // line 72
            echo "
            ";
            // line 73
            $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
            // line 80
            echo "
            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["breakpoint"] ?? null)));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo "(min-width: ";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "px) ";
                echo sw_escape_filter($this->env, (($__internal_compile_0 = ($context["sizes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "html", null, true);
                if ( !sw_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 81)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ", ";
            echo sw_escape_filter($this->env, ($context["sizeFallback"] ?? null), "html", null, true);
            echo "vw
        ";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 65
            echo twig_spaceless($___internal_parse_2_);
            $context["sizesValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            echo "    ";
        }
        // line 84
        echo "
    ";
        // line 85
        $this->displayBlock('thumbnail_utility_img', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_thumbnail_utility_img($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "thumbnail_utility_img"));

        // line 86
        echo "        <img ";
        if (($context["load"] ?? null)) {
            echo "src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        } else {
            echo "data-src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        }
        // line 87
        echo "            ";
        if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 87)) > 0)) {
            // line 88
            echo "                ";
            if (($context["load"] ?? null)) {
                echo "srcset=\"";
                echo sw_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo "data-srcset=\"";
                echo sw_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            }
            // line 89
            echo "                ";
            if ((($__internal_compile_1 = ($context["sizes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["default"] ?? null) : null)) {
                // line 90
                echo "                sizes=\"";
                echo sw_escape_filter($this->env, (($__internal_compile_2 = ($context["sizes"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["default"] ?? null) : null), "html", null, true);
                echo "\"
                ";
            } elseif ((twig_length_filter($this->env,             // line 91
($context["sizes"] ?? null)) > 0)) {
                // line 92
                echo "                sizes=\"";
                echo sw_escape_filter($this->env, ($context["sizesValue"] ?? null), "html", null, true);
                echo "\"
                ";
            }
            // line 94
            echo "            ";
        }
        // line 95
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (($context["value"] != "")) {
                echo " ";
                echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/thumbnail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  396 => 96,  380 => 95,  377 => 94,  371 => 92,  369 => 91,  364 => 90,  361 => 89,  350 => 88,  347 => 87,  336 => 86,  323 => 85,  320 => 84,  317 => 83,  314 => 65,  273 => 81,  270 => 80,  268 => 73,  265 => 72,  262 => 71,  259 => 70,  256 => 69,  253 => 67,  250 => 66,  246 => 65,  243 => 63,  240 => 60,  237 => 62,  194 => 61,  190 => 60,  187 => 58,  185 => 57,  182 => 56,  179 => 55,  176 => 54,  173 => 53,  170 => 52,  167 => 51,  164 => 50,  161 => 49,  158 => 48,  155 => 46,  153 => 44,  152 => 43,  150 => 40,  148 => 39,  145 => 38,  142 => 37,  139 => 35,  136 => 34,  133 => 33,  130 => 32,  127 => 30,  124 => 29,  121 => 28,  119 => 27,  116 => 26,  113 => 25,  110 => 24,  108 => 23,  105 => 22,  102 => 21,  99 => 20,  97 => 19,  94 => 18,  91 => 17,  88 => 16,  85 => 15,  83 => 14,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  69 => 8,  66 => 6,  63 => 5,  60 => 4,  57 => 3,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block thumbnail_utility %}
    {# activate load per default. If it is not activated only a data-src is set instead of the src tag. #}
    {% if load is not defined %}
        {% set load = true %}
    {% endif %}

    {# By default no original image will be loaded as soon as thumbnails are available. #}
    {# When set to true the orginal image will be loaded when the viewport is greater than the largest available thumbnail. #}
    {% if loadOriginalImage is not defined %}
        {% set loadOriginalImage = false %}
    {% endif %}

    {# By default the srcset sizes will be calculated automatically if `columns` are present and no `sizes` are configured. #}
    {# When set to false the sizes attribute will not be generated automatically. #}
    {% if autoColumnSizes is not defined %}
        {% set autoColumnSizes = true %}
    {% endif %}

    {% if attributes is not defined %}
        {% set attributes = {} %}
    {% endif %}

    {% if attributes.alt is not defined and media.translated.alt is defined %}
        {% set attributes = attributes|merge({'alt': media.translated.alt}) %}
    {% endif %}

    {% if attributes.title is not defined and media.translated.title is defined %}
        {% set attributes = attributes|merge({'title': media.translated.title}) %}
    {% endif %}

    {# If no loading attribute is defined, use the default behaivour for images. #}
    {% if attributes.loading is not defined %}
        {% set attributes = attributes|merge({ 'loading': 'eager' }) %}
    {% endif %}

    {# uses cms block column count and all available thumbnails to determine the correct image size for the current viewport #}
    {% if media.thumbnails|length > 0 %}
        {% if autoColumnSizes and columns and sizes is not defined %}
            {# set image size for every viewport #}
            {% set sizes = {
                'xs': (theme_config('breakpoint.sm') - 1) ~'px',
                'sm': (theme_config('breakpoint.md') - 1) ~'px',
                'md': ((theme_config('breakpoint.lg') - 1) / columns)|round(0, 'ceil') ~'px',
                'lg': ((theme_config('breakpoint.xl') - 1) / columns)|round(0, 'ceil') ~'px'
            } %}

            {# set image size for largest viewport depending on the cms block sizing mode (boxed or full-width) #}
            {% if layout == 'full-width' %}
                {% set container = 100 %}
                {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'vw'}) %}
            {% else %}
                {% set container = 1360 %}
                {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'px'}) %}
            {% endif %}
        {% endif %}

        {% set thumbnails = media.thumbnails|sort|reverse %}

        {# generate srcset with all available thumbnails #}
        {% set srcsetValue %}{% apply spaceless %}
            {% if loadOriginalImage %}{{ media|sw_encode_media_url }} {{ thumbnails|first.width + 1 }}w, {% endif %}{% for thumbnail in thumbnails %}{{ thumbnail.url | sw_encode_url }} {{ thumbnail.width }}w{% if not loop.last %}, {% endif %}{% endfor %}
        {% endapply %}{% endset %}

        {# generate sizes #}
        {% set sizesValue %}{% apply spaceless %}
            {% set sizeFallback = 100 %}

            {# set largest size depending on column count of cms block #}
            {% if autoColumnSizes and columns %}
                {% set sizeFallback = (sizeFallback / columns)|round(0, 'ceil') %}
            {% endif %}

            {% set breakpoint = {
                'xs': theme_config('breakpoint.xs'),
                'sm': theme_config('breakpoint.sm'),
                'md': theme_config('breakpoint.md'),
                'lg': theme_config('breakpoint.lg'),
                'xl': theme_config('breakpoint.xl')
            } %}

            {% for key, value in breakpoint|reverse %}(min-width: {{ value }}px) {{ sizes[key] }}{% if not loop.last %}, {% endif %}{% endfor %}, {{ sizeFallback }}vw
        {% endapply %}{% endset %}
    {% endif %}

    {% block thumbnail_utility_img %}
        <img {% if load %}src=\"{{ media|sw_encode_media_url }}\" {% else %}data-src=\"{{ media|sw_encode_media_url }}\" {% endif %}
            {% if media.thumbnails|length > 0 %}
                {% if load %}srcset=\"{{ srcsetValue }}\" {% else %}data-srcset=\"{{ srcsetValue }}\" {% endif %}
                {% if sizes['default'] %}
                sizes=\"{{ sizes['default'] }}\"
                {% elseif sizes|length > 0 %}
                sizes=\"{{ sizesValue }}\"
                {% endif %}
            {% endif %}
            {% for key, value in attributes %}{% if value != '' %} {{ key }}=\"{{ value }}\"{% endif %}{% endfor %}
        />
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/utilities/thumbnail.html.twig", "/home/melexsoft/Masaüstü/NewShopware/vendor/shopware/storefront/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}
