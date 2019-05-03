<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envio de archivos a EFACT</title>
    <script src="View/Scripts/enviarefact.js"></script>
</head>
<body>

  <h3>Envio de comprobantes electrónicos a EFACT</h3>

  <form action="uploadpost.php" method="post" name="frmUpload" enctype="multipart/form-data">

    <input type="hidden" name="token" id="token">

    <table>
        <tr>
          <td>PASO 1</td>
          <td>:</td>
          <td><input type="file" id="file[]" name="file[]" multiple/></td>
        </tr>
        <tr>
          <td>PASO 2</td>
          <td>:</td>
          <td><input name="btnUpload" type="submit" value="Enviar archivos" /></td>
        </tr>
    </table>
    
  </form>  
</body>
</html>