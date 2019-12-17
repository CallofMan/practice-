let listUser = document.querySelectorAll("ul.listUsers > li");
listUser.forEach(function(e){
    e.addEventListener("click", function(elem){

        const request = new XMLHttpRequest();
        const url = "outputUser.php?idUser="+elem.target.className;
        const params = "idUser=" + elem.target.className;

        request.open("GET", url, true);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        request.addEventListener("readystatechange", () => {
            if(request.readyState === 4 && request.status === 200) {
                document.querySelector('.infoUser').innerHTML = request.responseText;
                console.log(200);
            }
            if(request.readyState === 4 && request.status === 401) {
                console.log(401);
            }
            if(request.readyState === 4 && request.status === 500) {
                console.log(500);
            }
        });

        request.send(params);
    });
});


