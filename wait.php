<?php include "functions.php"; ?>
<html>
<head>
   <meta charset="UTF-8">
<body>
   <img src="<?php echo $url; ?>">
   <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>"></a>
   <a target="_blank" onclick="downloadimage()"></a>
   <a target="_blank" href="https://twitter.com/share?url==<?php echo $url; ?>"></a>
</body>
<script>
      function downloadimage() {
         var a = document.createElement('a');
         a.href = document.querySelector('img').src;
         a.download = "output.png";
         document.body.appendChild(a);
         a.click();
      }
   </script>
</html>