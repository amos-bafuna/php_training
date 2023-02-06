<?php
$eleves = [
    "cm1" => ['Amos', 'Landry', 'Crinox', 'Gloriane'],
    "cm2" => ['André', 'John', 'Michael', 'Blavier']
];

foreach($eleves as $classe => $eleve) {
    echo "Les élèves de la classe $classe sont: \n";
    foreach($eleve as $nom) {
        echo $nom . "\n";
    }
}


function add_notes() {
    $notes = [];
    while(true) {
        $input = readline('Entrez un chiffre (0-9): ');
        if($input == 'fin' || $input == ''){
            break;
        }
        array_push($notes, $input);
    }
    echo "Les notes entrées sont: \n";
    foreach($notes as $note){
        echo $note . "\n";
    }
}

function check_crenau() {
    $crenaux = [];

    while(true) {
        $debut = (int)readline('Heure d\'ouverture: ');
        $fin = (int)readline('Heure de fermeture: ');

        if($debut >= $fin) {
            echo 'Le creanau ne peut pas être enregistrer! Incohérence de temps';
        } else {
            array_push($crenaux, [$debut, $fin]);
            $action = readline('Voulez-vous ajouter un nouveau crenau(y/n): ');
            if($action == 'n'){
                break;
            }
        }
    }

    $heure = (int)readline('A quelle heure voulez-vous visiter le magasin? : ');
    $crenauTrouve = false;

    foreach($crenaux as $crenau) {
        if($heure >= $crenau[0] && $heure <= $crenau[1]){
            $crenauTrouve = true;
            break;
        }
    }

    if($crenauTrouve){
        echo 'Le magasin sera ouvert!';
    } else {
        echo 'Le magasin sera fermé!';
    }
}