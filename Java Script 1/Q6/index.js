function google() {
  input = prompt("Yes or No");
  input = input.toUpperCase();

  if (input === "YES") {
    window.open("https://google.com");
  } else if (input === "NO") {
    alert("You decided to stay!");
  } else {
    alert("Invalid Input!");
  }
}
