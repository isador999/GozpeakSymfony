<?php

/* Gozpeak/views/js/jquery.connect.js */
class __TwigTemplate_c5647abf16318eb4eb1010351e4a290387c0ae9d2f23f68c81ee948c776c7c54 extends Twig_Template
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
        $__internal_f073aad146ec2050f878a2032305fe8adcb208b42d0ec9a920d8a45f9cb2a9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f073aad146ec2050f878a2032305fe8adcb208b42d0ec9a920d8a45f9cb2a9c9->enter($__internal_f073aad146ec2050f878a2032305fe8adcb208b42d0ec9a920d8a45f9cb2a9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.connect.js"));

        $__internal_afb00d198559e1b94235750001373fec6d9bff86026d706454fc9b7d4266dbd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb00d198559e1b94235750001373fec6d9bff86026d706454fc9b7d4266dbd9->enter($__internal_afb00d198559e1b94235750001373fec6d9bff86026d706454fc9b7d4266dbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.connect.js"));

        // line 1
        echo "\$('#modalConnection').on('hidden.bs.modal', function() {
    \$('#connectionForm').formValidation('resetForm', true);
    \$('#connect-errors').html('');
});

// \$('#modalConnection').on('shown.bs.modal', function () {
//   \$('#userlogin').focus();
// })


\$(document).ready(function() {
    \$('#connectionForm').on('init.field.fv', function(e, data) {
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
\t.formValidation({
        //container: '#messages',
\tframework: 'bootstrap',
  message: \"Cette valeur n'est pas valide\",
\tverbose: 'false',
\texcluded: 'disabled',
\ttrigger: 'blur',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            userlogin: {
                validators: {
                    notEmpty: {
                        message: \"Votre pseudo (ou email) est requis pour la connexion\"
                    }
                }
            },
            passwordlogin: {
                validators: {
                    notEmpty: {
                        message: \"Votre mot de passe est requis pour la connexion\"
                    }
                }
            }

        }
    })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#connect-errors').html('');
        })
    .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('#connect-errors').find('li[data-field=\"' + data.field + '\"]').remove();

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
                                \$('#modalConnection').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#connect-errors');
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
            \$('#connect-errors').find('li[data-field=\"' + data.field + '\"]').remove();
        })
        .on('err.form.fv', function(e) {
            // Show the message modal
            \$('#modalConnection').modal('show');
        })
    .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Some instances you can use are
            var \$form = \$(e.target),        // The form instance
                fv    = \$(e.target).data('formValidation'); // FormValidation instance

\t    // By default, this action will redirect to PHP Action of the form //
            fv.defaultSubmit()

\t    //\$('#modalConnection').on('#forgotpasslink', function(e) {
\t      //\$('#modalConnection').modal('close');
\t      //\$('#ModalForgottenPass').modal('show');
\t    //});
        });
    // Enable the password/password_check validators if the password is not empty

    // Enable the email/email_check validators if the email is not empty
});
";
        
        $__internal_f073aad146ec2050f878a2032305fe8adcb208b42d0ec9a920d8a45f9cb2a9c9->leave($__internal_f073aad146ec2050f878a2032305fe8adcb208b42d0ec9a920d8a45f9cb2a9c9_prof);

        
        $__internal_afb00d198559e1b94235750001373fec6d9bff86026d706454fc9b7d4266dbd9->leave($__internal_afb00d198559e1b94235750001373fec6d9bff86026d706454fc9b7d4266dbd9_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/js/jquery.connect.js";
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
        return new Twig_Source("\$('#modalConnection').on('hidden.bs.modal', function() {
    \$('#connectionForm').formValidation('resetForm', true);
    \$('#connect-errors').html('');
});

// \$('#modalConnection').on('shown.bs.modal', function () {
//   \$('#userlogin').focus();
// })


\$(document).ready(function() {
    \$('#connectionForm').on('init.field.fv', function(e, data) {
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
\t.formValidation({
        //container: '#messages',
\tframework: 'bootstrap',
  message: \"Cette valeur n'est pas valide\",
\tverbose: 'false',
\texcluded: 'disabled',
\ttrigger: 'blur',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            userlogin: {
                validators: {
                    notEmpty: {
                        message: \"Votre pseudo (ou email) est requis pour la connexion\"
                    }
                }
            },
            passwordlogin: {
                validators: {
                    notEmpty: {
                        message: \"Votre mot de passe est requis pour la connexion\"
                    }
                }
            }

        }
    })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#connect-errors').html('');
        })
    .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('#connect-errors').find('li[data-field=\"' + data.field + '\"]').remove();

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
                                \$('#modalConnection').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#connect-errors');
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
            \$('#connect-errors').find('li[data-field=\"' + data.field + '\"]').remove();
        })
        .on('err.form.fv', function(e) {
            // Show the message modal
            \$('#modalConnection').modal('show');
        })
    .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Some instances you can use are
            var \$form = \$(e.target),        // The form instance
                fv    = \$(e.target).data('formValidation'); // FormValidation instance

\t    // By default, this action will redirect to PHP Action of the form //
            fv.defaultSubmit()

\t    //\$('#modalConnection').on('#forgotpasslink', function(e) {
\t      //\$('#modalConnection').modal('close');
\t      //\$('#ModalForgottenPass').modal('show');
\t    //});
        });
    // Enable the password/password_check validators if the password is not empty

    // Enable the email/email_check validators if the email is not empty
});
", "Gozpeak/views/js/jquery.connect.js", "/root/Gozpeak/app/Resources/views/Gozpeak/views/js/jquery.connect.js");
    }
}
