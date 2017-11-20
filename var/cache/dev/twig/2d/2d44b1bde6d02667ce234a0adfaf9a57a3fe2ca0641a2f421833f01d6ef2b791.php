<?php

/* plat/index.html.twig */
class __TwigTemplate_7b50d5a194e6b859a15dfaec69b346042d3e470b5c4b32b490dd74bc9d676c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "plat/index.html.twig", 1);
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
        $__internal_d39afcbb44df6a9cba93fb1236ece277d0dbb5b9fd391ff5aeb33ae5ff59c105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39afcbb44df6a9cba93fb1236ece277d0dbb5b9fd391ff5aeb33ae5ff59c105->enter($__internal_d39afcbb44df6a9cba93fb1236ece277d0dbb5b9fd391ff5aeb33ae5ff59c105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $__internal_e606e3deae85dbba2dbe7f918b722901fbbcbd612f00400c4daf82421763577c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e606e3deae85dbba2dbe7f918b722901fbbcbd612f00400c4daf82421763577c->enter($__internal_e606e3deae85dbba2dbe7f918b722901fbbcbd612f00400c4daf82421763577c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d39afcbb44df6a9cba93fb1236ece277d0dbb5b9fd391ff5aeb33ae5ff59c105->leave($__internal_d39afcbb44df6a9cba93fb1236ece277d0dbb5b9fd391ff5aeb33ae5ff59c105_prof);

        
        $__internal_e606e3deae85dbba2dbe7f918b722901fbbcbd612f00400c4daf82421763577c->leave($__internal_e606e3deae85dbba2dbe7f918b722901fbbcbd612f00400c4daf82421763577c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79f49a3517e4d1c82e8ab9b6ef17cdd0e0a3c5046d6b0f81f3fc88746a71f18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f49a3517e4d1c82e8ab9b6ef17cdd0e0a3c5046d6b0f81f3fc88746a71f18a->enter($__internal_79f49a3517e4d1c82e8ab9b6ef17cdd0e0a3c5046d6b0f81f3fc88746a71f18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f368d4ea78ebeb7cfe510c72a3c16632072057b32ebaf20ea26b5c461a1f74b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f368d4ea78ebeb7cfe510c72a3c16632072057b32ebaf20ea26b5c461a1f74b1->enter($__internal_f368d4ea78ebeb7cfe510c72a3c16632072057b32ebaf20ea26b5c461a1f74b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
     <div class=\"coucou\"></div>

    <table class=\"table-fill\">

        <tbody>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plats"] ?? $this->getContext($context, "plats")));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 11
            echo "            <tr>
                <td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_show", array("id" => $this->getAttribute($context["plat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "id", array()), "html", null, true);
            echo "</a></td>
    <div class=\"background\"></div>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "nbpersonne", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_show", array("id" => $this->getAttribute($context["plat"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_edit", array("id" => $this->getAttribute($context["plat"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_new");
        echo "\">Create a new plat</a>
        </li>
    </ul>
";
        
        $__internal_f368d4ea78ebeb7cfe510c72a3c16632072057b32ebaf20ea26b5c461a1f74b1->leave($__internal_f368d4ea78ebeb7cfe510c72a3c16632072057b32ebaf20ea26b5c461a1f74b1_prof);

        
        $__internal_79f49a3517e4d1c82e8ab9b6ef17cdd0e0a3c5046d6b0f81f3fc88746a71f18a->leave($__internal_79f49a3517e4d1c82e8ab9b6ef17cdd0e0a3c5046d6b0f81f3fc88746a71f18a_prof);

    }

    public function getTemplateName()
    {
        return "plat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  104 => 29,  92 => 23,  86 => 20,  79 => 16,  75 => 15,  71 => 14,  64 => 12,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

     <div class=\"coucou\"></div>

    <table class=\"table-fill\">

        <tbody>
        {% for plat in plats %}
            <tr>
                <td><a href=\"{{ path('plat_show', { 'id': plat.id }) }}\">{{ plat.id }}</a></td>
    <div class=\"background\"></div>
                <td>{{ plat.titre }}</td>
                <td>{{ plat.prix }}</td>
                <td>{{ plat.nbpersonne }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('plat_show', { 'id': plat.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('plat_edit', { 'id': plat.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('plat_new') }}\">Create a new plat</a>
        </li>
    </ul>
{% endblock %}
", "plat/index.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\app\\Resources\\views\\plat\\index.html.twig");
    }
}
