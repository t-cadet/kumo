<?php

/* chapter.html.twig */
class __TwigTemplate_2570ee1321f033b748a7a829dc2282f1763987384b77347685ed8cc0186db0b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super_layout.html.twig", "chapter.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/side_menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/css/bootstrap-slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/font_size_slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "prefix", array()), "html", null, true);
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "title", array()), "html", null, true);
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "\t<div id=\"mySidenav\" class=\"sidenav\">
\t\t";
        // line 15
        echo "\t  \t<a id=\"home\" class=\"sidenav_elem\" onclick=\"preventDefault();void(0).delay(300);\"><span onclick=\"document.location.href='";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "'\">Accueil</span></a>
\t  \t<a id=\"infos\" class=\"sidenav_elem\" onclick=\"preventDefault();void(0).delay(300);\"><span onclick=\"document.location.href='";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos");
        echo "'\">Infos</span></a>
\t  \t<a id=\"options\" class=\"sidenav_elem\" onclick=\"void(0)\"><span>Options</span>
\t\t  \t<li id=\"theme\" class=\"toggle\">thèmes
\t\t\t    <div onclick=\"chooseStyle('snow', 60)\">Neige</div>
\t\t\t    <div onclick=\"chooseStyle('desert', 60)\">Désert</div>
\t\t\t    <div onclick=\"chooseStyle('dark', 60)\">Sombre</div>
\t\t\t    <div onclick=\"chooseStyle('dark_snow', 60)\">Neige sombre</div>
\t\t\t    <div onclick=\"chooseStyle('dark_desert', 60)\">Désert sombre</div>
\t\t    </li>
\t\t    <li id=\"font_size\" class=\"toggle\">taille police</li>
  \t\t</a>
  \t</div>\t     
";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "<div class=\"container\">\t
\t\t
\t<div id=\"font_range_container\">
\t\t<div>TAILLE DE POLICE EN %</div>
\t\t<a href=\"javascript:void(0)\" class=\"closebtn\" id=\"closeFontSize\" title=\"Fermer\">&times;</a>
\t\t<a href=\"javascript:void(0)\" class=\"resetbtn\" id=\"resetFontSize\" title=\"Réinitialiser\">Ⓡ</a>
\t\t<input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"30\" data-slider-max=\"300\" data-slider-step=\"1\" data-slider-value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["font_size"]) ? $context["font_size"] : null), "html", null, true);
        echo "\" data-slider-id=\"font-size\" id=\"font\" data-slider-tooltip=\"\" data-slider-handle=\"round\"/>
\t</div>\t    \t
\t\t\t\t
\t<div class=\"row\">
\t\t<div class=\"col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10\">
\t\t    <p class=\"page_choice\"> 
\t\t    \t<a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Sommaire</a>
\t\t    \t<br />
\t\t    \t";
        // line 47
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()) > 1)) {
            // line 48
            echo "\t\t    \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chapter", array("id" => ($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()) - 1))), "html", null, true);
            echo "\">&#60;&#60;</a>
\t\t    \t";
        }
        // line 50
        echo "\t\t    \to
\t\t    \t";
        // line 51
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()) < (isset($context["count"]) ? $context["count"] : null))) {
            // line 52
            echo "\t\t    \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chapter", array("id" => ($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()) + 1))), "html", null, true);
            echo "\">&#62;&#62;</a>
\t\t    \t";
        }
        // line 54
        echo "\t\t    </p>

\t\t    <div class=\"chapter\">
\t\t\t    <h3 class=\"chapter_title\">";
        // line 57
        echo $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "prefix", array());
        echo " ~ ";
        echo $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "title", array());
        echo "</h3>
\t\t\t    <p id=\"chapter_content\">";
        // line 58
        echo $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "content", array());
        echo "</p>
\t\t\t</div>


\t\t    <p class=\"page_choice\"> 
\t\t    \t";
        // line 63
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()) > 1)) {
            // line 64
            echo "\t\t    \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chapter", array("id" => ($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()) - 1))), "html", null, true);
            echo "\">&#60;&#60;</a>
\t\t    \t";
        }
        // line 66
        echo "\t\t    \to
\t\t    \t";
        // line 67
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()) < (isset($context["count"]) ? $context["count"] : null))) {
            // line 68
            echo "\t\t    \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chapter", array("id" => ($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()) + 1))), "html", null, true);
            echo "\">&#62;&#62;</a>
\t\t    \t";
        }
        // line 70
        echo "\t\t    \t<br />
\t\t    \t<a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Sommaire</a>
\t\t    </p>
\t\t</div>
\t</div>
</div>
";
    }

    // line 77
    public function block_script($context, array $blocks = array())
    {
        // line 78
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/js/bootstrap-slider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/jquery/font_size_slider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/jquery/toggle.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "chapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 80,  190 => 79,  185 => 78,  182 => 77,  172 => 71,  169 => 70,  163 => 68,  161 => 67,  158 => 66,  152 => 64,  150 => 63,  142 => 58,  136 => 57,  131 => 54,  125 => 52,  123 => 51,  120 => 50,  114 => 48,  112 => 47,  107 => 45,  98 => 39,  90 => 33,  87 => 32,  70 => 16,  65 => 15,  62 => 13,  59 => 12,  51 => 9,  44 => 6,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "chapter.html.twig", "/home/u372711435/views/chapter.html.twig");
    }
}
