<?php

/* Gozpeak/views/js/jquery.postevent.js */
class __TwigTemplate_4e860d09d2c90cd54d9cbe3781025e4d71e3e1324116defedbecf42272fea60a extends Twig_Template
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
        $__internal_c97bb27bdf1ca19f978b289eb7807c10bbcbfe582ff7c88ef5af15bb232d0792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97bb27bdf1ca19f978b289eb7807c10bbcbfe582ff7c88ef5af15bb232d0792->enter($__internal_c97bb27bdf1ca19f978b289eb7807c10bbcbfe582ff7c88ef5af15bb232d0792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.postevent.js"));

        $__internal_67ab7494b0fbc94fae351863144b25cb8e0594ab53158f424419ccf30c08ede3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ab7494b0fbc94fae351863144b25cb8e0594ab53158f424419ccf30c08ede3->enter($__internal_67ab7494b0fbc94fae351863144b25cb8e0594ab53158f424419ccf30c08ede3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.postevent.js"));

        // line 1
        echo "\$('#modalEventWithQuery').on('hidden.bs.modal', function() {
    \$('#posteventForm').formValidation('resetForm', true);
    \$('#postevent-errors').html('');
});

\$('#modalEventWithQuery').on('shown.bs.modal', function () {
  \$('#event_name').focus();
})

