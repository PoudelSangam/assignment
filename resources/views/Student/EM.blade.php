
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/subject.css">

        <title>Home</title>

    
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
           <div class="container-fluid">
            <a class="navbar-brand" href="home">HOME</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
               aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
               <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" href="home" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                  </li>
               </ul>
               <form class="d-flex my-2 my-lg-0"> 
                  <input class="form-control me-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
               </form>
            </div>
        </div>
      </nav>
    

      <div class="row row-cols-md-3  row-cols-1 ">
       <div class="col p-3" >
         <div class="card mt-auto">
            <div class="card-body">
            <h5 class="card-title">Assignment </h5>
            <p class="card-text"><lable>Given:</lable><br>
            <lable>Dead Line:</lable></p>
            <a href="#" class="btn btn-primary">Question</a>
            <a href="#" class="btn btn-primary">Solution</a>
            </div>
          </div>
      </div>
      
      </div>
   





    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
