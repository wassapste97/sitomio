
<!DOCTYPE html>
<html lang="en">

<head>


    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="/sito/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/sito/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./sito/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/sito/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<br/>
<br/>
<br/>
<br/>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cambia Passowrd</h3>
                    </div>
                    <div class="panel-body">
                    <?php echo form_open('/admin/gestisci/' . $id. '/'.$comando) ; ?>
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               <a href="/sito/admin" class="btn btn-lg btn-danger ">Annulla</a>
                               <input class="btn btn-lg btn-success " type="submit" name="submit" value="Conferma" />
		
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="/sito/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sito/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/sito/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/sito/js/sb-admin-2.js"></script>

</body>

</html>
