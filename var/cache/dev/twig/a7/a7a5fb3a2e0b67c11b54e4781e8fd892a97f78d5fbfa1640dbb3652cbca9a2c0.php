<?php

/* vues/blpreview.html.twig */
class __TwigTemplate_1847d44dda12f7088d700dfbe5f63d1dc2c0654f521a3fa9636b08c9ac20afaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/blpreview.html.twig", 1);
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
        $__internal_a3429d5affc036322fbb21a39fffad6b231319441057edb98ed723c15a473b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3429d5affc036322fbb21a39fffad6b231319441057edb98ed723c15a473b8b->enter($__internal_a3429d5affc036322fbb21a39fffad6b231319441057edb98ed723c15a473b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/blpreview.html.twig"));

        $__internal_2f44234a570e1f58e7c96cec4b843f1cfc9165d0f874351c684bc70808f6d17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f44234a570e1f58e7c96cec4b843f1cfc9165d0f874351c684bc70808f6d17c->enter($__internal_2f44234a570e1f58e7c96cec4b843f1cfc9165d0f874351c684bc70808f6d17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/blpreview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3429d5affc036322fbb21a39fffad6b231319441057edb98ed723c15a473b8b->leave($__internal_a3429d5affc036322fbb21a39fffad6b231319441057edb98ed723c15a473b8b_prof);

        
        $__internal_2f44234a570e1f58e7c96cec4b843f1cfc9165d0f874351c684bc70808f6d17c->leave($__internal_2f44234a570e1f58e7c96cec4b843f1cfc9165d0f874351c684bc70808f6d17c_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_f5c4140dcdb97ec1bab296bea6159d4d4ccc6e53b5df7a3fa9aba7b730b96f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c4140dcdb97ec1bab296bea6159d4d4ccc6e53b5df7a3fa9aba7b730b96f22->enter($__internal_f5c4140dcdb97ec1bab296bea6159d4d4ccc6e53b5df7a3fa9aba7b730b96f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7977469b372afe3d39cb764b04416ed7eb64815364db2c4ab7db972b51c7e266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7977469b372afe3d39cb764b04416ed7eb64815364db2c4ab7db972b51c7e266->enter($__internal_7977469b372afe3d39cb764b04416ed7eb64815364db2c4ab7db972b51c7e266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <div class=\"en-tete\">
        <img>LOGO LFB</img>
        <button><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Fermer cette fenêtre</a></button>
    </div>
";
        
        $__internal_7977469b372afe3d39cb764b04416ed7eb64815364db2c4ab7db972b51c7e266->leave($__internal_7977469b372afe3d39cb764b04416ed7eb64815364db2c4ab7db972b51c7e266_prof);

        
        $__internal_f5c4140dcdb97ec1bab296bea6159d4d4ccc6e53b5df7a3fa9aba7b730b96f22->leave($__internal_f5c4140dcdb97ec1bab296bea6159d4d4ccc6e53b5df7a3fa9aba7b730b96f22_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf73c397295e921a070a84be7f8183fb63251ea1cc0aeeb72cfc0cfc6695aa98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf73c397295e921a070a84be7f8183fb63251ea1cc0aeeb72cfc0cfc6695aa98->enter($__internal_bf73c397295e921a070a84be7f8183fb63251ea1cc0aeeb72cfc0cfc6695aa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aad36949227c08850f7be9b3ac553666105ed4fc6ee2cfd90953cac95986140c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad36949227c08850f7be9b3ac553666105ed4fc6ee2cfd90953cac95986140c->enter($__internal_aad36949227c08850f7be9b3ac553666105ed4fc6ee2cfd90953cac95986140c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div name=\"print\">
        <img src=\"\" alt=\"\" name=\"imgprint\">
        <p>Imprimer le Bon</p>
    </div>
    <div>
        <h2>BON DE LIVRAISON N.</h2>
        <div class=\"well\"></div>
    </div>
    <div class=\"jumbotron\">
        <input type=\"date\">
        <input type=\"text\">
        <textarea name=\"adresseclient\"></textarea>
        <textarea name=\"remarque\" id=\"\" cols=\"30\" rows=\"10\">Remarque</textarea>
    </div>
    <div>
        <table class=\"table table-sm table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Article</th>
                <th scope=\"col\">Désignation</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Reste à livrer</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\">Nom de l'Article</th>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"jumbotron lfb\" name=\"lfb\">
        <h5>Siège social</h5>
        <h4>LFB BIOMANUFACTURING</h4>
        <h5>SASU au capital de 630 800 Euros - 499 272 508 RCS Nîmes</h5>
        <h5>Avenue des Chênes Rouges - 30100 ALES - FRANCE</h5>
    </div>
";
        
        $__internal_aad36949227c08850f7be9b3ac553666105ed4fc6ee2cfd90953cac95986140c->leave($__internal_aad36949227c08850f7be9b3ac553666105ed4fc6ee2cfd90953cac95986140c_prof);

        
        $__internal_bf73c397295e921a070a84be7f8183fb63251ea1cc0aeeb72cfc0cfc6695aa98->leave($__internal_bf73c397295e921a070a84be7f8183fb63251ea1cc0aeeb72cfc0cfc6695aa98_prof);

    }

    // line 51
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42d30ef04c2fb88d6d994bc4cf91f185066152d7e95c3382222f6e201b790c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d30ef04c2fb88d6d994bc4cf91f185066152d7e95c3382222f6e201b790c37->enter($__internal_42d30ef04c2fb88d6d994bc4cf91f185066152d7e95c3382222f6e201b790c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f03b948ec2c12d802ff60de9e4e1e1ba51dd6b6ee4730e46a362eea7d18a381f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03b948ec2c12d802ff60de9e4e1e1ba51dd6b6ee4730e46a362eea7d18a381f->enter($__internal_f03b948ec2c12d802ff60de9e4e1e1ba51dd6b6ee4730e46a362eea7d18a381f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 52
        echo "    <style>
         .lfb{
             width:30%;
             margin:auto;
             border:solid 1px black;
             text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
";
        
        $__internal_f03b948ec2c12d802ff60de9e4e1e1ba51dd6b6ee4730e46a362eea7d18a381f->leave($__internal_f03b948ec2c12d802ff60de9e4e1e1ba51dd6b6ee4730e46a362eea7d18a381f_prof);

        
        $__internal_42d30ef04c2fb88d6d994bc4cf91f185066152d7e95c3382222f6e201b790c37->leave($__internal_42d30ef04c2fb88d6d994bc4cf91f185066152d7e95c3382222f6e201b790c37_prof);

    }

    public function getTemplateName()
    {
        return "vues/blpreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 52,  128 => 51,  77 => 9,  68 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
        <button><a href=\"{{ path('page1') }}\">Fermer cette fenêtre</a></button>
    </div>
{% endblock %}
{% block body %}
    <div name=\"print\">
        <img src=\"\" alt=\"\" name=\"imgprint\">
        <p>Imprimer le Bon</p>
    </div>
    <div>
        <h2>BON DE LIVRAISON N.</h2>
        <div class=\"well\"></div>
    </div>
    <div class=\"jumbotron\">
        <input type=\"date\">
        <input type=\"text\">
        <textarea name=\"adresseclient\"></textarea>
        <textarea name=\"remarque\" id=\"\" cols=\"30\" rows=\"10\">Remarque</textarea>
    </div>
    <div>
        <table class=\"table table-sm table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Article</th>
                <th scope=\"col\">Désignation</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Reste à livrer</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\">Nom de l'Article</th>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"jumbotron lfb\" name=\"lfb\">
        <h5>Siège social</h5>
        <h4>LFB BIOMANUFACTURING</h4>
        <h5>SASU au capital de 630 800 Euros - 499 272 508 RCS Nîmes</h5>
        <h5>Avenue des Chênes Rouges - 30100 ALES - FRANCE</h5>
    </div>
{% endblock %}
{% block stylesheets %}
    <style>
         .lfb{
             width:30%;
             margin:auto;
             border:solid 1px black;
             text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
{% endblock %}

", "vues/blpreview.html.twig", "/Applications/MAMP/htdocs/symphony/LFB-Projet-BL/app/Resources/views/vues/blpreview.html.twig");
    }
}
