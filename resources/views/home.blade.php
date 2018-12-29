@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div style="padding: 0px 20px 10px 20px; background-color: black; bottom: 100px; position: absolute; right: 0px;">
                                <h2 style="color: white;">Nieuws</h2>
                            </div>
                            <img src="/img/1.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div id='calendar'></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{--<div class="row"></div>--}}

        <div class="col-md-6">

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body" style="text-align: center;">
                                    <i class="far fa-calendar-alt" style="font-size: 4vw;"></i>
                                    <h4>Agenda</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body" style="text-align: center;">
                                    <i class="fas fa-space-shuttle" style="font-size: 4vw;"></i>
                                    <h4>Vergaderruimtes</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body" style="text-align: center;">
                                    <i class="fas fa-building" style="font-size: 4vw;"></i>
                                    <h4>Escape room</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body" style="text-align: center;">
                                    <i class="fas fa-lock-open" style="font-size: 4vw;"></i>
                                    <h4>Werkzaamheden </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body" style="text-align: center;">
                                    <i class="fas fa-users" style="font-size: 4vw;"></i>
                                    <h4>Nieuws</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body" style="text-align: center;">
                                    <i class="fas fa-user-friends" style="font-size: 4vw;"></i>
                                    <h4>Personeel</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body" style="text-align: center;">
                                    <i class="fas fa-hands-helping" style="font-size: 4vw;"></i>
                                    <h4>Vrijwilligers</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body" style="text-align: center;">
                                    <i class="fas fa-images" style="font-size: 4vw;"></i>
                                    <h4>Foto's</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body" style="text-align: center;">
                                    <i class="fas fa-video" style="font-size: 4vw;"></i>
                                    <h4>Aftermovies</h4>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h4>
                                <span>
                                    <i class="fa fa-bar-chart-o"></i>
                                </span>
                                        Pool Archives
                                    </h4>
                                    <div>
                                        <h5>
                                            <em>Where do you usually browse?</em>
                                        </h5>
                                        <strong>Windows PC</strong>
                                        <span class="pull-right">25%</span>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar" style="width: 25%;"></div>
                                        </div>
                                        <strong>Mac</strong>
                                        <span class="pull-right">45%</span>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar" style="width: 45%;"></div>
                                        </div>
                                        <strong>iPad/iPhone</strong>
                                        <span class="pull-right">10%</span>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar" style="width: 10%;"></div>
                                        </div>
                                        <strong>Android</strong>
                                        <span class="pull-right">5%</span>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar" style="width: 5%;"></div>
                                        </div>
                                        <strong>Others</strong>
                                        <span class="pull-right">15%</span>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar" style="width: 15%;"></div>
                                        </div>
                                        <p class="vote-button">
                                            <a href="#" class="btn btn-large btn-success">Vote</a>
                                            <a href="#" class="pull-right">View detailed results</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    July Sigeweard
                                    <i class="fas fa-birthday-cake pull-right"></i>                        </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Lise Toiréasa
                                    <i class="fas fa-birthday-cake pull-right"></i>                        </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Achilleus Caiaphas
                                    <i class="fas fa-birthday-cake pull-right"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    July Sigeweard

                                    <div class="d-flex w-100 justify-content-between">
                                        <b>gepost</b>:
                                        <span class="badge badge-success">
                                            profile-img.jpg
                                            <i style="margin-left: 10px;" class="fas fa-file-pdf pull-right"></i>
                                        </span>
                                        <br>
                                        {{--<h5 class="mb-1">List group item heading</h5>--}}
                                        <small>3 days ago</small>
                                    </div>
                                    {{--<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>--}}
                                    {{--<small>Donec id elit non mi porta.</small>--}}
                                </li>
                                <li class="list-group-item">
                                    Achilleus Caiaphas

                                    <div class="d-flex w-100 justify-content-between">
                                        <b>gepost</b>:
                                        <span class="badge badge-success">
                                            todo-list.docs
                                            <i style="margin-left: 10px;" class="fas fa-file-pdf pull-right"></i>
                                        </span>
                                        <br>
                                        {{--<h5 class="mb-1">List group item heading</h5>--}}
                                        <small>5 days ago</small>
                                    </div>
                                    {{--<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>--}}
                                    {{--<small>Donec id elit non mi porta.</small>--}}
                                </li>

                            </ul>


                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge badge-primary badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

{{--@push('')--}}
