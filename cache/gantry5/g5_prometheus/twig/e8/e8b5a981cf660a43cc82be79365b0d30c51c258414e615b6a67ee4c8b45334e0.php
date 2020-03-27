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

/* @particles/contentcubes.html.twig */
class __TwigTemplate_ea36e0b277e60b65311836b8cd5647c74dcd06d6a05fae18050ff7f004043c13 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contentcubes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
<div class=\"g-contentcubes ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
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
    ";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "items", [])) {
            // line 9
            echo "        <div class=\"cube-items-wrapper\">

            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "                <div class=\"item image-position-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "imageposition", []), "html", null, true);
                echo " cube-row g-grid\">
                    <div class=\"g-block size-50\">
                        ";
                // line 14
                if ($this->getAttribute($context["item"], "image", [])) {
                    // line 15
                    echo "                            <div class=\"cube-image-wrapper\">
                                <img src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
                    echo "\" class=\"cube-image\" />
                            </div>
                        ";
                }
                // line 19
                echo "                    </div>

                    <div class=\"g-block size-50\">
                        <div class=\"cube-content-wrapper\">
                            ";
                // line 23
                if ($this->getAttribute($context["item"], "label", [])) {
                    // line 24
                    echo "                                <div class=\"item-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", []));
                    echo "</div>
                            ";
                }
                // line 26
                echo "
                            <div class=\"item-title\">
                                ";
                // line 28
                if ($this->getAttribute($context["item"], "link", [])) {
                    // line 29
                    echo "                                <a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", []), "_self")) : ("_self")));
                    echo "\" class=\"item-link ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", []));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                    echo "\">
                                    ";
                }
                // line 31
                echo "
                                    ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
                echo "

                                    ";
                // line 34
                if ($this->getAttribute($context["item"], "link", [])) {
                    // line 35
                    echo "                                    <span class=\"item-link-text\">";
                    echo $this->getAttribute($context["item"], "linktext", []);
                    echo "</span>
                                </a>
                                ";
                }
                // line 38
                echo "                            </div>
                            
                            <div class=\"item-content\">
                                ";
                // line 41
                if ($this->getAttribute($context["item"], "content", [])) {
                    // line 42
                    echo "                                    ";
                    echo $this->getAttribute($context["item"], "content", []);
                    echo "
                                ";
                }
                // line 44
                echo "                            </div>


                            ";
                // line 47
                if ($this->getAttribute($context["item"], "tags", [])) {
                    // line 48
                    echo "                                <div class=\"item-tags\">

                                    ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "tags", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 51
                        echo "                                        <span class=\"tag\">
                                            <a target=\"";
                        // line 52
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["tag"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tag"], "target", []), "_self")) : ("_self")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "link", []));
                        echo "\">
                                                ";
                        // line 53
                        if ($this->getAttribute($context["tag"], "icon", [])) {
                            echo "<i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "icon", []), "html", null, true);
                            echo "\"></i> ";
                        }
                        // line 54
                        echo "                                                ";
                        echo $this->getAttribute($context["tag"], "text", []);
                        echo "
                                            </a>
                                        </span>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "
                                </div>
                            ";
                }
                // line 61
                echo "                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
        </div>
    ";
        }
        // line 68
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/contentcubes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 68,  202 => 65,  193 => 61,  188 => 58,  177 => 54,  171 => 53,  165 => 52,  162 => 51,  158 => 50,  154 => 48,  152 => 47,  147 => 44,  141 => 42,  139 => 41,  134 => 38,  127 => 35,  125 => 34,  120 => 32,  117 => 31,  107 => 29,  105 => 28,  101 => 26,  95 => 24,  93 => 23,  87 => 19,  79 => 16,  76 => 15,  74 => 14,  68 => 12,  64 => 11,  60 => 9,  58 => 8,  55 => 7,  49 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/contentcubes.html.twig", "C:\\MAMP\\htdocs\\servicioSocial\\templates\\g5_prometheus\\particles\\contentcubes.html.twig");
    }
}
