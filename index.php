<?php // Controleur principal

// Affichage des erreurs
ini_set('display_errors', 1);

// Constantes
include_once 'config/constant.php'; # vu qu'il connait pas l'héritage, il inclut cette classe pour avoir certaines valeur disponible tout le temps

// Inclusion du Core (Controller/Model/View)
require_once 'core/Core.php'; # elle est vide et ça c'est a rien mais bon ...
require_once 'core/CoreController.php'; # c'est la classe qui va appeller la vue qu'il faut
require_once 'core/CoreModel.php'; # c'est la classe qui contient les requetes "abstraites"
require_once 'core/CoreView.php'; # c'est la classe qui va inclure les vues

// Lancement du module
require_once 'app/app.php'; # c'est le routeur
