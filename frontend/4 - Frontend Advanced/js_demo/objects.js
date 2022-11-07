let students = [];

let s1 = {
  name: "khalid",
  age: 20,
};
// students.push(s1);

function Person(studentName, stuedentAge) {
  this.name = studentName;
  this.age = stuedentAge;
  this.speak = function () {
    console.log("Hi, my age is " + this.age);
  };
  this.changeAge = function (newAge) {
    this.age = newAge;
  };
}

let khalid = new Person("Khalid", 20);
let ahmad = new Person("Ahamed", 30);
