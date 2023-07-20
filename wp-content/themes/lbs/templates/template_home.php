<?php /* Template Name: home */
set_query_var('ENTRY', 'home');
if (!is_user_logged_in()) {
    $url = site_url();
    header('Location: '.$url);
    exit;
}
$current_user = wp_get_current_user();
$name = $current_user->first_name.' '.$current_user->last_name;
get_header();
?>
<main>
    <aside>
        <div class="aside">
            <div class="aside__top">            
                <img src="<?php echo get_field("logo","options"); ?>">
                <ul>
                    <li class="active">Crear documento</li>
                    <li><a href="#">Historial</a></li>
                    <li><a href="#">Ajustes</a></li>
                </ul>
            </div>
            <div class="aside__bottom">
                <a href="#" class="btn btn--secondary">Cerrar sesión</a>
            </div>
        </div>
    </aside>
    <div class="maincontent">
        <nav>
            <div class="nav">
                <div class="nav__left">
                    <h1><?php the_title(); //WP titulo de la pagina ?></h1>
                </div>
                <div class="nav__right">
                    <p><?php echo $name; ?></p>
                    <a href="#" class="btn" id="save">Guardar</a>                    
                    <a href="#" class="btn">Publicar</a>                    
                </div>
            </div>
        </nav>
        <section>
            <div class="sectionMain">
                <div class="sectionMain__documento"></div>
                <div class="sectionMain__values">
                    <h2>Seleccione área de influencia directa</h2>
                    <div class="form">
                        <div class="form__input">
                            <label>Nombre del proyecto</label>
                            <input type="text" id="jsNameProyecto" placeholder="Nombre del proyecto" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <!-- breadcrumbs -->
        </footer>
    </div>
</main>
<?php
get_footer();
?>
