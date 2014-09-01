<?php

/* BlogBundle:Blog:voir.html.twig */
class __TwigTemplate_78e229d5a622b0a498c8d0c8e0b16fae172c6b993582b46e1222d2dee4317ca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titrePage' => array($this, 'block_titrePage'),
            'h3' => array($this, 'block_h3'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "- Article ";
    }

    // line 7
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Lecture d'article ";
    }

    // line 9
    public function block_h3($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "titre"), "html", null, true);
        echo " ";
    }

    // line 13
    public function block_contenu($context, array $blocks = array())
    {
        // line 14
        echo "  <p>
    ";
        // line 16
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "      <p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </p>

  <p>Par ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "auteur"), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "date"), "d/m/Y"), "html", null, true);
        echo "</p>

  <div class=\"well\">
    <p>
    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "contenu"), "html", null, true);
        echo "
  </p>
  </div>

  <p>
    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("blog_accueil");
        echo "\" class=\"small radius button\">
      Retour à la liste
    </a>
    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
        echo "\" class=\"small radius button\">
      Modifier l'article
    </a>
    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
        echo "\" class=\"small radius button\">
      Supprimer l'article
    </a>  

";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  77 => 21,  58 => 17,  53 => 13,  323 => 208,  320 => 207,  303 => 63,  292 => 50,  286 => 41,  281 => 40,  274 => 10,  271 => 9,  265 => 6,  259 => 214,  257 => 207,  110 => 64,  34 => 6,  37 => 6,  104 => 31,  96 => 28,  83 => 25,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 74,  312 => 98,  309 => 73,  305 => 95,  298 => 57,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 33,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 63,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 16,  47 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 75,  121 => 73,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 17,  49 => 19,  98 => 31,  93 => 28,  88 => 6,  78 => 40,  40 => 9,  29 => 4,  38 => 6,  43 => 10,  32 => 4,  28 => 3,  35 => 5,  26 => 3,  101 => 32,  94 => 30,  89 => 50,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 14,  50 => 14,  27 => 1,  24 => 5,  22 => 2,  87 => 25,  72 => 25,  66 => 31,  55 => 15,  46 => 7,  44 => 12,  41 => 5,  31 => 5,  25 => 5,  21 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 57,  95 => 28,  92 => 27,  86 => 25,  82 => 22,  80 => 43,  73 => 19,  64 => 17,  60 => 13,  57 => 16,  54 => 14,  51 => 13,  48 => 8,  45 => 9,  42 => 12,  39 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
