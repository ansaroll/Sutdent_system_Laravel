<div class="table">
    <table class="table table-striped">
        <thead class="thead table-header-group">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First Name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>
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