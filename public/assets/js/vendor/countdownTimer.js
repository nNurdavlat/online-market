function updateTimera() {

    future = Date.parse("april 23, 2027 11:30:00");
    now = new Date();
    diff = future - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;

    document.getElementById("dealend")
        .innerHTML =
        '<div class="dealend-timer"><div class="time-block"><div class="time">' + d + '</div><span class="day">Days</span></div>' +
        '<div class="time-block"><div class="time">' + h + '</div><span class="dots">:</span></div>' +
        '<div class="time-block"><div class="time">' + m + '</div><span class="dots">:</span></div>' +
        '<div class="time-block"><div class="time">' + s + '</div><span class="dots"></span></div></div>';

}

setInterval('updateTimera()', 1000);

function updateTimer1() {
    var date = $('.timer1').data('date');
    futuretime = Date.parse(date);
    now = new Date();
    diff = futuretime - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;

    let timers = document.querySelectorAll('.timer1')
    timers.forEach((e) => {
        e.innerHTML =
            '<div class="dealend-timer"><div class="time-block"><div class="time">' + d + '</div><span class="day">Days</span></div>' +
            '<div class="time-block"><div class="time">' + h + '</div><span class="dots">:</span></div>' +
            '<div class="time-block"><div class="time">' + m + '</div><span class="dots">:</span></div>' +
            '<div class="time-block"><div class="time">' + s + '</div></div></div>';
    })
}
setInterval('updateTimer1()', 1000);

function updateTimer2() {
    var date = $('.timer2').data('date');
    futuretime = Date.parse(date);
    now = new Date();
    diff = futuretime - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;

    let timers = document.querySelectorAll('.timer2')
    timers.forEach((e) => {
        e.innerHTML =
        '<div class="dealend-timer"><div class="time-block"><div class="time">' + d + '</div><span class="day">Days</span></div>' +
        '<div class="time-block"><div class="time">' + h + '</div><span class="dots">:</span></div>' +
        '<div class="time-block"><div class="time">' + m + '</div><span class="dots">:</span></div>' +
        '<div class="time-block"><div class="time">' + s + '</div></div></div>';
})
}
setInterval('updateTimer2()', 1000);

function updateTimer3() {
    var date = $('.timer3').data('date');
    futuretime = Date.parse(date);
    now = new Date();
    diff = futuretime - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;

    let timers = document.querySelectorAll('.timer3')
    timers.forEach((e) => {
        e.innerHTML =
        '<div class="dealend-timer"><div class="time-block"><div class="time">' + d + '</div><span class="day">Days</span></div>' +
        '<div class="time-block"><div class="time">' + h + '</div><span class="dots">:</span></div>' +
        '<div class="time-block"><div class="time">' + m + '</div><span class="dots">:</span></div>' +
        '<div class="time-block"><div class="time">' + s + '</div></div></div>';
})
}
setInterval('updateTimer3()', 1000);