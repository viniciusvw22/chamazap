<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <script>
    function extrairNumeros(destaString) {
      var numeros = "";
      for (ch of destaString) {
        if (ch >= "0" && ch <= "9") {
          numeros += ch;
        }
      }
      return numeros;
    }
    var telefone = "<?php echo $_GET["phone"]; ?>";
    var numerosDoTel = extrairNumeros(telefone);
    var zap = "https://api.whatsapp.com/send/?phone=";
    zap += numerosDoTel + "&text&app_absent=1";
    window.location.href=zap;    
  </script> 
</body>
</html>