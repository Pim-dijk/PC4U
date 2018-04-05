
$(document).ready(function(){
    $('.search-box-artName input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdownName = $(".result-name");
        if(inputVal.length){
            $.get("backend-search.php", {artName: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdownName.html(data);
            });
        } else{
            resultDropdownName.empty();
        }
    });

    $('.search-box-catName input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdownCat = $(".result-cat");
        if(inputVal.length){
            $.get("backend-search.php", {catName: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdownCat.html(data);
            });
        } else{
            resultDropdownCat.empty();
        }
    });

    // Set search input value on click of result item
    $(document).on("click", ".result-name p", function(){
        $(this).parents(".search-box-artName").find('input[type="text"]').val($(this).text());
        $(this).parent(".result-name").empty();
    });

    // Set search input value on click of result item
    $(document).on("click", ".result-cat p", function(){
        $(this).parents(".search-box-catName").find('input[type="text"]').val($(this).text());
        $(this).parent(".result-cat").empty();
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