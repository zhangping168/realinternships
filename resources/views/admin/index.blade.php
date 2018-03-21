<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Admin">
        <title>Admin page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >     
        
    </head>
    <body>
    <div class="container">
       <div class="row">
        <div class="col-sm">
            <form method="post" action="/" style="padding:2rem">
                {!! csrf_field() !!}
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" required>
                
              </div>
              <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="3" required></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

        

        </div>
    </div>
    
    </body>
</html>
