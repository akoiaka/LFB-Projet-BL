<?php

/* vues/listearticles.html.twig */
class __TwigTemplate_a3f16d76945a2d4a85b8eeb0833b6a58246e781bb65c2274f44e1be2c651d176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/listearticles.html.twig", 1);
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
        $__internal_e469778d3287346ee2086d26a0f7946371bf25abd6122462220f4fc00c6081f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e469778d3287346ee2086d26a0f7946371bf25abd6122462220f4fc00c6081f5->enter($__internal_e469778d3287346ee2086d26a0f7946371bf25abd6122462220f4fc00c6081f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/listearticles.html.twig"));

        $__internal_91e3605c4d6f0377da362630f01f8c1a42fdf9359cf40d5d486acdf872727a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e3605c4d6f0377da362630f01f8c1a42fdf9359cf40d5d486acdf872727a2d->enter($__internal_91e3605c4d6f0377da362630f01f8c1a42fdf9359cf40d5d486acdf872727a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/listearticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e469778d3287346ee2086d26a0f7946371bf25abd6122462220f4fc00c6081f5->leave($__internal_e469778d3287346ee2086d26a0f7946371bf25abd6122462220f4fc00c6081f5_prof);

        
        $__internal_91e3605c4d6f0377da362630f01f8c1a42fdf9359cf40d5d486acdf872727a2d->leave($__internal_91e3605c4d6f0377da362630f01f8c1a42fdf9359cf40d5d486acdf872727a2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c465f80553ff8b7f76939d424f1ebd8d9aa8f98daebb2f9d039d3b66353d444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c465f80553ff8b7f76939d424f1ebd8d9aa8f98daebb2f9d039d3b66353d444->enter($__internal_5c465f80553ff8b7f76939d424f1ebd8d9aa8f98daebb2f9d039d3b66353d444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_612fe26b0c1fe1fe5122776f49f3eaba1bf28d8470783eddf0fc4812e82079e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612fe26b0c1fe1fe5122776f49f3eaba1bf28d8470783eddf0fc4812e82079e5->enter($__internal_612fe26b0c1fe1fe5122776f49f3eaba1bf28d8470783eddf0fc4812e82079e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <img>LOGO LFB</img>
    </div>

        <label for=\"\">LISTE DES ARTICLES</label>

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
                <th scope=\"col\">N.</th>
                <th scope=\"col\">Code</th>
                <th scope=\"col\">Désignation courte</th>
                <th scope=\"col\">Famille</th>
                <th scope=\"col\">Prix HT</th>
                <th scope=\"col\">Prix TTC</th>
                <th scope=\"col\">Stock théorique</th>
                <th scope=\"col\">Stock réel</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\">1</th>
                <td>001</td>
                <td>DC1</td>
                <td>F1</td>
                <td>HT1</td>
                <td>TTC1</td>
                <td>ST1</td>
                <td>SR1</td>
            </tr>
            <tr>
                <th scope=\"row\">2</th>
                <td>002</td>
                <td>DC2</td>
                <td>F2</td>
                <td>HT2</td>
                <td>TTC2</td>
                <td>ST2</td>
                <td>SR2</td>
            </tr>
            <tr>
                <th scope=\"row\">3</th>
                <td>003</td>
                <td>DC3</td>
                <td>F3</td>
                <td>HT3</td>
                <td>TTC3</td>
                <td>ST3</td>
                <td>SR3</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div>
        <button class=\"btn btn-primary btn-success\" style=\"width: 1000px; height: 30px\">Ajouter un article</button>
        <button class=\"btn btn-primary btn-red\" style=\"width: 500px; height: 30px\">Supprimer un article</button>
        <button class=\"btn btn-primary-blue\" style=\"width: 500px; height: 30px\">Modifier un article</button>
        <button class=\"btn btn-primary\" style=\"width: 1000px; height: 30px\"><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Revenir sur la page d'accueil</a></button>
    </div>
";
        
        $__internal_612fe26b0c1fe1fe5122776f49f3eaba1bf28d8470783eddf0fc4812e82079e5->leave($__internal_612fe26b0c1fe1fe5122776f49f3eaba1bf28d8470783eddf0fc4812e82079e5_prof);

        
        $__internal_5c465f80553ff8b7f76939d424f1ebd8d9aa8f98daebb2f9d039d3b66353d444->leave($__internal_5c465f80553ff8b7f76939d424f1ebd8d9aa8f98daebb2f9d039d3b66353d444_prof);

    }

    // line 93
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_313a231aeaf2b870ddf07a64215ca76e6062134a97ac70613c893bbf62e51807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313a231aeaf2b870ddf07a64215ca76e6062134a97ac70613c893bbf62e51807->enter($__internal_313a231aeaf2b870ddf07a64215ca76e6062134a97ac70613c893bbf62e51807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d12172c783e1b196bdec862887cbfb4ba7ecb71971f2cc0415f6c179af73ac0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12172c783e1b196bdec862887cbfb4ba7ecb71971f2cc0415f6c179af73ac0c->enter($__internal_d12172c783e1b196bdec862887cbfb4ba7ecb71971f2cc0415f6c179af73ac0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 94
        echo "    <style>

        * {
            text-align:center;
        }

        button {
            margin-top: 40px;
            display: flex;
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
        
        $__internal_d12172c783e1b196bdec862887cbfb4ba7ecb71971f2cc0415f6c179af73ac0c->leave($__internal_d12172c783e1b196bdec862887cbfb4ba7ecb71971f2cc0415f6c179af73ac0c_prof);

        
        $__internal_313a231aeaf2b870ddf07a64215ca76e6062134a97ac70613c893bbf62e51807->leave($__internal_313a231aeaf2b870ddf07a64215ca76e6062134a97ac70613c893bbf62e51807_prof);

    }

    public function getTemplateName()
    {
        return "vues/listearticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 94,  150 => 93,  137 => 89,  50 => 4,  41 => 3,  11 => 1,);
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

        <label for=\"\">LISTE DES ARTICLES</label>

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
                <th scope=\"col\">N.</th>
                <th scope=\"col\">Code</th>
                <th scope=\"col\">Désignation courte</th>
                <th scope=\"col\">Famille</th>
                <th scope=\"col\">Prix HT</th>
                <th scope=\"col\">Prix TTC</th>
                <th scope=\"col\">Stock théorique</th>
                <th scope=\"col\">Stock réel</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\">1</th>
                <td>001</td>
                <td>DC1</td>
                <td>F1</td>
                <td>HT1</td>
                <td>TTC1</td>
                <td>ST1</td>
                <td>SR1</td>
            </tr>
            <tr>
                <th scope=\"row\">2</th>
                <td>002</td>
                <td>DC2</td>
                <td>F2</td>
                <td>HT2</td>
                <td>TTC2</td>
                <td>ST2</td>
                <td>SR2</td>
            </tr>
            <tr>
                <th scope=\"row\">3</th>
                <td>003</td>
                <td>DC3</td>
                <td>F3</td>
                <td>HT3</td>
                <td>TTC3</td>
                <td>ST3</td>
                <td>SR3</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div>
        <button class=\"btn btn-primary btn-success\" style=\"width: 1000px; height: 30px\">Ajouter un article</button>
        <button class=\"btn btn-primary btn-red\" style=\"width: 500px; height: 30px\">Supprimer un article</button>
        <button class=\"btn btn-primary-blue\" style=\"width: 500px; height: 30px\">Modifier un article</button>
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
{% endblock %}", "vues/listearticles.html.twig", "/Applications/MAMP/htdocs/symphony/LFB-Projet-BL/app/Resources/views/vues/listearticles.html.twig");
    }
}
