

@include('user.includes.header')
@include('user.includes.nav')


<div class="container m-t-65 recrutier" ng-controller="searchController">
    <div class="row search-jobs">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="sub sub-f sub-xs-t search-jobs p-t-15">
                <h4 class="posted m-b-15">search jobs :</h4>
                <hr>
                <form class="navbar-form navbar-left m-b-30">
                    <div class="input-group">
                        <input type="text" class="form-control" ng-model="pag.q" placeholder="Search" ng-change="changedSearch()">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" ng-click="search()">
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
<ul uib-pagination total-items="pag.total" items-per-page="pag.amount" ng-model="pag.page" max-size="5" class="pagination-sm" boundary-link-numbers="true" ng-change="search()" rotate="false"></ul>
                    </div>
                    <div ng-if="loading" class="sub sub-l sub-xs-t job-description" style="overflow: hidden;text-align: center">
<img src="http://datainflow.com/wp-content/uploads/2017/09/loader.gif" width="50px">
                    </div>
                    
<div class="col-xs-12 job-holder" ng-if="!loading" ng-repeat="job in jobs track by $index">
    <div class="row">
        <div class="sub">                            
            <div class="image">
                <img ng-src="[[job.logo]]" class="img img-circle">
            </div>
            <div class="content">
                <button class="btn btn-success apply">Apply</button>
                <div class="details">
                    <a href="job?job_id=[[job.id]]"><b>[[ job.name ]]</b></a>
                    <span class="work-type label label-success">Full Time</span>
                    <span class="date" >Posted on [[ job.created_at ]]</span>
                    <p class="title">[[ job.title ]]</p>
                    <p class="address">
                        <a class="company" href="">[[ job.company_name ]]</a>[[ job.location ]]
                        </p>
                    <p>
                        <span  ng-bind-html="[[ job.description.slice(0,300) ]]"></span>
                        <span ng-if="job.description.length>300">
                            ...
                         <a href="job?job_id=[[job.id]]">See more</a></span>
                        </span>
                    </p>
                    <div class="skills">
    <a href="#" ng-repeat="skill in job.skills" ng-click="searchOnSkill(skill.name)">[[skill.name]]</a>
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






