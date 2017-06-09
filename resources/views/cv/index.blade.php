@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1> lise de CV </h1>
			<div class="pull-right">
			
				<a href="{{ url('cvs/create')}}" class="btn btn-success" >Nouveau CV</a>

			</div>

			<div class="table-responsive">
				<table class="table table-hover">
				<thead>
					<tr class="info">
							<th> Titre </th>
							<th> Presentation </th>
							<th> Date </th>
							<th> Opération </th>
					</tr>
				</thead>
				
			    <tbody>
			    @foreach($cvs as $cv)
			    	<tr>
			    			<td> {{ $cv->titre}} </td>
			    			<td> {{ $cv->presentation}} </td>
			    			<td> {{ $cv->created_at}} </td>
			    			<td>
			    				
			    				<form action="{{ url('cvs/' .$cv->id)}}" method="post">
			    					{{csrf_field()}}
			    					{{method_field('DELETE')}}
			    					<a href="" class="btn btn-primary"> Details </a>
			    				<a href="{{ url('cvs/'.$cv->id.'/edit')}} " class="btn btn-default"> Edit </a>
			    					<button type="submit" class="btn btn-danger" >Supprimer</button>

			    				</form>
			    				
			    			</td>
			    	</tr>
			    @endforeach
			    </tbody>
			</table>
			</div>
			
		</div>
	</div>
</div>

@endsection