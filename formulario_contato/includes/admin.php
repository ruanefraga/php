<?php
    add_action('admin_menu', 'rf_register_menus');

    function rf_register_menus(){
        add_options_page('Formulario Contato', 'Formulário de Contato', 'manage_options', 'rf_render_page');
    }

    function rf_render_page(){
?>
        <div class="wrap">
            <h2>Editar formulário de contato</h2>
            <p class="description"> Copie este shortcode e cole no seu post, página ou widget:</p>
            <p>[formulariocontato]</p>        
        </div>
<?php
    }
?>
