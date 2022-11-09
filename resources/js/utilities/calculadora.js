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
    tarifa_area = 4.1;
    tarifa_maritima = 18;
    minimo_maritimo = 30;

    peso = parseFloat(document.getElementById('peso').value);
    largo = parseFloat(document.getElementById('largo').value);
    ancho = parseFloat(document.getElementById('ancho').value);
    alto = parseFloat(document.getElementById('alto').value);


    if (typeof peso === 'number' && typeof largo === "number" && ancho === "number" && alto === "number") {
       if (peso > 0 && largo > 0 && ancho > 0 &&alto > 0) {
        pesovol = Math.round((largo * alto * ancho) / 166);
        peso = Math.max(peso, pesovol);
        total_areo = peso * tarifa_area;
        pies = Math.round((largo * alto * ancho) / 1728)

        total_maritimo = Math.max(
            minimo_maritimo,
            pies * tarifa_maritima
        );

        counterAnim("#piesCalculados", 1, piso, 1000);
        counterAnim("#librasCalculadas", 1, peso, 1000);
        counterAnim("#areoCalculado", 1, total_areo, 1000);
        counterAnim("#maritimoCalculado", 1, total_maritimo, 1000);
       } else {
        counterAnim("#piesCalculados", 1, 0, 1000);
        counterAnim("#librasCalculadas", 1, 0, 1000);
        counterAnim("#areoCalculado", 1, 0, 1000);
        counterAnim("#maritimoCalculado", 1, 0, 1000);
       }
    }
}

document.querySelector("calcinput").addEventListener("keyup" ,() => {
    calculadora();
});

calculadora();
