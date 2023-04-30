
$(document).ready(function(){
    $("#search").keyup(function(){
        var searchText = $(this).val();

        if(searchText)
        {
            $('.all-data').hide();
            $('.search-data').show();
        }
        else{
            $('.all-data').show();
            $('.search-data').hide();
        }

        $.ajax({
            url: './search_deliveryperson',
            type: 'POST',
            data: {search: searchText},
            success: function(response){
                console.log(response);
                $("#details").html(response);
            }
        });
    });

    $("#btn-search").click(function(event){
        event.preventDefault(); //prevent form submission
        var searchText = $("#search").val();

        $.ajax({
            url: './search_deliveryperson',
            type: 'POST',
            data: {search: searchText},
            success: function(response){
                console.log(response);
                $("#details").html(response);
            }
        });
    });
});
