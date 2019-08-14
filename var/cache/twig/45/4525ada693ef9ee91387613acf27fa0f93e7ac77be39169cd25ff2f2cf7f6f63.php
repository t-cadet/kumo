<?php

/* admin_zone.html.twig */
class __TwigTemplate_8d847eb9224d3f1281676ae78012170e7055e1a593ee7977e353fecaed9f580b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin_zone.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["chapterForm"]) ? $context["chapterForm"] : null), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Ajouter/Éditer un chapitre";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "        <div class=\"alert alert-success\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    <div class=\"well\" style=\"background: none; border: 2px solid lime;\">
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["chapterForm"]) ? $context["chapterForm"] : null), 'form_start');
        echo "
        
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["chapterForm"]) ? $context["chapterForm"] : null), "id", array()), 'row');
        echo "                   
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["chapterForm"]) ? $context["chapterForm"] : null), "id", array()), 'widget');
        echo "

        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["chapterForm"]) ? $context["chapterForm"] : null), "prefix", array()), 'row');
        echo "                   
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["chapterForm"]) ? $context["chapterForm"] : null), "prefix", array()), 'widget');
        echo "

        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["chapterForm"]) ? $context["chapterForm"] : null), "title", array()), 'row');
        echo "                   
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["chapterForm"]) ? $context["chapterForm"] : null), "title", array()), 'widget');
        echo "

        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["chapterForm"]) ? $context["chapterForm"] : null), "content", array()), 'row');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["chapterForm"]) ? $context["chapterForm"] : null), "content", array()), 'widget');
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["chapterForm"]) ? $context["chapterForm"] : null), 'form_end');
        echo "
    </div>    
";
    }

    public function getTemplateName()
    {
        return "admin_zone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  102 => 27,  98 => 26,  93 => 24,  89 => 23,  84 => 21,  80 => 20,  75 => 18,  71 => 17,  66 => 15,  62 => 13,  53 => 10,  50 => 9,  46 => 8,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin_zone.html.twig", "/home/u372711435/views/admin_zone.html.twig");
    }
}
