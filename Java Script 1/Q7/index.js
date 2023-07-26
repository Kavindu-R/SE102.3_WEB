let cal_mark = prompt("Calculation");
let num1 = parseInt(prompt("Number 1"));
let num2 = parseInt(prompt("Number 2"));
let out = 0;

if(cal_mark == '+') {
    out = num1 + num2;
}
else if (cal_mark == '-') {
    out = num1 - num2;
}
else if (cal_mark == '/') {
    out = num1 / num2;
}
else if (cal_mark == '*') {
    out = num1 * num2;
}
else {
    alert('Enter Valid Calculation Input');
}

alert(num1+ cal_mark+ num2+ ' is '+ out);

