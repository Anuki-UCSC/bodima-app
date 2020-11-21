var end = new Date('11/14/2020 10:00 AM');

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;

function showRemaining() {
    var now = new Date();  // today
    var distance = end - now;
    if (distance < 0) {

        // clearInterval(timer);
        // document.getElementById('countdown').innerHTML = 'EXPIRED!';
        // end=end+84000;
        end.setDate(end.getDate()+1);

        return;
    }
    var days = Math.floor(distance / _day);
    var hours = Math.floor((distance % _day) / _hour);
    var minutes = Math.floor((distance % _hour) / _minute);
    var seconds = Math.floor((distance % _minute) / _second);

    // document.getElementById('countdown').innerHTML = days + 'days ';
    document.getElementById('countdown').innerHTML = hours + 'H ';
    document.getElementById('countdown').innerHTML += minutes + 'M ';
    document.getElementById('countdown').innerHTML += seconds + 'S';
}

timer = setInterval(showRemaining, 100);