<div class="table">
<table class="table-auto">
  <thead>
    <tr>
      <th>Song</th>
      <th>Artist</th>
      <th>Year</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
      <td>Malcolm Lockyer</td>
      <td>1961</td>
    </tr>
    <tr>
      <td>Witchy Woman</td>
      <td>The Eagles</td>
      <td>1972</td>
    </tr>
    <tr>
      <td>Shining Star</td>
      <td>Earth, Wind, and Fire</td>
      <td>1975</td>
    </tr>
  </tbody>
</table>
    <table class="table table-striped">
        <thead class="thead table-header-group">
            <tr>
                <th >CNE</th>
                <th >First Name</th>
                <th >Second Name</th>
                <th >Age</th>
                <th >Speciality</th>
                <th >Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $tudent)
            <tr>
                <td>{{ $tudent->cne }}</td>
                <td>{{ $tudent->firstname }}</td>
                <td>{{ $tudent->secondName }}</td>
                <td>{{ $tudent->age }}</td>
                <td>{{ $tudent->Speciality }}</td> 
                <td>
                    <a href="#">show</a>
                    <a href="{{ url('/edit/'.$tudent->id ) }}" class=" p-2 ring-offset-blue-300">Edit</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>