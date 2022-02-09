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
define( 'DB_NAME', 'wordpress_fv' );

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
define( 'AUTH_KEY',         ')Y!]K+bkn?#3(wk+^k>2*aS>&./qVTVDMss0OtpVf76!+F}sRJt7^ !p(IH>fw5l' );
define( 'SECURE_AUTH_KEY',  '?FpA*Tc~4[%n>r+HzM+*=UiU;!+@F!$z-&B=D!ADp?]ar`i=gM+xQA?S;7.>Zy/O' );
define( 'LOGGED_IN_KEY',    '6~/,2HR.93z;g Cun9<G6pjcr=.;bHvc &7Os)#lX +~GIz1JT<K+Z]We<6]i*{.' );
define( 'NONCE_KEY',        'UbjV&{EA^M$i#ZhxmQ)_r+!?sgeO;]t^?bgGaD1uI2ka#6LwF5 X-oXxl8*;5b>R' );
define( 'AUTH_SALT',        'O*>mjjv.y2_H>*CMA)Gie[NC]8cPRbc5b@)F.KydTZws1>s=^fvih?P!M]]AuM%8' );
define( 'SECURE_AUTH_SALT', 't[b7jL5>FDM$!+DyY?5R<rgVpEQZ912vM4{ygjCG(q}icVry+<GAw@VTMX^]3{mB' );
define( 'LOGGED_IN_SALT',   '@AcT/YfY6`3f!#0)0@#k&;C[e}Vw!]hHwuh@[260l-~Xnq!k[(6DYj;$`$A(8 aE' );
define( 'NONCE_SALT',       'uMxE8.ML<w{]ahFx0EAH[hPs(GHFv IVtE qpK6jo.,9O|T7QR{]kZ?PEL 0#_Fq' );
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
