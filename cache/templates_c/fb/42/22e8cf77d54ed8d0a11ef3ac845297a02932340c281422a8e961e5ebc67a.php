<?php

/* pages/signupErr.tpl */
class __TwigTemplate_fb4222e8cf77d54ed8d0a11ef3ac845297a02932340c281422a8e961e5ebc67a extends Twig_Template
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
\t<div class = \"col-sm-12 text-center\">

\t\t<b style=\"color: red;\"> ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo " !</b><br><br>
\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["homePageUrl"]) ? $context["homePageUrl"] : null), "html", null, true);
        echo "/signup\" class = \"btn btn-default\">Back</a>
\t</div>
</section>


";
        // line 12
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/signupErr.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
