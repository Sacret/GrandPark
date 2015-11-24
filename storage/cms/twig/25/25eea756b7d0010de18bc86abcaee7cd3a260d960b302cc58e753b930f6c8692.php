<?php

/* /home/sacret/work/www/grand/themes/agency/partials/clients.htm */
class __TwigTemplate_dcb49e7c29ff611d7e3478793f99d8391173750d0b7a744e35a4dce78f8c422e extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"";
        // line 5
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logos/envato.jpg");
        echo "\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logos/designmodo.jpg");
        echo "\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logos/themeforest.jpg");
        echo "\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
\t\t<div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logos/octobercms.png");
        echo "\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/sacret/work/www/grand/themes/agency/partials/clients.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  41 => 15,  33 => 10,  25 => 5,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-3 col-sm-6">*/
/*             <a href="#">*/
/*                 <img src="{{ 'assets/images/logos/envato.jpg'|theme }}" class="img-responsive img-centered" alt="">*/
/*             </a>*/
/*         </div>*/
/*         <div class="col-md-3 col-sm-6">*/
/*             <a href="#">*/
/*                 <img src="{{ 'assets/images/logos/designmodo.jpg'|theme }}" class="img-responsive img-centered" alt="">*/
/*             </a>*/
/*         </div>*/
/*         <div class="col-md-3 col-sm-6">*/
/*             <a href="#">*/
/*                 <img src="{{ 'assets/images/logos/themeforest.jpg'|theme }}" class="img-responsive img-centered" alt="">*/
/*             </a>*/
/*         </div>*/
/* 		<div class="col-md-3 col-sm-6">*/
/*             <a href="#">*/
/*                 <img src="{{ 'assets/images/logos/octobercms.png'|theme }}" class="img-responsive img-centered" alt="">*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
