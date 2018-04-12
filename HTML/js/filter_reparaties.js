function filterReparaties(value) {
    var totalRows = document.getElementById('totalRows').value;

    if (value == "Alles") {
        for (var j = 0; j < totalRows; j++) {
            var divsID = "reparatieRowDiv-" + j;
            var divs = document.getElementById(divsID);
            divs.style.display = "block";
        }
    } else {
        for (var i = 0; i < totalRows; i++) {
            var divID = "reparatieRowDiv-" + i;
            var div = document.getElementById(divID);
    
            var statusElementID = "status-" + i;
            var statusValue = document.getElementById(statusElementID).innerHTML;
            
            console.log(value + " " + statusValue);

            if (statusValue == value) {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    }
}