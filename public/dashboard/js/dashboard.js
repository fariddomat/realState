$(document).ready(function() {
    //delete
    $("tbody").on("click",".delete",function(e) {
        var that = $(this);
        e.preventDefault();
        var n = new Noty({
            text: "Confirm Delete",
            type: "warning",
            killer: true,
            buttons: [
                Noty.button("Yes", "btn btn-success me-2", function() {
                    that.closest("form").submit();
                }),

                Noty.button("No", "btn btn-primary me-2", function() {
                    n.close();
                })
            ]
        });

        n.show();
    }); //end of delete
}); //end of ready
