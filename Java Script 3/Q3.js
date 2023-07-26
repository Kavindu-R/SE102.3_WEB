function phone() {
    if(!Number.isInteger(document.form.phone_num.value)){
        alert("Phone number Should only be numbers");
    }
    if(document.form.phone_num.length < 10) {
        alert("Phone Number Should Contain 10 Numbers");
    }
}
