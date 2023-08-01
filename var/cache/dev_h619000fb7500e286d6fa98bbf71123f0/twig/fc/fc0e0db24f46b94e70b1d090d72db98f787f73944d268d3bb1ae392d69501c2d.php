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

/* @LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig */
class __TwigTemplate_e089a29c5e58a0e71aead739108be470 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_image_slider' => [$this, 'block_element_image_slider'],
            'element_image_slider_alignment' => [$this, 'block_element_image_slider_alignment'],
            'element_image_slider_inner' => [$this, 'block_element_image_slider_inner'],
            'last_drop_slider_cms_button_example' => [$this, 'block_last_drop_slider_cms_button_example'],
            'last_drop_slider_button' => [$this, 'block_last_drop_slider_button'],
            'element_image_slider_inner_item' => [$this, 'block_element_image_slider_inner_item'],
            'element_image_slider_controls' => [$this, 'block_element_image_slider_controls'],
            'element_image_slider_controls_items' => [$this, 'block_element_image_slider_controls_items'],
            'element_image_slider_controls_items_arrows' => [$this, 'block_element_image_slider_controls_items_arrows'],
            'element_image_slider_controls_items_prev_icon' => [$this, 'block_element_image_slider_controls_items_prev_icon'],
            'element_image_slider_controls_items_next_icon' => [$this, 'block_element_image_slider_controls_items_next_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig"));

        // line 1
        $this->displayBlock('element_image_slider', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_element_image_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider"));

        // line 2
        echo "    ";
        $context["sliderConfig"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 2), "elements", [], "any", false, false, false, 2);
        // line 3
        echo "
    <div class=\"cms-element-";
        // line 4
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 4), "html", null, true);
        if (((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4) == "standard") && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "verticalAlign", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4))) {
            echo " has-vertical-alignment";
        }
        echo "\">
        ";
        // line 5
        $context["baseSliderOptions"] = ["slider" => ["navPosition" => "bottom", "speed" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 8
($context["sliderConfig"] ?? null), "speed", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8), "autoplayTimeout" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 9
($context["sliderConfig"] ?? null), "autoplayTimeout", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9), "autoplay" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 10
($context["sliderConfig"] ?? null), "autoSlide", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "autoplayButtonOutput" => false, "nav" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 12
($context["sliderConfig"] ?? null), "navigationDots", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12)) ? (true) : (false)), "controls" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 13
($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13)) ? (true) : (false)), "autoHeight" => (((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 14
($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14) == "standard")) ? (true) : (false))]];
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('element_image_slider_alignment', $context, $blocks);
        // line 106
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_element_image_slider_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_alignment"));

        // line 19
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19)) {
            // line 20
            echo "                <div class=\"cms-element-alignment";
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "verticalAlign", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20) == "center")) {
                echo " align-self-center";
            } elseif ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "verticalAlign", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20) == "flex-end")) {
                echo " align-self-end";
            } else {
                echo " align-self-start";
            }
            echo "\">
            ";
        }
        // line 22
        echo "                <div class=\"base-slider image-slider";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22) == "outside")) {
            echo " has-nav-outside";
        }
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationDots", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22) == "outside")) {
            echo " has-dots-outside";
        }
        echo "\"
                     data-base-slider=\"true\"
                     data-base-slider-options='";
        // line 24
        echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["baseSliderOptions"] ?? null)), "html", null, true);
        echo "'>

                    ";
        // line 26
        $this->displayBlock('element_image_slider_inner', $context, $blocks);
        // line 101
        echo "                </div>
            ";
        // line 102
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102)) {
            // line 103
            echo "                </div>
            ";
        }
        // line 105
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_element_image_slider_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_inner"));

        // line 27
        echo "\t\t\t\t\t\t";
        $this->displayBlock('last_drop_slider_cms_button_example', $context, $blocks);
        // line 39
        echo "                        <div class=\"image-slider-container\"
                             data-base-slider-container=\"true\">
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 41), "sliderItems", [], "any", false, false, false, 41));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 42
            echo "
                                ";
            // line 43
            ob_start();
            // line 44
            echo "                                    <div class=\"image-slider-item";
            if ((sw_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 44) != true)) {
                echo " is-not-first";
            }
            echo " is-";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "html", null, true);
            echo "\"";
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "minHeight", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44) && (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44) == "cover"))) {
                echo " style=\"min-height: ";
                echo sw_escape_filter($this->env, twig_replace_filter(twig_trim_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "minHeight", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44)), [" " => ""]), "html", null, true);
                echo "\"";
            }
            echo ">
                                        ";
            // line 45
            $context["attributes"] = ["class" => "img-fluid image-slider-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 47
$context["image"], "media", [], "any", false, false, false, 47), "translated", [], "any", false, false, false, 47), "alt", [], "any", false, false, false, 47)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["image"], "media", [], "any", false, false, false, 47), "translated", [], "any", false, false, false, 47), "alt", [], "any", false, false, false, 47)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 48
$context["image"], "media", [], "any", false, false, false, 48), "translated", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["image"], "media", [], "any", false, false, false, 48), "translated", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48)) : (""))];
            // line 50
            echo "
                                        ";
            // line 51
            if (((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 51), "displayMode", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51) == "cover") || (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 51), "displayMode", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51) == "contain"))) {
                // line 52
                echo "                                            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 52), "displayMode", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52)]);
                // line 53
                echo "                                        ";
            }
            // line 54
            echo "
                                        ";
            // line 55
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig", 55);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 56
$context["image"], "media", [], "any", false, false, false, 56), "name" => "cms-image-slider-thumbnails"]));
            // line 58
            echo "                                    </div>
                                ";
            $context["imageElement"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            echo "
                                ";
            // line 61
            $this->displayBlock('element_image_slider_inner_item', $context, $blocks);
            // line 74
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                        </div>

                        ";
        // line 77
        $this->displayBlock('element_image_slider_controls', $context, $blocks);
        // line 100
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_last_drop_slider_cms_button_example($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "last_drop_slider_cms_button_example"));

        // line 28
        echo "
