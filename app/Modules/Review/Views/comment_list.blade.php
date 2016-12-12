<div class="modal fade user-modal" id="user-review-list-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">All Reviews</h4>
            </div>
            <div class="modal-body">
                <ul>
                    @foreach($comments as $row)
                        <li>
                            <div class="review-content">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="left-img">
                                            <div class="img-wrapper">
                                                <img src="{{ URL::asset('assets/images/review-user.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="right-content-review review-text">
                                            <h4> John Smith </h4>
                                            <p>{{$row->comment}}</p>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="review-stars list-review-stars">
                                            <fieldset class="rating">
                                                <input type="radio" id="star5" name="rating_{{ $row->id }}" @if($row->star_rating == 5) checked="checked" @endif value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4half" name="rating_{{ $row->id }}" @if($row->star_rating == 4.5) checked="checked" @endif value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star4" name="rating_{{ $row->id }}" @if($row->star_rating == 4) checked="checked" @endif value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3half" name="rating_{{ $row->id }}" @if($row->star_rating == 3.5) checked="checked" @endif value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star3" name="rating_{{ $row->id }}" @if($row->star_rating == 3) checked="checked" @endif value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2half" name="rating_{{ $row->id }}" @if($row->star_rating == 2.5) checked="checked" @endif value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star2" name="rating_{{ $row->id }}" @if($row->star_rating == 2) checked="checked" @endif value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1half" name="rating_{{ $row->id }}" @if($row->star_rating == 1.5) checked="checked" @endif value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star1" name="rating_{{ $row->id }}" @if($row->star_rating == 1) checked="checked" @endif value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="starhalf" name="rating_{{ $row->id }}" @if($row->star_rating == 0.5) checked="checked" @endif value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                            </fieldset>
                                            <span class="btn-reviews"><button class="rating-s" type="button">Rating- {{$row->star_rating}}</button></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>