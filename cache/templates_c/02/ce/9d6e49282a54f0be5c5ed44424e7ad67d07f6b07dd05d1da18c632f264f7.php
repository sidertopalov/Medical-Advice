<?php

/* pages/signup.tpl */
class __TwigTemplate_02ce9d6e49282a54f0be5c5ed44424e7ad67d07f6b07dd05d1da18c632f264f7 extends Twig_Template
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
        $this->env->loadTemplate("./common/header.tpl")->display($context);
        // line 2
        echo "

\t\t\t<header class=\"signup\">
\t\t\t\t\t<div class=\"background-image-holder parallax-background\">
\t\t\t\t\t\t<img class=\"background-image\" alt=\"Background Image\" src=\"img/hero5.jpg\">
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center\">
\t\t\t\t\t\t\t\t<h1 class=\"text-white\">Welcome to our amazing new service <br>sign up now and experience the pure goodness</h1>
\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"emailError\"></div>
\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"emailError2\"></div>
\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"passError\"></div>
\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"passConfError\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t\t\t<div class=\"photo-form-wrapper clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/KinguinInternship/myProject/signuptwo\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"emailSignup\" name=\"emailSignup\" class=\"form-email\" type=\"text\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"passSignup\" name=\"passSignup\" class=\"form-password\" type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"passConfSignup\" name=\"passConfSignup\" class=\"form-password2\" type=\"password\" placeholder=\"Confirm Password\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"btnSubmitSignup\" type=\"submit\" class=\"btn btn-primary btn-filled\"  value=\"Sign up\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<span class=\"text-white\">30 Day risk free trial - No credit card required</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>\t
\t\t\t</header>
\t\t\t\t
 
";
        // line 54
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/signup.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 54,  21 => 2,  19 => 1,);
    }
}
