<?php

/* ::layout.html.twig */
class __TwigTemplate_501002e78d12bc6f3a2cfb006fd036c44928f20eb24a5f5a99f4269b395d1367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sideMenu' => array($this, 'block_sideMenu'),
            'titrePage' => array($this, 'block_titrePage'),
            'h3' => array($this, 'block_h3'),
            'contenu' => array($this, 'block_contenu'),
            'menu' => array($this, 'block_menu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

<!-- ************************************************************************** -->
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "<!-- ************************************************************************** -->
    <!-- <link rel=\"stylesheet\" href=\"css/foundation.css\" /> -->

    
    <script src=\"js/vendor/modernizr.js\"></script>
  </head>
  <body>


    <nav class=\"top-bar\">
      <ul class=\"title-area\">
        <li class=\"name\">
          <h1><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_accueil");
        echo "\">Accueil</a></h1>
        </li>
        <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
      </ul>

      <section class=\"top-bar-section\">
        <ul class=\"left\">
          <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("blog_ajouter");
        echo "\">Ajouter un article</a></li>
        </ul>
      </section>
    </nav>
 

  
    <div class=\"large-2 columns\">
      <div class=\"side-nav\">
        ";
        // line 40
        $this->displayBlock('sideMenu', $context, $blocks);
        // line 43
        echo "      </div>
    </div>

  <div class=\"large-10 columns\">
    <div class=\"row\">
      <div class=\"large-12 columns\">

        <h1>";
        // line 50
        $this->displayBlock('titrePage', $context, $blocks);
        echo "</h1>

      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"large-12 columns\">
        <h3>";
        // line 57
        $this->displayBlock('h3', $context, $blocks);
        echo "</h3>
      \t<div class=\"panel\">


<!-- ************************************************************************* -->

          ";
        // line 63
        $this->displayBlock('contenu', $context, $blocks);
        // line 64
        echo "  
<!-- ************************************************************************* -->




\t     

\t        <!-- <div class=\"row\">
            ";
        // line 73
        $this->displayBlock('menu', $context, $blocks);
        // line 75
        echo "        

\t\t\t\t\t</div> -->

      \t</div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"large-8 medium-8 columns\">
        <h5>Here&rsquo;s your basic grid:</h5>
        <!-- Grid Example -->

        <div class=\"row\">
          <div class=\"large-12 columns\">
            <div class=\"callout panel\">
              <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"large-6 medium-6 columns\">
            <div class=\"callout panel\">
              <p>Six columns</p>
            </div>
          </div>
          <div class=\"large-6 medium-6 columns\">
            <div class=\"callout panel\">
              <p>Six columns</p>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"large-4 medium-4 small-4 columns\">
            <div class=\"callout panel\">
              <p>Four columns</p>
            </div>
          </div>
          <div class=\"large-4 medium-4 small-4 columns\">
            <div class=\"callout panel\">
              <p>Four columns</p>
            </div>
          </div>
          <div class=\"large-4 medium-4 small-4 columns\">
            <div class=\"callout panel\">
              <p>Four columns</p>
            </div>
          </div>
        </div>
        
        <hr />
                
        <h5>We bet you&rsquo;ll need a form somewhere:</h5>
        <form>
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-12 columns\">
\t\t\t\t      <label>Input Label</label>
\t\t\t\t      <input type=\"text\" placeholder=\"large-12.columns\" />
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-4 medium-4 columns\">
\t\t\t\t      <label>Input Label</label>
\t\t\t\t      <input type=\"text\" placeholder=\"large-4.columns\" />
\t\t\t\t    </div>
\t\t\t\t    <div class=\"large-4 medium-4 columns\">
\t\t\t\t      <label>Input Label</label>
\t\t\t\t      <input type=\"text\" placeholder=\"large-4.columns\" />
\t\t\t\t    </div>
\t\t\t\t    <div class=\"large-4 medium-4 columns\">
\t\t\t\t      <div class=\"row collapse\">
\t\t\t\t        <label>Input Label</label>
\t\t\t\t        <div class=\"small-9 columns\">
\t\t\t\t          <input type=\"text\" placeholder=\"small-9.columns\" />
\t\t\t\t        </div>
\t\t\t\t        <div class=\"small-3 columns\">
\t\t\t\t          <span class=\"postfix\">.com</span>
\t\t\t\t        </div>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-12 columns\">
\t\t\t\t      <label>Select Box</label>
\t\t\t\t      <select>
\t\t\t\t        <option value=\"husker\">Husker</option>
\t\t\t\t        <option value=\"starbuck\">Starbuck</option>
\t\t\t\t        <option value=\"hotdog\">Hot Dog</option>
\t\t\t\t        <option value=\"apollo\">Apollo</option>
\t\t\t\t      </select>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-6 medium-6 columns\">
\t\t\t\t      <label>Choose Your Favorite</label>
\t\t\t\t      <input type=\"radio\" name=\"pokemon\" value=\"Red\" id=\"pokemonRed\"><label for=\"pokemonRed\">Radio 1</label>
\t\t\t\t      <input type=\"radio\" name=\"pokemon\" value=\"Blue\" id=\"pokemonBlue\"><label for=\"pokemonBlue\">Radio 2</label>
\t\t\t\t    </div>
\t\t\t\t    <div class=\"large-6 medium-6 columns\">
\t\t\t\t      <label>Check these out</label>
\t\t\t\t      <input id=\"checkbox1\" type=\"checkbox\"><label for=\"checkbox1\">Checkbox 1</label>
\t\t\t\t      <input id=\"checkbox2\" type=\"checkbox\"><label for=\"checkbox2\">Checkbox 2</label>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-12 columns\">
\t\t\t\t      <label>Textarea Label</label>
\t\t\t\t      <textarea placeholder=\"small-12.columns\"></textarea>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</form>
        <footer>Site réalisé  par Moi-même <br/></footer>
      </div>     

      <div class=\"large-4 medium-4 columns\">
\t\t\t  <h5>Try one of these buttons:</h5>
\t\t\t  <p><a href=\"#\" class=\"small button\">Simple Button</a><br/>
        <a href=\"#\" class=\"small radius button\">Radius Button</a><br/>
        <a href=\"#\" class=\"small round button\">Round Button</a><br/>            
        <a href=\"#\" class=\"medium success button\">Success Btn</a><br/>
        <a href=\"#\" class=\"medium alert button\">Alert Btn</a><br/>
        <a href=\"#\" class=\"medium secondary button\">Secondary Btn</a></p>           
\t\t\t\t<div class=\"panel\">
        \t<h5>So many components, girl!</h5>
        \t<p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
        \t<a href=\"http://foundation.zurb.com/docs/\" class=\"small button\">Go to Foundation Docs</a>          
        </div>

      </div>

    </div>
  </div> <!-- Fin du block de droite -->
    ";
        // line 207
        $this->displayBlock('javascripts', $context, $blocks);
        // line 214
        echo "  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " Site1 ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 40
    public function block_sideMenu($context, array $blocks = array())
    {
        echo " 
          ";
        // line 41
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BlogBundle:Blog:sideMenu"));
        echo "
        ";
    }

    // line 50
    public function block_titrePage($context, array $blocks = array())
    {
        echo "Welcome to my site";
    }

    // line 57
    public function block_h3($context, array $blocks = array())
    {
    }

    // line 63
    public function block_contenu($context, array $blocks = array())
    {
        echo " ";
    }

    // line 73
    public function block_menu($context, array $blocks = array())
    {
        echo " 
              ";
        // line 74
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
            ";
    }

    // line 207
    public function block_javascripts($context, array $blocks = array())
    {
        // line 208
        echo "    <script src=\"js/vendor/jquery.js\"></script>
    <script src=\"js/foundation.min.js\"></script>
    <script>
      \$(document).foundation();
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 208,  320 => 207,  303 => 63,  292 => 50,  286 => 41,  281 => 40,  274 => 10,  271 => 9,  265 => 6,  259 => 214,  257 => 207,  110 => 64,  34 => 6,  37 => 6,  104 => 31,  96 => 28,  83 => 25,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 74,  312 => 98,  309 => 73,  305 => 95,  298 => 57,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 33,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 63,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 75,  121 => 73,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 17,  49 => 19,  98 => 31,  93 => 28,  88 => 6,  78 => 40,  40 => 9,  29 => 4,  38 => 6,  43 => 10,  32 => 4,  28 => 3,  35 => 5,  26 => 6,  101 => 32,  94 => 28,  89 => 50,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 24,  50 => 10,  27 => 1,  24 => 3,  22 => 2,  87 => 25,  72 => 16,  66 => 31,  55 => 15,  46 => 7,  44 => 12,  41 => 5,  31 => 6,  25 => 5,  21 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 57,  95 => 28,  92 => 27,  86 => 26,  82 => 22,  80 => 43,  73 => 19,  64 => 14,  60 => 13,  57 => 16,  54 => 14,  51 => 13,  48 => 8,  45 => 10,  42 => 12,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
