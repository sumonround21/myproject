<div class="container">

        <div class="row">
            <div class="col-md-6">
                <h3>Registration Form.</h3>
                {!! Form::open()!!}
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" required >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>address:</label>
                            <input type="text" class="form-control" id="address" name="address" required >
                        </div>
                    </div>
                   
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <div class="pull-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                {!! Form::close() !!}
            </div>

        </div>
        
        </div>
 