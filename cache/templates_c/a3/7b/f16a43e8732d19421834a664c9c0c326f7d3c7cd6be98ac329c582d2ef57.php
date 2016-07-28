<?php

/* /pages/categoryList.tpl */
class __TwigTemplate_a37bf16a43e8732d19421834a664c9c0c326f7d3c7cd6be98ac329c582d2ef57 extends Twig_Template
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
\t\t\t\t\t        <a class=\"btn\" href=\"/KinguinInternship/myProject/categoryUpdate/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\">Update</a>
\t\t\t\t\t        <a class=\"btn\" href=\"/KinguinInternship/myProject/categoryDelete/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\">Delete</a>
\t\t\t\t\t        </td>
\t\t\t\t      \t</tr>
\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t      \t</tbody>

\t\t\t</table>
\t\t</div>

\t</div>
</section>

";
        // line 43
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/categoryList.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 43,  76 => 35,  66 => 31,  62 => 30,  57 => 28,  53 => 27,  50 => 26,  46 => 25,  21 => 2,  19 => 1,);
    }
}
