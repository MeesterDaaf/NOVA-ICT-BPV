<x-base-layout>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Company</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Hours per Week</th>
                <th>Compensation</th>
                <th>Type</th>
                <th>Level of Education</th>
                
                <th>Actions</th>
            </tr>
        </thead>
    @foreach ($internships as $internship)
        <tr>
        <td> {{ $internship->title }}</td>
       
        <td>
            {{ $internship->description }}
            
            {{-- {{ $internship->company }} --}}
        </td>
        <td>
            <a href="/interships/delete/{{$internship->id}}">Delete</a>
        </td>
        </tr>
    @endforeach
    </table>


</x-base-layout>