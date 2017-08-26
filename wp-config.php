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
define('DB_NAME', 'gigi');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'lVM,R(KWL&U06yJkp#Zq8S+ Bvy~mVf]=,AI^rxXta*&nmr60r9*Y-aZ[wpjjP7G');
define('SECURE_AUTH_KEY',  'R1J*K,>[<hj`[dP^rZV(1GOF3RQGN`;LMbzeT7 1K].*dx={|}$G[N4k#0yE5_[&');
define('LOGGED_IN_KEY',    'J!>J6f!D]YH,{BC@n7D$TT!=%`em5F]`S]Q`YE3@6qW]0CoDJCzd91p~{+15&$~k');
define('NONCE_KEY',        'FQJTr5y#)z^(Q^j)hskm&nB{X^E^>PI=maC]b|c75h1AZ9Wq[i2a3]Zw`Dr>EH7o');
define('AUTH_SALT',        'eRo/#zn~`4H6xTZb?89mq94McScCa-dg[6k&c^/5ha~ 6b6WRj#=dKD+I@mzoxKm');
define('SECURE_AUTH_SALT', 'Do7kPud/^J3{pu~{!2#lb@k1-Zn>rA05p$vB(7P6Wx[+COk&^8 p8KP0r>|S!LRL');
define('LOGGED_IN_SALT',   'vmaJ{7{l<re<0*[YK$MPHU0ILB_5[,*JSj&c]s.UFde)EqAL-wh7mA*rAXcuU[;W');
define('NONCE_SALT',       'hH~[qTd):*{ql/+}uk-7eilBRkPdyOOzx=SWFXUm<L|B:<DKk4.nqKDv3m8OrK[o');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');