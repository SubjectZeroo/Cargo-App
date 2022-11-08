

window.onload = function(){
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

}
