window.addEventListener('DOMContentLoaded', () => {

    let sectionSelect = document.getElementById('section-select');
    let subSectionSelect = document.getElementById('sub-section-select');
    let folderName = document.getElementById('folder-name');
    let folderLink = document.getElementById('folder-link');
    let videoLink = document.getElementById('video-link');
    let videoName = document.getElementById('video-name');
    let foldersCheck = document.getElementById('folders-check');
    let videoCheck = document.getElementById('video-check');
    let submitBtn = document.getElementById('submit');
    let modalSucces = document.querySelector('.done');
    let modalError = document.querySelector('.error');
    let overlay = document.querySelector('.dark-overlay');
    let spiner = document.querySelector('.full-screen-container');
    let form = document.getElementById('form');

    sectionSelect.addEventListener("change", (event) => {
        let options = document.querySelectorAll('.folder-option');
        let selectValue = event.target.value;

        if(selectValue == 0){
            submitBtn.setAttribute("disabled", "");
        }

        options.forEach(el => {
            el.removeAttribute("hidden");
            if(el.value.indexOf(selectValue) == -1){
                el.setAttribute("hidden", "");
            }
        });
    });

    foldersCheck.addEventListener("change", (event) => {
        if(event.target.checked){
            videoCheck.checked = false;
            folderLink.removeAttribute("disabled");
            folderName.removeAttribute("disabled");
            videoLink.setAttribute("disabled", "");
            videoName.setAttribute("disabled", "");
            videoLink.value = "";
            videoName.value = "";
        }
        else{
            videoCheck.checked = true;
            videoLink.removeAttribute("disabled");
            videoName.removeAttribute("disabled");
            folderLink.setAttribute("disabled", "");
            folderName.setAttribute("disabled", "");
            folderLink.value = "";
            folderName.value = "";
        }
    });

    videoCheck.addEventListener("change", (event) => {
        if(event.target.checked){
            foldersCheck.checked = false;
            videoLink.removeAttribute("disabled");
            videoName.removeAttribute("disabled");
            folderLink.setAttribute("disabled", "");
            folderName.setAttribute("disabled", "");
            folderLink.value = "";
            folderName.value = "";
        }
        else{
            foldersCheck.checked = true;
            folderLink.removeAttribute("disabled");
            folderName.removeAttribute("disabled");
            vodeoLink.setAttribute("disabled", "");
            vodeoName.setAttribute("disabled", "");
            videoLink.value = "";
            videoName.value = "";
        }
    });

    folderName.addEventListener("input", () => {
        if((folderName.value.length >= 2) && ((folderLink.value.length >= 2)) && sectionSelect.value != '0' && subSectionSelect.value != '0') submitBtn.removeAttribute("disabled");
        else submitBtn.setAttribute("disabled", "");
    });
    folderLink.addEventListener("input", () => {
        if((folderName.value.length >= 2) && ((folderLink.value.length >= 2)) && sectionSelect.value != '0' && subSectionSelect.value != '0') submitBtn.removeAttribute("disabled");
        else submitBtn.setAttribute("disabled", "");
    });
    videoName.addEventListener("input", () => {
        if((videoName.value.length >= 2) && ((videoLink.value.length >= 2)) && sectionSelect.value != '0' && subSectionSelect.value != '0') submitBtn.removeAttribute("disabled");
        else submitBtn.setAttribute("disabled", "");
    });
    videoLink.addEventListener("input", () => {
        if((videoName.value.length >= 2) && ((videoLink.value.length >= 2)) && sectionSelect.value != '0' && subSectionSelect.value != '0') submitBtn.removeAttribute("disabled");
        else submitBtn.setAttribute("disabled", "");
    });

    subSectionSelect.addEventListener("change", () => {
        if(subSectionSelect.value == 0 || (videoCheck.checked && (videoLink.value.length < 2 || videoName.value.length < 2)) || (foldersCheck.checked && (folderLink.value.length < 2 || folderName.value.length < 2))) submitBtn.setAttribute("disabled", "");
        else submitBtn.removeAttribute("disabled");
    })



    async function sendData(){
        let formData = new FormData(form);
        if(foldersCheck.checked) {
            if((folderName.value.length >= 2) && ((folderLink.value.length >= 2))){
                formData.append("target", "folder");
                try {
                    return await fetch('../php/helpers/add-data.php', {
                        method: 'POST',
                        body: formData,
                        mode: 'no-cors',
                        
                    });
                } catch (error) {
                    console.log("Проблема с fetch");
                    return {
                        ok:false
                    }
                }
            }
        }
        else{
            formData.append("target", "video");
            if((videoName.value.length >= 2) && ((videoLink.value.length >= 2))){
                try {
                    return await fetch('../php/helpers/add-data.php', {
                        method: 'POST',
                        body: formData,
                        mode: 'no-cors'
                    });
                } catch (error) {
                    console.log("Проблема с fetch");
                    return {
                        ok:false
                    }
                }
            }
        }
    }

    document.querySelectorAll('.close-mod').forEach((el) => {
        el.addEventListener('click', () => {
            modalError.classList.remove('active');
            modalSucces.classList.remove('active');
            overlay.classList.remove('active');
        })

    });

    document.querySelectorAll('.btn-close').forEach((el) => {
        el.addEventListener('click', () => {
            modalError.classList.remove('active');
            modalSucces.classList.remove('active');
            overlay.classList.remove('active');
        })

    });

    submitBtn.addEventListener("click", async (event) => {
        event.preventDefault();
        spiner.classList.add('active');
        overlay.classList.add('active');
        let response = await sendData();
        if(response.ok){
            spiner.classList.remove('active');
            modalSucces.classList.add('active');
        }
        else{
            spiner.classList.remove('active');
            modalError.classList.add('active');
        }
    });

    
})