@include('inc.header')

<div id="app">
    @include('inc.nav')

    <main class="py-4">
			<div class="container">
			    <div class="row justify-content-center">
			        <div class="col-md-8">

        					@yield('content')

							</div>
			 		</div>
			</div>
    </main>
</div>

@include('inc.footer')
