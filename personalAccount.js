// Функция вывода всех пользователей
showUsers = function(){
    const request = new XMLHttpRequest();
    const url = "showUsers.php";

    request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.addEventListener("readystatechange", () => {
        if(request.readyState === 4 && request.status === 200) {
            document.querySelector('.listUsers').innerHTML = request.responseText;
            console.log(200);
            let listUser = document.querySelectorAll("ul.listUsers > li > h4");
            let listUserDelete = document.querySelectorAll("ul.listUsers > li > .userListButtonsD");
            let listUserEdit = document.querySelectorAll("ul.listUsers > li > .userListButtonsE");

            // Вывод пользователя по нажатию
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

            // Удаление пользователя
            listUserDelete.forEach(function(ed){
                ed.addEventListener("click", function(event){
                    let idUserDelete = event.target.getAttribute('id');

                    const request = new XMLHttpRequest();
                    const url = "deleteUser.php";
                    const params = "idUser=" + idUserDelete;

                    request.open("POST", url, true);
                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                    request.addEventListener("readystatechange", () => {
                        if(request.readyState === 4 && request.status === 200) {
                            document.querySelector('.listUsers').innerHTML = request.responseText;
                            console.log(200);
                            showUsers();
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

            //Редактирование данных пользователя
            listUserEdit.forEach(function(edit){
                edit.addEventListener("click", function(edit1){
                    
                    let idUserEdit = edit1.target.getAttribute('id');
                    

                    if(document.querySelector('.bgEditUser').style.display == 'none')
                    {
                        document.querySelector('.bgEditUser').style.display = 'flex';
                        
                        document.querySelector('.bgEditUser input[type=submit].button').addEventListener("click", function(event)
                        {
                            event.preventDefault();
                            let radioE;
                            let userNameE = document.querySelector('.bgEditUser > .addForm > input[type=text]#userNameE').value;
                            let userSurnameE = document.querySelector('.bgEditUser > .addForm > input[type=text]#userSurnameE').value;
                            let passwordE = document.querySelector('.bgEditUser > .addForm > input[type=password]#passwordE').value;
                            let passwordRepeatE = document.querySelector('.bgEditUser > .addForm > input[type=password]#passwordRepeatE').value;
                            let loginE = document.querySelector('.bgEditUser > .addForm > input[type=text]#loginE').value;
                            let positionE = document.querySelector('.bgEditUser > .addForm > input[type=text]#positionE').value;
                            let telE = document.querySelector('.bgEditUser > .addForm > input[type=tel]#telE').value;
                            let emailE = document.querySelector('.bgEditUser > .addForm > input[type=email]#emailE').value;
                            
                            if (document.querySelector('.bgEditUser > .addForm > .radio > label > input[type=radio]').checked){
                                radioE = 1;
                            }
                            else {
                                radioE = 0;
                            }

                            const request = new XMLHttpRequest();
                            const url = "editUser.php";
                            const params = "idUser=" + idUserEdit + "&radioE=" + radioE + "&userNameE=" + userNameE + "&userSurnameE=" + userSurnameE +
                            "&passwordE=" + passwordE + "&passwordRepeatE=" + passwordRepeatE + "&loginE=" + loginE +
                            "&positionE=" + positionE + "&telE=" + telE + "&emailE=" + emailE;
    
                            request.open("POST", url, true);
                            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            request.send(params);

                            request.addEventListener("readystatechange", () => {
                                if(request.readyState === 4 && request.status === 200) {
                                    document.querySelector('.listUsers').innerHTML = request.responseText;
                                    console.log(200);
                                    console.log(request.responseText);
                                    showUsers();
                                }
                                if(request.readyState === 4 && request.status === 401) {
                                    console.log(401);
                                }
                                if(request.readyState === 4 && request.status === 500) {
                                    console.log(500);
                                }
                            });
    
                            
                        })
                    }
                    $('.bgEditUser').click(function(element){
                        if(element.target === this) {
                            $('.bgEditUser').css('display', 'none');
                        }
                    });
                });
            });
        }
        if(request.readyState === 4 && request.status === 401) {
            console.log(401);
        }
        if(request.readyState === 4 && request.status === 500) {
            console.log(500);
        }
    });

    request.send();
}

// Вывод пользователей при загрузке страницы
showUsers();

