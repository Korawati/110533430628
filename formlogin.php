<head>
<head>
<title>form login untuk Praktikum</title>
<script>
function cek(a) {
al = /^[A-Za-z]{1,}$/; //Cek validitas harus huruf
return al.test(a);
}
function val(){
var x=document.forms["myForm"]["nama"].value;
var y=document.forms["myForm"]["pass"].value;
if (x==null || x=="" && y==null || y=="") //cek tidak boleh kosong
  {
  alert("Username atau Password Belum diinsi");
  myForm.nama.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ //pemanggilan fungsi cek
	alert ('Username Dan Password harus dalam huruf..!!');
	return false;
}}
</script>
</head>
<body bgcolor="#A0DBFA">
<div id="apDiv1" align="left">
    <label>Login</label>
  </div>
<div id="apDiv2" align="left">
   <form name="myForm" method="POST" action="validasi.php" onSubmit="return val()">
    <label>Username :</label>
    <br>
    <input type="text" name="nama" id="nama" width="200" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>">
    <br><br>
    <label>Password :</label>
    <br>
    <input type="password" name="pass" id="pass" width="200">
    <br><br>
    <input type="submit" name="Login" value="Login">
    <input type="reset" name="Reset" value="Reset">
  </form>
</div>
</body>
</html>