// header mobile

fa_chevron_down_mobile = document.getElementById("fa_chevron_down_mobile")
our_services_mobile_btn = document.getElementById("our_services_mobile_btn")
our_services_mobile_btn_open = false
our_services_mobile_btn.addEventListener('click', () => {
    if (our_services_mobile_btn_open == false) {
        our_services_mobile_btn.style.height = "520px";
        fa_chevron_down_mobile.style.transform = "rotate(180deg)";
        our_services_mobile_btn_open = true;
    } else if (our_services_mobile_btn_open == true) {
        our_services_mobile_btn.style.height = "25px";
        fa_chevron_down_mobile.style.transform = "rotate(0)";
        our_services_mobile_btn_open = false;
    }
})

header_mobile = document.getElementById("header_mobile")
menu_open_btn = document.getElementById("menu_open_btn")
menu_close_btn = document.getElementById("menu_close_btn")

menu_open_btn.addEventListener('click', () => {
    header_mobile.style.right = "-2%"
})
menu_close_btn.addEventListener('click', () => {
    header_mobile.style.right = "-100%"
})