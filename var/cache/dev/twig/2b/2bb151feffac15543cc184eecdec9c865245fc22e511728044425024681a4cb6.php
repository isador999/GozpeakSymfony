<?php

/* Gozpeak/views/js/jquery.contact.js */
class __TwigTemplate_552708e1754cd45b6d881a742ed933633b08cb93b15568b36d1d0fbcb2fb6bd9 extends Twig_Template
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
        $__internal_70ee39af51775ca9c62e031ca4961cd1091ed03db3f9fe8675135800ff9ca532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ee39af51775ca9c62e031ca4961cd1091ed03db3f9fe8675135800ff9ca532->enter($__internal_70ee39af51775ca9c62e031ca4961cd1091ed03db3f9fe8675135800ff9ca532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.contact.js"));

        $__internal_fb961d25f96b091158cb9733caad5d499b1c8a89f6202577a574e3a69d09f558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb961d25f96b091158cb9733caad5d499b1c8a89f6202577a574e3a69d09f558->enter($__internal_fb961d25f96b091158cb9733caad5d499b1c8a89f6202577a574e3a69d09f558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.contact.js"));

        // line 1
        echo "//\$('#modalForgottenPass').on('hidden.bs.modal', function() {
\$('#modalContact').on('hide.bs.modal', function() {
    \$('#contactForm').formValidation('resetForm', true);
    \$('#contact-errors').html('');
});


\$(document).ready(function() {
    function randomNumber(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function generateCaptcha() {
      \$('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), ''].join(' '));
    }

    generateCaptcha();

    \$('#contactForm')
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
\t\t        required: 'glyphicon glyphicon-asterisk',
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                contact_name: {
                  validators: {
                    notEmpty: {
                      message: \"Veuillez indiquez votre nom/pseudo de contact\"
                    },
                    stringLength: {
                      min: 4,
                      max: 20,
                      message: \"Le nom doit être compris entre 4 et 20 caractères\"
                    }
                  }
                },
                contact_email: {
                  validators: {
                    notEmpty: {
                      message: \"Veuillez spécifier une adresse email valide\"
                    },
                    stringLength: {
                      min: 10,
                      max: 70,
                      message: \"Une adresse mail doit comporter au moins 10 caractères\"
                    },
                    emailAddress: {
                      message: \"Veuillez spécifier une adresse email valide\"
                    }
                  }
                },
                contact_subject: {
                  validators: {
                    notEmpty: {
                      message: \"Veuillez spécifier l'objet de votre message\"
                    },
                    stringLength: {
                      min: 6,
                      max: 20,
                      message: \"L'objet doit faire entre 6 et 20 caractères\"
                  }
                }
              },
              contact_message: {
                validators: {
                  notEmpty: {
                    message: \"Veuillez spécifier votre message\"
                  },
                  stringLength: {
                    min: 15,
                    max: 600,
                    message: \"Le message doit faire 15 caractères au minimum, et 600 caractères au maximum\"
                },
              }
            },
            contact_captcha: {
              validators: {
                notEmpty: {
                  message: \"Veuillez valider le contrôle anti-robot\"
                },
                callback: {
                  message: 'Veuillez vérifier le résultat',
                    callback: function(value, validator, \$field) {
                      var items = \$('#captchaOperation').html().split(' '),
                      sum   = parseInt(items[0]) + parseInt(items[2]);
                      return value == sum;
                    }
                }
              }
            }
          }
        })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#contact-errors').html('');
        })
    .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('#contact-errors').find('li[data-field=\"' + data.field + '\"]').remove();

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
                                \$('#modalContact').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#contact-errors');
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
            \$('#contact-errors').find('li[data-field=\"' + data.field + '\"]').remove();
        })
     .on('err.form.fv', function(e) {
            // Show the message modal
            //generateCaptcha();
            \$('#modalContact').modal('show');
        })
     ///// CONSERVE ALL OF THESE FOLLOWING SETTINGS //////////
    .on('success.field.fv', function(e, data) {
            var field  = data.field,        // Get the field name
                \$field = data.element;      // Get the field element

            // Retrieve the valid message element
            \$field
                .next('.validMessage[data-field=\"' + field + '\"]')
                .show();  // Show it
        })
    .on('err.field.fv', function(e, data) {
            var field  = data.field,        // Get the field name
                \$field = data.element;      // Get the field element

            // Hide the valid message element
            \$field
                .next('.validMessage[data-field=\"' + field + '\"]')
                .hide();
        })
    .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Some instances you can use are
            var \$form = \$(e.target),        // The form instance
                fv    = \$(e.target).data('formValidation'); // FormValidation instance

\t\t//\$('#modalEventWithQuery').modal('hide');
\t\t//\$('#inscription-succeed').modal('show');
\t\tfv.defaultSubmit()//.on('click', function(e) {
                         // Hide the modal first
\t\t\t //alert('TEST');
                         //\$('#modalEventWithQuerySucceed').modal('show');;

