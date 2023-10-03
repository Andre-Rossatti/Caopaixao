<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../../images/7063logonav.ico" sizes="120x120" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div id="cadastro" class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form id="cadastrarUser" class="login100-form validate-form">
                <a href="../index.php"><img src= "../perfil/doacao/images/seta.png" style = "height: 40px;width: 40px; text-align: left;"></a>
                    <span class="login100-form-title p-b-49">
                        Cadastro
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Nome completo">
                        <span class="label-input100">usuario</span>
                        <input class="input100" type="text" name="nome" placeholder="Digite seu nome">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Seu e-mail">
                        <span class="label-input100">E-mail</span>
                        <input class="input100" type="text" name="email" placeholder="Digite seu e-mail">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Digite sua Senha">
                        <span class="label-input100">Senha</span>
                        <input class="input100" type="password" name="senha" placeholder="Digite sua Senha">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Tefelone">
                        <span class="label-input100">Telefone</span>
                        <input class="input100" type="text" name="telefone" placeholder="Digite seu Telefone">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Cidade">
                        <span class="label-input100">Cidade</span>
                        <select class="input100" name="cidade" id="cidade">
                            <option>Nenhuma selecionada</option>
                            <option>São José do Rio Pardo</option>
                            <option>Mococa</option>
                            <option>Divinolândia</option>
                            <option>Tapiratiba</option>
                            <option>Caconde</option>
                        </select>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Data de nascimento">
                        <span class="label-input100">Data de Nascimento</span>
                        <input id="date" type="date" class="input100" name="nascimento">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <!--termo de uso-->
                    <div>
                        <span class="label-input100"></span>
                        <input type="checkbox" name="Termodeuso" value="sim"> Eu concordo com o <a data-toggle="modal" data-target="#exampleModalLong" href="##"> TERMO DE USO</a>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <BR>

                    <!-- Modal termo de uso -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitlearia-hidden=" true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Termo de Uso</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h3 class="Termo">Regulamento de uso</h3>
                                    A partir do momento em que o usuário aceita, aos termos e condições do uso do site, é condição essencial para acesso e uso do Cãopaixão.
                                    Ao manifestar sua aceitação, o usuário concordará com todos os termos e condições do regulamento, sem restrições e/ou mudanças de qualquer espécie.

                                    <h3 class="Termo">Da finalidade do site</h3>
                                    Tem por finalidade integrar pessoas interessadas em adotar um cão ou gato e pessoas ou entidades interessadas em doar um cão ou gato, estimulando, desta forma, a adoção de animais com o objetivo de reduzir o número de animais abandonados.
                                    O site atua como plataforma de comunicação entre seus usuários, de forma tal a permitir:
                                    divulgação de animais para adoção;
                                    divulgação de dados do usuário que está divulgando o animal, para que o adotante possa entrar em contato com ele.

                                    <h3 class="Termo">Do Usuário</h3>
                                    Destina-se à utilização por empresas, ONGs e pessoas físicas que pretendam divulgar animais para adoção e/ou adotar um animal.
                                    As pessoas jurídicas serão responsáveis pelas atividades de seus usuários vinculados no site.
                                    Ao se cadastrar neste site, o usuário reconhece e aceita que terceiros que estejam navegando na Internet tenham acesso a suas informações (incluindo acesso por meio de ferramentas de busca ou softwares similares). Por este motivo, o usuário deve evitar publicar informações que não deseje disponibilizar em público.
                                    A aceitação dos termos e condições deste regulamento por parte dos usuários vinculados estende-se às empresas representadas por tais usuários.

                                    <h3 class="Termo">Do uso do site Cãopaixão</h3>
                                    Uso exclusivo de pessoas interessadas em adotar ou doar um animal.
                                    O uso do site destina-se aos fins determinados acima.
                                    A utilização do site pelos usuários interessados em divulgar animais para adoção é condicionada ao preenchimento integral do cadastro de usuário do site, sendo que os dados do usuário serão tratados de acordo com as condições estabelecidas na cláusula Política de Privacidade.

                                    <h3 class="Termo">Cadastramento de usuário e Política de Privacidade</h3>
                                    Para utilização do site, o usuário deverá preencher corretamente a ficha cadastral, sendo responsabilidade do usuário mantê-los atualizados.
                                    Os dados de usuário colhidos serão utilizados apenas e tão somente pelo próprio site, especialmente para fins de desenvolvimento e melhoria dos serviços do site.
                                    Não divulgaremos, cederemos ou comercializaremos, a qualquer tempo e título, os dados pessoais dos usuários que constem das fichas cadastrais.
                                    Não obstante, poderemos divulgar, a qualquer tempo e a qualquer título, as informações sobre os animais divulgados para adoção, bem como as informações de perfil do usuário que constem em áreas abertas do site.
                                    Mediante determinação judicial, forneceremos todas as informações registradas relativas ao usuário, nos limites das supracitada determinação.
                                    Ao site faculta-se o uso dos dados cadastrais do usuário para composição de perfil de usuários, que será utilizado para fins de divulgação do site junto a terceiros.

                                    <h3 class="Termo">Normas de Conduta</h3>
                                    Fica expressamente vedado aousuário a utilização do site para qualquer atividade, mesmo lícita, que conflite com as Normas de Uso do site, além das seguintes atividades:
                                    compra ou venda de animais, bem como cobrança de taxas de adoção;
                                    divulgação e oferecimento, a titulo gratuito ou oneroso, de bens e serviços de qualquer natureza;
                                    utilização de palavras de baixo calão;
                                    prática, divulgação e incentivo de atividades ilegais de qualquer natureza, sejam de ordem civil ou criminal;
                                    desrespeito a ordem pública, moral e bons costumes;
                                    invasão de privacidade de outros usuários;
                                    utilização de nome e/ou identificação que não seja da própria pessoa;
                                    pertubação da ordem do site e seus usuários;
                                    O usuário obriga-se a não permitir que terceiros utilizem seu acesso, ficando-lhe vedado, via de conseqüência, cessão, empréstimo e/ou divulgação de seus dados de acesso a terceiros.
                                    Ao usuário fica expressamente vedada a realização de mais de um cadastro. Por conseguinte, cada usuário será individualmente identificado e terá dados de acesso únicos e exclusivos.
                                    Ao utilizar textos, fotografias e outras obras de terceiros, o usuário deve, obrigatoriamente, obter as necessárias licenças de uso de tais obras e, ainda, as autorizações de utilização de imagem de teceiros.
                                    Qualquer violação a direitos autorais de terceiros será de inteira responsabilidade do usuário, estando o usuário sujeito às condições da cláusula de Propriedade Intelectual.

                                    <h3 class="Termo">Propriedade Intelectual</h3>
                                    Os nomes, nomes comerciais, marcas, logomarcas, desenhos, fotos, identidade visual, arquivos softwares, assim como quaisquer outros objetos disponibilizados eletronicamente no site, estejam ou não acessíveis aos usuários, são de propriedade nossa e/ou terceiros, estando sujeitos às normas brasileiras relativas à propriedade intelectual.
                                    Fica expressamente proibido aos usuários do site a utilização de propriedades, de origem intelectual, de terceiros, a qualquer tempo e título, salvo mediante expressa autorização, seus usuários, parceiros ou terceiros titulares de tais propriedades.
                                    A utilização das propriedades supracitadas sem a devida autorização de seus titulares configurará violação a direito de propriedade intelectual, ficando o infrator sujeito às penalidade civis e criminais cabíveis e previstas na legislação específica que rege a matéria.
                                    O usuário obriga-se a manter o site isento de qualquer responsabilidade de violação a direitos de propriedade intelectual, resultante de ação ou omissão por parte do usuário, nos termos previstos na cláusula Ressalva de Responsabilidade.

                                    <h3 class="Termo">Ressalva de Responsabilidade</h3>
                                    O usuário obriga-se a manter o site, suas entidades mantenedoras, associados, dirigentes e empregados livres de toda e qualquer responsabilidade relativa a quaisquer danos e prejuízos causados, de forma direta e/ou indireta, ao usuário, inclusive no que tange a honorários advocatícios, custas judiciais, indenizações, compensações de qualquer natureza, a qualquer tempo e título.
                                    O mesmo se aplica no caso de ilícito, civil e/ou criminal, praticado pelo usuário no site, por ação e/ou omissão do usuário.

                                    <h3 class="Termo">Do desligamento do usuário</h3>
                                    Reserva-se o direito de cancelar o registro e o acesso do usuário ao site, de forma total e/ou parcial, a qualquer tempo, sem que, para tanto, seja necessário prévio aviso ao usuário e/ou qualquer forma de justificativa.
                                    A inobservância a qualquer dispositivo do REGULAMENTO DE USO DO SITE ensejará o desligamento imediato do usuário e, via de conseqüência, o impedimento de acesso.
                                    Não obstante, ousuário poderá solicitar ajuda a reconsideração da decisão de seu desligamento.
                                    Eventual violação aos dispositivos do REGULAMENTO DE USO DO SITE poderá ser sanada pelo usuário, a qualquer tempo, podendo o usuário instruir sua solicitação de reconsideração de desligamento com a comprovação de saneamento de pendência ou violação.
                                    Todavia, caberá a nós, de forma soberana, a seu único e exclusivo critério, e nos termos e condições previstos no REGULAMENTO DE USO DO SITE AMIGO NÃO SE COMPRA, decidir sobre o cancelamento definitivo do acesso do usuário ao site ou, por outro lado, sua readmissão.
                                    A decisão de readmissão do usuário ao site representará mero ato de liberalidade, não representando, em nenhuma hipótese, qualquer alteração nos termos e condições do REGULAMENTO DE USO DO SITE.
                                    Da mesma forma, a readmissão do usuário não representará a concordância com a ação ou omissão que resultou o desligamento do usuário, remanescendo ao usuário todas as obrigações previstas no REGULAMENTO DE USO DO SITE, notadamente no que tange as responsabilidades e conseqüências oriundas de práticas ilícitas, ficando o usuário sujeito as penalidades e responsabilidades previstas no REGULAMENTO DE USO DO SITE.

                                    <h3 class="Termo">Do encerramento das operações do site</h3>
                                    O encerramento, definitivo e/ou temporário, das atividades do site não resultará em qualquer obrigação, seja de que natureza for, para com o usuário, inclusive no que diz respeito a comunicação prévia de tal fato, compensação, pagamento e/ou indenização, a qualquer tempo e título.
                                    Legislação Aplicável e Foro
                                    O presente REGULAMENTO DE USO DO SITE, o uso do site e as relações entre o usuário e o site Amigo não se Compra sujeitam-se a legislação brasileira em vigor.
                                    O usuário concorda em eleger, em conjunto com o site, o Foro Central da Comarca da Cidade de São José do Rio Pardo como o único competente para dirimir quaisquer dúvidas e/ou controvérsias oriundas deste REGULAMENTO DE USO DO SITE e, inclusive, do uso do site, com expressa renúncia de qualquer outro, por mais privilegiado que o seja.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fim Modal termo de uso-->
                    <div class="alert"></div>                        
                    <!-- Cadastrar-->
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                <span class="login100-form-btn"> Cadastrar </span>
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- fim cadastrar-->

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <script>
        $('#cadastrarUser').submit(function(e) {
            e.preventDefault();

            let dados = $(this).serialize();

            //ajax
            $.ajax({
                type: "POST",
                url: "cadastrar.php",
                dataType: 'json',
                data: dados,
                beforeSend: function(response) {
                    //console.log("Aguarde...");
                },
                success: function(response) {

                    if (response.codigo == 1) {

                        //console.log(response.mensagem);
                        //alerta o usuario
                        $('.alert').addClass('alert-success'); // <div class="alert"/>
                        $('.alert').text(response.mensagem);
                        $('.alert').removeClass('d-none');
                        setTimeout(function() {
                            $(".alert").addClass('d-none');
                            // link para ser reedirecionado se o login for efetuado com sucesso
                            window.location = "index.php";
                        }, 2000);

                    } else if (response.codigo == 2) {

                        //console.log(response.mensagem);
                        //alerta o usuario
                        $('.alert').addClass('alertg');
                        $('.alert').text(response.mensagem);
                        $('.alert').removeClass('d-none');
                        setTimeout(function() {
                            $(".alert").addClass('d-none');
                        }, 2000);

                    }

                },
                error: function(error) {
                    console.log(error.responseText);
                }

            });
        });
    </script>

</body>

</html>