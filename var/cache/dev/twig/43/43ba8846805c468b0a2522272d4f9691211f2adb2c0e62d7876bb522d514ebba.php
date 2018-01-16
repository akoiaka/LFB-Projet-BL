<?php

/* security/login.html.twig */
class __TwigTemplate_d10394520580fa7072ae57cb14064bf3d649c639eec777f055b196f09d3217c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57bd72eaf7986af8d0b7e93e560bafa962d4b186ab00ccc31d0d23d965611890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57bd72eaf7986af8d0b7e93e560bafa962d4b186ab00ccc31d0d23d965611890->enter($__internal_57bd72eaf7986af8d0b7e93e560bafa962d4b186ab00ccc31d0d23d965611890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_d3202d5d363c21f530455ba97d376405c5a0c5038b947cf4b9431c222e11acd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3202d5d363c21f530455ba97d376405c5a0c5038b947cf4b9431c222e11acd1->enter($__internal_d3202d5d363c21f530455ba97d376405c5a0c5038b947cf4b9431c222e11acd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57bd72eaf7986af8d0b7e93e560bafa962d4b186ab00ccc31d0d23d965611890->leave($__internal_57bd72eaf7986af8d0b7e93e560bafa962d4b186ab00ccc31d0d23d965611890_prof);

        
        $__internal_d3202d5d363c21f530455ba97d376405c5a0c5038b947cf4b9431c222e11acd1->leave($__internal_d3202d5d363c21f530455ba97d376405c5a0c5038b947cf4b9431c222e11acd1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13234cffe6018f204d71b982ed069fae4c8db88eeacbc3532d028fbfda720dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13234cffe6018f204d71b982ed069fae4c8db88eeacbc3532d028fbfda720dd3->enter($__internal_13234cffe6018f204d71b982ed069fae4c8db88eeacbc3532d028fbfda720dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9c585249efab88cfc5d0b997895788e7e7b484605eab98261e866230b517f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c585249efab88cfc5d0b997895788e7e7b484605eab98261e866230b517f3a->enter($__internal_c9c585249efab88cfc5d0b997895788e7e7b484605eab98261e866230b517f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                <div class=\"panel panel-login\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <a href=\"#\" class=\"active\" id=\"login-form-link\">Login</a>
                            </div>
                            <div class=\"col-xs-6\">
                                <a href=\"#\" id=\"register-form-link\">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <form id=\"login-form\" action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\" role=\"form\" style=\"display: block;\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" name=\"username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Username\" value=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">
                                    </div>
                                    <div class=\"form-group text-center\">
                                        <input type=\"checkbox\" tabindex=\"3\" class=\"\" name=\"remember\" id=\"remember\">
                                        <label for=\"remember\"> Remember Me</label>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-sm-offset-3\">
                                                <input type=\"submit\" name=\"login-submit\" id=\"login-submit\" tabindex=\"4\" class=\"form-control btn btn-login\" value=\"Log In\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <div class=\"text-center\">
                                                    <a href=\"https://phpoll.com/recover\" tabindex=\"5\" class=\"forgot-password\">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id=\"register-form\" action=\"https://phpoll.com/register/process\" method=\"post\" role=\"form\" style=\"display: none;\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" name=\"username\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Username\" value=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"Email Address\" value=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"confirm-password\" id=\"confirm-password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Confirm Password\">
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-sm-offset-3\">
                                                <input type=\"submit\" name=\"register-submit\" id=\"register-submit\" tabindex=\"4\" class=\"form-control btn btn-register\" value=\"Register Now\">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 87
        echo "
";
        
        $__internal_c9c585249efab88cfc5d0b997895788e7e7b484605eab98261e866230b517f3a->leave($__internal_c9c585249efab88cfc5d0b997895788e7e7b484605eab98261e866230b517f3a_prof);

        
        $__internal_13234cffe6018f204d71b982ed069fae4c8db88eeacbc3532d028fbfda720dd3->leave($__internal_13234cffe6018f204d71b982ed069fae4c8db88eeacbc3532d028fbfda720dd3_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 87,  83 => 28,  78 => 26,  57 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                <div class=\"panel panel-login\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <a href=\"#\" class=\"active\" id=\"login-form-link\">Login</a>
                            </div>
                            <div class=\"col-xs-6\">
                                <a href=\"#\" id=\"register-form-link\">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <form id=\"login-form\" action=\"{{ path('login') }}\" method=\"post\" role=\"form\" style=\"display: block;\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" name=\"username\" value=\"{{ last_username }}\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Username\" value=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">
                                    </div>
                                    <div class=\"form-group text-center\">
                                        <input type=\"checkbox\" tabindex=\"3\" class=\"\" name=\"remember\" id=\"remember\">
                                        <label for=\"remember\"> Remember Me</label>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-sm-offset-3\">
                                                <input type=\"submit\" name=\"login-submit\" id=\"login-submit\" tabindex=\"4\" class=\"form-control btn btn-login\" value=\"Log In\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <div class=\"text-center\">
                                                    <a href=\"https://phpoll.com/recover\" tabindex=\"5\" class=\"forgot-password\">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id=\"register-form\" action=\"https://phpoll.com/register/process\" method=\"post\" role=\"form\" style=\"display: none;\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" name=\"username\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Username\" value=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"Email Address\" value=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"confirm-password\" id=\"confirm-password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Confirm Password\">
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-sm-offset-3\">
                                                <input type=\"submit\" name=\"register-submit\" id=\"register-submit\" tabindex=\"4\" class=\"form-control btn btn-register\" value=\"Register Now\">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {#
      If you want to control the URL the user
      is redirected to on success (more details below)
      <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
  #}

{% endblock %}", "security/login.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/security/login.html.twig");
    }
}
