<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
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
        $__internal_07f8f7799f6ecf9a44bb56d306d4f5005859d030e385e69b0cb2efe857e5b446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f8f7799f6ecf9a44bb56d306d4f5005859d030e385e69b0cb2efe857e5b446->enter($__internal_07f8f7799f6ecf9a44bb56d306d4f5005859d030e385e69b0cb2efe857e5b446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fa2e5565fd6bdcfdb8d7e6ddbf9477ce18186c8456e05b8542ffc73191ca35ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2e5565fd6bdcfdb8d7e6ddbf9477ce18186c8456e05b8542ffc73191ca35ae->enter($__internal_fa2e5565fd6bdcfdb8d7e6ddbf9477ce18186c8456e05b8542ffc73191ca35ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f8f7799f6ecf9a44bb56d306d4f5005859d030e385e69b0cb2efe857e5b446->leave($__internal_07f8f7799f6ecf9a44bb56d306d4f5005859d030e385e69b0cb2efe857e5b446_prof);

        
        $__internal_fa2e5565fd6bdcfdb8d7e6ddbf9477ce18186c8456e05b8542ffc73191ca35ae->leave($__internal_fa2e5565fd6bdcfdb8d7e6ddbf9477ce18186c8456e05b8542ffc73191ca35ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0e935508e28352654ba40c2bd8ef99cbf3f4f0f3c220578ad578c29b4832f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e935508e28352654ba40c2bd8ef99cbf3f4f0f3c220578ad578c29b4832f43->enter($__internal_d0e935508e28352654ba40c2bd8ef99cbf3f4f0f3c220578ad578c29b4832f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd8452fa5fbd117a9c1c7752388d1792c7049bb946767ec469be480e5f63764e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8452fa5fbd117a9c1c7752388d1792c7049bb946767ec469be480e5f63764e->enter($__internal_dd8452fa5fbd117a9c1c7752388d1792c7049bb946767ec469be480e5f63764e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dd8452fa5fbd117a9c1c7752388d1792c7049bb946767ec469be480e5f63764e->leave($__internal_dd8452fa5fbd117a9c1c7752388d1792c7049bb946767ec469be480e5f63764e_prof);

        
        $__internal_d0e935508e28352654ba40c2bd8ef99cbf3f4f0f3c220578ad578c29b4832f43->leave($__internal_d0e935508e28352654ba40c2bd8ef99cbf3f4f0f3c220578ad578c29b4832f43_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fd578a76cd06ecd2ff417e70565ad375e7c6252571b3e359643c8c22b91762e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd578a76cd06ecd2ff417e70565ad375e7c6252571b3e359643c8c22b91762e->enter($__internal_1fd578a76cd06ecd2ff417e70565ad375e7c6252571b3e359643c8c22b91762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1b3a8458207d813e97f025362e5ee7a2f4974ed69527ef4c7c87f09f285708f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3a8458207d813e97f025362e5ee7a2f4974ed69527ef4c7c87f09f285708f1->enter($__internal_1b3a8458207d813e97f025362e5ee7a2f4974ed69527ef4c7c87f09f285708f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1b3a8458207d813e97f025362e5ee7a2f4974ed69527ef4c7c87f09f285708f1->leave($__internal_1b3a8458207d813e97f025362e5ee7a2f4974ed69527ef4c7c87f09f285708f1_prof);

        
        $__internal_1fd578a76cd06ecd2ff417e70565ad375e7c6252571b3e359643c8c22b91762e->leave($__internal_1fd578a76cd06ecd2ff417e70565ad375e7c6252571b3e359643c8c22b91762e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aac0d92637ec1c95c950771fb1b4c9e865dc48999b0a00620a2d8ec26270608c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac0d92637ec1c95c950771fb1b4c9e865dc48999b0a00620a2d8ec26270608c->enter($__internal_aac0d92637ec1c95c950771fb1b4c9e865dc48999b0a00620a2d8ec26270608c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12001c4149d55b4504b710e1fa2081cb0de166aa8085f0a4de38674e01a50ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12001c4149d55b4504b710e1fa2081cb0de166aa8085f0a4de38674e01a50ecd->enter($__internal_12001c4149d55b4504b710e1fa2081cb0de166aa8085f0a4de38674e01a50ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_12001c4149d55b4504b710e1fa2081cb0de166aa8085f0a4de38674e01a50ecd->leave($__internal_12001c4149d55b4504b710e1fa2081cb0de166aa8085f0a4de38674e01a50ecd_prof);

        
        $__internal_aac0d92637ec1c95c950771fb1b4c9e865dc48999b0a00620a2d8ec26270608c->leave($__internal_aac0d92637ec1c95c950771fb1b4c9e865dc48999b0a00620a2d8ec26270608c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
