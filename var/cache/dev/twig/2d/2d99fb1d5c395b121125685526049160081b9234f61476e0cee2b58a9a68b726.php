<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f5a196df2e5708557a5e7834275555f40ae4fddc3fe4fd62de61dfe3d4224757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_622d947a8505f40d77bc1560fe8cb0e602f3363fa787786b710c779abb59a25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622d947a8505f40d77bc1560fe8cb0e602f3363fa787786b710c779abb59a25b->enter($__internal_622d947a8505f40d77bc1560fe8cb0e602f3363fa787786b710c779abb59a25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_45c4be88451113d4aae5f9685df4e425ae320148c6c04716d5bf27cd2008cd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c4be88451113d4aae5f9685df4e425ae320148c6c04716d5bf27cd2008cd61->enter($__internal_45c4be88451113d4aae5f9685df4e425ae320148c6c04716d5bf27cd2008cd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_622d947a8505f40d77bc1560fe8cb0e602f3363fa787786b710c779abb59a25b->leave($__internal_622d947a8505f40d77bc1560fe8cb0e602f3363fa787786b710c779abb59a25b_prof);

        
        $__internal_45c4be88451113d4aae5f9685df4e425ae320148c6c04716d5bf27cd2008cd61->leave($__internal_45c4be88451113d4aae5f9685df4e425ae320148c6c04716d5bf27cd2008cd61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
