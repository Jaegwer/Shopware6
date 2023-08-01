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
            'last_drop_slider_button_key' => [$this, 'block_last_drop_slider_button_key'],
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
        echo "\t\t";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "sliderItems", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17));
        echo "
        ";
        // line 18
        $this->displayBlock('element_image_slider_alignment', $context, $blocks);
        // line 112
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
        // line 107
        echo "                </div>
            ";
        // line 108
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 108), "value", [], "any", false, false, false, 108)) {
            // line 109
            echo "                </div>
            ";
        }
        // line 111
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
        echo "
                        <div class=\"image-slider-container\"
                             data-base-slider-container=\"true\">
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 30), "sliderItems", [], "any", false, false, false, 30));
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
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 31
            echo "
                                ";
            // line 32
            ob_start();
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (($__internal_compile_0 = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "sliderItems", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null));
            echo "
                                    <div class=\"image-slider-item";
            // line 34
            if ((sw_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 34) != true)) {
                echo " is-not-first";
            }
            echo " is-";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "html", null, true);
            echo "\"";
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "minHeight", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34) && (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34) == "cover"))) {
                echo " style=\"min-height: ";
                echo sw_escape_filter($this->env, twig_replace_filter(twig_trim_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "minHeight", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34)), [" " => ""]), "html", null, true);
                echo "\"";
            }
            echo ">
                                        ";
            // line 35
            $this->displayBlock('last_drop_slider_cms_button_example', $context, $blocks);
            // line 50
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 51
            $context["attributes"] = ["class" => "img-fluid image-slider-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 53
$context["image"], "media", [], "any", false, false, false, 53), "translated", [], "any", false, false, false, 53), "alt", [], "any", false, false, false, 53)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["image"], "media", [], "any", false, false, false, 53), "translated", [], "any", false, false, false, 53), "alt", [], "any", false, false, false, 53)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 54
$context["image"], "media", [], "any", false, false, false, 54), "translated", [], "any", false, false, false, 54), "title", [], "any", false, false, false, 54)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["image"], "media", [], "any", false, false, false, 54), "translated", [], "any", false, false, false, 54), "title", [], "any", false, false, false, 54)) : (""))];
            // line 56
            echo "
                                        ";
            // line 57
            if (((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 57), "displayMode", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57) == "cover") || (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 57), "displayMode", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57) == "contain"))) {
                // line 58
                echo "                                            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 58), "displayMode", [], "any", false, false, false, 58), "value", [], "any", false, false, false, 58)]);
                // line 59
                echo "                                        ";
            }
            // line 60
            echo "
                                        ";
            // line 61
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig", 61);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 62
$context["image"], "media", [], "any", false, false, false, 62), "name" => "cms-image-slider-thumbnails"]));
            // line 64
            echo "                                    </div>
                                ";
            $context["imageElement"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 66
            echo "
                                ";
            // line 67
            $this->displayBlock('element_image_slider_inner_item', $context, $blocks);
            // line 80
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                        </div>

                        ";
        // line 83
        $this->displayBlock('element_image_slider_controls', $context, $blocks);
        // line 106
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_last_drop_slider_cms_button_example($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "last_drop_slider_cms_button_example"));

        // line 36
        echo "