\$(document).ready(function() {
    \$('#posteventForm').on('init.field.fv', function(e, data) {
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
        framework: 'bootstrap',
\tlive: 'enabled',
\tmessage: \"Cette valeur n'est pas valide\",
\tverbose: 'false',
\texcluded: 'disabled',
\ttrigger: 'blur',
\terr: {
        \tcontainer: '#postevent-errors',
\t},
        icon: {
\t    required: 'glyphicon glyphicon-asterisk',
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            event_name: {
\t\t//validMessage: \"Votre Zpeakname est valide ! \",
\t\t//row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: \"Le nom de l'événement est requis pour poster une sortie\"
                    },
\t\t    stringLength: {
\t\t\tmin: 6,
                        max: 20,
                        message: \"Le nom de l'événement doit être composé de 6 caractères au minimum et 15 au maximum\"
                    },
\t\t    regexp: {
                            regexp: /^[a-zA-Z0-9_\\.]+\$/,
                            message: \"Le nom de l'événement ne peut pas comporter de caractères spéciaux\"
                    }
\t\t    //blank: {}
                }
            },
            event_place: {
\t\t//validMessage: \"L'adresse email semble valide\",
                validators: {
                    notEmpty: {
                        message: \"Le lieu de l'événement est requis pour poster une sortie\"
                    },
\t\t    stringLength: {
\t\t\tmin: 10,
                        max: 70,
                        message: \"Le lieu de l'événement doit être composé de 6 caractères au minimum et 20\"
                    },
\t\t    regexp: {
                            regexp: /^[a-zA-Z0-9_\\.]+\$/,
                            message: \"Le lieu de l'événement ne peut pas comporter de caractères spéciaux\"
                    }
                }
            },
            event_desc: {
\t\t//validMessage: \"L'adresse email semble valide\",
                validators: {
                    notEmpty: {
                        message: \"La description de l'événement est requise\"
                    },
\t\t    stringLength: {
\t\t\tmin: 4,
                        max: 300,
                        message: \"La description doit faire entre 5 et 300 caractères\"
                    },
\t\t    regexp: {
                            regexp: /^[a-zA-Z0-9_\\.]+\$/,
                            message: \"La description de l'événement ne peut pas comporter de caractères spéciaux\"
                    }
                }
            },
\t    /***** TO BE DONE WHEN DATETIME WILL WORKING *****/
\t    event_datetime: {
\t\t//validMessage: \"Les adresses emails correspondent\",
                validators: {
                    notEmpty: {
                        message: \"La date de l'événement est obligatoire\"
                    },
\t\t    regexp: {
                        regexp: /^[0-9_\\-\\.]+\$/,
                        message: \"Le format de la date est incorrect\"
                    }
                }
            },
            phone_number: {
\t\t//validMessage: 'Le mot de passe respecte les consignes de sécurité',
                validators: {
                    stringLength: {
                        min: 0,
                        max: 10,
                        message: \"Le numéro ne peut pas faire plus de 10 chiffres\"
                    },
\t\t    regexp: {
                            //regexp: /^(0)[679](\\s?\\d{2}){4}\$/,
                            regexp: /^0[0-9]{9}\$/,
                            message: \"Numéro de téléphone invalide\"
                    }
\t\t    //blank: {}
                }
            },
\t    lang: {
\t\t//validMessage: 'Les mots de passe correspondent :) ',
                validators: {
                    notEmpty: {
                        message: \"Veuillez selectionner une langue à pratiquer\"
                    }
                }
            },
\t    langlevel: {
\t\t//validMessage: 'Les mots de passe correspondent :) ',
                validators: {
                    notEmpty: {
                        message: \"Veuillez selectionner le niveau de langue conseillée pour la sortie\"
                    }
                }
            },
\t    query: {
\t\t//validMessage: 'Les mots de passe correspondent :) ',
                validators: {
                    notEmpty: {
                        message: \"Vous ne semblez pas avoir sélectionné de catégorie\"
                    },
\t\t    regexp: {
                            //regexp: /^(0)[679](\\s?\\d{2}){4}\$/,
                            regexp: /^(run|party|art|eat)\$/,
                            message: \"Catégorie non valide\"
                    }
                }
            }
        }
    })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#postevent-errors').html('');
        })
        .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('#postevent-errors').find('li[data-field=\"' + data.field + '\"]').remove();

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
                                \$('#modalEventWithQuery').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#postevent-errors');
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
            \$('#postevent-errors').find('li[data-field=\"' + data.field + '\"]').remove();
        })
        .on('err.form.fv', function(e) {
            // Show the message modal
            \$('#modalEventWithQuery').modal('show');
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
        
        $__internal_c97bb27bdf1ca19f978b289eb7807c10bbcbfe582ff7c88ef5af15bb232d0792->leave($__internal_c97bb27bdf1ca19f978b289eb7807c10bbcbfe582ff7c88ef5af15bb232d0792_prof);

        
        $__internal_67ab7494b0fbc94fae351863144b25cb8e0594ab53158f424419ccf30c08ede3->leave($__internal_67ab7494b0fbc94fae351863144b25cb8e0594ab53158f424419ccf30c08ede3_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/js/jquery.postevent.js";
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
        return new Twig_Source("\$('#modalEventWithQuery').on('hidden.bs.modal', function() {
    \$('#posteventForm').formValidation('resetForm', true);
    \$('#postevent-errors').html('');
});

\$('#modalEventWithQuery').on('shown.bs.modal', function () {
  \$('#event_name').focus();
})

\$(document).ready(function() {
    \$('#posteventForm').on('init.field.fv', function(e, data) {
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
        framework: 'bootstrap',
\tlive: 'enabled',
\tmessage: \"Cette valeur n'est pas valide\",
\tverbose: 'false',
\texcluded: 'disabled',
\ttrigger: 'blur',
\terr: {
        \tcontainer: '#postevent-errors',
\t},
        icon: {
\t    required: 'glyphicon glyphicon-asterisk',
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            event_name: {
\t\t//validMessage: \"Votre Zpeakname est valide ! \",
\t\t//row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: \"Le nom de l'événement est requis pour poster une sortie\"
                    },
\t\t    stringLength: {
\t\t\tmin: 6,
                        max: 20,
                        message: \"Le nom de l'événement doit être composé de 6 caractères au minimum et 15 au maximum\"
                    },
\t\t    regexp: {
                            regexp: /^[a-zA-Z0-9_\\.]+\$/,
                            message: \"Le nom de l'événement ne peut pas comporter de caractères spéciaux\"
                    }
\t\t    //blank: {}
                }
            },
            event_place: {
\t\t//validMessage: \"L'adresse email semble valide\",
                validators: {
                    notEmpty: {
                        message: \"Le lieu de l'événement est requis pour poster une sortie\"
                    },
\t\t    stringLength: {
\t\t\tmin: 10,
                        max: 70,
                        message: \"Le lieu de l'événement doit être composé de 6 caractères au minimum et 20\"
                    },
\t\t    regexp: {
                            regexp: /^[a-zA-Z0-9_\\.]+\$/,
                            message: \"Le lieu de l'événement ne peut pas comporter de caractères spéciaux\"
                    }
                }
            },
            event_desc: {
\t\t//validMessage: \"L'adresse email semble valide\",
                validators: {
                    notEmpty: {
                        message: \"La description de l'événement est requise\"
                    },
\t\t    stringLength: {
\t\t\tmin: 4,
                        max: 300,
                        message: \"La description doit faire entre 5 et 300 caractères\"
                    },
\t\t    regexp: {
                            regexp: /^[a-zA-Z0-9_\\.]+\$/,
                            message: \"La description de l'événement ne peut pas comporter de caractères spéciaux\"
                    }
                }
            },
\t    /***** TO BE DONE WHEN DATETIME WILL WORKING *****/
\t    event_datetime: {
\t\t//validMessage: \"Les adresses emails correspondent\",
                validators: {
                    notEmpty: {
                        message: \"La date de l'événement est obligatoire\"
                    },
\t\t    regexp: {
                        regexp: /^[0-9_\\-\\.]+\$/,
                        message: \"Le format de la date est incorrect\"
                    }
                }
            },
            phone_number: {
\t\t//validMessage: 'Le mot de passe respecte les consignes de sécurité',
                validators: {
                    stringLength: {
                        min: 0,
                        max: 10,
                        message: \"Le numéro ne peut pas faire plus de 10 chiffres\"
                    },
\t\t    regexp: {
                            //regexp: /^(0)[679](\\s?\\d{2}){4}\$/,
                            regexp: /^0[0-9]{9}\$/,
                            message: \"Numéro de téléphone invalide\"
                    }
\t\t    //blank: {}
                }
            },
\t    lang: {
\t\t//validMessage: 'Les mots de passe correspondent :) ',
                validators: {
                    notEmpty: {
                        message: \"Veuillez selectionner une langue à pratiquer\"
                    }
                }
            },
\t    langlevel: {
\t\t//validMessage: 'Les mots de passe correspondent :) ',
                validators: {
                    notEmpty: {
                        message: \"Veuillez selectionner le niveau de langue conseillée pour la sortie\"
                    }
                }
            },
\t    query: {
\t\t//validMessage: 'Les mots de passe correspondent :) ',
                validators: {
                    notEmpty: {
                        message: \"Vous ne semblez pas avoir sélectionné de catégorie\"
                    },
\t\t    regexp: {
                            //regexp: /^(0)[679](\\s?\\d{2}){4}\$/,
                            regexp: /^(run|party|art|eat)\$/,
                            message: \"Catégorie non valide\"
                    }
                }
            }
        }
    })
    .on('success.form.fv', function(e) {
            // Reset the message element when the form is valid
            \$('#postevent-errors').html('');
        })
        .on('err.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.fv.getMessages(data.element);

            // Remove the field messages if they're already available
            \$('#postevent-errors').find('li[data-field=\"' + data.field + '\"]').remove();

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
                                \$('#modalEventWithQuery').modal('hide');

                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#postevent-errors');
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
            \$('#postevent-errors').find('li[data-field=\"' + data.field + '\"]').remove();
        })
        .on('err.form.fv', function(e) {
            // Show the message modal
            \$('#modalEventWithQuery').modal('show');
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
", "Gozpeak/views/js/jquery.postevent.js", "/root/Gozpeak/app/Resources/views/Gozpeak/views/js/jquery.postevent.js");
    }
}
