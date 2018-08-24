{{--resources/views/disciplinas/create.blade.php--}}
<form method="POST" action="/disciplinas">
    {{ csrf_field() }} {{--Esta eh a tag de controle do laravel para toke interno--}}
    Nome: <input name="titulo">
    Ementa: <textarea name="ementa"> </textarea>
    <button type="submit"> Salvar </button>
</form>