\t\t\t\t\t\t\t<div class=\"absolute bottom-10  w-full bg-opacity-50 py-4 flex flex-col items-center justify-center \">
\t\t\t\t\t\t\t\t";
        // line 39
        $this->displayBlock('last_drop_slider_button_key', $context, $blocks);
        // line 47
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 39
    public function block_last_drop_slider_button_key($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "last_drop_slider_button_key"));

        // line 40
        echo "\t\t\t\t\t\t\t\t<p class=\"text-white text-7xl mb-2\">";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (($__internal_compile_1 = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "sliderItems", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["key"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<button class=\"slider-button bottom-0  px-4 py-2 border-2 border-inherit text-white absolute\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 43
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (($__internal_compile_2 = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "sliderItems", [], "any", false, false, false, 43), "value", [], "any", false, false, false, 43)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["key"] ?? null)] ?? null) : null), "buttonLabel", [], "any", false, false, false, 43), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
    public function block_element_image_slider_inner_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_inner_item"));

        // line 68
        echo "                                    <div class=\"image-slider-item-container\">
                                        ";
        // line 69
        if (sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "url", [], "any", false, false, false, 69)) {
            // line 70
            echo "                                            <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "url", [], "any", false, false, false, 70), "html", null, true);
            echo "\"
                                               class=\"image-slider-link\"
                                               ";
            // line 72
            if (sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "newTab", [], "any", false, false, false, 72)) {
                echo "target=\"_blank\" rel=\"noopener\"";
            }
            echo ">
                                                ";
            // line 73
            echo sw_escape_filter($this->env, ($context["imageElement"] ?? null), "html", null, true);
            echo "
                                            </a>
                                        ";
        } else {
            // line 76
            echo "                                            ";
            echo sw_escape_filter($this->env, ($context["imageElement"] ?? null), "html", null, true);
            echo "
                                        ";
        }
        // line 78
        echo "                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_element_image_slider_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_controls"));

        // line 84
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84)) {
            // line 85
            echo "                                <div class=\"image-slider-controls-container\">
                                    <div class=\"base-slider-controls\"
                                        data-base-slider-controls=\"true\">
                                        ";
            // line 88
            $this->displayBlock('element_image_slider_controls_items', $context, $blocks);
            // line 102
            echo "                                    </div>
                                </div>
                            ";
        }
        // line 105
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 88
    public function block_element_image_slider_controls_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_controls_items"));

        // line 89
        echo "                                            ";
        $this->displayBlock('element_image_slider_controls_items_arrows', $context, $blocks);
        // line 101
        echo "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 89
    public function block_element_image_slider_controls_items_arrows($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_controls_items_arrows"));

        // line 90
        echo "                                                <button class=\"base-slider-controls-prev image-slider-controls-prev";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 90), "value", [], "any", false, false, false, 90) == "outside")) {
            echo " is-nav-prev-outside";
        } elseif ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 90), "value", [], "any", false, false, false, 90) == "inside")) {
            echo " is-nav-prev-inside";
        }
        echo "\">
                                                    ";
        // line 91
        $this->displayBlock('element_image_slider_controls_items_prev_icon', $context, $blocks);
        // line 94
        echo "                                                </button>
                                                <button class=\"base-slider-controls-next image-slider-controls-next";
        // line 95
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95) == "outside")) {
            echo " is-nav-next-outside";
        } elseif ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95) == "inside")) {
            echo " is-nav-next-inside";
        }
        echo "\">
                                                    ";
        // line 96
        $this->displayBlock('element_image_slider_controls_items_next_icon', $context, $blocks);
        // line 99
        echo "                                                </button>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 91
    public function block_element_image_slider_controls_items_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_controls_items_prev_icon"));

        // line 92
        echo "                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig", 92);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 93
        echo "                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 96
    public function block_element_image_slider_controls_items_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_slider_controls_items_next_icon"));

        // line 97
        echo "                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig", 97);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 98
        echo "                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@LastDropSlider/storefront/element/cms-element-last-drop-slider.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  492 => 98,  483 => 97,  476 => 96,  469 => 93,  460 => 92,  453 => 91,  445 => 99,  443 => 96,  435 => 95,  432 => 94,  430 => 91,  421 => 90,  414 => 89,  407 => 101,  404 => 89,  397 => 88,  390 => 105,  385 => 102,  383 => 88,  378 => 85,  375 => 84,  368 => 83,  360 => 78,  354 => 76,  348 => 73,  342 => 72,  336 => 70,  334 => 69,  331 => 68,  324 => 67,  313 => 43,  306 => 40,  299 => 39,  290 => 47,  288 => 39,  283 => 36,  276 => 35,  269 => 106,  267 => 83,  263 => 81,  249 => 80,  247 => 67,  244 => 66,  240 => 64,  238 => 62,  231 => 61,  228 => 60,  225 => 59,  222 => 58,  220 => 57,  217 => 56,  215 => 54,  214 => 53,  213 => 51,  210 => 50,  208 => 35,  194 => 34,  190 => 33,  188 => 32,  185 => 31,  168 => 30,  163 => 27,  156 => 26,  149 => 111,  145 => 109,  143 => 108,  140 => 107,  138 => 26,  133 => 24,  122 => 22,  110 => 20,  107 => 19,  100 => 18,  92 => 112,  90 => 18,  85 => 17,  83 => 14,  82 => 13,  81 => 12,  80 => 10,  79 => 9,  78 => 8,  77 => 5,  70 => 4,  67 => 3,  64 => 2,  51 => 1,);
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
\t\t{{dump(sliderConfig.sliderItems.value)}}
        {% block element_image_slider_alignment %}
            {% if config.verticalAlign.value %}
                <div class=\"cms-element-alignment{% if sliderConfig.verticalAlign.value == \"center\" %} align-self-center{% elseif sliderConfig.verticalAlign.value == \"flex-end\" %} align-self-end{% else %} align-self-start{% endif %}\">
            {%  endif %}
                <div class=\"base-slider image-slider{% if sliderConfig.navigationArrows.value == \"outside\" %} has-nav-outside{% endif %}{% if sliderConfig.navigationDots.value == \"outside\" %} has-dots-outside{% endif %}\"
                     data-base-slider=\"true\"
                     data-base-slider-options='{{ baseSliderOptions|json_encode }}'>

                    {% block element_image_slider_inner %}

                        <div class=\"image-slider-container\"
                             data-base-slider-container=\"true\">
                            {% for key, image in element.data.sliderItems %}

                                {% set imageElement %}
{{dump(sliderConfig.sliderItems.value[key])}}
                                    <div class=\"image-slider-item{% if loop.first != true %} is-not-first{% endif %} is-{{ sliderConfig.displayMode.value }}\"{% if sliderConfig.minHeight.value and  sliderConfig.displayMode.value == \"cover\" %} style=\"min-height: {{ sliderConfig.minHeight.value|trim|replace({' ':''}) }}\"{% endif %}>
                                        {% block last_drop_slider_cms_button_example %}


\t\t\t\t\t\t\t<div class=\"absolute bottom-10  w-full bg-opacity-50 py-4 flex flex-col items-center justify-center \">
\t\t\t\t\t\t\t\t{% block last_drop_slider_button_key %}
\t\t\t\t\t\t\t\t<p class=\"text-white text-7xl mb-2\">{{sliderConfig.sliderItems.value[key].content}}</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<button class=\"slider-button bottom-0  px-4 py-2 border-2 border-inherit text-white absolute\">
\t\t\t\t\t\t\t\t\t\t\t{{sliderConfig.sliderItems.value[key].buttonLabel}}
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t\t\t\t{% set attributes = {
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
