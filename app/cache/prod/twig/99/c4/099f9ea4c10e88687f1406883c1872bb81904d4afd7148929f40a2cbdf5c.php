<?php

/* BlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_99c4099f9ea4c10e88687f1406883c1872bb81904d4afd7148929f40a2cbdf5c extends Twig_Template
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
 <p>
    Vous etes en train de créer un nouvel article
  </p>

  <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quisquam vel exercitationem illum architecto quibusdam voluptate amet in quam, aspernatur nam, harum doloremque beatae, odio aut similique eligendi soluta iusto dolorem. Accusantium quasi veritatis aliquam et, fuga adipisci tenetur ratione? Distinctio pariatur, corporis corrupti ut enim ea excepturi delectus amet at est perspiciatis saepe libero nisi mollitia veritatis nihil quas tempora adipisci possimus laboriosam. Atque reprehenderit, quod maxime impedit, neque nisi tenetur ipsa odio hic quisquam sapiente aperiam adipisci quia. Similique minus nulla odio deleniti vero perspiciatis vel quis totam accusamus voluptatibus natus, iste rerum, sit assumenda commodi! Dolorum nostrum velit veritatis ut commodi modi, aliquid! Animi harum inventore, error fuga atque natus in id deserunt officiis ab eaque accusamus aliquam perspiciatis sequi blanditiis distinctio adipisci unde eum aspernatur. Sed quia quisquam eaque ad consequatur tempora quaerat ab libero soluta deserunt, similique at molestiae aliquid minus laudantium veritatis aut! Ex!
  </p>

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
        return array (  58 => 17,  53 => 15,  323 => 208,  320 => 207,  303 => 63,  292 => 50,  286 => 41,  281 => 40,  274 => 10,  271 => 9,  265 => 6,  259 => 214,  257 => 207,  110 => 64,  34 => 6,  37 => 6,  104 => 31,  96 => 28,  83 => 25,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 74,  312 => 98,  309 => 73,  305 => 95,  298 => 57,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 33,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 63,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 75,  121 => 73,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 17,  49 => 19,  98 => 31,  93 => 28,  88 => 6,  78 => 40,  40 => 9,  29 => 4,  38 => 6,  43 => 10,  32 => 4,  28 => 3,  35 => 5,  26 => 6,  101 => 32,  94 => 28,  89 => 50,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 16,  50 => 14,  27 => 1,  24 => 5,  22 => 2,  87 => 25,  72 => 16,  66 => 31,  55 => 15,  46 => 7,  44 => 12,  41 => 5,  31 => 6,  25 => 5,  21 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 57,  95 => 28,  92 => 27,  86 => 26,  82 => 22,  80 => 43,  73 => 19,  64 => 14,  60 => 13,  57 => 16,  54 => 14,  51 => 13,  48 => 8,  45 => 10,  42 => 12,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
