<?php

/* /pages/myAccount.tpl */
class __TwigTemplate_4a696356cd1e068ee0d2211264faa86c4faabe3d7cba686facf39dee4ab5ead0 extends Twig_Template
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
\t\t\t\t";
        // line 8
        if ($this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "first_name")) {
            // line 9
            echo "\t\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "first_name"), "html", null, true);
            echo ", Account!</h1>\t
\t\t\t\t";
        } else {
            // line 11
            echo "\t\t\t\t\t<h1>My Account!</h1>\t
\t\t\t\t";
        }
        // line 13
        echo "\t\t\t</div>
\t\t</div>

\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t
\t\t\t\t<!-- <div class=\"col-sm-12 text-center\"> -->
\t\t\t\t\t<div class=\"photo-form-wrapper clearfix\">
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t<h3 style=\"text-decoration: underline;\"> Form </h3>
\t\t\t\t\t\t\t\t\t<hr style=\"border-color: #e74c3c;\">

\t\t\t\t\t\t\t\t\t<!-- <div class=\"table-responsive\">

\t\t\t\t\t\t\t\t\t\t<table class=\"table\">

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Email: 
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"userEmail\" name=\"userEmail\" type=\"text\" placeholder=\"First name\" disabled value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "email"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>First Name: 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"firstName\" name=\"userEmail\" type=\"text\" placeholder=\"First name\" disabled value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "first_name"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Last Name: 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"lastName\" name=\"userEmail\" type=\"text\" placeholder=\"First name\" disabled value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "last_name"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Password: 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"userPass\" name=\"pass\" type=\"password\" placeholder=\"Password\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Confirm Password: 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"userPassConf\" name=\"passConf\" type=\"password\" placeholder=\"Confirm Password\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">

\t\t\t\t\t\t\t\t<form method=\"post\" id=\"updateAccount\">

\t\t\t\t\t\t\t\t\t\t<h3 style=\"text-decoration: underline;\"> Details </h3>
\t\t\t\t\t\t\t\t\t\t<hr style=\"border-color: #e74c3c;\">

\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-danger\" role=\"alert\" id=\"errorMessage\"></div>
\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"successMessage\"></div>

\t\t\t\t\t\t\t\t\t\t<input disabled id=\"userEmail\" name=\"userEmail\" type=\"text\" placeholder=\"First name\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "email"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t\t<input disabled id=\"firstName\" name=\"firstName\" type=\"text\" placeholder=\"First name\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "first_name"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t\t<input disabled id=\"lastName\" name=\"lastName\" type=\"text\" placeholder=\"Last name\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "last_name"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t\t<input id=\"btnEdit\" type=\"submit\" class=\"btn btn-primary btn-filled\"  value=\"Edit\">

\t\t\t\t\t\t\t\t\t\t<a href=\"/KinguinInternship/myProject/changePass\" id=\"changePass\" class=\"btn btn-primary btn-filled\" style=\"margin-bottom: 30px;\" >Change Password</a>

\t\t\t\t\t\t\t\t\t\t<input style=\"display:none;\" id=\"btnDone\" type=\"submit\" class=\"btn btn-primary btn-filled\"  value=\"Done\">

\t\t\t\t\t\t\t\t\t\t<input style=\"display:none;\" id=\"btnSaveChanges\" type=\"submit\" class=\"btn btn-primary btn-filled\"  value=\"Save Changes\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t<h3 style=\"text-decoration: underline;\"> News </h3>
\t\t\t\t\t\t\t\t\t<hr style=\"border-color: #e74c3c;\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- </div> -->
\t\t\t\t<!-- </div> -->
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
        // line 130
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/myAccount.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 130,  141 => 96,  136 => 94,  131 => 92,  88 => 52,  75 => 42,  63 => 33,  41 => 13,  37 => 11,  31 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}