<?php
class Form{
    public $action;
    public $method;
    private $fields=[];
    private $button;


    public function __construct(string $action, string $method) {
        $this->action = $action;
        $this->method = $method;
    }
// cette fonction permet d'ajouter une case permetant d'avoir du texte 
    public function Textadd (string $name, string $value) {
        $this->fields[]= "<input type='text' name='$name' value='$value'>";
        return $this;
    }
// cette fonction permet d'ajouter une case permetant d'avoir des nombre
    public function Numberadd (string $name, int $value) {
        $this->fields[] = "<input type='number' name='$name' value='$value'>";
        return $this;
    }
// cette fonction permet d'avoir une case a valider pour de futur mise a jour
    public function Checkboxadd(String $name, bool $value) {
        $checked = ($value)?'checked':'';
        $this->fields[] = "<input type='checkbox' name='$name' $checked>";
        return $this;
    }
// cette fonction permet d'ajouter un bouton d'envoie
    public function addSubmitButton($buttonname)
    {
        $this->fields[] = "<input type='submit' value='$buttonname'>";
        return $this;
    }
// cette fonction permet d'ajouter une barre de séléction
// cette fonction Selectadd n'est pas terminé
    public function Selectadd ($options, string $nameField , string $valueField)
    {
        $build_html = "<select name='$nameField'>";
        foreach ($options as $key => $option) {
            $build_html .= "<option value='$key'>$option</option>";
    }
    $build_html = "</select>";
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