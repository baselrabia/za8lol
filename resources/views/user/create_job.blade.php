
@include('user.includes.header')
@include('user.includes.nav')


        <div class="container m-t-65 recrutier">
            <div class="row">

                <div class="col-xs-12">
                    <div class="sub sub-l sub-xs-t">

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                            
                                <h3 style="margin-bottom: 25px; text-align: center;">Create new Job</h3>

                                <form method="POST">
                                    
                                
                                <div class="form-group">
                                    <label for="name">Job Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Job Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">Job Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Job Title" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Job Description</label>
                                    <textarea class="form-control" type="textarea" id="description" placeholder="Job Description ... " maxlength="140" name="description" rows="7"></textarea>
                                    <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                                </div>
                                <div class="form-group">
                                    <label for="location">Job Location</label>
                                    <select class="form-control" id="location" name="location" required>
                                        <option disabled selected>Please select job location</option>
                                        <option value="egypt">Egypt</option>
                                        <option value="quatar">Quatar</option>
                                        <option value="bahreen">Bahreen</option>
                                        <option value="usa">United States</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="location">Job Skills</label>
                                    <select class="form-control" id="location" name="skills" required multiple="">
                                        <option value="1">Web Designer</option>
                                        <option value="2">PHP Developer</option>
                                        <option value="3">ASP Developer</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary" required>
                                </div>

                               <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Create</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>