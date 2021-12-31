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
    <div class="mx-12">
        <div class="flex flex-wrap">
            <div class="flex-1">
                @include("studentlist")                 
            </div>
            <div class="flex-1">



               <form action="" >

               <div class="flex flex-col mb-4 md:w-1/2">
        <label class="mb-2 uppercase tracking-wide font-bold text-lg text-grey-darkest" for="first_name">First Name</label>
        <input class="border py-2 px-3 text-grey-darkest md:mr-2" type="text" name="first_name" id="first_name">
      </div>
      <div class="flex flex-col mb-4 md:w-1/2">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest md:ml-2" for="last_name">Last Name</label>
        <input class="border py-2 px-3 text-grey-darkest md:ml-2" type="text" name="last_name" id="last_name">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="email">Email</label>
        <input class="border py-2 px-3 text-grey-darkest" type="email" name="email" id="email">
      </div>
      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="password">Password</label>
        <input class="border py-2 px-3 text-grey-darkest" type="password" name="password" id="password">
      </div>
      <button class="block bg-teal hover:bg-teal-dark text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Create Account</button>

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