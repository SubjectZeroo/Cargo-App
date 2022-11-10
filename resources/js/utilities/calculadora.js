const counterAnim = (qSelector, start = 0, end, duration = 1000) => {
    const target = document.querySelector(qSelector);
    let startTimestamp = null;
    const step = (timestamp) => {
     if (!startTimestamp) startTimestamp = timestamp;
     const progress = Math.min((timestamp - startTimestamp) / duration, 1);
     target.innerText = Math.floor(progress * (end - start) + start);
     if (progress < 1) {
      window.requestAnimationFrame(step);
     }
    };
    window.requestAnimationFrame(step);
   };


let calculadora = () => {
    let tarifa_area = 4.1;
    let tarifa_maritima = 18;
    let minimo_maritimo = 30;

    let peso = parseFloat(document.getElementById('peso').value);
    let largo = parseFloat(document.getElementById('largo').value);
    let ancho = parseFloat(document.getElementById('ancho').value);
    let alto = parseFloat(document.getElementById('alto').value);


    if (typeof peso === 'number' && typeof largo === "number" && typeof ancho === "number" && typeof alto === "number") {
       if (peso > 0 && largo > 0 && ancho > 0 && alto > 0) {

        let pesovol = Math.round((largo * alto * ancho) / 166);

        let peso_total = Math.max(peso, pesovol);

        let total_areo = peso_total * tarifa_area;

        let pies = Math.round((largo * alto * ancho) / 1728)

        let total_maritimo = Math.max(
            minimo_maritimo,
            pies * tarifa_maritima
        );

        counterAnim("#piesCalculados", 1, pies, 1000);
        counterAnim("#librasCalculadas", 1, peso_total, 1000);
        counterAnim("#aeroCalculado", 1, total_areo, 1000);
        counterAnim("#maritimoCalculado", 1, total_maritimo, 1000);
       } else {
        counterAnim("#piesCalculados", 1, 0, 1000);
        counterAnim("#librasCalculadas", 1, 0, 1000);
        counterAnim("#aeroCalculado", 1, 0, 1000);
        counterAnim("#maritimoCalculado", 1, 0, 1000);
       }
    }
}


 document.querySelectorAll(".calcinput").forEach((el) => {

    el.addEventListener('keyup' , function () {

        calculadora();
    });
});


calculadora();
