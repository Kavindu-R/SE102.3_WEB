let r = parseFloat(prompt("Enter Radius"));

let cur = 2 * Math.PI * r;
let area = Math.PI * r * r;

cur = cur.toFixed(2);
area = area.toFixed(2);
alert("The Circumference is: " + cur + "\nArea is: " + area);
