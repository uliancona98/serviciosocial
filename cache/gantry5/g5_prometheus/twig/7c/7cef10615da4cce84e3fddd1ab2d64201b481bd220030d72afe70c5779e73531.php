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

/* @nucleus/layout/section.html.twig */
class __TwigTemplate_9be847fe4994f14e758ea3b4fa06f1932b2183621d49b7a9860dc9b4fe046925 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["tag_type"] = (($this->getAttribute(($context["segment"] ?? null), "subtype", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["segment"] ?? null), "subtype", []), "section")) : ("section"));
        // line 2
        $context["attr_id"] = (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) ? ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) : (("g-" . $this->getAttribute(($context["segment"] ?? null), "id", []))));
        // line 3
        $context["attr_class"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "class", []);
        // line 4
        $context["attr_extra"] = "";
        // line 5
        $context["boxed"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "boxed", []);
        // line 6
        if ( !(null === ($context["boxed"] ?? null))) {
            // line 7
            echo "    ";
            $context["boxed"] = (((twig_trim_filter(($context["boxed"] ?? null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "page", []), "body", []), "layout", []), "sections", [])) : (($context["boxed"] ?? null)));
        }
        // line 9
        echo "

";
        // line 11
        $context["attr_background"] = (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "background", [])) ? (twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "background", [])))) : (false));
        // line 12
        $context["attr_backgroundOverlay"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "backgroundOverlay", []);
        // line 13
        if ((($context["attr_backgroundOverlay"] ?? null) == "")) {
            // line 14
            echo "    ";
            $context["attr_backgroundOverlay"] = "rgba(0, 0, 0, 0)";
        }
        // line 16
        echo "
";
        // line 17
        $context["attr_backgroundAttachment"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "backgroundAttachment", []);
        // line 18
        $context["attr_backgroundRepeat"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "backgroundRepeat", []);
        // line 19
        $context["attr_backgroundPosition"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "backgroundPosition", []);
        // line 20
        $context["attr_backgroundSize"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "backgroundSize", []);
        // line 21
        echo "


