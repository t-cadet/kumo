<?php

/* layout.html.twig */
class __TwigTemplate_503fb43929436f90ab9e214145464936c51b731d4f17597a2476224c6e3fd289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super_layout.html.twig", "layout.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "        <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-target\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Accueil</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos");
        echo "\">Informations</a>
                        </li>
                    </ul> 
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-cog\"></span> Options
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:chooseStyle('snow', 60)\">Thème neige</a></li>
                                <li><a href=\"javascript:chooseStyle('desert', 60)\">Thème désert</a></li>
                                <li><a href=\"javascript:chooseStyle('dark', 60)\">Thème sombre</a></li>
                                <li><a href=\"javascript:chooseStyle('dark_snow', 60)\">Thème neige sombre</a></li>
                                <li><a href=\"javascript:chooseStyle('dark_desert', 60)\">Thème désert sombre</a></li>
                            </ul>    
                        </li>
                    </ul>
                </div>
            </div><!-- /.container -->
        </nav>
    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/home/u372711435/views/layout.html.twig");
    }
}
