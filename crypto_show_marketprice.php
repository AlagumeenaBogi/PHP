<!DOCTYPE html>
<html lang="en">
<head>
  <title>CryptoCurrency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>CryptoCurrency</h2>
  <p>Showing the CryptoCurrency Marketprice:</p>
  <form>
    <div class="row">
       <div class="col-sm-4"></div>
       <div class="col-sm-4">
          <label for="sel1">CyrptoCurrency:</label>
          <select class="form-control" id="sel1" onchange="showing_currency(this.value)">
            <option value="">CryptoCurrency</option>
            <option value="Bitcoin-Cash">BCH</option>
            <option value="Ripple">XRP</option>
            <option value="Bitcoin">BTC</option>
          </select>
       </div>
        <div class="col-sm-4"></div>
     </div>

     <div class="row">
       <div class="col-sm-4"></div>
       <div class="col-sm-4" id="content-showing">  </div>
        <div class="col-sm-4"></div>
     </div>
  </form>
</div>
</body>
 <script type='text/javascript'>
  function showing_currency(val)
  {      
      $.ajax({
      type: "GET",
      url: "ajax.php",
      data: "type=listshow&val="+val,
      success: function(msg){
        $('#content-showing').html(msg);
      }});
  }
</script>
</html>
