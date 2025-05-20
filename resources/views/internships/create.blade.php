
<x-base-layout>
    <form action="/internships" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
        <label for="start_date">Start Date</label>
        <input type="date" name="start_date" id="start_date">
        <label for="end_date">End Date</label>
        <input type="date" name="end_date" id="end_date">
        <label for="hours_per_week">Hours per Week</label>
        <input type="number" name="hours_per_week" id="hours_per_week">
        <label for="compensation">Compensation</label>
        <input type="number" name="compensation" id="compensation">
        <label for="type">Type</label>
        <select name="type" id="type">
            <option value="full-time">Full-time</option>
            <option value="part-time">Part-time</option>
        <select>
        <label for="level_of_education">Level of Education</label>
        <input type="text" name="level_of_education" id="level_of_education">
        <button type="submit">Submit</button>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
            </ul>
        </div>
    @endif
</x-base-layout>