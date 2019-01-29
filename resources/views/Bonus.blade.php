@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Data User
			  	<div class="card-title pull-right"><a class="btn btn-primary" href="{{ route('DenganSenangHati.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<div class="table-responsive">
				  <?php

					$i;

					for ($i = 1; $i <= 24; $i++)

						{
						    if ($i % 2 == 0 && $i % 3 == 0 )
						        echo '<br>' . 'CodilityTest' . '<br>';

						    else if ($i % 2 == 0 && $i % 5 == 0 )
						        echo '<br>' . 'CodilityCoderz' . '<br>';

						    else if ($i % 3 == 0 && $i % 5 == 0 )
						        echo '<br>' . 'TestCoderz' . '<br>';

						    else if ($i % 2 == 0)
						        echo '<br>' . 'Codility' . '<br>';

						    else if (($i % 3) == 0 )
						        echo '<br>' . 'Test' . '<br>';
						      
						    else if (($i % 5) == 0)
						        echo '<br>' . 'Coderz' . '<br>';
						  
						    else
						        echo $i,"  " ;
						}
					?>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
