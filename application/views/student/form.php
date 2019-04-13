<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>

    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-3">
            <h3>Student Form</h3>
        </div>
        <div class="col-sm-2 text-right">
            <br>
            <a href="<?php echo site_url('student') ?>" class="btn btn-primary">Back</a>
        </div>

        <div class="col-sm-6 col-sm-offset-3">
            <form action="<?php echo site_url('student/save') ?>" class="form-horizontal">
                <div class="form-group">
                    <label for="name">Student Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="father_name">Father Name</label>
                    <input type="text" name="father_name" id="father_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mother_name">Mother Name</label>
                    <input type="text" name="mother_name" id="mother_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="class">Class</label>
                    <select name="class" id="class" class="form-control">
                        <option value="">Select Class</option>
                        <option value="1">Class 1</option>
                        <option value="2">Class 2</option>
                        <option value="3">Class 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="roll">Roll</label>
                    <input type="text" name="roll" id="roll" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>