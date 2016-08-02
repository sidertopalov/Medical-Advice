<?php

/* /pages/categoryUserList.tpl */
class __TwigTemplate_0a6b50c6cc78a4908b6e75494d6c688b8efbb86c57f793a630bd5215f34f5da8 extends Twig_Template
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
\t\t\t\t<h2>List of Questions</h2>
\t\t</div>
\t\t<hr style=\"border-color: #e74c3c;\">
\t\t<br>
\t\t<div class=\"table-responsive\">


\t\t\t<!-- <table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t      <tr>
\t\t\t      \t<th>ID</th>
\t\t\t        <th>Author</th>
\t\t\t        <th>Article Name</th>
\t\t\t        <th>Category ID</th>
\t\t\t        <th>Content</th>
\t\t\t      </tr>
\t    \t\t</thead>

\t    \t\t<tbody>
\t    \t
\t\t\t        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentDetails"]) ? $context["commentDetails"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 30
            echo "\t\t\t        \t<tr>
\t\t\t\t\t        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "author_id"), "html", null, true);
            echo "</td>
\t\t\t\t\t        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "title"), "html", null, true);
            echo "</td>
\t\t\t\t\t        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "category_id"), "html", null, true);
            echo "</td>
\t\t\t\t\t        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "content"), "html", null, true);
            echo "</td>
\t\t\t\t      \t</tr>
\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t      
\t\t      \t</tbody>

\t\t\t</table> -->

\t\t</div>

\t\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articleDetails"]) ? $context["articleDetails"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 46
            echo "
\t\t\t<section>
\t\t\t\t<div class=\"container table col-md-12 col-sm-12 text-center\" >

\t\t\t\t<div class=\"col-md-2 col-sm-2\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-sm-8 text-center\">
\t\t\t\t\t\t<div>
\t\t\t\t        \t<h4>
\t\t\t\t\t        \tTitle:<a href=\"/read/question/";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "title"), "html", null, true);
            echo "</a>
\t\t\t\t        \t</h4>
\t\t\t\t        </div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t        <b>Author:</b><b style=\"color: #e74c3c\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "author_id"), "html", null, true);
            echo "</b>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"row\">
\t\t\t\t        \t<p style=\"color:green;\">Category:";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "category_id"), "html", null, true);
            echo "</p>
\t\t\t\t        </div>
\t\t\t\t        <br>
\t\t\t\t        <div>
\t\t\t\t        \t<hr style=\"border-color: #000\">
\t\t\t\t\t        \t<div >";
            // line 68
            echo $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "content");
            echo "</div>
\t\t\t\t\t       \t<hr style=\"border-color: #000\">
\t\t\t\t\t       \t<div><b>Date: ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "date"), "html", null, true);
            echo "</b></div>
\t\t\t\t       \t</div>
\t\t\t        </div>
\t\t        </div>

\t\t        <div class=\"col-md-2 col-sm-2\">
\t\t\t\t\t
\t\t\t\t</div>
\t        </section>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
\t</div>


</section>


";
        // line 88
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/categoryUserList.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 88,  152 => 81,  135 => 70,  130 => 68,  122 => 63,  116 => 60,  107 => 56,  95 => 46,  91 => 45,  82 => 38,  73 => 35,  69 => 34,  65 => 33,  61 => 32,  57 => 31,  54 => 30,  50 => 29,  21 => 2,  19 => 1,);
    }
}
