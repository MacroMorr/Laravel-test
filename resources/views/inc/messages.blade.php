<!-- Вывод ошибок -->
@if($errors->any())
    <div class="alert alert-danger mt-5">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Отображение уведомлений -->
@if(session('success'))
    <div class="alert alert-success mt-5">
        {{ session('success') }}
    </div>
    @endif
