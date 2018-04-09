@if (count($projects))
    <div class="panel">
        <p class="panel-heading">
            My Projects
        </p>

        @foreach ($projects as $project)
            <a class="panel-block">
                {{ $project->name }}
            </a>
        @endforeach
    </div>
@endif