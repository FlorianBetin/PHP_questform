<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="/validation.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="courriel">Téléphone :</label>
        <input  type="tel"  id="phone"  name="user_phone">
    </div>

<label for="sujet">Choisi un sujet</label>
<SELECT name="user_topic" id="sujet"> 
<OPTION>Sujet 1
<OPTION>Sujet 2
<OPTION>Sujet 3
<OPTION>Sujet 4
<OPTION>Sujet 5
</SELECT>




    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" cols="50"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

</body>
</html>