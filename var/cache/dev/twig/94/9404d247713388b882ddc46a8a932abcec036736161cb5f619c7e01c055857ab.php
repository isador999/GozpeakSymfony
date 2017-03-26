<?php

/* Gozpeak/views/js/jquery.profiledelete.js */
class __TwigTemplate_6846d631bf299750bccd2e502ee3a41d9c5ed682a93701283151c5cb745f1fa4 extends Twig_Template
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
        $__internal_674ceee468b0e13dcf337ecbb38676a0a2a6b88fdc2f4a287a594310f5a3cac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674ceee468b0e13dcf337ecbb38676a0a2a6b88fdc2f4a287a594310f5a3cac9->enter($__internal_674ceee468b0e13dcf337ecbb38676a0a2a6b88fdc2f4a287a594310f5a3cac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.profiledelete.js"));

        $__internal_75bd12ac169321544d8dfe9ae780b9a54cf24576cac985061fc753a1436da77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bd12ac169321544d8dfe9ae780b9a54cf24576cac985061fc753a1436da77c->enter($__internal_75bd12ac169321544d8dfe9ae780b9a54cf24576cac985061fc753a1436da77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.profiledelete.js"));

        // line 1
        echo "function showModalProfileDeletion(){
        \$('#modalProfileDeletion').modal('show');
}

\$('#modalProfileDeletion').on('hidden.bs.modal', function() {
    \$('#profiledeletionForm').formValidation('resetForm', true);
    \$('#profiledeletion-errors').html('');
});


\$(document).ready(function() {
    \$('#profiledeletionForm').on('init.field.fv', function(e, data) {
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
            final_deletion_string: {
                validators: {
                    stringLength: {
\t\t\tmin: 9,
\t\t\tmax: 9,
                        message: \"La chaine de caractères entrée ne supprimera pas votre compte\"
                    },
\t\t    regexp: {
                            regexp: /^SUPPRIMER\$/,
                            message: \"La chaine de caractères entrée ne supprimera pas votre compte\"
                    },
\t\t    stringCase: {
                        message: \"La chaine de caractères entrée ne supprimera pas votre compte\",
                        'case': 'upper'
                    }
                }
            }
        }
    })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#profiledeletion-errors').html('');
        })
    .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('').find('li[data-field=\"' + data.field + '\"]').remove();

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
                                \$('#modalProfileDeletion').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#profiledeletion-errors');
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
            \$('#profiledeletion-errors').foinli[data-field=\"' + data.field + '\"]').remove();
        })
        .on('err.form.fv', function(e) {
            // Show the message modal
            \$('#modalProfileDeletion').modal('show');
        })
    .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Some instances you can use are
            var \$form = \$(e.target),        // The form instance
                fv    = \$(e.target).data('formValidation'); // FormValidation instance

\t    // By default, this action will redirect to PHP Action of the form //
            fv.defaultSubmit()

\t    //\$('#modalProfileDeletion').on('#forgotpasslink', function(e) {
\t      //\$('#modalProfileDeletion').modal('close');
\t      //\$('#ModalForgottenPass').modal('show');
\t    //});
        });
    // Enable the password/password_check validators if the password is not empty

    // Enable the email/email_check validators if the email is not empty
});

";
        
        $__internal_674ceee468b0e13dcf337ecbb38676a0a2a6b88fdc2f4a287a594310f5a3cac9->leave($__internal_674ceee468b0e13dcf337ecbb38676a0a2a6b88fdc2f4a287a594310f5a3cac9_prof);

        
        $__internal_75bd12ac169321544d8dfe9ae780b9a54cf24576cac985061fc753a1436da77c->leave($__internal_75bd12ac169321544d8dfe9ae780b9a54cf24576cac985061fc753a1436da77c_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/js/jquery.profiledelete.js";
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
        return new Twig_Source("function showModalProfileDeletion(){
        \$('#modalProfileDeletion').modal('show');
}

\$('#modalProfileDeletion').on('hidden.bs.modal', function() {
    \$('#profiledeletionForm').formValidation('resetForm', true);
    \$('#profiledeletion-errors').html('');
});


\$(document).ready(function() {
    \$('#profiledeletionForm').on('init.field.fv', function(e, data) {
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
            final_deletion_string: {
                validators: {
                    stringLength: {
\t\t\tmin: 9,
\t\t\tmax: 9,
                        message: \"La chaine de caractères entrée ne supprimera pas votre compte\"
                    },
\t\t    regexp: {
                            regexp: /^SUPPRIMER\$/,
                            message: \"La chaine de caractères entrée ne supprimera pas votre compte\"
                    },
\t\t    stringCase: {
                        message: \"La chaine de caractères entrée ne supprimera pas votre compte\",
                        'case': 'upper'
                    }
                }
            }
        }
    })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#profiledeletion-errors').html('');
        })
    .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('').find('li[data-field=\"' + data.field + '\"]').remove();

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
                                \$('#modalProfileDeletion').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#profiledeletion-errors');
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
            \$('#profiledeletion-errors').foinli[data-field=\"' + data.field + '\"]').remove();
        })
        .on('err.form.fv', function(e) {
            // Show the message modal
            \$('#modalProfileDeletion').modal('show');
        })
    .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Some instances you can use are
            var \$form = \$(e.target),        // The form instance
                fv    = \$(e.target).data('formValidation'); // FormValidation instance

\t    // By default, this action will redirect to PHP Action of the form //
            fv.defaultSubmit()

\t    //\$('#modalProfileDeletion').on('#forgotpasslink', function(e) {
\t      //\$('#modalProfileDeletion').modal('close');
\t      //\$('#ModalForgottenPass').modal('show');
\t    //});
        });
    // Enable the password/password_check validators if the password is not empty

    // Enable the email/email_check validators if the email is not empty
});

", "Gozpeak/views/js/jquery.profiledelete.js", "/root/Gozpeak/app/Resources/views/Gozpeak/views/js/jquery.profiledelete.js");
    }
}
