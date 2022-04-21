<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'yb_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!25;E:s1-Kb]e@Wl).dqHYT.3q%oMv#@T-mU29LRuu;oOK.}oO3q},a=k6X4:h-P' );
define( 'SECURE_AUTH_KEY',  '`uRV%kM@;XtD~I@u-f An~(`.@5C0Z|yU qnsIl~]i%Ik.U=9.!qV}MW/[:GKq65' );
define( 'LOGGED_IN_KEY',    '_EX1sL:@I]I[(>Cm&Z9kd~?SWj`OISS2]4`6MU1THJa+#>6A;*<WHaM%daJwbYDO' );
define( 'NONCE_KEY',        'T)HC:^+y<oH8^~?Dd:{-?;OCIAm$K|eE}#uIc-NPe=6t)f>?2^%s:[f8f.:IBUA3' );
define( 'AUTH_SALT',        'w|l+w3Os1ujMF(q3?eCf$Y-dzrn_K<]1cF{*8oV~U-0w%J@bY~]+$>-[Fiqj*?s5' );
define( 'SECURE_AUTH_SALT', 'P[m/xz$Vg_y0H7.L!WeiE*M&F_5r{YIT5<#mk388iBd%Mv}+m;9%jkHlM3s27=xX' );
define( 'LOGGED_IN_SALT',   'gAO%Xo&Ro$~0Mo]J69GY_9G3[}ut^<:=~}#Eqzy(~5M5UIFz-z3BNlf] HAFn;+8' );
define( 'NONCE_SALT',       'cHnq4YT5 1]5iXkj-;V[m4`+^dUH>Jn0w!d(%}}-oL[6x~*81q)6EPpL} 6@B2 c' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
