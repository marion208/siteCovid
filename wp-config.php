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
if (isset($_SERVER[‘HTTP_X_FORWARDED_PROTO’]) && $_SERVER[‘HTTP_X_FORWARDED_PROTO’] == ‘https’)
  $_SERVER[‘HTTPS’] = ‘on’;
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'pcc0zrcv6oyto6mm');
/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'jezsv701ml3wv47z');
/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'kqzfo0zzj3im6qhn');
/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'lfmerukkeiac5y5w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');
/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');
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
define('AUTH_KEY',         ' 7)xQiK9iM_jd4mS`F;>LQsvMup^;_ 9IM2:g++S&PHyYSJ$g$1{z!lGEFA2Hy7e');
define('SECURE_AUTH_KEY',  'U2YwVdbHeOgx>G068bJ*BXPp*11Zchned=NFrs[<C&7`}qolrc4V[R/:-=VAJMj~');
define('LOGGED_IN_KEY',    'v>^X<KI<]!RtJpH{Reh13B2UmpVgh}fREXHl/+T;zDpR^wTPG/;9-,sK]$#%o[}!');
define('NONCE_KEY',        'P.6kPo;<&zkkp&p791JaLnM$lh8^J+&a224/MP M(& =1D1Gt$kZ%j  I:5lSmfZ');
define('AUTH_SALT',        '-%p`uu[7CEk|i&}m_/Qk:=]+Q NP;.F4CBE#P;;TW]g/{sFz<paXD;7X^Q%dQqgp');
define('SECURE_AUTH_SALT', 'O#.Ij_0SF[$T?{F0_^`E4vZNa=h En-]w;oCQVWNFQh xB=3UDL>ukn2BsNS3!*6');
define('LOGGED_IN_SALT',   ']>-i`YCYj=:-#QNF[{KtDJEJc yK3B,e:w5k{F[&=AL/R6Wb,X<VD6,xfW2h`YP_');
define('NONCE_SALT',       'mChft`0EQU:#k&k2+NJ|$7l+J~#XDY91k)axFz$hjd:(-bm;eu)f1k}OK5s7*hU7');
/**#@-*/
/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_site_covid_';
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
define('WP_DEBUG', true);
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */
/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
