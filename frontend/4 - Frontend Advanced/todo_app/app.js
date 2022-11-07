const taskInput = $('#task');
const add = $('#add');
const taskContainer = $('#tasks-container');

taskInput.focus();

let counter = 1;
add.click(function () {
    let task = taskInput.val();

    if (task == "") {
        alert('You need to enter a task to proceed!');
        return;
    }

    // check if the item is already existed in the app. 
    // Get all items
    let tasks = $('.task p');
    // loop through all items
    let taskSwitch = false;
    tasks.each(function () {
        // check if the current item in the loop equals the new item.
        if ($(this).text() == task) {
            alert("Task already exists!");
            taskSwitch = true;
        }
    });

    if (taskSwitch) {
        return;
    }

    taskContainer.append(`
    <div data-id="${counter}" class="task w-25 m-auto d-flex justify-content-between align-items-between mb-4 border-bottom p-2">
        <input type="checkbox">
        <p class="m-0 d-flex align-items-center">${task}</p>
        <button class="btn btn-danger" type="button">
            <i class="fa-solid fa-trash"></i>
        </button>
    </div>
    `);

    $(`div[data-id="${counter}"] input`).change(function () {
        // if ($(this).parent().hasClass('completed')) {
        //     $(this).parent().removeClass('completed');
        // } else {
        //     $(this).parent().addClass('completed');
        // }
        $(this).parent().toggleClass('completed');
    });

    $(`div[data-id="${counter}"] button`).click(function () {
        $(this).parent().hide('slow', function () {
            $(this).remove();
        });

    });

    taskInput.val('');
    taskInput.focus();
    counter++;
});