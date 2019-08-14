<?php

/* super_layout.html.twig */
class __TwigTemplate_6575fbb0fc15f9a70bddc9381235069a2de0403172f8b3173fbc1ae890049574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/favicon.ico"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/kumo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
   

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/desert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" title=\"desert\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/dark_desert.css"), "html", null, true);
        echo "\" rel=\"alternate stylesheet\" type=\"text/css\" title=\"dark_desert\">
   <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/snow.css"), "html", null, true);
        echo "\" rel=\"alternate stylesheet\" type=\"text/css\" title=\"snow\">
   <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/dark_snow.css"), "html", null, true);
        echo "\" rel=\"alternate stylesheet\" type=\"text/css\" title=\"dark_snow\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/dark.css"), "html", null, true);
        echo "\" rel=\"alternate stylesheet\" type=\"text/css\" title=\"dark\">
    ";
        // line 18
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "    <!-- Style switcher -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/jquery/styleswitch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <title>Kumo desu ga, nani ka ? - ";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
    <div class=\"container\">
    ";
        // line 25
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        echo "        <div id=\"content\">
        ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "        </div>
        <footer class=\"footer\">
            <strong><i>KUMO DESU GA, NANI KA ?</i></strong>
            <p></p>
        </footer>
    </div>

    <!-- jQuery -->
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- JavaScript Boostrap plugin -->
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- GoogleAnalytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-103562353-1', 'auto');
      ga('send', 'pageview');
    </script>
    ";
        // line 49
        $this->displayBlock('script', $context, $blocks);
        // line 50
        echo "</body>
</html>
";
    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
    }

    // line 25
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
    }

    // line 49
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "super_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 49,  142 => 27,  137 => 25,  132 => 21,  127 => 18,  121 => 50,  119 => 49,  105 => 38,  100 => 36,  90 => 28,  88 => 27,  85 => 26,  83 => 25,  76 => 21,  72 => 20,  69 => 19,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  41 => 10,  37 => 9,  33 => 8,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "super_layout.html.twig", "/home/u372711435/views/super_layout.html.twig");
    }
}
