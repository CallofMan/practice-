<?php
    SESSION_START();
	require_once "connection.php";
	
	if($_SESSION['role'] != '0' && $_SESSION['role'] != '1')
	{
		Header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Заявки</title>
	<link rel="stylesheet" type="text/css" href="styles/style_requests.css">
	<link rel="stylesheet" href="styles/general.css">
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
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
				<?php 
					if($_SESSION['role'] == 1)
					echo "<a href='personalAccount.php'>Личный кабинет</a>";
				?>         
            </nav>
            
        </section>

        <section class="center">

	        <div class="infoAndButton">

	        	<div class="upField">
		        	<img src="img/requests/new_request_icon.png" alt="new request">
					<? if ( $_SESSION['role'] == 1) {
                    echo "<p class='allRequests active'>Новая заявка</p>";
                    echo "<a href='allRequests.php' class='allRequests' style='color: white;'>Все заявки</a>"; 
	                }
	                if ( $_SESSION['role'] == 0) {
	                   echo "<a href='requests.php' class='allRequests active'>Новая заявка</a>";
	                   echo "<a href='allRequests.php' class='allRequests' style='color: white;'>Все мои заявки</a>";
	                }
	                ?>
				</div>
				
				<form action="" method="POST" style="width: 100%">
					
					<div class="requestMain">
						<p class="requestName">Категория<span> *</span></p>

						<?
						$count = mysqli_query($link, "SELECT * FROM `categories`;");
						$countRows = mysqli_num_rows($count);
						?>
						<select name="requestCategory" required="">
							<option value=></option>
							<?
								for ($j = 0; $j < $countRows; $j++) {
									$countResult = mysqli_fetch_assoc($count);
									echo "<option value=".$countResult['categoryId'].">".$countResult['categoryName']."</option>";
								}
							?>
							

						</select>

						<p class="requestName" style="margin-top: 10px;">Название<span> *</span></p>
						<input style="width: 450px;" type="text" name="requestName" required autocomplete="off">

						<p class="requestDescription">Описание</p>
						<textarea placeholder="Введите сюда описание заявки" class="description" name="requestDescription"></textarea>

						<div class="statusBar">
							<div>
								<p class="requestName">Статус<span> *</span></p>
								<input class="text" name="status" readonly placeholder="Открыта">
							</div>
		
							<div style="margin-left: 30px;">
								<p>Приоритет</p>
								<select name="requestPriority">

									<option value="1">Низкий</option>
									<option value="2">Средний</option>
									<option value="3">Высокий</option>
								</select>
							</div>
							
							<div style="margin-left: 30px;">
								<p>Срок</p>
								<input type="date" name="requestDate" required>
							</div>
						</div>

						<div class="requestComment" style="margin-top: 20px;">
							<p>Добавьте комментарий, если необходимо</p>
							<textarea class="comment" name="requestComment"> </textarea>
						</div>

						<div class="requestButtons">
							<input type="submit" name="sendRequest" value="Отправить заявку">
							<?
							
							?>	
						</div>

					</div>

				</form>

				<?php
				
					$userId = $_SESSION['id']; 
					$requestCategory = $_POST['requestCategory'];
					$requestName = $_POST['requestName'];
					$requestDescription = $_POST['requestDescription'];
					$requestPriority = $_POST['requestPriority'];
					$requestDate = $_POST['requestDate'];
					$requestComment = $_POST['requestComment'];

					if (isset($_POST['sendRequest'])) {
						$addRequest = mysqli_query($link, "INSERT INTO `requests`(
							`requestId`,
							`userid`,
							`requestCategory`,
							`requestName`,
							`requestDescription`,
							`requestStatus`,
							`requestPriority`,
							`requestDateCreated`,
							`requestDate`,
							`requestComment`) 
							VALUES (
							NULL,
							$userId,
							$requestCategory,
							'$requestName',
							'$requestDescription',
							1,
							$requestPriority,
							NOW(),
							'$requestDate',
							'$requestComment')");
					}

					if ($addRequest) {
						echo "<p class='success'>Заявка создана!</p>";
						echo "<meta http-equiv='refresh' content='5'>";
					}

					else if (isset($_POST['sendRequest']) && !$addRequest) {
						echo "<p class='success'>Говно твоя попытка!</p>";
						echo "<meta http-equiv='refresh' content='2'>";
						echo "<br>";
						//echo "<p class='success'>requestDate - " . $requestDate . "</p>";
					}
				?>

	        </div>

        </section>

    </main>

</div>

</body>
</html>

