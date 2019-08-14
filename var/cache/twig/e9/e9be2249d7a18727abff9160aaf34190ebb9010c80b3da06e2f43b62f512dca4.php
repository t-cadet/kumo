<?php

/* infos.html.twig */
class __TwigTemplate_c1c9fbbad12784bb13d91ac54dc3aef48ca003cc23b47be91f40e52aac881947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "infos.html.twig", 1);
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
        echo "Informations";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-0 col-md-5 col-sm-offset-3 col-sm-6\">
\t\t\t<div class = \"infos_text\">
\t\t\t\t<h2>Informations générales</h2>
\t\t\t\t<p><em>Titre</em> : 蜘蛛ですが、なにか？</p>
\t\t\t\t<p><em>Prononciation</em> : Kumo desu ga, nani ka ?</p>
\t\t\t\t<p><em>Titre français</em> : Je suis une araignée, ça vous dérange ?</p>
\t\t\t\t<p><em>Auteur</em> : 馬場翁 (Baba Okina)</p>
\t\t\t\t<p><em>Texte original</em> : <a href=\"http://ncode.syosetu.com/n7975cr/\">蜘蛛ですが、なにか？</a></p>
\t\t\t\t<p><em>Chapitres disponibles</em> : ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo " </p>
\t\t\t\t<p><em>Traduit du japonais par</em> : Tristan Cadet</p>
\t\t\t\t<p><em>Contact</em> : projet.kumo@gmail.com</p>
\t\t\t\t<p><em>Remarque technique</em> : les notes de traduction sont symbolisées par un astérisque, il est coloré en rouge s'il s'agit d'une simple note et en bleu si la note s'accompagne d'un lien URL. Les notes s'affichent au survol de l'astérisque par la souris, elles ne sont donc pas accessibles sur les appareils tactiles.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-7 col-xs-12\">
\t\t\t<div class=\"translator_word\">
\t\t\t\t<h2>Mot du traducteur :</h2>
\t\t\t\t<p>
\t\t\t\tSalut, j'espère que vous appréciez ce web novel, je suis un simple étudiant en japonais et c'est la première fois que je me lance dans un projet de traduction, il est donc possible qu'il y ait des imprécisions ou des erreurs de traduction. De même j'essaie de ne pas faire de fautes de français, mais on n'est jamais à l'abri, veuillez donc me pardonner. Je ne pense pas traduire tous les chapitres et je ne garantis pas un rhytme régulier de publication, mais je vais tout de même faire de mon mieux jusqu'à la fin de l'été (2017), c'est-à-dire jusqu'à la reprise des cours, après quoi je n'aurai plus autant de temps.</p>
\t\t\t\t<p>
\t\t\t\tPour parler un peu des difficultés de traduction, le texte prend beaucoup de libertés au niveau des transitions entre récit et pensées du personnage principal, chose que je ne suis pas habitué à voir dans les livres français. Le japonais contient aussi de nombreuses interjections et particules difficiles à traduire littéralement. J'espère malgré tout réussir à vous offrir une traduction de bonne facture. </p>
\t\t\t\t<p>
\t\t\t\tPour ceux qui ne voudraient pas attendre, il existe <a href=\"https://turb0translation.blogspot.fr/2015/06/kumo-desuga-nanika-chapter-1.html\">ici</a> une traduction anglaise et vous pouvez bien sûr accéder à la version japonaise dont le lien est fourni dans l'encart <em>Informations générales</em> si vous parlez la langue. Sachez aussi qu'il existe une adaptation en manga. Sur ce, j'arrête de parler, et je vous laisse à votre lecture ! 
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "infos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "infos.html.twig", "/home/u372711435/views/infos.html.twig");
    }
}
