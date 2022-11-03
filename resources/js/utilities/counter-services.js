
// window.onscroll = () => {
//    let start =  document.getElementById("statsSection")

// //    myScroller.addEventListener("scroll", function(){});
//    start.addEventListener("scroll", function() {

//     console.log("hoola");

//       let triggerForStats = document.querySelector('#counterLibras').getBoundingClientRect()

//       if (triggerForStats.top >= 0 && triggerForStats.bottom <= window.innerHeight) {
//           if (!counting_home) {
//               counting_home = true;
//               if (document.getElementById("counterAnos").text()=="0"){
//                   counter('#counterAnos', 9)
//               }
//               if (document.getElementById("counterLibras").text()=="0"){
//                   counter('#counterLibras', 1000000)
//               }
//               if (document.getElementById("counterCiudades").text()=="0"){
//                   counter('#counterCiudades', 16)
//               }
//               setTimeout(()=>{
//                   counting_home = false
//               }, 1000);
//           }
//       } else {
//         document.getElementById('counterAnos').text('0')
//         document.getElementById('counterLibras').text('0')
//         document.getElementById('counterCiudades').text('0')
//       }

//     });
// }


//#region - start of - number counter animation
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

const targetElement= document.querySelector('#statsSection');

let isCounting = false;
var inv;

document.addEventListener('scroll', function(e) {

    let triggerForStats = document.querySelector('#counterLibras').getBoundingClientRect()

    if (
        triggerForStats.top >= 0 &&
        triggerForStats.left >= 0 &&
        triggerForStats.right <= (window.innerWidth || document.documentElement.clientWidth) &&
        triggerForStats.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    ) {

        if(!isCounting ){
            var anos = 9;
            var libras = 1000000;
            var ciudades = 16;

             inv = setInterval(function() {
                if (document.getElementById("counterAnos").innerHTML == 0){

                    // document.getElementById("counterAnos").innerHTML =  ++ anos;
                    counterAnim("#counterAnos", 1, 9, 1000);
                }
                if (document.getElementById("counterLibras").innerHTML == 0){

                    counterAnim("#counterLibras", 10, 1000000, 1000);
                }
                if (document.getElementById("counterCiudades").innerHTML == 0){

                    counterAnim("#counterCiudades", 10, 16, 1000);
                }
            }, 1000);

            isCounting = true;

            //   setTimeout(()=>{
            //     isCounting = false
            //   }, 1000);
        }

    }else{
        document.getElementById('counterAnos').innerHTML = "0"
        document.getElementById('counterLibras').innerHTML = "0"
        document.getElementById('counterCiudades').innerHTML = "0"

    }
});
