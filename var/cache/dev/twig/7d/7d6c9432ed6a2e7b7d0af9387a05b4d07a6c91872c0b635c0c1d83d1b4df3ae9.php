<?php

/* Gozpeak/views/js/jquery.resetpass.js */
class __TwigTemplate_d86587d754708f623d0f0077a80e9aec45ea4f048b0463c54edc6626111cef94 extends Twig_Template
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
        $__internal_f48f812f47fcd6af7e98e01f120e6c66916231aa35636d2c3d7846cab0eb0fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48f812f47fcd6af7e98e01f120e6c66916231aa35636d2c3d7846cab0eb0fcb->enter($__internal_f48f812f47fcd6af7e98e01f120e6c66916231aa35636d2c3d7846cab0eb0fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.resetpass.js"));

        $__internal_5bc476a3bc101b3e329d8c4977390db8ac7a729a5e34c254a6b9447839e3b1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc476a3bc101b3e329d8c4977390db8ac7a729a5e34c254a6b9447839e3b1c2->enter($__internal_5bc476a3bc101b3e329d8c4977390db8ac7a729a5e34c254a6b9447839e3b1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.resetpass.js"));

        // line 1
        echo "/*\$('#modalResetPass').on('hide.bs.modal', function() {
    \$('#resetpassForm').formValidation('resetForm', true);
    \$('#resetpass-errors').html('');
});*/


\$(document).ready(function() {
    \$('#resetpassForm')
        .on('init.field.fv', function(e, data) {
            var field  = data.field,        // Get the field name
                \$field = data.element,      // Get the field element
                bv     = data.fv;           // FormValidation instance

            // Create a span element to show valid message
            // and place it right before the field
            var \$span = \$('<small/>')
                            .addClass('help-block validMessage')
                            .attr('data-field', field)
                            .insertAfter(\$field)
                            .hide();

            // Retrieve the valid message via getOptions()
            var message = bv.getOptions(field).validMessage;

            if (message) {
                \$span.html(message);
            }
        })
        .formValidation({
            framework: 'bootstrap',
            message: \"Cette valeur n'est pas valide\",
            verbose: 'false',
            trigger: 'blur',
            icon: {
\t\trequired: 'glyphicon glyphicon-asterisk',
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
            \tresettedpass: {
                //validMessage: 'Le mot de passe respecte les consignes de sécurité',
                \tvalidators: {
                    \t\tnotEmpty: {
                        \t\tmessage: \"Veuillez remplir tous les champs\"
                    \t\t},
                    \t\tstringLength: {
                       \t\t \tmin: 8,
                       \t\t \tmax: 25,
                       \t \t\tmessage: \"Le mot de passe doit comporter 8 caractères au minimum, et 25 caractères au maximum\"
                    \t\t},
                    \t\tregexp: {
                        \t\tregexp: /(?=.*[A-Z].*)(?=.*[0-9].*[0-9])(?=.*[!@#\$&*].*)/,
                            \t\tmessage: \"Le mot de passe doit comporter au minimum une majuscule, deux chiffres et un caractère spécial\"
                    \t\t}
                \t}
            \t},
                resettedpass_check: {
                //validMessage: 'Les mots de passe correspondent :) ',
                \tvalidators: {
                    \t\tnotEmpty: {
                       \t \t\tmessage: \"Veuillez confirmer votre mot de passe\"
                    \t\t},
                    \t\tidentical: {
                        \t\tfield: \"resettedpass\",
                       \t\t\tmessage: \"Les mots de passe entrés ne correspondent pas\"
                    \t\t}
                }
            }
            }
        })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#resetpass-errors').html('');
        })
    .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('#resetpass-errors').find('li[data-field=\"' + data.field + '\"]').remove();

            // Loop over the messages
            for (var i in messages) {
                // Create new 'li' element to show the message
                \$('<li/>')
                    .attr('data-field', data.field)
                    .wrapInner(
                        \$('<a/>')
                            .attr('href', 'javascript: void(0);')
                            .html(messages[i])
                            .on('click', function(e) {
                                // Hide the modal first
                                \$('#modalResetPassword').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#resetpass-errors');
            }

            // Hide the default message
            // data.element.data('fv.messages') returns the field messages element
            data.element
                .data('fv.messages')
                .find('.help-block[data-fv-for=\"' + data.field + '\"]')
                .hide();
        })
     .on('success.field.fv', function(e, data) {
            // Remove the field messages
            \$('#resetpass-errors').find('li[data-field=\"' + data.field + '\"]').remove();
        })
     .on('err.form.fv', function(e) {
            // Show the message modal
            \$('#modalResetPassword').modal('show');
        })
     .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Some instances you can use are
            var \$form = \$(e.target),        // The form instance
                fv    = \$(e.target).data('formValidation'); // FormValidation instance

                //\$('#modalInscription').modal('hide');
                //\$('#inscription-succeed').modal('show');
                fv.defaultSubmit()//.on('click', function(e) {
                         // Hide the modal first
                         //alert('TEST');
                         //\$('#modalInscriptionSucceed').modal('show');;

                //('#modalInscription').click(function

                //\$('#mymodal').on('hidden.bs.modal', function() {
                //  return false;
        });
});
";
        
        $__internal_f48f812f47fcd6af7e98e01f120e6c66916231aa35636d2c3d7846cab0eb0fcb->leave($__internal_f48f812f47fcd6af7e98e01f120e6c66916231aa35636d2c3d7846cab0eb0fcb_prof);

        
        $__internal_5bc476a3bc101b3e329d8c4977390db8ac7a729a5e34c254a6b9447839e3b1c2->leave($__internal_5bc476a3bc101b3e329d8c4977390db8ac7a729a5e34c254a6b9447839e3b1c2_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/js/jquery.resetpass.js";
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
        return new Twig_Source("/*\$('#modalResetPass').on('hide.bs.modal', function() {
    \$('#resetpassForm').formValidation('resetForm', true);
    \$('#resetpass-errors').html('');
});*/


