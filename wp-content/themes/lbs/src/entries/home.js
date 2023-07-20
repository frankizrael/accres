import '../scss/home.scss';
import 'swiper/dist/css/swiper.css';
import Swiper from 'swiper';

const $jsNameProyecto = $("#jsNameProyecto");
const $save = $("#save");
const jsonDocumento = new Object();

$jsNameProyecto.on("keyup", function(){
    const $this = $(this);
    const value = $this.val();
    jsonDocumento.nombre_proyecto = value;
});

$save.on("click", function() {
    $.ajax({
        type: "post",
        dataType: "json",
        url: ajaxUrl,
        data: {
            action: "get_savedocument",
            nombreproyecto: jsonDocumento.nombre_proyecto
        },
        success: function(response) {
            console.log(response);            
        }
    });
});