<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
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
        $__internal_8780b5a433ea932713e57dd6f8e165b61395bfe289aca9f0fa16c5ee1af0c8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8780b5a433ea932713e57dd6f8e165b61395bfe289aca9f0fa16c5ee1af0c8d3->enter($__internal_8780b5a433ea932713e57dd6f8e165b61395bfe289aca9f0fa16c5ee1af0c8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d9309d84b9ea56ee2fc8c32c6b4f907ea828660a8d5b8c0a9bf93785de48077f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9309d84b9ea56ee2fc8c32c6b4f907ea828660a8d5b8c0a9bf93785de48077f->enter($__internal_d9309d84b9ea56ee2fc8c32c6b4f907ea828660a8d5b8c0a9bf93785de48077f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8780b5a433ea932713e57dd6f8e165b61395bfe289aca9f0fa16c5ee1af0c8d3->leave($__internal_8780b5a433ea932713e57dd6f8e165b61395bfe289aca9f0fa16c5ee1af0c8d3_prof);

        
        $__internal_d9309d84b9ea56ee2fc8c32c6b4f907ea828660a8d5b8c0a9bf93785de48077f->leave($__internal_d9309d84b9ea56ee2fc8c32c6b4f907ea828660a8d5b8c0a9bf93785de48077f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8adb9f7b3cc031290d975879dd88e60ac18f6e7ba6cf99e0c0cd7ee52a187b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adb9f7b3cc031290d975879dd88e60ac18f6e7ba6cf99e0c0cd7ee52a187b5e->enter($__internal_8adb9f7b3cc031290d975879dd88e60ac18f6e7ba6cf99e0c0cd7ee52a187b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ecbad720ee387ec89e12a421552bf5a35a9403a34173bb9e16f1f193b2ece739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbad720ee387ec89e12a421552bf5a35a9403a34173bb9e16f1f193b2ece739->enter($__internal_ecbad720ee387ec89e12a421552bf5a35a9403a34173bb9e16f1f193b2ece739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ecbad720ee387ec89e12a421552bf5a35a9403a34173bb9e16f1f193b2ece739->leave($__internal_ecbad720ee387ec89e12a421552bf5a35a9403a34173bb9e16f1f193b2ece739_prof);

        
        $__internal_8adb9f7b3cc031290d975879dd88e60ac18f6e7ba6cf99e0c0cd7ee52a187b5e->leave($__internal_8adb9f7b3cc031290d975879dd88e60ac18f6e7ba6cf99e0c0cd7ee52a187b5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72ad3207059e57f0b723bd74f563b68f8f4f735b85cdb88d32f966473a7530c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ad3207059e57f0b723bd74f563b68f8f4f735b85cdb88d32f966473a7530c2->enter($__internal_72ad3207059e57f0b723bd74f563b68f8f4f735b85cdb88d32f966473a7530c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f998be1cfc067b53be825494b88003d0088a0a05a44fab1b14b7493f74b4dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f998be1cfc067b53be825494b88003d0088a0a05a44fab1b14b7493f74b4dc6->enter($__internal_5f998be1cfc067b53be825494b88003d0088a0a05a44fab1b14b7493f74b4dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f998be1cfc067b53be825494b88003d0088a0a05a44fab1b14b7493f74b4dc6->leave($__internal_5f998be1cfc067b53be825494b88003d0088a0a05a44fab1b14b7493f74b4dc6_prof);

        
        $__internal_72ad3207059e57f0b723bd74f563b68f8f4f735b85cdb88d32f966473a7530c2->leave($__internal_72ad3207059e57f0b723bd74f563b68f8f4f735b85cdb88d32f966473a7530c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3fe8afa84d1b46ae9cde5784a7420c54a33a507f723b840ce6bd91feea26edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3fe8afa84d1b46ae9cde5784a7420c54a33a507f723b840ce6bd91feea26edc->enter($__internal_c3fe8afa84d1b46ae9cde5784a7420c54a33a507f723b840ce6bd91feea26edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5f1b82b5408ade22b690a0ea301206bae633b9c490f699ac30a764db9607236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f1b82b5408ade22b690a0ea301206bae633b9c490f699ac30a764db9607236->enter($__internal_f5f1b82b5408ade22b690a0ea301206bae633b9c490f699ac30a764db9607236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5f1b82b5408ade22b690a0ea301206bae633b9c490f699ac30a764db9607236->leave($__internal_f5f1b82b5408ade22b690a0ea301206bae633b9c490f699ac30a764db9607236_prof);

        
        $__internal_c3fe8afa84d1b46ae9cde5784a7420c54a33a507f723b840ce6bd91feea26edc->leave($__internal_c3fe8afa84d1b46ae9cde5784a7420c54a33a507f723b840ce6bd91feea26edc_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
