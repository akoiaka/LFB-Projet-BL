<?php

/* vues/factures.html.twig */
class __TwigTemplate_3e770c9edd8c0df8add6d889d4db17825d3eb3988c8ccc0577fce5b74f26d686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/factures.html.twig", 1);
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
        $__internal_eba1eed6143ba2ec45ab74614189ed5878cd865b355e2c6df163761fd1d04175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba1eed6143ba2ec45ab74614189ed5878cd865b355e2c6df163761fd1d04175->enter($__internal_eba1eed6143ba2ec45ab74614189ed5878cd865b355e2c6df163761fd1d04175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/factures.html.twig"));

        $__internal_4e2d9a194a92bd5bddbbbc245db582d65d6db79117feae5c05d7ba95675cfee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2d9a194a92bd5bddbbbc245db582d65d6db79117feae5c05d7ba95675cfee7->enter($__internal_4e2d9a194a92bd5bddbbbc245db582d65d6db79117feae5c05d7ba95675cfee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/factures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eba1eed6143ba2ec45ab74614189ed5878cd865b355e2c6df163761fd1d04175->leave($__internal_eba1eed6143ba2ec45ab74614189ed5878cd865b355e2c6df163761fd1d04175_prof);

        
        $__internal_4e2d9a194a92bd5bddbbbc245db582d65d6db79117feae5c05d7ba95675cfee7->leave($__internal_4e2d9a194a92bd5bddbbbc245db582d65d6db79117feae5c05d7ba95675cfee7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76bcced68c151471e7b03ddc0b08f70b1c8a465b04a9dc0c85f83fc014626b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bcced68c151471e7b03ddc0b08f70b1c8a465b04a9dc0c85f83fc014626b56->enter($__internal_76bcced68c151471e7b03ddc0b08f70b1c8a465b04a9dc0c85f83fc014626b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f220bbcf27cc2201abd2e7e8b113fbb35b26c6e582d435beb16fe125226d4e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f220bbcf27cc2201abd2e7e8b113fbb35b26c6e582d435beb16fe125226d4e73->enter($__internal_f220bbcf27cc2201abd2e7e8b113fbb35b26c6e582d435beb16fe125226d4e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Création d'une facture Pro Forma</h1>
    <div class=\"row\">
            <div class=\"col-lg-6\">
                <input type=\"text\" placeholder=\"Numéro\">
                <input type=\"date\" placeholder=\"Date\">
            </div>
            <div class=\"col-lg-6\">
                <input type=\"text\" placeholder=\"Référence\">
                <input type=\"text\" placeholder=\"Représentant\">
                <textarea name=\"adressfact\" id=\"\" cols=\"30\" rows=\"10\">Adresse</textarea>
    </div>
    <div class=\"jumbotron\">
        <div class=\"well\">Désignation</div>
        <div class=\"well\">Quantité</div>
        <div class=\"well\">P.U. HT</div>
        <div class=\"well\">%REM</div>
        <div class=\"well\">Remise HT</div>
        <div class=\"well\">Montant HT</div>
        <div class=\"well\">TVA</div>
        <div class=\"row\">
            <div class=\"col-lg-6 well\">
                <input type=\"number\" placeholder=\"TOTAL HT\">
                <input type=\"number\" placeholder=\"TOTAL TVA\">
            </div>
            <div class=\"col-lg-6\">
                <input type=\"number\" placeholder=\"NET HT\">
                <input type=\"number\" placeholder=\"Total TTC\">
            </div>
            <div class=\"well\">NET A PAYER</div>
            </div>
        </div>
    </div>
        <button class=\"btn btn-success\">VALIDER</button>
        <button class=\"btn btn-primary\">ANNULER</button>

    </div>
";
        
        $__internal_f220bbcf27cc2201abd2e7e8b113fbb35b26c6e582d435beb16fe125226d4e73->leave($__internal_f220bbcf27cc2201abd2e7e8b113fbb35b26c6e582d435beb16fe125226d4e73_prof);

        
        $__internal_76bcced68c151471e7b03ddc0b08f70b1c8a465b04a9dc0c85f83fc014626b56->leave($__internal_76bcced68c151471e7b03ddc0b08f70b1c8a465b04a9dc0c85f83fc014626b56_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8aba59d735debc0c6fa07202d31ad6100a763f3c163ba08d7c07d04a4e6f204d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aba59d735debc0c6fa07202d31ad6100a763f3c163ba08d7c07d04a4e6f204d->enter($__internal_8aba59d735debc0c6fa07202d31ad6100a763f3c163ba08d7c07d04a4e6f204d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_14365428c8ac9cbf8cb96cadd87bbc25ab0f4fbb79aff7a19527495919acde32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14365428c8ac9cbf8cb96cadd87bbc25ab0f4fbb79aff7a19527495919acde32->enter($__internal_14365428c8ac9cbf8cb96cadd87bbc25ab0f4fbb79aff7a19527495919acde32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "    <style>
        * {text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
";
        
        $__internal_14365428c8ac9cbf8cb96cadd87bbc25ab0f4fbb79aff7a19527495919acde32->leave($__internal_14365428c8ac9cbf8cb96cadd87bbc25ab0f4fbb79aff7a19527495919acde32_prof);

        
        $__internal_8aba59d735debc0c6fa07202d31ad6100a763f3c163ba08d7c07d04a4e6f204d->leave($__internal_8aba59d735debc0c6fa07202d31ad6100a763f3c163ba08d7c07d04a4e6f204d_prof);

    }

    public function getTemplateName()
    {
        return "vues/factures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  96 => 41,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>Création d'une facture Pro Forma</h1>
    <div class=\"row\">
            <div class=\"col-lg-6\">
                <input type=\"text\" placeholder=\"Numéro\">
                <input type=\"date\" placeholder=\"Date\">
            </div>
            <div class=\"col-lg-6\">
                <input type=\"text\" placeholder=\"Référence\">
                <input type=\"text\" placeholder=\"Représentant\">
                <textarea name=\"adressfact\" id=\"\" cols=\"30\" rows=\"10\">Adresse</textarea>
    </div>
    <div class=\"jumbotron\">
        <div class=\"well\">Désignation</div>
        <div class=\"well\">Quantité</div>
        <div class=\"well\">P.U. HT</div>
        <div class=\"well\">%REM</div>
        <div class=\"well\">Remise HT</div>
        <div class=\"well\">Montant HT</div>
        <div class=\"well\">TVA</div>
        <div class=\"row\">
            <div class=\"col-lg-6 well\">
                <input type=\"number\" placeholder=\"TOTAL HT\">
                <input type=\"number\" placeholder=\"TOTAL TVA\">
            </div>
            <div class=\"col-lg-6\">
                <input type=\"number\" placeholder=\"NET HT\">
                <input type=\"number\" placeholder=\"Total TTC\">
            </div>
            <div class=\"well\">NET A PAYER</div>
            </div>
        </div>
    </div>
        <button class=\"btn btn-success\">VALIDER</button>
        <button class=\"btn btn-primary\">ANNULER</button>

    </div>
{% endblock %}
{% block stylesheets %}
    <style>
        * {text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
{% endblock %}", "vues/factures.html.twig", "/Applications/MAMP/htdocs/symphony/LFB-Projet-BL/app/Resources/views/vues/factures.html.twig");
    }
}
