@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action=" {{ url('cvs/'.$cv->id)}} " method="POST">
            <input type="hidden" name="_method" value="PUT">

            {{ csrf_field() }}

                <div class="form-group">
                    <label for=""> Titres </label>
                    <input type="text" name="titre" class="form-control" value="{{ $cv->titre}}">
                </div>

                <div class="form-group">
                    <label for=""> Présentation </label>
                    <textarea name="presentation" class="form-control" > {{ $cv->presentation}} </textarea>
                </div>

               

                 <div class="form-group">
                
                 <input type="submit" value="Modifier" class="form-control btn btn-danger">
                </div>


            </form>

        </div>
    </div>
</div>


@endsection

