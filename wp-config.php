<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'T?/fT+D)i7W6IcUlLVMZ&...B5@>MSF~5A,uHu!mNFN+u[sf25Ae)L)}(/{wrk@^' );
define( 'SECURE_AUTH_KEY',  'qPCYapeA5<9)5=^VVxsQ=}^u//}k}}ceRTWsB{EEDUCWS@eGc[7pkYl(S(rOG&XP' );
define( 'LOGGED_IN_KEY',    'da1;kp;1^`p/b|fn ;)NEglGx%u;7w192H},?b#bq3+_a]Bj<JGkB5Qx7TZq[Gx}' );
define( 'NONCE_KEY',        'n--CPo)RwFu8HJ@o.$yo`,Pvy./m2It6G(MGa5L7KSJwWe0bgR)_I4 RP;{tDm9%' );
define( 'AUTH_SALT',        '-2:sA{5-WD8]F8F@_kE.d*NSJF+3bj[WS5d^RjlU(_;*CdmP9teMZ.]{,d4K}qF4' );
define( 'SECURE_AUTH_SALT', '-Q&zzn`roT?w5N&>sVsb{*j1:m l?U]NG;Ves%xLhr(d>7#ZdFt.y;Qy_}`gh=ED' );
define( 'LOGGED_IN_SALT',   '`*=%V9>.E^f5Aq#RK6`o#fS?+m2FkvG]o9bZ,eFDG+EQ+4^c02{V36+e.&GKJE[8' );
define( 'NONCE_SALT',       '.`t9]m-F.k=c)8F0,JqWZSy;N<b^/OaQ5%ct:7Odf{E!?l]!o }N9G0:{eC*3k3U' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
