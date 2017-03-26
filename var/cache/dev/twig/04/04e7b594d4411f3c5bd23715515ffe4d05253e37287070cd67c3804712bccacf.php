<?php

/* Gozpeak/views/js/jquery.forgotpass.js */
class __TwigTemplate_82c1131b2cc3d838459579fdc069c0d922a398e2a0979e21f33cf35263c51077 extends Twig_Template
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
        $__internal_7bbd56f43748b66a28d558572d1e8d166e97146e936cb8572124180a6085e9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbd56f43748b66a28d558572d1e8d166e97146e936cb8572124180a6085e9d9->enter($__internal_7bbd56f43748b66a28d558572d1e8d166e97146e936cb8572124180a6085e9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.forgotpass.js"));

        $__internal_233e1be9bac587b5c375fd45fe0116c1ae2c25c03293d485904c4e236bb8d6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233e1be9bac587b5c375fd45fe0116c1ae2c25c03293d485904c4e236bb8d6ae->enter($__internal_233e1be9bac587b5c375fd45fe0116c1ae2c25c03293d485904c4e236bb8d6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.forgotpass.js"));

        // line 1
        echo "//\$('#modalForgottenPass').on('hidden.bs.modal', function() {
\$('#modalForgottenPass').on('hide.bs.modal', function() {
    \$('#forgotpassForm').formValidation('resetForm', true);
    \$('#forgotpass-errors').html('');
});


\$(document).ready(function() {
    \$('#forgotpassForm')
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
                mail_forgotpass: {
                    validators: {
                        notEmpty: {
                            message: 'Votre adresse email est requise pour la récupération de mot de passe'
                        },
\t\t\temailAddress: {
                            message: \"La valeur n'est pas une adresse email valide\"
                        }
                    }
                }
            }
        })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#forgotpass-errors').html('');
        })
    .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('#forgotpass-errors').find('li[data-field=\"' + data.field + '\"]').remove();

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
                                \$('#modalForgottenPass').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#forgotpass-errors');
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
            \$('#forgotpass-errors').find('li[data-field=\"' + data.field + '\"]').remove();
        })
     .on('err.form.fv', function(e) {
            // Show the message modal
            \$('#modalForgottenPass').modal('show');
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
        
        $__internal_7bbd56f43748b66a28d558572d1e8d166e97146e936cb8572124180a6085e9d9->leave($__internal_7bbd56f43748b66a28d558572d1e8d166e97146e936cb8572124180a6085e9d9_prof);

        
        $__internal_233e1be9bac587b5c375fd45fe0116c1ae2c25c03293d485904c4e236bb8d6ae->leave($__internal_233e1be9bac587b5c375fd45fe0116c1ae2c25c03293d485904c4e236bb8d6ae_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/js/jquery.forgotpass.js";
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
        return new Twig_Source("//\$('#modalForgottenPass').on('hidden.bs.modal', function() {
\$('#modalForgottenPass').on('hide.bs.modal', function() {
    \$('#forgotpassForm').formValidation('resetForm', true);
    \$('#forgotpass-errors').html('');
});


\$(document).ready(function() {
    \$('#forgotpassForm')
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
                mail_forgotpass: {
                    validators: {
                        notEmpty: {
                            message: 'Votre adresse email est requise pour la récupération de mot de passe'
                        },
\t\t\temailAddress: {
                            message: \"La valeur n'est pas une adresse email valide\"
                        }
                    }
                }
            }
        })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#forgotpass-errors').html('');
        })
    .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('#forgotpass-errors').find('li[data-field=\"' + data.field + '\"]').remove();

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
                                \$('#modalForgottenPass').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#forgotpass-errors');
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
            \$('#forgotpass-errors').find('li[data-field=\"' + data.field + '\"]').remove();
        })
     .on('err.form.fv', function(e) {
            // Show the message modal
            \$('#modalForgottenPass').modal('show');
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
", "Gozpeak/views/js/jquery.forgotpass.js", "/root/Gozpeak/app/Resources/views/Gozpeak/views/js/jquery.forgotpass.js");
    }
}
