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
                }
            })
    }
