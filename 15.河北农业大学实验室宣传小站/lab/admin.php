<html>
<head>
<script type="text/javascript">
function disp_prompt()
  {
  var name=prompt("Please enter your name","")
  if (name=='吕雪杰')
    {
    document.write("Hello " + name + "!")
    }
    else{
    	alert("错误的回答");
    }
  }
</script>
</head>
<body>

<input type="button" onclick="disp_prompt()"
value="Display a prompt box" />

</body>
</html>