  
    <div class="card text-white bg-secondary">
      <div class="card-header">
        <strong>Search By Category</strong>
      </div>  
   

    <ul class="list-group">
      @foreach($categories as $category)
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
        <a href="/posts/{{$category->title}}" class="list-group-item-action">{{$category->title}}</a>
        <span class="badge badge-info badge-pill">14</span>
      </li>
      @endforeach
      
    </ul>

