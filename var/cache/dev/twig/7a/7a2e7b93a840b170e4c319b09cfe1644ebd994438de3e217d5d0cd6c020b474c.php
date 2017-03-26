<?php

/* Gozpeak/views/css/jquery.fileupload-ui.css */
class __TwigTemplate_58d00aca3f2c29514e19e1176c66be5fbe8240e66b575d85c9d9480a3d75dbf5 extends Twig_Template
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
        $__internal_856e455f076679b5ef8ee08f75003aae9e36f0f56342622dcde57799b8e65cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856e455f076679b5ef8ee08f75003aae9e36f0f56342622dcde57799b8e65cba->enter($__internal_856e455f076679b5ef8ee08f75003aae9e36f0f56342622dcde57799b8e65cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/jquery.fileupload-ui.css"));

        $__internal_037e2ed26e637f151203fec816c2facb3f3f0489e2b0b715c15786e09c6338e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037e2ed26e637f151203fec816c2facb3f3f0489e2b0b715c15786e09c6338e0->enter($__internal_037e2ed26e637f151203fec816c2facb3f3f0489e2b0b715c15786e09c6338e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/jquery.fileupload-ui.css"));

        // line 1
        echo "@charset 'UTF-8';
/*
 * jQuery File Upload UI Plugin CSS 6.3
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

.fileinput-button {
  position: relative;
  overflow: hidden;
  float: left;
  margin-right: 4px;
}
.fileinput-button input {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  border: solid transparent;
  border-width: 0 0 100px 200px;
  opacity: 0;
  filter: alpha(opacity=0);
  -moz-transform: translate(-300px, 0) scale(4);
  direction: ltr;
  cursor: pointer;
}
.fileupload-buttonbar .btn,
.fileupload-buttonbar .toggle {
  margin-bottom: 5px;
}
.files .progress {
  width: 200px;
}
.progress-animated .bar {
  background: url(../img/progressbar.gif) !important;
  filter: none;
}
.fileupload-loading {
  position: absolute;
  left: 50%;
  width: 128px;
  height: 128px;
  background: url(../img/loading.gif) center no-repeat;
  display: none;
}
.fileupload-processing .fileupload-loading {
  display: block;
}

/* Fix for IE 6: */
*html .fileinput-button {
  line-height: 22px;
  margin: 1px -3px 0 0;
}

/* Fix for IE 7: */
*+html .fileinput-button {
  margin: 1px 0 0 0;
}

@media (max-width: 480px) {
  .files .btn span {
    display: none;
  }
  .files .preview * {
    width: 40px;
  }
  .files .name * {
    width: 80px;
    display: inline-block;
    word-wrap: break-word;
  }
  .files .progress {
    width: 20px;
  }
  .files .delete {
    width: 60px;
  }
}
";
        
        $__internal_856e455f076679b5ef8ee08f75003aae9e36f0f56342622dcde57799b8e65cba->leave($__internal_856e455f076679b5ef8ee08f75003aae9e36f0f56342622dcde57799b8e65cba_prof);

        
        $__internal_037e2ed26e637f151203fec816c2facb3f3f0489e2b0b715c15786e09c6338e0->leave($__internal_037e2ed26e637f151203fec816c2facb3f3f0489e2b0b715c15786e09c6338e0_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/css/jquery.fileupload-ui.css";
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
/*
 * jQuery File Upload UI Plugin CSS 6.3
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

.fileinput-button {
  position: relative;
  overflow: hidden;
  float: left;
  margin-right: 4px;
}
.fileinput-button input {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  border: solid transparent;
  border-width: 0 0 100px 200px;
  opacity: 0;
  filter: alpha(opacity=0);
  -moz-transform: translate(-300px, 0) scale(4);
  direction: ltr;
  cursor: pointer;
}
.fileupload-buttonbar .btn,
.fileupload-buttonbar .toggle {
  margin-bottom: 5px;
}
.files .progress {
  width: 200px;
}
.progress-animated .bar {
  background: url(../img/progressbar.gif) !important;
  filter: none;
}
.fileupload-loading {
  position: absolute;
  left: 50%;
  width: 128px;
  height: 128px;
  background: url(../img/loading.gif) center no-repeat;
  display: none;
}
.fileupload-processing .fileupload-loading {
  display: block;
}

/* Fix for IE 6: */
*html .fileinput-button {
  line-height: 22px;
  margin: 1px -3px 0 0;
}

/* Fix for IE 7: */
*+html .fileinput-button {
  margin: 1px 0 0 0;
}

@media (max-width: 480px) {
  .files .btn span {
    display: none;
  }
  .files .preview * {
    width: 40px;
  }
  .files .name * {
    width: 80px;
    display: inline-block;
    word-wrap: break-word;
  }
  .files .progress {
    width: 20px;
  }
  .files .delete {
    width: 60px;
  }
}
", "Gozpeak/views/css/jquery.fileupload-ui.css", "/root/Gozpeak/app/Resources/views/Gozpeak/views/css/jquery.fileupload-ui.css");
    }
}
