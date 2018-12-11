<html>
<head>
  <style>
  table,td,th{
    border: 1px solid black;
    border-collapse: collapse;
    width: 35%;
    text-align: center;
    background-color: DarkGray;
  }
  td{
    padding: 20px;
  }
  table { margin: auto; }
  h2{text-align: center;}
  input,p { text-align:right; }
  </style>
</head>
<body>
  <form method="post">
    <table>
    <h2> SIMPLE CALCULATOR </h2>
    <tr>
      <td>First Number:</td>
      <td><input type="text" name="num1" /></td>
      <td rowspan="2"><input type="submit" name="submit" value="calculate"></td>
    </tr>
    <tr>
      <td>Second Number:</td>
      <td><input type="text" name="num2"/></td>
    </tr>
  </form>

<?php
if(isset($_POST['submit'])){
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  if(is_numeric($num1) and is_numeric($num1)){
    $add = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;
    echo <<<a
    <tr>
      <td>Addition</td><td><p>$add</p></td>
    </tr>
    <tr>
      <td>Subtraction</td><td><p>$sub</p></td>
    </tr>
    <tr>
      <td>Multiplication</td><td><p>$mul</p></td>
    </tr>
    <tr>
      <td>Division</td><td><p>$div</p></td>
    </tr>
    </table>
a;

  }
  else  {
    echo"<script type='text/javascript'> alert(' ENTER VALID NUMBER');</script>";
  }
}
?>
</body>
</html>
