<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Management System </title>
</head>

<body>

@if($layout == 'index')
    <div class="mx-12">
        <!-- <h2>index</h2> -->
        <section>      
        
            @include("studentlist") 

        </section>
        <section></section>
    </div>
@elseif($layout == "create")   
    <div class="mx-12 mt-4">
        <div class="flex flex-wrap"> 
            <div class="flex-1">
                @include("studentlist")                 
            </div>
            <div class="flex-1 px-4">

               <h2 class="text-2xl">New Student</h2>

               <form action="{{ url('/store') }}" method="post" >

                    <div class="form-group my-1">
                            <label>CNE</label>
                            <input type="text" class="form-control" name="cne" placeholder="Enter CNE">
                    </div>
                    <div class="form-group my-1">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                    </div>
                    <div class="form-group my-1">
                            <label>Second Name</label>
                            <input type="text" class="form-control" name="secondName" placeholder="Enter Second Name">
                    </div>
                    <div class="form-group my-1">
                            <label>Age</label>
                            <input type="text" class="form-control" name="age" placeholder="Enter Age">
                    </div>
                    <div class="form-group my-1">
                            <label>Speciality</label>
                            <input type="text" class="form-control" name="speciality" placeholder="Enter Speciality">
                    </div>
                    <input  class="btn btn-info" type="submit" name="save" value="Save" id="">
                    <input  class="btn btn-warning" type="reset" name="reset" value="Reset" id="">

               </form>
                


                
            </div>
        </div>
    </div>
@elseif($layout == "show")
<div class="mx-12">
        <!-- <h2>index</h2> -->
        <section>      
        
            @include("studentlist") 

        </section>
        <section></section>
    </div>
@elseif($layout == "edit")
<div class="mx-12">
        <!-- <h2>index</h2> -->
        <section>      
        
            @include("studentlist") 

        </section>
        <section></section>
    </div>
@endif

</body>

</html>