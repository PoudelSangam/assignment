
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <title>Home</title>


    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
           <div class="container-fluid">
            <a class="navbar-brand" href="#">HOME</a>
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
      
        

    <div class="container buttons">
    <div class="row row-cols-md-4 row-cols-2 ">
      <div class="col p-3" >
      <a href="math"><button type="button" class="btn1 btn btn-lg button">Math</button></a>
      </div>

      <div class="col p-3"  >
      <a href="TOC"><button type="button" class="btn1 btn  btn-lg button">TOC</button></a>
         </div>

         <div class="col p-3" >
      <a href="OOP"><button type="button" class="btn1 btn btn-lg button">OOP</button></a>
         </div>
         
         <div class="col p-3" >
         <a href="DBC"><button type="button" class="btn1 btn btn-lg button">DBC</button></a>
         </div>
         <div class="col p-3"  >
         <a href="ECT"><button type="button" class="btn1 btn  btn-lg button">ECT</button></a>
         </div>

         <div class="col p-3" >
         <a href="DL"><button type="button" class="btn1 btn btn-lg button">Digital Logic</button></a>
         </div>
         
         <div class="col p-3" >
         <a href="EM"><button type="button" class="btn1 btn btn-lg button">Electro Magnatics</button></a>
         </div>


      </div>
      
      
      
      
      
      
    </div>
  </div>






    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
