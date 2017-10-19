<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e1c215e7ed025151511da04ac75912414a6b6f4bb6924f108456971448dca895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c215e7ed025151511da04ac75912414a6b6f4bb6924f108456971448dca895->enter($__internal_e1c215e7ed025151511da04ac75912414a6b6f4bb6924f108456971448dca895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_db2451562b9491c6e32dac48c5629872d9c90cc6d6ea0cb1758a30a650095ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2451562b9491c6e32dac48c5629872d9c90cc6d6ea0cb1758a30a650095ae5->enter($__internal_db2451562b9491c6e32dac48c5629872d9c90cc6d6ea0cb1758a30a650095ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c215e7ed025151511da04ac75912414a6b6f4bb6924f108456971448dca895->leave($__internal_e1c215e7ed025151511da04ac75912414a6b6f4bb6924f108456971448dca895_prof);

        
        $__internal_db2451562b9491c6e32dac48c5629872d9c90cc6d6ea0cb1758a30a650095ae5->leave($__internal_db2451562b9491c6e32dac48c5629872d9c90cc6d6ea0cb1758a30a650095ae5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18ecf9b0faf9dc4411785ae91d35ac7af3ec6c5486afc4d6fe5de4ea579dfcf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ecf9b0faf9dc4411785ae91d35ac7af3ec6c5486afc4d6fe5de4ea579dfcf7->enter($__internal_18ecf9b0faf9dc4411785ae91d35ac7af3ec6c5486afc4d6fe5de4ea579dfcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a51ca635669172a3bec872ffb42b1c313a80e06b1fd6acb5eec01c67e3935a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51ca635669172a3bec872ffb42b1c313a80e06b1fd6acb5eec01c67e3935a59->enter($__internal_a51ca635669172a3bec872ffb42b1c313a80e06b1fd6acb5eec01c67e3935a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a51ca635669172a3bec872ffb42b1c313a80e06b1fd6acb5eec01c67e3935a59->leave($__internal_a51ca635669172a3bec872ffb42b1c313a80e06b1fd6acb5eec01c67e3935a59_prof);

        
        $__internal_18ecf9b0faf9dc4411785ae91d35ac7af3ec6c5486afc4d6fe5de4ea579dfcf7->leave($__internal_18ecf9b0faf9dc4411785ae91d35ac7af3ec6c5486afc4d6fe5de4ea579dfcf7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_780662edd37907ec67a9e7694964e43c685817feda2eab4f7afbad1aed436c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780662edd37907ec67a9e7694964e43c685817feda2eab4f7afbad1aed436c51->enter($__internal_780662edd37907ec67a9e7694964e43c685817feda2eab4f7afbad1aed436c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_336e9c885dc45358cb4370b1e8931a66646fc3d1655734c8c816eef9abc258a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336e9c885dc45358cb4370b1e8931a66646fc3d1655734c8c816eef9abc258a4->enter($__internal_336e9c885dc45358cb4370b1e8931a66646fc3d1655734c8c816eef9abc258a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_336e9c885dc45358cb4370b1e8931a66646fc3d1655734c8c816eef9abc258a4->leave($__internal_336e9c885dc45358cb4370b1e8931a66646fc3d1655734c8c816eef9abc258a4_prof);

        
        $__internal_780662edd37907ec67a9e7694964e43c685817feda2eab4f7afbad1aed436c51->leave($__internal_780662edd37907ec67a9e7694964e43c685817feda2eab4f7afbad1aed436c51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73ee8f91a656b7076fcb3cf7cca783d80a011eab94095da17e44cb17455ed645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ee8f91a656b7076fcb3cf7cca783d80a011eab94095da17e44cb17455ed645->enter($__internal_73ee8f91a656b7076fcb3cf7cca783d80a011eab94095da17e44cb17455ed645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f4597d1b4514d74ad37704e35098235279541c9ae8c9fc6fa9da87911b13f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4597d1b4514d74ad37704e35098235279541c9ae8c9fc6fa9da87911b13f28->enter($__internal_1f4597d1b4514d74ad37704e35098235279541c9ae8c9fc6fa9da87911b13f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f4597d1b4514d74ad37704e35098235279541c9ae8c9fc6fa9da87911b13f28->leave($__internal_1f4597d1b4514d74ad37704e35098235279541c9ae8c9fc6fa9da87911b13f28_prof);

        
        $__internal_73ee8f91a656b7076fcb3cf7cca783d80a011eab94095da17e44cb17455ed645->leave($__internal_73ee8f91a656b7076fcb3cf7cca783d80a011eab94095da17e44cb17455ed645_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/macdedylan/InteligEat/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
