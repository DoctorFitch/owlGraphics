<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'sydowhcowswp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'sydowhcowswp');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '5du8z9pA');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'sydowhcowswp.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '`LAIAAw@SWpTaG|9& 0VgUdXOS&oaNyaoMNw_D|f+h=[5Dpm;(v{UC:n--_X&gNF');
define('SECURE_AUTH_KEY', 'Yd|k(zpb#,RZ`Cp!zX8UobceYbA?T7gH}zV&1ie-Zdaj3N?Q+Z`fm-TYq(6bH3h:');
define('LOGGED_IN_KEY', '*0Oz[biBV>)DnFdaduoHh^Gq0i-[r@!EZj}sNM@~xH,*Gym%-0];EqT/ $pe Hic');
define('NONCE_KEY', '-E-6];WBFTVrvCq9CDBZuh`32-5yfJq|*@LyEYP4q0BBw&/5W3,i96M4z+J|_l[g');
define('AUTH_SALT', '%]uJ<x{kdE=7~~O9fu^-`bW-|R3uADus)qY$PZByca>gd+cRI+}A aK+,}l43s2F');
define('SECURE_AUTH_SALT', 'NiGI.r*0?:9W`KYOBr|O*jE9Xmf>Q@d|xb5Mq|c-CET@y7gz#K,.ND+M{hzw[hlm');
define('LOGGED_IN_SALT', '>hz=/:9u#x/,+(;1I_J38`El@p?LV7PJm$ NTt FwM^Kr6=<^{78n!M#U0,!xq>^');
define('NONCE_SALT', ';9xYsp&8}#|%bQo*#v@f@|w:V._L_C `~03mv@_VX8Q.EYoq![$:&b%g^{x0RVh|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'owl_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);


 /** Désactivation des révisions d'articles */
define('WP_POST_REVISIONS', 0);

 /** Désactivation de l'éditeur de thème et d'extension */
define('DISALLOW_FILE_EDIT', true);

 /** Intervalle des sauvegardes automatique */
define('AUTOSAVE_INTERVAL', 7200);

 /** On augmente la mémoire limite */
define('WP_MEMORY_LIMIT', '96M');

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');