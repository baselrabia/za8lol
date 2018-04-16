
@include('user.includes.header')
@include('user.includes.nav')

<div class="container" style="padding-top: 30px">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

            @include('user.includes.alerts')                                                
                <form id="loginform" class="form-horizontal" role="form" action="login_process" method="POST">
                            
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email">                                        
                    </div>
                        
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>

                    {{ csrf_field() }}

                    <div style="margin-top:10px" class="form-group col-xs-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>
