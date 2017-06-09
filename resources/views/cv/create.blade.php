@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action=" {{ url('cvs')}} " method="POST">

            {{ csrf_field() }}

                <div class="form-group">
                    <label for=""> Titres </label>
                    <input type="text" name="titre" class="form-control">
                </div>

                <div class="form-group">
                    <label for=""> Présentation </label>
                    <textarea name="presentation" class="form-control" ></textarea>
                </div>

               

                 <div class="form-group">
                
                 <input type="submit" value="Enregister" class="form-control btn btn-primary">
                </div>


            </form>

        </div>
    </div>
</div>


@endsection

