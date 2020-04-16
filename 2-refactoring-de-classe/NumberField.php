<?php

class NumberField {
    public function addNumberField (string $name, int $value) {
        $this->fields[] = "<input type='number' name='$name' value='$value'>";
        return $this;
    }
}