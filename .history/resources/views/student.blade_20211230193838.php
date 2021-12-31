<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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

               <form action="" >

                    <div class="form-group">
                            <label>CNE</label>
                            <input type="text" name="cne" placeholder="Enter CNE">
                    </div>
                    <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                            <label>Second Name</label>
                            <input type="text" name="secondName" placeholder="Enter Second Name">
                    </div>
                    <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" placeholder="Enter Age">
                    </div>
                    <div class="form-group">
                            <label>Speciality</label>
                            <input type="text" name="age" placeholder="Enter Age">
                    </div>

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