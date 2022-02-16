//===
// VARIABLES
//===
const DATE_TARGET = new Date('04/30/2022 6:00 PM');
// DOM for render
const SPAN_DAYS = document.querySelector('span#dias');
const SPAN_HOURS = document.querySelector('span#horas');
const SPAN_MINUTES = document.querySelector('span#minutos');
const SPAN_SECONDS = document.querySelector('span#segundos');

// Milliseconds for the calculations
const MILLISECONDS_OF_A_SECOND = 1000;
const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

//===
// FUNCTIONS
//===

/**
 * Method that updates the countdown and the sample
 */
function actualizarContador() {
    // Calcs
    const NOW = new Date()
    const DURATION = DATE_TARGET - NOW;
    const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
    const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
    const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
    const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
    // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

    // Render
    SPAN_DAYS.textContent = REMAINING_DAYS;
    SPAN_HOURS.textContent = REMAINING_HOURS;
    SPAN_MINUTES.textContent = REMAINING_MINUTES;
    SPAN_SECONDS.textContent = REMAINING_SECONDS;

    if (REMAINING_DAYS <= 7) {
        document.querySelector("#contadores").classList.add("eshoy-eshoy");
    }
}

/*FUNCIONES PROPIAS #################################################################################################################################*/

var direccion = function () {
    //Obtiene el nombre del Servidor
    if (window.location.hostname == 'localhost') {
        return 'http://' + window.location.hostname + ':17944/';
    }
    else {
        return 'http://cezaryto.com/apps/regina/';
    }
};

async function ConfirmarInvitado(inv) {
    console.log(inv);
    await fetch(direccion() + 'confirmar/' + inv, { method: 'POST' })
        .then((resultado) => resultado.json()
        ).then((respuesta) => {
            if (respuesta.confirma === 'true') {
                alert("Invitado Confirmado :D");
                let boton = document.querySelector('#' + inv);
                boton.setAttribute("disabled", "disabled");
                boton.innerHTML = "Confirmado";
            }
            else {
                alert("Error al confirmar Invitado ¬¬");
            }
        });
}

function InciarInvitacion() {
    document.getElementById('invi-completa').style.display = 'block';
    var cancion = new Audio(direccion() + "media/y2mate.com-The Greatest Showman.mp3");
    cancion.play();
    //document.getElementById('invi-completa').scrollIntoView();
    document.getElementById('previa').style.display = 'none';
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("invi-completa").style.display = 'none';

    actualizarContador();
    setInterval(actualizarContador, MILLISECONDS_OF_A_SECOND);

    let botones = document.querySelectorAll("button");
    botones.forEach(boton => boton.addEventListener("click", function () {
        ConfirmarInvitado(this.id);
    }));    

    //alert('MIS XV AÑOS\nREGINA ROCHA GALV\u00C1N');
});