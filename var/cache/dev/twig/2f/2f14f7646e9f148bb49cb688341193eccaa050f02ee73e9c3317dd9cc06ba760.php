<?php

/* vues/factlist.html.twig */
class __TwigTemplate_bfbdde168ed08a1c46a8d950a224f739631745042be8ca9e6544f7653011c07a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/factlist.html.twig", 1);
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
        $__internal_1351ab95ee0b6753f0e99976ae203c57eb47b4712767c693859d2701c7fea634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1351ab95ee0b6753f0e99976ae203c57eb47b4712767c693859d2701c7fea634->enter($__internal_1351ab95ee0b6753f0e99976ae203c57eb47b4712767c693859d2701c7fea634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/factlist.html.twig"));

        $__internal_921e4b14727ec4d9a7dd65c6f3ba6bea0085a786a9c39419ef2055242905b328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921e4b14727ec4d9a7dd65c6f3ba6bea0085a786a9c39419ef2055242905b328->enter($__internal_921e4b14727ec4d9a7dd65c6f3ba6bea0085a786a9c39419ef2055242905b328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/factlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1351ab95ee0b6753f0e99976ae203c57eb47b4712767c693859d2701c7fea634->leave($__internal_1351ab95ee0b6753f0e99976ae203c57eb47b4712767c693859d2701c7fea634_prof);

        
        $__internal_921e4b14727ec4d9a7dd65c6f3ba6bea0085a786a9c39419ef2055242905b328->leave($__internal_921e4b14727ec4d9a7dd65c6f3ba6bea0085a786a9c39419ef2055242905b328_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5a3cfe407ae1cfa9d07242d07eb5e9ef9bb19eb40c7357411461326f5718b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a3cfe407ae1cfa9d07242d07eb5e9ef9bb19eb40c7357411461326f5718b16->enter($__internal_f5a3cfe407ae1cfa9d07242d07eb5e9ef9bb19eb40c7357411461326f5718b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eee8673f5f6723122e09d27c50c6cc7e977a7c6cbf01ff8d195fc6549f20ebdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee8673f5f6723122e09d27c50c6cc7e977a7c6cbf01ff8d195fc6549f20ebdf->enter($__internal_eee8673f5f6723122e09d27c50c6cc7e977a7c6cbf01ff8d195fc6549f20ebdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <img>LOGO LFB</img>
        <button class=\"btn btn-primary\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archives");
        echo "\">Fermer</a></button>
    </div>

    <div class=\"well titre\" for=\"\">LISTE DES FACTURES</div>

    <div class=\"row\">
        <h6 class=\"col-lg-3\">Période du</h6>
        <input type=\"date\" min=\"01/01/2018\" max=\"31/12/2018\" maxlength=\"10\" autocomplete=\"on\" class=\"col-lg-3\">
        <h6 class=\"col-lg-3\">au</h6>
        <select name=\"\" id=\"\" class=\"col-lg-3\">
            <option value=\"date1\">date1</option>
            <option value=\"date2\">brackets date</option>
        </select>
    </div>

    ";
        // line 22
        echo "
    <div class=\"jumbotron\">
        <table class=\"table table-sm table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">N.</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Client</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\"></th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>

    ";
        // line 45
        echo "
    <div class=\"row endpage\">
        <div class=\"col-lg-6\">
            <img src=\"\" alt=\"\" name=\"printpic\">
            <h5>IMPRIMER</h5>
        </div>
        <div class=\"row col-lg-6\">
            <button class=\"col-lg-6 left\" name=\"left\">preview</button>
            <button class=\"col-lg-6 right\" name=\"right\">next</button>
        </div>
    </div>
";
        
        $__internal_eee8673f5f6723122e09d27c50c6cc7e977a7c6cbf01ff8d195fc6549f20ebdf->leave($__internal_eee8673f5f6723122e09d27c50c6cc7e977a7c6cbf01ff8d195fc6549f20ebdf_prof);

        
        $__internal_f5a3cfe407ae1cfa9d07242d07eb5e9ef9bb19eb40c7357411461326f5718b16->leave($__internal_f5a3cfe407ae1cfa9d07242d07eb5e9ef9bb19eb40c7357411461326f5718b16_prof);

    }

    // line 57
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91e8fcf442150ea582660aa1fd2d06cce260c36bdca7f71e11c9d3d2a04f65cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e8fcf442150ea582660aa1fd2d06cce260c36bdca7f71e11c9d3d2a04f65cc->enter($__internal_91e8fcf442150ea582660aa1fd2d06cce260c36bdca7f71e11c9d3d2a04f65cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8a76d0d604e2d9332444d71fc0f4fbbf9658971839e5029f976bd37ec3c34a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a76d0d604e2d9332444d71fc0f4fbbf9658971839e5029f976bd37ec3c34a79->enter($__internal_8a76d0d604e2d9332444d71fc0f4fbbf9658971839e5029f976bd37ec3c34a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 58
        echo "    <style>
        body
        {
            margin:5%;
        }
        * {text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
";
        
        $__internal_8a76d0d604e2d9332444d71fc0f4fbbf9658971839e5029f976bd37ec3c34a79->leave($__internal_8a76d0d604e2d9332444d71fc0f4fbbf9658971839e5029f976bd37ec3c34a79_prof);

        
        $__internal_91e8fcf442150ea582660aa1fd2d06cce260c36bdca7f71e11c9d3d2a04f65cc->leave($__internal_91e8fcf442150ea582660aa1fd2d06cce260c36bdca7f71e11c9d3d2a04f65cc_prof);

    }

    public function getTemplateName()
    {
        return "vues/factlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 58,  117 => 57,  96 => 45,  72 => 22,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
        <button class=\"btn btn-primary\"><a href=\"{{ path('archives') }}\">Fermer</a></button>
    </div>

    <div class=\"well titre\" for=\"\">LISTE DES FACTURES</div>

    <div class=\"row\">
        <h6 class=\"col-lg-3\">Période du</h6>
        <input type=\"date\" min=\"01/01/2018\" max=\"31/12/2018\" maxlength=\"10\" autocomplete=\"on\" class=\"col-lg-3\">
        <h6 class=\"col-lg-3\">au</h6>
        <select name=\"\" id=\"\" class=\"col-lg-3\">
            <option value=\"date1\">date1</option>
            <option value=\"date2\">brackets date</option>
        </select>
    </div>

    {#ci-dessous la div à imprimer#}

    <div class=\"jumbotron\">
        <table class=\"table table-sm table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">N.</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Client</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\"></th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>

    {#    ci-dessus la div à imprimer#}

    <div class=\"row endpage\">
        <div class=\"col-lg-6\">
            <img src=\"\" alt=\"\" name=\"printpic\">
            <h5>IMPRIMER</h5>
        </div>
        <div class=\"row col-lg-6\">
            <button class=\"col-lg-6 left\" name=\"left\">preview</button>
            <button class=\"col-lg-6 right\" name=\"right\">next</button>
        </div>
    </div>
{% endblock %}
{% block stylesheets %}
    <style>
        body
        {
            margin:5%;
        }
        * {text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
{% endblock %}", "vues/factlist.html.twig", "/Applications/MAMP/htdocs/symphony/LFB-Projet-BL/app/Resources/views/vues/factlist.html.twig");
    }
}
