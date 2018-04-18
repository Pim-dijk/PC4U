function filter_retour(value) {
    let rows = document.getElementById('numberOfRows').value;
    if (value == "Alles") {
        for (let i = 0; i < rows; i++) {
            let divID = "retournerenDiv-" + i;
            let div = document.getElementById(divID);

            div.style.display = "block";
        }
    } else {
        for (let i =0; i < rows; i++) {
            let divID = "retournerenDiv-" + i;
            let div = document.getElementById(divID);

            let statusElementID = "status-" + i;
            let statusValue = document.getElementById(statusElementID).innerHTML;

            if (statusValue == value) {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    }
}