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
        url: './settabletononactive',
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
setInterval(function() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: './checkifsomethinghappend',
        data: {},
        success: function (response) {
            var serverresponse=JSON.parse(response);
            var drinksid=[];
            var billsid=[];
            var drinks=serverresponse.drinks;
            var bills=serverresponse.bills;
            for(var i=0; i<drinks.length;i++)
            {
                drinksid.push(drinks[i].id);
            }
            for(var j=0; j<bills.length;j++)
            {
                billsid.push(bills[j].id);
            }
            //SET DRINKICONS
            var drinkicons=document.getElementsByClassName("drinkicon");

            for(var x=1;x<drinkicons.length++;x++)
            {
                if(drinksid.indexOf(x) > -1)
                {
                    drinkicons[x-1].classList.remove("hide");
                }
                else
                {
                    //drinkicons[x-1].classList.add("hide");
                }
            }
            //SET BILLICONS
            var billicons=document.getElementsByClassName("billicon");

            for(var y=1;y<billicons.length++;y++)
            {
                if(billsid.indexOf(y) > -1)
                {
                    billicons[y-1].classList.remove("hide");
                }
                else
                {
                    //drinkicons[y-1].classList.add("hide");
                }
            }
            console.log(billsid);
        }
    })
}, 3000);
