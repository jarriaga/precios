@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-image-user text-center">
                                    <img src="https://scontent.xx.fbcdn.net/v/t1.0-1/p320x320/14470521_10210167428758162_7126402757052981035_n.jpg?oh=a6902ea1913996e5b6cf395072a27504&oe=5873A2B6" class="img-rounded" >
                                </div>
                                <h3 class="text-center">{{ $user->name }}</h3>
                                <p class="text-center"><small >Puebla México</small></p>
                                <p class="text-justify">
                                    <em>Acerca de mi:</em><br>
                                    Me gustan los taquitos del porky, y soy fan del futbol...
                                </p>
                            </div>
                            <div class="col-md-8">
                                    <div class="row">

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist" id="user-tabs">
                                                <li role="presentation" class="active"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">{{ trans('app.Reviews') }}</a></li>
                                                <li role="presentation"><a href="#favorites" aria-controls="favorites" role="tab" data-toggle="tab">{{trans('app.Favorites')}}</a></li>
                                                <li role="presentation"><a href="#complaints" aria-controls="complaints" role="tab" data-toggle="tab">{{ trans('app.Complaints') }}</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <!----- Reviews Panel---->
                                                <div role="tabpanel" class="tab-pane active" id="reviews">
                                                   <br>


                                                    <div class="review-block">
                                                        @for($i=0;$i<10;$i++)
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <img src="http://dummyimage.com/60x60/F24/ffffff&text=No+Image" class="img-rounded">
                                                                <div class="review-block-name"><a href="#">El oferton</a></div>
                                                                <div class="review-block-date">Enero 29, 2016<br/>hace 1 día</div>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <div class="review-block-rate">
                                                                    <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                                                    <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                                                    <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="review-block-title">Los precios son realmente bajos</div>
                                                                <div class="review-block-description">Encontre productos muy economicos a precios bajisimos</div>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                            @endfor




                                                    </div>
                                                </div>
                                                <!---- / Reviews Panel -->


                                                <!--- Favorites Panel --->
                                                <div role="tabpanel" class="tab-pane" id="favorites">
                                                                    favoritos
                                                </div>
                                                <!---- / Favorites Panel --->
                                                <div role="tabpanel" class="tab-pane" id="complaints">
                                                        Quejas
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        jQuery(document).ready(function(){
            $('#user-tabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            });
        });

    </script>
@endsection