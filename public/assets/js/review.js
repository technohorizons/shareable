/**
 * Created by Gopal on 09-Dec-16.
 */
review  = function () {
    var baseUrl ='';
    var param_id ='';

    /* Create div after script tag */
    initHandler = function () {
        var me = document.querySelector('script[data-baseUrl]');
        baseUrl = $(me).attr('data-baseUrl');
        param_id = $(me).attr('data-review-param');

        var ra = document.querySelector('script[data-action]');
        var ReviewAction = $(ra).attr('data-action');
        if(ReviewAction == 'form') {
            var rf =  $('<div>').attr({
                class:'review-form'
            });
            $(me).parent().append(rf);
            addUserReviewBtn();
            loadForm();
        }

        if(ReviewAction == 'list') {
            var rl =  $('<div>').attr({
                class:'review-list'
            });
            $(me).parent().append(rl);
            addSeeReviewBtn();
            loadReviews();
        }
    }

    addUserReviewBtn = function () {
        var r = $('<input/>').attr({
            type: "button",
            id: "field",
            class:'btn btn-sm btn-success',
            value:'Review User',
            onclick:'ShowForm()'
        });
        $('.review-form').append(r);
    };

    addSeeReviewBtn = function() {
        var r = $('<input/>').attr({
            type: "button",
            id: "field",
            class:'btn btn-sm btn-success',
            value:'Reviews',
            onclick:'ShowReviewList()'
        });
        $('.review-list').append(r);
    };


    ShowForm = function () {
        $('#user-review-modal').modal('show');
    };


    var loadForm = function () {

        /* load form */
        $.get(baseUrl+'/review/form',function(response) {
            $('.review-form').append(response.html);
        },'json').done(function(){

            var form = $('#review-form');
            $("input[name=rating]",form).change(function(){
                fr = $("[name='rating']:checked", form).val();
                $('button.rating-s').html('Rating: '+fr);
            });

             $(".rating label",form).mouseover(function() {
                 fr = $(this).data('rating');
                 $('button.rating-s').html('Rating: '+fr);
             });

            $(".rating label",form).mouseleave(function() {
                if($("[name='rating']:checked", form).val() > 0) {
                    fr = $("[name='rating']:checked", form).val();
                    $('button.rating-s').html('Rating: '+fr);
                } else {
                    $('button.rating-s').html('Rating: ');
                }
            });

            form.submit(function(){
                var comment = $("[name='comment']", form).val();
                var rating = $("[name='rating']:checked", form).val();
                if(comment == '') {
                    $('label.r-has-error').removeClass('r-hide').addClass('r-show');
                    return false;
                } else {
                    $('label.r-has-error').removeClass('r-show').addClass('r-hide');
                }
                $('.rs-loader').show();
                $.post(baseUrl+'/review/add',{comment:comment,star_rating:rating,to_user_id:param_id},function(response) {
                    $('.rs-loader').hide();
                    if(response.status != 'success') {
                        alert('Something went wrong');
                    }
                    $(".fr-success-label").html('Thanks For Your Review!');
                    $("[name='comment']", form).val('');
                    $("[name='rating']", form).removeAttr('checked');
                    $('button.rating-s').html('Rating:');

                    $('#user-review-modal').on('hide.bs.modal', function (e) {
                        $(".fr-success-label").html('Add your Review');
                    });

                },'json')
                return false;
            })
        })
    };

    loadReviews = function() {
        
    };

    ShowReviewList = function() {
        $('.review-list .user-modal').remove();
        $.get(baseUrl+'/review/list/'+param_id,function(response) {
            $('.review-list').append(response.html);
            $('#user-review-list-modal').modal('show');
        },'json');
    };

    loadAssets = function () {
        $("<link/>", {
            rel: "stylesheet",
            type: "text/css",
            href: baseUrl+"/assets/css/review-style.css"
        }).appendTo("head");
    };

    return {
        init:function () {
            initHandler();
            loadAssets();
        }
    }
}();

window.onload = function () {
    $(document).ready(function () {
        review.init();
    });
};
