<?php

/* /home/sacret/work/www/grand/themes/agency/layouts/default.htm */
class __TwigTemplate_f6d7faa854cb79ecbf5cc1f12f3e8c55c03000a9d5759a08d42aa9e37678943a extends Twig_Template
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
        echo "<!DOCTYPE html>

<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"jacoweb\">

    <title>Гранд Парк</title>
    
        ";
        // line 14
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 15
        echo "    
    <link href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/theme.min.css"));
        // line 19
        echo "\" rel=\"stylesheet\">
    
\t<link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\" class=\"index\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">Гранд Парк</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Новости</a>
                    </li>
                    <li>
                        <a href=\"#\">Акции</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#portfolio\">Услуги</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">О нас</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#team\">Прайс</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Контакты</a>
                    </li>
                    <li>
                        <a href=\"#\">Ololo </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        ";
        // line 89
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 90
        echo "    </header>
    
    <!-- Services Section -->
    <section id=\"services\">
\t    ";
        // line 94
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 95
        echo "    </section>
    
    <!-- Portfolio Section -->
    <section id=\"portfolio\" class=\"bg-light-gray\">
    \t";
        // line 99
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("portfolio"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 100
        echo "    </section>

    <!-- About Section -->
\t<section id=\"about\">
        ";
        // line 104
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("about"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 105
        echo "    </section>

    <!-- Team Section -->
    <section id=\"team\" class=\"bg-light-gray\">
        ";
        // line 109
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("team"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "    </section>
    
    <aside class=\"clients\">
    \t";
        // line 113
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("clients"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 114
        echo "    </aside>


    <!-- Contact Section -->
    <section id=\"contact\">
        ";
        // line 119
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contact"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 120
        echo "    </section>

    <!-- Footer -->
    <footer>
        ";
        // line 124
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 125
        echo "    </footer>

    <!-- Scripts -->
    <script src=\"";
        // line 128
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/app.js", 2 => "assets/javascript/classie.js", 3 => "assets/javascript/cbpAnimatedHeader.js", 4 => "assets/javascript/jqBootstrapValidation.js"));
        // line 134
        echo "\"></script>

    ";
        // line 136
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 137
        echo "
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/home/sacret/work/www/grand/themes/agency/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 137,  199 => 136,  195 => 134,  193 => 128,  188 => 125,  184 => 124,  178 => 120,  174 => 119,  167 => 114,  163 => 113,  158 => 110,  154 => 109,  148 => 105,  144 => 104,  138 => 100,  134 => 99,  128 => 95,  124 => 94,  118 => 90,  114 => 89,  42 => 19,  40 => 16,  37 => 15,  34 => 14,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html lang="en">*/
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="jacoweb">*/
/* */
/*     <title>Гранд Парк</title>*/
/*     */
/*         {% styles %}*/
/*     */
/*     <link href="{{ [*/
/* 		'assets/css/bootstrap.min.css',*/
/* 		'assets/css/theme.min.css'*/
/*     ]|theme }}" rel="stylesheet">*/
/*     */
/* 	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*     <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>*/
/*     */
/*     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body id="page-top" class="index">*/
/* */
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-default navbar-fixed-top">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header page-scroll">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand page-scroll" href="#page-top">Гранд Парк</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li class="hidden">*/
/*                         <a href="#page-top"></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#services">Новости</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Акции</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#portfolio">Услуги</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#about">О нас</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#team">Прайс</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#contact">Контакты</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Ololo </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container-fluid -->*/
/*     </nav>*/
/* */
/*     <!-- Header -->*/
/*     <header>*/
/*         {% partial "header" %}*/
/*     </header>*/
/*     */
/*     <!-- Services Section -->*/
/*     <section id="services">*/
/* 	    {% partial "services" %}*/
/*     </section>*/
/*     */
/*     <!-- Portfolio Section -->*/
/*     <section id="portfolio" class="bg-light-gray">*/
/*     	{% partial "portfolio" %}*/
/*     </section>*/
/* */
/*     <!-- About Section -->*/
/* 	<section id="about">*/
/*         {% partial "about" %}*/
/*     </section>*/
/* */
/*     <!-- Team Section -->*/
/*     <section id="team" class="bg-light-gray">*/
/*         {% partial "team" %}*/
/*     </section>*/
/*     */
/*     <aside class="clients">*/
/*     	{% partial "clients" %}*/
/*     </aside>*/
/* */
/* */
/*     <!-- Contact Section -->*/
/*     <section id="contact">*/
/*         {% partial "contact" %}*/
/*     </section>*/
/* */
/*     <!-- Footer -->*/
/*     <footer>*/
/*         {% partial "footer" %}*/
/*     </footer>*/
/* */
/*     <!-- Scripts -->*/
/*     <script src="{{ [*/
/*         'assets/javascript/jquery.js',*/
/*         'assets/javascript/app.js',*/
/*         'assets/javascript/classie.js',*/
/*         'assets/javascript/cbpAnimatedHeader.js',*/
/*         'assets/javascript/jqBootstrapValidation.js'*/
/*     ]|theme }}"></script>*/
/* */
/*     {% scripts %}*/
/* */
/*     <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
