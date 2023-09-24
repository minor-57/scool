window.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.btn-tabs').forEach(function (el) {
        el.addEventListener('click', function (event) {
            const path = event.currentTarget.dataset.path;
            document.querySelectorAll('.tab-block').forEach(function (el) {
                el.classList.remove('active')
            })
            document.querySelector(`[data-target="${path}"]`).classList.add('active');
        })
    })

    document.querySelectorAll('.first-stage-btn').forEach(function (el) {
        el.addEventListener('click', function () {
            document.querySelector('.first-stage').classList.add('stage-selected');


        })
    })
    document.querySelectorAll('.second-stage-btn').forEach(function (el) {
        el.addEventListener('click', function () {
            document.querySelector('.second-stage').classList.add('stage-selected');


        })
    })
    document.querySelectorAll('.third-stage-btn').forEach(function (el) {
        el.addEventListener('click', function () {
            document.querySelector('.third-stage').classList.add('stage-selected');


        })
    })

})
