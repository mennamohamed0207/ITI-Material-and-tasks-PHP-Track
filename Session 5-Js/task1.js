// Create a function playFizzBuzz that performs the following steps:
function playFizzBuzz() {
  // Retrieve the number entered by the user from the input field.
  var number = prompt("Enter a number: ");
  // Determine the result based on the following rules:
  // If the number is divisible by 15, display "FizzBuzz".
  // If the number is divisible by 3, display "Fizz".
  // If the number is divisible by 5, display "Buzz".
  // If none of these conditions are met, display the number itself.
  // Display the result in the designated result div.
  if (number % 15 == 0) {
    document.write("FizzBuzz");
  } else if (number % 3 == 0) {
    document.write("Fizz");
  } else if (number % 5 == 0) {
    document.write("Buzz");
  } else {
    document.write(number);
  }
}
playFizzBuzz();
// Retrieve the number entered by the user from the input field.
// Determine the result based on the following rules:
