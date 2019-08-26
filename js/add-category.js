$(document).ready(function() {
    $('.add-category').submit(function() {
        $('.add-category .exist').hide()
        let post = true
        if($('.add-category input[name="category"]').val() === '') {
            $('.add-category input[name="category"]').parent().find('.err').show();
            post = false
        }else {
            $('.add-category input[name="category"]').parent().find('.err').hide();
        }

        if(post === true) {
            $('.loader').css({'display': 'flex'})
            let url = '/api/'
            let data = {
                name: $('.add-category input[name="category"]').val(),
                parent: $('.add-category select[name="parent_category"]').val()
            }

            $.post(url, data, function(res) {
                if(res.result === 'success') {
                    $('.loader').hide();
                    $('.toast').css({'opacity': 10, 'right': '50px', 'position': 'absolute', 'bottom':'20px'});
                    setTimeout(function() {
                        $('.toast').css({'opacity': 0})
                    }, 3000)
                }

                if(res.result === 'exist') {
                    $('.loader').hide();
                    $('.add-category .exist').show()
                }
            });
        }
        return false;
    })
})