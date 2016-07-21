<?php

/* pages/myAccount.tpl */
class __TwigTemplate_dc35536f4ec51135399b8d24f48520ecd8d9303dbbf278aaefe47e8476532b31 extends Twig_Template
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
\t\t\t\t\t\t\t<form method=\"post\" action=\"/KinguinInternship/myProject/ajax/updateMyAccount\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t<input id=\"userEmail\" name=\"email\" disabled class=\"form-email\" type=\"text\" placeholder=\"Email Address\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "email"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t<input id=\"userEmail\" name=\"firstName\" class=\"form-email\" type=\"text\" placeholder=\"First name\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "first_name"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t<input id=\"userEmail\" name=\"lastName\" class=\"form-email\" type=\"text\" placeholder=\"Last name\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "last_name"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t<input id=\"userPass\" name=\"pass\" class=\"form-password\" type=\"password\" placeholder=\"Password\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t<input id=\"userPassConf\" name=\"passConf\" class=\"form-password2\" type=\"password\" placeholder=\"Confirm Password\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 text-center\">
\t\t\t\t\t\t\t\t\t<input id=\"btnSaveChanges\" type=\"submit\" class=\"btn btn-primary btn-filled\"  value=\"Save Changes\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
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
        // line 58
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/myAccount.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 58,  54 => 27,  47 => 23,  40 => 19,  21 => 2,  19 => 1,);
    }
}
