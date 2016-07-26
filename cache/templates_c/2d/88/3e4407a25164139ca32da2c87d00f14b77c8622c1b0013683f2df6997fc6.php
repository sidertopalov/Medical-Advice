<?php

/* pages/listArticles.tpl */
class __TwigTemplate_2d883e4407a25164139ca32da2c87d00f14b77c8622c1b0013683f2df6997fc6 extends Twig_Template
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
\t\t\t<table class=\"table table-striped\">
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
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentDetails"]) ? $context["commentDetails"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 28
            echo "\t\t\t        \t<tr>
\t\t\t\t\t        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "author_id"), "html", null, true);
            echo "</td>
\t\t\t\t\t        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "title"), "html", null, true);
            echo "</td>
\t\t\t\t\t        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "category_id"), "html", null, true);
            echo "</td>
\t\t\t\t\t        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "content"), "html", null, true);
            echo "</td>
\t\t\t\t      \t</tr>
\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t      
\t\t      \t</tbody>

\t\t\t</table>
\t\t</div>
\t</div>


</section>


";
        // line 47
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/listArticles.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 47,  80 => 36,  71 => 33,  67 => 32,  63 => 31,  59 => 30,  55 => 29,  52 => 28,  48 => 27,  21 => 2,  19 => 1,);
    }
}
