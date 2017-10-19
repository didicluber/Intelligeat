<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c445b0a0e88efe572bb5020fce8da15216d45b5beb40249c4467996a8526f222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c445b0a0e88efe572bb5020fce8da15216d45b5beb40249c4467996a8526f222->enter($__internal_c445b0a0e88efe572bb5020fce8da15216d45b5beb40249c4467996a8526f222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b27cc07dd7411488a119b720e219600d8e31ae7c008a63ec55a8bdfcc3b6884b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27cc07dd7411488a119b720e219600d8e31ae7c008a63ec55a8bdfcc3b6884b->enter($__internal_b27cc07dd7411488a119b720e219600d8e31ae7c008a63ec55a8bdfcc3b6884b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c445b0a0e88efe572bb5020fce8da15216d45b5beb40249c4467996a8526f222->leave($__internal_c445b0a0e88efe572bb5020fce8da15216d45b5beb40249c4467996a8526f222_prof);

        
        $__internal_b27cc07dd7411488a119b720e219600d8e31ae7c008a63ec55a8bdfcc3b6884b->leave($__internal_b27cc07dd7411488a119b720e219600d8e31ae7c008a63ec55a8bdfcc3b6884b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9af424af60278401816675c5821bdd105e7be78a69121033287de174cbf8d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9af424af60278401816675c5821bdd105e7be78a69121033287de174cbf8d7a->enter($__internal_a9af424af60278401816675c5821bdd105e7be78a69121033287de174cbf8d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c99e51403270d2ae857e54a0636788109e3e4d989b005b0dcce6d5c691c0f25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99e51403270d2ae857e54a0636788109e3e4d989b005b0dcce6d5c691c0f25e->enter($__internal_c99e51403270d2ae857e54a0636788109e3e4d989b005b0dcce6d5c691c0f25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c99e51403270d2ae857e54a0636788109e3e4d989b005b0dcce6d5c691c0f25e->leave($__internal_c99e51403270d2ae857e54a0636788109e3e4d989b005b0dcce6d5c691c0f25e_prof);

        
        $__internal_a9af424af60278401816675c5821bdd105e7be78a69121033287de174cbf8d7a->leave($__internal_a9af424af60278401816675c5821bdd105e7be78a69121033287de174cbf8d7a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d35f653af1aece6222e58b13c2eb068edfd3c08b032885f9cbfae025f84c3cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35f653af1aece6222e58b13c2eb068edfd3c08b032885f9cbfae025f84c3cdf->enter($__internal_d35f653af1aece6222e58b13c2eb068edfd3c08b032885f9cbfae025f84c3cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4c1f83c71ba2e9a5054922d247be5561d2ce6fe9d2809bc874a847a29dce6ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1f83c71ba2e9a5054922d247be5561d2ce6fe9d2809bc874a847a29dce6ba3->enter($__internal_4c1f83c71ba2e9a5054922d247be5561d2ce6fe9d2809bc874a847a29dce6ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4c1f83c71ba2e9a5054922d247be5561d2ce6fe9d2809bc874a847a29dce6ba3->leave($__internal_4c1f83c71ba2e9a5054922d247be5561d2ce6fe9d2809bc874a847a29dce6ba3_prof);

        
        $__internal_d35f653af1aece6222e58b13c2eb068edfd3c08b032885f9cbfae025f84c3cdf->leave($__internal_d35f653af1aece6222e58b13c2eb068edfd3c08b032885f9cbfae025f84c3cdf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb0ebd2910194e65587ee70f9d2198d4db07baf0c2726e66eac5033237968a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0ebd2910194e65587ee70f9d2198d4db07baf0c2726e66eac5033237968a88->enter($__internal_cb0ebd2910194e65587ee70f9d2198d4db07baf0c2726e66eac5033237968a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38fa72660b1b885b657852ae8522351c63e544cb01dbf36fc14e5cc5e6347a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fa72660b1b885b657852ae8522351c63e544cb01dbf36fc14e5cc5e6347a2f->enter($__internal_38fa72660b1b885b657852ae8522351c63e544cb01dbf36fc14e5cc5e6347a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_38fa72660b1b885b657852ae8522351c63e544cb01dbf36fc14e5cc5e6347a2f->leave($__internal_38fa72660b1b885b657852ae8522351c63e544cb01dbf36fc14e5cc5e6347a2f_prof);

        
        $__internal_cb0ebd2910194e65587ee70f9d2198d4db07baf0c2726e66eac5033237968a88->leave($__internal_cb0ebd2910194e65587ee70f9d2198d4db07baf0c2726e66eac5033237968a88_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_636125c20dcd7e897de3bb8efcbbfd8801574b222670c2613590c9ec584e24b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636125c20dcd7e897de3bb8efcbbfd8801574b222670c2613590c9ec584e24b3->enter($__internal_636125c20dcd7e897de3bb8efcbbfd8801574b222670c2613590c9ec584e24b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b02c9f77a73f2c256e4315b4c2ef257704b4282a575c1b53c0251107a0f749f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02c9f77a73f2c256e4315b4c2ef257704b4282a575c1b53c0251107a0f749f4->enter($__internal_b02c9f77a73f2c256e4315b4c2ef257704b4282a575c1b53c0251107a0f749f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b02c9f77a73f2c256e4315b4c2ef257704b4282a575c1b53c0251107a0f749f4->leave($__internal_b02c9f77a73f2c256e4315b4c2ef257704b4282a575c1b53c0251107a0f749f4_prof);

        
        $__internal_636125c20dcd7e897de3bb8efcbbfd8801574b222670c2613590c9ec584e24b3->leave($__internal_636125c20dcd7e897de3bb8efcbbfd8801574b222670c2613590c9ec584e24b3_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/macdedylan/InteligEat/app/Resources/views/base.html.twig");
    }
}
