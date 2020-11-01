
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Order</title>
  </head>
  <body>
    <select class="" id="item" name="item" onchange="myFunction()">
      <option value="chicken">Chicken</option>
      <option value="beef">Beef</option>
      <option value="fish">Fish</option>
    </select>

    <input type="number" id="item_c" onblur="myFunction()">

    <h1 id="total_price">0</h1>

    <script>

      function myFunction(){
        var chickenPrice = 30;
        var beefPrice = 300;
        var fishPrice = 1000;

        var selectedItem = document.getElementById('item').value;
        var enteredAmount = document.getElementById('item_c').value;

        var total_price;

        if(selectedItem=="chicken"){
          total_price = chickenPrice * enteredAmount;
        }
        else if(selectedItem=="beef"){
          total_price = beefPrice * enteredAmount;
        }
        else if(selectedItem=="fish"){
          total_price = fishPrice * enteredAmount;
        }

        document.getElementById('total_price').innerHTML = total_price;
      }

    </script>

  </body>
</html>
