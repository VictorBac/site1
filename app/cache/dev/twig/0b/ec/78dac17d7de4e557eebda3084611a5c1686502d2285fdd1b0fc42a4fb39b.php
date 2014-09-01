<?php

/* BlogBundle:Blog:menu.html.twig */
class __TwigTemplate_0bec78dac17d7de4e557eebda3084611a5c1686502d2285fdd1b0fc42a4fb39b extends Twig_Template
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
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "\t<div class=\"large-4 medium-4 columns\">
  \t\t<p>
\t\t\t<a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a>
\t\t</p>
\t</div>  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  26 => 3,  22 => 2,  19 => 1,  323 => 208,  320 => 207,  314 => 74,  309 => 73,  303 => 63,  298 => 57,  292 => 50,  286 => 41,  281 => 40,  274 => 10,  271 => 9,  265 => 6,  259 => 214,  257 => 207,  123 => 75,  121 => 73,  110 => 64,  108 => 63,  99 => 57,  89 => 50,  80 => 43,  66 => 31,  56 => 24,  42 => 12,  40 => 9,  34 => 6,  27 => 1,  37 => 6,  29 => 4,  111 => 33,  104 => 31,  96 => 28,  92 => 27,  86 => 26,  83 => 25,  78 => 40,  71 => 19,  62 => 17,  57 => 16,  54 => 14,  51 => 13,  45 => 10,  39 => 8,  31 => 6,);
    }
}
