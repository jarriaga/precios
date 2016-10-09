@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">
                       <h4>Actualiza tu perfil</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-10 col-md-offset-1">
                                <div class="profile-image-user text-center">
                                    @if($user->profileImage)
                                        <img src="/images/profiles/users/{{$user->profileImage}}" class="img-rounded" >
                                    @else
                                        <img src="/images/profile/default-user.png" >
                                    @endif
                                        <div style="margin: 10px auto;">
                                        <span id="fileselector">
                                            <label class="btn btn-default btn-sm" for="upload-file-selector">
                                                <input name="profilePicture" id="upload-file-selector" type="file">
                                                <i class="fa fa-upload margin-correction"></i>Foto de perfil
                                            </label>
                                        </span>
                                        </div>
                                </div>

                                <form class="form-horizontal">

                                <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">{{trans('app.Name')}}</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                 <input type="email" class="form-control" id="inputEmail3" value="{{$user->name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">{{trans('app.AboutMe')}}</label>
                                        <div class="col-sm-10">
                                            <textarea type="password" class="form-control" id="inputPassword3" >{{$user->aboutMe}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group hidden">
                                        <label for="inputEmail3" class="col-sm-2 control-label">{{trans('app.Country')}}</label>
                                        <div class="col-sm-3">
                                                <select name="country" class="form-control">
                                                    @foreach($countries as $country)
                                                        @if( strtolower($country) == 'mexico')
                                                            <option value="{{$country}}" selected>{{$country}}</option>
                                                        @else
                                                            <option value="{{$country}}">{{$country}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                        </div>
                                        <label for="inputEmail3" class="col-sm-2 control-label">{{trans('app.State')}}</label>
                                        <div class="col-sm-3">
                                            <select name="country" class="form-control">
                                                @foreach($countries as $country)
                                                    @if( strtolower($country) == 'mexico')
                                                        <option value="{{$country}}" selected>{{$country}}</option>
                                                    @else
                                                        <option value="{{$country}}">{{$country}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">{{trans('app.City')}}</label>
                                        <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3" value="{{$user->city}}">
                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">{{trans('app.Birthday')}}</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-birthday-cake"></i></div>
                                                    <input type="date" class="form-control" id="inputEmail3">
                                                </div>
                                            </div>
                                        </div>



                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10 text-center">
                                            <button type="submit" class="btn btn-lg btn-primary">{{trans('buttons.SaveProfile')}}</button>
                                        </div>
                                    </div>
                                </form>
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