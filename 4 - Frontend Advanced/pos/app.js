// $(document).ready(function () {

// });

$(function () {
    const items = $('#items');
    const itemQuantity = $('#items-quantity');
    const itemPrice = $('#items-price');
    const add = $('#add');
    const table = $('tbody');

    let counter = 1;
    let total = 0;

    add.click(function (e) {
        e.preventDefault();
        let item = items.val();
        let p = itemPrice.val();
        let q = itemQuantity.val();

        if (item == "" || p == "" || q == "") {
            alert('Make sure that you have entered all the information');
            return;
        }

        table.append(`
        <tr>
            <td>${counter}</td>
            <td>${item}</td>
            <td>${q}</td>
            <td>${p}</td>
            <td>${q * p}</td>
        </tr>
       `);

        total += q * p;
        $('#total-sales').text(total);

        counter++;
        $('#user-contorllers').trigger('reset');
    });
});