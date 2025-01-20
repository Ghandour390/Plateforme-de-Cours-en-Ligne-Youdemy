<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link navbar-navrel="canonical" href="https://getbootstrap.com/docs/3.3/examples/starter-template/">
    
    <title>Admin Area | Pages</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Dashboard</a></li>
            <li class="active"><a href="pages.html">Pages</a></li>
            <li><a href="posts.html">Posts</a></li>
            <li><a href="users.html">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Ilya</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Pages <small>Manage your site pages</small></h1>
                </div>
                <div class="col-md-2">
                    <div class="dropdown create">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Create Content
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                            <li><a type="button" data-toggle="modal" data-target="#addPost">Add Post</a></li>
                            <li><a type="button" data-toggle="modal" data-target="#addUser">Add User</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li class="active">Pages</li>

            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="index.html" class="list-group-item active main-color-bg">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                        </a>
                        <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">12</span></a>
                        <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">33</span></a>
                        <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">421</span></a>
                      </div>
                      <div class="well">
                            <h4>Bandwidth Used</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-dark-color " role="progressbar" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100" style="width: 44%;">
                                44%
                                </div>
                            </div>
                            <h4>Disk Space Used</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
                                74%
                                </div>
                            </div>
                      </div>
                </div>
                <div class="col-md-9">
                    <!-- Website Overview -->
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                          <h3 class="panel-title">Pages</h3>
                        </div>
                        <div class="panel-body">
                           <div class="row">
                               <div class="col-md-12">
                                   <input class="form-control" type="text" placeholder="Filter Pages">
                               </div>
                           </div>
                           <br>
                           <table class="table table-striped table-hover">
                                <tr>
                                    <th>Title</th>
                                    <th>Published</th>
                                    <th>Created</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>Home</th>
                                    <th><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></th>
                                    <th>Dec 13, 2020</th>
                                    <th><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger">Delete</a></th>
                                </tr>
                                <tr>
                                    <th>About</th>
                                    <th><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></th>
                                    <th>Feb 07, 2021</th>
                                    <th><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger">Delete</a></th>
                                </tr>
                                <tr>
                                    <th>Services</th>
                                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                                    <th>Jan 17, 2021</th>
                                    <th><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger">Delete</a></th>
                                </tr>
                                <tr>
                                    <th>Constact</th>
                                    <th><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></th>
                                    <th>Apr 10, 2021</th>
                                    <th><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger">Delete</a></th>
                                </tr>
                           </table>
                        </div>
                      </div>


                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <p class="text-center">Copyright AdminStrap, &copy; 2021</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page Modal -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form>
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Page Title</label>
                            <input type="text" class="form-control" placeholder="Page Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Page Body</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>

    <!-- Add Post Modal -->
    <div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form>
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" class="form-control" placeholder="Page Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Post Body</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="editor1"></textarea>
                          </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Allow Comments Below</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
     
    <!-- Add User Modal -->
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form>
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add User</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Add name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Add email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tell us about your hobby"></textarea>
                          </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    
    <script>
        CKEDITOR.replace( 'editor1' );
    </script> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
