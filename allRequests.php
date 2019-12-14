<?php
    SESSION_START();
    require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Все заявки</title>
	<link rel="stylesheet" type="text/css" href="styles/style_requests.css">
</head>
<body>

<div class="wrapper">
	
	<header>
			
        <img class="logo" src="../background/logo_okbmei1.png" alt="logo">

        <a href="authorization.php" class="login">Личный кабинет</a>
    
    </header>

    <main>

        <section class="top">
            
            <nav class="navigation">	

                <a href="index.php">Главная</a>
                <a href="#">Телефонный справочник</a>
                <a href="#footerMap">Как добраться</a>
                <a href="#">О компании</a>
                <? if ( $_SESSION['role'] == 1) {
                    echo "<a href='requests.php'>Заявки</a>";
                }
                if ( $_SESSION['role'] == 0) {
                    echo "<a href='requests.php'>Создать заявку</a>";
                }
                ?>
                    
            </nav>
            
        </section>

        <section class="center">

	        <div class="infoAndButton">

	        	<div class="upField">
		        	<img src="img/requests/new_request_icon.png" alt="new request">
					<? if ( $_SESSION['role'] == 1) {
                    echo "<a href='requests.php' class='allRequests' style='color: white;'>Новая заявка</p>";
                    echo "<a href='allRequests.php' class='allRequests active'>Все заявки</a>"; 
	                }
	                if ( $_SESSION['role'] == 0) {
	                    echo "<p>Новая заявка</p>";
	                }
	                ?>
				</div>

				<div class="requestsWrapper">

					<?php

						$selectRequests = mysqli_query($link, 
							"SELECT 
							requestId, requestName, requestDescription, requestDateCreated, requestDate, first_name, second_name, mail, categoryName, statusName, statusName, requestComment
							FROM `requests`, `users`, `categories`, `priorities`, `statuses`
							WHERE requests.userid = users.id_user 
							AND requests.requestCategory = categories.categoryId
							AND requests.requestPriority = priorities.priorityId
							AND requests.requestStatus = statuses.statusId
							");

						$count = mysqli_num_rows($selectRequests);

						if ($selectRequests) {
							for ($i = 0; $i < $count; $i++) {
								$selectRequestsResult = mysqli_fetch_assoc($selectRequests);
								?>
								<div class="requestWrapper">
									<h1>
										
										<?echo "№" . $selectRequestsResult['requestId'] . " " . $selectRequestsResult['requestName'] . " до " . $selectRequestsResult['requestDate']; ?>
											
									</h1>

									<select style="margin-bottom: 2%;">			
										<option><?echo $selectRequestsResult['statusName']?></option>
									</select>

									<p>От <?echo "<b>" . $selectRequestsResult['first_name'] . " " . $selectRequestsResult['second_name'] . "</b> с почты " . "<b>" . $selectRequestsResult['mail'] . "</b>";?></p>

									<p style="margin-top: 2%;">Категория</p>
									<input type="text" readonly value="<?echo $selectRequestsResult['categoryName'];?>">
									
									<p style="margin-top: 2%;">Описание заявки</p>
									<textarea><?echo $selectRequestsResult['requestDescription']?></textarea>
									
									<p style="margin-top: 2%;">Комментарий к заявке</p>
									<textarea><?echo $selectRequestsResult['requestComment']?></textarea>
									
									<div style="float: right;">
									<p>Создана</p>
									<p><?echo $selectRequestsResult['requestDateCreated']?></p>
									</div>

								</div>
								<?
							}
							
						}
					?>

	        	</div>
	
	    	</div>

        </section>

    </main>

</div>

</body>
</html>

