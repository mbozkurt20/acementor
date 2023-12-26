<section id="sss" class="team-area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="section-title text-center pb-30">
                    <div class="line m-auto"></div>
                    <h3 class="title"><span>Frequently asked </span>questions</h3>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div id="accordion">
            @foreach($frequents as $frequent)
                <div class="card mb-4 p-3 rounded-pill" >
                    <div class="p-2 ml-5" id="headingOne-{{$frequent['id']}}">
                        <h5 class="mb-0">
                            <a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseOne-{{$frequent['id']}}" aria-expanded="true" aria-controls="collapseOne">
                              <span style="font-family: Apple">  {{$frequent['title']}}</span>
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne-{{$frequent['id']}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                           <i> {{$frequent['body']}}</i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> <!-- container -->
</section>
