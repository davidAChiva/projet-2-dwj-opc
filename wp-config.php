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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp\www\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'projet_2_dwj_opc');

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
define('AUTH_KEY',         'Vd~4Cr:BlGU-)FDpT#[IC[3Al3XqL`EeeWdtCKZTkvG_AKxtd{v5t*a%gSkw^N<+');
define('SECURE_AUTH_KEY',  'KE{D.$c|f|_3Fls_$]n@c_yI%9>E{qV/2|},mQ<;sf+mRu,iD}`S|S)0n..Z*10&');
define('LOGGED_IN_KEY',    'Q&7aI}t=0g8@IOiw:1ca|DW+.r][yeSiXf0/)`w)VLS@@`4[6W`1$o6HM!hA-TQ0');
define('NONCE_KEY',        '//M$ ThjdrSEfw/^9K@;YuwddL<}8(rd8ruO/]NP1y3xT0Pp^=VHu1Q|.~WTijX:');
define('AUTH_SALT',        '6g;-Iv%(H`3AJ.]?Gp7FBDi_RMGD+t[%@VV0&)L{LXh/*NmQg=>{xT<7{> kMrGR');
define('SECURE_AUTH_SALT', 't9zKDJk;OOTLksS.fL1Ne#r!Sg76BJEMR*vc-3b7H(|[R)x:;RJ_sBH1}aVrG8/>');
define('LOGGED_IN_SALT',   '#uH:9DSrdE?Q^I}v)II!vYWX;e;971e8Rbbqn^w#VlEP2X$0(aQfaw,.7;;I,;KI');
define('NONCE_SALT',       '2!Q,=q.8O)9<IG/5Hg^Jkx:9f3<;xIar>)Vh_Fs8A5$(@ug//*a3|4mU-FAQKPk0');
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