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
            <form method="post" action="<?php echo site_url('student/save') ?>" class="form-horizontal">

                <input type="hidden" name="id" value="<?php echo set_value('id', $std->id); ?>">

                <?php if($this->input->get('status') == 'success'): ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> Data successfully inserted
                </div>
                <?php endif ?>

                <?php echo validation_errors(); ?>

                <div class="form-group">
                    <label for="name">Student Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo set_value('name', $std->name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="father_name">Father Name</label>
                    <input type="text" name="father_name" id="father_name" class="form-control" value="<?php echo set_value('father_name', $std->father_name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="mother_name">Mother Name</label>
                    <input type="text" name="mother_name" id="mother_name" class="form-control" value="<?php echo set_value('mother_name', $std->mother_name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email', $std->email); ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo set_value('phone', $std->phone); ?>" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" class="form-control" required><?php echo set_value('address', $std->address); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="class">Class</label>
                    <select name="class" id="class" class="form-control" required>
                        <option value="" <?php echo set_select('class', ''); ?> >Select Class</option>
                        <option value="1" <?php echo set_select('class', 1, $std->class == 1); ?> >Class 1</option>
                        <option value="2" <?php echo set_select('class', 2, $std->class == 2); ?> >Class 2</option>
                        <option value="3" <?php echo set_select('class', 3, $std->class == 3); ?> >Class 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="roll">Roll</label>
                    <input type="text" name="roll" id="roll" class="form-control" value="<?php echo set_value('roll', $std->roll); ?>" required>
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