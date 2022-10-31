const aName = document.getElementById('a-name');
const aImage = document.getElementById('a-image');
const aDiet = document.getElementById('a-diet');
const aDataList = document.getElementById('a-data-list');
let animalObj;

const animalData = fetch('https://zoo-animal-api.herokuapp.com/animals/rand');
animalData
    .then(response => {
        return response.json();
    })
    .then(function (data) {
        animalObj = data;
        console.log(animalObj);
        aName.textContent = animalObj.name;
    });
// animalObj: undefined
console.log(animalObj); // undefined
aName.textContent = animalObj.name; // error