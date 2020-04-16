<?php

class TextField {
    public function __toString (string $name, string $value) {
        $this->fields[]= "<input type='text' name='$name' value='$value'>";
        return $this;
    }
}