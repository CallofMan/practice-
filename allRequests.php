<?php
    SESSION_START();
	require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Все заявки</title>
	<link rel="stylesheet" type="text/css" href="styles/style_requests.css">
	<link rel="stylesheet" href="styles/general.css">
</head>
<body>

<div class="wrapper">
	
	<header>
			
        <img class="logo" src="../background/logo_okbmei1.png" alt="logo">

        <?
            if (!isset($_SESSION['id'])) {
                echo "<a href='authorization.php' class='login'>Авторизация</a>";
            }
    	?>
        <a href="logout.php" class="login">Выйти</a>
    
    </header>

    <main>

        <section class="top">
            
            <nav class="navigation">	

                <a href="index.php">Главная</a>
                <a href="#">Телефонный справочник</a>
                <a href="forum.php">Форум</a>
                <? 
                if ( $_SESSION['role'] == 1) {
                	echo "<a href='personalAccount.php'>Личный кабинет</a>"; 
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
	                	echo "<a href='requests.php' class='allRequests' style='color: white;'>Новая заявка</p>";
	                    echo "<a href='allRequests.php' class='allRequests active'>Все мои заявки</a>";
	                }
	                ?>
				</div>

				<div class="requestsWrapper">

					<?php

						if ($_SESSION['role'] == '1') {
							$selectRequests = mysqli_query($link, 
							"SELECT 
							requestId, requestName, requestDescription, requestDateCreated, requestDate, first_name, second_name, mail, categoryName, statusName, requestComment
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
										<p>	
											<?echo "№" . $selectRequestsResult['requestId'];?>		
										</p>

										<h2><?echo $selectRequestsResult['requestName']." до ".$selectRequestsResult['requestDate'];?></h2>

										<select style="margin-bottom: 2%;">			
											<option><?echo $selectRequestsResult['statusName']?></option>
										</select>

										<p><?echo "<b>" . $selectRequestsResult['first_name'] . " " . $selectRequestsResult['second_name']."</b>";?></p>

										<p><?echo "Email: " . "<b>" . $selectRequestsResult['mail'] . "</b>";?></p>

										<p style="margin-top: 2%;">Категория</p>
										<input type="text" readonly value="<?echo $selectRequestsResult['categoryName'];?>">
										
										<p style="margin-top: 2%;">Описание заявки</p>
										<textarea readonly><?echo $selectRequestsResult['requestDescription']?></textarea>
										
										<p style="margin-top: 2%;">Комментарий к заявке</p>
										<textarea readonly><?echo $selectRequestsResult['requestComment']?></textarea>
										
										<div style="float: right;">
										<p>Создана</p>
										<p><?echo $selectRequestsResult['requestDateCreated']?></p>
										</div>

									</div>
									<?
								}
							}
						}

						

						if ($_SESSION['role'] == '0') {
							$userId = $_SESSION['id'];
							$selectRequests = mysqli_query($link, 
							"SELECT 
							requestId, requestName, requestDescription, requestDateCreated, requestDate, categoryName, statusName, requestComment
							FROM `requests`, `categories`, `priorities`, `statuses`
							WHERE requests.userid = $userId 
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

										<p style="margin-top: 2%;">Категория</p>
										<input type="text" readonly value="<?echo $selectRequestsResult['categoryName'];?>">
										
										<p style="margin-top: 2%;">Описание заявки</p>
										<textarea readonly><?echo $selectRequestsResult['requestDescription']?></textarea>
										
										<p style="margin-top: 2%;">Комментарий к заявке</p>
										<textarea readonly><?echo $selectRequestsResult['requestComment']?></textarea>
										
										<div style="float: right;">
										<p>Создана</p>
										<p><?echo $selectRequestsResult['requestDateCreated']?></p>
										</div>

									</div>
									<?
								}
							}
						}

						if (!isset($_SESSION['role'])) {

							echo "<meta http-equiv='refresh' content='0;index.php'";

						}
					?>

	        	</div>
	
	    	</div>

        </section>

    </main>

</div>

</body>
</html>

