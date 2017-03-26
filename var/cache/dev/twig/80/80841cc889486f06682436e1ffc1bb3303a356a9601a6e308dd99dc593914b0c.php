<?php

/* Gozpeak/views/css/bootstrap-image-gallery.min.css */
class __TwigTemplate_85771b25d28ed5b88beab5094f24bfadeaec70a8768638177cff949288e6059c extends Twig_Template
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
        $__internal_cf95258444424ca70d6690396fc1c59f574806573f7eb8ad916fd0d2e8c6eddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf95258444424ca70d6690396fc1c59f574806573f7eb8ad916fd0d2e8c6eddb->enter($__internal_cf95258444424ca70d6690396fc1c59f574806573f7eb8ad916fd0d2e8c6eddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/bootstrap-image-gallery.min.css"));

        $__internal_51e46e68454877f075714ab26ef0a1bc44d191a04972b608214b823823aff1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e46e68454877f075714ab26ef0a1bc44d191a04972b608214b823823aff1d9->enter($__internal_51e46e68454877f075714ab26ef0a1bc44d191a04972b608214b823823aff1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/bootstrap-image-gallery.min.css"));

        // line 1
        echo "@charset 'UTF-8';
.modal-gallery{width:auto;max-height:none;}
.modal-gallery .modal-body{max-height:none;}
.modal-gallery .modal-title{display:inline-block;max-height:54px;overflow:hidden;}
.modal-gallery .modal-image{position:relative;margin:auto;min-width:128px;min-height:128px;overflow:hidden;cursor:pointer;}
.modal-gallery .modal-image:hover:before,.modal-gallery .modal-image:hover:after{content:'‹';position:absolute;top:50%;left:15px;width:40px;height:40px;margin-top:-20px;font-size:60px;font-weight:100;line-height:30px;color:#ffffff;text-align:center;background:#222222;border:3px solid #ffffff;-webkit-border-radius:23px;-moz-border-radius:23px;border-radius:23px;opacity:0.5;filter:alpha(opacity=50);z-index:1;}
.modal-gallery .modal-image:hover:after{content:'›';left:auto;right:15px;}
.modal-single .modal-image:hover:before,.modal-single .modal-image:hover:after{display:none;}
.modal-loading .modal-image{background:url(../img/loading.gif) center no-repeat;}
.modal-gallery.fade .modal-image{-webkit-transition:width 0.15s ease, height 0.15s ease;-moz-transition:width 0.15s ease, height 0.15s ease;-ms-transition:width 0.15s ease, height 0.15s ease;-o-transition:width 0.15s ease, height 0.15s ease;transition:width 0.15s ease, height 0.15s ease;}
.modal-gallery .modal-image *{position:absolute;top:0;opacity:0;filter:alpha(opacity=0);}
.modal-gallery.fade .modal-image *{-webkit-transition:opacity 0.5s linear;-moz-transition:opacity 0.5s linear;-ms-transition:opacity 0.5s linear;-o-transition:opacity 0.5s linear;transition:opacity 0.5s linear;}
.modal-gallery .modal-image *.in{opacity:1;filter:alpha(opacity=100);}
.modal-fullscreen{border:none;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background:transparent;overflow:hidden;}
.modal-fullscreen.modal-loading{border:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}
.modal-fullscreen .modal-body{padding:0;}
.modal-fullscreen .modal-header,.modal-fullscreen .modal-footer{position:absolute;top:0;right:0;left:0;background:transparent;border:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;opacity:0;z-index:2000;}
.modal-fullscreen .modal-footer{top:auto;bottom:0;}
.modal-fullscreen .close,.modal-fullscreen .modal-title{color:#fff;text-shadow:0 0 2px rgba(33, 33, 33, 0.8);}
.modal-fullscreen .modal-header:hover,.modal-fullscreen .modal-footer:hover{opacity:1;}
@media (max-width:480px){.modal-gallery .btn span{display:none;}}
";
        
        $__internal_cf95258444424ca70d6690396fc1c59f574806573f7eb8ad916fd0d2e8c6eddb->leave($__internal_cf95258444424ca70d6690396fc1c59f574806573f7eb8ad916fd0d2e8c6eddb_prof);

        
        $__internal_51e46e68454877f075714ab26ef0a1bc44d191a04972b608214b823823aff1d9->leave($__internal_51e46e68454877f075714ab26ef0a1bc44d191a04972b608214b823823aff1d9_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/css/bootstrap-image-gallery.min.css";
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
        return new Twig_Source("@charset 'UTF-8';
.modal-gallery{width:auto;max-height:none;}
.modal-gallery .modal-body{max-height:none;}
.modal-gallery .modal-title{display:inline-block;max-height:54px;overflow:hidden;}
.modal-gallery .modal-image{position:relative;margin:auto;min-width:128px;min-height:128px;overflow:hidden;cursor:pointer;}
.modal-gallery .modal-image:hover:before,.modal-gallery .modal-image:hover:after{content:'‹';position:absolute;top:50%;left:15px;width:40px;height:40px;margin-top:-20px;font-size:60px;font-weight:100;line-height:30px;color:#ffffff;text-align:center;background:#222222;border:3px solid #ffffff;-webkit-border-radius:23px;-moz-border-radius:23px;border-radius:23px;opacity:0.5;filter:alpha(opacity=50);z-index:1;}
.modal-gallery .modal-image:hover:after{content:'›';left:auto;right:15px;}
.modal-single .modal-image:hover:before,.modal-single .modal-image:hover:after{display:none;}
.modal-loading .modal-image{background:url(../img/loading.gif) center no-repeat;}
.modal-gallery.fade .modal-image{-webkit-transition:width 0.15s ease, height 0.15s ease;-moz-transition:width 0.15s ease, height 0.15s ease;-ms-transition:width 0.15s ease, height 0.15s ease;-o-transition:width 0.15s ease, height 0.15s ease;transition:width 0.15s ease, height 0.15s ease;}
.modal-gallery .modal-image *{position:absolute;top:0;opacity:0;filter:alpha(opacity=0);}
.modal-gallery.fade .modal-image *{-webkit-transition:opacity 0.5s linear;-moz-transition:opacity 0.5s linear;-ms-transition:opacity 0.5s linear;-o-transition:opacity 0.5s linear;transition:opacity 0.5s linear;}
.modal-gallery .modal-image *.in{opacity:1;filter:alpha(opacity=100);}
.modal-fullscreen{border:none;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background:transparent;overflow:hidden;}
.modal-fullscreen.modal-loading{border:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}
.modal-fullscreen .modal-body{padding:0;}
.modal-fullscreen .modal-header,.modal-fullscreen .modal-footer{position:absolute;top:0;right:0;left:0;background:transparent;border:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;opacity:0;z-index:2000;}
.modal-fullscreen .modal-footer{top:auto;bottom:0;}
.modal-fullscreen .close,.modal-fullscreen .modal-title{color:#fff;text-shadow:0 0 2px rgba(33, 33, 33, 0.8);}
.modal-fullscreen .modal-header:hover,.modal-fullscreen .modal-footer:hover{opacity:1;}
@media (max-width:480px){.modal-gallery .btn span{display:none;}}
", "Gozpeak/views/css/bootstrap-image-gallery.min.css", "/root/Gozpeak/app/Resources/views/Gozpeak/views/css/bootstrap-image-gallery.min.css");
    }
}
