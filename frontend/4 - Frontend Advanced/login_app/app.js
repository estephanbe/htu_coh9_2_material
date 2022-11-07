const email = "test@test.com";
const password = "123";

let queryStrings = new URLSearchParams(window.location.search);
let providedEmail = queryStrings.get("email");
let provdiedPassword = queryStrings.get("password");

if (providedEmail == email && provdiedPassword == password) {
  // redirect to google.com
  setTimeout(function () {
    window.location.href = "http://google.com";
  }, 3000);
} else {
  // alert incorrect username or password
  alert("incorrect email or password");
}
