<html>
  <head>
    <title>Register as professional</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
    <div class="container-fluid">
  <style>
    .topnav{
      background-color:#333;
      overflow:hidden;
    }
    .topnav a{
      float: left;
  color: #FFFFFF
;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
    }
    input{
      size:100;
    }
    body{
      background-color:silver;
    }
    #pro{
          text-decoration: underline;
  -webkit-text-decoration-color: green; /* Safari */  
  text-decoration-color: green;

    }
  </style>
    <div class="topnav">
  <a href="index.php">Home</a>
        <a href="register.php" id="pro">Register as professional</a>
    <a><select>
        <option>our services</option>
     <option>Printer Repair</option>
     <option>Laptop Repair</option>
     <option>Mobile Repair</option>
          <option>light and switches</option>
    <option>Air Conditioner</option>

  </select></a>	
    <a href="gifts.php">Gifts</a>
    <a href="about.php">about us</a>
    <a href="camplain.php">Register your complaint</a>
 </div>
  <body bgcolor="silver">
    <form action="https://sheetdb.io/api/v1/4ofevgovdh5c8" method="POST" id="sheetdb-form">
<input type="text" placeholder="Name" name="data[Name]" size="100"required/><br><br>
<input type="text" placeholder="lastname" name="data[lastName]"size="100"required/><br><br>
<input type="email" placeholder="Email" name="data[Email]"size="100"required/><br><br>
<input type="text" placeholder="Fathername" name="data[Fathername]"size="100"required/><br><br>
<input type="text" placeholder="Mothername" name="data[Mothername]"size="100"required/><br><br>
<input type="text" placeholder="phone" name="data[phone]"size="100"required/><br><br>
<input type="text" placeholder="Firm name(optional)" name="data[Firmname]" size="100"/><br><br>
<input type="text" placeholder="Adress" name="data[Adress]" size="100"required/><br><br>
<input type="text"size="100" placeholder="Experience" name="data[Experience]"required/><br><br>
          <button style="background-color:green;" name="sumbit"type="submit">register</button>
    </form>
  </body>
        <script>
            var form = document.getElementById('sheetdb-form');
        form.addEventListener("submit", e => {
          e.preventDefault();
          fetch(form.action, {
              method : "POST",
              body: new FormData(document.getElementById("sheetdb-form")),
          }).then(
              response => response.json()
          ).then((html) => {
            // you can put any JS code here
window.open('engineer.php','_blank');
          });
        });
        </script>
    </div>
</html>