// =========== ES6 Demo ==============


// Arrow Functions
function oldWay() {
    console.log(1);
}

const modernFunction = () => {
    console.log(1);
}

// eg2
function example2(a, b, c) {
    console.log(1);
}

const example3 = (a, b, c) => {
    console.log(1);
}

// eg3
function example4() {
    return "Old way";
}

const example5 = () => "ES6 syntax";
example5();

// eg4
setTimeout(function () {
    console.log(1);
}, 2000);

setTimeout(() => {
    console.log(1);
}, 2000);


// Concatination
let testName = "Mike";
let sentence = "Hi " + testName;

// backticks `` not single quotations ''
sentence = `Hi ${testName}`;
sentence = `4 + 5 = ${4+5}`;