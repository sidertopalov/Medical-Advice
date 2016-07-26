<?php

/* pages/changePass.tpl */
class __TwigTemplate_4b9e8d05e4f8dc6c6db0da4f0aee251818a01162d0145d22da03949a121ab246 extends Twig_Template
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

<section>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t<h1>My Account</h1>\t
\t\t\t</div>
\t\t</div>

\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t
\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t<div class=\"photo-form-wrapper clearfix\">
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<form method=\"post\" id=\"changePass\"> 

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">

\t\t\t\t\t\t\t\t\t<h3 style=\"text-decoration: underline;\"> Change Password </h3>
\t\t\t\t\t\t\t\t\t<hr style=\"border-color: #e74c3c;\">

\t\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-danger\" role=\"alert\" id=\"errorMessage\"></div>
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"successMessage\"></div>

\t\t\t\t\t\t\t\t\t<input id=\"userEmail\" name=\"userEmail\" type=\"text\" placeholder=\"First name\" disabled value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "email"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t<input id=\"userPass\" name=\"pass\" type=\"password\" placeholder=\"Password\" value=\"\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- <input type=\"hidden\" name=\"pStrinput\" id=\"pStrinput\" value=\"\" /> -->
\t\t\t\t\t\t\t\t\t<div name=\"pStr\" id=\"passwordStrength\"></div>

\t\t\t\t\t\t\t\t\t<input id=\"newPass\" name=\"newPass\" type=\"password\" placeholder=\"New Password\" value=\"\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input id=\"userPassConf\" name=\"passConf\" type=\"password\" placeholder=\"Confirm Password\" value=\"\">

\t\t\t\t\t\t\t\t\t<input id=\"btnSaveChanges\" type=\"submit\" class=\"btn btn-primary btn-filled\"  value=\"Save Changes\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>

\t\t\t<div class=\"col-sm-4  col-xs-6\">
\t\t\t</div>

\t\t\t<div class=\"col-sm-4  col-xs-12\">
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
        // line 68
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/changePass.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 68,  53 => 32,  21 => 2,  19 => 1,);
    }
}
