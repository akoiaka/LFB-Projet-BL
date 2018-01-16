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
        $__internal_b034241c571dd3fa5379f5303a8784b290c31b0893fcb2b98f3ef9e32d05e054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b034241c571dd3fa5379f5303a8784b290c31b0893fcb2b98f3ef9e32d05e054->enter($__internal_b034241c571dd3fa5379f5303a8784b290c31b0893fcb2b98f3ef9e32d05e054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/bl.html.twig"));

        $__internal_14d91c06477d6d34e9235e81bb2c0908ff706de328c19e4a455cb1a9103cb2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d91c06477d6d34e9235e81bb2c0908ff706de328c19e4a455cb1a9103cb2b8->enter($__internal_14d91c06477d6d34e9235e81bb2c0908ff706de328c19e4a455cb1a9103cb2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/bl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b034241c571dd3fa5379f5303a8784b290c31b0893fcb2b98f3ef9e32d05e054->leave($__internal_b034241c571dd3fa5379f5303a8784b290c31b0893fcb2b98f3ef9e32d05e054_prof);

        
        $__internal_14d91c06477d6d34e9235e81bb2c0908ff706de328c19e4a455cb1a9103cb2b8->leave($__internal_14d91c06477d6d34e9235e81bb2c0908ff706de328c19e4a455cb1a9103cb2b8_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_66a326c290d9ba04b3a6dd3dde5cbb1166560351e3c74de64f3258aec492d42e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a326c290d9ba04b3a6dd3dde5cbb1166560351e3c74de64f3258aec492d42e->enter($__internal_66a326c290d9ba04b3a6dd3dde5cbb1166560351e3c74de64f3258aec492d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8cef299e6815abfb152abf77bda9ce219a46c9bf29528bdc106aad420dfb0606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cef299e6815abfb152abf77bda9ce219a46c9bf29528bdc106aad420dfb0606->enter($__internal_8cef299e6815abfb152abf77bda9ce219a46c9bf29528bdc106aad420dfb0606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <div class=\"en-tete\">
        <img>LOGO LFB</img>
        <button>Annuler</button>
    </div>
";
        
        $__internal_8cef299e6815abfb152abf77bda9ce219a46c9bf29528bdc106aad420dfb0606->leave($__internal_8cef299e6815abfb152abf77bda9ce219a46c9bf29528bdc106aad420dfb0606_prof);

        
        $__internal_66a326c290d9ba04b3a6dd3dde5cbb1166560351e3c74de64f3258aec492d42e->leave($__internal_66a326c290d9ba04b3a6dd3dde5cbb1166560351e3c74de64f3258aec492d42e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf0674bf7b481e33650173a8ec34b78cc252ee984be7c36811a9bb3d92364d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0674bf7b481e33650173a8ec34b78cc252ee984be7c36811a9bb3d92364d65->enter($__internal_bf0674bf7b481e33650173a8ec34b78cc252ee984be7c36811a9bb3d92364d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91e6d03b0929748799569a73a2554e2b0b1fc4f8a7b6759890d1c71133e190ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e6d03b0929748799569a73a2554e2b0b1fc4f8a7b6759890d1c71133e190ae->enter($__internal_91e6d03b0929748799569a73a2554e2b0b1fc4f8a7b6759890d1c71133e190ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <button style=\"width: 150px; height: 30px\">Annuler</button>
    </div>


";
        
        $__internal_91e6d03b0929748799569a73a2554e2b0b1fc4f8a7b6759890d1c71133e190ae->leave($__internal_91e6d03b0929748799569a73a2554e2b0b1fc4f8a7b6759890d1c71133e190ae_prof);

        
        $__internal_bf0674bf7b481e33650173a8ec34b78cc252ee984be7c36811a9bb3d92364d65->leave($__internal_bf0674bf7b481e33650173a8ec34b78cc252ee984be7c36811a9bb3d92364d65_prof);

    }

    // line 79
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0f705734f9c9a8aea85021d2839c4e14795c48c2e035f00ceea6dd3b95e8f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f705734f9c9a8aea85021d2839c4e14795c48c2e035f00ceea6dd3b95e8f9c->enter($__internal_e0f705734f9c9a8aea85021d2839c4e14795c48c2e035f00ceea6dd3b95e8f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3df580a74080ae404c23fb77a641497c3b70850add264c382cb9ecbbe8f8dcfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df580a74080ae404c23fb77a641497c3b70850add264c382cb9ecbbe8f8dcfe->enter($__internal_3df580a74080ae404c23fb77a641497c3b70850add264c382cb9ecbbe8f8dcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 80
        echo "    <style>
        * {text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
";
        
        $__internal_3df580a74080ae404c23fb77a641497c3b70850add264c382cb9ecbbe8f8dcfe->leave($__internal_3df580a74080ae404c23fb77a641497c3b70850add264c382cb9ecbbe8f8dcfe_prof);

        
        $__internal_e0f705734f9c9a8aea85021d2839c4e14795c48c2e035f00ceea6dd3b95e8f9c->leave($__internal_e0f705734f9c9a8aea85021d2839c4e14795c48c2e035f00ceea6dd3b95e8f9c_prof);

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
        return array (  160 => 80,  151 => 79,  74 => 10,  65 => 9,  51 => 3,  42 => 2,  11 => 1,);
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
        <button>Annuler</button>
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
        <button style=\"width: 150px; height: 30px\">Annuler</button>
    </div>


{% endblock %}

{% block stylesheets %}
    <style>
        * {text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
{% endblock %}", "vues/bl.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/vues/bl.html.twig");
    }
}
