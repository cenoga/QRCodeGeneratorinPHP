<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="js/qrcode.js"></script>

</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>QR Code Generator</h1>

      </div>
          <div class="card-body">
          <form onsubmit="generate();return false;">
            <input type="text" id="qr" class="form-control"><br><br>
            <input type="submit" class="btn btn-primary" value="Generate QRCode">
</form>

<div id="qrResult" style="height:500px; width:500px"></div>
          </div>
      </div>
    </div>
  </div>	
  <script type="text/javascript">
    var qrcode= new QRCode(document.getElementById('qrResult'),{
    width:200,
    height:200
    });

    function generate(){
      var message = document.getElementById('qr');
      qrcode.makeCode(message.value);
    }
  </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>