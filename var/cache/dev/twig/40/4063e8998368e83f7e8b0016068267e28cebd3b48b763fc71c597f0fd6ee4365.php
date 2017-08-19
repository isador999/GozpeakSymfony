<?php

/* maintemplate.html.twig */
class __TwigTemplate_81e28c80d83b18242fbd1bdd09ecd688a12860f741592a2ab6cb6e059e92c364 extends Twig_Template
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
        $__internal_d6c1a91c374454ee39c277825028147e61ecf974fff0a557629da4c293ebe4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c1a91c374454ee39c277825028147e61ecf974fff0a557629da4c293ebe4d8->enter($__internal_d6c1a91c374454ee39c277825028147e61ecf974fff0a557629da4c293ebe4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintemplate.html.twig"));

        $__internal_26f3629e285bf0221ea41909dcd8a192b289b3e200985a7bdda5896a1d236921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f3629e285bf0221ea41909dcd8a192b289b3e200985a7bdda5896a1d236921->enter($__internal_26f3629e285bf0221ea41909dcd8a192b289b3e200985a7bdda5896a1d236921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintemplate.html.twig"));

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

    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/titanic.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bodymovin.min.js"), "html", null, true);
        echo "\"></script>
    <!-- <script type=\"text/javascript\" src=\" js/typeahead.bundle.min.js\"></script>
    <script type=\"text/javascript\" src=\" js/typeahead-scroll.js\"></script> -->
  </head>
  <!-- <?php #require(\$this->viewFile); ?> -->

  <body>
    ";
        // line 56
        $this->displayBlock('navbar', $context, $blocks);
        // line 57
        echo "    ";
        $this->displayBlock('corpse', $context, $blocks);
        // line 58
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
        // line 69
        $this->loadTemplate("footer.php", "maintemplate.html.twig", 69)->display($context);
        // line 70
        echo "    </footer>

    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modals"] ?? $this->getContext($context, "modals")));
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
            // line 73
            echo "      ";
            $this->loadTemplate(("./modals/" . $context["modal"]), "maintemplate.html.twig", 73)->display($context);
            // line 74
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
        // line 75
        echo "
  </body>
</html>
";
        
        $__internal_d6c1a91c374454ee39c277825028147e61ecf974fff0a557629da4c293ebe4d8->leave($__internal_d6c1a91c374454ee39c277825028147e61ecf974fff0a557629da4c293ebe4d8_prof);

        
        $__internal_26f3629e285bf0221ea41909dcd8a192b289b3e200985a7bdda5896a1d236921->leave($__internal_26f3629e285bf0221ea41909dcd8a192b289b3e200985a7bdda5896a1d236921_prof);

    }

    // line 56
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_846863c92f36342c5e54d453d6dce362dcbd9da3efb8dc296ff2f47809a998ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846863c92f36342c5e54d453d6dce362dcbd9da3efb8dc296ff2f47809a998ac->enter($__internal_846863c92f36342c5e54d453d6dce362dcbd9da3efb8dc296ff2f47809a998ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_dbfbc277ead437a7d8c88b55550c3569de12e853fbe5a33f6d7590014e57907a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfbc277ead437a7d8c88b55550c3569de12e853fbe5a33f6d7590014e57907a->enter($__internal_dbfbc277ead437a7d8c88b55550c3569de12e853fbe5a33f6d7590014e57907a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_dbfbc277ead437a7d8c88b55550c3569de12e853fbe5a33f6d7590014e57907a->leave($__internal_dbfbc277ead437a7d8c88b55550c3569de12e853fbe5a33f6d7590014e57907a_prof);

        
        $__internal_846863c92f36342c5e54d453d6dce362dcbd9da3efb8dc296ff2f47809a998ac->leave($__internal_846863c92f36342c5e54d453d6dce362dcbd9da3efb8dc296ff2f47809a998ac_prof);

    }

    // line 57
    public function block_corpse($context, array $blocks = array())
    {
        $__internal_3395dc297360d2c62aa1dc8a5f05f4c06fc5b6463cd406d7205130c904f44dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3395dc297360d2c62aa1dc8a5f05f4c06fc5b6463cd406d7205130c904f44dce->enter($__internal_3395dc297360d2c62aa1dc8a5f05f4c06fc5b6463cd406d7205130c904f44dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpse"));

        $__internal_7bf879c1df643085534ea5573a531033572d6e7f1ef457e93298d13f33023823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf879c1df643085534ea5573a531033572d6e7f1ef457e93298d13f33023823->enter($__internal_7bf879c1df643085534ea5573a531033572d6e7f1ef457e93298d13f33023823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpse"));

        
        $__internal_7bf879c1df643085534ea5573a531033572d6e7f1ef457e93298d13f33023823->leave($__internal_7bf879c1df643085534ea5573a531033572d6e7f1ef457e93298d13f33023823_prof);

        
        $__internal_3395dc297360d2c62aa1dc8a5f05f4c06fc5b6463cd406d7205130c904f44dce->leave($__internal_3395dc297360d2c62aa1dc8a5f05f4c06fc5b6463cd406d7205130c904f44dce_prof);

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
        return array (  256 => 57,  239 => 56,  226 => 75,  212 => 74,  209 => 73,  192 => 72,  188 => 70,  186 => 69,  173 => 58,  170 => 57,  168 => 56,  158 => 49,  154 => 48,  149 => 46,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  93 => 29,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  58 => 18,  53 => 16,  47 => 13,  42 => 11,  36 => 8,  27 => 1,);
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

    <script type=\"text/javascript\" src=\"{{ asset('js/titanic.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bodymovin.min.js') }}\"></script>
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
", "maintemplate.html.twig", "/root/GozpeakSymfony/app/Resources/views/maintemplate.html.twig");
    }
}
