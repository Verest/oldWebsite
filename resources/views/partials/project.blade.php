<div class="card">
  <a href={{"projects/".$project->link}}>
    <img class="card__images" src={{"img/".$project->image}} alt={{$project->alt}} />
  </a>
  <p>{!!$project->desc!!}</a></p>
</div>
