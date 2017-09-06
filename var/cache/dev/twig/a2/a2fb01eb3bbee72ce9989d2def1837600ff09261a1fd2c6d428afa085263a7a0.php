<?php

/* modals/modal-eventedit.php */
class __TwigTemplate_f4f942e4b0b23b59191d38cb49c1bd95cf882a0a2760c57340ebd1e893194f37 extends Twig_Template
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
        $__internal_31c8607d8d168135a45d285b8d6d240e53c378bb78f28edaf77e5e64564d06a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c8607d8d168135a45d285b8d6d240e53c378bb78f28edaf77e5e64564d06a6->enter($__internal_31c8607d8d168135a45d285b8d6d240e53c378bb78f28edaf77e5e64564d06a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-eventedit.php"));

        $__internal_8c6abc047a8addf59be1a0ede13383172b09343409ac657ac9534909fe2b5a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6abc047a8addf59be1a0ede13383172b09343409ac657ac9534909fe2b5a7a->enter($__internal_8c6abc047a8addf59be1a0ede13383172b09343409ac657ac9534909fe2b5a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-eventedit.php"));

        // line 1
        echo "<!-- <script src=\"views/js/jquery-1.12.4.min.js\"></script>
<script src=\"views/js/bootstrap-datetimepicker.js\" charset=\"UTF-8\"></script>
<script src=\"views/js/bootstrap-datetimepicker.fr.js\" charset=\"UTF-8\"></script>

<script src=\"views/js/formValidation.min.js\"></script>
<script src=\"views/js/bootstrap-formValidation.min.js\"></script> -->
<script src=\"views/js/jquery.postevent.js\"></script>

<!-- Modal EventDeletion -->

<!-- <div class=\"modal fade\" style=\"display:none;\" id=\"modalEventDeletion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalEventDeletion\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\" id=\"modalEventDeletion\"><?php #echo \$modal[\$_SESSION['language']]['eventdeletion']['title']; ?></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-vertical\" name=\"eventdeletionForm\" id=\"eventdeletionForm\" method=\"post\" action=\"\">

          <div id=\"eventdeletion-errors\" class=\"eventdeletion-errors\"></div>
\t\t\t\t\t<?php #foreach(\$modal[\$_SESSION['language']]['eventdeletion']['field'] as \$key => \$value){ ?>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-lg-4 control-label right-modal\" for=\"<?php #echo \$value['desc']; ?>\"><?php #echo \$value['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t\t\t<input type=\"<?php #echo \$value['type']; ?>\" class=\"form-control\" id=\"<?php #echo \$value['input']; ?>\" name=\"<?php #echo \$value['input']; ?>\" placeholder=\"<?php #echo \$value['placeholder']; ?>\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<?php #}
\t\t\t\t\t?>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php #echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t<button type=\"button\" value=\"Submit\" class=\"btn btn-danger\"><?php #echo \$modal[\$_SESSION['language']]['eventdeletion']['check']['desc']; ?></button>
\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div> -->


<div class=\"modal fade\" style=\"display:none;\" id=\"modalEventEdit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalEventEdit\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title text-center\"><?php echo \$modal[\$_SESSION['language']]['eventedit']['title']; ?> <span> <img class=\"EventLogoTitle\"></span> </h4>
      </div>

      <form role=\"form\" data-toggle=\"validator\" class=\"vertical-form eventeditForm\" name=\"eventForm\" id=\"eventForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/postevent.php' ?>\">
        <div class=\"modal-body\">
          <div class=\"container-fluid\">
            <div class=\"row\">
              <div id=\"postevent-errors\" class=\"text-left col-lg-offset-1 modal-errors\"></div>
            </div>

            <div class=\"row\">
              <div class=\"col-lg-5\">
                <img style=\"width: 92%;\" class=\"EventQueryImg\" alt=\"logo\">
              </div>

              <!-- Name et Place of event -->
              <div class=\"col-lg-5\">
                <div class=\"form-group\">
                  <label class=\"text-left\" for=\"event_name\"><?php echo \$modal[\$_SESSION['language']]['postevent']['field'][0]['desc']; ?>&nbsp;&#42;</label>
                  <div class=\"text-left\">
                    <input type=\"event_name\" class=\"form-control\" id=\"event_name\" name=\"event_name\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['postevent']['field'][0]['placeholder']; ?>\" required />
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"text-left\" for=\"event_place\"><?php echo \$modal[\$_SESSION['language']]['postevent']['field'][1]['desc']; ?>&nbsp;&#42;</label>
                  <div class=\"text-left\">
                    <input type=\"text\" class=\"form-control\" id=\"event_place\" name=\"event_place\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['postevent']['field'][1]['placeholder']; ?>\" required />
                  </div>
                </div>
                <!-- End of eventplace and eventname -->
              </div>
            </div>

            <!-- Second block form-group, only for textarea -->
            <div class=\"row\">
              <div class=\"col-lg-offset-1\">
                <div class=\"row\">
                  <div class=\"form-group col-lg-8\">
                    <label class=\"text-left\" for=\"event_desc\"><?php echo \$modal[\$_SESSION['language']]['postevent']['field'][2]['desc']; ?>&nbsp;&#42;</label>
                    <div class=\"text-left\">
                      <textarea rows=5 cols=8 class=\"form-control\" id=\"event_desc\" name=\"event_desc\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['postevent']['field'][2]['placeholder']; ?>\" required></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Third block form-group, for eventdesc, select date/hour, etc... -->
            <div class=\"row\">
              <div class=\"col-lg-offset-1 col-lg-10\">
                <div class=\"row\">
                  <div class=\"col-lg-5 form-group\">
                    <label class=\"text-left\" for=\"event_datetime\"><?php echo \$modal[\$_SESSION['language']]['postevent']['field'][3]['desc']; ?>&nbsp;&#42;</label>
                    <input id=\"datetime-btn-event\" class=\"form-control datetime-btn\"  type=\"date\" name=\"event_datetime\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['postevent']['field'][3]['placeholder']; ?>\" required />
                  </div>
                  <script type=\"text/javascript\">
                    showDatetimePicker();
                  </script>

                  <div class=\"col-lg-5 form-group\">
                    <label class=\"text-left\" for=\"event_phonenumber\"><?php echo \$modal[\$_SESSION['language']]['postevent']['field'][4]['desc']; ?></label>
                    <div class=\"text-left\">
                      <input type=\"tel\" class=\"form-control\" id=\"phonenumber\" name=\"event_phonenumber\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['postevent']['field'][4]['placeholder']; ?>\" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <!-- Selects block -->
            <div class=\"row\">
              <div class=\"col-lg-offset-1 col-lg-10\">
                <div class=\"row\">
                  <div class=\"col-lg-5 form-group\">
                    <label for=\"lang\"><?php echo \$modal[\$_SESSION['language']]['selectlang']['label']; ?>&nbsp;&#42;</label>
                    <select id=\"select_lang\" class=\"form-control\" name=\"lang\" required>
                      <option value=\"<?php echo \$modal[\$_SESSION['language']]['selectlang']['default']['value']; ?>\"> <?php echo \$modal[\$_SESSION['language']]['selectlang']['default']['entry']; ?></option>
                      <?php foreach(\$minilang[\$_SESSION['language']]['icon'] as \$key => \$lang){ ?>
                        <option style=\"background-image:url(<?php echo \$baseUrl.'/'.\$lang['png'] ?>); background-repeat: no-repeat; padding-left: 18px; background-size: 19px 19px;\" value=\"<?php echo \$lang['value']; ?>\"> &nbsp;&nbsp; <?php echo \$lang['text']; ?></option>
                      <?php } ?>
                    </select>
                  </div>


                  <div class=\"col-lg-5 form-group\">
                    <label for=\"langlevel\"><?php echo \$modal[\$_SESSION['language']]['selectlanglevel']['label']; ?>&nbsp;&#42;</label>
                    <select id=\"select_langlevel\" class=\"form-control\" name=\"langlevel\" required>
                      <option value=\"<?php echo \$modal[\$_SESSION['language']]['selectlanglevel']['default']['value']; ?>\"> <?php echo \$modal[\$_SESSION['language']]['selectlanglevel']['default']['entry']; ?></option>
                      <?php foreach(\$modal[\$_SESSION['language']]['selectlanglevel']['option'] as \$key => \$lang){ ?>
                        <option value=\"<?php echo \$lang['value']; ?>\"> <?php echo \$lang['entry']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <input class=\"hiddenInputQuery\" type=\"hidden\" name=\"query\">
            <input type=\"hidden\" value=\"eventedit\" name=\"source\">
            <input class=\"hiddenInputOldEventName\" type=\"hidden\" name=\"old_event_name\">
          </div>
        <!-- End of Modal Body -->
        </div>

        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
          <button type=\"submit\" value=\"Submit\" class=\"btn btn-primary pull-right\"><?php echo \$modal[\$_SESSION['language']]['eventedit']['check']['desc']; ?></button>
        </div>
      </form>
    </div>
  </div>
</div>
";
        
        $__internal_31c8607d8d168135a45d285b8d6d240e53c378bb78f28edaf77e5e64564d06a6->leave($__internal_31c8607d8d168135a45d285b8d6d240e53c378bb78f28edaf77e5e64564d06a6_prof);

        
        $__internal_8c6abc047a8addf59be1a0ede13383172b09343409ac657ac9534909fe2b5a7a->leave($__internal_8c6abc047a8addf59be1a0ede13383172b09343409ac657ac9534909fe2b5a7a_prof);

    }

    public function getTemplateName()
    {
        return "modals/modal-eventedit.php";
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
        return new Twig_Source("<!-- <script src=\"views/js/jquery-1.12.4.min.js\"></script>
<script src=\"views/js/bootstrap-datetimepicker.js\" charset=\"UTF-8\"></script>
<script src=\"views/js/bootstrap-datetimepicker.fr.js\" charset=\"UTF-8\"></script>

<script src=\"views/js/formValidation.min.js\"></script>
<script src=\"views/js/bootstrap-formValidation.min.js\"></script> -->
<script src=\"views/js/jquery.postevent.js\"></script>

<!-- Modal EventDeletion -->

<!-- <div class=\"modal fade\" style=\"display:none;\" id=\"modalEventDeletion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalEventDeletion\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\" id=\"modalEventDeletion\"><?php #echo \$modal[\$_SESSION['language']]['eventdeletion']['title']; ?></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-vertical\" name=\"eventdeletionForm\" id=\"eventdeletionForm\" method=\"post\" action=\"\">

          <div id=\"eventdeletion-errors\" class=\"eventdeletion-errors\"></div>
\t\t\t\t\t<?php #foreach(\$modal[\$_SESSION['language']]['eventdeletion']['field'] as \$key => \$value){ ?>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-lg-4 control-label right-modal\" for=\"<?php #echo \$value['desc']; ?>\"><?php #echo \$value['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t\t\t<input type=\"<?php #echo \$value['type']; ?>\" class=\"form-control\" id=\"<?php #echo \$value['input']; ?>\" name=\"<?php #echo \$value['input']; ?>\" placeholder=\"<?php #echo \$value['placeholder']; ?>\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<?php #}
\t\t\t\t\t?>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php #echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t<button type=\"button\" value=\"Submit\" class=\"btn btn-danger\"><?php #echo \$modal[\$_SESSION['language']]['eventdeletion']['check']['desc']; ?></button>
\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div> -->


<div class=\"modal fade\" style=\"display:none;\" id=\"modalEventEdit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalEventEdit\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title text-center\"><?php echo \$modal[\$_SESSION['language']]['eventedit']['title']; ?> <span> <img class=\"EventLogoTitle\"></span> </h4>
      </div>

      <form role=\"form\" data-toggle=\"validator\" class=\"vertical-form eventeditForm\" name=\"eventForm\" id=\"eventForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/postevent.php' ?>\">
        <div class=\"modal-body\">
          <div class=\"container-fluid\">
            <div class=\"row\">
              <div id=\"postevent-errors\" class=\"text-left col-lg-offset-1 modal-errors\"></div>
            </div>

            <div class=\"row\">
              <div class=\"col-lg-5\">
                <img style=\"width: 92%;\" class=\"EventQueryImg\" alt=\"logo\">
              </div>

              <!-- Name et Place of event -->
              <div class=\"col-lg-5\">
                <div class=\"form-group\">
                  <label class=\"text-left\" for=\"event_name\"><?php echo \$modal[\$_SESSION['language']]['postevent']['field'][0]['desc']; ?>&nbsp;&#42;</label>
                  <div class=\"text-left\">
                    <input type=\"event_name\" class=\"form-control\" id=\"event_name\" name=\"event_name\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['postevent']['field'][0]['placeholder']; ?>\" required />
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"text-left\" for=\"event_place\"><?php echo \$modal[\$_SESSION['language']]['postevent']['field'][1]['desc']; ?>&nbsp;&#42;</label>
                  <div class=\"text-left\">
                    <input type=\"text\" class=\"form-control\" id=\"event_place\" name=\"event_place\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['postevent']['field'][1]['placeholder']; ?>\" required />
                  </div>
                </div>
                <!-- End of eventplace and eventname -->
              </div>
            </div>

            <!-- Second block form-group, only for textarea -->
            <div class=\"row\">
              <div class=\"col-lg-offset-1\">
                <div class=\"row\">
                  <div class=\"form-group col-lg-8\">
                    <label class=\"text-left\" for=\"event_desc\"><?php echo \$modal[\$_SESSION['language']]['postevent']['field'][2]['desc']; ?>&nbsp;&#42;</label>
                    <div class=\"text-left\">
                      <textarea rows=5 cols=8 class=\"form-control\" id=\"event_desc\" name=\"event_desc\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['postevent']['field'][2]['placeholder']; ?>\" required></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Third block form-group, for eventdesc, select date/hour, etc... -->
            <div class=\"row\">
              <div class=\"col-lg-offset-1 col-lg-10\">
                <div class=\"row\">
                  <div class=\"col-lg-5 form-group\">
                    <label class=\"text-left\" for=\"event_datetime\"><?php echo \$modal[\$_SESSION['language']]['postevent']['field'][3]['desc']; ?>&nbsp;&#42;</label>
                    <input id=\"datetime-btn-event\" class=\"form-control datetime-btn\"  type=\"date\" name=\"event_datetime\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['postevent']['field'][3]['placeholder']; ?>\" required />
                  </div>
                  <script type=\"text/javascript\">
                    showDatetimePicker();
                  </script>

                  <div class=\"col-lg-5 form-group\">
                    <label class=\"text-left\" for=\"event_phonenumber\"><?php echo \$modal[\$_SESSION['language']]['postevent']['field'][4]['desc']; ?></label>
                    <div class=\"text-left\">
                      <input type=\"tel\" class=\"form-control\" id=\"phonenumber\" name=\"event_phonenumber\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['postevent']['field'][4]['placeholder']; ?>\" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <!-- Selects block -->
            <div class=\"row\">
              <div class=\"col-lg-offset-1 col-lg-10\">
                <div class=\"row\">
                  <div class=\"col-lg-5 form-group\">
                    <label for=\"lang\"><?php echo \$modal[\$_SESSION['language']]['selectlang']['label']; ?>&nbsp;&#42;</label>
                    <select id=\"select_lang\" class=\"form-control\" name=\"lang\" required>
                      <option value=\"<?php echo \$modal[\$_SESSION['language']]['selectlang']['default']['value']; ?>\"> <?php echo \$modal[\$_SESSION['language']]['selectlang']['default']['entry']; ?></option>
                      <?php foreach(\$minilang[\$_SESSION['language']]['icon'] as \$key => \$lang){ ?>
                        <option style=\"background-image:url(<?php echo \$baseUrl.'/'.\$lang['png'] ?>); background-repeat: no-repeat; padding-left: 18px; background-size: 19px 19px;\" value=\"<?php echo \$lang['value']; ?>\"> &nbsp;&nbsp; <?php echo \$lang['text']; ?></option>
                      <?php } ?>
                    </select>
                  </div>


                  <div class=\"col-lg-5 form-group\">
                    <label for=\"langlevel\"><?php echo \$modal[\$_SESSION['language']]['selectlanglevel']['label']; ?>&nbsp;&#42;</label>
                    <select id=\"select_langlevel\" class=\"form-control\" name=\"langlevel\" required>
                      <option value=\"<?php echo \$modal[\$_SESSION['language']]['selectlanglevel']['default']['value']; ?>\"> <?php echo \$modal[\$_SESSION['language']]['selectlanglevel']['default']['entry']; ?></option>
                      <?php foreach(\$modal[\$_SESSION['language']]['selectlanglevel']['option'] as \$key => \$lang){ ?>
                        <option value=\"<?php echo \$lang['value']; ?>\"> <?php echo \$lang['entry']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <input class=\"hiddenInputQuery\" type=\"hidden\" name=\"query\">
            <input type=\"hidden\" value=\"eventedit\" name=\"source\">
            <input class=\"hiddenInputOldEventName\" type=\"hidden\" name=\"old_event_name\">
          </div>
        <!-- End of Modal Body -->
        </div>

        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
          <button type=\"submit\" value=\"Submit\" class=\"btn btn-primary pull-right\"><?php echo \$modal[\$_SESSION['language']]['eventedit']['check']['desc']; ?></button>
        </div>
      </form>
    </div>
  </div>
</div>
", "modals/modal-eventedit.php", "/root/GozpeakSymfony/app/Resources/views/modals/modal-eventedit.php");
    }
}
