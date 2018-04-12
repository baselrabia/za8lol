

@include('user.includes.header')
@include('user.includes.nav')

        <style type="text/css">
            .target-holder{
                background:#fff;
                box-shadow:1px 1px 3px rgba(128,128,128,0.4);
                padding: 30px 15px;
            }
            .co-success{
                color: #5cb85c
            }
            .mt-20{
                margin-top:20px;
            }
        </style>

        <div class="container-fluid" style="margin-top: 67px;">
            <div class="row">
                <div class="col-xs-12">
                    <div class="target-holder">
                        <h4 class="text-center"><b>Create New User</b></h4>
@include('user.includes.alerts')
                        <form class="mt-20" method="POST" action="register_process">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter the user first name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter the user last name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter the user email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter the user password">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter the user phone">
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control" name="location" id="location">
                                    <option disabled selected>Please Select User Location</option>
                                    <option value="egypt">Egypt</option>
                                    <option value="qatar">Qatar</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" name="role" id="role">
                                    <option disabled selected>Please Select User Role</option>
                                    <option value="user">User</option>
                                    <option value="employer">Employer</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="radio" value="male" id="male" name="gender">
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="gender" value="female" style="margin-left: 30px">
                                <label for="female">Female</label>
                            </div>

                            <div class="form-group" style="padding:15px 0;">
                                <button class="btn btn-primary pull-right">Create</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>