let formsText = document.querySelectorAll(".text");
let formTel = document.querySelector("input[type=tel]");
let formEmail = document.querySelector("input[type=email]");

formsText.forEach(function(element)
{
    element.addEventListener('input', function(e)
    {
        let a = /[0-9№_/\//$&+,:;=?@#|"{}\]\['<>.^*()%!-]/;
        e.target.value = e.target.value.replace(a, '').trim();
    });
});

formTel.addEventListener('input', function(e){
    let a = /[a-zA-zа-яА-Я№_/\//$&,:;=?@#|"{}\]\['<>.^*()%!-]/;
    e.target.value = e.target.value.replace(a, '').trim();
});

formEmail.addEventListener('input', function(e){
    let a = /[№_/\//$&,:;=?#|"{}\]\['<>^*()%!-+]/;
    e.target.value = e.target.value.replace(a, '').trim();
});