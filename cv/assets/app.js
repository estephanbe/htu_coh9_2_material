$(function () {
    const next = $('#next');
    const back = $('#back');
    const eduBtn = $('#eduBtn');
    const workingBtn = $('#workingBtn');

    let currentDiv = 1;
    let currentInstitute = 1;
    let currentWorkingExp = 1;

    next.click(function (e) {
        e.preventDefault();

        if (currentDiv == 1) {
            back.removeClass('d-none');
            back.parent().removeClass('justify-content-end');
            back.parent().addClass('justify-content-between');
        } else if (currentDiv == 4) {
            next.text('Submit');
        } else if (currentDiv == 5) {
            $('form').submit();
        }

        $(`.cv-info-${currentDiv} *`).hide(800);
        $(`.cv-info-${currentDiv}`).animate({ //1
            width: 0,
            opacity: 0
        }, 1000, function () {
            $(`.cv-info-${currentDiv++}`).hide();
            $(`.cv-info-${currentDiv}`).show();
            $(`.cv-info-${currentDiv}`).animate({ //2
                width: '100%',
                opacity: 1
            }, 1000);
        });
    });

    back.click(function (e) {
        e.preventDefault();

        if (currentDiv == 2) {
            back.addClass('d-none');
            back.parent().addClass('justify-content-end');
            back.parent().removeClass('justify-content-between');
        } else if (currentDiv == 5) {
            next.text('Next');
        }

        $(`.cv-info-${currentDiv}`).animate({ //1
            width: 0,
            opacity: 0
        }, 1000, function () {
            $(`.cv-info-${currentDiv--}`).hide();
            $(`.cv-info-${currentDiv} *`).show();
            $(`.cv-info-${currentDiv}`).show();
            $(`.cv-info-${currentDiv}`).animate({ //2
                width: '100%',
                opacity: 1
            }, 1000);
        });
    });

    eduBtn.click(function (e) {
        e.preventDefault();
        currentInstitute++;
        $('#education-section').append(`
        <div class="mb-3">
            <label for="institute-${currentInstitute}" class="form-label">Institute</label>
            <input type="text" class="form-control" id="institute-${currentInstitute}" name="institute[]">
        </div>
        <div class="mb-3">
            <label for="gdate-${currentInstitute}" class="form-label">Graduation Date</label>
            <input type="date" class="form-control" id="gdate-${currentInstitute}" name="gdate[]">
        </div>
        `);
    });

    workingBtn.click(function (e) {
        e.preventDefault();
        currentWorkingExp++;
        $('#working-experience-section').append(`
        <div class="mb-3">
            <label for="company-${currentWorkingExp}" class="form-label">Company</label>
            <input type="text" class="form-control" id="company-${currentWorkingExp}" name="company[]">
        </div>
        <div class="mb-3">
            <label for="sdate-${currentWorkingExp}" class="form-label">Starting Date</label>
            <input type="date" class="form-control" id="sdate-${currentWorkingExp}" name="sdate[]">
        </div>
        `);
    });
});