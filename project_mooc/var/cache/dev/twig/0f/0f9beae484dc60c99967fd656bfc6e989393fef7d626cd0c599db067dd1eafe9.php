<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
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
        $__internal_8b3de1de7fa052898c3624670ef061aeeb945c38912cac5e64e45b55e70778f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3de1de7fa052898c3624670ef061aeeb945c38912cac5e64e45b55e70778f3->enter($__internal_8b3de1de7fa052898c3624670ef061aeeb945c38912cac5e64e45b55e70778f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_50de0642e82c4d36e8db5e8f7d000782cd656ddbb32c62deeefc58dc4b222abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50de0642e82c4d36e8db5e8f7d000782cd656ddbb32c62deeefc58dc4b222abb->enter($__internal_50de0642e82c4d36e8db5e8f7d000782cd656ddbb32c62deeefc58dc4b222abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b3de1de7fa052898c3624670ef061aeeb945c38912cac5e64e45b55e70778f3->leave($__internal_8b3de1de7fa052898c3624670ef061aeeb945c38912cac5e64e45b55e70778f3_prof);

        
        $__internal_50de0642e82c4d36e8db5e8f7d000782cd656ddbb32c62deeefc58dc4b222abb->leave($__internal_50de0642e82c4d36e8db5e8f7d000782cd656ddbb32c62deeefc58dc4b222abb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f34a84bb41f199c19ba0e82ec54ae9c5c1d6f7e6b960c501f6bba77888cb9b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34a84bb41f199c19ba0e82ec54ae9c5c1d6f7e6b960c501f6bba77888cb9b7e->enter($__internal_f34a84bb41f199c19ba0e82ec54ae9c5c1d6f7e6b960c501f6bba77888cb9b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_04f6f09927da6a2d4a62b081ee73f6cd17c593acb61fa10b23f7552292a75421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f6f09927da6a2d4a62b081ee73f6cd17c593acb61fa10b23f7552292a75421->enter($__internal_04f6f09927da6a2d4a62b081ee73f6cd17c593acb61fa10b23f7552292a75421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04f6f09927da6a2d4a62b081ee73f6cd17c593acb61fa10b23f7552292a75421->leave($__internal_04f6f09927da6a2d4a62b081ee73f6cd17c593acb61fa10b23f7552292a75421_prof);

        
        $__internal_f34a84bb41f199c19ba0e82ec54ae9c5c1d6f7e6b960c501f6bba77888cb9b7e->leave($__internal_f34a84bb41f199c19ba0e82ec54ae9c5c1d6f7e6b960c501f6bba77888cb9b7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5165fabb854ed4deebb13869d48a02e6140e20681711b5fde37fdfa3a7f7fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5165fabb854ed4deebb13869d48a02e6140e20681711b5fde37fdfa3a7f7fc8->enter($__internal_e5165fabb854ed4deebb13869d48a02e6140e20681711b5fde37fdfa3a7f7fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_94d215a189fdc4b22c65c1aef166d5580289f08d0132bfacc80b4a7f5d8581a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d215a189fdc4b22c65c1aef166d5580289f08d0132bfacc80b4a7f5d8581a8->enter($__internal_94d215a189fdc4b22c65c1aef166d5580289f08d0132bfacc80b4a7f5d8581a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94d215a189fdc4b22c65c1aef166d5580289f08d0132bfacc80b4a7f5d8581a8->leave($__internal_94d215a189fdc4b22c65c1aef166d5580289f08d0132bfacc80b4a7f5d8581a8_prof);

        
        $__internal_e5165fabb854ed4deebb13869d48a02e6140e20681711b5fde37fdfa3a7f7fc8->leave($__internal_e5165fabb854ed4deebb13869d48a02e6140e20681711b5fde37fdfa3a7f7fc8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf5378d9ab64732bfc5a3b330af832d1948f08c325fd2e8fd1143e27c0e0f4c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5378d9ab64732bfc5a3b330af832d1948f08c325fd2e8fd1143e27c0e0f4c5->enter($__internal_cf5378d9ab64732bfc5a3b330af832d1948f08c325fd2e8fd1143e27c0e0f4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b73f53320d07ca3580ba3ec90f49f0da5ab442cfc53b61813c0a68c0c8db7207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73f53320d07ca3580ba3ec90f49f0da5ab442cfc53b61813c0a68c0c8db7207->enter($__internal_b73f53320d07ca3580ba3ec90f49f0da5ab442cfc53b61813c0a68c0c8db7207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b73f53320d07ca3580ba3ec90f49f0da5ab442cfc53b61813c0a68c0c8db7207->leave($__internal_b73f53320d07ca3580ba3ec90f49f0da5ab442cfc53b61813c0a68c0c8db7207_prof);

        
        $__internal_cf5378d9ab64732bfc5a3b330af832d1948f08c325fd2e8fd1143e27c0e0f4c5->leave($__internal_cf5378d9ab64732bfc5a3b330af832d1948f08c325fd2e8fd1143e27c0e0f4c5_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/quentin/Desktop/mooc/project_mooc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
