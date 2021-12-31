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
            @foreach($tudents as $student)
            <tr>
                <td>Larry</td>
                <td>the bird</td>
                <td>@twiter</td>
                <td>Larry</td>
                <td>The Bird</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>