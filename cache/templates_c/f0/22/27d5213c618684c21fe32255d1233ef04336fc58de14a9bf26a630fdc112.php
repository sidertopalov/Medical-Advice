<?php

/* pages/login.tpl */
class __TwigTemplate_f02227d5213c618684c21fe32255d1233ef04336fc58de14a9bf26a630fdc112 extends Twig_Template
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

<section class=\"no-pad login-page fullscreen-element\">
\t\t
\t<div class=\"background-image-holder\">
\t\t<img class=\"background-image\" alt=\"Poster Image For Mobiles\" src=\"/KinguinInternship/myProject/img/hero6.jpg\">
\t</div>

\t<div class=\"container align-vertical\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center\">
\t\t\t\t<div class = \"col-sm-12 text-center\">
\t\t\t\t\t<h4 style=\"color: rgb(255,255,0);\"> ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "</h4><br>
\t\t\t\t</div>
\t\t\t\t<h1 class=\"text-white\">Login to continue</h1>
\t\t\t\t<div >
\t\t\t\t\t<span style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"errorLoginEmail\"></span>
\t\t\t\t\t<span style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"errorLoginPass\"></span>
\t\t\t\t</div><br>
\t\t\t\t<div class=\"photo-form-wrapper clearfix\">
\t\t\t\t\t<form method=\"post\" id=\"loginForm\" >
\t\t\t\t\t\t<input class=\"form-email\" id=\"loginEmail\" name=\"loginEmail\" type=\"text\" placeholder=\"Email Address\">
\t\t\t\t\t\t<input class=\"form-password\" id=\"loginPass\" name=\"loginPass\" type=\"password\" placeholder=\"Password\"> 

\t\t\t\t\t\t<input class=\"login-btn btn-filled\" id=\"loginSubmit\" type=\"submit\" value=\"Login\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<a href=\"/KinguinInternship/myProject/signup\" class=\"text-white\">Create an account ➞</a><br>
\t\t\t\t<a href=\"#\" class=\"text-white\">I've forgotten my password</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>



";
        // line 38
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 38,  35 => 14,  21 => 2,  19 => 1,);
    }
}
