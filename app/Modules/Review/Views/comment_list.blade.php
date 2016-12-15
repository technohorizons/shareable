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
                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                        <div class="left-img">
                                            <svg class="svg-graphic" width="100" height="100" viewBox="0 0 560 645" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
                                                <g>
                                                    <clipPath id="hex-mask-{{ $row->id }}">
                                                        <polygon points="270,0 0,160 0,485 270,645 560,485 560,160"></polygon>
                                                    </clipPath>
                                                </g>
                                                <a xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#" transform="">
                                                    <image clip-path="url(#hex-mask-{{ $row->id }})" height="100%" width="100%" xlink:href="{{ URL::asset('assets/images/review-user.png') }}" preserveAspectRatio="xMidYMin slice" style="opacity: 1;"></image>
                                                    <figcaption></figcaption>
                                                </a>
                                            </svg>

                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="right-content-review review-text">
                                            <h4> John Smith </h4>
                                            <p>{{$row->comment}}</p>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 rating-container">
                                        <div class="rating-cover">
                                        </div>
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

