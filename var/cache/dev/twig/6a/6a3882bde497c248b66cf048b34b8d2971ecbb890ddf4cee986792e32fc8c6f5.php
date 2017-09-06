<?php

/* modals/modal-footer.php */
class __TwigTemplate_9baae4b7af24b9b9e15cc0828db52b382a0712428e4f27d8368b3d86b47669c9 extends Twig_Template
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
        $__internal_5159b65c0ae68681de3ff014266397079a4d7f54940e7161e5aceb0d796a48b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5159b65c0ae68681de3ff014266397079a4d7f54940e7161e5aceb0d796a48b9->enter($__internal_5159b65c0ae68681de3ff014266397079a4d7f54940e7161e5aceb0d796a48b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-footer.php"));

        $__internal_5cc9b8daac96a41e31ebe82e01949d26b2bc1447ec99d15a00b4309180548b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc9b8daac96a41e31ebe82e01949d26b2bc1447ec99d15a00b4309180548b23->enter($__internal_5cc9b8daac96a41e31ebe82e01949d26b2bc1447ec99d15a00b4309180548b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-footer.php"));

        // line 1
        echo "<!-- Modal Contact -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalContact\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalContact\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title text-center\"> <?php echo \$modal[\$_SESSION['language']]['contact']['title'] ?> </h4>
\t\t\t</div>

\t\t\t<div id=\"contact-errors\" class=\"text-left col-lg-offset-1 modal-errors\"></div>
\t\t\t<form role=\"form\" class=\"form-horizontal contactForm\" id=\"contactForm\" name=\"contactForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/contact.php' ?>\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<?php foreach(\$modal[\$_SESSION['language']]['contact']['field'] as \$key => \$value) { ?>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t\t<label><?php echo \$value['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-5\">
           \t\t\t<input type=\"<?php echo \$value['type']; ?>\" class=\"form-control\" id=\"<?php echo \$value['input']; ?>\" name=\"<?php echo \$value['input']; ?>\" placeholder=\"<?php echo \$value['placeholder']; ?>\" required/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
        \t<?php } ?>

          <div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
            \t<label for=\"contact_message\"><?php echo \$modal[\$_SESSION['language']]['contact']['textarea']['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-5\">
              <textarea rows=3 cols=10 class=\"form-control\" id=\"contact_message\" name=\"contact_message\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['contact']['textarea']['placeholder']; ?>\" required></textarea>
            </div>
          </div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label><?php echo \$modal[\$_SESSION['language']]['contact']['captcha']['desc']; ?>&nbsp;&#42; <br> <span id=\"captchaOperation\"> </span> </label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"contact_captcha\" id=\"verify\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['contact']['captcha']['placeholder'] ?>\" required />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"><?php echo \$modal[\$_SESSION['language']]['contact']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>


<!-- Modal What -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalWhat\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalWhat\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\"><?php echo \$modal[\$_SESSION['language']]['what']['title']; ?></h4>
\t\t\t</div>

\t\t\t<div class=\"modal-body\">
\t\t\t\t<?php echo \$modal[\$_SESSION['language']]['what'][0]['presentation']; ?>
\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5159b65c0ae68681de3ff014266397079a4d7f54940e7161e5aceb0d796a48b9->leave($__internal_5159b65c0ae68681de3ff014266397079a4d7f54940e7161e5aceb0d796a48b9_prof);

        
        $__internal_5cc9b8daac96a41e31ebe82e01949d26b2bc1447ec99d15a00b4309180548b23->leave($__internal_5cc9b8daac96a41e31ebe82e01949d26b2bc1447ec99d15a00b4309180548b23_prof);

    }

    public function getTemplateName()
    {
        return "modals/modal-footer.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Modal Contact -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalContact\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalContact\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title text-center\"> <?php echo \$modal[\$_SESSION['language']]['contact']['title'] ?> </h4>
\t\t\t</div>

\t\t\t<div id=\"contact-errors\" class=\"text-left col-lg-offset-1 modal-errors\"></div>
\t\t\t<form role=\"form\" class=\"form-horizontal contactForm\" id=\"contactForm\" name=\"contactForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/contact.php' ?>\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<?php foreach(\$modal[\$_SESSION['language']]['contact']['field'] as \$key => \$value) { ?>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t\t<label><?php echo \$value['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-5\">
           \t\t\t<input type=\"<?php echo \$value['type']; ?>\" class=\"form-control\" id=\"<?php echo \$value['input']; ?>\" name=\"<?php echo \$value['input']; ?>\" placeholder=\"<?php echo \$value['placeholder']; ?>\" required/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
        \t<?php } ?>

          <div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
            \t<label for=\"contact_message\"><?php echo \$modal[\$_SESSION['language']]['contact']['textarea']['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-5\">
              <textarea rows=3 cols=10 class=\"form-control\" id=\"contact_message\" name=\"contact_message\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['contact']['textarea']['placeholder']; ?>\" required></textarea>
            </div>
          </div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label><?php echo \$modal[\$_SESSION['language']]['contact']['captcha']['desc']; ?>&nbsp;&#42; <br> <span id=\"captchaOperation\"> </span> </label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"contact_captcha\" id=\"verify\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['contact']['captcha']['placeholder'] ?>\" required />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"><?php echo \$modal[\$_SESSION['language']]['contact']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>


<!-- Modal What -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalWhat\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalWhat\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\"><?php echo \$modal[\$_SESSION['language']]['what']['title']; ?></h4>
\t\t\t</div>

\t\t\t<div class=\"modal-body\">
\t\t\t\t<?php echo \$modal[\$_SESSION['language']]['what'][0]['presentation']; ?>
\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "modals/modal-footer.php", "/root/GozpeakSymfony/app/Resources/views/modals/modal-footer.php");
    }
}
