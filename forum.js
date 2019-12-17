var buttonRoom = document.querySelectorAll('.roomP');
var idRoom = "room1";
var room;
var key = 0;
var key2 = 0;
var flagChangeRoom = 0;

// Функция получения айди и нужна для подсчечивания кнопки
var information = function()
{
    // Проверка на первый запуск страницы, когда переменная ещё не создана
    // Потом предыдущей кнопке указываем стандартное значение, и показываем, что она не активна
    if(key == 1)
    {
        room.style.backgroundColor = "rgba(0, 169, 251, 0.3)";
    }
    else key = 1;
    
    // Атрибуты активной кнопки
    if(key2 == 1)
    {
        idRoom = event.target.getAttribute('id');
    } else key2 = 1;

    room = document.getElementById(idRoom);
    room.style.backgroundColor = "rgb(7, 136, 247)";

    // Парсинг айдишника из строки в интеджер
    switch(idRoom)
    {
        case "room1":       idRoom = 1;         break;
        case "room2":       idRoom = 2;         break;
        case "room3":       idRoom = 3;         break;
        case "room4":       idRoom = 4;         break;
        case "room5":       idRoom = 5;         break;
        case "room6":       idRoom = 6;         break;
        case "room7":       idRoom = 7;         break;
        case "room8":       idRoom = 8;         break;
        case "room9":       idRoom = 9;         break;
        case "room10":      idRoom = 10;        break;
        default: console.log("Не получилось взять айди комнаты.");
    }
}

// Стартовое значение на общую комнату
information();

// Подсвечивает активную кнопку и берёт айди комнаты
buttonRoom.forEach(function(dick)
{
    dick.addEventListener("click", function(event)
    {
        information();  
        flagChangeRoom = 1;
    })
})


// Начался ajax

let flag = 0;

// Функция вывода сообщений из базы
showMessages = function(who)
{
    // Создаем экземпляр класса XMLHttpRequest
    const request = new XMLHttpRequest();
    const url = "messagesUpload.php";
    const params = "id_room=" + idRoom;

    request.open("POST", url, true);
    //В заголовке говорим что тип передаваемых данных закодирован. 
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    request.onreadystatechange = function()
    {
        // Если запрос отправлен успешно, то вставляю все сообщения из базы в форму
        if(request.readyState == XMLHttpRequest.DONE && request.status == 200)
        {
            document.querySelector('section').innerHTML = request.responseText;

            // При загрузки страницы сообщения прокручиваются вниз
            if(flag == 0)
            {
                document.querySelector('section').scrollTop = document.querySelector('section').scrollHeight;
                flag = 1;
            }
            // Если сообщение отправлено тобой, то скроллится вниз
            if(who)
            {
                document.querySelector('section').scrollTop = document.querySelector('section').scrollHeight;
            }
            // Если сменил комнату
            if(flagChangeRoom)
            {
                document.querySelector('section').scrollTop = document.querySelector('section').scrollHeight; 
                flagChangeRoom = 0;
            }

            // Удаление сообщения 
            var class_message = document.querySelectorAll('.delete_message');
            class_message.forEach(function(fallos)
            {
                fallos.addEventListener("click", function(event)
                {
                    deleteMessage();
                    showMessages();
                })
            })
        }
    }
    
    request.send(params);
};

// Функция отправки сообщений в базу
outputMessage = function()
{
    // Ограничение на ввод пробела первым симоволом
    let message = document.getElementById('message');
    message.oninput = () => {
        if(message.value.charAt(0) === ' ') {
          message.value = '';
        }
    }

    if(message.value != '')
    { 
        // Отключение перезагрузки страницы при нажатии на кнопку
        event.preventDefault();

        // Какие данные буду передавать в запрос php
        let data_body = "message=" + message.value + "&id_room=" + idRoom; 
        
        // Подключение к серверу
        let connection = fetch("messagesUnload.php", {
            method: "POST",
            body: data_body,   
            headers:{"content-type": "application/x-www-form-urlencoded"} 
            });
        
        // Если коннект успешный, то поле ввода текста очистится
        connection.then(()=>{
            message.value = ""; 
            showMessages(true);
        })
    }
}

// Занесение сообщений в базу
let send = document.getElementById('send');
send.addEventListener("click", function(event)
{
    outputMessage();
});

// Если нажали на enter
document.addEventListener("keydown", function (event)
{
    if (event.code == 'Enter') 
    {
        outputMessage();
    }
});


// Функция удаления сообщений 
deleteMessage = function()
{
    let id_message = event.target.getAttribute('id');
    console.log(id_message)
    // Создаем экземпляр класса XMLHttpRequest
    const request = new XMLHttpRequest();
    const url = "messagesDelete.php";
    const params = "id_message=" + id_message;

    request.open("POST", url, true);

    //В заголовке говорим что тип передаваемых данных закодирован. 
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.send(params);
}

// Вывод в первый раз, чтобы не запаздывало на секунду
showMessages();




// Вывод сообщений каждую секунду
setInterval(showMessages,1000);