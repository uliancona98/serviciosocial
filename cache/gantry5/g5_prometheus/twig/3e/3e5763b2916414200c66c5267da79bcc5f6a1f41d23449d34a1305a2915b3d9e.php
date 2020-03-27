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

/* @particles/copyright.html.twig */
class __TwigTemplate_50ab84b96b97a8eecdc4de5a1c1a6bd9a480b158e7c94d5b7415b70696fd1858 extends \Twig\Template
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
        // line 3
        $context["start_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "start", [])), [0 => "now", 1 => ""])) ? (call_user_func_array($this->env->getFilter('date')->getCallable(), [$this->env, "now", "Y"])) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "start", []))));
        // line 4
        $context["end_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "end", [])), [0 => "now", 1 => ""])) ? (call_user_func_array($this->env->getFilter('date')->getCallable(), [$this->env, "now", "Y"])) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "end", []))));
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/copyright.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_particle($context, array $blocks = [])
    {
        // line 7
        echo "<div class=\"g-copyright ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
        echo "\">
    &copy;
    ";
        // line 9
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "owner", []), "link", []))) {
            echo "<a target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_blank")) : ("_blank")));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "owner", []));
            echo "\">";
        }
        // line 10
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "owner", []));
        echo "
    ";
        // line 11
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "owner", []), "link", []))) {
            echo "</a>";
        }
        // line 12
        echo "    ";
        if ((($context["start_date"] ?? null) != ($context["end_date"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["start_date"] ?? null));
            echo " - ";
        }
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, ($context["end_date"] ?? null));
        echo "
    ";
        // line 14
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "additional", []), "text", []))) {
            echo "<br />";
            echo $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "additional", []), "text", []);
        }
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/copyright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  83 => 14,  78 => 13,  72 => 12,  68 => 11,  63 => 10,  53 => 9,  47 => 7,  44 => 6,  39 => 1,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/copyright.html.twig", "C:\\MAMP\\htdocs\\servicioSocial\\templates\\g5_prometheus\\particles\\copyright.html.twig");
    }
}
