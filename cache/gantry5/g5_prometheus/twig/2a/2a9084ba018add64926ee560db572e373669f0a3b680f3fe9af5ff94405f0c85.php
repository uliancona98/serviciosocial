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

/* @particles/socialfloatingSZ.html.twig */
class __TwigTemplate_41c2040b013e70274ffcd9df5bda95247787be3ae7c643b7d6acf054ae4d58ab extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/socialfloatingSZ.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 5
        echo "    <div class=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "position", []) == "bottom")) {
            echo " sz-bottom 
    \t\t\t";
        } elseif (($this->getAttribute(        // line 6
($context["particle"] ?? null), "position", []) == "right")) {
            echo " sz-right sz-social-floating 
    \t\t\t";
        } else {
            // line 7
            echo " sz-left sz-social-floating size-100%
    \t\t\t";
        }
        // line 8
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
        echo "\">
        <ul>
\t        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "\t\t            <li>
\t\t\t            <a target=\"";
            // line 12
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_blank")) : ("_blank")));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
            echo "\">
\t\t\t                ";
            // line 13
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "icons_only"])) {
                // line 14
                echo "\t\t\t                \t<span class=\"sz-social-floating-icon ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                echo "\"></span>
\t\t\t                ";
            }
            // line 16
            echo "\t\t\t                ";
            // line 17
            echo "\t\t\t                ";
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "text_only"])) {
                // line 18
                echo "\t\t\t                \t<span class=\"sz-social-floating-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                echo "</span>
\t\t\t                ";
            }
            // line 20
            echo "\t\t\t            </a>
\t\t        \t</li>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/socialfloatingSZ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  105 => 20,  99 => 18,  96 => 17,  94 => 16,  88 => 14,  86 => 13,  76 => 12,  73 => 11,  69 => 10,  63 => 8,  59 => 7,  54 => 6,  49 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/socialfloatingSZ.html.twig", "C:\\MAMP\\htdocs\\serviciosocial\\templates\\g5_prometheus\\particles\\socialfloatingSZ.html.twig");
    }
}
