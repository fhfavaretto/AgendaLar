<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------- -----------------
| AUTO-LOADER
| -------------------------------------------------- -----------------
| Este arquivo especifica quais sistemas devem ser carregados por padrão.
|
| Para manter a estrutura o mais leve possível, apenas o
| recursos mínimos absolutos são carregados por padrão. Por exemplo,
| o banco de dados não é conectado automaticamente, pois nenhuma suposição
| é feito para saber se você pretende usá-lo. Este arquivo permite
| você define globalmente quais sistemas você gostaria que fossem carregados com cada
| solicitação.
|
| -------------------------------------------------- -----------------
| Instruções
| -------------------------------------------------- -----------------
|
| Estas são as coisas que você pode carregar automaticamente:
|
| 1. Pacotes
| 2. Bibliotecas
| 3. Arquivos auxiliares
| 4. Arquivos de configuração personalizados
| 5. Arquivos de idioma
| 6. Modelos
|
*/

/*
| -------------------------------------------------- -----------------
| Auto-carregar pacotes
| -------------------------------------------------- -----------------
| Protótipo:
|
| $ autoload ['packages'] = array (APPPATH.'third_party ',' / usr / local / shared ');
|
*/

$autoload['packages'] = [];


/*
| -------------------------------------------------- -----------------
| Bibliotecas de carregamento automático
| -------------------------------------------------- -----------------
| Estas são as classes localizadas na pasta sistema / bibliotecas
| ou em sua pasta de aplicativos / bibliotecas.
|
| Protótipo:
|
| $ autoload ['bibliotecas'] = array ('banco de dados', 'sessão', 'xmlrpc');
*/

$autoload['libraries'] = ['database'];


/*
| -------------------------------------------------- -----------------
| Arquivos auxiliares de carregamento automático
| -------------------------------------------------- -----------------
| Protótipo:
|
| $ autoload ['helper'] = array ('url', 'arquivo');
*/

$autoload['helper'] = ['custom_exceptions', 'url', 'file', 'language', 'asset', 'config'];


/*
| -------------------------------------------------- -----------------
| Arquivos de configuração de carregamento automático
| -------------------------------------------------- -----------------
| Protótipo:
|
| $ autoload ['config'] = array ('config1', 'config2');
|
| NOTA: Este item deve ser usado SOMENTE se você criou
| arquivos de configuração. Caso contrário, deixe em branco.
|
*/

$autoload['config'] = [];


/*
| -------------------------------------------------- -----------------
| Arquivos de idioma de carregamento automático
| -------------------------------------------------- -----------------
| Protótipo:
|
| $ autoload ['idioma'] = array ('idioma1', 'idioma2');
|
| NOTA: Não inclua a parte "_lang" do seu arquivo. Por exemplo
| "codeigniter_lang.php" seria referenciado como array ('codeigniter');
|
*/

$autoload['language'] = [];


/*
| -------------------------------------------------- -----------------
| Modelos de carregamento automático
| -------------------------------------------------- -----------------
| Protótipo:
|
| $ autoload ['model'] = array ('model1', 'model2');
|
*/

$autoload ['model'] = [];


/* Fim do arquivo autoload.php */
/* Localização: ./application/config/autoload.php */