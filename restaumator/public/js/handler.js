
    var timer = new Timer();
    timer.start({precision: 'seconds'});
    timer.addEventListener('secondsUpdated', function (e) {

        $('#gettingValuesExample .hours').html(timer.getTimeValues().hours);
        $('#gettingValuesExample .minutes').html(timer.getTimeValues().minutes);
        $('#gettingValuesExample .seconds').html(timer.getTimeValues().seconds);

        $('#gettingTotalValuesExample .hours').html(timer.getTotalTimeValues().hours);
        $('#gettingTotalValuesExample .minutes').html(timer.getTotalTimeValues().minutes);
        $('#gettingTotalValuesExample .seconds').html(timer.getTotalTimeValues().seconds);
    });
