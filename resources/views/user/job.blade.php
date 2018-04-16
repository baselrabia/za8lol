
@include('user.includes.header')
@include('user.includes.nav')


        <div class="container m-t-65 recrutier">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 col-sm-push-8 col-md-push-9">
                    <div class="sub sub-l sub-xs-t">
                        <h5 class="posted">job posted by :</h5>
                        <div class="row">
                            <div class="col-xs-3 col-sm-6 col-md-5">
                                <img src="images/default-profile.jpg" alt="recruiter profile" class="img-responsive">
                            </div>
                            <div class="col-xs-9 col-sm-6 col-md-7 p-l-no">
                                <p><a href="#"><b>HR</b></a></p>
                                <p>Senior manager hr</p>
                                <p><a href="#">UI Developer ..</a></p>
                                <p><span class="fa fa-map-marker" style="width:15px"></span>Saudi Arabia</p>
                            </div>
                            <div class="col-xs-12 m-t-20">
                                <button class="btn btn-default">Follow</button>
                                <button class="btn btn-success">UnFollow</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9 col-sm-pull-4 col-md-pull-3">
                    <div class="sub sub-f sub-xs-t job-description">
                        @if(!$job->availability)
                        <div class="alert alert-info">
                            <b>This Job is no longer available.</b>
                        </div>
                        @endif

                        <h3 class="job-name">
                            <span>{{ $job->name }}</span>
                            <span class="pull-right date" >Posted on {{ $job->created_at }}</span>
                        </h3>

                        <h6>
                            <a href="#">{{ $job->title }}</a>
                        </h6>

                        @if($job->availability)
                            @if(Auth::guest())
                            <button class="btn btn-primary">Login To Apply</button>
                            <button class="btn btn-primary">Signup To Apply</button>
                            @else
                            <button class="btn btn-success">Apply Now</button>
                            <button class="btn btn-success disabled">You Applied Successfully!</button>
                            <button class="btn btn-warning pull-right">Bookmark</button>
                            <button class="btn btn-primary pull-right">UnBookmark</button>
                            @endif
                        @endif

                        <hr>
                        <div class="details row">
                            <div class="col-xs-6">
                                <p>
                                    <span class="fa fa-calendar"></span>
                                    2-7 years
                                </p>
                                <p>
                                    <span class="fa fa-map-marker"></span>
                                    {{ $job->location }}
                                </p>
                                <p>
                                    <span class="fa fa-graduation-cap"></span>
                                    Bachelor of Technology/Engineering.
                                </p>
                            </div>
                            <div class="col-xs-6">
                                <p><span class="fa fa-money"></span>{{ $job->salary }}$</p>
                                <p><span class="fa fa-user-o"></span>Male</p>
                            </div>
                        </div>
                        <hr>
                        <h5 class="title">Job Desciption :</h5>
                        <p class="description">
                            {!! $job->description !!}
                        </p>
                        <hr>
                        <h5 class="title">Job Requirments :</h5>
                        <p class="description">
                            {!! $job->requirements !!}
                        </p>
                        <hr>
                        <div class="job-company-logo">
                            <img src="{{$job->logo}}" class="logo" alt="{{ $job->company_name }}">
                            <h5 class="title">Company Brief :</h5>
                            <p>
                                <span class="lead">{{ $job->company_name }}</span>
                                <span class="small">{{ $job->location }}</span>
                            </p>
                            <p class="description">
                                {!! $job->company_brief !!}
                            </p>
                        </div>
                        <hr>
                        <h5 class="title">keywords :</h5>
                        <div class="keywords">
                            <a href="#">Sourcing</a>
                            <a href="#">Screening</a>
                            <a href="#">CV</a>
                            <a href="#">validation</a>
                            <a href="#">interacting</a>
                            <a href="#">interviews</a>
                            <a href="#">Shortlisting</a>
                            <a href="#">Job</a>
                            <a href="#">Posting</a>
                            <a href="#">Recruitment</a>
                            <a href="#">HR</a>
                            <a href="#">Recruitment</a>
                            <a href="#">Recruiter</a>
                        </div>
                    </div>
                    <div class="sub sub-f sub-xs-t job-description">
                        <h5 class="title">similar jobs</h5>
                    </div>
                </div>
            </div>
        </div>



    </body>
</html>




