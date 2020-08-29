@extends('layout')

@section('content')


<!-- <h1>Adam Hardwick</h1> -->

			<!-- One -->
            <section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									
									@foreach($media as $sample)
									
									<h2>{{ $sample->name }}</h2>
									<p>
										<audio controls>
										
										<source src="{{ $sample->url }}" type="audio/ogg">
										Your browser does not support the audio element.
										</audio>
									</p>
									
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>{{ $sample->description}}</p>
								
							</div>
							@endforeach
						</div>
					</div>
				</section>
@endsection