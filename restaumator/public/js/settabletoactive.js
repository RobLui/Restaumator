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
            }
        })
        //
        // $('.restauranttable').click(function () {
        //     $(this).addClass("blink_text");
        // });
    }
