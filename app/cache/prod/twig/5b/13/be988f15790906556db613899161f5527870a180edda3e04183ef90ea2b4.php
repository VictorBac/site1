<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5b13be988f15790906556db613899161f5527870a180edda3e04183ef90ea2b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : null), "message" => (isset($context["status_text"]) ? $context["status_text"] : null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  93 => 9,  88 => 6,  78 => 40,  40 => 8,  29 => 4,  38 => 13,  43 => 8,  32 => 9,  28 => 3,  35 => 7,  26 => 3,  101 => 24,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 8,  27 => 4,  24 => 4,  22 => 2,  87 => 20,  72 => 16,  66 => 15,  55 => 13,  46 => 10,  44 => 9,  41 => 5,  31 => 5,  25 => 5,  21 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 41,  73 => 19,  64 => 12,  60 => 13,  57 => 12,  54 => 11,  51 => 15,  48 => 9,  45 => 8,  42 => 14,  39 => 8,  36 => 7,  33 => 4,  30 => 3,);
    }
}
