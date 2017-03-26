<?php

/* maintemplate.html.twig */
class __TwigTemplate_01ae6a10188405badb4919475e46429a9be1f5ad07fd802c877fe75516c6a10f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'corpse' => array($this, 'block_corpse'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26de0a2afd9a2401708dbc40e775090e84544f9830142a0b2d58f084e8519fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26de0a2afd9a2401708dbc40e775090e84544f9830142a0b2d58f084e8519fb3->enter($__internal_26de0a2afd9a2401708dbc40e775090e84544f9830142a0b2d58f084e8519fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintemplate.html.twig"));

        $__internal_a370b01f6421e6b8e8a082da6de3b78dc88f8c8f6890778e00dc77ae5ab9cf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a370b01f6421e6b8e8a082da6de3b78dc88f8c8f6890778e00dc77ae5ab9cf45->enter($__internal_a370b01f6421e6b8e8a082da6de3b78dc88f8c8f6890778e00dc77ae5ab9cf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintemplate.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
    <title> Gozpeak en Bretagne </title>

    <!-- PERSONAL FONT -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/typo/noteworthy.ttc"), "html", null, true);
        echo "\">

    <!-- BOOTSTRAP STYLES -->
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    <!-- <link rel=stylesheet type=\"text/css\" href=\" css/bootstrap.min.css\"> -->
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <!-- FONT AWESOME -->
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">

    <!-- PERSONAL STYLE -->
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/generic.css"), "html", null, true);
        echo "\">
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/modals.css"), "html", null, true);
        echo "\">
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/home.css"), "html", null, true);
        echo "\">
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/list.css"), "html", null, true);
        echo "\">
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/event_idea.css"), "html", null, true);
        echo "\">
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\">

    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">

    <!-- BOOTSTRAP SCRIPT -->
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/myScript.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/formValidation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-formValidation.min.js"), "html", null, true);
        echo "\"></script>

    <!-- PERSONAL SCRIPTS -->
    <script type=\"text/javascript\" async src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.subscribe.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" async src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.connect.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" async src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.forgotpass.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" async src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.contact.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" async src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.listmembers.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.fr.js"), "html", null, true);
        echo "\"></script>
    <!-- <script type=\"text/javascript\" src=\" js/typeahead.bundle.min.js\"></script>
    <script type=\"text/javascript\" src=\" js/typeahead-scroll.js\"></script> -->
  </head>
  <!-- <?php #require(\$this->viewFile); ?> -->

  <body>
    ";
        // line 53
        $this->displayBlock('navbar', $context, $blocks);
        // line 54
        echo "    ";
        $this->displayBlock('corpse', $context, $blocks);
        // line 55
        echo "    <!-- Footer -->
    <footer>
      <!-- <?php
        if (!empty(\$ViewFooterPages)) {
          foreach (\$ViewFooterPages as \$page) {
            require_once(\$page);
          }
        }
      ?> -->


      ";
        // line 66
        $this->loadTemplate("footer.php", "maintemplate.html.twig", 66)->display($context);
        // line 67
        echo "    </footer>

    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modals"]) ? $context["modals"] : $this->getContext($context, "modals")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["modal"]) {
            // line 70
            echo "      ";
            $this->loadTemplate(("./modals/" . $context["modal"]), "maintemplate.html.twig", 70)->display($context);
            // line 71
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
  </body>
</html>
";
        
        $__internal_26de0a2afd9a2401708dbc40e775090e84544f9830142a0b2d58f084e8519fb3->leave($__internal_26de0a2afd9a2401708dbc40e775090e84544f9830142a0b2d58f084e8519fb3_prof);

        
        $__internal_a370b01f6421e6b8e8a082da6de3b78dc88f8c8f6890778e00dc77ae5ab9cf45->leave($__internal_a370b01f6421e6b8e8a082da6de3b78dc88f8c8f6890778e00dc77ae5ab9cf45_prof);

    }

    // line 53
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_f9d3d5778cac3698278f65df98621805b88da8f18d0e37c2aec818c4850b51be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d3d5778cac3698278f65df98621805b88da8f18d0e37c2aec818c4850b51be->enter($__internal_f9d3d5778cac3698278f65df98621805b88da8f18d0e37c2aec818c4850b51be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_e66bf52811e9718c1355752f6820c8bcee626c7973aa8c682706580bef76ffb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66bf52811e9718c1355752f6820c8bcee626c7973aa8c682706580bef76ffb0->enter($__internal_e66bf52811e9718c1355752f6820c8bcee626c7973aa8c682706580bef76ffb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_e66bf52811e9718c1355752f6820c8bcee626c7973aa8c682706580bef76ffb0->leave($__internal_e66bf52811e9718c1355752f6820c8bcee626c7973aa8c682706580bef76ffb0_prof);

        
        $__internal_f9d3d5778cac3698278f65df98621805b88da8f18d0e37c2aec818c4850b51be->leave($__internal_f9d3d5778cac3698278f65df98621805b88da8f18d0e37c2aec818c4850b51be_prof);

    }

    // line 54
    public function block_corpse($context, array $blocks = array())
    {
        $__internal_ed0907067d29071132d8e02c0ce2825b8cf6f79e21a6c7ee3d8d26871bc34bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0907067d29071132d8e02c0ce2825b8cf6f79e21a6c7ee3d8d26871bc34bfc->enter($__internal_ed0907067d29071132d8e02c0ce2825b8cf6f79e21a6c7ee3d8d26871bc34bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpse"));

        $__internal_f8de44ac2f629ec424549faaf407218b685d2e2dbbf638039a3137cca9cb4df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8de44ac2f629ec424549faaf407218b685d2e2dbbf638039a3137cca9cb4df5->enter($__internal_f8de44ac2f629ec424549faaf407218b685d2e2dbbf638039a3137cca9cb4df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpse"));

        
        $__internal_f8de44ac2f629ec424549faaf407218b685d2e2dbbf638039a3137cca9cb4df5->leave($__internal_f8de44ac2f629ec424549faaf407218b685d2e2dbbf638039a3137cca9cb4df5_prof);

        
        $__internal_ed0907067d29071132d8e02c0ce2825b8cf6f79e21a6c7ee3d8d26871bc34bfc->leave($__internal_ed0907067d29071132d8e02c0ce2825b8cf6f79e21a6c7ee3d8d26871bc34bfc_prof);

    }

    public function getTemplateName()
    {
        return "maintemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 54,  230 => 53,  217 => 72,  203 => 71,  200 => 70,  183 => 69,  179 => 67,  177 => 66,  164 => 55,  161 => 54,  159 => 53,  149 => 46,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  93 => 29,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  58 => 18,  53 => 16,  47 => 13,  42 => 11,  36 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
    <title> Gozpeak en Bretagne </title>

    <!-- PERSONAL FONT -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('fonts/typo/noteworthy.ttc') }}\">

    <!-- BOOTSTRAP STYLES -->
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/bootstrap-theme.min.css') }}\">
    <!-- <link rel=stylesheet type=\"text/css\" href=\" css/bootstrap.min.css\"> -->
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\">

    <!-- FONT AWESOME -->
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/font-awesome.min.css') }}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/jquery-ui.min.css') }}\">

    <!-- PERSONAL STYLE -->
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/generic.css') }}\">
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/modals.css') }}\">
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/home.css') }}\">
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/list.css') }}\">
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/profile.css') }}\">
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/event_idea.css') }}\">
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/footer.css') }}\">

    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">

    <!-- BOOTSTRAP SCRIPT -->
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-ui.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/myScript.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/formValidation.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-formValidation.min.js') }}\"></script>

    <!-- PERSONAL SCRIPTS -->
    <script type=\"text/javascript\" async src=\"{{ asset('js/jquery.subscribe.js') }}\"></script>
    <script type=\"text/javascript\" async src=\"{{ asset('js/jquery.connect.js') }}\"></script>
    <script type=\"text/javascript\" async src=\"{{ asset('js/jquery.forgotpass.js') }}\"></script>
    <script type=\"text/javascript\" async src=\"{{ asset('js/jquery.contact.js') }}\"></script>
    <script type=\"text/javascript\" async src=\"{{ asset('js/jquery.listmembers.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-datetimepicker.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-datetimepicker.fr.js') }}\"></script>
    <!-- <script type=\"text/javascript\" src=\" js/typeahead.bundle.min.js\"></script>
    <script type=\"text/javascript\" src=\" js/typeahead-scroll.js\"></script> -->
  </head>
  <!-- <?php #require(\$this->viewFile); ?> -->

  <body>
    {% block navbar %}{% endblock %}
    {% block corpse %}{% endblock %}
    <!-- Footer -->
    <footer>
      <!-- <?php
        if (!empty(\$ViewFooterPages)) {
          foreach (\$ViewFooterPages as \$page) {
            require_once(\$page);
          }
        }
      ?> -->


      {% include 'footer.php' %}
    </footer>

    {% for modal in modals %}
      {% include(\"./modals/\" ~ modal) %}
    {% endfor %}

  </body>
</html>
", "maintemplate.html.twig", "/root/Gozpeak/app/Resources/views/maintemplate.html.twig");
    }
}
