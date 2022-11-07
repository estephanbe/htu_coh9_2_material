const aName = document.getElementById('a-name');
const aImage = document.getElementById('a-image');
const aDiet = document.getElementById('a-diet');
const aDataList = document.getElementById('a-data-list');
const refresh = document.getElementById('refresh');

const apiUrl = 'https://zoo-animal-api.herokuapp.com/animals/rand';

const animalData = fetch(apiUrl);
animalData
    .then(response => {
        return response.json();
    })
    .then(function (data) {
        updateCard(data);
    });

// {
//     "name": "Madagascar Giant Day Gecko",
//     "latin_name": "Phelsuma madagascariensis grandis",
//     "animal_type": "Reptile",
//     "active_time": "Diurnal",
//     "length_min": "0.75",
//     "length_max": "1",
//     "weight_min": "0.13",
//     "weight_max": "0.15",
//     "lifespan": "15",
//     "habitat": "Forest",
//     "diet": "Insects and other small animals, fruit, and honey",
//     "geo_range": "Northern Madagascar",
//     "image_link": "https://upload.wikimedia.org/wikipedia/commons/8/8b/Madagascar_giant_day_gecko_%28Phelsuma_grandis%29_Nosy_Komba.jpg",
//     "id": 109
// }

function updateCard(animal) {
    aName.textContent = animal.name;
    aImage.src = animal.image_link;
    aDiet.textContent = animal.diet;

    let list = {
        latin_name: animal.latin_name,
        animal_type: animal.animal_type,
        habitat: animal.habitat
    }

    // create html string
    let innerLis = '';
    // loop through the obj
    for (const listElement in list) {
        innerLis += `<li class="list-group-item">${list[listElement]}</li>`;
    }
    // innerLis += `<li class="list-group-item">${list.latin_name}</li>`;
    // innerLis += `<li class="list-group-item">${list[animal_type]}</li>`;
    // innerLis += `<li class="list-group-item">${list.habitat}</li>`;

    // add the html to the aDataList
    aDataList.innerHTML = innerLis;
}

refresh.addEventListener('click', function () {
    fetch(apiUrl)
        .then(response => {
            return response.json();
        })
        .then(function (data) {
            updateCard(data);
        });
});

// Foreach loop
function htuForEach() {
    let arr = [1, 2, 3];
    // for (let index = 0; index < arr.length; index++) {
    //     console.log(arr[index]);
    // }
    arr.forEach(element => {
        console.log(element);
    });
}