<?php

/* ./common/header.tpl */
class __TwigTemplate_28dd9030a9625e9a4f57c3ad8eb7f0d0dd40ebd4693d66ae3d82e1ff9c0fb2e5 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link href=\"/KinguinInternship/myProject/css/flexslider.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/KinguinInternship/myProject/css/line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/KinguinInternship/myProject/css/elegant-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/KinguinInternship/myProject/css/lightbox.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/KinguinInternship/myProject/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/KinguinInternship/myProject/css/theme.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/KinguinInternship/myProject/css/custom.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/KinguinInternship/myProject/css/bootstrap-editable.css\" type=\"text/css\" rel=\"stylesheet\" media=\"all\"/>
        <link href=\"/KinguinInternship/myProject/css/passwordStrength.css\" type=\"text/css\" rel=\"stylesheet\" media=\"all\"/>

        <!--[if gte IE 9]>
        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/ie9.css\" />
\t\t<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src=\"/KinguinInternship/myProject/js/modernizr-2.6.2-respond-1.1.0.min.js\"></script>
    </head>
    <body>
    \t<div class=\"loader\">
    \t\t<div class=\"spinner\">
\t\t\t  <div class=\"double-bounce1\"></div>
\t\t\t  <div class=\"double-bounce2\"></div>
\t\t\t</div>
    \t</div>
\t\t\t\t
\t\t<div class=\"nav-container\">
\t\t\t<nav class=\"centered-logo top-bar\">
\t\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t\t<div class=\"row utility-menu\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"utility-inner clearfix\">
\t\t\t\t\t\t\t\t<span class=\"alt-font\"><i class=\"icon icon_pin\"></i> 300 Collins St Melbourne</span>
\t\t\t\t\t\t\t\t<span class=\"alt-font\"><i class=\"icon icon_mail\"></i> example@gmail.com</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"social-icons text-right\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_twitter\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_facebook\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_dribbble\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t\t<h1> Medical Advice </h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t\t<div class=\"row nav-menu\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-12 columns text-center\">
\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t<li> <a href=\"/KinguinInternship/myProject/\">Home</a></li>\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t";
        // line 85
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "isLogged") == true)) {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"/KinguinInternship/myProject/account\">Profile</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"/KinguinInternship/myProject/article\">New Question</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"/KinguinInternship/myProject/categorySelect\">Categories</a></li>
\t\t\t\t\t\t        \t<li class=\"has-dropdown\"><a href=\"#\">Settings</a>
\t\t\t\t\t\t        \t\t<ul class=\"subnav\">
\t\t\t\t\t\t        \t\t\t<a href=\"/KinguinInternship/myProject/changePass\">Change Password</a>
\t\t\t\t\t\t        \t\t\t<a href=\"/KinguinInternship/myProject/logout\">Logout</a>
\t\t\t\t\t        \t\t\t</ul>
\t\t\t\t\t        \t\t</li>
\t\t\t\t\t\t        \t<li></li>

\t\t\t\t\t\t        \t";
            // line 97
            if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "isAdmin") == 1)) {
                // line 98
                echo "
\t\t\t\t\t\t        \t<li class=\"has-dropdown\"><a href=\"#\">Category</a>
\t\t\t\t\t\t        \t\t<ul class=\"subnav\">
\t\t\t\t\t\t        \t\t\t<a href=\"/KinguinInternship/myProject/category\">Create Category</a>
\t\t\t\t\t\t        \t\t\t<a href=\"/KinguinInternship/myProject/categoryList\">Category List</a>
\t\t\t\t\t\t        \t\t\t<a href=\"/KinguinInternship/myProject/articleList\">Article List</a>
\t\t\t\t\t        \t\t\t</ul>
\t\t\t\t\t        \t\t</li>

\t\t\t\t\t        \t\t";
            }
            // line 108
            echo "
\t\t\t\t\t        \t";
        } else {
            // line 110
            echo "
\t\t\t\t\t\t        \t<li> <a href=\"/KinguinInternship/myProject/signup\">Sign Up</a></li>
\t\t\t\t\t\t\t\t\t<li> <a href=\"/KinguinInternship/myProject/login\">Login</a></li>

\t\t\t\t\t\t        ";
        }
        // line 115
        echo "\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!-- Comment top nav-menu

\t\t\t\t\t\t\t\t<li class=\"has-dropdown\"><a href=\"#\">Dropdown</a>
\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"has-dropdown\"><a href=\"#\">Half Width</a>
\t\t\t\t\t\t\t\t\t<div class=\"subnav subnav-halfwidth\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"has-dropdown\"><a href=\"#\">Fullwidth</a>
\t\t\t\t\t\t\t\t\t<div class=\"subnav subnav-fullwidth\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li> 
\t\t\t\t\t\t\t\tEnd of comment top nav menu-->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"mobile-toggle\">
\t\t\t\t\t\t<i class=\"icon icon_menu\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"bottom-border\"></div>
\t\t\t</nav>
\t\t
\t\t</div>
\t\t
\t\t<div class=\"main-container\">

\t\t\t";
    }

    public function getTemplateName()
    {
        return "./common/header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 115,  141 => 110,  137 => 108,  125 => 98,  123 => 97,  110 => 86,  108 => 85,  29 => 9,  19 => 1,);
    }
}
