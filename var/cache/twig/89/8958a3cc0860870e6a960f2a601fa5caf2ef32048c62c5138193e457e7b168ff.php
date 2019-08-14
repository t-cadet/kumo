<?php

/* index.html.twig */
class __TwigTemplate_8b11d095780a0fa37ad6de52582bdaeb94cac4e7c019747859940ddb0a078b85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"novel_title\">Je suis une araignée, ça vous dérange ?</h1>
<div class=\"row\">
\t<div class=\"synopsis col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8\">
\t\t<h2>Synopsis</h2> 
\t\t<p>Un monde dans lequel héros et roi-démon luttent continuellement. Leur formidable magie a voyagé par-delà les mondes pour exploser dans la salle de classe d’un certain lycée. Les élèves tués par l’explosion se sont réincarnés dans une dimension parallèle. Notre héroïne qui a déjà la plus mauvaise réputation de la classe, s’est vue renaître de toutes les choses possibles en une araignée-démon. Seulement, elle accepte cette nouvelle situation avec une volonté si forte qu’elle en est étrange, et s’adapte relativement vite. Voici l’histoire d’une héroïne devenue araignée-démon, survivant et allant de l’avant tant bien que mal.</p>
\t</div>
</div>
<div class=\"index_table\">
\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chapters"]) ? $context["chapters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["chapter"]) {
            // line 15
            echo "\t\t<article class=\"row\">
\t\t    <a  class=\"index_entry col-sm-11 col-xs-12\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chapter", array("id" => $this->getAttribute($context["chapter"], "id", array()))), "html", null, true);
            echo "\">
\t\t    \t<span class=\"index_prefix col-md-2 col-xs-1\"> ";
            // line 17
            echo $this->getAttribute($context["chapter"], "prefix", array());
            echo " </span>
\t\t    \t<span class=\"index_title col-lg-8 col-sm-9 col-xs-10\"> ";
            // line 18
            echo $this->getAttribute($context["chapter"], "title", array());
            echo " </span>
\t\t    \t<span class=\"index_date col-md-1 col-sm-2 hidden-xs\"> ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["chapter"], "date", array()), "d/m/Y"), "html", null, true);
            echo " </span>
\t\t    </a>
\t\t</article>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  52 => 15,  48 => 14,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/home/u372711435/views/index.html.twig");
    }
}
