
// Vanilla
document.addEventListener('DOMContentLoaded', function() {

  let hero_counter = Math.floor(Math.random() * Math.floor(200)) + 300;
  updateCounter(hero_counter);

  function updateCounter(count){
    document.getElementById('hero_counter').innerHTML = count;
  }

  function incrementCount(){
    let count = (Number)(document.getElementById('hero_counter').innerHTML);
    updateCounter(count+1);
    let seconds = Math.floor(Math.random() * Math.floor(3)) + 1;

    setTimeout( () => {
      incrementCount();
    }, seconds * 1000 );
  }

  incrementCount();
})
