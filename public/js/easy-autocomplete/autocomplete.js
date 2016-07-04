$(document).ready(function () {
    $("#user").easyAutocomplete({
        url: "autocomplete/parvulos",
        getValue: "full_name",
        template: {
            type  : "description",
            fields: {
                description: "rut"
            }
        },
        list: {
            match: {
                enabled: true
            },

            onSelectItemEvent: function() {
                var user = $("#user").getSelectedItemData();
                $("#user_id").val(user.id);
            }
        },
        theme: "bootstrap",

        ajaxSettings: {
            dataType: "json",
            method: "GET",
            data: {
            }
        },

        preparePostData: function(data) {
            data.search = $("#user").val();
            return data;
        },

        requestDelay: 500

    }).change(function () {
        $('#user_id').val('')
    })


});