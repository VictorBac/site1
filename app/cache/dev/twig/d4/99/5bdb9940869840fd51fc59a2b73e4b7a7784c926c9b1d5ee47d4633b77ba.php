<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_d4995bdb9940869840fd51fc59a2b73e4b7a7784c926c9b1d5ee47d4633b77ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titrePage' => array($this, 'block_titrePage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Blog ";
    }

    // line 6
    public function block_titrePage($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  29 => 4,  111 => 33,  104 => 31,  96 => 28,  92 => 27,  86 => 26,  83 => 25,  78 => 24,  71 => 19,  62 => 17,  57 => 16,  54 => 14,  51 => 13,  45 => 10,  39 => 8,  31 => 6,);
    }
}
