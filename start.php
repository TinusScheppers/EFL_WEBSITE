<html>

<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      setInterval(function () {
        $.get('getNewPresence.php', function (data) {
          document.getElementById('output').innerHTML = data;
        });
      }, 5000);
    });
  </script>
</head>

<body>
  <p>This is the row id: <span id='output'>xx</span></p>
</body>

</html>