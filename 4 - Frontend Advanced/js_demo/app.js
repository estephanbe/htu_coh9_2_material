/*
JS Demo
Variables section. 
*/
let sum = 3;
const pi = 3.141789128939173298127392139; // this is constant
// console.log(pi);
// console.log(hi);

// ========================== JS Data Types
let intVar = 2; // integer
let floatVar = 2.5; // float
let StringVar = "String"; // string
let boolVar = true; // boolean: true or false
let arrVar = [2, "str", 2.5, true];
let objVar = { name: "Ahmad", age: 22 };
let nullVal = null; // this is un empty variable
let undefVar; // this is equal to let undefVar = undefined;

let a = 1;
let b = a;
a = a + 1;

// ========================== Mathmatical Operators
let addVar = 1 + 1; // addition
let subVar = 1 - 1; // substraction
let MulVar = 1 * 1; // multiplication
let divVar = 1 / 1; // divide
let modVar = 4 % 2; // Modulus

let value1 = 1;
// value1 = value1 + 1;
value1++;
// value1 = value1 - 1;
value1--;

// ========================== Assignment Operators
let assignmentVar = 1 + 1; // 2
// assignmentVar = assignmentVar + 3;
assignmentVar += 3; // 5
assignmentVar -= 2; // 3
assignmentVar *= 2; // 6
assignmentVar /= 2; // 3

// let $naMe223l_kj$sdfl
// let name1 = 1;
// let Name1 = 2;

// ========================== Comparision Operators (Always return bool)
let comValue = 3;

let com1 = comValue < 5; // true
let com2 = comValue > 5; // false
let com3 = comValue >= 5; // false
let com4 = comValue <= 5; // true

let com5 = comValue == 3; // true
let com6 = comValue != 3; // false

let com7 = comValue === "3"; // false
let com8 = comValue !== "3"; // true

// ========================== Logical Operators (Always return bool)
let comResult = com1 && com2; // true && false = false;

let log1 = true && true; // true
let log2 = true && false; // false
let log3 = false && true; // false
let log4 = false && false; // false

let log5 = true || true; // true
let log6 = true || false; // true
let log7 = false || true; // true
let log8 = false || false; // false

let log9 = !true; // false
let log10 = !false; // true

let studentAge = 22;
let studentStatus = studentAge > 22 ? "Eligible" : "Not Eligible";

// ========================== String operator
let sentence = " is eating";
let gender = null;
gender = "he";
// console.log(gender + sentence); // he is eating

// console.log("5" + 2 + 2); // "522"

// ========================== Conditional statement
// if
// else if
// else

// switch
let numerical_day = 0;

// using if
// if (numerical_day == 0) {
//   day = "Sunday";
// } else if (numerical_day == 1) {
//   day = "Monday";
// } else if (numerical_day == 2) {
//   day = "Tuesday";
// } else if (numerical_day == 3) {
//   day = "Wednesday";
// } else if (numerical_day == 4) {
//   day = "Thursday";
// } else if (numerical_day == 5) {
//   day = "Friday";
// } else if (numerical_day == 6) {
//   day = "Saturday";
// }

switch (numerical_day) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case 6:
    day = "Saturday";
}

// Nested if
if (studentAge > 22) {
  if (studentAge == 22) {
    console.log("Make sure to provide more details..");
  } else {
    console.log("We already have your details..");
  }
}

// ========================== Conditional statement

let arr1 = [1, 2, 3];
// (3) [1, 2, 3]
// 0: 1
// 1: 2
// 2: 3
// console.log(arr1[0] + 1);
// console.log(arr1[1] + 1);
// console.log(arr1[2] + 1);
for (let index = 0; index < arr1.length; index++) {
  //   console.log(arr1[index] + 1);
}
// index = 0;
// 0 < 3 => 2 => index++ (index = index + 1)
// 1 < 3 => 3 => index++
// 2 < 3 => 4 => index++
// 3 < 3 => break the loop (stop excution)

let namesArr = ["Ahmad", "Khalid", "Roy"];
// namesArr[0]
// 'Ahmad'

// print the numbers from 1 to 5
let arr2 = [1, 2, 3, 4, 5];
// infinite loop
// for (let x = 5; x > 0; x--) {
//   console.log(x);
// }
// x = 0
// 0 < 5 => 0 + 1 (1) => x = 1
// 1 < 5 => 1 + 1 (2) => x = 2
// 2 < 5 => 2 + 1 (3) => x = 3
// 3 < 5 => 3 + 1 (4) => x = 4
// 4 < 5 => 4 + 1 (5) => x = 5
// 5 < 5 => break the loop

let counter = 0;
while (counter < 5) {
  console.log("this is from while loop.." + counter);
  counter++;
}
// counter = 0;
// 0 < 5 => print => counter++ (1)
// 1 < 5 => print => counter++ (2)
// 2 < 5 => print => 3
// 3 < 5 => print => 4
// 4 < 5 => print => 5
// 5 < 5 => break the loop!

console.log("============= do while");
counter = 5;
do {
  console.log("this is from do while loop.." + counter);
  counter++;
} while (counter < 5);

let arr3 = [1, 2, 3, 4, 5, 6];
for (let i = 0; i < arr3.length; i++) {
  if (arr3[i] % 2 == 0) {
    continue; // skip to the next iteration
    // break; stop the excution of the loop
  }
  console.log(arr3[i]);
}
