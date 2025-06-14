<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container-fluid">
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!--
    
            <div>
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                        
                            <th scope="col">Student's Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($students->count() > 0) 
                      @foreach($students as $std)
                        <tr>
                       
                            <td>{{ $std->name }}</td>
                            <td>{{ $std->age }}</td>
                            <td>{{ $std->gender }}</td>
                            <td>
                             
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal{{ $std->id }}">
                                    Edit
                                </button>
                    
                               
                                <form action="{{ route('students.destroy', $std->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">No records found</td>
                            </tr>
                        @endif
                    </tbody>
                    
                </table>


-->


</body>

</html>