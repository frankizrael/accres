<?php /* Template Name: login */
set_query_var('ENTRY', 'index');
$url = site_url().'/dashboard'; //WP site_url es la url del sitio de wORDPRESS
if (is_user_logged_in()) {
    header('Location: '.$url);
    exit;
}
get_header();
?>
<?php
    /*if ( is_user_logged_in() ) { // wp if login
        $current_user = wp_get_current_user(); //wp objeto Usuario
        $iduser = get_current_user_id(); //wp objeto Usuario.id
        // $type = $current_user->roles[0]; //wp objecto Usuario.rol
    }*/
?>
<?php 
    if ( !is_user_logged_in() ) {
        ?>
        <!-- else login wordpress -->
        <section class="login">
            <div class="login__content">
                <img src="<?php echo get_field("logo","options"); ?>">
                <h1>Bienvenidos a LBS</h1>
                <div class="login__form">
                    <?php                       
                        $args = array(
                            'echo'            => true,
                            'label_username'  => 'Email',
                            'label_password' => __( 'Contraseña' ),
                            'label_remember' => __( 'Recuerdame' ),
                            'label_log_in'   => __( 'Ingresar' ),
                            'redirect'        => get_permalink( get_the_ID() ),
                            'remember'        => true,
                            'value_remember'  => true,
                        );                     
                        wp_login_form($args); //WP form de login de wordpress
                    ?>                    
                </div>
            </div>
        </section>
        <?php
    }
?>
<?php
get_footer();
?>
