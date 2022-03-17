require('./bootstrap');
require('./validations/validation_register');



document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
        const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if(toggle && nav && bodypd && headerpd){
            toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
            })
        }
    }

    showNavbar('header-toggle','nav-bar','body-pd','header');

   
    });

// Funzione modale per la cancellazione del piatto
$('.show_confirm').click(function(event) {
    var form =  $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    swal({
        title: `Sei sicuro di voler cancellare il piatto?`,
        text: "Se confermi, non potrai più tornare indietro",
        icon: "error",
        buttons: ["Annulla", true],
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
        form.submit();
        }
    });
});
