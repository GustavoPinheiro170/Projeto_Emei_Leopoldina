<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'emeileopoldina' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '54$3$X<mfjpmVy^2!WkCvh},~M:;V_d/s=2?n^#-8OvV8Z?iLXr~,VYmMMW$]v{.' );
define( 'SECURE_AUTH_KEY',  'Wn[5{;95GkSVl3-uI8KrD`NO!z9$cG_&Y8sMq3HZpp}$CZ1EIulm;MJHMe>(xP=s' );
define( 'LOGGED_IN_KEY',    'r]?x-03+T|8ZxNXg|&5a|@f$_o]~xcKb@ECbM!6^rdOXS<LHx/Z%<v,KqjV!EjRd' );
define( 'NONCE_KEY',        '`zIp(%OTci)EoG-^5]V}V2)i0gy 3@MP`TA^#d7*-gYT&Gz|g<7rVHH4)/!n;.LP' );
define( 'AUTH_SALT',        '8j/$jTnsl@ZMpg,<[b0qQ]w!)qMk4S <ImY{P+ 6Qp@;}UOPEUz2gm+%gnjzkzqm' );
define( 'SECURE_AUTH_SALT', 'Ugp0@#o`}<6Rz9Uaav%5~|L^K/ !}KtplsGXu$#6Au*eeZ8p2$(/8yj$Gh:Zlyg+' );
define( 'LOGGED_IN_SALT',   '4GCm#;wFoTk8=,n?K^NgNL-Je+3?y[J3p_Jcly~mM+q{}?0!k2Q<S[8roDa1@g$G' );
define( 'NONCE_SALT',       '1,2hN]`w[?LS}wGkew,bL~a<Y7Fm>p+<&UnLRU0km(jhLkx#wc*RH U[ly})kaxt' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
