<h1>Edit Internship: {{$internship->title}}</h1>


 <form action="/internships/{{ $internship->id }}" method="POST">
   @csrf
   @method('PUT')
   <label for="title">Title</label>
   <input type="text" name="title" id="title" value="{{ $internship->title }}">
   <label for="description">Description</label>
   <textarea name="description" id="description">{{ $internship->description }}</textarea>
   <label for="start_date">Start Date</label>
   <input type="date" name="start_date" id="start_date" value="{{ $internship->start_date }}">
   <label for="end_date">End Date</label>
   <input type="date" name="end_date" id="end_date" value="{{ $internship->end_date }}">
   <label for="hours_per_week">Hours per Week</label>
   <input type="number" name="hours_per_week" id="hours_per_week" value="{{ $internship->hours_per_week }}">
   <label for="compensation">Compensation</label>
   <input type="text" name="compensation" id="compensation" value="{{ $internship->compensation }}">
   <label for="type">Type</label>
   <input type="text" name="type" id="type" value="{{ $internship->type }}">
   <label for="level_of_education">Level of Education</label>
   <input type="text" name="level_of_education" id="level_of_education" value="{{ $internship->level_of_education }}">
   <button type="submit">Submit</button>
</form>