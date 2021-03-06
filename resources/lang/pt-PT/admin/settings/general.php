<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Dominio do Active Directory',
    'ad_domain_help'			=> 'Em alguns casos isto e o mesmo que o dominio de email, mas nem sempre.',
    'is_ad'				        => 'Isto é um servidor do Active Directoriy',
	'alert_email'				=> 'Enviar alertas para',
	'alerts_enabled'			=> 'Alertas ativos',
	'alert_interval'			=> 'Alertas expiram (em dias)',
	'alert_inv_threshold'		=> 'Alerta limite do inventário',
	'asset_ids'					=> 'IDs dos Artigos',
	'auto_increment_assets'		=> 'Gerar IDs de artigos auto-incrementais',
	'auto_increment_prefix'		=> 'Prefixo (opcional)',
	'auto_incrementing_help'    => 'Ative IDs auto-incrementais antes da configuração',
	'backups'					=> 'Cópias de segurança',
	'barcode_settings'			=> 'Definições de Código de Barras',
    'confirm_purge'			    => 'Confirmar remoção',
    'confirm_purge_help'		=> 'Escreva o texto "DELETE" na caixa abaixo para remover os registos eliminados. Esta ação não pode ser desfeita.',
	'custom_css'				=> 'CSS Personalizado',
	'custom_css_help'			=> 'Insira o CSS personalizado que deseja utilizar. Não use as tags <style></style>.',
	'default_currency'  		=> 'Moeda padrão',
	'default_eula_text'			=> 'EULA padrão',
  'default_language'					=> 'Idioma predefinido',
	'default_eula_help_text'	=> 'Também pode associar EULAs personalizados para categorias de artigos especificas.',
    'display_asset_name'        => 'Mostrar Nome do Artigo',
    'display_checkout_date'     => 'Mostrar Data de Alocação',
    'display_eol'               => 'Mostrar EOL na tabela',
    'display_qr'                => 'Mostrar códigos Qr',
	'display_alt_barcode'		=> 'Mostrar codigos de barra 1D',
	'barcode_type'				=> 'Tipo de código de barras 2D',
	'alt_barcode_type'			=> 'Tipo de código de barras 1D',
    'eula_settings'				=> 'Definições de EULA',
    'eula_markdown'				=> 'Este EULA permite <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'general_settings'			=> 'Configurações Gerais',
	'generate_backup'			=> 'Gerar Backup',
    'header_color'              => 'Cor do cabeçalho',
    'info'                      => 'Estas configurações permitem costumizar certos aspetos desta instalação.',
    'laravel'                   => 'Versão do Laravel',
    'ldap_enabled'              => 'LDAP ativo',
    'ldap_integration'          => 'Integração LDAP',
    'ldap_settings'             => 'Configurações LDAP',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Isso deve começar com ldap: / / (para não-criptado ou TLS) ou ldaps: / / (para SSL)',
	'ldap_server_cert'			=> 'Validação certificado SSL LDAP',
	'ldap_server_cert_ignore'	=> 'Permitir certificado SSL inválido',
	'ldap_server_cert_help'		=> 'Seleccione esta opção se está a usar um certificado SSL auto-assinado e desejar aceitar um certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Isto só deve ser escolhido se estiver a correr STARTTLS no seu servidor LDAP. ',
    'ldap_uname'                => 'Utilizador bind LDAP',
    'ldap_pword'                => 'Password bind LDAP',
    'ldap_basedn'               => 'Base bind DN',
    'ldap_filter'               => 'Filtro LDAP',
<<<<<<< HEAD
    'ldap_pw_sync'              => 'LDAP Password Sync',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords synced with local passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
=======
    'ldap_pw_sync'              => 'Sincronização de password LDAP',
    'ldap_pw_sync_help'         => 'Desmarque esta caixa se não deseja guardar as passwords LDAP com passwords locais. Ao desativar esta opção quer dizer que os utilizadores poderão não conseguir fazer login se o seu servidor LDAP não estiver disponível por alguma rasão.',
