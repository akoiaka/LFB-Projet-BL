<?php

/* vues/factpreview.html.twig */
class __TwigTemplate_3518a6dfd89366e3395c918c0ffb7ebbe2621d9a762a9de101da1395550857b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/factpreview.html.twig", 1);
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
        $__internal_3dd921caa8f4be9e5dca56abc85c249f30ecb1774178f29baaf18a7583f7edd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd921caa8f4be9e5dca56abc85c249f30ecb1774178f29baaf18a7583f7edd3->enter($__internal_3dd921caa8f4be9e5dca56abc85c249f30ecb1774178f29baaf18a7583f7edd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/factpreview.html.twig"));

        $__internal_95fec228acd5a4231792ec6144ce09f3d2ad39c6dc89493edc258f6494a8898a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fec228acd5a4231792ec6144ce09f3d2ad39c6dc89493edc258f6494a8898a->enter($__internal_95fec228acd5a4231792ec6144ce09f3d2ad39c6dc89493edc258f6494a8898a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/factpreview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd921caa8f4be9e5dca56abc85c249f30ecb1774178f29baaf18a7583f7edd3->leave($__internal_3dd921caa8f4be9e5dca56abc85c249f30ecb1774178f29baaf18a7583f7edd3_prof);

        
        $__internal_95fec228acd5a4231792ec6144ce09f3d2ad39c6dc89493edc258f6494a8898a->leave($__internal_95fec228acd5a4231792ec6144ce09f3d2ad39c6dc89493edc258f6494a8898a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ec84d5c89010a83f01a77bfdab5df9505a239eeb6323cd37c22e8abeb80b86b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec84d5c89010a83f01a77bfdab5df9505a239eeb6323cd37c22e8abeb80b86b->enter($__internal_8ec84d5c89010a83f01a77bfdab5df9505a239eeb6323cd37c22e8abeb80b86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e163186fd6d51892000b0e87c288445119161a61ac8cd242e7b6b63abe73e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e163186fd6d51892000b0e87c288445119161a61ac8cd242e7b6b63abe73e32->enter($__internal_8e163186fd6d51892000b0e87c288445119161a61ac8cd242e7b6b63abe73e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 6
        echo "
<div name=\"print\">
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Facture N.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope=\"row\">xxxxxx</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope=\"row\">00/00/00</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Client</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope=\"row\">xxxxxx</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"row\">
        <div>
            <img src=\"\" alt=\"\" name=\"logo\">
            <adress class=\"lfb\" name=\"\">
                AVENUE DES CHÊNES ROUGES<br>
                30100 ALES</br>
                FRANCE<br>
                Tel: 04.66.56.40.80</br>
                SIRET: 49927250800015</br>
            </adress>
        </div>
        <div>
            <input type=\"text\" placeholder=\"Nom Client\">
            <textarea name=\"adresseclient\" id=\"\" cols=\"30\" rows=\"10\">Adresse</textarea>
        </div>
        <div class=\"jumbotron\">
            <table class=\"table table-sm table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Référence</th>
                        <th scope=\"col\">Désignation</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">P.U. HT</th>
                        <th scope=\"col\">%REM</th>
                        <th scope=\"col\">Remise HT</th>
                        <th scope=\"col\">Montant HT</th>
                        <th scope=\"col\">TVA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"codefact\" placeholder=\"Code\">
            <input type=\"number\" name=\"basetva\" placeholder=\"Base HT\">
            <input type=\"text\" name=\"tauxtva\" placeholder=\"Taux TVA\">
            <input type=\"text\" name=\"montant\" placeholder=\"Montant TVA\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"totht\" placeholder=\"TOTAL HT\">
            <input type=\"number\" name=\"totaltva\" placeholder=\"TOTAL TVA\">
            <input type=\"text\" name=\"totalttc\" placeholder=\"TOTAL TTC\">
            <input type=\"text\" name=\"netapayer\" placeholder=\"NET A PAYER\">
        </div>
    </div>

</div>

    ";
        // line 116
        echo "
<div class=\"row\">
    <div class=\"col-lg-6\">
        <img src=\"\" alt=\"\" name=\"printpic\">
        <h5>IMPRIMER</h5>
    </div>
    <div class=\"col-lg-6\">
        <button class=\"btn btn-primary\">MODIFIER</button>
        <button class=\"btn btn-danger\">SUPPRIMER</button>
        <button class=\"btn btn-primary\">ANNULER</button>
    </div>
</div>


";
        
        $__internal_8e163186fd6d51892000b0e87c288445119161a61ac8cd242e7b6b63abe73e32->leave($__internal_8e163186fd6d51892000b0e87c288445119161a61ac8cd242e7b6b63abe73e32_prof);

        
        $__internal_8ec84d5c89010a83f01a77bfdab5df9505a239eeb6323cd37c22e8abeb80b86b->leave($__internal_8ec84d5c89010a83f01a77bfdab5df9505a239eeb6323cd37c22e8abeb80b86b_prof);

    }

    // line 132
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_763506c3c5d54fb235aee822b9702d1480fa16f77e946178c86928becf78fc2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763506c3c5d54fb235aee822b9702d1480fa16f77e946178c86928becf78fc2b->enter($__internal_763506c3c5d54fb235aee822b9702d1480fa16f77e946178c86928becf78fc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c2d77d5efd3dcf23d3075d6da55250b4bfeb04139bf4506e30ac3c93ee2e8ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d77d5efd3dcf23d3075d6da55250b4bfeb04139bf4506e30ac3c93ee2e8ab2->enter($__internal_c2d77d5efd3dcf23d3075d6da55250b4bfeb04139bf4506e30ac3c93ee2e8ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 133
        echo "    <style>
        body{
            margin:5%;
        }
        .table {
        width: 10%;
        margin-left: 10%;
        border: solid 1px dimgrey;}
        button {
            margin-top: 40px;
        }
    </style>
";
        
        $__internal_c2d77d5efd3dcf23d3075d6da55250b4bfeb04139bf4506e30ac3c93ee2e8ab2->leave($__internal_c2d77d5efd3dcf23d3075d6da55250b4bfeb04139bf4506e30ac3c93ee2e8ab2_prof);

        
        $__internal_763506c3c5d54fb235aee822b9702d1480fa16f77e946178c86928becf78fc2b->leave($__internal_763506c3c5d54fb235aee822b9702d1480fa16f77e946178c86928becf78fc2b_prof);

    }

    public function getTemplateName()
    {
        return "vues/factpreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 133,  188 => 132,  164 => 116,  53 => 6,  50 => 4,  41 => 3,  11 => 1,);
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

{#ci-dessous la div facture à imprimer#}

<div name=\"print\">
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Facture N.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope=\"row\">xxxxxx</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope=\"row\">00/00/00</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Client</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope=\"row\">xxxxxx</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"row\">
        <div>
            <img src=\"\" alt=\"\" name=\"logo\">
            <adress class=\"lfb\" name=\"\">
                AVENUE DES CHÊNES ROUGES<br>
                30100 ALES</br>
                FRANCE<br>
                Tel: 04.66.56.40.80</br>
                SIRET: 49927250800015</br>
            </adress>
        </div>
        <div>
            <input type=\"text\" placeholder=\"Nom Client\">
            <textarea name=\"adresseclient\" id=\"\" cols=\"30\" rows=\"10\">Adresse</textarea>
        </div>
        <div class=\"jumbotron\">
            <table class=\"table table-sm table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Référence</th>
                        <th scope=\"col\">Désignation</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">P.U. HT</th>
                        <th scope=\"col\">%REM</th>
                        <th scope=\"col\">Remise HT</th>
                        <th scope=\"col\">Montant HT</th>
                        <th scope=\"col\">TVA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"codefact\" placeholder=\"Code\">
            <input type=\"number\" name=\"basetva\" placeholder=\"Base HT\">
            <input type=\"text\" name=\"tauxtva\" placeholder=\"Taux TVA\">
            <input type=\"text\" name=\"montant\" placeholder=\"Montant TVA\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"totht\" placeholder=\"TOTAL HT\">
            <input type=\"number\" name=\"totaltva\" placeholder=\"TOTAL TVA\">
            <input type=\"text\" name=\"totalttc\" placeholder=\"TOTAL TTC\">
            <input type=\"text\" name=\"netapayer\" placeholder=\"NET A PAYER\">
        </div>
    </div>

</div>

    {#ci-dessus la div facture à imprimer#}

<div class=\"row\">
    <div class=\"col-lg-6\">
        <img src=\"\" alt=\"\" name=\"printpic\">
        <h5>IMPRIMER</h5>
    </div>
    <div class=\"col-lg-6\">
        <button class=\"btn btn-primary\">MODIFIER</button>
        <button class=\"btn btn-danger\">SUPPRIMER</button>
        <button class=\"btn btn-primary\">ANNULER</button>
    </div>
</div>


{% endblock %}

{% block stylesheets %}
    <style>
        body{
            margin:5%;
        }
        .table {
        width: 10%;
        margin-left: 10%;
        border: solid 1px dimgrey;}
        button {
            margin-top: 40px;
        }
    </style>
{% endblock %}", "vues/factpreview.html.twig", "/Applications/MAMP/htdocs/symphony/LFB-Projet-BL/app/Resources/views/vues/factpreview.html.twig");
    }
}
