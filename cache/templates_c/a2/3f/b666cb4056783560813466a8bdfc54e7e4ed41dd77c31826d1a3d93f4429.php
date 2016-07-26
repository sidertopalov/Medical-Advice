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
\t\t\t\t</div>
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
\t\t<script src=\"https://www.youtube.com/iframe_api\"></script>
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
        <script src=\"/KinguinInternship/myProject/js/pStrength.jquery.js\"></script>

        ";
        // line 58
        if (twig_test_empty((isset($context["javascript"]) ? $context["javascript"] : null))) {
            // line 59
            echo "    \t\t<p>Our website is in maintenance mode. Please, come back later.</p>
\t\t";
        } else {
            // line 61
            echo "\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["javascript"]) ? $context["javascript"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
                // line 62
                echo "\t        \t<script src=\"";
                echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
                echo "\"></script>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        ";
        }
        // line 65
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
        return array (  101 => 65,  98 => 64,  89 => 62,  84 => 61,  80 => 59,  78 => 58,  19 => 1,);
    }
}
