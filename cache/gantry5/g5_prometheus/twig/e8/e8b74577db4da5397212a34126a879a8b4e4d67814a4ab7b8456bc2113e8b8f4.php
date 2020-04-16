<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/owlcarousel.html.twig */
class __TwigTemplate_e720f2f5706979f11a9190cf5bcfde5c4ddb70194272a41b990c013223596e8d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/owlcarousel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
    <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
        ";
        // line 6
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 7
        echo "
        <div id=\"g-owlcarousel-";
        // line 8
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-owlcarousel owl-carousel ";
        if (($this->getAttribute(($context["particle"] ?? null), "imageOverlay", []) == "enable")) {
            echo "has-color-overlay";
        }
        echo "\">

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                <div class=\"g-owlcarousel-item owl-item\">
                    <div class=\"g-owlcarousel-item-wrapper\">
                        <div class=\"g-owlcarousel-item-img\">
                            <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
            echo "\" />
                        </div>
                        <div class=\"g-owlcarousel-item-content-container\">
                            <div class=\"g-owlcarousel-item-content-wrapper\">
                                <div class=\"g-owlcarousel-item-content\">
                                    ";
            // line 19
            if ($this->getAttribute($context["item"], "title", [])) {
                // line 20
                echo "                                        <h1 class=\"g-owlcarousel-item-title\">";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</h1>";
            }
            // line 21
            echo "                                    ";
            if ($this->getAttribute($context["item"], "desc", [])) {
                // line 22
                echo "                                        <h2 class=\"g-owlcarousel-item-desc\">";
                echo $this->getAttribute($context["item"], "desc", []);
                echo "</h2>";
            }
            // line 23
            echo "                                    ";
            if ($this->getAttribute($context["item"], "link", [])) {
                // line 24
                echo "                                        <div class=\"g-owlcarousel-item-link\">
                                            <a target=\"_self\" class=\"g-owlcarousel-item-button button ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", []));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                echo "\">
                                                ";
                // line 26
                echo $this->getAttribute($context["item"], "linktext", []);
                echo "
                                            </a>
                                        </div>
                                    ";
            }
            // line 30
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        </div>
    </div>

";
    }

    // line 42
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 43
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 44
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owlcarousel.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(window).load(function() {
            jQuery('#g-owlcarousel-";
        // line 47
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').owlCarousel({
                items: 1,
                rtl: ";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                loop: true,
                ";
        // line 51
        if (($this->getAttribute(($context["particle"] ?? null), "nav", []) == "enable")) {
            // line 52
            echo "                nav: true,
                navText: ['";
            // line 53
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "prevText", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "prevText", []), "<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "nextText", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "nextText", []), "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "'],
                ";
        } else {
            // line 55
            echo "                nav: false,
                ";
        }
        // line 57
        echo "                ";
        if (($this->getAttribute(($context["particle"] ?? null), "dots", []) == "enable")) {
            // line 58
            echo "                dots: true,
                ";
        } else {
            // line 60
            echo "                dots: false,
                ";
        }
        // line 62
        echo "                ";
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) == "enable")) {
            // line 63
            echo "                autoplay: true,
                autoplayTimeout: ";
            // line 64
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", []), "5000")) : ("5000")), "html", null, true);
            echo ",
                ";
        } else {
            // line 66
            echo "                autoplay: false,
                ";
        }
        // line 68
        echo "            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 68,  205 => 66,  200 => 64,  197 => 63,  194 => 62,  190 => 60,  186 => 58,  183 => 57,  179 => 55,  172 => 53,  169 => 52,  167 => 51,  158 => 49,  153 => 47,  146 => 44,  143 => 43,  140 => 42,  132 => 36,  121 => 30,  114 => 26,  108 => 25,  105 => 24,  102 => 23,  97 => 22,  94 => 21,  89 => 20,  87 => 19,  77 => 14,  72 => 11,  68 => 10,  59 => 8,  56 => 7,  50 => 6,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/owlcarousel.html.twig", "C:\\MAMP\\htdocs\\servicioSocial\\templates\\g5_prometheus\\particles\\owlcarousel.html.twig");
    }
}
