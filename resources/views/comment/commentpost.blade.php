
    @extends('layouts.app')

@section('content')
<div class="container">

<div class="card col-md-8">
<form  action="/comments/{{$post->id}}/{{$order_id}}" enctype="multipart/form-data" method="post">
  @csrf
  <div class="card-body col-md-12">
  <div class="form-group row">

  <div class="col-md-12"><label class=" text-md-left">Merci de laisser votre commentaire !</label></div>

<div class="col-md-12">
                <textarea  id="comment" type="text" class="form-control @error('comment') is-invalid @enderror"  value="{{ old('comment')}}" name="comment"  autocomplete="comment" ></textarea>

                @error('comment')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>
                        </div>


                <div class="form-group row">
                            <img src="/storage/logo/good.png" style="width:50px;"   alt="">

                            <div class="col-md-2">
                                <input id="avis" type="radio" class="form-control @error('avis') is-invalid @enderror" name="avis" value="1"  autocomplete="avis" />

                                @error('avis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <img src="/storage/logo/bad.png" style="width:80px;" class=" rounded-circle mr-0 "  alt="">

                            <div class="col-md-2">
                                <input id="avis" type="radio" class="form-control @error('avis') is-invalid @enderror" name="avis" value="0"  autocomplete="avis" />

                                @error('avis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <span class="star-rating star-5">
  <input type="radio" name="rating" value="1"><i></i>
  <input type="radio" name="rating" value="2"><i></i>
  <input type="radio" name="rating" value="3"><i></i>
  <input type="radio" name="rating" value="4"><i></i>
  <input type="radio" name="rating" value="5"><i></i>
</span><br>
                <button class="btn btn-primary mt-2">Commenter</button>
    </form>
</div>
</div>



</div>
@endsection
