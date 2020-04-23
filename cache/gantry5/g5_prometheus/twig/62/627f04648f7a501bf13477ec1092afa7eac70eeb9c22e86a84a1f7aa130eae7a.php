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

/* @particles/imagegallerySZ.html.twig */
class __TwigTemplate_aaf6653d821d426648c4aeda792c6af99e0eac83e409516a15fc31174dbb6d51 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/imagegallerySZ.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"image-gallery-sz\">
        <div class=\"g-grid\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "galleryimages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["galleryimage"]) {
            // line 7
            echo "                <div class=\"g-block\">
                    <div class=\"g-content\">
                        <div class=\"";
            // line 10
            echo "                                    ";
            if (($this->getAttribute($context["galleryimage"], "effect", []) == "above")) {
                echo "above
                                    ";
            } elseif (($this->getAttribute(            // line 11
$context["galleryimage"], "effect", []) == "slidein")) {
                echo "above effect-slidein 
                                    ";
            } elseif (($this->getAttribute(            // line 12
$context["galleryimage"], "effect", []) == "card")) {
                echo "card
                                    ";
            }
            // line 13
            echo "\">
                            ";
            // line 14
            if ($this->getAttribute($context["galleryimage"], "image", [])) {
                // line 15
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["galleryimage"], "image", [])), "html", null, true);
                echo "\" class=\"\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["galleryimage"], "headline", []));
                echo "\" />
                            ";
            }
            // line 17
            echo "
                            <div class=\"container\" >  
                            
                                ";
            // line 21
            echo "                                ";
            if ($this->getAttribute($context["galleryimage"], "headline", [])) {
                // line 22
                echo "                                    <h2>
                                        ";
                // line 23
                echo $this->getAttribute($context["galleryimage"], "headline", []);
                echo "
                                    </h2>
                                ";
            }
            // line 26
            echo "
                                ";
            // line 28
            echo "                                ";
            if ($this->getAttribute($context["galleryimage"], "description", [])) {
                // line 29
                echo "                                    <p class=\"image-gallery-descr hidden-phone hidden-tablet\"> 
                                        ";
                // line 30
                echo $this->getAttribute($context["galleryimage"], "description", []);
                echo "
                                    </p>
                                ";
            }
            // line 33
            echo "
                                ";
            // line 35
            echo "                                ";
            if ($this->getAttribute($context["galleryimage"], "linktext", [])) {
                // line 36
                echo "                                    <p>
                                        <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["galleryimage"], "link", []));
                echo "\" class=\"button info\">
                                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["galleryimage"], "linktext", []));
                echo "
                                        </a>
                                    </p>
                                ";
            }
            // line 42
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryimage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/imagegallerySZ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  133 => 42,  126 => 38,  122 => 37,  119 => 36,  116 => 35,  113 => 33,  107 => 30,  104 => 29,  101 => 28,  98 => 26,  92 => 23,  89 => 22,  86 => 21,  81 => 17,  73 => 15,  71 => 14,  68 => 13,  63 => 12,  59 => 11,  54 => 10,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/imagegallerySZ.html.twig", "C:\\MAMP\\htdocs\\serviciosocial\\templates\\g5_prometheus\\particles\\imagegallerySZ.html.twig");
    }
}
