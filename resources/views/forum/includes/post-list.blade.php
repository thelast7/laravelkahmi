<!-- <style>
   .header {
    background-color: #b4b4b4;
    padding: 120px;
    text-align: center;
    font-size: 80px;
     border-radius: 25px;

    
} 

@media (max-width: 600px) {
    .column {
        width: 100%;
    }

    .button {
    background-color: #4CAF50; 
    border-radius: : 25px;
    color: white;
    padding: 20px;
    text-align: center;
    }

</style> -->

    <div class="container">
      <div class="row">
        <div class="card card-primary">
            <!-- <div class="card heading">
              <div class="header">
          <h1>Selamat Datang di Forum</h1>
          <h2> Disini adalah wadah berdiskusi antara anggota KAHMIPreneur</h2>
            </div>
          </div> -->
            @foreach($forum as $forum)
                <div class="list-group">
                  <a href="{{ route('forum.show', $forum->slug) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <h4 class="mb-1">{{ $forum->title }}</h4>
                     <div class="d-flex w-100 justify-content-between">
                        @foreach ($forum->tags as $tag)
                            <span class="badge badge-primary">{{$tag->name}}</span>
                        @endforeach
                    <span class="pull-right">Created by {{ $forum->user->name }} {{ date('j F Y, h:ia', strtotime($forum->created_at)) }}</span>
                    <br>
                    </div>
                  </a>
                 </div>
               </div>

            <div>
            @endforeach
            </div>
              <p> Punya Pertanyaan?</p>
              <button>Mari Berdiskusi</button>
            <br>
        </div>
      </div>
    </div>
