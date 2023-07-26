function submit() {
  if (document.form.fname.value == "") {
    alert("Enter First Name!");
  } else if (document.form.lname.value == "") {
    alert("Enter Last Name!");
  } else if (document.form.lname.value == "") {
    /*...................................*/ 
  } else if (!document.form.gerder.clecked) {
    alert("Enter Your Gender!");
  } else if (!document.form.gerder.clecked) {
    /*...................................*/
  } else if (document.form.mail.value == "") {
    alert("Enter your email!");
  } else if (document.form.phone.value == "") {
    alert("Enter Phone numebr!");
  } else if (document.form.password.value == "") {
    alert("Enter The password!");
  } else if (document.form.rt_password.value == "") {
    alert("Retype the passwod!");
  } else if (!document.form.agree.checked) {
    alert("Error Agree to the turms!");
  }
}

