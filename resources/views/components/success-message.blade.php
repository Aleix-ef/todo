@if(session('successMessage'))
    <div {{ $attributes->merge(['class' => 'flex justify-center']) }}>
        <div class="min-w-[100px] bg-green-500 text-white rounded px-4 py-2 shadow">
            {{ session('successMessage') }}
        </div>
    </div>
@endif