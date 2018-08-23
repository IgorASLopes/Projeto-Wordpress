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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '6hO^7e0C_Z;wx+MG:N9{k0@H5Bb==@Es+Es5^:*y;G55UQHY7]ew_Uo^^qJ$JV!c');
define('SECURE_AUTH_KEY',  '~87M1`RP1SG]$NyUC]3nhF/ORU|.~?jqf^ FYf;;!Bw1zPZF%WP#:Fl3E0uG54Ak');
define('LOGGED_IN_KEY',    'dz)VGI8Ev$X`jv*dEOcg560ZhB#eKG59k*8uUqP@5~#1T@k;mi6UpOnzNj}>!OHL');
define('NONCE_KEY',        'Igwp|-94[/c11`<^_P wQG=}vBq_$I{{,}k[RN&N7mO-)1`ss}@Y^0xC7NLsbYN5');
define('AUTH_SALT',        'qXud.7_< mgFB?_lz2RB(G7zP*3EM>*G4-Dr;e@AH>`H+6$IJs$*2l<4%qF3[n>K');
define('SECURE_AUTH_SALT', 'unrro!Dz1S]xn*7j0B*VSVfVu<Un9Gr_BMABw*~(Aq:Wx9x.Gyq9`T,Tnu)TgC,6');
define('LOGGED_IN_SALT',   'eoe|F/(N0[BL@?e_%qbHpDq>?Olo@~Lh)8P)3F1LExrJ)%5.jYEVAvC@vQusx-SV');
define('NONCE_SALT',       'QIO(ZmHClg=F(bhFhOuR=%DdyO71nxqbBpbj=)o!!_WI|l6:C+QKC1Ea=4A4J*dM');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
