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

            buttons = document.getElementsByClassName("activatebutton");
            buttons[tablenumber-1].classList.add('hide');

            debuttons = document.getElementsByClassName("deactivatebutton");
            debuttons[tablenumber - 1].classList.remove("hide");
        }
    })
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

            buttons = document.getElementsByClassName("activatebutton");
            buttons[tablenumber-1].classList.remove("hide");

            debuttons = document.getElementsByClassName("deactivatebutton");
            debuttons[tablenumber-1].classList.add("hide");
        }
    })

}

setInterval(function(tablenumber) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: './checkifsomethinghappend',
        data: {},
        success: function (response) {

            // SHOWS THE RESPONSE OBJECT (drinks, bills) from the database)
            // console.log(JSON.parse(response));

            var serverResponse = JSON.parse(response);
            var drinksid = [];
            var billsid = [];
            var drinks = serverResponse.drinks;
            var bills = serverResponse.bills;

            for(var i = 0; i < drinks.length;i++)
            {
                drinksid.push(drinks[i].id);
            }

            for(var j = 0; j < bills.length;j++)
            {
                billsid.push(bills[j].id);
            }

            //SET DRINKICONS
            var drinkIcons = document.getElementsByClassName("drinkicon");
            for(var x = 1 ; x <= drinkIcons.length; x++)
            {
                drinksid.indexOf(x) > -1 ? drinkIcons[x-1].classList.remove("hide") : drinkIcons[x-1].classList.add("hide");
            }

            //SET BILLICONS
            var billIcons = document.getElementsByClassName("billicon");
            for(var y = 1; y <= billIcons.length; y++)
            {
                billsid.indexOf(y) > -1 ? billIcons[y-1].classList.remove("hide") : billIcons[y-1].classList.add("hide");
            }
        }
    })
}, 3000);