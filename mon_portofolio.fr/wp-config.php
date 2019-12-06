<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'marsouin' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'marsouin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mrsma' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.(%XOmyu8ws8RJfx=kz!uzOMvX99I)NDbM=8k8gT,9fmoQ9L?n+-P6fM*q_LK#x~' );
define( 'SECURE_AUTH_KEY',  '8&*IT)A}DO.m$]J8f NYoA,U,I;-$z(T|^FOOIK@33G@Ly5 *m-r}u[$!:6^VgW%' );
define( 'LOGGED_IN_KEY',    'IL5t++Z:NW6;bUFaY(=:`Bn[NUt|;O_W%]ITAm~z-d&|U8^~V|8}_jCV^/E .w^e' );
define( 'NONCE_KEY',        'A0%|pn*)6yvr>37>-|>`*88/2{YkN;ffS3/{S6bojYfTLC+,u/-YA(mpbyH>f3CL' );
define( 'AUTH_SALT',        'Fj upB5 IU3IrEO[>W-6P3s94h)r5[FKpkr!fv1CpkfV3sRyZy?7!YTD!0Dv<j%=' );
define( 'SECURE_AUTH_SALT', '-_2Pw.siM0:4WW{Y<E8Z_d5}+.!`f&UN[{Eh>;{;yY4pe[8;h6tl%:yx<TXWsMd&' );
define( 'LOGGED_IN_SALT',   'u(`* ,pCorE$P0oem==6GM.<v~}n/rO;<)y/!fkPn=cDr)pxDerf^Z^ND,yv!&0`' );
define( 'NONCE_SALT',       '?,h5ja|^uRY*0O.fcU1DWpC-2>WV%@A56r5q;m5E1jB&/w=%:xi76u@qa^:;Uzx_' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'waza_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

