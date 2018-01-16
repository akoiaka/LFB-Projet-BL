<?php

/* vues/listeclients.html.twig */
class __TwigTemplate_75fd56e13f0ccbdce0634900e000199083960c37f347c4d6bd83acdad7d62a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/listeclients.html.twig", 1);
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
        $__internal_aff70836e6d1a5d1dda41e527da66e825188fe55c5fbbc11aa0a3b416277b1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff70836e6d1a5d1dda41e527da66e825188fe55c5fbbc11aa0a3b416277b1a7->enter($__internal_aff70836e6d1a5d1dda41e527da66e825188fe55c5fbbc11aa0a3b416277b1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/listeclients.html.twig"));

        $__internal_a52ba0e38e0c6ea2af85dfbd53aafbc38edb6fe683fec5325bf2007f1a5fde13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52ba0e38e0c6ea2af85dfbd53aafbc38edb6fe683fec5325bf2007f1a5fde13->enter($__internal_a52ba0e38e0c6ea2af85dfbd53aafbc38edb6fe683fec5325bf2007f1a5fde13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/listeclients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aff70836e6d1a5d1dda41e527da66e825188fe55c5fbbc11aa0a3b416277b1a7->leave($__internal_aff70836e6d1a5d1dda41e527da66e825188fe55c5fbbc11aa0a3b416277b1a7_prof);

        
        $__internal_a52ba0e38e0c6ea2af85dfbd53aafbc38edb6fe683fec5325bf2007f1a5fde13->leave($__internal_a52ba0e38e0c6ea2af85dfbd53aafbc38edb6fe683fec5325bf2007f1a5fde13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed181d16ce00d4569d4f5fb0e17fae4714f261953e2638e7a6884d533ab6063f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed181d16ce00d4569d4f5fb0e17fae4714f261953e2638e7a6884d533ab6063f->enter($__internal_ed181d16ce00d4569d4f5fb0e17fae4714f261953e2638e7a6884d533ab6063f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50d8316c43dd1108af04768a34f0ad099dfd98556450e78700fe4cbce897c6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d8316c43dd1108af04768a34f0ad099dfd98556450e78700fe4cbce897c6e4->enter($__internal_50d8316c43dd1108af04768a34f0ad099dfd98556450e78700fe4cbce897c6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <img>LOGO LFB</img>
    </div>

    <div class=\"well titre\" for=\"\">LISTE DES CLIENTS</div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3\">
                <div id=\"imaginary_container\">
                    <div class=\"input-group stylish-input-group\">
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Search\" >
                        <span class=\"input-group-addon\">
                        <button type=\"submit\">
                            <span class=\"glyphicon glyphicon-search\"></span>
                        </button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">

        </div>
        <div id=\"content\" class=\"col-md-9\">

        </div>
    </div>

    <div class=\"jumbotron\">
        <table class=\"table table-sm table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Code</th>
                <th scope=\"col\">Nom Contact</th>
                <th scope=\"col\">Fax</th>
                <th scope=\"col\">Téléphone</th>
                <th scope=\"col\">Crédit disponible</th>
                <th scope=\"col\">Date de dernière commande</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\">N1</th>
                <td>001</td>
                <td>NC1</td>
                <td>F1</td>
                <td>TEL1</td>
                <td>CD1</td>
                <td>DDC1</td>
            </tr>
            <tr>
                <th scope=\"row\">N2</th>
                <td>002</td>
                <td>NC2</td>
                <td>F2</td>
                <td>TEL2</td>
                <td>CD2</td>
                <td>DDC2</td>
            </tr>
            <tr>
                <th scope=\"row\">N3</th>
                <td>003</td>
                <td>NC3</td>
                <td>F3</td>
                <td>TEL3</td>
                <td>TCD3</td>
                <td>DDC3</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div>
        <button class=\"btn btn-primary btn-success\" style=\"width: 1000px; height: 30px\">Ajouter un nouveau client</button>
        <button class=\"btn btn-primary btn-red\" style=\"width: 500px; height: 30px\">Supprimer un client</button>
        <button class=\"btn btn-primary-blue\" style=\"width: 500px; height: 30px\">Modifier un client</button>
        <button class=\"btn btn-primary\" style=\"width: 1000px; height: 30px\"><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Revenir sur la page d'accueil</a></button>
    </div>
";
        
        $__internal_50d8316c43dd1108af04768a34f0ad099dfd98556450e78700fe4cbce897c6e4->leave($__internal_50d8316c43dd1108af04768a34f0ad099dfd98556450e78700fe4cbce897c6e4_prof);

        
        $__internal_ed181d16ce00d4569d4f5fb0e17fae4714f261953e2638e7a6884d533ab6063f->leave($__internal_ed181d16ce00d4569d4f5fb0e17fae4714f261953e2638e7a6884d533ab6063f_prof);

    }

    // line 89
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7d1147164e0a933a69c7d5c4b59147cd879ad9c6fde66d66c3b042a0cdce939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d1147164e0a933a69c7d5c4b59147cd879ad9c6fde66d66c3b042a0cdce939->enter($__internal_a7d1147164e0a933a69c7d5c4b59147cd879ad9c6fde66d66c3b042a0cdce939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_22d0187bfa495afcf16c98244b32a939a455469911d2cdfbafd7aa699ad3f393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d0187bfa495afcf16c98244b32a939a455469911d2cdfbafd7aa699ad3f393->enter($__internal_22d0187bfa495afcf16c98244b32a939a455469911d2cdfbafd7aa699ad3f393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 90
        echo "    <style>

        * {
            text-align:center;
        }

        button {
            margin-top: 40px;
            display: flex;
        }

        .titre{
            width: 80%;
            margin:auto;
        }

        #imaginary_container{
            width:100%;
            margin-top:20%;
        }

        .stylish-input-group .input-group-addon{
            background: white !important;
        }

        .stylish-input-group .form-control{
            border-right:0;
            box-shadow:0 0 0;
            border-color:#ccc;
        }

        .stylish-input-group button{
            border:0;
            background:transparent;
        }

    </style>
";
        
        $__internal_22d0187bfa495afcf16c98244b32a939a455469911d2cdfbafd7aa699ad3f393->leave($__internal_22d0187bfa495afcf16c98244b32a939a455469911d2cdfbafd7aa699ad3f393_prof);

        
        $__internal_a7d1147164e0a933a69c7d5c4b59147cd879ad9c6fde66d66c3b042a0cdce939->leave($__internal_a7d1147164e0a933a69c7d5c4b59147cd879ad9c6fde66d66c3b042a0cdce939_prof);

    }

    public function getTemplateName()
    {
        return "vues/listeclients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 90,  146 => 89,  133 => 85,  50 => 4,  41 => 3,  11 => 1,);
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
    <div>
        <img>LOGO LFB</img>
    </div>

    <div class=\"well titre\" for=\"\">LISTE DES CLIENTS</div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3\">
                <div id=\"imaginary_container\">
                    <div class=\"input-group stylish-input-group\">
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Search\" >
                        <span class=\"input-group-addon\">
                        <button type=\"submit\">
                            <span class=\"glyphicon glyphicon-search\"></span>
                        </button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">

        </div>
        <div id=\"content\" class=\"col-md-9\">

        </div>
    </div>

    <div class=\"jumbotron\">
        <table class=\"table table-sm table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Code</th>
                <th scope=\"col\">Nom Contact</th>
                <th scope=\"col\">Fax</th>
                <th scope=\"col\">Téléphone</th>
                <th scope=\"col\">Crédit disponible</th>
                <th scope=\"col\">Date de dernière commande</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\">N1</th>
                <td>001</td>
                <td>NC1</td>
                <td>F1</td>
                <td>TEL1</td>
                <td>CD1</td>
                <td>DDC1</td>
            </tr>
            <tr>
                <th scope=\"row\">N2</th>
                <td>002</td>
                <td>NC2</td>
                <td>F2</td>
                <td>TEL2</td>
                <td>CD2</td>
                <td>DDC2</td>
            </tr>
            <tr>
                <th scope=\"row\">N3</th>
                <td>003</td>
                <td>NC3</td>
                <td>F3</td>
                <td>TEL3</td>
                <td>TCD3</td>
                <td>DDC3</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div>
        <button class=\"btn btn-primary btn-success\" style=\"width: 1000px; height: 30px\">Ajouter un nouveau client</button>
        <button class=\"btn btn-primary btn-red\" style=\"width: 500px; height: 30px\">Supprimer un client</button>
        <button class=\"btn btn-primary-blue\" style=\"width: 500px; height: 30px\">Modifier un client</button>
        <button class=\"btn btn-primary\" style=\"width: 1000px; height: 30px\"><a href=\"{{ path('page1') }}\">Revenir sur la page d'accueil</a></button>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>

        * {
            text-align:center;
        }

        button {
            margin-top: 40px;
            display: flex;
        }

        .titre{
            width: 80%;
            margin:auto;
        }

        #imaginary_container{
            width:100%;
            margin-top:20%;
        }

        .stylish-input-group .input-group-addon{
            background: white !important;
        }

        .stylish-input-group .form-control{
            border-right:0;
            box-shadow:0 0 0;
            border-color:#ccc;
        }

        .stylish-input-group button{
            border:0;
            background:transparent;
        }

    </style>
{% endblock %}", "vues/listeclients.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/vues/listeclients.html.twig");
    }
}
