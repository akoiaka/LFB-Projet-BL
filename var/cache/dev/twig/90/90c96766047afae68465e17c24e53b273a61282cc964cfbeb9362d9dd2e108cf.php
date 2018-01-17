<?php

/* vues/bllist.html.twig */
class __TwigTemplate_94c374d21af464d60e216b27088a3a22f8a3d1f754688cb76c0f6d34e4615919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/bllist.html.twig", 1);
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
        $__internal_10f0c22281aaadf7f556bcac809d29f84963f0d214fd3c9cba60db3b4a0f621f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f0c22281aaadf7f556bcac809d29f84963f0d214fd3c9cba60db3b4a0f621f->enter($__internal_10f0c22281aaadf7f556bcac809d29f84963f0d214fd3c9cba60db3b4a0f621f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/bllist.html.twig"));

        $__internal_2150eb3f6678496cdcd6861588a8094b3e18444540b382c509a7bea275aaee75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2150eb3f6678496cdcd6861588a8094b3e18444540b382c509a7bea275aaee75->enter($__internal_2150eb3f6678496cdcd6861588a8094b3e18444540b382c509a7bea275aaee75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/bllist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10f0c22281aaadf7f556bcac809d29f84963f0d214fd3c9cba60db3b4a0f621f->leave($__internal_10f0c22281aaadf7f556bcac809d29f84963f0d214fd3c9cba60db3b4a0f621f_prof);

        
        $__internal_2150eb3f6678496cdcd6861588a8094b3e18444540b382c509a7bea275aaee75->leave($__internal_2150eb3f6678496cdcd6861588a8094b3e18444540b382c509a7bea275aaee75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe9c5222670f69a4029d0e70ca8c9d650ee2f9f3acee30d874804a9d25f7f07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9c5222670f69a4029d0e70ca8c9d650ee2f9f3acee30d874804a9d25f7f07b->enter($__internal_fe9c5222670f69a4029d0e70ca8c9d650ee2f9f3acee30d874804a9d25f7f07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9eb0a500524303f8167319ddbe16f7ff0ace1654b5dc7dd9172796053a2256c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9eb0a500524303f8167319ddbe16f7ff0ace1654b5dc7dd9172796053a2256c->enter($__internal_e9eb0a500524303f8167319ddbe16f7ff0ace1654b5dc7dd9172796053a2256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div>
    <img>LOGO LFB</img>
    <button class=\"btn btn-primary\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archives");
        echo "\">Fermer</a></button>
</div>

<div class=\"well titre\" for=\"\">LISTE DES BONS DE LIVRAISON</div>

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
                <th scope=\"col\">N. Pièce</th>
                <th scope=\"col\">Date Pièce</th>
                <th scope=\"col\">Client</th>
                <th scope=\"col\">Société</th>
                <th scope=\"col\">Total HT</th>
                <th scope=\"col\">Total TVA</th>
                <th scope=\"col\">Total TTC</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope=\"row\"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

";
        // line 53
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
        
        $__internal_e9eb0a500524303f8167319ddbe16f7ff0ace1654b5dc7dd9172796053a2256c->leave($__internal_e9eb0a500524303f8167319ddbe16f7ff0ace1654b5dc7dd9172796053a2256c_prof);

        
        $__internal_fe9c5222670f69a4029d0e70ca8c9d650ee2f9f3acee30d874804a9d25f7f07b->leave($__internal_fe9c5222670f69a4029d0e70ca8c9d650ee2f9f3acee30d874804a9d25f7f07b_prof);

    }

    // line 65
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01535b55356096cf64fd9e2031593b3b7191f42eb59498bf269c511b9b925daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01535b55356096cf64fd9e2031593b3b7191f42eb59498bf269c511b9b925daf->enter($__internal_01535b55356096cf64fd9e2031593b3b7191f42eb59498bf269c511b9b925daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e068a69e49007b246e4c0034568ae093c5a2552c9671a8c80e9e0dc765af54f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e068a69e49007b246e4c0034568ae093c5a2552c9671a8c80e9e0dc765af54f4->enter($__internal_e068a69e49007b246e4c0034568ae093c5a2552c9671a8c80e9e0dc765af54f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 66
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
        
        $__internal_e068a69e49007b246e4c0034568ae093c5a2552c9671a8c80e9e0dc765af54f4->leave($__internal_e068a69e49007b246e4c0034568ae093c5a2552c9671a8c80e9e0dc765af54f4_prof);

        
        $__internal_01535b55356096cf64fd9e2031593b3b7191f42eb59498bf269c511b9b925daf->leave($__internal_01535b55356096cf64fd9e2031593b3b7191f42eb59498bf269c511b9b925daf_prof);

    }

    public function getTemplateName()
    {
        return "vues/bllist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 66,  125 => 65,  104 => 53,  72 => 22,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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

<div class=\"well titre\" for=\"\">LISTE DES BONS DE LIVRAISON</div>

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
                <th scope=\"col\">N. Pièce</th>
                <th scope=\"col\">Date Pièce</th>
                <th scope=\"col\">Client</th>
                <th scope=\"col\">Société</th>
                <th scope=\"col\">Total HT</th>
                <th scope=\"col\">Total TVA</th>
                <th scope=\"col\">Total TTC</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope=\"row\"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
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
{% endblock %}", "vues/bllist.html.twig", "/Applications/MAMP/htdocs/symphony/LFB-Projet-BL/app/Resources/views/vues/bllist.html.twig");
    }
}
