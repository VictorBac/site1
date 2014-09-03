<?php

/* BlogBundle:Blog:sideMenu.html.twig */
class __TwigTemplate_755df8a9befced52bc9e5876bed29de9facf48d6392bfa047663a0bc13a5a377 extends Twig_Template
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
        echo "<na<
<ul>
\t";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 4
            echo "\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_voir", array("id" => $this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "titre"), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:sideMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  23 => 3,  19 => 1,  323 => 208,  320 => 207,  314 => 74,  309 => 73,  303 => 63,  298 => 57,  292 => 50,  286 => 41,  281 => 40,  274 => 10,  271 => 9,  265 => 6,  259 => 214,  257 => 207,  123 => 75,  121 => 73,  110 => 64,  108 => 63,  99 => 57,  89 => 50,  80 => 43,  66 => 31,  56 => 24,  42 => 12,  40 => 9,  34 => 6,  27 => 4,  37 => 6,  29 => 4,  111 => 33,  104 => 31,  96 => 28,  92 => 27,  86 => 26,  83 => 25,  78 => 40,  71 => 19,  62 => 17,  57 => 16,  54 => 14,  51 => 13,  45 => 10,  39 => 8,  31 => 6,);
    }
}
