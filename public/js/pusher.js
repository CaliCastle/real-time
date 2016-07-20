$(function () {
    var pusher = new Pusher(PUSHER_KEY, {
        encrypted: true,
        auth: {
            headers: {
                'X-CSRF-Token' : _TOKEN
            }
        },
        authEndpoint: '/auth.pusher'
    });

    var channel = pusher.subscribe('everyone');

    channel.bind('App\\Events\\NewMessage', function(data) {
        console.log(data);
        $("#welcome").html(data.message);

        if (data.message != undefined) {
            var current = $("[user-badge]").html(),
                currentNum = current ? current : 0;
            $("[user-badge]").html(++currentNum);
        }
    });

    var presenceChannelName = 'presence-user-1',
        presenceChannel = pusher.subscribe(presenceChannelName);

    presenceChannel.bind('pusher:member_removed', function (member) {
        console.log('');
    });
});