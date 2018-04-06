
$(document).ready(function(){

//Admin panel
//
    //Add a discounted item
    //
    //Dynamically load the search results from the database when the user types
    $('.search-box-artName input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val(); //Value of the typed text
        var resultDropdownName = $(".result-name"); //Found results to go in this dropdown element
        var catVal = $('#CategoryDiscount :selected').val(); //The selected category
        if(inputVal.length){
            $.get("backend-search.php", {artName: inputVal, catName: catVal}).done(function(data){
                // Display the returned data in browser
                resultDropdownName.html(data);
            });
        } else{
            resultDropdownName.empty();
        }
    });

    // Set search input value on clicking the result item
    $(document).on("click", ".result-name p", function(){
        $(this).parents(".search-box-artName").find('input[type="text"]').val($(this).text());
        $(this).parent(".result-name").empty();
    });

    //If the user selects a category from the dropdown, make the rest of the form visible
    //thus insuring that a category is always selected
    $('.search-box-catName').on("change", function () {
        $('#ArtNameHidden').removeClass('hidden');
        $('#DiscountHidden').removeClass('hidden');
        $('#ExpireHidden').removeClass('hidden');
        $('#discountSubmit').removeClass('hidden');
    });




//Edit product
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