>>>>>>> 62f5a1b2c7934f534fc8fc8299831fc32e794a72
    'ldap_username_field'       => 'Campo nome de utilizador',
    'ldap_lname_field'          => 'Campo Último nome',
    'ldap_fname_field'          => 'Campo Primeiro nome',
    'ldap_auth_filter_query'    => 'Query de autenticação LDAP',
    'ldap_version'              => 'Versão de LDAP',
    'ldap_active_flag'          => 'Opção LDAP Activo',
    'ldap_emp_num'              => 'Número funcionário LDAP',
    'ldap_email'                => 'Email LDAP',
    'load_remote_text'          => 'Scripts Remotos',
    'load_remote_help_text'		=> 'Esta instalação do Snipe-IT pode carregar scripts do mundo exterior.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Restringir utilizadores (incluindo admins) associados a empresas ao ativos da empresa.',
    'full_multiple_companies_support_text' => 'Suporte multi-empresa completo',
    'optional'					=> 'opcional',
    'per_page'                  => 'Resultados por página',
    'php'                       => 'Versão do PHP',
    'php_gd_info'               => 'Deve instalar a extensão php-gd para mostrar códigos QR, veja as instruções de instalação.',
    'php_gd_warning'            => 'O Processamento de Imagem PHP e o plugin GD não estão instalados.',
    'qr_help'                   => 'Ative os códigos QR antes da configuração',
    'qr_text'                   => 'Texto do Código QR',
    'setting'                   => 'Configuração',
    'settings'                  => 'Configurações',
    'site_name'                 => 'Nome do site',
    'slack_botname'             => 'Botname Slack',
    'slack_channel'             => 'Canal Slack',
    'slack_endpoint'            => 'Endpoint Slack',
    'slack_integration'         => 'Definições Slack',
    'slack_integration_help'    => 'A integração com Slack é opcional. Contudo, se pretender usar o endpoint e o canal são obrigatórios. Para configurar a integração com Slack, deve previamente <a href=":slack_link" target="_new">criar um incoming webhook</a> na sua conta Slack.',
    'snipe_version'  			=> 'Versão Snipe-IT',
    'system'                    => 'Informação de Sistema',
    'update'                    => 'Atualizar Configurações',
    'value'                     => 'Valor',
    'brand'                     => 'Branding',
    'about_settings_title'      => 'Sobre as Configurações',
    'about_settings_text'       => 'Estas configurações permitem-lhe customizar determinados aspetos da sua instalação.',
    'labels_per_page'           => 'Etiquetas por página',
    'label_dimensions'          => 'Dimensões das etiquetas (inches)',
    'page_padding'             => 'Margens da pagina (inches)',
    'purge'                    => 'Remover registos apagados',
    'labels_display_bgutter'    => 'Margem inferior da etiqueta',
    'labels_display_sgutter'    => 'Margem lateral da Etiqueta',
    'labels_fontsize'           => 'Tamanho do texto da etiqueta',
    'labels_pagewidth'          => 'Largura da folha de etiquetas',
    'labels_pageheight'         => 'Altura da folha de etiquetas',
    'label_gutters'        => 'Espaçamento entre etiquetas (inches)',
    'page_dimensions'        => 'Dimensões da pagina (inches)',
    'label_fields'          => 'Campos visiveis nas etiquetas',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'text_pt'        => 'pt',
    'left'        => 'esquerda',
    'right'        => 'direita',
    'top'        => 'topo',
    'bottom'        => 'fundo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
<<<<<<< HEAD
    'zerofill_count'        => 'Length of asset tags, including zerofill',
=======
    'zerofill_count'        => 'Comprimento de tags de artigos, incluindo zerofill',
>>>>>>> 62f5a1b2c7934f534fc8fc8299831fc32e794a72
);
