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
        $__internal_5bcdb8804fb124b57a28337df6fb2414e197a9cdc06c9d2f99c5eab01002083c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bcdb8804fb124b57a28337df6fb2414e197a9cdc06c9d2f99c5eab01002083c->enter($__internal_5bcdb8804fb124b57a28337df6fb2414e197a9cdc06c9d2f99c5eab01002083c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/client.html.twig"));

        $__internal_1f6a9c258eaceb0dc7d7d297541bcf0495c24d29bf64bbd894c5f2a00ba04991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6a9c258eaceb0dc7d7d297541bcf0495c24d29bf64bbd894c5f2a00ba04991->enter($__internal_1f6a9c258eaceb0dc7d7d297541bcf0495c24d29bf64bbd894c5f2a00ba04991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bcdb8804fb124b57a28337df6fb2414e197a9cdc06c9d2f99c5eab01002083c->leave($__internal_5bcdb8804fb124b57a28337df6fb2414e197a9cdc06c9d2f99c5eab01002083c_prof);

        
        $__internal_1f6a9c258eaceb0dc7d7d297541bcf0495c24d29bf64bbd894c5f2a00ba04991->leave($__internal_1f6a9c258eaceb0dc7d7d297541bcf0495c24d29bf64bbd894c5f2a00ba04991_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17e6e8fb8ae8db6f0207a79dac966137537e1c056e60717bbf5e1b8507259d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e6e8fb8ae8db6f0207a79dac966137537e1c056e60717bbf5e1b8507259d11->enter($__internal_17e6e8fb8ae8db6f0207a79dac966137537e1c056e60717bbf5e1b8507259d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ee3cec9d7423f073f93ea69d2d94a5c5ef69cc71c12a8b16c91603f7e1c082f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee3cec9d7423f073f93ea69d2d94a5c5ef69cc71c12a8b16c91603f7e1c082f->enter($__internal_2ee3cec9d7423f073f93ea69d2d94a5c5ef69cc71c12a8b16c91603f7e1c082f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Revenir sur la page d'accueil</a></button>
</div>




";
        
        $__internal_2ee3cec9d7423f073f93ea69d2d94a5c5ef69cc71c12a8b16c91603f7e1c082f->leave($__internal_2ee3cec9d7423f073f93ea69d2d94a5c5ef69cc71c12a8b16c91603f7e1c082f_prof);

        
        $__internal_17e6e8fb8ae8db6f0207a79dac966137537e1c056e60717bbf5e1b8507259d11->leave($__internal_17e6e8fb8ae8db6f0207a79dac966137537e1c056e60717bbf5e1b8507259d11_prof);

    }

    // line 69
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6a50b448ac87264305605cdcc6f9d6ed3c659db9997f69276edbfa3b8681e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a50b448ac87264305605cdcc6f9d6ed3c659db9997f69276edbfa3b8681e1d->enter($__internal_d6a50b448ac87264305605cdcc6f9d6ed3c659db9997f69276edbfa3b8681e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bb94e17bbeb251454ac67815ac901aa2b679b25cb7848542d75b0cb037c077fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb94e17bbeb251454ac67815ac901aa2b679b25cb7848542d75b0cb037c077fe->enter($__internal_bb94e17bbeb251454ac67815ac901aa2b679b25cb7848542d75b0cb037c077fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 70
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
        
        $__internal_bb94e17bbeb251454ac67815ac901aa2b679b25cb7848542d75b0cb037c077fe->leave($__internal_bb94e17bbeb251454ac67815ac901aa2b679b25cb7848542d75b0cb037c077fe_prof);

        
        $__internal_d6a50b448ac87264305605cdcc6f9d6ed3c659db9997f69276edbfa3b8681e1d->leave($__internal_d6a50b448ac87264305605cdcc6f9d6ed3c659db9997f69276edbfa3b8681e1d_prof);

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
        return array (  135 => 70,  126 => 69,  109 => 61,  50 => 4,  41 => 3,  11 => 1,);
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
{% endblock %}", "vues/client.html.twig", "/Applications/MAMP/htdocs/symphony/LFB-Projet-BL/app/Resources/views/vues/client.html.twig");
    }
}
