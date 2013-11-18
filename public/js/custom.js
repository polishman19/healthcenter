$(document).ready(function() {
    $('a[href^="' + window.location.pathname + '"]')
            .parent()
            .addClass('active');
    $('.calendar').fullCalendar({
        firstDay: 1,
        events: [
            {
                title: 'Urlop',
                start: '2013-11-20'
            },
            {
                title: 'Konferencja',
                start: '2013-11-05',
                end: '2013-11-07'
            },
            {
                title: 'Zabieg',
                start: '2013-11-09 12:30:00',
                allDay: false // will make the time show
            }
        ]
    })
    $('.calendar-spec').fullCalendar({
        defaultView : 'week'
    });
});