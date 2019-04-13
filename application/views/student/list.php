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
            <?php if($this->input->get('status') == 'delete_success'): ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> Data successfully deleted
                </div>
            <?php endif ?>

            <?php if($this->input->get('status') == 'update_success'): ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> Data successfully updated
                </div>
            <?php endif ?>

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
                <?php $i = 1; foreach ($students as $std): ?>
                <tr>
                    <td class="text-center"><?php echo $i++ ?></td>
                    <td><?php echo $std->name ?></td>
                    <td><?php echo $std->father_name ?></td>
                    <td class="text-center"><?php echo $std->class ?></td>
                    <td class="text-center"><?php echo $std->roll ?></td>
                    <td class="text-center">
                        <a href="<?php echo site_url('student/edit/' . $std->id) ?>" class="btn btn-info btn-sm">Edit</a>
                        <a onclick="std_delete(<?php echo $std->id ?>)" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function std_delete(id) {
        var x = confirm("Are you sure to delete?");

        if(x) {
            location.replace("<?php echo site_url('student/delete/') ?>"+id);
        }
    }
</script>

</body>
</html>