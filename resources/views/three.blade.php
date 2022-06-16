{{-- @push('custom-scripts')


@endpush


<div id="testss"></div>
 --}}
 @if(Route::current()->getName() == 'viewer')
        @include('welcome')

    {{-- @push('custom-scripts')
        @once
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/three.js/r53/three.min.js"></script>
        @endonce
    @endpush --}}
    <div id="threejs">
        {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> --}}
        <script src="//cdnjs.cloudflare.com/ajax/libs/three.js/r53/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.138.3/build/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.138.3/examples/js/loaders/GLTFLoader.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.138.3/examples/js/controls/OrbitControls.js"></script>
        <script src="/js/threes.js" type="text/javascript"></script>

        {{-- <app></app> --}}
    </div>
@endif


