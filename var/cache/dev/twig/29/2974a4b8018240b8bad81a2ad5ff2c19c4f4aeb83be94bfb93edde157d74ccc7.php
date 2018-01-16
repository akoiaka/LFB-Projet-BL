<?php

/* vues/client.html.twig */
class __TwigTemplate_87e9c18474833e1680f0ffed69216a234d51a10f903418e9faefb15c2d91f020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/client.html.twig", 1);
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
        $__internal_4c6095ab96d66a4396bd819f6690c64a10991c47c704b1fa7a43088e2a46a334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6095ab96d66a4396bd819f6690c64a10991c47c704b1fa7a43088e2a46a334->enter($__internal_4c6095ab96d66a4396bd819f6690c64a10991c47c704b1fa7a43088e2a46a334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/client.html.twig"));

        $__internal_7156fb0f55a0488262021e5920d1b69cd2799b8d9c774411e6b4db0d5b0991e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7156fb0f55a0488262021e5920d1b69cd2799b8d9c774411e6b4db0d5b0991e4->enter($__internal_7156fb0f55a0488262021e5920d1b69cd2799b8d9c774411e6b4db0d5b0991e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c6095ab96d66a4396bd819f6690c64a10991c47c704b1fa7a43088e2a46a334->leave($__internal_4c6095ab96d66a4396bd819f6690c64a10991c47c704b1fa7a43088e2a46a334_prof);

        
        $__internal_7156fb0f55a0488262021e5920d1b69cd2799b8d9c774411e6b4db0d5b0991e4->leave($__internal_7156fb0f55a0488262021e5920d1b69cd2799b8d9c774411e6b4db0d5b0991e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60ccba7af5c3c52974fb3a05a1bf30fb755b3f45f8164832acfe7770a7d419ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ccba7af5c3c52974fb3a05a1bf30fb755b3f45f8164832acfe7770a7d419ba->enter($__internal_60ccba7af5c3c52974fb3a05a1bf30fb755b3f45f8164832acfe7770a7d419ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de605ca7e50602883702f8074a6b03412d015f7d03add2f1724876b85b9c19e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de605ca7e50602883702f8074a6b03412d015f7d03add2f1724876b85b9c19e9->enter($__internal_de605ca7e50602883702f8074a6b03412d015f7d03add2f1724876b85b9c19e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"en-tete\">
    <img>LOGO LFB</img>
    <button>Fermer la Fenêtre</button>

</div>
<div>
<div class=\"well titre\" for=\"fiche\">FICHE CLIENT</div>
<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\">Informations Générales</div>
  <div class=\"panel-body nom\">
    <p id=\"nom\">Nom</p>
  </div>

  <!-- List group -->
  <ul class=\"list-group\">
    <li class=\"list-group-item\">Code</li>
    <li class=\"list-group-item\">Nom</li>
    <li class=\"list-group-item\">SIRET</li>
    <li class=\"list-group-item\">N.A.F.(A.P.E.)</li>
    <li class=\"list-group-item\">Représentant</li>
    <li class=\"list-group-item\">Forme Juridique</li>

  </ul>
</div>
<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\">Coordonnées</div>
  <div class=\"panel-body\">
  </div>

  <!-- List group -->
  <ul class=\"list-group\">
    <li class=\"list-group-item\">Société</li>
    <li class=\"list-group-item\">Adresse</li>
    <li class=\"list-group-item\">Code Postal</li>
    <li class=\"list-group-item\">Ville</li>
    <li class=\"list-group-item\">Pays</li>
    <li class=\"list-group-item\">E-mail</li>
    <li class=\"list-group-item\">Site Internet</li>
    <li class=\"list-group-item\">Téléphone</li>
    <li class=\"list-group-item\">Fax</li>
    <li class=\"list-group-item\">Portable</li>
    <li class=\"list-group-item\">Telex</li>
  </ul>
</div>
<div class=\"row endpage\">
    <button class=\"col-lg-4 left\" name=\"left\">preview</button>
    <div class=\"col-lg-4\">
        <button class=\"print\" name=\"print\">IMPRIMER</button>
        <button class=\"bl\" name=\"bl\">Créer un BL</button>
    </div>
    <button class=\"col-lg-4 right\" name=\"right\">next</button>
</div>
<div>
        <button class=\"btn btn-primary btn-danger\" style=\"width: 500px; height: 30px\">Supprimer cette fiche</button>
        <button class=\"btn btn-primary-blue\" style=\"width: 500px; height: 30px\">Modifier cette fiche</button>
        <button class=\"btn btn-primary btn-success\" style=\"width: 1000px; height: 30px\">Ajouter un nouvel client</button>
        <button class=\"btn btn-primary\" style=\"width: 1000px; height: 30px\"><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Revenir sur la page d'accueil</a></button>
</div>




";
        
        $__internal_de605ca7e50602883702f8074a6b03412d015f7d03add2f1724876b85b9c19e9->leave($__internal_de605ca7e50602883702f8074a6b03412d015f7d03add2f1724876b85b9c19e9_prof);

        
        $__internal_60ccba7af5c3c52974fb3a05a1bf30fb755b3f45f8164832acfe7770a7d419ba->leave($__internal_60ccba7af5c3c52974fb3a05a1bf30fb755b3f45f8164832acfe7770a7d419ba_prof);

    }

    // line 70
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96186e9cb2f88e7679736678d333996914fbd78310865a38e372f646d0f9113d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96186e9cb2f88e7679736678d333996914fbd78310865a38e372f646d0f9113d->enter($__internal_96186e9cb2f88e7679736678d333996914fbd78310865a38e372f646d0f9113d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aa43f27a34fc7a99544adc06397128eefb45371c7b7139f54bf68bbed4322a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa43f27a34fc7a99544adc06397128eefb45371c7b7139f54bf68bbed4322a2d->enter($__internal_aa43f27a34fc7a99544adc06397128eefb45371c7b7139f54bf68bbed4322a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 71
        echo "    <style>
        * {}
        button {
            margin-top: 40px;
            display: flex;
        }
        select{
            width: 80%;
        }
        .en-tete{
            width: 10%;
            display: flex;
            }
        .panel{
        width: 80%;
        }
        .left, .right {
        width: 20%;
        }
        .print, .bl{
        width: 40%;
        }
        .endpage{
        text-align: center
        }
        /*#nom{*/
        /*overflow:scroll;*/
        /*}*/
    </style>
";
        
        $__internal_aa43f27a34fc7a99544adc06397128eefb45371c7b7139f54bf68bbed4322a2d->leave($__internal_aa43f27a34fc7a99544adc06397128eefb45371c7b7139f54bf68bbed4322a2d_prof);

        
        $__internal_96186e9cb2f88e7679736678d333996914fbd78310865a38e372f646d0f9113d->leave($__internal_96186e9cb2f88e7679736678d333996914fbd78310865a38e372f646d0f9113d_prof);

    }

    public function getTemplateName()
    {
        return "vues/client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 71,  127 => 70,  110 => 62,  50 => 4,  41 => 3,  11 => 1,);
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
<div class=\"en-tete\">
    <img>LOGO LFB</img>
    <button>Fermer la Fenêtre</button>

</div>
<div>
<div class=\"well titre\" for=\"fiche\">FICHE CLIENT</div>
<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\">Informations Générales</div>
  <div class=\"panel-body nom\">
    <p id=\"nom\">Nom</p>
  </div>

  <!-- List group -->
  <ul class=\"list-group\">
    <li class=\"list-group-item\">Code</li>
    <li class=\"list-group-item\">Nom</li>
    <li class=\"list-group-item\">SIRET</li>
    <li class=\"list-group-item\">N.A.F.(A.P.E.)</li>
    <li class=\"list-group-item\">Représentant</li>
    <li class=\"list-group-item\">Forme Juridique</li>

  </ul>
</div>
<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\">Coordonnées</div>
  <div class=\"panel-body\">
  </div>

  <!-- List group -->
  <ul class=\"list-group\">
    <li class=\"list-group-item\">Société</li>
    <li class=\"list-group-item\">Adresse</li>
    <li class=\"list-group-item\">Code Postal</li>
    <li class=\"list-group-item\">Ville</li>
    <li class=\"list-group-item\">Pays</li>
    <li class=\"list-group-item\">E-mail</li>
    <li class=\"list-group-item\">Site Internet</li>
    <li class=\"list-group-item\">Téléphone</li>
    <li class=\"list-group-item\">Fax</li>
    <li class=\"list-group-item\">Portable</li>
    <li class=\"list-group-item\">Telex</li>
  </ul>
</div>
<div class=\"row endpage\">
    <button class=\"col-lg-4 left\" name=\"left\">preview</button>
    <div class=\"col-lg-4\">
        <button class=\"print\" name=\"print\">IMPRIMER</button>
        <button class=\"bl\" name=\"bl\">Créer un BL</button>
    </div>
    <button class=\"col-lg-4 right\" name=\"right\">next</button>
</div>
<div>
        <button class=\"btn btn-primary btn-danger\" style=\"width: 500px; height: 30px\">Supprimer cette fiche</button>
        <button class=\"btn btn-primary-blue\" style=\"width: 500px; height: 30px\">Modifier cette fiche</button>
        <button class=\"btn btn-primary btn-success\" style=\"width: 1000px; height: 30px\">Ajouter un nouvel client</button>
        <button class=\"btn btn-primary\" style=\"width: 1000px; height: 30px\"><a href=\"{{ path('page1') }}\">Revenir sur la page d'accueil</a></button>
</div>




{% endblock %}

{% block stylesheets %}
    <style>
        * {}
        button {
            margin-top: 40px;
            display: flex;
        }
        select{
            width: 80%;
        }
        .en-tete{
            width: 10%;
            display: flex;
            }
        .panel{
        width: 80%;
        }
        .left, .right {
        width: 20%;
        }
        .print, .bl{
        width: 40%;
        }
        .endpage{
        text-align: center
        }
        /*#nom{*/
        /*overflow:scroll;*/
        /*}*/
    </style>
{% endblock %}", "vues/client.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/vues/client.html.twig");
    }
}
