<?php

/* /pages/categoryAdd.tpl */
class __TwigTemplate_17c41388a2318b688fb6b77fb641f53c8b1451c897f87276ffbd3f0aa75fdabe extends Twig_Template
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


\t\t<div class=\"row\">
\t\t<div>
\t\t\t<h3>New Category</h3>
\t\t\t<hr style=\"border-color: #e74c3c;\">
\t\t\t<br>
\t\t</div>
\t\t\t<div style=\"display:none\" class=\"alert alert-danger\" role=\"alert\" id=\"errorMessage\"></div>
\t\t\t<div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"successMessage\"></div>

\t\t\t<!-- <div class=\"table-responsive\"> -->

\t\t\t<form method=\"post\" id=\"categoryAddForm\">
\t\t\t\t<input type=\"text\" name=\"newCategory\" id=\"newCategory\" placeholder=\"New category name..\" value=\"\" /><br><br>
\t\t\t\t<input id=\"btnCategory\" type=\"submit\" class=\"btn btn-primary btn-filled\"  value=\"Create Category\" />
\t\t\t</form>

\t\t\t<!-- </div> -->
\t\t</div>

\t</div>


</section>


";
        // line 34
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/categoryAdd.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 34,  21 => 2,  19 => 1,);
    }
}
