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

/* @particles/customcontentSZ.html.twig */
class __TwigTemplate_5abb098ca025629b29b49572aa30533cd64b5dac092c1e3b836c42f8bbca1af1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/customcontentSZ.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"content-particle sz-customcontentSZ\" >
        <div class=\"g-grid \" >
            <div class=\"g-block\">
                <div class=\"g-content\">
                    <div \"
                        ";
        // line 10
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "height", [])) {
            echo " 
                            style='height: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "height", []), "html", null, true);
            echo ";'>
                        ";
        } else {
            // line 13
            echo "                            >
                        ";
        }
        // line 15
        echo "                        ";
        // line 16
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
            // line 17
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
            echo "\" class=\"logo-large\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "headline", []));
            echo "\" />
                        ";
        }
        // line 19
        echo "                        
                        ";
        // line 21
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "mainicon", [])) {
            echo "  
                            <i class=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "mainicon", []), "html", null, true);
            echo " sz-customcontent-icons\" style=\"display:block;\"></i>
                        ";
        }
        // line 24
        echo "                        
                        ";
        // line 26
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "headline", [])) {
            // line 27
            echo "                            <h1>";
            echo $this->getAttribute(($context["particle"] ?? null), "headline", []);
            echo "</h1>
                        ";
        }
        // line 29
        echo "                        
                        ";
        // line 31
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
            // line 32
            echo "                            <div class=\"customcontent-description\">";
            echo $this->getAttribute(($context["particle"] ?? null), "description", []);
            echo "</div>
                        ";
        }
        // line 34
        echo "                        
                        ";
        // line 36
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "linktext", [])) {
            // line 37
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\" class=\"button\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", []));
            echo "</a>
                        ";
        }
        // line 39
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "linktext2", [])) {
            // line 40
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link2", []));
            echo "\" class=\"button button-outline\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext2", []));
            echo "</a>
                        ";
        }
        // line 42
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"g-grid\">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "subitems", []));
        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
            // line 48
            echo "                <div class=\"g-block ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subitem"], "class", []), "html", null, true);
            echo "\">
                    <div class=\"g-content\">
                        <i class=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["subitem"], "icon", []), "html", null, true);
            echo " subitem-icons\"></i>
                        <h1>";
            // line 51
            echo $this->getAttribute($context["subitem"], "title", []);
            echo "</h1>
                        ";
            // line 52
            echo $this->getAttribute($context["subitem"], "subtitle", []);
            echo "
                        </br>
                        ";
            // line 54
            echo $this->getAttribute($context["subitem"], "description", []);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/customcontentSZ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 58,  168 => 54,  163 => 52,  159 => 51,  155 => 50,  149 => 48,  145 => 47,  138 => 42,  130 => 40,  127 => 39,  119 => 37,  116 => 36,  113 => 34,  107 => 32,  104 => 31,  101 => 29,  95 => 27,  92 => 26,  89 => 24,  84 => 22,  79 => 21,  76 => 19,  68 => 17,  65 => 16,  63 => 15,  59 => 13,  54 => 11,  49 => 10,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/customcontentSZ.html.twig", "C:\\MAMP\\htdocs\\serviciosocial\\templates\\g5_prometheus\\particles\\customcontentSZ.html.twig");
    }
}
