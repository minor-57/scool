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
        el.addEventListener('click', function (event) {
            document.querySelector('.second-stage').classList.add('stage-selected');
            const path = event.currentTarget.dataset.path;
            document.querySelector('.second-stage').removeAttribute("data-path")
            document.querySelector('.second-stage').setAttribute("data-path", path)


        })
    })
    document.querySelectorAll('.second-stage-btn').forEach(function (el) {
        el.addEventListener('click', function (event) {
            document.querySelector('.third-stage').classList.add('stage-selected');



        })
    })
    document.querySelectorAll('.third-stage-btn').forEach(function (el) {
        el.addEventListener('click', function () {
            document.querySelector('.third-stage').classList.add('stage-selected');


        })
    })
    document.querySelector('.second-stage').addEventListener('click', function (event) {
        const path = event.currentTarget.dataset.path;
        document.querySelectorAll('.tab-block').forEach(function (el) {
            el.classList.remove('active')
        })
        document.querySelector(`[data-target="${path}"]`).classList.add('active');
        document.querySelector('.third-stage').classList.remove('stage-selected')
        document.querySelector('.second-stage').classList.add('stage-selected');
    })
    document.querySelector('.first-stage').addEventListener('click', function () {
        document.querySelector('.second-stage').classList.remove('stage-selected');
        document.querySelector('.third-stage').classList.remove('stage-selected');
        document.querySelectorAll('.tab-block').forEach(function (el) {
            el.classList.remove('active')
        })
        document.querySelector('.subject-base').classList.add('active');
    })
})

