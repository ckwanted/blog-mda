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
            success: function(){
                $(formId)[0].reset();
            },
            error: function(){
                console.log('Error');
            }
        });
    });

});

Vue.component('comments', {
    template: '#comments-template',

    props: ['article_id'],

    data: function () {
        return { list: [] }
    },

    created: function() {
        this.fetchComments(this.article_id);

    },

    methods: {
        fetchComments: function (id) {
            $.getJSON(id+'/comments', function (comments) {
                this.list = comments;
            }.bind(this))
        }
    }

});

new Vue({
    el: '#view-comment'
});
