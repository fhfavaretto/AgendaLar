<!DOCTYPE html>
<html>
<head>
    <title>CalendLar - Instalação</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon.ico') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url ('assets/ext/jquery-ui/jquery-ui.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/general.css') ?>">

    <style>
        header {
            background: #DAFFEB;
            margin-bottom: 25px;
        }

        .content {
            margin: 32px;
            max-width: 980px;
        }

        .alert {
            margin: 25px 0 10px 0;
        }

        footer {
           padding: 10px 35px;
           background-color: #FAFAFA;
           margin-top: 20px;
           border-top: 1px solid #EEE;
        }

        #loading {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            z-index: 999999;
            background: rgba(255, 255, 255, 0.75);
        }

        #loading img {
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>
    <div id="loading" class="hidden">
        <img src="<?= base_url('assets/img/loading.gif') ?>">
    </div>

    <header>
        <a href="https://github.com/fhfavaretto/CalendLar" target="_blank">
            <img src="<?= base_url('assets/img/installation-banner.png') ?>"
                 alt="CalendLar Banner">
        </a>
    </header>

    <div class="content container-fluid">
    <div class = "welcome">
             <h3> Bem-vindo à página de instalação do CalendLar. </h3>
             <p>
                 Esta página o ajudará a definir as configurações principais da instalação do CalendLar.
                 Você será capaz de editar essas configurações e muito mais na sessão de back-end do seu
                 sistema. Lembre-se de usar o <strong class = "text-primary"> <? = Site_url ('backend')?> </strong>
                 url para se conectar à seção de back-end do CalendLar.

                 Se você enfrentar qualquer problema durante o uso do CalendLar, você pode sempre verificar o
                 <a href="https://github.com/fhfavaretto/CalendLar/wiki"> Wiki </a>
                 e <a href="http://172.16.0.5/"> GlPI </a> para obter ajuda. Vocês
                 também pode enviar novos problemas em
                 <a href="https://github.com/fhfavaretto/CalendLar/issues"> GitHub issues(problemas) </a>
                 para auxiliar nosso processo de desenvolvimento.
             </p>
         </div>

        <div class="alert hidden"></div>

        <div class="row">
            <div class="admin-settings col-xs-12 col-sm-5">
                <h3>Administrator</h3>

                <div class="form-group">
                    <label for="first-name" class="control-label">Primeiro Nome</label>
                    <input type="text" id="first-name" class="form-control" />
                </div>

                <div class="form-group">
                <label for="last-name" class="control-label">Ultimo Nome</label>
                <input type="text" id="last-name" class="form-control" />
                </div>

                <div class="form-group">
                <label for="email" class="control-label">E-mail</label>
                <input type="text" id="email" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="phone-number" class="control-label">Telefone</label>
                    <input type="text" id="phone-number" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="username" class="control-label">Usuário</label>
                    <input type="text" id="username" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">Senha</label>
                    <input type="password" id="password" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="retype-password" class="control-label">Confirme a senha</label>
                    <input type="password" id="retype-password" class="form-control" />
                </div>
            </div>

            <div class="company-settings col-xs-12 col-sm-5">
                <h3>Empresa</h3>

                <div class="form-group">
                    <label for="company-name" class="control-label">Nome da Empresa</label>
                    <input type="text" id="company-name" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="company-email" class="control-label">E-mail da Empresa</label>
                    <input type="text" id="company-email" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="company-link" class="control-label">site da empresa</label>
                    <input type="text" id="company-link" class="form-control" />
                </div>
            </div>
        </div>

        <br>

        <p>
             Você será capaz de definir sua lógica de negócios na página de configurações de back-end
             após a conclusão da instalação.
             <br>
             Pressione o botão a seguir para concluir o processo de instalação.
         </p>

        <br>

        <p>
             <h3> licença </h3>
             CalendLar está licenciado sob a <span class = "label label-default"> licença GPLv3 </span>.
             Ao usar o código do CalendLar de qualquer forma <br> você concorda com os termos descritos no
             seguinte url:
             <a href="https://www.gnu.org/licenses/quick-guide-gplv3.pt-br.html#:~:text=Um%20guia%20r%C3%A1pido%20para%20a%20GPLv3%20%2D%20Projeto%20GNU%20%2D%20Free%20Software%20Foundation&text=JUNTE%2DSE%20%C3%80%20FSF!&text=Esta%20%C3%A9%20uma%20tradu%C3%A7%C3%A3o%20da%20p%C3%A1gina%20original%20em%20Ingl%C3%AAs."> http://www.gnu.org/copyleft/gpl.html </a>
         </p>

        <br>

        <button type="button" id="install" class="btn btn-success btn-large">
            <i class="icon-white icon-ok"></i>
            Instalar CalendLar</button>
    </div>

    <footer>
        Desenvolvido em  <a href="http://www.franciscanosnaprovidencia.org.br/">CalendLar</a>
    </footer>

    <script>
        var GlobalVariables = {
            'csrfToken': <?= json_encode($this->security->get_csrf_hash()) ?>,
            'baseUrl': <?= json_encode(config('base_url')) ?>
        };

        var EALang = <?= json_encode($this->lang->language) ?>;
    </script>

    <script src="<?= asset_url('assets/ext/jquery/jquery.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset_url('assets/js/general_functions.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/datejs/date.js') ?>"></script>
    <script src="<?= asset_url('assets/js/installation.js') ?>"></script>
</body>
</html>
