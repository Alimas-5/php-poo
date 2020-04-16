<?php

class CheckboxField {
    public function addCheckboxField(String $name, bool $value) {
        $checked = ($value)?'checked':'';
        $this->fields[] = "<input type='checkbox' name='$name' $checked>";
        return $this;
    }
}