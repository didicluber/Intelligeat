<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_2d29dc93c55a7fdfa6ad21b4a6486c4f9f187144b4f81638f30d394996703ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d29dc93c55a7fdfa6ad21b4a6486c4f9f187144b4f81638f30d394996703ce8->enter($__internal_2d29dc93c55a7fdfa6ad21b4a6486c4f9f187144b4f81638f30d394996703ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7770d126a4f91b3b272555985b85b3530be1326d2178750f990fc420f8e4868c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7770d126a4f91b3b272555985b85b3530be1326d2178750f990fc420f8e4868c->enter($__internal_7770d126a4f91b3b272555985b85b3530be1326d2178750f990fc420f8e4868c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d29dc93c55a7fdfa6ad21b4a6486c4f9f187144b4f81638f30d394996703ce8->leave($__internal_2d29dc93c55a7fdfa6ad21b4a6486c4f9f187144b4f81638f30d394996703ce8_prof);

        
        $__internal_7770d126a4f91b3b272555985b85b3530be1326d2178750f990fc420f8e4868c->leave($__internal_7770d126a4f91b3b272555985b85b3530be1326d2178750f990fc420f8e4868c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a8534ebda20d8073a288cbdea14edb27f275ffba3c56f1db82fbf026efcefe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8534ebda20d8073a288cbdea14edb27f275ffba3c56f1db82fbf026efcefe5->enter($__internal_7a8534ebda20d8073a288cbdea14edb27f275ffba3c56f1db82fbf026efcefe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a2b837c074acc1e595a4c7de860f39a4a91d31418bbeeae256ac8f55fd74f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2b837c074acc1e595a4c7de860f39a4a91d31418bbeeae256ac8f55fd74f01->enter($__internal_0a2b837c074acc1e595a4c7de860f39a4a91d31418bbeeae256ac8f55fd74f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0a2b837c074acc1e595a4c7de860f39a4a91d31418bbeeae256ac8f55fd74f01->leave($__internal_0a2b837c074acc1e595a4c7de860f39a4a91d31418bbeeae256ac8f55fd74f01_prof);

        
        $__internal_7a8534ebda20d8073a288cbdea14edb27f275ffba3c56f1db82fbf026efcefe5->leave($__internal_7a8534ebda20d8073a288cbdea14edb27f275ffba3c56f1db82fbf026efcefe5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f53b448782dd75e2c576df624ea10d1303a7b67dab97893615234f1e19f0e51c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53b448782dd75e2c576df624ea10d1303a7b67dab97893615234f1e19f0e51c->enter($__internal_f53b448782dd75e2c576df624ea10d1303a7b67dab97893615234f1e19f0e51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a1632e8b3c88cb9af4c56138e2f905ac06c982fa0d3176a309f0c61480fa84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1632e8b3c88cb9af4c56138e2f905ac06c982fa0d3176a309f0c61480fa84b->enter($__internal_4a1632e8b3c88cb9af4c56138e2f905ac06c982fa0d3176a309f0c61480fa84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4a1632e8b3c88cb9af4c56138e2f905ac06c982fa0d3176a309f0c61480fa84b->leave($__internal_4a1632e8b3c88cb9af4c56138e2f905ac06c982fa0d3176a309f0c61480fa84b_prof);

        
        $__internal_f53b448782dd75e2c576df624ea10d1303a7b67dab97893615234f1e19f0e51c->leave($__internal_f53b448782dd75e2c576df624ea10d1303a7b67dab97893615234f1e19f0e51c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_668a4b4873e6c5da19fcbcea1fe88006a38f029d6f618615685e194aec96d36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668a4b4873e6c5da19fcbcea1fe88006a38f029d6f618615685e194aec96d36a->enter($__internal_668a4b4873e6c5da19fcbcea1fe88006a38f029d6f618615685e194aec96d36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5f8952bf5bed18aa48ef8e3d5fa485d6d11a439fbcb0de480d54ff917aba5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f8952bf5bed18aa48ef8e3d5fa485d6d11a439fbcb0de480d54ff917aba5d9->enter($__internal_e5f8952bf5bed18aa48ef8e3d5fa485d6d11a439fbcb0de480d54ff917aba5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e5f8952bf5bed18aa48ef8e3d5fa485d6d11a439fbcb0de480d54ff917aba5d9->leave($__internal_e5f8952bf5bed18aa48ef8e3d5fa485d6d11a439fbcb0de480d54ff917aba5d9_prof);

        
        $__internal_668a4b4873e6c5da19fcbcea1fe88006a38f029d6f618615685e194aec96d36a->leave($__internal_668a4b4873e6c5da19fcbcea1fe88006a38f029d6f618615685e194aec96d36a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/macdedylan/InteligEat/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
