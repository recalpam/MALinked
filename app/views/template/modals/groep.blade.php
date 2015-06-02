<div class="project">
  <div class="full-row header">
    <div class="small-12 medium-2 columns">
      logo
    </div>
    <div class="small-12 medium-8 columns text-center">
      <h1>{{ $project->title }}</h1>
    </div>
    <div class="small-12 medium-2 columns">
      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
  </div>

  <div class="full-row">
    <div class="small-12 medium-4 columns">
      <p>{{ $project->description }}</p>
      <a href="{{ $project->url }}">{{ $project->url }}</a>
      <div class="downlo@d">
        @if($project->file)
           <a target="_blank" href="/api/frontend/modal/group-file/{{ $project->file->id }}">Download bestand</a>
        @endif
      </div>
    </div>
    <div class="small-12 medium-8 columns">
    @if(isset($project->image))
      <img src="{{ $project->image->original }}" >
    @endif
    </div>
  </div>
</div>
