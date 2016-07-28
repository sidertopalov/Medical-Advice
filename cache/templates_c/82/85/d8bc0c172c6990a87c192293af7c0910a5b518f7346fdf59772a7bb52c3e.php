<?php

/* /pages/categoryDelete.tpl */
class __TwigTemplate_8285d8bc0c172c6990a87c192293af7c0910a5b518f7346fdf59772a7bb52c3e extends Twig_Template
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
\t<div class=\"container\">

\t\t<div class=\"text-center\">
\t\t\t\t<h2>Delete Category</h2>
\t\t</div>
\t\t<hr style=\"border-color: #e74c3c;\">
\t\t<br>
\t\t
\t\t<div style=\"display:none\" class=\"alert alert-danger\" role=\"alert\" id=\"errorMessage\"></div>
\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"successMessage\"></div>

\t\t<div class=\"table-responsive\">
\t\t<div class=\"text-center\">

\t\t\t<form method=\"post\" id=\"categoryDelete\">
\t\t\t\t<input hidden type=\"text\" name=\"categoryId\" id=\"categoryId\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
        echo "\" /><br>
\t\t\t\t<h2><div class=\"text-center text-danger\">Are you sure you want to delete?</div></h2><br>
\t\t\t\t<input disabled type=\"text\" name=\"categoryId\" id=\"categoryId\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["categoryName"]) ? $context["categoryName"] : null), "html", null, true);
        echo "\" /><br><br>
\t\t\t\t<input type=\"submit\" name=\"btnCategorySubmit\" id=\"btnCategorySubmit\" value=\"Delete\" />
\t\t\t\t<a class=\"btn btn-primary btn-filled\" href=\"/KinguinInternship/myProject/category\">Back to Category</a>

\t\t\t</form>
\t\t</div>\t
\t\t</div>

\t</div>


</section>


";
        // line 37
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/categoryDelete.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 37,  47 => 23,  42 => 21,  21 => 2,  19 => 1,);
    }
}
