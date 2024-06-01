$(document).ready(function(){
    // dropdown elements
    $(`.dropdown`).on(`click`,function(){
        $(this).find(`.dropdown-menu`).slideToggle();
        let sibling =  $(this).siblings(`.dropdown`).children(`.dropdown-menu`).hide();
    })


}) //end jquery statment;