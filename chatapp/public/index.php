<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
			integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="css/style.css" />
		<title>Chat App</title>
	</head>
	<body>
		<div class="parent">
		<div class="background-img">
      		<img src="./365706.jpg">
		<div class="join-container">
			<header class="join-header">
				<h1> Chat App</h1>
			</header>
			<main class="join-main">
				<form action="chat.html">
					<div class="form-control">
						<label for="username">Username</label>
						<input
							type="text"
							name="username"
							id="username"
							placeholder="Enter username..."
							required
						/>
					</div>
					<div class="form-control">
						<label for="room">Room</label>
						<select name="room" id="room">
							<option value="Building Chatroom">Building Role</option>
							<option value="Apartment Chatroom">Apartment Owner</option>
							<option value="Open Lobby">Open Lobby</option>

						</select>
					</div>
					<button type="submit" class="btn">Join Chat</button>
				</form>
			</main>
		</div>
	</div>
	</div>
	</body>
</html>
