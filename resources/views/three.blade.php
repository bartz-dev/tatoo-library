{{-- @push('custom-scripts')


@endpush


<div id="testss"></div>
 --}}
 @if(Route::current()->getName() == 'viewer')
        @include('welcome')

    <div id="threejs">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r53/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.138.3/build/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.138.3/examples/js/loaders/GLTFLoader.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.138.3/examples/js/controls/OrbitControls.js"></script>
        <script src="{{ asset('/js/threes.js') }}" type="text/javascript"></script>

    </div>
@endif


