

@include('user.includes.header')
@include('user.includes.nav')


        <div class="container m-t-65 recrutier">
            <div class="row search-jobs">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="sub sub-f sub-xs-t search-jobs p-t-15">
                        <h4 class="posted m-b-15">search jobs :</h4>
                        <hr>
                        <form class="navbar-form navbar-left m-b-30" action="search">
                            <select name="amount">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <input type="hidden" name="page" value="{{$page}}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="q" value="{{$q}}">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <h5 class="posted m-b-15">countries :</h5>
                        <div class="scrollbar" id="countries"></div>
                        <hr>
                        <h5 class="posted m-b-15">experience :</h5>
                        <div class="scrollbar" id="experience"></div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-8 col-md-9">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="sub sub-l sub-xs-t job-description" style="overflow: hidden;">
                                <ul class="pagination pull-right">
    @for($i = 1; $i <= $pages; $i++)
        @if($page == $i)
        <li class="active"><a href="search?page={{$i}}&amount={{$amount}}">{{ $i }}</a></li>
        @else
        <li><a href="search?page={{$i}}&amount={{$amount}}">{{ $i }}</a></li>
        @endif
    @endfor

                                </ul>
                            </div>
                        </div>
                        @foreach($jobs as $job)
                        <div class="col-xs-12 job-holder">
                            <div class="row">
                                <div class="sub">                            
                                    <div class="image">
                                        <img src="images/jobs/Nile-Multimedia-Egypt-4085-sm.png" class="img img-circle">
                                    </div>
                                    <div class="content">
                                        <button class="btn btn-success apply">Apply</button>
                                        <div class="details">
                                            <a href="#"><b>{{ $job->name }}</b></a>
                                            <span class="work-type label label-success">Full Time</span>
                                            <span class="date" >Posted on July 31, 2017</span>
                                            <p class="title">{{ $job->title }}</p>
                                            <p class="address">
                                                <a class="company" href="">{{ $job->company_name }}</a>{{ $job->location }}
                                                </p>
                                            <p>
                                                {!! $job->description !!} <span>... <a href="#">See more</a></span>
                                            </p>
                                            <div class="skills">
                                                <a href="#">PHP</a>
                                                <a href="#">Laravel</a>
                                                <a href="#">jQuery</a>
                                                <a href="#">AJAX</a>
                                                <a href="#">JSON</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>



    </body>
</html>




