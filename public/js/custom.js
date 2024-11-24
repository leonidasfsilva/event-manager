$(document).ready(function () {
    $('.deleteParticipant').on('click', function (event) {
        var idParticipant = $(this).attr('participantId');

        $('#formDeleteParticipant').attr('action', function(i, value) {
            return value + "/" + idParticipant;
        });
    })

    $('.deleteRoom').on('click', function (event) {
        var roomId = $(this).attr('roomId');

        $('#formDeleteRoom').attr('action', function(i, value) {
            return value + "/" + roomId;
        });
    })

    $('.deleteSpace').on('click', function (event) {
        var spaceId = $(this).attr('spaceId');

        $('#formDeleteSpace').attr('action', function(i, value) {
            return value + "/" + spaceId;
        });
    })

    $('.backBtn').click(function () {
        window.history.back();
    })
})
