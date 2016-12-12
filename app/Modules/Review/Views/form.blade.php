<div class="modal fade see-review" id="user-review-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog rw-modal-dialog" role="document">
        <div class="rs-loader"><img src="{{ URL::to('assets/images/loader.gif') }}" alt=""> </div>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title fr-success-label" id="myModalLabel">Add your Review</h4>
            </div>
            <div class="modal-body">
                <form action="#" id="review-form" class="text-right">
                    <div class="form-group text-left review-t">
                        <div class="left-img">
                            <div class="img-wrap">
                                <img src="{{ URL::asset('assets/images/review-user.png') }}" alt="">
                            </div>
                        </div>
                        <h4>John Smith</h4>
                        <div class="review-stars">
                            <fieldset class="rating">
                                <input type="radio" id="sta4" name="rating" value="5" /><label class = "full" data-rating="5" for="sta4" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4ha" name="rating" value="4.5" /><label class="half" data-rating="4.5" for="star4ha" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="st" name="rating" value="4" /><label class = "full" for="st" data-rating="4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3hal" name="rating" value="3.5" /><label class="half" data-rating="3.5" for="star3hal" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star34" name="rating" value="3" /><label class = "full" data-rating="3" for="star34" title="Meh - 3 stars"></label>
                                <input type="radio" id="starhalf" name="rating" value="2.5" /><label class="half" data-rating="2.5" for="starhalf" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="sar2" name="rating" value="2" /><label class = "full" data-rating="2" for="sar2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1hlf" name="rating" value="1.5" /><label class="half"  data-rating="1.5" for="star1hlf" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="ta1" name="rating" value="1" /><label class = "full" data-rating="1" for="ta1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="tarhalf" name="rating" value="0.5" /><label class="half" data-rating="0.5" for="tarhalf" title="Sucks big time - 0.5 stars"></label>
                                <input type="radio" name="rating" value="0" checked="checked">
                            </fieldset>
                            <span class="btn-reviews"><button class="rating-s" type="button">Rating:</button></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea id="" cols="30" rows="10" class="form-control" name="comment" placeholder="Leave your comment..."></textarea>
                        <label class="r-has-error r-hide"> This field is required.</label>
                    </div>
                    <input type="submit" class="btn-submit-r" value="Submit your Review">
                </form>
            </div>
        </div>
    </div>
</div>