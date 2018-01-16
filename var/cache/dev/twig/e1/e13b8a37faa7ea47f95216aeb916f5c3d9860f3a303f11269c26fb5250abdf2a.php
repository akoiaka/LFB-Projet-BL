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
        $__internal_c4aa6c436ec7f1042fa692c447efad78f46f07766a88fc616872b3a2454030c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4aa6c436ec7f1042fa692c447efad78f46f07766a88fc616872b3a2454030c2->enter($__internal_c4aa6c436ec7f1042fa692c447efad78f46f07766a88fc616872b3a2454030c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/factpreview.html.twig"));

        $__internal_9015c2b58bfc470f67ca882b3e9ed6deb2a87eb0efb6e27e85978bd67a0a3953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9015c2b58bfc470f67ca882b3e9ed6deb2a87eb0efb6e27e85978bd67a0a3953->enter($__internal_9015c2b58bfc470f67ca882b3e9ed6deb2a87eb0efb6e27e85978bd67a0a3953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/factpreview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4aa6c436ec7f1042fa692c447efad78f46f07766a88fc616872b3a2454030c2->leave($__internal_c4aa6c436ec7f1042fa692c447efad78f46f07766a88fc616872b3a2454030c2_prof);

        
        $__internal_9015c2b58bfc470f67ca882b3e9ed6deb2a87eb0efb6e27e85978bd67a0a3953->leave($__internal_9015c2b58bfc470f67ca882b3e9ed6deb2a87eb0efb6e27e85978bd67a0a3953_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18c92d757a7067a37ba50889ecd09584ca6b4eccd02fe195a9f5bece83735eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c92d757a7067a37ba50889ecd09584ca6b4eccd02fe195a9f5bece83735eb5->enter($__internal_18c92d757a7067a37ba50889ecd09584ca6b4eccd02fe195a9f5bece83735eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2a7b92b46bfba7e685fb0416fb2a0c14dde07f6b8a3a6b533851f70a9e8217b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a7b92b46bfba7e685fb0416fb2a0c14dde07f6b8a3a6b533851f70a9e8217b->enter($__internal_b2a7b92b46bfba7e685fb0416fb2a0c14dde07f6b8a3a6b533851f70a9e8217b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"lfb\" name=\"\">
                <h5>AVENUE DES CHÊNES ROUGES</h5><br>
                <h5>30100 ALES</h5></br>
                <h5>Tel: 04.66.56.40.80</h5></br>
                <h5>SIRET: 49927250800015</h5></br>
            </div>
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
        // line 115
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
        
        $__internal_b2a7b92b46bfba7e685fb0416fb2a0c14dde07f6b8a3a6b533851f70a9e8217b->leave($__internal_b2a7b92b46bfba7e685fb0416fb2a0c14dde07f6b8a3a6b533851f70a9e8217b_prof);

        
        $__internal_18c92d757a7067a37ba50889ecd09584ca6b4eccd02fe195a9f5bece83735eb5->leave($__internal_18c92d757a7067a37ba50889ecd09584ca6b4eccd02fe195a9f5bece83735eb5_prof);

    }

    // line 131
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e85e5a597358c47d286b4bcc0e8e6dcb8534690b2034e5f4cb6d1334f24b2ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85e5a597358c47d286b4bcc0e8e6dcb8534690b2034e5f4cb6d1334f24b2ea1->enter($__internal_e85e5a597358c47d286b4bcc0e8e6dcb8534690b2034e5f4cb6d1334f24b2ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a351142c1d9bc98efe9e58be151fe08ef171e7d4a88b73767e3b41845b3aaf19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a351142c1d9bc98efe9e58be151fe08ef171e7d4a88b73767e3b41845b3aaf19->enter($__internal_a351142c1d9bc98efe9e58be151fe08ef171e7d4a88b73767e3b41845b3aaf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 132
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
        
        $__internal_a351142c1d9bc98efe9e58be151fe08ef171e7d4a88b73767e3b41845b3aaf19->leave($__internal_a351142c1d9bc98efe9e58be151fe08ef171e7d4a88b73767e3b41845b3aaf19_prof);

        
        $__internal_e85e5a597358c47d286b4bcc0e8e6dcb8534690b2034e5f4cb6d1334f24b2ea1->leave($__internal_e85e5a597358c47d286b4bcc0e8e6dcb8534690b2034e5f4cb6d1334f24b2ea1_prof);

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
        return array (  196 => 132,  187 => 131,  163 => 115,  53 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
            <div class=\"lfb\" name=\"\">
                <h5>AVENUE DES CHÊNES ROUGES</h5><br>
                <h5>30100 ALES</h5></br>
                <h5>Tel: 04.66.56.40.80</h5></br>
                <h5>SIRET: 49927250800015</h5></br>
            </div>
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
