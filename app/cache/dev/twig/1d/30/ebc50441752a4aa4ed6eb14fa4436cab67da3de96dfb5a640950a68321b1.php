<?php

/* BlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_1d30ebc50441752a4aa4ed6eb14fa4436cab67da3de96dfb5a640950a68321b1 extends Twig_Template
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "- Article ";
    }

    // line 8
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Ajout d'article ";
    }

    // line 10
    public function block_h3($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("h3", $context, $blocks);
        echo " ";
    }

    // line 14
    public function block_contenu($context, array $blocks = array())
    {
        // line 15
        echo "
  ";
        // line 16
        $this->env->loadTemplate("BlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 17
        echo "


";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  59 => 16,  56 => 15,  53 => 14,  45 => 10,  39 => 8,  31 => 6,);
    }
}
