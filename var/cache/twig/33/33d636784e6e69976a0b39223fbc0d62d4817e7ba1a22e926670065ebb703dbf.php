<?php

/* admin_log.html.twig */
class __TwigTemplate_d7cdc7ebb4a9fc3a5e7119301b6f5c31b399ece4461fb8733a51e29b7524f1b1 extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content='width=device-width, initial-scale=1.0, user-scalable=0' name='viewport'/>
    <title>Kumo - Admin</title>
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/favicon.ico"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/admin_log.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
        
         
        body { 
            margin: 0;
            background: url(\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/yin_yang.jpg"), "html", null, true);
        echo "\") no-repeat center center fixed;
            -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
            background-size: cover;
            overflow: hidden; }
        .container {
          position: fixed;
          top: 50%;
          left: 50%;
          width:500px;
          height:500px;
          margin-top: -250px;
          margin-left: -250px;
          margin-bottom: 0px;
          overflow:hidden; /* Removing this is interesting */
          animation:rotate 5s linear infinite;
          border:1px solid black;
        }
        .circle { border-radius:50%; }

        .one:after, .two:after { animation:rotate 2.5s linear infinite reverse; }
        /* You can replace the images with anything, including gifs! */
        .one:after { background-image: url(\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/galaxy_red.jpg"), "html", null, true);
        echo "\"); }
        .two:after { background-image: url(\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/galaxy_blue2.jpg"), "html", null, true);
        echo "\"); }

        .main {
          width:100%;
          height:50%;
        }

        .main.two { top:50%; }
        .one { transform:rotate(0deg); }
        .two { transform:rotate(180deg); }

        .main, .big, .small { position:absolute; overflow:hidden; }
        .main:after, .big:after, .small:after { 
          content:'';
          position:absolute; 
          top:0; left:0;
          width:500px; height:500px;
          background-size:100% 100%;
        }

        .big {
          width:50%;
          height:50%;
          top:25%;
          left:50%;
        }
        .big.two { left:0; }
        .big:after { top: -50%; left: -100%; }

        .small {
          width:25%;
          height:25%;
          top:37.5%;
          left:12.5%;
          cursor: pointer;
        }
        .small.two { left:62.5%; }
        .small:after { top: -150%; left: -50%; }

        @keyframes rotate {
          to { transform:rotate(-360deg); }
        }
        form {
            display: flex;
            margin: 0;
            padding: 0;
        }
        input {
            display: none;
            position: relative;
            top: 90vh;
            padding: 0;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 5px;
            width: 145px;
            text-align: center;
        }
        input:focus {
            outline: none;
        }
    </style>
    
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js\"></script>
</head>
<body>
    

    <div class=\"container circle\">
    <div class=\"main one\"></div>
      <div class=\"main two\"></div>
      
      <div class=\"big circle one\"></div>
      <div class=\"big circle two\"></div>
      
      <div class=\"small circle one form_disp_button\"></div>
      <div class=\"small circle two form_disp_button\"></div>
    </div>
      
    <form id =\"form\" action=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\" method=\"post\">
        <input id=\"input\" type=\"password\" name=\"password\" class=\"form-control\" autofocus>
    </form>
    <!-- jQuery -->
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$('.form_disp_button').click(function(){
            \$(\"#input\").toggle();
            \$(\"#input\").focus();
        }); 
    </script>


   
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin_log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 124,  155 => 120,  72 => 40,  68 => 39,  42 => 16,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin_log.html.twig", "/home/u372711435/views/admin_log.html.twig");
    }
}
