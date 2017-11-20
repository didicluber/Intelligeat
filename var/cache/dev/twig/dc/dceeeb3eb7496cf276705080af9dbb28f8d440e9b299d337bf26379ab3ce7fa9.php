<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
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
        $__internal_54535435f6f2b5e1fa96ce14490b08be4ec0cd20b93a9aed5718be4d65a5d0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54535435f6f2b5e1fa96ce14490b08be4ec0cd20b93a9aed5718be4d65a5d0b3->enter($__internal_54535435f6f2b5e1fa96ce14490b08be4ec0cd20b93a9aed5718be4d65a5d0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_884ba1dd313bed8a49dcf83e2ff917dd5c761815350893de304bbc4318531f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884ba1dd313bed8a49dcf83e2ff917dd5c761815350893de304bbc4318531f68->enter($__internal_884ba1dd313bed8a49dcf83e2ff917dd5c761815350893de304bbc4318531f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_54535435f6f2b5e1fa96ce14490b08be4ec0cd20b93a9aed5718be4d65a5d0b3->leave($__internal_54535435f6f2b5e1fa96ce14490b08be4ec0cd20b93a9aed5718be4d65a5d0b3_prof);

        
        $__internal_884ba1dd313bed8a49dcf83e2ff917dd5c761815350893de304bbc4318531f68->leave($__internal_884ba1dd313bed8a49dcf83e2ff917dd5c761815350893de304bbc4318531f68_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_efaee07b760b18768de75e65d735a1a5ee38936635c885b60b7c2721ad714c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efaee07b760b18768de75e65d735a1a5ee38936635c885b60b7c2721ad714c6b->enter($__internal_efaee07b760b18768de75e65d735a1a5ee38936635c885b60b7c2721ad714c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97ef3e500d9d3fee87d0a409ef6f1c7637ae365f07045a43582a09723a8cffa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ef3e500d9d3fee87d0a409ef6f1c7637ae365f07045a43582a09723a8cffa4->enter($__internal_97ef3e500d9d3fee87d0a409ef6f1c7637ae365f07045a43582a09723a8cffa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_97ef3e500d9d3fee87d0a409ef6f1c7637ae365f07045a43582a09723a8cffa4->leave($__internal_97ef3e500d9d3fee87d0a409ef6f1c7637ae365f07045a43582a09723a8cffa4_prof);

        
        $__internal_efaee07b760b18768de75e65d735a1a5ee38936635c885b60b7c2721ad714c6b->leave($__internal_efaee07b760b18768de75e65d735a1a5ee38936635c885b60b7c2721ad714c6b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afd3c22af32c5b111046b72863a20baaf5679ac39e504fe51470c5cc3951a50b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd3c22af32c5b111046b72863a20baaf5679ac39e504fe51470c5cc3951a50b->enter($__internal_afd3c22af32c5b111046b72863a20baaf5679ac39e504fe51470c5cc3951a50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_53fa3d0ae373160698b05f73cc37c0b21b856b7ae915ce2c1e273c88670e677e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53fa3d0ae373160698b05f73cc37c0b21b856b7ae915ce2c1e273c88670e677e->enter($__internal_53fa3d0ae373160698b05f73cc37c0b21b856b7ae915ce2c1e273c88670e677e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/style.css"), "html", null, true);
        echo "\" />";
        
        $__internal_53fa3d0ae373160698b05f73cc37c0b21b856b7ae915ce2c1e273c88670e677e->leave($__internal_53fa3d0ae373160698b05f73cc37c0b21b856b7ae915ce2c1e273c88670e677e_prof);

        
        $__internal_afd3c22af32c5b111046b72863a20baaf5679ac39e504fe51470c5cc3951a50b->leave($__internal_afd3c22af32c5b111046b72863a20baaf5679ac39e504fe51470c5cc3951a50b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_70a04a261e90f3e47e6dbd8cabc625ce97709e03f97ef91dee75a0a809116304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a04a261e90f3e47e6dbd8cabc625ce97709e03f97ef91dee75a0a809116304->enter($__internal_70a04a261e90f3e47e6dbd8cabc625ce97709e03f97ef91dee75a0a809116304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e216565f34ca00737e8f98802d0ffe0a6b5f2d76ff5123f3c8504852c05d887c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e216565f34ca00737e8f98802d0ffe0a6b5f2d76ff5123f3c8504852c05d887c->enter($__internal_e216565f34ca00737e8f98802d0ffe0a6b5f2d76ff5123f3c8504852c05d887c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e216565f34ca00737e8f98802d0ffe0a6b5f2d76ff5123f3c8504852c05d887c->leave($__internal_e216565f34ca00737e8f98802d0ffe0a6b5f2d76ff5123f3c8504852c05d887c_prof);

        
        $__internal_70a04a261e90f3e47e6dbd8cabc625ce97709e03f97ef91dee75a0a809116304->leave($__internal_70a04a261e90f3e47e6dbd8cabc625ce97709e03f97ef91dee75a0a809116304_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3277616eb2eb2732adb0ef0bc64fa3420e59ad31d9b75039f9fe37a588f563ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3277616eb2eb2732adb0ef0bc64fa3420e59ad31d9b75039f9fe37a588f563ca->enter($__internal_3277616eb2eb2732adb0ef0bc64fa3420e59ad31d9b75039f9fe37a588f563ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f90a5da25cda51dd68bdf5c49492277cda419cd1217017945b70fce82304bf5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90a5da25cda51dd68bdf5c49492277cda419cd1217017945b70fce82304bf5f->enter($__internal_f90a5da25cda51dd68bdf5c49492277cda419cd1217017945b70fce82304bf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f90a5da25cda51dd68bdf5c49492277cda419cd1217017945b70fce82304bf5f->leave($__internal_f90a5da25cda51dd68bdf5c49492277cda419cd1217017945b70fce82304bf5f_prof);

        
        $__internal_3277616eb2eb2732adb0ef0bc64fa3420e59ad31d9b75039f9fe37a588f563ca->leave($__internal_3277616eb2eb2732adb0ef0bc64fa3420e59ad31d9b75039f9fe37a588f563ca_prof);

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
        return array (  120 => 11,  103 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}<link rel=\"stylesheet\" href=\"{{ asset('CSS/style.css') }}\" />{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\app\\Resources\\views\\base.html.twig");
    }
}
