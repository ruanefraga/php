<?php
function rf_create_form(){

    //Verificando e Capturando dados
    $rf_nome = isset($_POST["nome"]) ? $_POST["nome"] : "[Não encontrado]";
    $rf_email = isset($_POST["email"]) ? $_POST["email"] : "[Não encontrado]";
    $rf_mensagem = isset($_POST["mensagem"]) ? $_POST["mensagem"] : "[Não encontrado]";
    
    // Configuração contato via whatsapp
    $rf_texto_whatsapp = "Olá, Meu nome é *$rf_nome* e meu e-mail é $rf_email. *$rf_mensagem*.";
    $rf_telefone_dest = "5521111111111";
    $rf_msg_whatsapp = str_replace(' ', '%20', $rf_texto_whatsapp);
    $rf_action_url = "https://api.whatsapp.com/send?phone=$rf_telefone_dest&text=$rf_msg_whatsapp";  

    // Envio Whatsapp
    if(isset($_POST['submit'])){?>
        <script type="text/javascript">
        window.location = "<?php echo $rf_action_url; ?>";
        </script>
<?php } ?>

    <body>   
        <h1 class="rf-titulo">Contate-nos</h1>
        <div>
            <form method="post" action="">
                <div>
                    <input class="rf-campos" type="text" name="nome" placeholder="Nome" id="nome" required> 
                </div>   
                <div>
                    <input class="rf-campos" type="email" name="email" placeholder="Email" id="email" required>
                <div>    
                <div>
                    <textarea class="rf-campos" name="mensagem" placeholder="Digite sua mensagem aqui" id="mensagem"></textarea>
                </div>
                <div>
                    <button class="rf-botao" type="submit" name="submit">Enviar</button>
                </div>
            </form>
        </div>  
    </body>    
<?php }

    add_shortcode('formulariocontato', 'rf_create_form');

    add_action('wp_enqueue_scripts', 'enqueue_estilo');

    function enqueue_estilo(){
        wp_enqueue_style ('rfestilo', '/wp-content/plugins/formulario_contato/css/rfestilo.css');
    }
?>

    