\$(document).ready(function() {
    \$('#resetpassForm')
        .on('init.field.fv', function(e, data) {
            var field  = data.field,        // Get the field name
                \$field = data.element,      // Get the field element
                bv     = data.fv;           // FormValidation instance

            // Create a span element to show valid message
            // and place it right before the field
            var \$span = \$('<small/>')
                            .addClass('help-block validMessage')
                            .attr('data-field', field)
                            .insertAfter(\$field)
                            .hide();

            // Retrieve the valid message via getOptions()
            var message = bv.getOptions(field).validMessage;

            if (message) {
                \$span.html(message);
            }
        })
        .formValidation({
            framework: 'bootstrap',
            message: \"Cette valeur n'est pas valide\",
            verbose: 'false',
            trigger: 'blur',
            icon: {
\t\trequired: 'glyphicon glyphicon-asterisk',
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
            \tresettedpass: {
                //validMessage: 'Le mot de passe respecte les consignes de sécurité',
                \tvalidators: {
                    \t\tnotEmpty: {
                        \t\tmessage: \"Veuillez remplir tous les champs\"
                    \t\t},
                    \t\tstringLength: {
                       \t\t \tmin: 8,
                       \t\t \tmax: 25,
                       \t \t\tmessage: \"Le mot de passe doit comporter 8 caractères au minimum, et 25 caractères au maximum\"
                    \t\t},
                    \t\tregexp: {
                        \t\tregexp: /(?=.*[A-Z].*)(?=.*[0-9].*[0-9])(?=.*[!@#\$&*].*)/,
                            \t\tmessage: \"Le mot de passe doit comporter au minimum une majuscule, deux chiffres et un caractère spécial\"
                    \t\t}
                \t}
            \t},
                resettedpass_check: {
                //validMessage: 'Les mots de passe correspondent :) ',
                \tvalidators: {
                    \t\tnotEmpty: {
                       \t \t\tmessage: \"Veuillez confirmer votre mot de passe\"
                    \t\t},
                    \t\tidentical: {
                        \t\tfield: \"resettedpass\",
                       \t\t\tmessage: \"Les mots de passe entrés ne correspondent pas\"
                    \t\t}
                }
            }
            }
        })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#resetpass-errors').html('');
        })
    .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('#resetpass-errors').find('li[data-field=\"' + data.field + '\"]').remove();

            // Loop over the messages
            for (var i in messages) {
                // Create new 'li' element to show the message
                \$('<li/>')
                    .attr('data-field', data.field)
                    .wrapInner(
                        \$('<a/>')
                            .attr('href', 'javascript: void(0);')
                            .html(messages[i])
                            .on('click', function(e) {
                                // Hide the modal first
                                \$('#modalResetPassword').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#resetpass-errors');
            }

            // Hide the default message
            // data.element.data('fv.messages') returns the field messages element
            data.element
                .data('fv.messages')
                .find('.help-block[data-fv-for=\"' + data.field + '\"]')
                .hide();
        })
     .on('success.field.fv', function(e, data) {
            // Remove the field messages
            \$('#resetpass-errors').find('li[data-field=\"' + data.field + '\"]').remove();
        })
     .on('err.form.fv', function(e) {
            // Show the message modal
            \$('#modalResetPassword').modal('show');
        })
     .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Some instances you can use are
            var \$form = \$(e.target),        // The form instance
                fv    = \$(e.target).data('formValidation'); // FormValidation instance

                //\$('#modalInscription').modal('hide');
                //\$('#inscription-succeed').modal('show');
                fv.defaultSubmit()//.on('click', function(e) {
                         // Hide the modal first
                         //alert('TEST');
                         //\$('#modalInscriptionSucceed').modal('show');;

                //('#modalInscription').click(function

                //\$('#mymodal').on('hidden.bs.modal', function() {
                //  return false;
        });
});
", "Gozpeak/views/js/jquery.resetpass.js", "/root/Gozpeak/app/Resources/views/Gozpeak/views/js/jquery.resetpass.js");
    }
}
