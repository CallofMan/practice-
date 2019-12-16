let flag = 0;

// Начался ajax

// Функция вывода сообщений из базы
showMessages = function(arg)
{
    // Создаем экземпляр класса XMLHttpRequest
    const request = new XMLHttpRequest();

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
            if(arg == true)
            {
                document.querySelector('section').scrollTop = document.querySelector('section').scrollHeight;
            }
        }
    }
    
    request.open("POST", "messagesUpload.php", true);
    request.send();
};

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
        let data_body = "message=" + message.value; 
        
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

// Вывод в первый раз, чтобы не запаздывало на секунду
showMessages();

// Вывод сообщений каждую секунду
setInterval(showMessages,1000);