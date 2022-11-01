const btnOpen = document.querySelector(".openMobileMenu");
const btnClose = document.querySelector(".closeMobileMenu");

btnOpen.addEventListener("click", () => {
    console.log("open");
    showMobileMenu();
});

btnClose.addEventListener("click", () => {
    console.log("close");
    showMobileMenu();
});

function showMobileMenu() {
    document.querySelector('#mobileMenu').classList.toggle('hidden')
    document.querySelector('#blackOverlayMobile').classList.toggle('hidden')
};