\t\t\t\t\t\t\t<div class=\"absolute bottom-10  w-full bg-opacity-50 py-4 flex flex-col items-center justify-center \" style=\"right: 7rem;\">
\t\t\t\t\t\t\t\t";
        // line 30
        $this->displayBlock('last_drop_slider_button', $context, $blocks);
        // line 37
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_last_drop_slider_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "last_drop_slider_button"));

        // line 31
        echo "\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<button class=\"px-4 py-2 border-2 border-inherit text-white absolute\" style=\"z-index: 1000;\">
\t\t\t\t\t\t\t\t\t\t\tHIER ZUR KOLLEKTION
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 61
    public function block_element_image_slider_inner_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_inner_item"));

        // line 62
        echo "                                    <div class=\"image-slider-item-container\">
                                        ";
        // line 63
        if (sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "url", [], "any", false, false, false, 63)) {
            // line 64
            echo "                                            <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "url", [], "any", false, false, false, 64), "html", null, true);
            echo "\"
                                               class=\"image-slider-link\"
                                               ";
            // line 66
            if (sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "newTab", [], "any", false, false, false, 66)) {
                echo "target=\"_blank\" rel=\"noopener\"";
            }
            echo ">
                                                ";
            // line 67
            echo sw_escape_filter($this->env, ($context["imageElement"] ?? null), "html", null, true);
            echo "
                                            </a>
                                        ";
        } else {
            // line 70
            echo "                                            ";
            echo sw_escape_filter($this->env, ($context["imageElement"] ?? null), "html", null, true);
            echo "
                                        ";
        }
        // line 72
        echo "                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 77
    public function block_element_image_slider_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_controls"));

        // line 78
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78)) {
            // line 79
            echo "                                <div class=\"image-slider-controls-container\">
                                    <div class=\"base-slider-controls\"
                                        data-base-slider-controls=\"true\">
                                        ";
            // line 82
            $this->displayBlock('element_image_slider_controls_items', $context, $blocks);
            // line 96
            echo "                                    </div>
                                </div>
                            ";
        }
        // line 99
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 82
    public function block_element_image_slider_controls_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_controls_items"));

        // line 83
        echo "                                            ";
        $this->displayBlock('element_image_slider_controls_items_arrows', $context, $blocks);
        // line 95
        echo "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_element_image_slider_controls_items_arrows($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_controls_items_arrows"));

        // line 84
        echo "                                                <button class=\"base-slider-controls-prev image-slider-controls-prev";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84) == "outside")) {
            echo " is-nav-prev-outside";
        } elseif ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84) == "inside")) {
            echo " is-nav-prev-inside";
        }
        echo "\">
                                                    ";
        // line 85
        $this->displayBlock('element_image_slider_controls_items_prev_icon', $context, $blocks);
        // line 88
        echo "                                                </button>
                                                <button class=\"base-slider-controls-next image-slider-controls-next";
        // line 89
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89) == "outside")) {
            echo " is-nav-next-outside";
        } elseif ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89) == "inside")) {
            echo " is-nav-next-inside";
        }
        echo "\">
                                                    ";
        // line 90
        $this->displayBlock('element_image_slider_controls_items_next_icon', $context, $blocks);
        // line 93
        echo "                                                </button>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 85
    public function block_element_image_slider_controls_items_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_controls_items_prev_icon"));

        // line 86
        echo "                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig", 86);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 87
        echo "                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 90
    public function block_element_image_slider_controls_items_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_controls_items_next_icon"));

        // line 91
        echo "                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig", 91);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 92
        echo "                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  476 => 92,  467 => 91,  460 => 90,  453 => 87,  444 => 86,  437 => 85,  429 => 93,  427 => 90,  419 => 89,  416 => 88,  414 => 85,  405 => 84,  398 => 83,  391 => 95,  388 => 83,  381 => 82,  374 => 99,  369 => 96,  367 => 82,  362 => 79,  359 => 78,  352 => 77,  344 => 72,  338 => 70,  332 => 67,  326 => 66,  320 => 64,  318 => 63,  315 => 62,  308 => 61,  296 => 31,  289 => 30,  281 => 37,  279 => 30,  275 => 28,  268 => 27,  261 => 100,  259 => 77,  255 => 75,  241 => 74,  239 => 61,  236 => 60,  232 => 58,  230 => 56,  223 => 55,  220 => 54,  217 => 53,  214 => 52,  212 => 51,  209 => 50,  207 => 48,  206 => 47,  205 => 45,  190 => 44,  188 => 43,  185 => 42,  168 => 41,  164 => 39,  161 => 27,  154 => 26,  147 => 105,  143 => 103,  141 => 102,  138 => 101,  136 => 26,  131 => 24,  120 => 22,  108 => 20,  105 => 19,  98 => 18,  90 => 106,  88 => 18,  85 => 17,  83 => 14,  82 => 13,  81 => 12,  80 => 10,  79 => 9,  78 => 8,  77 => 5,  70 => 4,  67 => 3,  64 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_image_slider %}
    {% set sliderConfig = element.fieldConfig.elements %}

    <div class=\"cms-element-{{ element.type }}{% if sliderConfig.displayMode.value == \"standard\" and sliderConfig.verticalAlign.value %} has-vertical-alignment{% endif %}\">
        {% set baseSliderOptions = {
            slider: {
                navPosition: 'bottom',
                speed: sliderConfig.speed.value,
                autoplayTimeout: sliderConfig.autoplayTimeout.value,
                autoplay: sliderConfig.autoSlide.value,
                autoplayButtonOutput: false,
                nav: sliderConfig.navigationDots.value ? true : false,
                controls: sliderConfig.navigationArrows.value ? true : false,
                autoHeight: (sliderConfig.displayMode.value == \"standard\") ? true : false
            }
        } %}

        {% block element_image_slider_alignment %}
            {% if config.verticalAlign.value %}
                <div class=\"cms-element-alignment{% if sliderConfig.verticalAlign.value == \"center\" %} align-self-center{% elseif sliderConfig.verticalAlign.value == \"flex-end\" %} align-self-end{% else %} align-self-start{% endif %}\">
            {%  endif %}
                <div class=\"base-slider image-slider{% if sliderConfig.navigationArrows.value == \"outside\" %} has-nav-outside{% endif %}{% if sliderConfig.navigationDots.value == \"outside\" %} has-dots-outside{% endif %}\"
                     data-base-slider=\"true\"
                     data-base-slider-options='{{ baseSliderOptions|json_encode }}'>

                    {% block element_image_slider_inner %}
\t\t\t\t\t\t{% block last_drop_slider_cms_button_example %}

\t\t\t\t\t\t\t<div class=\"absolute bottom-10  w-full bg-opacity-50 py-4 flex flex-col items-center justify-center \" style=\"right: 7rem;\">
\t\t\t\t\t\t\t\t{% block last_drop_slider_button %}
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<button class=\"px-4 py-2 border-2 border-inherit text-white absolute\" style=\"z-index: 1000;\">
\t\t\t\t\t\t\t\t\t\t\tHIER ZUR KOLLEKTION
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endblock %}
                        <div class=\"image-slider-container\"
                             data-base-slider-container=\"true\">
                            {% for image in element.data.sliderItems %}

                                {% set imageElement %}
                                    <div class=\"image-slider-item{% if loop.first != true %} is-not-first{% endif %} is-{{ sliderConfig.displayMode.value }}\"{% if sliderConfig.minHeight.value and  sliderConfig.displayMode.value == \"cover\" %} style=\"min-height: {{ sliderConfig.minHeight.value|trim|replace({' ':''}) }}\"{% endif %}>
                                        {% set attributes = {
                                            'class': 'img-fluid image-slider-image',
                                            'alt': (image.media.translated.alt ?: ''),
                                            'title': (image.media.translated.title ?: '')
                                        } %}

                                        {% if element.config.displayMode.value == 'cover' or element.config.displayMode.value == 'contain' %}
                                            {% set attributes = attributes|merge({ 'data-object-fit': element.config.displayMode.value }) %}
                                        {% endif %}

                                        {% sw_thumbnails 'cms-image-slider-thumbnails' with {
                                            media: image.media
                                        } %}
                                    </div>
                                {% endset %}

                                {% block element_image_slider_inner_item %}
                                    <div class=\"image-slider-item-container\">
                                        {% if image.url %}
                                            <a href=\"{{ image.url }}\"
                                               class=\"image-slider-link\"
                                               {% if image.newTab %}target=\"_blank\" rel=\"noopener\"{% endif %}>
                                                {{ imageElement }}
                                            </a>
                                        {% else %}
                                            {{ imageElement }}
                                        {% endif %}
                                    </div>
                                {% endblock %}
                            {% endfor %}
                        </div>

                        {% block element_image_slider_controls %}
                            {% if sliderConfig.navigationArrows.value %}
                                <div class=\"image-slider-controls-container\">
                                    <div class=\"base-slider-controls\"
                                        data-base-slider-controls=\"true\">
                                        {% block element_image_slider_controls_items %}
                                            {% block element_image_slider_controls_items_arrows %}
                                                <button class=\"base-slider-controls-prev image-slider-controls-prev{% if sliderConfig.navigationArrows.value == \"outside\" %} is-nav-prev-outside{% elseif sliderConfig.navigationArrows.value == \"inside\" %} is-nav-prev-inside{% endif %}\">
                                                    {% block element_image_slider_controls_items_prev_icon %}
                                                        {% sw_icon 'arrow-head-left' %}
                                                    {% endblock %}
                                                </button>
                                                <button class=\"base-slider-controls-next image-slider-controls-next{% if sliderConfig.navigationArrows.value == \"outside\" %} is-nav-next-outside{% elseif sliderConfig.navigationArrows.value == \"inside\" %} is-nav-next-inside{% endif %}\">
                                                    {% block element_image_slider_controls_items_next_icon %}
                                                        {% sw_icon 'arrow-head-right' %}
                                                    {% endblock %}
                                                </button>
                                            {% endblock %}
                                        {% endblock %}
                                    </div>
                                </div>
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% if config.verticalAlign.value %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig", "/home/melexsoft/Masaüstü/NewShopware/custom/plugins/LastDropSlider/src/Resources/views/storefront/element/cms-element-last-drop-slider.html.twig");
    }
}
