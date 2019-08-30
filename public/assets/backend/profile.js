$.widget("backend.profile", {
    options: {
        urlShow: '',
        urlUpdate: '',
    },
    _create: function () {
        console.log('Init widget');
        var self = this;
        var opt = self.options;
        self.show(opt.urlShow);
        $('.save-profile').click(function () {
            self.update(opt.urlUpdate);
        });
    },
    show: function (showUrl) {
        $.ajax({
            url: showUrl,
            method: 'get',
            success: function (data) {
                $('.name').val(data.name);
                $('.phone').val(data.phone);
                $('.email').val(data.email);
                if (data.avatar) {
                    $('.avatar').attr('src', data.avatar);
                } else {
                    $('.avatar').attr('src', 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png');
                }
            },
        })
    },
    update: function (updateUrl) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: updateUrl,
            method: 'put',
            data: {
                name: $('.name').val(),
                phone: $('.phone').val()
            },
            success: function (data) {
                toastr.success(data)
            },
            error: function (request, status) {
                $.each(request.responseJSON.errors, function (key, val) {
                    toastr.error(val);
                });
            }
        })
    }
});