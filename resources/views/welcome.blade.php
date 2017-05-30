@extends('layouts.master ')

@section('content')
<div ng-controller="InstSearchController">
	<div class="bar">
				
				<input type="text"ng-model="searchString" ng-change="change()" placeholder="Enter your search terms"/>
			</div>
			<ul>

				<li ng-repeat="result in results">
			<img ng-src="@{{result.imagePath}}" />
	     <span>@{{result.title}}</span><br>
					<p>@{{result.description}}</p>
				</li>
			</ul>

</div>


@endsection
