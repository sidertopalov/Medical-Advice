<?php

/* pages/signupSucc.tpl */
class __TwigTemplate_cc34252a1ae245c598f62a883b178a20ca89e2b4453df0317a25e959b76f8b74 extends Twig_Template
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

\t\t<b style=\"color: green;\"> ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["succ"]) ? $context["succ"] : null), "html", null, true);
        echo " !!!</b>
\t\t<div>
\t\t\t<!-- <form method=\"post\">
\t\t\t\t<input id=\"passConfSignup\" name=\"passConfSignup\" class=\"form-password2\" type=\"text\" placeholder=\"Enter your activation code\">
\t\t\t\t<br><br>
\t\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t\t</form> -->
\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["homePageUrl"]) ? $context["homePageUrl"] : null), "html", null, true);
        echo "\" class=\"btn btn-default\">Go Home</a>
\t\t\t
\t\t</div>
\t</div>
</section>


";
        // line 20
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/signupSucc.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  37 => 13,  27 => 6,  21 => 2,  19 => 1,);
    }
}
