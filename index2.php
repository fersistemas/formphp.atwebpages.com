<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form - Contato</title>

    <link rel="icon" href="favicon.jpg"/>
    <link rel="stylesheet" href="Content/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" type="text/css" href="Content/bootstrap/css/bootstrapcontrato.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Content/fonts/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Content/dist/css/util.css">
    <link rel="stylesheet" type="text/css" href="Content/dist/css/maincontrato.css">
    <!--===============================================================================================-->


    <style>

        * { box-sizing: border-box; }

        body { margin: 0; }

        .header {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .column {
            float: left;
            width: 50%;
            padding: 15px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;

	input, textarea {
	/* Para certificar-se que todos os campos de texto têm as mesmas configurações de fonte. Por padrão, textareas ter uma fonte monospace*/
	font: 1em sans-serif;

	/* Para dar o mesmo tamanho a todos os campo de texto */
    	width: 300px;
    	-moz-box-sizing: border-box;
    	box-sizing: border-box;

    	/* Para harmonizar o look & feel das bordas nos campos de texto*/
    	border: 1px solid #999;

        }
    </style>

</head>
<body>


<div class="container-login100" style="background-image: url('office-building.jpg');">
<div class="container">

<form action="mail1.php" class="login100-form p-b-33 p-t-5" method="post" role="form">
<input id="Hashmail" name="Hashmail" type="hidden" value="" />

        
    <div class="wrap-input100 validate-input" data-validate="Digite o Nome">
        <h4 style="margin-left: 3%;">
            <b>Nome:</b>
        </h4>
        <input class="input100" id="representante" maxlength="99" minlength="3" name="Contato" placeholder="(No mínimo 3 caracteres) &lt; - Digite aqui! " required="required" type="text" value="" />
    </div>


    <div class="wrap-input100 validate-input" data-validate="Digite o E-mail">
        <h4 style="margin-left: 3%;">
            <b>E-mail do contato:</b>
        </h4>
        <input class="input100" id="email" maxlength="49" minlength="5" name="Email" placeholder="______@______.___ &lt; - Digite aqui! " required="required" type="email" value="" />
    </div>


    <div class="wrap-input100 validate-input" data-validate="Digite o CEP">
        <h4 style="margin-left: 3%;">
            <b>CEP:</b>
        </h4>
        <input class="input100" data-val="true" data-val-required="O Cep precisa ser preenchido !" id="cep" maxlength="10" minlength="8" name="Cep" placeholder="(8 números) &lt; - Digite aqui!  " required="required" type="text" value="" />
    </div>

    <div class="wrap-input100 validate-input" data-validate="Digite o Endereço">
        <h4 style="margin-left: 3%;">
            <b>Endereço(Avenida, rua, estrada, alameda, travessa):</b>
        </h4>
        <input class="input100" data-val="true" data-val-required="O Endere&#xE7;o precisa ser preenchido !" id="rua" maxlength="99" minlength="2" name="Endereco" placeholder="(No mínimo 2 caracteres) &lt; - Digite aqui!  " required="required" type="text" value="" />

        <div class="wrap-input100 validate-input" data-validate="Digite o Bairro">
            <h4 style="margin-left: 3%;">
                <b>Bairro:</b>
            </h4>
            <input class="input100" data-val="true" data-val-required="O Bairro precisa ser preenchido !" id="bairro" maxlength="49" minlength="2" name="Bairro" placeholder="(No mínimo 2 caracteres) &lt; - Digite aqui!  " required="required" type="text" value="" />
        </div>

        <div class="wrap-input100 validate-input" data-validate="Digite a Cidade">
            <h4 style="margin-left: 3%;">
                <b>Cidade:</b>
            </h4>
            <input class="input100" data-val="true" data-val-required="O nome da cidade precisa ser preenchido !" id="cidade" maxlength="49" minlength="2" name="Cidade" placeholder="(No mínimo 2 caracteres) &lt; - Digite aqui!  " required="required" type="text" value="" />
        </div>

        <div class="wrap-input100 validate-input" data-validate="Digite o Estado">
            <h4 style="margin-left: 3%;">
                <b>Estado:</b>
            </h4>
            <input class="input100" data-val="true" data-val-required="O nome do estado precisa ser preenchido !" id="uf" maxlength="2" minlength="2" name="Estado" placeholder="(2 caracteres) &lt; - Digite aqui!  " required="required" type="text" value="" />
        </div>

        <div class="wrap-input100 validate-input" data-validate="Digite o Número">
            <h4 style="margin-left: 3%;">
                <b>Número:</b>
            </h4>
            <input class="input100" id="numeral" maxlength="9" name="Num" placeholder="Digite aqui!  " type="text" value="" />

        </div>


        <div class="wrap-input100 validate-input" data-validate="Digite o Telefone(ou WhatsApp)">
            <h4 style="margin-left: 3%;">
                <b>Telefone ou WhatsApp(com DDD):</b>
            </h4>
            <input class="input100" data-val="true" data-val-required="O Telefone precisa ser preenchido !" id="celular" maxlength="16" minlength="12" name="Telefone" placeholder="(No mínimo 9 números) &lt; - Digite aqui!  " required="required" type="text" value="" />
            
        </div>

    <div class="wrap-input100 validate-input" data-validate="Digite uma Mensagem">
        <h4 style="margin-left: 3%;">
            <b>Mensagem:</b>
        </h4>




    <div>   <textarea id="msg" name="usuario_msg" class="input100" data-val="true" data-val-required="Precisa digitar algo no campo de mensagem, por exemplo: uma crítica ou sugestão!"  maxlength="300" minlength="1" placeholder="(No mínimo 1 caracter) &lt; - Digite aqui!" required type="text" value=""></textarea>
    </div>


          
        <div class="container-login100-form-btn m-t-32">
            <button type="submit" class="login100-form-btn">
                Salvar e Visualizar
            </button>
        </div>
        <div>

            <br/>
            <br/>

            <div style="text-align: left; font-family: Arial; font-size: 14px; color: #FFFFFF; line-height: 22px; mso-line-height: exactly; mso-text-raise: 4px">

            </div>

           
            	</div>                <p style="padding: 0; margin: 0; text-align: center;">
                    Ajuda?
                    <strong>
                        <a href="mailto:fersistemas1@gmail.com">fersistemas1@gmail.com</a>
                    </strong>
                </p>
    </div>
</form>
</div>
</div>
</body>
</html>



    
    <script type="text/javascript" src="Scripts/masks.js"></script>

    <!-- JQuery para busca de cidade estado e bairro - webservice de alto desempenho viacep.com.br -->
     <script src="http://code.jquery.com/jquery-2.2.2.min.js"></script> 
    <script type="text/javascript" src="Scripts/jquery-2.2.2.min.js"></script>
    
     <!-- Jquery 3.3.1  --> 
     <script type="text/javascript" src="Scripts/jquery-3.3.1.min.js"></script> 
    
      <!-- Jquery 3.3.1 - Mascaramento  --> 
     <script type="text/javascript" src="Scripts/jquery.mask.min.js"></script> 
    
    <!-- Javascript para busca de cidade estado e bairro - webservice de alto desempenho viacep.com.br -->
    <script type="text/javascript">

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...")
                        $("#bairro").val("...")
                        $("#cidade").val("...")
                        $("#uf").val("...")
                        $("#ibge").val("...")

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?",
                            function(dados) {

                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $("#rua").val(dados.logradouro);
                                    $("#bairro").val(dados.bairro);
                                    $("#cidade").val(dados.localidade);
                                    $("#uf").val(dados.uf);
                                    $("#ibge").val(dados.ibge);
                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    alert("CEP não encontrado.");
                                }
                            });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

     <script> 
         function mascaraMutuario(o, f) { 
             v_obj = o 
             v_fun = f 
             setTimeout('execmascara()', 1) 
         } 

         function execmascara() { 
             v_obj.value = v_fun(v_obj.value) 
         } 

         function cpfCnpj(v) { 

             //Remove tudo o que não é dígito 
             v = v.replace(/\D/g, "") 

             if (v.length <= 13) { //CPF 

                 //Coloca um ponto entre o terceiro e o quarto dígitos 
                 v = v.replace(/(\d{3})(\d)/, "$1.$2") 

                 //Coloca um ponto entre o terceiro e o quarto dígitos 
                 //de novo (para o segundo bloco de números) 
                 v = v.replace(/(\d{3})(\d)/, "$1.$2") 

                 //Coloca um hífen entre o terceiro e o quarto dígitos 
                 v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2") 

             } else { //CNPJ 

                 //Coloca ponto entre o segundo e o terceiro dígitos 
                 v = v.replace(/^(\d{2})(\d)/, "$1.$2") 

                 //Coloca ponto entre o quinto e o sexto dígitos 
                 v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3") 

                 //Coloca uma barra entre o oitavo e o nono dígitos 
                 v = v.replace(/\.(\d{3})(\d)/, ".$1/$2") 

                 //Coloca um hífen depois do bloco de quatro dígitos 
                 v = v.replace(/(\d{4})(\d)/, "$1-$2") 

             } 

             return v 

         } 

     </script> 


     <script type="text/javascript"> 
         $(document).ready(function() { 
             $("#cpf").mask("000.000.000-00"); 
             $("#cnpj").mask("00.000.000/0000-00"); 
             $("#cpfcnpj").mask("00.000.000/0000-00"); 
             $("#telefone").mask("(00) 0000-0000"); 
             $("#celular").mask("(00) 0000-0000"); 
             $("#salario").mask("999.999.990,00", { reverse: true }); 
             $("#cep").mask("00.000-000"); 
             $("#numeral").mask("000000000"); 
             $("#dataNascimento").mask("00/00/0000"); 

             $("#rg").mask("999.999.999-W", 
                 { 
                     translation: { 
                         'W': { 
                             pattern: /[X0-9]/ 
                         } 
                     }, 
                     reverse: true 
                 }); 

             var options = { 
                 translation: { 
                     'A': { pattern: /[A-Z]/ }, 
                     'a': { pattern: /[a-zA-Z]/ }, 
                     'S': { pattern: /[a-zA-Z0-9]/ }, 
                     'L': { pattern: /[a-z]/ }, 
                 } 
             }; 

             $("#placa").mask("AAA-0000", options); 

             $("#codigo").mask("AA.LLL.0000", options); 

             $("#celular").mask("(00) 0000-00009"); 

             $("#celular").blur(function(event) { 
                 if ($(this).val().length == 15) { 
                     $("#celular").mask("(00) 00000-0009"); 
                 } else { 
                     $("#celular").mask("(00) 0000-00009"); 
                 } 
             }); 
         }) 

     </script> 


    