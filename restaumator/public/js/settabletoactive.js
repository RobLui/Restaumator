function ActivateTable(tablenumber)
    {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: './settabletoactive',
            data: {table: tablenumber},
            success: function() {
                console.log("Table Activated!");
                buttons=document.getElementsByClassName("activatebutton");
                buttons[tablenumber-1].classList.add('hide');
                debuttons = document.getElementsByClassName("deactivatebutton");
                debuttons[tablenumber - 1].classList.remove("hide");
            }
        })
        //
        // $('.restauranttable').click(function () {
        //     $(this).addClass("blink_text");
        // });
    }
function DeActivateTable(tablenumber) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: 'settabletononactive',
        data: {table: tablenumber},
        success: function () {
            console.log("Table De-Activated!");
            buttons = document.getElementsByClassName("activatebutton");
            buttons[tablenumber - 1].classList.remove("hide");
            debuttons = document.getElementsByClassName("deactivatebutton");
            debuttons[tablenumber - 1].classList.add("hide");
        }
    })

}