\t\t//('#modalEventWithQuery').click(function

\t\t//\$('#mymodal').on('hidden.bs.modal', function() {
\t\t//  return false;
\t})
    //.on('success.form.fv', function(e) {
\t//setTimeout(showModalSuccess, 6000);
\t//});
});
";
        
        $__internal_70ee39af51775ca9c62e031ca4961cd1091ed03db3f9fe8675135800ff9ca532->leave($__internal_70ee39af51775ca9c62e031ca4961cd1091ed03db3f9fe8675135800ff9ca532_prof);

        
        $__internal_fb961d25f96b091158cb9733caad5d499b1c8a89f6202577a574e3a69d09f558->leave($__internal_fb961d25f96b091158cb9733caad5d499b1c8a89f6202577a574e3a69d09f558_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/js/jquery.contact.js";
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
\$('#modalContact').on('hide.bs.modal', function() {
    \$('#contactForm').formValidation('resetForm', true);
    \$('#contact-errors').html('');
});


\$(document).ready(function() {
    function randomNumber(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function generateCaptcha() {
      \$('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), ''].join(' '));
    }

    generateCaptcha();

    \$('#contactForm')
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
\t\t        required: 'glyphicon glyphicon-asterisk',
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                contact_name: {
                  validators: {
                    notEmpty: {
                      message: \"Veuillez indiquez votre nom/pseudo de contact\"
                    },
                    stringLength: {
                      min: 4,
                      max: 20,
                      message: \"Le nom doit être compris entre 4 et 20 caractères\"
                    }
                  }
                },
                contact_email: {
                  validators: {
                    notEmpty: {
                      message: \"Veuillez spécifier une adresse email valide\"
                    },
                    stringLength: {
                      min: 10,
                      max: 70,
                      message: \"Une adresse mail doit comporter au moins 10 caractères\"
                    },
                    emailAddress: {
                      message: \"Veuillez spécifier une adresse email valide\"
                    }
                  }
                },
                contact_subject: {
                  validators: {
                    notEmpty: {
                      message: \"Veuillez spécifier l'objet de votre message\"
                    },
                    stringLength: {
                      min: 6,
                      max: 20,
                      message: \"L'objet doit faire entre 6 et 20 caractères\"
                  }
                }
              },
              contact_message: {
                validators: {
                  notEmpty: {
                    message: \"Veuillez spécifier votre message\"
                  },
                  stringLength: {
                    min: 15,
                    max: 600,
                    message: \"Le message doit faire 15 caractères au minimum, et 600 caractères au maximum\"
                },
              }
            },
            contact_captcha: {
              validators: {
                notEmpty: {
                  message: \"Veuillez valider le contrôle anti-robot\"
                },
                callback: {
                  message: 'Veuillez vérifier le résultat',
                    callback: function(value, validator, \$field) {
                      var items = \$('#captchaOperation').html().split(' '),
                      sum   = parseInt(items[0]) + parseInt(items[2]);
                      return value == sum;
                    }
                }
              }
            }
          }
        })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#contact-errors').html('');
        })
    .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('#contact-errors').find('li[data-field=\"' + data.field + '\"]').remove();

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
                                \$('#modalContact').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#contact-errors');
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
            \$('#contact-errors').find('li[data-field=\"' + data.field + '\"]').remove();
        })
     .on('err.form.fv', function(e) {
            // Show the message modal
            //generateCaptcha();
            \$('#modalContact').modal('show');
        })
     ///// CONSERVE ALL OF THESE FOLLOWING SETTINGS //////////
    .on('success.field.fv', function(e, data) {
            var field  = data.field,        // Get the field name
                \$field = data.element;      // Get the field element

            // Retrieve the valid message element
            \$field
                .next('.validMessage[data-field=\"' + field + '\"]')
                .show();  // Show it
        })
    .on('err.field.fv', function(e, data) {
            var field  = data.field,        // Get the field name
                \$field = data.element;      // Get the field element

            // Hide the valid message element
            \$field
                .next('.validMessage[data-field=\"' + field + '\"]')
                .hide();
        })
    .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Some instances you can use are
            var \$form = \$(e.target),        // The form instance
                fv    = \$(e.target).data('formValidation'); // FormValidation instance

\t\t//\$('#modalEventWithQuery').modal('hide');
\t\t//\$('#inscription-succeed').modal('show');
\t\tfv.defaultSubmit()//.on('click', function(e) {
                         // Hide the modal first
\t\t\t //alert('TEST');
                         //\$('#modalEventWithQuerySucceed').modal('show');;

\t\t//('#modalEventWithQuery').click(function

\t\t//\$('#mymodal').on('hidden.bs.modal', function() {
\t\t//  return false;
\t})
    //.on('success.form.fv', function(e) {
\t//setTimeout(showModalSuccess, 6000);
\t//});
});
", "Gozpeak/views/js/jquery.contact.js", "/root/Gozpeak/app/Resources/views/Gozpeak/views/js/jquery.contact.js");
    }
}
