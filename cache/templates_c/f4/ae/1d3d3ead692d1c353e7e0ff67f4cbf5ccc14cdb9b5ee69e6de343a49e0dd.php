<?php

/* /pages/articleRead.tpl */
class __TwigTemplate_f4ae1d3d3ead692d1c353e7e0ff67f4cbf5ccc14cdb9b5ee69e6de343a49e0dd extends Twig_Template
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
\t\t\t\t<h2>Read Comment</h2>
\t\t</div>
\t\t<hr style=\"border-color: #e74c3c;\">
\t\t<br>

\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articleDetails"]) ? $context["articleDetails"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 15
            echo "
\t\t\t<section>
\t\t\t\t<div class=\"container table col-md-12 col-sm-12 text-center\" >

\t\t\t\t<div class=\"col-md-2 col-sm-2\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-sm-8 text-center\">
\t\t\t\t\t\t<div>
\t\t\t\t        \t<h3>
\t\t\t\t\t        \tTitle:<b>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "title"), "html", null, true);
            echo "</b>
\t\t\t\t        \t</h3>
\t\t\t\t        </div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t        <b>Author:</b><b style=\"color: #e74c3c\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "author_id"), "html", null, true);
            echo "</b>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"row\">
\t\t\t\t        \t<p style=\"color:green;\" >Category:";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "category_id"), "html", null, true);
            echo "</p>
\t\t\t\t        </div>
\t\t\t\t        <br>
\t\t\t\t        <div>
\t\t\t\t        \t<hr style=\"border-color: #000\">
\t\t\t\t\t        \t<div >";
            // line 37
            echo $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "content");
            echo "</div>
\t\t\t\t\t       \t<hr style=\"border-color: #000\">
\t\t\t\t\t       \t<div><b>Date: ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "date"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
\t</div>


</section>


";
        // line 57
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/articleRead.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 57,  94 => 50,  77 => 39,  72 => 37,  64 => 32,  58 => 29,  51 => 25,  39 => 15,  35 => 14,  21 => 2,  19 => 1,);
    }
}
