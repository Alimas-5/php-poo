<?php

include 'TextField.php';
include 'NumberField.php';

class Form{
    public $action;
    public $method;
    private $fields=[];
    private $button;
    

    public function __construct(string $action, string $method) {
        $this->action = $action;
        $this->method = $method;
    }

    public function __toString()
    {
        return $this->action;
        return $this->method;
    }

// cette fonction permet d'ajouter une case permetant d'avoir du texte 
    public function addTextField ($name, $value) {
         $this->fields[] = new TextField($name, $value);
        }
// cette fonction permet d'ajouter une case permetant d'avoir des nombre
    public function addNumberField ($name, $value) {
        $this->fields[] = new NumberField($name, $value);
    }
// cette fonction permet d'avoir une case a valider pour de futur mise a jour
    public function addCheckboxField(String $name, bool $value) {
        $this->fields[] = new CheckboxField($name, $value);
    }
// cette fonction permet d'ajouter un bouton d'envoie
    public function addSubmitButton($buttonname)
    {
        $this->fields[] = "<input type='submit' value='$buttonname'>";
        return $this;
    }
// cette fonction permet d'ajouter une barre de séléction
// cette fonction Selectadd n'est pas terminé
    public function addSelectField (array $options, string $nameField , string $valueField)
    {
        $build_html = "<select name='$nameField'>";
        foreach ($options as $key => $option) {
         $build_html .= "<option value='$key'>$option</option>";
    }
        $build_html .= "</select>";
        $this->fields[]= $build_html;
        return $this;
}

// cette fonction permet de fermer le fomulaire avec la balise HTML

    public function build()
    {
        $html = "<form action='$this->action' method='$this->method'>";
        foreach($this->fields as $field){
            $html .= $field;
        }
        $html .= $this->button;
        $html .= '</form>';
        return $html;
    }

}