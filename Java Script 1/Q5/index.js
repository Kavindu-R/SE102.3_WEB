let input = parseInt(prompt("Enter Day Number !:"));
const days = [
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
  "Sunday",
];
if (input < 1 || input > 7) {
  document.write("Invalid Day Input!");
} else {
  document.write("The " + input + " day is: " + days[input - 1]);
}
