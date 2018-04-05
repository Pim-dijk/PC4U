
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });

    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });

    // Change category labels on changing the category from dropdown
    $("#Category").on("change", function () {
        var selected_id = $(this).val();
        var resultLabel1 = $(".propertyLabel1");
        var resultLabel2 = $(".propertyLabel2");

        $.get("backend-search.php", {cat: selected_id}).done(function (data) {
            //data is all the raw html from the file
            // console.log(data);
            var array = data.split(",");
            resultLabel1.html(array[0]);
            resultLabel2.html(array[1]);
        })

    });

});