<?php

/* pages/addArticle.tpl */
class __TwigTemplate_ac26f849ea33ed5cc8c5f93fd82759de50e57c6c6705be7405fe79b72f51d90f extends Twig_Template
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
        // line 7
        if ($this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "first_name")) {
            // line 8
            echo "\t\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "first_name"), "html", null, true);
            echo ", Account!</h1>\t
\t\t\t\t";
        } else {
            // line 10
            echo "\t\t\t\t\t<h1>My Account!</h1>\t
\t\t\t\t";
        }
        // line 12
        echo "\t\t\t</div>
\t\t</div>

\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t
\t\t\t\t<!-- <div class=\"col-sm-12 text-center\"> -->
\t\t\t\t\t<div class=\"photo-form-wrapper clearfix\">
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t<h3 style=\"text-decoration: underline;\"> Side-bar </h3>
\t\t\t\t\t\t\t\t\t<hr style=\"border-color: #e74c3c;\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">

\t\t\t\t\t\t\t\t\t<form method=\"post\" id=\"addArticle\">

\t\t\t\t\t\t\t\t\t\t\t<h3 style=\"text-decoration: underline;\"> Add Question </h3>
\t\t\t\t\t\t\t\t\t\t\t<hr style=\"border-color: #e74c3c;\">

\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-danger\" role=\"alert\" id=\"errorMessage\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"successMessage\"></div>

\t\t\t\t\t\t\t\t\t\t\t<input id=\"titleArticle\" name=\"titleArticle\" type=\"text\" placeholder=\"Title Article\" value=\"\">

\t\t\t\t\t\t\t\t\t\t\t<!-- <input id=\"firstName\" name=\"firstName\" type=\"text\" placeholder=\"First name\" value=\"\"> -->

\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"contentArticle\" name=\"contentArticle\" placeholder=\"Add comment here...\" style=\"width: 384px; height: 150px; resize: none; \"></textarea><br>

\t\t\t\t\t\t\t\t\t\t\t<input id=\"btnEdit\" type=\"submit\" class=\"btn btn-primary btn-filled\"  value=\"Add Comment\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t<h3 style=\"text-decoration: underline;\"> News </h3>
\t\t\t\t\t\t\t\t\t<hr style=\"border-color: #e74c3c;\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- </div> -->
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







<!-- <div class=\"container text-center\">
\t<div class=\"form-group\">

\t \t<input type=\"text\" name=\"titleArticle\" id=\"titleArticle\" placeholder=\"Title article\" value=\"\"/>

\t  \t<label for=\"comment\">Comment:</label>
\t  \t<textarea class=\"form-control\" rows=\"5\"  id=\"comment\"></textarea>

\t</div>
</div> -->


";
        // line 86
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/addArticle.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 86,  40 => 12,  36 => 10,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
