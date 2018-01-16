<?php

/* vues/bl.html.twig */
class __TwigTemplate_1c82331b28680706b941938305128bca724ccdbb3575bbeee65032ca477a0818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/bl.html.twig", 1);
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
        $__internal_6d684582a2599bd5a2610c613bcc2f2ad47a5cea418bb4ef584033396d942b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d684582a2599bd5a2610c613bcc2f2ad47a5cea418bb4ef584033396d942b45->enter($__internal_6d684582a2599bd5a2610c613bcc2f2ad47a5cea418bb4ef584033396d942b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/bl.html.twig"));

        $__internal_84b3c4bd0b9fd41f4836f93aa8b8e007c84daa29f5cd0354a454272543d0e304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b3c4bd0b9fd41f4836f93aa8b8e007c84daa29f5cd0354a454272543d0e304->enter($__internal_84b3c4bd0b9fd41f4836f93aa8b8e007c84daa29f5cd0354a454272543d0e304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/bl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d684582a2599bd5a2610c613bcc2f2ad47a5cea418bb4ef584033396d942b45->leave($__internal_6d684582a2599bd5a2610c613bcc2f2ad47a5cea418bb4ef584033396d942b45_prof);

        
        $__internal_84b3c4bd0b9fd41f4836f93aa8b8e007c84daa29f5cd0354a454272543d0e304->leave($__internal_84b3c4bd0b9fd41f4836f93aa8b8e007c84daa29f5cd0354a454272543d0e304_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_4b03fdeac7b6fffae157b77ba2cf5ae3da42aa8a2cb5cca0a3ce8e08eb83b2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b03fdeac7b6fffae157b77ba2cf5ae3da42aa8a2cb5cca0a3ce8e08eb83b2b8->enter($__internal_4b03fdeac7b6fffae157b77ba2cf5ae3da42aa8a2cb5cca0a3ce8e08eb83b2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9a07437bb9aa400859c963e8afba063172e20c4a5628e32acf21f19c6cddc639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a07437bb9aa400859c963e8afba063172e20c4a5628e32acf21f19c6cddc639->enter($__internal_9a07437bb9aa400859c963e8afba063172e20c4a5628e32acf21f19c6cddc639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <div class=\"en-tete\">
        <img>LOGO LFB</img>
        <button><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Annuler</a></button>
    </div>
";
        
        $__internal_9a07437bb9aa400859c963e8afba063172e20c4a5628e32acf21f19c6cddc639->leave($__internal_9a07437bb9aa400859c963e8afba063172e20c4a5628e32acf21f19c6cddc639_prof);

        
        $__internal_4b03fdeac7b6fffae157b77ba2cf5ae3da42aa8a2cb5cca0a3ce8e08eb83b2b8->leave($__internal_4b03fdeac7b6fffae157b77ba2cf5ae3da42aa8a2cb5cca0a3ce8e08eb83b2b8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_232ce7effd6517748e623253f0d5c6d3734e4eb69f511197c1e78bc7167c3cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232ce7effd6517748e623253f0d5c6d3734e4eb69f511197c1e78bc7167c3cf1->enter($__internal_232ce7effd6517748e623253f0d5c6d3734e4eb69f511197c1e78bc7167c3cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cd909b725c1b518c3cdff87b52730b7e32a3a08fcdc5b9abe7f700a00f061cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd909b725c1b518c3cdff87b52730b7e32a3a08fcdc5b9abe7f700a00f061cf->enter($__internal_3cd909b725c1b518c3cdff87b52730b7e32a3a08fcdc5b9abe7f700a00f061cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <h1>CRÉATION DU BON DE LIVRAISON</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"well\">Numéro</div>
            <div class=\"well\">Date</div>
            <div class=\"well\">Calendar</div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"well\">Référence client</div>
            <div class=\"well\">Nom client</div>
            <div class=\"well\">Représentant</div>
            <div class=\"well\">Remarque</div>
        </div>
    </div>


    <div class=\"jumbotron\">
        <table class=\"table table-sm table-hover\">

            <thead>
                <tr>
                    <th scope=\"col\">Indice</th>
                    <th scope=\"col\">Article</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Dépôt</th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Prix unitaire HT</th>
                    <th scope=\"col\">Prix unitaire TTC</th>
                    <th scope=\"col\">Remise</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope=\"row\">N1</th>
                    <td>i1</td>
                    <td>A1</td>
                    <td>De1</td>
                    <td>D1</td>
                    <td>Q1</td>
                    <td>HT1</td>
                    <td>TTC1</td>
                    <td>REM1</td>
                </tr>
                <tr>
                    <th scope=\"row\">N1</th>
                    <td>i2</td>
                    <td>A2</td>
                    <td>De2</td>
                    <td>D2</td>
                    <td>Q2</td>
                    <td>HT2</td>
                    <td>TTC2</td>
                    <td>REM2</td>
                </tr>
            </tbody>

        </table>

    </div>
    <div class=\"bdp\">
        <button style=\"width: 300px; height: 60px\">Valider</button>
        <button style=\"width: 150px; height: 30px\">Modifier</button>
    </div>


";
        
        $__internal_3cd909b725c1b518c3cdff87b52730b7e32a3a08fcdc5b9abe7f700a00f061cf->leave($__internal_3cd909b725c1b518c3cdff87b52730b7e32a3a08fcdc5b9abe7f700a00f061cf_prof);

        
        $__internal_232ce7effd6517748e623253f0d5c6d3734e4eb69f511197c1e78bc7167c3cf1->leave($__internal_232ce7effd6517748e623253f0d5c6d3734e4eb69f511197c1e78bc7167c3cf1_prof);

    }

    // line 79
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38c7e3228894c099c413553d80e7a703079c0e2b338b454c17ab4b5e3ec8ae01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c7e3228894c099c413553d80e7a703079c0e2b338b454c17ab4b5e3ec8ae01->enter($__internal_38c7e3228894c099c413553d80e7a703079c0e2b338b454c17ab4b5e3ec8ae01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9d9db0eda3ae306f886756bfab83a6e4d0059c2f36c2ff647d22f446ff92dc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9db0eda3ae306f886756bfab83a6e4d0059c2f36c2ff647d22f446ff92dc3a->enter($__internal_9d9db0eda3ae306f886756bfab83a6e4d0059c2f36c2ff647d22f446ff92dc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 80
        echo "    <style>
        * {text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
";
        
        $__internal_9d9db0eda3ae306f886756bfab83a6e4d0059c2f36c2ff647d22f446ff92dc3a->leave($__internal_9d9db0eda3ae306f886756bfab83a6e4d0059c2f36c2ff647d22f446ff92dc3a_prof);

        
        $__internal_38c7e3228894c099c413553d80e7a703079c0e2b338b454c17ab4b5e3ec8ae01->leave($__internal_38c7e3228894c099c413553d80e7a703079c0e2b338b454c17ab4b5e3ec8ae01_prof);

    }

    public function getTemplateName()
    {
        return "vues/bl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 80,  154 => 79,  77 => 10,  68 => 9,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    <div class=\"en-tete\">
        <img>LOGO LFB</img>
        <button><a href=\"{{ path('page1') }}\">Annuler</a></button>
    </div>
{% endblock %}

{% block body %}
    <h1>CRÉATION DU BON DE LIVRAISON</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"well\">Numéro</div>
            <div class=\"well\">Date</div>
            <div class=\"well\">Calendar</div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"well\">Référence client</div>
            <div class=\"well\">Nom client</div>
            <div class=\"well\">Représentant</div>
            <div class=\"well\">Remarque</div>
        </div>
    </div>


    <div class=\"jumbotron\">
        <table class=\"table table-sm table-hover\">

            <thead>
                <tr>
                    <th scope=\"col\">Indice</th>
                    <th scope=\"col\">Article</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Dépôt</th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Prix unitaire HT</th>
                    <th scope=\"col\">Prix unitaire TTC</th>
                    <th scope=\"col\">Remise</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope=\"row\">N1</th>
                    <td>i1</td>
                    <td>A1</td>
                    <td>De1</td>
                    <td>D1</td>
                    <td>Q1</td>
                    <td>HT1</td>
                    <td>TTC1</td>
                    <td>REM1</td>
                </tr>
                <tr>
                    <th scope=\"row\">N1</th>
                    <td>i2</td>
                    <td>A2</td>
                    <td>De2</td>
                    <td>D2</td>
                    <td>Q2</td>
                    <td>HT2</td>
                    <td>TTC2</td>
                    <td>REM2</td>
                </tr>
            </tbody>

        </table>

    </div>
    <div class=\"bdp\">
        <button style=\"width: 300px; height: 60px\">Valider</button>
        <button style=\"width: 150px; height: 30px\">Modifier</button>
    </div>


{% endblock %}

{% block stylesheets %}
    <style>
        * {text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
{% endblock %}", "vues/bl.html.twig", "/Applications/MAMP/htdocs/symphony/LFB-Projet-BL/app/Resources/views/vues/bl.html.twig");
    }
}
