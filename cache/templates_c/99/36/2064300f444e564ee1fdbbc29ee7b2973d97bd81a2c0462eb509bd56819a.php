<?php

/* pages/editAccount.tpl */
class __TwigTemplate_99362064300f444e564ee1fdbbc29ee7b2973d97bd81a2c0462eb509bd56819a extends Twig_Template
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

\t\t\t\t\t\t\t<form method=\"post\" id=\"updateAccount\"> 

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">

\t\t\t\t\t\t\t\t\t<h3 style=\"text-decoration: underline;\"> Edit Profile </h3>
\t\t\t\t\t\t\t\t\t<hr style=\"border-color: #e74c3c;\">

\t\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-danger\" role=\"alert\" id=\"errorMessage\"></div>
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"successMessage\"></div>

\t\t\t\t\t\t\t\t\t<input id=\"userEmail\" name=\"userEmail\" type=\"text\" placeholder=\"First name\" disabled value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "email"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t<input id=\"firstName\" name=\"firstName\" type=\"text\" placeholder=\"First name\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "first_name"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t<input id=\"lastName\" name=\"lastName\" type=\"text\" placeholder=\"Last name\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "last_name"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t<input id=\"userPass\" name=\"pass\" type=\"password\" placeholder=\"Password\" value=\"\">

\t\t\t\t\t\t\t\t\t<input id=\"userPass\" name=\"newPass\" type=\"password\" placeholder=\"New Password\" value=\"\">
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
        // line 69
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/editAccount.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 69,  63 => 36,  58 => 34,  53 => 32,  21 => 2,  19 => 1,);
    }
}
