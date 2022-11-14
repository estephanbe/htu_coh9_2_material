$(function () {
    $('.card-wrapper').click(function () {
        // -> div.card-wrapper -> [div.card] -> div.card -> form -> trigger
        $(this).children().first().children('form').trigger('submit');
    });
});