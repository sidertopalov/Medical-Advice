<?php

/* /pages/categoryUpdate.tpl */
class __TwigTemplate_11f389ba8c5a1c64abc9b87e87cfa7ea11fad78e522476c8234f4cf09304760e extends Twig_Template
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
\t
\t<div class=\"container col-md-12 col-sm-12\">

\t\t<div class=\"text-center\">
\t\t\t\t<h2>Update Category</h2>
\t\t</div>
\t\t<hr style=\"border-color: #e74c3c;\">
\t\t<br>
\t\t
\t\t<div style=\"display:none\" class=\"alert alert-danger\" role=\"alert\" id=\"errorMessage\"></div>
\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"successMessage\"></div>

\t\t<div class=\"table-responsive\">
\t\t<div class=\"text-center\">

\t\t\t<form method=\"post\" id=\"categoryUpdate\">
\t\t\t\t<input hidden type=\"text\" name=\"categoryId\" id=\"categoryId\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
        echo "\" /><br>
\t\t\t\t<input type=\"text\" name=\"categoryName\" id=\"categoryName\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["categoryName"]) ? $context["categoryName"] : null), "html", null, true);
        echo "\" /><br><br>
\t\t\t\t<input class=\"btn btn-primary btn-filled\" type=\"submit\" name=\"btnCategorySubmit\" id=\"btnCategorySubmit\" value=\"Update\" />
\t\t\t\t<a class=\"btn btn-primary btn-filled\" href=\"/KinguinInternship/myProject/categoryList\">Back to Category</a>

\t\t\t</form>

\t\t</div>
\t\t</div>

\t</div>


</section>


";
        // line 37
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/categoryUpdate.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 37,  46 => 22,  42 => 21,  21 => 2,  19 => 1,);
    }
}