";
        // line 24
        if ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "extra", [])) {
            // line 25
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "extra", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 26
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 27
                    echo "        ";
                    $context["attr_extra"] = (((((($context["attr_extra"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                    // line 28
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 31
        echo "
";
        // line 32
        ob_start(function () { return ''; });
        // line 33
        echo "    ";
        if ($this->getAttribute(($context["segment"] ?? null), "children", [])) {
            // line 34
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 35
                echo "            ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", [])) . ".html.twig"), "@nucleus/layout/section.html.twig", 35)->display(twig_array_merge($context, ["segments" => $this->getAttribute($context["segment"], "children", [])]));
                // line 36
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "
";
        // line 40
        if (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "sticky", []) || twig_trim_filter(($context["html"] ?? null)))) {
            // line 41
            echo "    ";
            if (( !(null === ($context["boxed"] ?? null)) && ((($context["boxed"] ?? null) == 0) || (($context["boxed"] ?? null) == 2)))) {
                // line 42
                echo "        ";
                ob_start(function () { return ''; });
                // line 43
                echo "        <div class=\"g-container\">";
                echo ($context["html"] ?? null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 45
                echo "    ";
            }
            // line 46
            echo "
    ";
            // line 47
            ob_start(function () { return ''; });
            // line 48
            echo "    ";
            if ((($context["boxed"] ?? null) == 2)) {
                $context["attr_class"] = (($context["attr_class"] ?? null) . " g-flushed");
            }
            // line 49
            echo "    ";
            $context["attr_class"] = ((($context["attr_class"] ?? null)) ? (((" class=\"" . twig_trim_filter(($context["attr_class"] ?? null))) . "\"")) : (""));
            // line 50
            echo "    <";
            echo twig_escape_filter($this->env, ($context["tag_type"] ?? null), "html", null, true);
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["attr_id"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["attr_class"] ?? null);
            echo ($context["attr_extra"] ?? null);
            echo ">
        ";
            // line 51
            if (($context["attr_background"] ?? null)) {
                // line 52
                echo "            <div class=\"section-background\" style=\"
            background-image: 
                linear-gradient( ";
                // line 54
                echo twig_escape_filter($this->env, ($context["attr_backgroundOverlay"] ?? null), "html", null, true);
                echo ", 
                                ";
                // line 55
                echo twig_escape_filter($this->env, ($context["attr_backgroundOverlay"] ?? null), "html", null, true);
                echo " 
                ), 
                url(";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc(($context["attr_background"] ?? null)), "html", null, true);
                echo "); 

            ";
                // line 59
                if (($context["attr_backgroundAttachment"] ?? null)) {
                    echo "    
                background-attachment: ";
                    // line 60
                    echo twig_escape_filter($this->env, ($context["attr_backgroundAttachment"] ?? null), "html", null, true);
                    echo "; 
            ";
                }
                // line 62
                echo "            
            ";
                // line 63
                if (($context["attr_backgroundRepeat"] ?? null)) {
                    echo "                    
                background-repeat: ";
                    // line 64
                    echo twig_escape_filter($this->env, ($context["attr_backgroundRepeat"] ?? null), "html", null, true);
                    echo "; 
            ";
                }
                // line 66
                echo "
            ";
                // line 67
                if (($context["attr_backgroundPosition"] ?? null)) {
                    // line 68
                    echo "                background-position: ";
                    echo twig_escape_filter($this->env, ($context["attr_backgroundPosition"] ?? null), "html", null, true);
                    echo "; 
            ";
                }
                // line 70
                echo "            
            ";
                // line 71
                if (($context["attr_backgroundSize"] ?? null)) {
                    // line 72
                    echo "                background-size: ";
                    echo twig_escape_filter($this->env, ($context["attr_backgroundSize"] ?? null), "html", null, true);
                    echo ";
            ";
                }
                // line 74
                echo "            \">
        ";
            }
            // line 75
            echo "   
        ";
            // line 76
            echo ($context["html"] ?? null);
            echo "
        ";
            // line 77
            if (($context["attr_background"] ?? null)) {
                // line 78
                echo "            </div>
        ";
            }
            // line 79
            echo "    
    </";
            // line 80
            echo twig_escape_filter($this->env, ($context["tag_type"] ?? null), "html", null, true);
            echo ">
    ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 82
            echo "
    ";
            // line 83
            if ((($context["boxed"] ?? null) == 1)) {
                // line 84
                echo "    <div class=\"g-container\">";
                echo ($context["html"] ?? null);
                echo "</div>
    ";
            } else {
                // line 86
                echo "    ";
                echo ($context["html"] ?? null);
                echo "
    ";
            }
        }
        // line 89
        echo "

";
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 89,  293 => 86,  287 => 84,  285 => 83,  282 => 82,  277 => 80,  274 => 79,  270 => 78,  268 => 77,  264 => 76,  261 => 75,  257 => 74,  251 => 72,  249 => 71,  246 => 70,  240 => 68,  238 => 67,  235 => 66,  230 => 64,  226 => 63,  223 => 62,  218 => 60,  214 => 59,  209 => 57,  204 => 55,  200 => 54,  196 => 52,  194 => 51,  184 => 50,  181 => 49,  176 => 48,  174 => 47,  171 => 46,  168 => 45,  162 => 43,  159 => 42,  156 => 41,  154 => 40,  151 => 39,  147 => 37,  133 => 36,  130 => 35,  112 => 34,  109 => 33,  107 => 32,  104 => 31,  97 => 29,  91 => 28,  88 => 27,  83 => 26,  78 => 25,  76 => 24,  71 => 21,  69 => 20,  67 => 19,  65 => 18,  63 => 17,  60 => 16,  56 => 14,  54 => 13,  52 => 12,  50 => 11,  46 => 9,  42 => 7,  40 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@nucleus/layout/section.html.twig", "C:\\MAMP\\htdocs\\serviciosocial\\templates\\g5_prometheus\\custom\\engine\\templates\\layout\\section.html.twig");
    }
}
