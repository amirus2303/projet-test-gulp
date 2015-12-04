<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'activebox');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Bk(/K*HB4+C&Ymek-?.-kUf=a+rfh6BJh10X:!XpggcN^ygH)uU.4#d_Yy04LrVG');
define('SECURE_AUTH_KEY',  'bJZiO+l-2yJVPF`7=+=!&L~MBcohei(q+5.-oX+Y8>r|y7u*+p]|Aabelx[cy-wC');
define('LOGGED_IN_KEY',    't.zUTV%%`zNx.pz($P=5]qf2w6E5!#5-f=s{?-ia!t|Mlc%cQ)]7d;-s&g%etIJ.');
define('NONCE_KEY',        'bJ(9*JG}p[+QK%=o-+FE7qoMIJlCVy.P~,*J9^^<3 Irb67v zQ/AZ[)<oyoJ3qd');
define('AUTH_SALT',        'P5@c%@&27hs &@@!F8T?T.#VKnM- .|Nv/c=c}8Pv$G#U-GV[q{cs` 7TbmyRjQ*');
define('SECURE_AUTH_SALT', 'eN]M+ ]~+32Y&up+uaCbS(H$Kt_a-{J#~k9N5-Gsx @Dgm.f){czoO6OikywEk4x');
define('LOGGED_IN_SALT',   'C4ywEdV:]yeE!Ge4a7A@jbVxlV,.cewC-T9R40du;3:muEHz-hphm|vke!Wi|^eY');
define('NONCE_SALT',       'm&z+_GyU+{IN.UX9q~]=}{.?k-y.Es!I4OD+)}`xT4+&iPKI?I?b7h&N@fcpsI^]');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');