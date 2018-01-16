<?php

/* vues/article.html.twig */
class __TwigTemplate_7f4224fc0eda05dfc88f370b72c3cb26dc59112dbf405a507fd45996b14ca111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/article.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
        $__internal_d7f4c2b5fdac418efe1c8e28f2f65cb1841584b9ed113329f78f2070475be548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f4c2b5fdac418efe1c8e28f2f65cb1841584b9ed113329f78f2070475be548->enter($__internal_d7f4c2b5fdac418efe1c8e28f2f65cb1841584b9ed113329f78f2070475be548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/article.html.twig"));

        $__internal_4dae9664c8434203d673c9450a8810dc80b6a27184bfa1808ab662e1bd6a84f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dae9664c8434203d673c9450a8810dc80b6a27184bfa1808ab662e1bd6a84f8->enter($__internal_4dae9664c8434203d673c9450a8810dc80b6a27184bfa1808ab662e1bd6a84f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7f4c2b5fdac418efe1c8e28f2f65cb1841584b9ed113329f78f2070475be548->leave($__internal_d7f4c2b5fdac418efe1c8e28f2f65cb1841584b9ed113329f78f2070475be548_prof);

        
        $__internal_4dae9664c8434203d673c9450a8810dc80b6a27184bfa1808ab662e1bd6a84f8->leave($__internal_4dae9664c8434203d673c9450a8810dc80b6a27184bfa1808ab662e1bd6a84f8_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c5004cff7c110ca6a537d639042026c16834778c0f9fc992a7b965b1cab693d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5004cff7c110ca6a537d639042026c16834778c0f9fc992a7b965b1cab693d6->enter($__internal_c5004cff7c110ca6a537d639042026c16834778c0f9fc992a7b965b1cab693d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2c76bb140a6c48494d11fca7d5aed8f7a711087002978191d6a94ad0769bc36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c76bb140a6c48494d11fca7d5aed8f7a711087002978191d6a94ad0769bc36f->enter($__internal_2c76bb140a6c48494d11fca7d5aed8f7a711087002978191d6a94ad0769bc36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    logo
    <button>Fermer la fenêtre</button>
";
        
        $__internal_2c76bb140a6c48494d11fca7d5aed8f7a711087002978191d6a94ad0769bc36f->leave($__internal_2c76bb140a6c48494d11fca7d5aed8f7a711087002978191d6a94ad0769bc36f_prof);

        
        $__internal_c5004cff7c110ca6a537d639042026c16834778c0f9fc992a7b965b1cab693d6->leave($__internal_c5004cff7c110ca6a537d639042026c16834778c0f9fc992a7b965b1cab693d6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4080eb310aff3a50d22ee649879703842cc37aaf2d30a5150764aa723b081cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4080eb310aff3a50d22ee649879703842cc37aaf2d30a5150764aa723b081cf5->enter($__internal_4080eb310aff3a50d22ee649879703842cc37aaf2d30a5150764aa723b081cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_456ae25f5db4c755df9b5ac314a8bb025226e53a056195f2bf1abcee0403606f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456ae25f5db4c755df9b5ac314a8bb025226e53a056195f2bf1abcee0403606f->enter($__internal_456ae25f5db4c755df9b5ac314a8bb025226e53a056195f2bf1abcee0403606f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"well\" for=\"article\">Libellé ARTICLE</div>
    <div class=\"well code\" name=\"code\">CODE</div>
    <div class=\"row\">
        <div class=\"col-lg-6 well\" name=\"famille\">Famille</div>
        <div class=\"col-lg-6\" name=\"vide\"></div>
        <div class=\"col-lg-6\" name=\"vide2\"></div>
        <div class=\"col-lg-6\" name=\"prixprod\">
            <div class=\"well\">Prix HT</div>
            <div class=\"well\">Prix TTC</div>
            <div class=\"well\">Quantité en stock</div>
        </div>
    </div>
    <div>
        <button class=\"btn btn-primary btn-danger\" style=\"width: 500px; height: 30px\">Supprimer cette fiche</button>
        <button class=\"btn btn-primary-blue\" style=\"width: 500px; height: 30px\">Modifier cette fiche</button>
        <button class=\"btn btn-primary btn-success\" style=\"width: 1000px; height: 30px\">Ajouter un nouvel article</button>
        <button class=\"btn btn-primary\" style=\"width: 1000px; height: 30px\"><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Revenir sur la page d'accueil</a></button>
    </div>
";
        
        $__internal_456ae25f5db4c755df9b5ac314a8bb025226e53a056195f2bf1abcee0403606f->leave($__internal_456ae25f5db4c755df9b5ac314a8bb025226e53a056195f2bf1abcee0403606f_prof);

        
        $__internal_4080eb310aff3a50d22ee649879703842cc37aaf2d30a5150764aa723b081cf5->leave($__internal_4080eb310aff3a50d22ee649879703842cc37aaf2d30a5150764aa723b081cf5_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c2801ceece3f79aa55feeced03c8e9f5c4c78f68f3fec5cdadc497dde9091c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2801ceece3f79aa55feeced03c8e9f5c4c78f68f3fec5cdadc497dde9091c3->enter($__internal_3c2801ceece3f79aa55feeced03c8e9f5c4c78f68f3fec5cdadc497dde9091c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_982182737c9a4d699a181ff40ddf84496e89ebac93c3962f79f0feb391c89bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982182737c9a4d699a181ff40ddf84496e89ebac93c3962f79f0feb391c89bda->enter($__internal_982182737c9a4d699a181ff40ddf84496e89ebac93c3962f79f0feb391c89bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "    <style>
        * {text-align:center;}
        button {
            margin-top: 40px;
            display: flex;
        }
        .code{
            width: 80%;
            margin: auto;
        }

    </style>
";
        
        $__internal_982182737c9a4d699a181ff40ddf84496e89ebac93c3962f79f0feb391c89bda->leave($__internal_982182737c9a4d699a181ff40ddf84496e89ebac93c3962f79f0feb391c89bda_prof);

        
        $__internal_3c2801ceece3f79aa55feeced03c8e9f5c4c78f68f3fec5cdadc497dde9091c3->leave($__internal_3c2801ceece3f79aa55feeced03c8e9f5c4c78f68f3fec5cdadc497dde9091c3_prof);

    }

    public function getTemplateName()
    {
        return "vues/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  103 => 29,  90 => 25,  72 => 9,  63 => 8,  51 => 4,  42 => 3,  11 => 1,);
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

{% block header %}
    logo
    <button>Fermer la fenêtre</button>
{% endblock %}

{% block body %}
    <div class=\"well\" for=\"article\">Libellé ARTICLE</div>
    <div class=\"well code\" name=\"code\">CODE</div>
    <div class=\"row\">
        <div class=\"col-lg-6 well\" name=\"famille\">Famille</div>
        <div class=\"col-lg-6\" name=\"vide\"></div>
        <div class=\"col-lg-6\" name=\"vide2\"></div>
        <div class=\"col-lg-6\" name=\"prixprod\">
            <div class=\"well\">Prix HT</div>
            <div class=\"well\">Prix TTC</div>
            <div class=\"well\">Quantité en stock</div>
        </div>
    </div>
    <div>
        <button class=\"btn btn-primary btn-danger\" style=\"width: 500px; height: 30px\">Supprimer cette fiche</button>
        <button class=\"btn btn-primary-blue\" style=\"width: 500px; height: 30px\">Modifier cette fiche</button>
        <button class=\"btn btn-primary btn-success\" style=\"width: 1000px; height: 30px\">Ajouter un nouvel article</button>
        <button class=\"btn btn-primary\" style=\"width: 1000px; height: 30px\"><a href=\"{{ path('page1') }}\">Revenir sur la page d'accueil</a></button>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        * {text-align:center;}
        button {
            margin-top: 40px;
            display: flex;
        }
        .code{
            width: 80%;
            margin: auto;
        }

    </style>
{% endblock %}


", "vues/article.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/vues/article.html.twig");
    }
}
