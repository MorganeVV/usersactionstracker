$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".klikker").click(function (e) {
    element = e.target;
    var target = element.outerHTML;
    var page = window.location.href;

    $.ajax({
        type: 'POST',
        url: "/ajaxRequest",
        data: { page: page, target: target }
    });
});
