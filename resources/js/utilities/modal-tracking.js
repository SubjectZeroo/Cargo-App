import axios from "axios"
const modalOpen = document.querySelector(".openModalTracking");
const modalClose = document.querySelector(".closeModalTracking");

document.getElementById('form_tracking').addEventListener('submit', function (event) {
    event.preventDefault()
    searchTracking();
}, false);

function searchTracking() {
    let tracking = document.getElementById('tracking').value

    axios.post('/search_tracking' , {
        tracking: tracking
    }).then( r => {
        if (r && r.data) {
            let pedido = r.data;
            document.getElementById('tracking_fecha_llegada_venezuela').innerHTML(pedido.fecha_llegada_venezuela);
            document.getElementById('tracking_fecha_llegada_usa').innerHTML(pedido.fecha_llegada_usa);
            document.getElementById('tracking_peso').innerHTML(pedido.peso);
            document.getElementById('tracking_dimensiones').innerHTML(pedido.dimensiones);
        }
    })
}

modalOpen.addEventListener("click", () => {
    document.querySelector('#modalTracking').classList.toggle('hidden')
});
modalClose.addEventListener("click", () => {
    document.querySelector('#modalTracking').classList.toggle('hidden')
});
