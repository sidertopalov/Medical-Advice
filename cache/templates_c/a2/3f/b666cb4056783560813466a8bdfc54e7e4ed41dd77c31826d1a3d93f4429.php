<?php

/* ./common/footer.tpl */
class __TwigTemplate_a23fb666cb4056783560813466a8bdfc54e7e4ed41dd77c31826d1a3d93f4429 extends Twig_Template
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
        echo "\t\t\t\t
\t\t\t\t</div><!--end main-->
\t\t
\t\t<div class=\"footer-container\">
\t\t
\t\t
\t\t\t<footer class=\"short bg-secondary-1\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<span class=\"sub\">© Copright 2014 Medium Rare</span>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Terms Of Use</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Privacy &amp; Security Statement</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Sitemap</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-2 text-right\">
\t\t\t\t\t\t\t<ul class=\"social-icons\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_facebook\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t\t\t\t
\t\t<!-- <script src=\"https://www.youtube.com/iframe_api\"></script> -->
\t\t<script src=\"/KinguinInternship/myProject/js/jquery.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/jquery.plugin.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/bootstrap.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/jquery.flexslider-min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/smooth-scroll.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/skrollr.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/spectragram.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/scrollReveal.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/isotope.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/twitterFetcher_v10_min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/lightbox.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/jquery.countdown.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/scripts.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/bootstrap-editable.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/passwordStrength.jquery.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/passwordStrength.jquery.min.js\"></script>
        <script src=\"/KinguinInternship/myProject/js/jquery.tinymce.min.js\"></script>
        <script type=\"text/javascript\" src='//cdn.tinymce.com/4/tinymce.min.js'></script>

        ";
        // line 59
        if (twig_test_empty((isset($context["javascript"]) ? $context["javascript"] : null))) {
            // line 60
            echo "    \t\t<!-- <p>Our website is in maintenance mode. Please, come back later.</p> -->
\t\t";
        } else {
            // line 62
            echo "\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["javascript"]) ? $context["javascript"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
                // line 63
                echo "\t        \t<script src=\"";
                echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
                echo "\"></script>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        ";
        }
        // line 66
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "./common/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 66,  99 => 65,  90 => 63,  85 => 62,  81 => 60,  79 => 59,  19 => 1,);
    }
}
