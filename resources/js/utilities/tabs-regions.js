

const tabs = document.querySelector(".wrapper");
const tabButton = document.querySelectorAll(".tab-button");
const contents = document.querySelectorAll(".content");

tabs.onclick = e => {
    const id = e.target.dataset.id;
    if (id) {
      tabButton.forEach(btn => {
        btn.classList.remove("border-yellow-600", "bg-yellow-100");
      });
      e.target.classList.add("border-yellow-600", "bg-yellow-100");

       contents.forEach(content => {
         content.classList.remove("active");
       });

       const element = document.getElementById(id);
       element.classList.add("active");
    }
  }
// document.getElementsByClassName("regionCentral")[0].addEventListener("click", function (event) {
//     console.log("central");
//     triggerClassesOnRegionCentralSelect();

// });



// document.getElementsByClassName("restoDelPais")[0].addEventListener("click", function (event) {
//     console.log("restos");
//     triggerClassesOnRegionRestoSelect();


// });


// let regionCentralSelector = () => {
//     triggerClassesOnRegionSelect();
// }

// let regionRestoDelPaisSelector = () => {
//     triggerClassesOnRegionSelect();
// }

// function triggerClassesOnRegionCentralSelect() {


//     // const regionRestoPaisPanel = document.querySelector('#regionRestoDelPaisPanel');
//     // const regionCentralPanel = document.querySelector('#regionCentralPanel');

//     // const centralCities = document.querySelector('#centralCities');
//     // const restoDelPaisCities= document.querySelector('#restoDelPaisCities');



//     document.querySelector('#regionCentralSelector').classList.toggle(
//         [
//             'border-yellow-600'

//             ]
//         );

//     document.getElementById("restoDelPaisSelector").classList.remove("border-yellow-600");
//     // regionRestoPaisPanel.classList.toggle('hidden');
//     // regionCentralPanel.classList.toggle('hidden');
//     // regionCentralHidden.classList.toggle('hidden');
//     // restoPaisHidden.classList.toggle('hidden');
// }

// function triggerClassesOnRegionRestoSelect() {


//     // const regionRestoPaisPanel = document.querySelector('#regionRestoDelPaisPanel');
//     // const regionCentralPanel = document.querySelector('#regionCentralPanel');

//     // const centralCities = document.querySelector('#centralCities');
//     // const restoDelPaisCities= document.querySelector('#restoDelPaisCities');

//     document.querySelector('#restoDelPaisSelector').classList.toggle([

//             'border-yellow-600'
//             ]
//         );
//         document.getElementById("regionCentralSelector").classList.remove("border-yellow-600");

//     // regionRestoPaisPanel.classList.toggle('hidden');
//     // regionCentralPanel.classList.toggle('hidden');
//     // regionCentralHidden.classList.toggle('hidden');
//     // restoPaisHidden.classList.toggle('hidden');
// }
