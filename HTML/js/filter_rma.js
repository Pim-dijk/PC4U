function filter_rma(value) {
    var numberOfRows = document.getElementById('totalRows').value;

    if (value == "Alles") {
        for (let i = 0; i < numberOfRows; i++) {
            let divID = "RMAoverzicht-" + i;
            let div = document.getElementById(divID);

            div.style.display = "block";
        }
    } else {
        for (let i = 0; i < numberOfRows; i++) {
            let divID = "RMAoverzicht-" + i;
            let div = document.getElementById(divID);

            let statusElementID = "status-" + i;
            let statusValue = document.getElementById(statusElementID).innerHTML;

            if (value == statusValue) {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    }
}