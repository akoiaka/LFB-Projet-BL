<?php

/* vues/accueil.html.twig */
class __TwigTemplate_555f75ac0990830408049b468848674c04d6e0bac5f07bb8a42d0dcbbde1171a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ead9fe4011931226c358997b9aa581912af81f6d5843ad74d4fc4cdcbb620826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead9fe4011931226c358997b9aa581912af81f6d5843ad74d4fc4cdcbb620826->enter($__internal_ead9fe4011931226c358997b9aa581912af81f6d5843ad74d4fc4cdcbb620826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/accueil.html.twig"));

        $__internal_77376738c3c53048b58ff54bb2c3144fed4d717af444e81dddf6733109673ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77376738c3c53048b58ff54bb2c3144fed4d717af444e81dddf6733109673ec3->enter($__internal_77376738c3c53048b58ff54bb2c3144fed4d717af444e81dddf6733109673ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead9fe4011931226c358997b9aa581912af81f6d5843ad74d4fc4cdcbb620826->leave($__internal_ead9fe4011931226c358997b9aa581912af81f6d5843ad74d4fc4cdcbb620826_prof);

        
        $__internal_77376738c3c53048b58ff54bb2c3144fed4d717af444e81dddf6733109673ec3->leave($__internal_77376738c3c53048b58ff54bb2c3144fed4d717af444e81dddf6733109673ec3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b3418a651b683a512269ce5ad29c3d463e5d80baa7a9cf9d2009d1c1f49aa65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3418a651b683a512269ce5ad29c3d463e5d80baa7a9cf9d2009d1c1f49aa65->enter($__internal_4b3418a651b683a512269ce5ad29c3d463e5d80baa7a9cf9d2009d1c1f49aa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a33184e65224906631f119467611afe369d2bda3feb562fc9e89f1aaffe326af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33184e65224906631f119467611afe369d2bda3feb562fc9e89f1aaffe326af->enter($__internal_a33184e65224906631f119467611afe369d2bda3feb562fc9e89f1aaffe326af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Bienvenue sur votre plateforme de travail</h1>
    <h4>Que souhaitez-vous faire ?</h4>

<button class=\"btn btn-primary\" style=\"width: 400px; height: 50px\">
    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\">CONSULTER LES ARTICLES</a>
</button>
<button class=\"btn btn-primary\" style=\"width: 400px; height: 50px\">
    <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clients");
        echo "\">VOIR MES CLIENTS</a>
</button>
<button class=\"btn btn-primary\" style=\"width: 400px; height: 50px\">
    <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archives");
        echo "\">CONSULTER LES ARCHIVES</a>
</button>
<button class=\"btn btn-primary\" style=\"width: 400px; height: 50px\">
    <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bl");
        echo "\">CREER UN BON DE LIVRAISON</a>
</button>
<button class=\"btn btn-primary\" style=\"width: 400px; height: 50px\">
    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factures");
        echo "\">CREER UNE FACTURE PRO FORMA</a>
</button>
";
        
        $__internal_a33184e65224906631f119467611afe369d2bda3feb562fc9e89f1aaffe326af->leave($__internal_a33184e65224906631f119467611afe369d2bda3feb562fc9e89f1aaffe326af_prof);

        
        $__internal_4b3418a651b683a512269ce5ad29c3d463e5d80baa7a9cf9d2009d1c1f49aa65->leave($__internal_4b3418a651b683a512269ce5ad29c3d463e5d80baa7a9cf9d2009d1c1f49aa65_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_412cfc8d5581200664b7fd5bc049680a8eb933d57faa7b26e033670005c7c6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412cfc8d5581200664b7fd5bc049680a8eb933d57faa7b26e033670005c7c6e1->enter($__internal_412cfc8d5581200664b7fd5bc049680a8eb933d57faa7b26e033670005c7c6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f14564743c853aa004301d5e406e64e1bb48b6fbed7e1345133e7d889bb27d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14564743c853aa004301d5e406e64e1bb48b6fbed7e1345133e7d889bb27d63->enter($__internal_f14564743c853aa004301d5e406e64e1bb48b6fbed7e1345133e7d889bb27d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "    <style>
       * {
           text-align:center;
       }
       button {
            margin-top: 40px;
           display: flex;
flex-direction: column
       }
    </style>
";
        
        $__internal_f14564743c853aa004301d5e406e64e1bb48b6fbed7e1345133e7d889bb27d63->leave($__internal_f14564743c853aa004301d5e406e64e1bb48b6fbed7e1345133e7d889bb27d63_prof);

        
        $__internal_412cfc8d5581200664b7fd5bc049680a8eb933d57faa7b26e033670005c7c6e1->leave($__internal_412cfc8d5581200664b7fd5bc049680a8eb933d57faa7b26e033670005c7c6e1_prof);

    }

    public function getTemplateName()
    {
        return "vues/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  93 => 23,  80 => 19,  74 => 16,  68 => 13,  62 => 10,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<h1>Bienvenue sur votre plateforme de travail</h1>
    <h4>Que souhaitez-vous faire ?</h4>

<button class=\"btn btn-primary\" style=\"width: 400px; height: 50px\">
    <a href=\"{{ path('articles') }}\">CONSULTER LES ARTICLES</a>
</button>
<button class=\"btn btn-primary\" style=\"width: 400px; height: 50px\">
    <a href=\"{{ path('clients') }}\">VOIR MES CLIENTS</a>
</button>
<button class=\"btn btn-primary\" style=\"width: 400px; height: 50px\">
    <a href=\"{{ path('archives') }}\">CONSULTER LES ARCHIVES</a>
</button>
<button class=\"btn btn-primary\" style=\"width: 400px; height: 50px\">
    <a href=\"{{ path('bl') }}\">CREER UN BON DE LIVRAISON</a>
</button>
<button class=\"btn btn-primary\" style=\"width: 400px; height: 50px\">
    <a href=\"{{ path('factures') }}\">CREER UNE FACTURE PRO FORMA</a>
</button>
{% endblock %}

{% block stylesheets %}
    <style>
       * {
           text-align:center;
       }
       button {
            margin-top: 40px;
           display: flex;
flex-direction: column
       }
    </style>
{% endblock %}", "vues/accueil.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/vues/accueil.html.twig");
    }
}
