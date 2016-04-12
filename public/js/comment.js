$(function(){

    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

    $('#btn-form').click(function(event) {
        event.preventDefault();

        var formId = '#commentForm';

        $.ajax({
            url: $(formId).attr('action'),
            type: $(formId).attr('method'),
            data: $(formId).serialize(),
            dataType: 'html',
            success: function(result){
                $(formId)[0].reset();
            },
            error: function(){
                console.log('Error');
            }
        });
    });

});

/*Vue.component('comments', {
    template: '#comments-template'
});


/*new Vue({
    el: '#view-comment',

});*/
