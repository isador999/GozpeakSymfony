<?php

/* Gozpeak/controllers/classes/initial_classes.php */
class __TwigTemplate_92c082a1c26577575034f97a7c9da90b8df8e1090079a409035d8217ef099443 extends Twig_Template
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
        $__internal_86a56d2863dd9584285b8c319592bd8f4dca5be477d54da11d0109aa424f3a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a56d2863dd9584285b8c319592bd8f4dca5be477d54da11d0109aa424f3a6d->enter($__internal_86a56d2863dd9584285b8c319592bd8f4dca5be477d54da11d0109aa424f3a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/classes/initial_classes.php"));

        $__internal_23f5b5f4515b4f3331114e9bf6e9fd774fcb6e19bf9f89a173c151ffb43aa3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f5b5f4515b4f3331114e9bf6e9fd774fcb6e19bf9f89a173c151ffb43aa3be->enter($__internal_23f5b5f4515b4f3331114e9bf6e9fd774fcb6e19bf9f89a173c151ffb43aa3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/classes/initial_classes.php"));

        // line 1
        echo "<?php

class EventEntity {
  public \$name;
  public \$category;
  public \$language;
  public \$description;
  public \$organizer;
  public \$finished;
  public \$dayname;
  public \$daynumber
  public \$monthname;
  public \$hour;

  function getEvent();



}

class Event extends EventEntity {

}



class Member {
  public \$pseudo;
  public \$email;
  public \$name;
  public \$lastname;
  public \$password;
  public \$birthday;
  public \$gender;
  public \$languages;

  private \$loggedIn = false;

  public function login() {
    \$this->loggedIn = true;
  }



}



?>
";
        
        $__internal_86a56d2863dd9584285b8c319592bd8f4dca5be477d54da11d0109aa424f3a6d->leave($__internal_86a56d2863dd9584285b8c319592bd8f4dca5be477d54da11d0109aa424f3a6d_prof);

        
        $__internal_23f5b5f4515b4f3331114e9bf6e9fd774fcb6e19bf9f89a173c151ffb43aa3be->leave($__internal_23f5b5f4515b4f3331114e9bf6e9fd774fcb6e19bf9f89a173c151ffb43aa3be_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/classes/initial_classes.php";
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
        return new Twig_Source("<?php

class EventEntity {
  public \$name;
  public \$category;
  public \$language;
  public \$description;
  public \$organizer;
  public \$finished;
  public \$dayname;
  public \$daynumber
  public \$monthname;
  public \$hour;

  function getEvent();



}

class Event extends EventEntity {

}



class Member {
  public \$pseudo;
  public \$email;
  public \$name;
  public \$lastname;
  public \$password;
  public \$birthday;
  public \$gender;
  public \$languages;

  private \$loggedIn = false;

  public function login() {
    \$this->loggedIn = true;
  }



}



?>
", "Gozpeak/controllers/classes/initial_classes.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/classes/initial_classes.php");
    }
}
