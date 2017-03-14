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
define('DB_NAME', '2k17_wp_musiqueaction');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Goa/I;bukt7c%xWSYyvdAa=q5Xj6yq^[O*uihp egUe>BF-#UGKz?A--gGh^[rE*');
define('SECURE_AUTH_KEY',  '4s)QG~??8YrnD ng{Bvs{2eBr+:|:}nZ235 Z6Menqm8@3xo4#^F&,|Abth1x&Fh');
define('LOGGED_IN_KEY',    'g=)Cr~8~8syMbvx^-w$3~CEP&xX;+n%C;!FG2U G7CMaz/$i3F3!j5hdcfiW?LRm');
define('NONCE_KEY',        'A6H~TiTlL.JC;<6*#XEuaGq,Vg4J(~v#V~.Mi|_{8y3^Ec[u,$/{r$|0zv.$mU^s');
define('AUTH_SALT',        ',uhEt;YVB(8GOXs<LUcnR%vjCg`>mzf@>RuHc5pMC*v$/|qFveED}cjDAmuK&{.H');
define('SECURE_AUTH_SALT', 'O1k4439N,/W7OxZZe)L<Ip163*S#AeNN_&W8%g^eo#6h(bPpw!R?Sfid_<_yuy{#');
define('LOGGED_IN_SALT',   ':-!ZwohBcME[]Je^JMxDr!E]wD4,Dy-}PyhV2]#B`2}N%e))~OsRGobmrMZR<naU');
define('NONCE_SALT',       '8??PC~HOD54ViddDmy&{)cdR%9W({Oq,Mil7t_|=P?I+Uf=-CR-$1[EDm@$tw)o(');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = '2k17_ma';

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