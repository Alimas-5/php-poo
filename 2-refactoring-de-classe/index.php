<?php
include 'Form.php';

// Des variables par défaut pour vos tests.
$action = '#';
$method = 'POST';
$nom = 'Ruo';
$prenom = 'Bily';
$options = [1 => 'Mr', 2=>'Mme', 3=>'Other'];
// YOUR CODE HERE

$form = new Form($action, $method);  // création du formulaire
$TextField = new TextField($action, $method);

$form->addTextField('nom',$nom); //input de type texte avec comme valeur par défaut $nom
$form->addTextField('prenom',$prenom); //input de type texte avec comme valeur par défaut $prenom
$form->addNumberField('Age',15);
$form->addSubmitButton('Send'); //bouton pour soumettre le formulaire se nommant send
$form->addSelectField($options, 'title', 2);

echo $form->build(); // générer le formulaire