@if ($errors->any())
    <div class="bg-red-400 px-4 py-2 text-white shadow-md rounded-md my-4" id="validation-messages" data-cy="form-validation-errors">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('success'))
    <div class="bg-emerald-400 px-4 py-2 text-white shadow-md rounded-md my-4" id="validation-messages" data-cy="page-success-message">
        {{ session()->get('success') }}
    </div>
@endif
