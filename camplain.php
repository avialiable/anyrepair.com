<html>
  <head>
    <title>camplain</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
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
    body{
      background-color:silver;
    }
    #complain{
          text-decoration: underline;
  -webkit-text-decoration-color: green; /* Safari */  
  text-decoration-color: green;

    }
  </style>
    <div class="container-fluid">
    <div class="topnav">
  <a href="index.php">Home</a>
        <a href="register.php">Register as professional</a>
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
    <a href="camplain.php" id="complain">Register your complaint</a>
 </div>
  <body>
    <br>
    <br>
    <br>
    <form action="https://sheetdb.io/api/v1/uoz5f4on1yg0i" method="POST" id="sheetdb-form">
  <input type="text" placeholder="name" size="100" name="data[name]" required/><br><br>
<input type="text" placeholder="address" size="100" name="data[address]" required/><br><br>
          <input type="date" size="100" placeholder="dd/mm/yyyy"name="data[dateofuser]" 
required/><br><br>
    <select name="data[Time]">
      <option>13:00</option>
      <option>12:00</option>
      <option>14:00</option>
      <option>11:00</option>
      <option>8:00</option>
      <option>9:00</option>
      <option>10:00</option>
      <option>7:00</option>
      <option>15:00</option>
      <option>16:00</option>
      <option>17:00</option>
      <option>18:00</option>
    </select><br><br>
    <input type="text" placeholder="Problem"name="data[services]"required/><br>
      <input type="email" size="100" placeholder="Email" name="data[email]" required/><br><br>
    <input type="text" min="10" max="10"size="100" placeholder="phone" name="data[phone]"required/><br><br>
        <select name="data[Payment]">
        <option>online payment on arrival</option>
        <option>cash on arrival</option>
      </select>
<br><br>
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
window.open('money.php','_blank');
          });
        });
        </script>
    </div>
</html>