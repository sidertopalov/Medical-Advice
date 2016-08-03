<?php

/* /pages/enterEmail.tpl */
class __TwigTemplate_9258e09ff0915f096db686ce33936f865ba225bfd87669d191b4ef279f460b5d extends Twig_Template
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
\t\t<img class=\"background-image\" alt=\"Poster Image For Mobiles\" src=\"/img/hero6.jpg\">
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
\t\t\t\t<h1 class=\"text-white\">Enter your  email!</h1>
\t\t\t\t<div >
\t\t\t\t\t<span style=\"display:none\" class=\"alert alert-danger\" role=\"alert\" id=\"errorMessage\"></span>
\t\t\t\t\t<span style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"successMessage\"></span>
\t\t\t\t</div><br>
\t\t\t\t<div class=\"photo-form-wrapper clearfix\">
\t\t\t\t\t<form method=\"post\" id=\"enterEmailForm\" >
\t\t\t\t\t\t<input class=\"form-email\" id=\"enterEmail\" name=\"enterEmail\" type=\"text\" placeholder=\"Email Address\">
\t\t\t\t\t
\t\t\t\t\t\t<input class=\"login-btn btn-filled\" id=\"enterEmailSubmit\" type=\"submit\" value=\"Send Email\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>



";
        // line 35
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/enterEmail.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 35,  35 => 14,  21 => 2,  19 => 1,);
    }
}
