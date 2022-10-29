// Security Gaurd, allows people to enter to a party, only people between 18 and 35 years old can enter the party
const minAge = 18;
const maxAge = 35;
let userAge;

// Loop through number of people.
do {
  // ask each user about his/her age.
  userAge = prompt("How old are you?");
  userAge = parseInt(userAge);
  if (isNaN(userAge)) {
    continue; // skipped the loop if the user entered words.
  }
  // if younger than 18, print: you are too young
  if (userAge < minAge) {
    displayMsg("You are too young!");
  } else if (userAge > maxAge) {
    // if older than 35, print: you are too old
    displayMsg("You are too old!");
  } else {
    displayMsg(
      "Hi " + prompt("What is your name?") + ", welcome to the party!"
    );
  }
  // if between 18 and 35, ask the user about his/her name and welcome the user to the party.
} while (confirm("is there anyone else?"));

function displayMsg(msg) {
  alert(msg);
}
