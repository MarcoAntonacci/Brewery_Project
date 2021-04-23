<x-layout>
    <h1>ciao a tutti</h1>



        @if (session('message'))
            <div class="alert alert-success mt-5 fs-5">
                {{ session('message') }}
            </div>
        @endif
</x-layout>
