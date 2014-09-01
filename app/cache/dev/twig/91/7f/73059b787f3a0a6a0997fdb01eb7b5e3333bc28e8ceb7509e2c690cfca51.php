<?php

/* BlogBundle:Blog:sideMenu.html.twig */
class __TwigTemplate_917f73059b787f3a0a6a0997fdb01eb7b5e3333bc28e8ceb7509e2c690cfca51 extends Twig_Template
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
        return array (  38 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
