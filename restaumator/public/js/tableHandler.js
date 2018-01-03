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
            buttons[tablenumber - 1].classList.remove("hide");

            debuttons = document.getElementsByClassName("deactivatebutton");
            debuttons[tablenumber - 1].classList.add("hide");
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
            for(var x = 1 ; x < drinkIcons.length; x++)
            {
                drinksid.indexOf(x) > -1 ? drinkIcons[x-1].classList.remove("hide") : drinkIcons[x-1].classList.add("hide");
                window.onload = function () {

                    var seconds = 00;
                    var tens = 00;
                    var appendTens = document.getElementById("tens")
                    var appendSeconds = document.getElementById("seconds")
                    var buttonStart = document.getElementById('button-start');
                    var buttonStop = document.getElementById('button-stop');
                    var buttonReset = document.getElementById('button-reset');
                    var Interval ;

                    buttonStart.onclick = function() {
                        clearInterval(Interval);
                        Interval = setInterval(startTimer, 10);
                    }

                    buttonStop.onclick = function() {
                        clearInterval(Interval);
                    }


                    buttonReset.onclick = function() {
                        clearInterval(Interval);
                        tens = "00";
                        seconds = "00";
                        appendTens.innerHTML = tens;
                        appendSeconds.innerHTML = seconds;
                    }

                    function startTimer () {
                        tens++;

                        if(tens < 9){
                            appendTens.innerHTML = "0" + tens;
                        }

                        if (tens > 9){
                            appendTens.innerHTML = tens;

                        }

                        if (tens > 99) {
                            console.log("seconds");
                            seconds++;
                            appendSeconds.innerHTML = "0" + seconds;
                            tens = 0;
                            appendTens.innerHTML = "0" + 0;
                        }

                        if (seconds > 9){
                            appendSeconds.innerHTML = seconds;
                        }

                    }

                }
            }

            //SET BILLICONS
            var billIcons = document.getElementsByClassName("billicon");
            for(var y = 1; y < billIcons.length; y++)
            {
                billsid.indexOf(y) > -1 ? billIcons[y-1].classList.remove("hide") : billIcons[y-1].classList.add("hide");
            }
        }
    })
}, 3000);