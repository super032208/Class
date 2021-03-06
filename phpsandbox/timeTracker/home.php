<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap-theme.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body style="padding-top: 95px">

    <div class="container">
      <div class="row">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top justify-content-between">
          <a class="navbar-brand" href="#">Home</a>
        </nav>
      </div>
    </div>

    <!-- content area -->
    <div class="container" style="text-align: center">
      <p>
        <a role="button" class="btn btn-success" href="<?php echo $data['router']->pathFor('projects-save'); ?>">Add new project</a>
      </p>
      <p>
        <a role="button" class="btn btn-success" href="<?php echo $data['router']->pathFor('projects-list'); ?>">View current projects</a>
      </p>
    </div>
    <!-- content area ends-->

    <!-- footer -->
    <div class="container">
      <p class="text-center">
        <a href="<?php echo $data['router']->pathFor('legal'); ?>" role="button" class="btn btn-default btn">Legal</a>
      </p>
    </div>
    <!-- footer ends -->


  </body>
</html>
