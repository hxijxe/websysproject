/*!
 * Start Bootstrap - Grayscale v7.0.5 (https://startbootstrap.com/theme/grayscale)
 * Copyright 2013-2022 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
 */
//
// Scripts
// 

/*Dropdown Menu*/
$('.dropdowncontainer .dropdown').click(function () {
    $(this).attr('tabindex', 1).focus();
    $(this).toggleClass('active');
    $(this).find('.dropdown-menu').slideToggle(300);
});
$('.dropdowncontainer .dropdown').focusout(function () {
    $(this).removeClass('active');
    $(this).find('.dropdown-menu').slideUp(300);
});
$('.dropdowncontainer .dropdown .dropdown-menu li').click(function () {
    $(this).parents('.dropdown').find('span').text($(this).text());
    $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
});
/*End Dropdown Menu*/


// Get the modal
var modalYoga = document.getElementById("myModalYoga");

// Get the button that opens the modal
var btnYoga = document.getElementById("myBtnYoga");

// Get the <span> element that closes the modal
var spanYoga = document.getElementsByClassName("closeYoga")[0];

// When the user clicks the button, open the modal
btnYoga.onclick = function () {
    modalYoga.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
spanYoga.onclick = function () {
    modalYoga.style.display = "none";
    var iframe = modalYoga.querySelector('iframe');
    var iframeSrc = iframe.src;
    iframe.src = '';
    iframe.src = iframeSrc;
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target === modalYoga) {
        modalYoga.style.display = "none";
        var iframe = modalYoga.querySelector('iframe');
        var iframeSrc = iframe.src;
        iframe.src = '';
        iframe.src = iframeSrc;
    }
};


function filterTable() {
    var location = document.querySelector("#locationDropdown").value;
    var classType = document.querySelector("#classDropdown").value;

    var rows = document.querySelectorAll("tr");
    rows.forEach(function (row) {
        var rowLocation = row.dataset.location;
        var rowClassType = row.dataset.class;

        if ((location === "All" || location === rowLocation) && (classType === "All" || classType === rowClassType)) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
}

document.querySelector("#locationDropdown").addEventListener("change", filterTable);
document.querySelector("#classDropdown").addEventListener("change", filterTable);

// // Login/Register
// const registerButton = document.getElementById("register");
// const loginButton = document.getElementById("login");
// const container = document.getElementById("container");

// registerButton.addEventListener("click", () => {
//   container.classList.add("right-panel-active");
// });

// loginButton.addEventListener("click", () => {
//   container.classList.remove("right-panel-active");
// }); 