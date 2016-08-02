<?php

/* /pages/categorySelect.tpl */
class __TwigTemplate_4e7bf9a426affddc9a7b9b6e8388df6599c5724cb67d231c2478b4491d0ed281 extends Twig_Template
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
\t\t\t\t<h2>List of Category</h2>
\t\t</div>
\t\t<hr style=\"border-color: #e74c3c;\">
\t\t<br>
\t\t<div class=\"table-responsive\">

\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t      <tr>
\t\t\t      \t<th>ID</th>
\t\t\t        <th>Category</th>
\t\t\t        <th>Action</th>
\t\t\t      </tr>
\t    \t\t</thead>

\t    \t\t<tbody>
\t\t\t        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryDetails"]) ? $context["categoryDetails"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "\t\t\t        \t<tr>
\t\t\t\t\t        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t        <td>
\t\t\t\t\t        <a class=\"btn btn-primary btn-filled\" href=\"/category/view/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "\">View Category</a>
\t\t\t\t\t        </td>
\t\t\t\t      \t</tr>
\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t      \t</tbody>

\t\t\t</table>
\t\t</div>

\t</div>
</section>

";
        // line 42
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/categorySelect.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 42,  72 => 34,  62 => 30,  57 => 28,  53 => 27,  50 => 26,  46 => 25,  21 => 2,  19 => 1,);
    }
}
