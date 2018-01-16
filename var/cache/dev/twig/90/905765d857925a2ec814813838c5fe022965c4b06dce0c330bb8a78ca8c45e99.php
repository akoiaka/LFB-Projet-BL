<?php

/* base.html.twig */
class __TwigTemplate_0ece4e24c3c79246bde713514b3e0c5ef137f6f29c92a214a7c50585135842f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c0277efe6ba25f9b40a6378075a8bacd0b0a5c48a16f00623b1b3ee1a9a65c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0277efe6ba25f9b40a6378075a8bacd0b0a5c48a16f00623b1b3ee1a9a65c2->enter($__internal_2c0277efe6ba25f9b40a6378075a8bacd0b0a5c48a16f00623b1b3ee1a9a65c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_327d161a4b92f375a59fb137426356d2ebba55e6fd2910e39539fc2aefcc2204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327d161a4b92f375a59fb137426356d2ebba55e6fd2910e39539fc2aefcc2204->enter($__internal_327d161a4b92f375a59fb137426356d2ebba55e6fd2910e39539fc2aefcc2204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"../web/bootstrap-3.3.7-dist/css/bootstrap.min.css\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        ";
        // line 11
        echo "        ";
        // line 12
        echo "        ";
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "

    </body>

</html>
";
        
        $__internal_2c0277efe6ba25f9b40a6378075a8bacd0b0a5c48a16f00623b1b3ee1a9a65c2->leave($__internal_2c0277efe6ba25f9b40a6378075a8bacd0b0a5c48a16f00623b1b3ee1a9a65c2_prof);

        
        $__internal_327d161a4b92f375a59fb137426356d2ebba55e6fd2910e39539fc2aefcc2204->leave($__internal_327d161a4b92f375a59fb137426356d2ebba55e6fd2910e39539fc2aefcc2204_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e79ba76122a310ae2bb532e74bc174a3e428f2ca9e165b5238bb49dcbc3047b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79ba76122a310ae2bb532e74bc174a3e428f2ca9e165b5238bb49dcbc3047b3->enter($__internal_e79ba76122a310ae2bb532e74bc174a3e428f2ca9e165b5238bb49dcbc3047b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89bf94ab76cef17d628c2dab750bd36403de5743962281a4c26a4ab9da788a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bf94ab76cef17d628c2dab750bd36403de5743962281a4c26a4ab9da788a1f->enter($__internal_89bf94ab76cef17d628c2dab750bd36403de5743962281a4c26a4ab9da788a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_89bf94ab76cef17d628c2dab750bd36403de5743962281a4c26a4ab9da788a1f->leave($__internal_89bf94ab76cef17d628c2dab750bd36403de5743962281a4c26a4ab9da788a1f_prof);

        
        $__internal_e79ba76122a310ae2bb532e74bc174a3e428f2ca9e165b5238bb49dcbc3047b3->leave($__internal_e79ba76122a310ae2bb532e74bc174a3e428f2ca9e165b5238bb49dcbc3047b3_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb37998b8007eef75bc3df64f83b220c3ede3b0f0ef079d79839a6fe3e4df3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb37998b8007eef75bc3df64f83b220c3ede3b0f0ef079d79839a6fe3e4df3d2->enter($__internal_fb37998b8007eef75bc3df64f83b220c3ede3b0f0ef079d79839a6fe3e4df3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c94f7f3572255427e952bf2eb611b26b7c6899800df699ae77c3753d0ef3fcc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94f7f3572255427e952bf2eb611b26b7c6899800df699ae77c3753d0ef3fcc4->enter($__internal_c94f7f3572255427e952bf2eb611b26b7c6899800df699ae77c3753d0ef3fcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        ";
        
        $__internal_c94f7f3572255427e952bf2eb611b26b7c6899800df699ae77c3753d0ef3fcc4->leave($__internal_c94f7f3572255427e952bf2eb611b26b7c6899800df699ae77c3753d0ef3fcc4_prof);

        
        $__internal_fb37998b8007eef75bc3df64f83b220c3ede3b0f0ef079d79839a6fe3e4df3d2->leave($__internal_fb37998b8007eef75bc3df64f83b220c3ede3b0f0ef079d79839a6fe3e4df3d2_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c51c020c8a56c9b84198487c10fb27d58e04518bba75d7efd59fa5ac03f1e507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51c020c8a56c9b84198487c10fb27d58e04518bba75d7efd59fa5ac03f1e507->enter($__internal_c51c020c8a56c9b84198487c10fb27d58e04518bba75d7efd59fa5ac03f1e507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5801891c96e6cb60caa73b296c01d178b5b3c0c00e9f50da4d32c69f0a302349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5801891c96e6cb60caa73b296c01d178b5b3c0c00e9f50da4d32c69f0a302349->enter($__internal_5801891c96e6cb60caa73b296c01d178b5b3c0c00e9f50da4d32c69f0a302349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_5801891c96e6cb60caa73b296c01d178b5b3c0c00e9f50da4d32c69f0a302349->leave($__internal_5801891c96e6cb60caa73b296c01d178b5b3c0c00e9f50da4d32c69f0a302349_prof);

        
        $__internal_c51c020c8a56c9b84198487c10fb27d58e04518bba75d7efd59fa5ac03f1e507->leave($__internal_c51c020c8a56c9b84198487c10fb27d58e04518bba75d7efd59fa5ac03f1e507_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a5c4b295099b53ee66d83a5de570091c1b56c106c22ac4965ce5abccbe0c396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5c4b295099b53ee66d83a5de570091c1b56c106c22ac4965ce5abccbe0c396->enter($__internal_6a5c4b295099b53ee66d83a5de570091c1b56c106c22ac4965ce5abccbe0c396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08dd8cb3e9668590cad8141e510b911e3349c1fb823a59dff6fe99f4093466b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dd8cb3e9668590cad8141e510b911e3349c1fb823a59dff6fe99f4093466b3->enter($__internal_08dd8cb3e9668590cad8141e510b911e3349c1fb823a59dff6fe99f4093466b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08dd8cb3e9668590cad8141e510b911e3349c1fb823a59dff6fe99f4093466b3->leave($__internal_08dd8cb3e9668590cad8141e510b911e3349c1fb823a59dff6fe99f4093466b3_prof);

        
        $__internal_6a5c4b295099b53ee66d83a5de570091c1b56c106c22ac4965ce5abccbe0c396->leave($__internal_6a5c4b295099b53ee66d83a5de570091c1b56c106c22ac4965ce5abccbe0c396_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 26,  134 => 22,  125 => 21,  115 => 17,  106 => 16,  88 => 5,  73 => 27,  71 => 26,  67 => 24,  65 => 21,  60 => 20,  58 => 19,  56 => 18,  54 => 16,  51 => 15,  49 => 14,  47 => 13,  45 => 12,  43 => 11,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"../web/bootstrap-3.3.7-dist/css/bootstrap.min.css\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        {#IMPORTANT#}
        {#!!!  BOOTSTRAP FONCTIONNE ICI AVEC LE CDN MAIS IL FAUT IMPERATIVEMENT LE REPASSER AVEC LE FICHIER LIÉ#}
        {#AVANT LA CONCLUSION DU PROJET FINAL !!!#}
        {#<link rel=\"stylesheet\" href=\"{{ asset('web/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}\">#}
        {#<link rel=\"stylesheet\" href=\"{{ web/bootstrap-3.3.7-dist/css/bootstrap.min.css }}\" />#}

        {% block stylesheets %}
        {% endblock %}
        {#{% stylesheets 'bundles/app/css/*' filter='cssrewrite' %}#}
        {#{% endstylesheets %}#}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% block javascripts %}
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}


    </body>

</html>
", "base.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/base.html.twig");
    }
}
