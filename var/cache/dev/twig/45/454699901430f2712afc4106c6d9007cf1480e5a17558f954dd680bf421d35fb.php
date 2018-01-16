<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_19b4c863e74d0fa7304b3805ec542e81faa566947f9b9781d92db7ce8701ddf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e0259478f46b0f84eb8766ff79b010d9e2d2189a8a43723114e05bbd66be837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0259478f46b0f84eb8766ff79b010d9e2d2189a8a43723114e05bbd66be837->enter($__internal_6e0259478f46b0f84eb8766ff79b010d9e2d2189a8a43723114e05bbd66be837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3e10be5bc5b36fccde1bab465c2be059d56636eb4d2c31c93d85795b04224d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e10be5bc5b36fccde1bab465c2be059d56636eb4d2c31c93d85795b04224d6a->enter($__internal_3e10be5bc5b36fccde1bab465c2be059d56636eb4d2c31c93d85795b04224d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e0259478f46b0f84eb8766ff79b010d9e2d2189a8a43723114e05bbd66be837->leave($__internal_6e0259478f46b0f84eb8766ff79b010d9e2d2189a8a43723114e05bbd66be837_prof);

        
        $__internal_3e10be5bc5b36fccde1bab465c2be059d56636eb4d2c31c93d85795b04224d6a->leave($__internal_3e10be5bc5b36fccde1bab465c2be059d56636eb4d2c31c93d85795b04224d6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b752e3583f4a251e4fd4784749b96f65b825bc2295f95e7ddb3123d3cf0bf289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b752e3583f4a251e4fd4784749b96f65b825bc2295f95e7ddb3123d3cf0bf289->enter($__internal_b752e3583f4a251e4fd4784749b96f65b825bc2295f95e7ddb3123d3cf0bf289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6c66e3032612e3fcaa040a3ac5d3bdf0605c22976074a5ab9547e5fb5f1ed97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c66e3032612e3fcaa040a3ac5d3bdf0605c22976074a5ab9547e5fb5f1ed97->enter($__internal_c6c66e3032612e3fcaa040a3ac5d3bdf0605c22976074a5ab9547e5fb5f1ed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c6c66e3032612e3fcaa040a3ac5d3bdf0605c22976074a5ab9547e5fb5f1ed97->leave($__internal_c6c66e3032612e3fcaa040a3ac5d3bdf0605c22976074a5ab9547e5fb5f1ed97_prof);

        
        $__internal_b752e3583f4a251e4fd4784749b96f65b825bc2295f95e7ddb3123d3cf0bf289->leave($__internal_b752e3583f4a251e4fd4784749b96f65b825bc2295f95e7ddb3123d3cf0bf289_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3dc1449655c8894745d774ea415a509b3dcd71ccbdaa6cbb3a3d5736f96f129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3dc1449655c8894745d774ea415a509b3dcd71ccbdaa6cbb3a3d5736f96f129->enter($__internal_b3dc1449655c8894745d774ea415a509b3dcd71ccbdaa6cbb3a3d5736f96f129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_688c08f9a587f2db7de237955a5f7d5e020e9bd8011fdeb04a5bb2a8eea4512a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688c08f9a587f2db7de237955a5f7d5e020e9bd8011fdeb04a5bb2a8eea4512a->enter($__internal_688c08f9a587f2db7de237955a5f7d5e020e9bd8011fdeb04a5bb2a8eea4512a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_688c08f9a587f2db7de237955a5f7d5e020e9bd8011fdeb04a5bb2a8eea4512a->leave($__internal_688c08f9a587f2db7de237955a5f7d5e020e9bd8011fdeb04a5bb2a8eea4512a_prof);

        
        $__internal_b3dc1449655c8894745d774ea415a509b3dcd71ccbdaa6cbb3a3d5736f96f129->leave($__internal_b3dc1449655c8894745d774ea415a509b3dcd71ccbdaa6cbb3a3d5736f96f129_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a260581459338603b93d15189f56412a181197a548276a3ffe65fe6c8e79ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a260581459338603b93d15189f56412a181197a548276a3ffe65fe6c8e79ed6->enter($__internal_0a260581459338603b93d15189f56412a181197a548276a3ffe65fe6c8e79ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4746363918e8c659a2961b06965584c6c920c233fd4e8547cc5e947ee0c62db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4746363918e8c659a2961b06965584c6c920c233fd4e8547cc5e947ee0c62db->enter($__internal_b4746363918e8c659a2961b06965584c6c920c233fd4e8547cc5e947ee0c62db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b4746363918e8c659a2961b06965584c6c920c233fd4e8547cc5e947ee0c62db->leave($__internal_b4746363918e8c659a2961b06965584c6c920c233fd4e8547cc5e947ee0c62db_prof);

        
        $__internal_0a260581459338603b93d15189f56412a181197a548276a3ffe65fe6c8e79ed6->leave($__internal_0a260581459338603b93d15189f56412a181197a548276a3ffe65fe6c8e79ed6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/akoi-aka/lfb_projet_bl/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
