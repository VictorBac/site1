<?php

/* test1page1Bundle:Default:index.html.twig */
class __TwigTemplate_d57188f6e15d115e83c66cd2f7d5d6c400f1a30b320228bb55812c8ae0c71f0f extends Twig_Template
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
        echo "<html>
\t<body>
\t\tHello ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "test1page1Bundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
