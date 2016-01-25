<?php

/* ApplicationApplicationBundle::layout/template.html.twig */
class __TwigTemplate_98ae58ddd26876dc6b383aa2317d95f245fe041257a57e498f5e2f20aa936f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
            'row' => array($this, 'block_row'),
            'box' => array($this, 'block_box'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('container', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('footer', $context, $blocks);
        // line 130
        echo "

";
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "    <!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationapplication/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationapplication/css/business-casual.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--Style for application-->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationapplication/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\"
          rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\"
          rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Les menus disponibles";
    }

    // line 42
    public function block_container($context, array $blocks = array())
    {
        // line 43
        echo "    <div class=\"container\">

        <div class=\"row\">

            <div class=\"box\">
                <div>
                    <div class=\"col-lg-12 text-center\">

                        <h2 class=\"brand-before\">
                            <small>Bienvenue au</small>
                        </h2>
                        <h1 class=\"brand-name\">Menu Restaurant</h1>
                        <br/>

                    </div>
                    <div id=\"carousel-example-generic\" class=\"carousel slide\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators hidden-xs\">
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                        </ol>


                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                <img class=\"img-responsive img-full\"
                                     src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationapplication/img/slide-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"img-responsive img-full\"
                                     src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationapplication/img/restaurant.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"img-responsive img-full\"
                                     src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationapplication/img/slide-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                            <span class=\"icon-prev\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                            <span class=\"icon-next\"></span>
                        </a>
                    </div>


                </div>
            </div>
        </div>


        ";
        // line 98
        $this->displayBlock('row', $context, $blocks);
        // line 99
        echo "        ";
        $this->displayBlock('box', $context, $blocks);
        // line 100
        echo "
    </div>
    <!-- /.container -->
";
    }

    // line 98
    public function block_row($context, array $blocks = array())
    {
    }

    // line 99
    public function block_box($context, array $blocks = array())
    {
    }

    // line 105
    public function block_footer($context, array $blocks = array())
    {
        // line 106
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <p>Copyright &copy; Website 2016</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationapplication/js/jquery.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationapplication/js/bootstrap.min.js"), "html", null, true);
        echo "></script>

<!--JS for application-->
<script src=";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationapplication/js/main.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationapplication/js/notify.js"), "html", null, true);
        echo "></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "ApplicationApplicationBundle::layout/template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  229 => 124,  225 => 123,  219 => 120,  213 => 117,  200 => 106,  197 => 105,  192 => 99,  187 => 98,  180 => 100,  177 => 99,  175 => 98,  153 => 79,  146 => 75,  139 => 71,  109 => 43,  106 => 42,  100 => 13,  77 => 22,  71 => 19,  65 => 16,  59 => 13,  46 => 2,  43 => 1,  37 => 130,  35 => 105,  30 => 42,  27 => 41,  25 => 1,  199 => 124,  190 => 118,  178 => 109,  169 => 103,  157 => 94,  147 => 88,  143 => 86,  141 => 85,  125 => 71,  122 => 70,  108 => 59,  99 => 53,  87 => 44,  78 => 38,  66 => 29,  56 => 23,  52 => 21,  50 => 20,  32 => 104,  29 => 3,);
    }
}
