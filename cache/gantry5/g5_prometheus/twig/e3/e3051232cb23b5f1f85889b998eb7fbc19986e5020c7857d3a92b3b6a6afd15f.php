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

/* @particles/testimonialSZ.html.twig */
class __TwigTemplate_941ea5b852bc8b0199efe666c6356a5252a1a034f4068b8421abb31e150e71ff extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/testimonialSZ.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
<div class=\"sz-testimonial ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
        echo "\">
    <div class=\"g-grid\">
        <div class=\"g-block\">

            ";
        // line 10
        echo "            ";
        if ($this->getAttribute(($context["particle"] ?? null), "headline", [])) {
            // line 11
            echo "                <h2>";
            echo $this->getAttribute(($context["particle"] ?? null), "headline", []);
            echo "</h2>
            ";
        }
        // line 13
        echo "
            ";
        // line 15
        echo "            ";
        if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
            // line 16
            echo "                <div class=\"sz-testimonial-descr\">";
            echo $this->getAttribute(($context["particle"] ?? null), "description", []);
            echo "</div>
            ";
        }
        // line 18
        echo "        </div>
    </div>

    <div class=\"g-grid\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "testimonials", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "            <div class=\"g-block ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "class", []), "html", null, true);
            echo " \">
                <div class=\"g-content\">

                    <div class=\"
                        ";
            // line 28
            echo "                        ";
            if (($this->getAttribute($context["item"], "effect", []) == "arrow")) {
                echo " 
                        \tarrow 
                        ";
            } else {
                // line 31
                echo "                        \tcard
                    \t";
            }
            // line 33
            echo "                    \">
                    
\t\t\t\t\t\t<div class=\"sz-quote-container\">
\t                        ";
            // line 37
            echo "\t                        ";
            if ($this->getAttribute($context["item"], "icon", [])) {
                echo "  
\t                            <i class=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                echo " sz-icons\"></i>
\t                        ";
            }
            // line 40
            echo "
\t                        ";
            // line 42
            echo "\t                        ";
            if ($this->getAttribute($context["item"], "quote", [])) {
                // line 43
                echo "\t                            <div class=\"sz-quote\">";
                echo $this->getAttribute($context["item"], "quote", []);
                echo "</div>
\t                        ";
            }
            // line 45
            echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"sz-author-container\">
\t                        ";
            // line 50
            echo "\t                        ";
            if ($this->getAttribute($context["item"], "image", [])) {
                // line 51
                echo "\t                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])), "html", null, true);
                echo "\" class=\"sz-img\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []));
                echo "\" />
\t                        ";
            }
            // line 53
            echo "

\t                        ";
            // line 56
            echo "\t                        ";
            if ($this->getAttribute($context["item"], "author", [])) {
                // line 57
                echo "\t                            <h5>";
                echo $this->getAttribute($context["item"], "author", []);
                echo "</h5>
\t\t\t                        
\t\t\t                        ";
                // line 60
                echo "\t\t\t                        ";
                if ($this->getAttribute($context["item"], "authorattribute", [])) {
                    // line 61
                    echo "\t\t\t                            <div class=\"sz-author-attr\">";
                    echo $this->getAttribute($context["item"], "authorattribute", []);
                    echo "</div>
\t\t\t                        ";
                }
                // line 63
                echo "\t                        ";
            }
            // line 64
            echo "
                       </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/testimonialSZ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 70,  171 => 64,  168 => 63,  162 => 61,  159 => 60,  153 => 57,  150 => 56,  146 => 53,  138 => 51,  135 => 50,  129 => 45,  123 => 43,  120 => 42,  117 => 40,  112 => 38,  107 => 37,  102 => 33,  98 => 31,  91 => 28,  83 => 23,  79 => 22,  73 => 18,  67 => 16,  64 => 15,  61 => 13,  55 => 11,  52 => 10,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/testimonialSZ.html.twig", "C:\\MAMP\\htdocs\\serviciosocial\\templates\\g5_prometheus\\particles\\testimonialSZ.html.twig");
    }
}
