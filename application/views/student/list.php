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
        <div class="col-sm-8">
            <h3>Student Information</h3>
        </div>
        <div class="col-sm-4 text-right">
            <br>
            <a href="<?php echo site_url('student/create') ?>" class="btn btn-primary">Add New Student</a>
        </div>

        <div class="col-sm-12">
            <table class="table table-bordered table-condensed table-striped table-hover">
                <thead>
                <tr>
                    <th class="text-center">SL</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th class="text-center">Class</th>
                    <th class="text-center">Roll</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Mr. XYZ</td>
                    <td>Mr. ABC</td>
                    <td class="text-center">Class 1</td>
                    <td class="text-center">5</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-info btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>