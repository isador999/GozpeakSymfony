<?php

/* modals/modal-profile.php */
class __TwigTemplate_fef0b46a2828c1763927123ff35c601724d1a99781cf03957db1c5680e299308 extends Twig_Template
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
        $__internal_e7f231e42e3cd04cadf0ad7826b65b241495f190b8a761266a86af2657db31fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f231e42e3cd04cadf0ad7826b65b241495f190b8a761266a86af2657db31fb->enter($__internal_e7f231e42e3cd04cadf0ad7826b65b241495f190b8a761266a86af2657db31fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-profile.php"));

        $__internal_2a51601122056d08b877987ee96d7c3a863b27bb10fd43754d0ad3899df22805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a51601122056d08b877987ee96d7c3a863b27bb10fd43754d0ad3899df22805->enter($__internal_2a51601122056d08b877987ee96d7c3a863b27bb10fd43754d0ad3899df22805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-profile.php"));

        // line 1
        echo "<!-- Modal Profile -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalProfileEdition\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalProfileEdition\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title text-center\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['title']; ?></h4>
\t\t\t</div>


\t\t\t<!-- The messages container -->
\t\t\t<div id=\"profile-errors\" class=\"text-left col-lg-offset-1 modal-errors\"></div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal\" name=\"profileForm\" id=\"profileForm\" method=\"POST\" action=\"<?php echo \$baseUrl.'/controllers/updateprofile.php' ?>\">
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_pseudo\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['pseudo']['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"profile_pseudo\" title=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['pseudo']['title']; ?>\" name=\"profile_pseudo\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['pseudo']['placeholder']; ?>\" readonly required />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_lastname\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][0]['desc']; ?></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"profile_lastname\" name=\"profile_lastname\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][0]['placeholder']; ?>\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_firstname\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][1]['desc']; ?></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"profile_firstname\" name=\"profile_firstname\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][1]['placeholder']; ?>\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_mail\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][2]['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"profile_mail\" name=\"profile_mail\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][2]['placeholder']; ?>\" required />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_nationality\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][3]['desc']; ?></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"profile_nationality\" name=\"profile_nationality\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][3]['placeholder']; ?>\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_birthdate\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][4]['desc']; ?></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control datetime-btn\" id=\"profile_birthdate\" name=\"profile_birthdate\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][4]['placeholder']; ?>\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tshowDatetimePicker();
\t\t\t\t\t</script>

\t\t\t\t\t<!-- Begin of MultiSelects (languages) -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
        \t\t\t<label for=\"profile_languages\"> <?php echo \$modal[\$_SESSION['language']]['profile']['edition']['select']['lang']['label']; ?> </label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-5\">
            \t<select class=\"form-control\" name=\"profile_languages\" multiple disabled>
\t\t\t\t\t\t\t\t<?php foreach(\$minilang[\$_SESSION['language']]['icon'] as \$key => \$lang){ ?>
\t\t\t\t\t\t\t\t\t<!-- <option value=\"<?php #echo \$lang['value']; ?>\"> <?php #echo \$lang['entry'] ?></option> -->
\t\t\t\t\t\t\t\t\t<option style=\"background-image:url(<?php echo \$lang['png'] ?>); background-repeat: no-repeat; padding-left: 18px; background-size: 19px 19px;\" value=\"<?php echo \$lang['value']; ?>\"> &nbsp;&nbsp; <?php echo \$lang['text']; ?></option>
\t\t\t\t\t\t\t\t<?php } ?>
            \t</select>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<i> <?php echo \$modal[\$_SESSION['language']]['profile']['edition']['selectlang']['help']; ?> </i>
        \t\t</div>
    \t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>



<!-- Modal ChangePassword in Profile -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalChangePassword\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalChangePassword\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title text-center\"><?php echo \$modal[\$_SESSION['language']]['changepass']['title']; ?></h4>
\t\t\t</div>

\t\t\t<!-- The messages container -->
\t\t\t<div id=\"changepass-errors\" class=\"text-left col-lg-offset-1 modal-errors\"></div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal\" name=\"changepassForm\" id=\"changepassForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/setnewpass.php' ?>\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<?php foreach(\$modal[\$_SESSION['language']]['changepass']['field'] as \$key => \$value) { ?>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t\t<label for=\"<?php echo \$value['desc']; ?>\"><?php echo \$value['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<input type=\"<?php echo \$value['type']; ?>\" class=\"form-control\" id=\"<?php echo \$value['input']; ?>\" name=\"<?php echo \$value['input']; ?>\" placeholder=\"<?php echo \$value['placeholder']; ?>\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<?php } ?>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"><?php echo \$modal[\$_SESSION['language']]['changepass']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>


<!-- Modal ProfileDeletion -->
<div class=\"modal fade\" id=\"modalProfileDeletion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalProfileDeletion\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title text-center\"><?php echo \$modal[\$_SESSION['language']]['profiledeletion']['title']; ?></h4>
\t\t\t</div>

\t\t\t<!-- The messages container -->
\t\t\t<div id=\"profiledeletion-errors\" class=\"text-left col-lg-offset-1 modal-errors\"></div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal\" name=\"profiledeletionForm\" id=\"profiledeletionForm\" method=\"post\" action=\"\">
\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t<label for=\"final_deletion_string\"><?php echo \$modal[\$_SESSION['language']]['profiledeletion']['field'][0]['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"final_deletion_string\" name=\"final_deletion_string\" placeholder=\"<?php echo \$value['placeholder']; ?>\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t<button type=\"button\" value=\"Submit\" class=\"btn btn-danger\"><?php echo \$modal[\$_SESSION['language']]['profiledeletion']['check']['desc']; ?></button>
\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_e7f231e42e3cd04cadf0ad7826b65b241495f190b8a761266a86af2657db31fb->leave($__internal_e7f231e42e3cd04cadf0ad7826b65b241495f190b8a761266a86af2657db31fb_prof);

        
        $__internal_2a51601122056d08b877987ee96d7c3a863b27bb10fd43754d0ad3899df22805->leave($__internal_2a51601122056d08b877987ee96d7c3a863b27bb10fd43754d0ad3899df22805_prof);

    }

    public function getTemplateName()
    {
        return "modals/modal-profile.php";
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
        return new Twig_Source("<!-- Modal Profile -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalProfileEdition\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalProfileEdition\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title text-center\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['title']; ?></h4>
\t\t\t</div>


\t\t\t<!-- The messages container -->
\t\t\t<div id=\"profile-errors\" class=\"text-left col-lg-offset-1 modal-errors\"></div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal\" name=\"profileForm\" id=\"profileForm\" method=\"POST\" action=\"<?php echo \$baseUrl.'/controllers/updateprofile.php' ?>\">
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_pseudo\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['pseudo']['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"profile_pseudo\" title=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['pseudo']['title']; ?>\" name=\"profile_pseudo\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['pseudo']['placeholder']; ?>\" readonly required />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_lastname\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][0]['desc']; ?></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"profile_lastname\" name=\"profile_lastname\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][0]['placeholder']; ?>\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_firstname\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][1]['desc']; ?></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"profile_firstname\" name=\"profile_firstname\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][1]['placeholder']; ?>\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_mail\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][2]['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"profile_mail\" name=\"profile_mail\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][2]['placeholder']; ?>\" required />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_nationality\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][3]['desc']; ?></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"profile_nationality\" name=\"profile_nationality\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][3]['placeholder']; ?>\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t<label for=\"profile_birthdate\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][4]['desc']; ?></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control datetime-btn\" id=\"profile_birthdate\" name=\"profile_birthdate\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['profile']['edition']['field'][4]['placeholder']; ?>\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tshowDatetimePicker();
\t\t\t\t\t</script>

\t\t\t\t\t<!-- Begin of MultiSelects (languages) -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
        \t\t\t<label for=\"profile_languages\"> <?php echo \$modal[\$_SESSION['language']]['profile']['edition']['select']['lang']['label']; ?> </label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-5\">
            \t<select class=\"form-control\" name=\"profile_languages\" multiple disabled>
\t\t\t\t\t\t\t\t<?php foreach(\$minilang[\$_SESSION['language']]['icon'] as \$key => \$lang){ ?>
\t\t\t\t\t\t\t\t\t<!-- <option value=\"<?php #echo \$lang['value']; ?>\"> <?php #echo \$lang['entry'] ?></option> -->
\t\t\t\t\t\t\t\t\t<option style=\"background-image:url(<?php echo \$lang['png'] ?>); background-repeat: no-repeat; padding-left: 18px; background-size: 19px 19px;\" value=\"<?php echo \$lang['value']; ?>\"> &nbsp;&nbsp; <?php echo \$lang['text']; ?></option>
\t\t\t\t\t\t\t\t<?php } ?>
            \t</select>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<i> <?php echo \$modal[\$_SESSION['language']]['profile']['edition']['selectlang']['help']; ?> </i>
        \t\t</div>
    \t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"><?php echo \$modal[\$_SESSION['language']]['profile']['edition']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>



<!-- Modal ChangePassword in Profile -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalChangePassword\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalChangePassword\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title text-center\"><?php echo \$modal[\$_SESSION['language']]['changepass']['title']; ?></h4>
\t\t\t</div>

\t\t\t<!-- The messages container -->
\t\t\t<div id=\"changepass-errors\" class=\"text-left col-lg-offset-1 modal-errors\"></div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal\" name=\"changepassForm\" id=\"changepassForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/setnewpass.php' ?>\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<?php foreach(\$modal[\$_SESSION['language']]['changepass']['field'] as \$key => \$value) { ?>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t\t<label for=\"<?php echo \$value['desc']; ?>\"><?php echo \$value['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<input type=\"<?php echo \$value['type']; ?>\" class=\"form-control\" id=\"<?php echo \$value['input']; ?>\" name=\"<?php echo \$value['input']; ?>\" placeholder=\"<?php echo \$value['placeholder']; ?>\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<?php } ?>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"><?php echo \$modal[\$_SESSION['language']]['changepass']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>


<!-- Modal ProfileDeletion -->
<div class=\"modal fade\" id=\"modalProfileDeletion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalProfileDeletion\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title text-center\"><?php echo \$modal[\$_SESSION['language']]['profiledeletion']['title']; ?></h4>
\t\t\t</div>

\t\t\t<!-- The messages container -->
\t\t\t<div id=\"profiledeletion-errors\" class=\"text-left col-lg-offset-1 modal-errors\"></div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal\" name=\"profiledeletionForm\" id=\"profiledeletionForm\" method=\"post\" action=\"\">
\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t<label for=\"final_deletion_string\"><?php echo \$modal[\$_SESSION['language']]['profiledeletion']['field'][0]['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"final_deletion_string\" name=\"final_deletion_string\" placeholder=\"<?php echo \$value['placeholder']; ?>\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t<button type=\"button\" value=\"Submit\" class=\"btn btn-danger\"><?php echo \$modal[\$_SESSION['language']]['profiledeletion']['check']['desc']; ?></button>
\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
", "modals/modal-profile.php", "/root/GozpeakSymfony/app/Resources/views/modals/modal-profile.php");
    }
}
