$(function () {
    var pusher = new Pusher(PUSHER_KEY, {
        encrypted: true
    });

    var channel = pusher.subscribe('everyone');

    channel.bind('App\\Events\\NewMessage', function(data) {
        $("#welcome").html(data.message);

        if (data.message != undefined) {
            var current = $("[user-badge]").html(),
                currentNum = current ? current : 0;
            $("[user-badge]").html(++currentNum);
        }
    });
});