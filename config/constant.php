<?php

// Constantes de Base de Données
define('DB_DNS',      'mysql:host=localhost;dbname=trendyvan');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

// Préfix BDD
define('DB_PREFIX', "");

// Constantes de Blog
define('OFFSET', 0);
define('LIMITE', 5);
define('MAX_CHAR', 50);
define('MAX_ARTICLE', 5);

// Environnement
// if (SERVER === "DEV") {
//     /**
//     * Constantes specifiques pour config serveur de dev
//     */
//     define('DEBUG' , true);
//     define('RUN' , 'NORMAL');
// } else if (SERVER === "TEST") {
//     /**
//     * Constantes specifiques pour config serveur de test
//     */
//     define('DEBUG' , true);
//     define('RUN' , 'NORMAL');
// } else if (SERVER === "PROD") {
//     /**
//     * Constantes specifiques pour config serveur de prod
//     */
//     define('DEBUG' , false);
//     define('RUN' , 'WAIT');
// }
