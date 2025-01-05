
<!-- QUESTION: What is a view? -->
<!-- QUESTION: Why do we use a view and where does it fit in the MVC model? -->
<!-- QUESTION: Where are we using it in our code? -->

<!-- You can generate this view by using the command: './vendor/bin/sail artisan make:view overview'. -->

<h2>Students</h2>
@foreach($students as $student)
<ul>
    <li>{{ $student->firstName }}</li>
    <li>{{ $student->lastName }}</li>
    <li>{{ $student->created_at }}</li>
    <li>{{ $student->updated_at }}</li>
</ul>
@endforeach
</div>
